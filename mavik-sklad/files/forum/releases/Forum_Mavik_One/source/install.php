<?php
declare(strict_types=1);
const ROOT = __DIR__;
$dbPath = ROOT . '/storage/forum.sqlite';
$errors = [];
$done = false;

if (file_exists($dbPath)) {
    $errors[] = 'Форум уже встановлено. Видаліть install.php після першого запуску.';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !file_exists($dbPath)) {
    $name = trim((string)($_POST['name'] ?? ''));
    $email = trim((string)($_POST['email'] ?? ''));
    $password = (string)($_POST['password'] ?? '');
    if ($name === '') $errors[] = 'Вкажіть ім’я адміністратора.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Вкажіть коректний email.';
    if (strlen($password) < 10) $errors[] = 'Пароль має містити щонайменше 10 символів.';
    if (!extension_loaded('pdo_sqlite')) $errors[] = 'На сервері не увімкнено PDO_SQLite.';

    if (!$errors) {
        if (!is_dir(ROOT.'/storage')) mkdir(ROOT.'/storage', 0770, true);
        $pdo = new PDO('sqlite:' . $dbPath);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('PRAGMA foreign_keys = ON; PRAGMA journal_mode = WAL;');
        $pdo->exec(<<<SQL
CREATE TABLE settings (key TEXT PRIMARY KEY, value TEXT NOT NULL);
CREATE TABLE users (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 display_name TEXT NOT NULL,
 email TEXT NOT NULL UNIQUE,
 password_hash TEXT,
 role TEXT NOT NULL DEFAULT 'member',
 created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
 blocked_at TEXT
);
CREATE TABLE identities (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 user_id INTEGER NOT NULL,
 provider TEXT NOT NULL,
 provider_uid TEXT NOT NULL,
 email TEXT,
 UNIQUE(provider, provider_uid),
 FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE
);
CREATE TABLE categories (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 slug TEXT NOT NULL UNIQUE,
 title TEXT NOT NULL,
 description TEXT NOT NULL DEFAULT '',
 sort_order INTEGER NOT NULL DEFAULT 0,
 is_visible INTEGER NOT NULL DEFAULT 1
);
CREATE TABLE topics (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 category_id INTEGER NOT NULL,
 user_id INTEGER,
 title TEXT NOT NULL,
 slug TEXT NOT NULL UNIQUE,
 body TEXT NOT NULL,
 is_locked INTEGER NOT NULL DEFAULT 0,
 is_pinned INTEGER NOT NULL DEFAULT 0,
 is_hidden INTEGER NOT NULL DEFAULT 0,
 created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
 updated_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY(category_id) REFERENCES categories(id) ON DELETE CASCADE,
 FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE SET NULL
);
CREATE TABLE posts (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 topic_id INTEGER NOT NULL,
 user_id INTEGER,
 body TEXT NOT NULL,
 parent_post_id INTEGER,
 is_hidden INTEGER NOT NULL DEFAULT 0,
 created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
 updated_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY(topic_id) REFERENCES topics(id) ON DELETE CASCADE,
 FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE SET NULL,
 FOREIGN KEY(parent_post_id) REFERENCES posts(id) ON DELETE SET NULL
);
CREATE INDEX idx_topics_category_updated ON topics(category_id, updated_at DESC);
CREATE INDEX idx_posts_topic_created ON posts(topic_id, created_at ASC);
CREATE INDEX idx_topics_activity ON topics(is_hidden, is_pinned DESC, updated_at DESC);
CREATE INDEX idx_categories_sort ON categories(is_visible, sort_order, title);
SQL);
        $stmt=$pdo->prepare('INSERT INTO users(display_name,email,password_hash,role) VALUES(?,?,?,?)');
        $stmt->execute([$name,$email,password_hash($password,PASSWORD_DEFAULT),'admin']);
        $adminId=(int)$pdo->lastInsertId();
        $settings=[
            'maintenance_mode'=>'1',
            'maintenance_message'=>'Форум готується до відкриття. Тут скоро почнуться розмови про книги, тексти й музику.',
            'maintenance_password_hash'=>'',
            'site_name'=>'forum.mavik.name',
            'main_admin_url'=>'https://mavik.name/admin/',
            'google_enabled'=>'0',
            'telegram_enabled'=>'0'
        ];
        $st=$pdo->prepare('INSERT INTO settings(key,value) VALUES(?,?)');
        foreach($settings as $k=>$v){$st->execute([$k,$v]);}
        $cats=[
            ['knyhy','Книги','Книжки, автори, жанри й усе, що хочеться дочитати до ночі.',10],
            ['poeziia','Поезія','Вірші, поетичні добірки, переклади та розмови про них.',20],
            ['blog-i-teksty','Блог і тексти','Нотатки, есе, чернетки та думки про письмо.',30],
            ['muzyka','Музика','Альбоми, виконавці, плейлисти та музика для читання.',40],
            ['shcho-chytaiete','Що читаєте зараз','Короткі враження, книжкові полиці й те, що зараз відкрито на столі.',50],
            ['pytannia-do-avtora','Питання до автора','Запитання про тексти, книги та роботу над ними.',60],
            ['vilne','Вільне обговорення','Теми, яким тісно в інших розділах.',70]
        ];
        $st=$pdo->prepare('INSERT INTO categories(slug,title,description,sort_order) VALUES(?,?,?,?)');
        foreach($cats as $c){$st->execute($c);}

        $catMap=[]; foreach($pdo->query('SELECT id,slug FROM categories') as $r){$catMap[$r['slug']]=$r['id'];}
        $topics=[
            ['knyhy','Що почитати перед сном','shcho-pochytaty-pered-snom','Що у вас працює перед сном: коротка проза, роман, поезія? Збираємо живі рекомендації.'],
            ['knyhy','Улюблені сучасні українські автори','uliubleni-suchasni-ukrainski-avtory','Кого читаєте зараз і кому довіряєте без довгих рекомендацій?'],
            ['muzyka','Яка музика пасує до читання','yaka-muzyka-pasuie-do-chytannia','Тиша, джаз, ембієнт чи щось зовсім інше?'],
            ['knyhy','Сильні фінали в романах','sylni-finaly-v-romanakh','Без спойлерів: які фінали ви пам’ятаєте роками і чому?']
        ];
        $st=$pdo->prepare('INSERT INTO topics(category_id,user_id,title,slug,body) VALUES(?,?,?,?,?)');
        foreach($topics as $t){$st->execute([$catMap[$t[0]],$adminId,$t[1],$t[2],$t[3]]);}
        $done=true;
    }
}
?><!doctype html><html lang="uk"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Встановлення форуму</title><link rel="stylesheet" href="/assets/style.css"><meta name="robots" content="noindex,nofollow"></head><body><main class="install-wrap"><section class="panel install-card"><h1>forum.mavik.name</h1><p class="muted">Перший запуск. Після встановлення форум автоматично залишиться закритим для публіки.</p>
<?php if($done): ?><div class="notice success">Встановлення завершено. <a href="/admin/login.php">Увійти в адмінку</a>.</div><p class="muted">Після перевірки видаліть файл <code>install.php</code>.</p>
<?php else: ?><?php foreach($errors as $er): ?><div class="notice danger"><?=htmlspecialchars($er,ENT_QUOTES,'UTF-8')?></div><?php endforeach; ?>
<?php if(!file_exists($dbPath)): ?><form method="post" class="stack"><label>Ім’я адміністратора<input name="name" required></label><label>Email<input type="email" name="email" required></label><label>Пароль<input type="password" name="password" minlength="10" required></label><button class="btn primary">Створити форум</button></form><?php endif; ?><?php endif; ?></section></main></body></html>
