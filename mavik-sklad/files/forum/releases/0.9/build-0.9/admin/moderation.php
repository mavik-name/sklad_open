<?php
require __DIR__.'/../app/bootstrap.php';admin_required();
if($_SERVER['REQUEST_METHOD']==='POST'){csrf_check();$id=(int)($_POST['id']??0);$action=$_POST['action']??'';
 if($action==='resolve')db()->prepare("UPDATE reports SET status='resolved' WHERE id=?")->execute([$id]);
 if($action==='hide')db()->prepare('UPDATE posts SET is_hidden=1-is_hidden WHERE id=?')->execute([$id]);
 if($action==='edit'&&trim((string)($_POST['body']??''))!=='')db()->prepare('UPDATE posts SET body=?,updated_at=CURRENT_TIMESTAMP WHERE id=?')->execute([trim($_POST['body']),$id]);
}
$reports=db()->query("SELECT r.*,t.title FROM reports r JOIN topics t ON t.id=r.topic_id ORDER BY r.status='open' DESC,r.created_at DESC")->fetchAll();
$posts=db()->query('SELECT p.*,u.display_name,t.title FROM posts p LEFT JOIN users u ON u.id=p.user_id JOIN topics t ON t.id=p.topic_id ORDER BY p.id DESC LIMIT 100')->fetchAll();forum_header('Модерація');
?><section class="page-title"><a href="/admin/">← Адмінка</a><h1>Модерація</h1></section><h2>Скарги</h2><?php foreach($reports as $r):?><article class="panel"><h3><?=e($r['title'])?></h3><p><?=e($r['reason'])?></p><small><?=e($r['status'])?></small><form method="post"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="id" value="<?=(int)$r['id']?>"><button name="action" value="resolve" class="btn">Закрити скаргу</button></form></article><?php endforeach;?><h2>Повідомлення</h2><?php foreach($posts as $p):?><article class="panel"><h3><?=e($p['title'])?> · <?=e($p['display_name'])?></h3><form method="post" class="stack"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="id" value="<?=(int)$p['id']?>"><textarea name="body" required><?=e($p['body'])?></textarea><div><button name="action" value="edit" class="btn">Зберегти текст</button> <button name="action" value="hide" class="btn"><?=$p['is_hidden']?'Показати':'Приховати'?></button></div></form></article><?php endforeach;forum_footer();
