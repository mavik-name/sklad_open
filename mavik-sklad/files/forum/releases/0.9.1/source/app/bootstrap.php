<?php
declare(strict_types=1);

require __DIR__.'/session.php';

const APP_ROOT = __DIR__ . '/..';
const DB_PATH = APP_ROOT . '/storage/forum.sqlite';
require __DIR__.'/upgrade.php';

function db(): PDO {
    static $pdo = null;
    if ($pdo instanceof PDO) return $pdo;
    if (!file_exists(DB_PATH)) {
        header('Location: /install.php');
        exit;
    }
    $pdo = new PDO('sqlite:' . DB_PATH, null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    $pdo->exec('PRAGMA foreign_keys = ON');
    $pdo->exec('PRAGMA journal_mode = WAL');
    $pdo->exec('PRAGMA busy_timeout = 5000');
    forum_upgrade($pdo);
    return $pdo;
}


function setting(string $key, ?string $default = null): ?string {
    $stmt = db()->prepare('SELECT value FROM settings WHERE key = :key');
    $stmt->execute([':key' => $key]);
    $row = $stmt->fetch();
    return $row ? (string)$row['value'] : $default;
}

function set_setting(string $key, string $value): void {
    $stmt = db()->prepare('INSERT INTO settings(key, value) VALUES(:key,:value) ON CONFLICT(key) DO UPDATE SET value=excluded.value');
    $stmt->execute([':key'=>$key, ':value'=>$value]);
}

function e(?string $v): string {
    return htmlspecialchars((string)$v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
function authenticated_user(): ?array {
    static $loaded=false,$user=null;
    if ($loaded) return $user;
    $loaded=true;
    $id=$_SESSION['user_id']??$_SESSION['admin_id']??null;
    if (!$id) return null;
    $st=db()->prepare('SELECT * FROM users WHERE id=? AND blocked_at IS NULL');$st->execute([$id]);
    $user=$st->fetch()?:null;
    if (!$user) unset($_SESSION['user_id'],$_SESSION['admin_id']);
    return $user;
}
function is_admin(): bool { return (authenticated_user()['role']??'')==='admin'; }
function is_logged_in(): bool { return authenticated_user()!==null; }
function current_user_id(): ?int {
    return isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : (isset($_SESSION['admin_id']) ? (int)$_SESSION['admin_id'] : null);
}
function member_required(): void { if (!is_logged_in()) { header('Location: /auth.php'); exit; } }
function admin_required(): void { if (!is_admin()) { header('Location: /admin/login.php'); exit; } }

function csrf_token(): string {
    if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(24));
    return (string)$_SESSION['csrf'];
}
function csrf_check(): void {
    if (empty($_SESSION['csrf']) || !hash_equals((string)$_SESSION['csrf'], (string)($_POST['csrf'] ?? ''))) {
        http_response_code(419);
        exit('Невірний CSRF-токен. Оновіть сторінку.');
    }
}

function maintenance_gate(): void {
    if (setting('maintenance_mode', '1') !== '1') return;
    header('X-Robots-Tag: noindex, nofollow, noarchive', true);
    header('Cache-Control: private, no-store');
    if (is_admin()) return;
    $guestPassHash = setting('maintenance_password_hash', '');
    if ($guestPassHash && hash_equals(hash('sha256',$guestPassHash),(string)($_SESSION['maintenance_ok']??''))) return;
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['maintenance_password']) && $guestPassHash) {
        if (password_verify((string)$_POST['maintenance_password'], $guestPassHash)) {
            session_regenerate_id(true);
            $_SESSION['maintenance_ok'] = hash('sha256',$guestPassHash);
            header('Location: /');
            exit;
        }
    }
    header('X-Robots-Tag: noindex, nofollow, noarchive', true);
    http_response_code(503);
    header('Retry-After: 3600');
    require APP_ROOT . '/maintenance.php';
    exit;
}

function category_icon(string $slug): string {
    $common = 'viewBox="0 0 24 24" aria-hidden="true" focusable="false"';
    $icons = [
        'knyhy' => '<svg '.$common.'><path d="M3.5 5.5c2.7-1 5.5-.6 8 1.2v12c-2.5-1.8-5.3-2.2-8-1.2zM20.5 5.5c-2.7-1-5.5-.6-8 1.2v12c2.5-1.8 5.3-2.2 8-1.2z"/></svg>',
        'poeziia' => '<svg '.$common.'><path d="M20 4C13 4 7 8 5 15c4 1 8 0 11-3 2-2 3-5 4-8ZM5 19c3-5 7-8 12-11"/></svg>',
        'blog-i-teksty' => '<svg '.$common.'><path d="M6 3.5h8l4 4V20.5H6zM14 3.5v4h4M9 12h6M9 15.5h6"/></svg>',
        'muzyka' => '<svg '.$common.'><path d="M9 18V6l9-2v12M9 9l9-2M6.5 20a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM15.5 18a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/></svg>',
        'shcho-chytaiete' => '<svg '.$common.'><path d="M5 8h11v7a4 4 0 0 1-4 4H9a4 4 0 0 1-4-4zM16 10h2a2 2 0 0 1 0 4h-2M7 4c0 1 1 1 1 2M11 4c0 1 1 1 1 2M15 4c0 1 1 1 1 2M4 21h14"/></svg>',
        'pytannia-do-avtora' => '<svg '.$common.'><circle cx="12" cy="12" r="9"/><path d="M9.8 9a2.4 2.4 0 1 1 3.6 2.1c-.9.5-1.4 1-1.4 2M12 17h.01"/></svg>',
        'vilne' => '<svg '.$common.'><path d="M4 5.5h16v10H9l-4.5 3v-3H4z"/></svg>',
    ];
    return $icons[$slug] ?? '<svg '.$common.'><circle cx="12" cy="12" r="8"/></svg>';
}

function render_forum_text(string $text): string {
    $lines = preg_split('/\R/u', $text) ?: [];
    $out = '';
    $quote = [];
    $flushQuote = static function() use (&$quote, &$out): void {
        if (!$quote) return;
        $out .= '<blockquote class="post-quote">' . implode('<br>', array_map('e', $quote)) . '</blockquote>';
        $quote = [];
    };
    foreach ($lines as $line) {
        if (preg_match('/^>\s?(.*)$/u', $line, $m)) {
            $quote[] = $m[1];
            continue;
        }
        $flushQuote();
        if (trim($line) === '') $out .= '<br>';
        else $out .= '<div class="post-line">'.e($line).'</div>';
    }
    $flushQuote();
    return $out;
}

function format_forum_date(string $date): string {
    $ts = strtotime($date);
    if (!$ts) return $date;
    return date('d.m.Y · H:i', $ts);
}

function forum_header(string $title): void {
    $maintenance = setting('maintenance_mode','1') === '1';
    $accountLabel = is_logged_in() ? 'Профіль' : 'Увійти';
    $accountUrl = is_logged_in() ? '/profile.php' : '/auth.php';
    ?>
<!doctype html>
<html lang="uk">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
<title><?=e($title)?> — Форум MaVik</title>
<link rel="icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/assets/app/apple-touch-icon.png"><link rel="manifest" href="/manifest.webmanifest">
<meta name="theme-color" content="#0b0b0c">
<link rel="stylesheet" href="/assets/style.css?v=0.9.1.7"><link rel="stylesheet" href="/assets/release.css?v=0.9.1.6">
<?php if ($maintenance): ?><meta name="robots" content="noindex,nofollow,noarchive"><?php endif; ?>
</head>
<body class="<?=basename($_SERVER['SCRIPT_NAME']??'')==='topic.php'?'topic-page':'forum-page'?>">
<header class="site-header nav">
  <div class="wrap header-inner nav-inner">
    <a class="site-brand home-reader-brand" href="/" aria-label="MaVik — Макарчук Віктор">
      <span class="site-brand-mark"><img src="/assets/brand/mavik-mvv-gold.svg" width="42" height="42" alt=""></span>
      <span class="site-brand-copy"><strong><span class="forum-brand-prefix">Форум. </span><em>MaVik</em></strong><span>МАКАРЧУК ВІКТОР</span></span>
    </a>
    <nav class="desktop-menu menu" aria-label="Головне меню">
      <a href="https://mavik.name/">Головна</a>
      <a href="https://mavik.name/books/">Книги</a>
      <a href="https://mavik.name/blog/">Блог</a>
      <a href="https://mavik.name/music/">Музика</a>
      <a class="active" href="/">Форум</a>
      <a href="https://mavik.name/about/">Про автора</a>
      <a class="coffee-nav" href="https://mavik.name/support" aria-label="Пригостити автора кавою" title="Пригостити автора кавою"><img src="/assets/icons/coffee.svg" alt="" width="42" height="42"></a>
    </nav>
    <a class="header-search" href="/search.php" aria-label="Пошук"><svg viewBox="0 0 24 24"><circle cx="10" cy="10" r="7"/><path d="m15 15 6 6"/></svg></a>
    <a class="account-link" href="<?=e($accountUrl)?>"><?=e($accountLabel)?></a>
    <?php if(!is_logged_in()):?><a class="btn register-nav" href="/auth.php?mode=register">Зареєструватися</a><?php endif;?>
    <button aria-controls="mobileMenu" aria-expanded="false" aria-label="Відкрити меню" class="mobile-menu-toggle" id="mobileMenuToggle" type="button"><span></span><span></span><span></span></button>
  </div>
  <nav aria-hidden="true" aria-label="Мобільне меню" class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-inner">
      <a href="https://mavik.name/">Головна</a>
      <a href="https://mavik.name/books/">Книги</a>
      <a href="https://mavik.name/blog/">Блог</a>
      <a href="https://mavik.name/music/">Музика</a>
      <a class="active" href="/">Форум</a>
      <a href="https://mavik.name/about/">Про автора</a>
      <a href="<?=e($accountUrl)?>"><?=e($accountLabel)?></a>
    </div>
  </nav>
</header>
<?php if ($maintenance && is_admin()): ?><div class="maintenance-bar">Форум закритий для публіки · <a href="/admin/settings.php">Режим доступу</a></div><?php endif; ?>
<main class="wrap site-main" id="top">
<?php
}

function forum_footer(): void { ?>
</main>
<div class="mobile-landscape" role="img" aria-label="Кращі історії починаються з розмов — mavik.name"></div>
<footer class="site-footer">
  <div class="wrap footer-copy">
    <div>© 2026 · Макарчук Віктор - MaVik®</div>
    <div>Всі права застережено</div>
    <div class="footer-links"><a href="https://mavik.name/mavik/">Про MaVik</a><i>·</i><a href="https://mavik.name/copyright/">Правова охорона творчого доробку</a><i>·</i><a href="https://mavik.name/privacy/">Приватність</a><i>·</i><a href="mailto:viktor@mavik.name">viktor@mavik.name</a><i>·</i><a href="/rules.php">Правила форуму</a></div>
  </div>
</footer>
<div class="floating-controls" aria-label="Швидкі дії">
  <button class="floating-btn to-top" id="toTop" type="button" aria-label="Догори" title="Догори"><img src="/assets/icons/arrow-up.svg" alt="" width="48" height="48"></button>
</div>
<script>
(()=>{
  const toggle=document.getElementById('mobileMenuToggle');
  const menu=document.getElementById('mobileMenu');
  const close=()=>{if(!toggle||!menu)return;menu.classList.remove('open');toggle.classList.remove('open');toggle.setAttribute('aria-expanded','false');toggle.setAttribute('aria-label','Відкрити меню');menu.setAttribute('aria-hidden','true');document.documentElement.classList.remove('menu-open')};
  if(toggle&&menu){toggle.addEventListener('click',()=>{const isOpen=menu.classList.contains('open');if(isOpen){close();return;}menu.classList.add('open');toggle.classList.add('open');toggle.setAttribute('aria-expanded','true');toggle.setAttribute('aria-label','Закрити меню');menu.setAttribute('aria-hidden','false');document.documentElement.classList.add('menu-open')});menu.querySelectorAll('a').forEach(a=>a.addEventListener('click',close));window.addEventListener('resize',()=>{if(window.innerWidth>780)close()});}
  const top=document.getElementById('toTop');
  if(top){const sync=()=>top.classList.toggle('visible',window.scrollY>420);window.addEventListener('scroll',sync,{passive:true});sync();top.addEventListener('click',()=>window.scrollTo({top:0,behavior:'smooth'}));}
})();
</script>
<script src="/assets/forum.js?v=0.9.1" defer></script></body></html>
<?php }

