<?php
declare(strict_types=1);

/** Additive, transactional upgrade: existing IDs, content and credentials stay intact. */
function forum_upgrade(PDO $pdo): void {
    $pdo->exec('CREATE TABLE IF NOT EXISTS user_presence (user_id INTEGER PRIMARY KEY REFERENCES users(id) ON DELETE CASCADE, seen_at INTEGER NOT NULL)');
    if ((int)$pdo->query('PRAGMA user_version')->fetchColumn() >= 9) return;
    $pdo->exec('BEGIN IMMEDIATE');
    try {
        $fields = [
            'posts'=>['parent_post_id'=>'INTEGER','reply_to_post_id'=>'INTEGER REFERENCES posts(id) ON DELETE SET NULL','quote_post_id'=>'INTEGER REFERENCES posts(id) ON DELETE SET NULL','quote_topic'=>'INTEGER NOT NULL DEFAULT 0'],
            'topics'=>['last_activity_at'=>'TEXT','views'=>'INTEGER NOT NULL DEFAULT 0'],
            'users'=>['avatar_path'=>'TEXT','rules_accepted_at'=>'TEXT'],
            'categories'=>['icon'=>'TEXT'],
            'identities'=>['avatar_path'=>'TEXT'],
        ];
        foreach ($fields as $table=>$columns) {
            $existing = array_column($pdo->query("PRAGMA table_info($table)")->fetchAll(), 'name');
            foreach ($columns as $column=>$type) if (!in_array($column,$existing,true)) $pdo->exec("ALTER TABLE $table ADD COLUMN $column $type");
        }
        $pdo->exec('UPDATE posts SET reply_to_post_id=parent_post_id WHERE reply_to_post_id IS NULL AND parent_post_id IN (SELECT id FROM posts)');
        $pdo->exec('UPDATE topics SET last_activity_at=MAX(created_at,COALESCE((SELECT MAX(p.created_at) FROM posts p WHERE p.topic_id=topics.id),created_at)) WHERE last_activity_at IS NULL');
        $pdo->exec('CREATE INDEX IF NOT EXISTS idx_topics_last_activity ON topics(is_pinned DESC,last_activity_at DESC,id DESC)');
        $pdo->exec('CREATE INDEX IF NOT EXISTS idx_posts_reply ON posts(topic_id,reply_to_post_id)');
        $pdo->exec('CREATE TABLE IF NOT EXISTS subscriptions(user_id INTEGER NOT NULL REFERENCES users(id) ON DELETE CASCADE,topic_id INTEGER NOT NULL REFERENCES topics(id) ON DELETE CASCADE,PRIMARY KEY(user_id,topic_id))');
        $pdo->exec("CREATE TABLE IF NOT EXISTS reports(id INTEGER PRIMARY KEY, user_id INTEGER REFERENCES users(id),topic_id INTEGER NOT NULL REFERENCES topics(id),post_id INTEGER REFERENCES posts(id),reason TEXT NOT NULL,status TEXT NOT NULL DEFAULT 'open',created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP)");
        $pdo->exec('PRAGMA user_version=9');
        $pdo->exec('COMMIT');
    } catch (Throwable $error) { $pdo->exec('ROLLBACK'); throw $error; }
}

function avatar(?string $path, string $name='', string $class='', ?int $userId=null): string {
    $valid = $path && preg_match('~^/assets/avatars/[a-f0-9]{32}\.webp$~D',$path);
    $online=false;
    if($userId){$st=db()->prepare('SELECT 1 FROM user_presence JOIN users ON users.id=user_presence.user_id WHERE user_id=? AND seen_at>=? AND users.blocked_at IS NULL');$st->execute([$userId,time()-300]);$online=(bool)$st->fetchColumn();}
    $img = '<img class="avatar '.e($class).($valid?'':' default-avatar').'" src="'.e($valid?$path:'/assets/default-mask.svg').'" alt="'.e($name).'" loading="lazy">';
    return $userId ? '<span class="avatar-presence '.e($class).'">'.$img.($online?'<i class="online-dot" role="img" aria-label="На сайті протягом останніх 5 хвилин" title="На сайті протягом останніх 5 хвилин"></i>':'').'</span>' : $img;
}
function excerpt(string $text, int $length=180): string {
    return mb_strimwidth(preg_replace('/\s+/u',' ',trim($text))??'',0,$length,'…','UTF-8');
}
function require_writable_forum(): void {
    member_required();
    if (setting('maintenance_mode','1')==='1' && !is_admin()) {http_response_code(403);exit('Запис закрито до відкриття форуму.');}
}
