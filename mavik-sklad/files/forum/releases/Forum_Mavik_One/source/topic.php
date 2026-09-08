<?php
require __DIR__.'/app/bootstrap.php';maintenance_gate();
$slug=(string)($_GET['slug']??'');
$st=db()->prepare('SELECT t.*,c.title category_title,c.slug category_slug,c.description,u.display_name,u.avatar_path FROM topics t JOIN categories c ON c.id=t.category_id LEFT JOIN users u ON u.id=t.user_id WHERE t.slug=? AND t.is_hidden=0 AND c.is_visible=1');
$st->execute([$slug]);$topic=$st->fetch();if(!$topic){http_response_code(404);exit('Тему не знайдено');}
$id=(int)$topic['id'];$error='';
if($_SERVER['REQUEST_METHOD']==='POST'){
 require_writable_forum();csrf_check();$action=(string)($_POST['action']??'reply');
 if($action==='subscribe'){
  $s=db()->prepare('SELECT 1 FROM subscriptions WHERE user_id=? AND topic_id=?');$s->execute([current_user_id(),$id]);
  db()->prepare($s->fetchColumn()?'DELETE FROM subscriptions WHERE user_id=? AND topic_id=?':'INSERT INTO subscriptions(user_id,topic_id) VALUES(?,?)')->execute([current_user_id(),$id]);
  header('Location:/topic.php?slug='.urlencode($slug));exit;
 }
 if($topic['is_locked']){http_response_code(403);$error='Тему закрито для відповідей.';}
 else {
  $body=trim((string)($_POST['body']??''));$parent=(int)($_POST['reply_to_post_id']??0);$quote=(int)($_POST['quote_post_id']??0);$quoteTopic=!empty($_POST['quote_topic']);
  if($body==='' || mb_strlen($body)>50000)$error='Відповідь має містити від 1 до 50 000 символів.';
  foreach([$parent,$quote] as $pid)if($pid){$s=db()->prepare('SELECT 1 FROM posts WHERE id=? AND topic_id=? AND is_hidden=0');$s->execute([$pid,$id]);if(!$s->fetchColumn())$error='Повідомлення, на яке ви відповідаєте, недоступне.';}
  if(!$error){db()->beginTransaction();try{
   db()->prepare('INSERT INTO posts(topic_id,user_id,body,parent_post_id,reply_to_post_id,quote_post_id,quote_topic) VALUES(?,?,?,?,?,?,?)')->execute([$id,current_user_id(),$body,$parent?:null,$parent?:null,$quote?:null,$quoteTopic?1:0]);$newId=(int)db()->lastInsertId();
   db()->prepare('UPDATE topics SET updated_at=CURRENT_TIMESTAMP,last_activity_at=CURRENT_TIMESTAMP WHERE id=?')->execute([$id]);db()->commit();
  }catch(Throwable $e){db()->rollBack();throw $e;}header('Location:/topic.php?slug='.urlencode($slug).'#post-'.$newId);exit;}
 }
}
if(empty($_SESSION['viewed_topics'][$id])){db()->prepare('UPDATE topics SET views=views+1 WHERE id=?')->execute([$id]);$_SESSION['viewed_topics'][$id]=true;}
$st=db()->prepare('SELECT p.*,u.display_name,u.avatar_path,u.created_at joined,(SELECT COUNT(*) FROM posts pc WHERE pc.user_id=u.id AND pc.is_hidden=0) post_count FROM posts p LEFT JOIN users u ON u.id=p.user_id WHERE p.topic_id=? AND p.is_hidden=0 ORDER BY p.created_at,p.id');$st->execute([$id]);$posts=$st->fetchAll();$byId=[];foreach($posts as $p)$byId[(int)$p['id']]=$p;
$branch=(int)($_GET['branch']??0);$selected=[];
if($branch && isset($byId[$branch])){
 $cursor=$branch;while(isset($byId[$cursor])&&!isset($selected[$cursor])){$selected[$cursor]=true;$cursor=(int)$byId[$cursor]['reply_to_post_id'];}
 $desc=[$branch=>true];do{$changed=false;foreach($posts as $p)if(isset($desc[(int)$p['reply_to_post_id']])&&!isset($desc[(int)$p['id']])){$desc[(int)$p['id']]=true;$changed=true;}}while($changed);
 $selected+=$desc;$posts=array_values(array_filter($posts,fn($p)=>isset($selected[(int)$p['id']])));
}elseif($branch){http_response_code(404);exit('Гілку не знайдено');}
$sub=false;if(is_logged_in()){$st=db()->prepare('SELECT 1 FROM subscriptions WHERE user_id=? AND topic_id=?');$st->execute([current_user_id(),$id]);$sub=(bool)$st->fetchColumn();}
$canReply=is_logged_in()&&!$topic['is_locked']&&(setting('maintenance_mode','1')!=='1'||is_admin());
function post_actions(array $p,bool $op=false): void {global $canReply,$slug;
 $pid=$op?0:(int)$p['id'];?><div class="post-actions"><?php if($canReply):?><button type="button" data-reply="<?=$pid?>" data-author="<?=e($p['display_name']??'Учасник')?>">↶ Відповісти</button><button type="button" data-quote-post="<?=$pid?>" data-author="<?=e($p['display_name']??'Учасник')?>">❝ Цитувати</button><?php else:?><a class="btn" href="/auth.php">Відповісти</a><a class="btn" href="/auth.php">❝ Цитувати</a><?php endif;?><?php if(!$op):?><a class="branch-link" href="?slug=<?=urlencode($slug)?>&amp;branch=<?=$pid?>#post-<?=$pid?>">Показати гілку</a><?php endif;?><?php if(is_logged_in()):?><a class="report-link" href="/report.php?topic=<?=(int)($op?$p['id']:$p['topic_id'])?>&amp;post=<?=$pid?>">Поскаржитися</a><?php endif;?></div><?php
}
function quote_card(array $p,bool $op=false): void {?><blockquote class="post-quote"><cite>Повідомлення від <a href="#<?=$op?'post-topic':'post-'.(int)$p['id']?>"><?=e($p['display_name']??'Учасник')?> »</a></cite><p><?=e(excerpt($p['body'],600))?></p></blockquote><?php }
forum_header($topic['title']);
?><section class="page-title topic-title"><nav class="breadcrumbs"><a href="/">⌂</a><span>›</span><a href="/">Форум</a><span>›</span><a href="/category.php?slug=<?=urlencode($topic['category_slug'])?>"><?=e($topic['category_title'])?></a><span>›</span><span><?=e($topic['title'])?></span></nav><h1><?=e($topic['title'])?></h1><div class="topic-heading-bottom"><p><?=e($topic['description'])?></p><div class="topic-heading-actions"><?php if(is_logged_in()):?><form method="post"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="action" value="subscribe"><button class="btn"><svg class="ui-icon" viewBox="0 0 24 24"><path d="M5 17h14l-2-3V9a5 5 0 0 0-10 0v5zM10 20h4"/></svg> <?=$sub?'Відписатися':'Підписатися'?></button></form><?php else:?><a class="btn" href="/auth.php"><svg class="ui-icon" viewBox="0 0 24 24"><path d="M5 17h14l-2-3V9a5 5 0 0 0-10 0v5zM10 20h4"/></svg> Підписатися</a><?php endif;?><a class="btn primary" href="<?=$canReply?'#replyForm':'/auth.php'?>"><svg class="ui-icon" viewBox="0 0 24 24"><path d="m4 16 12-12 4 4L8 20H4zM13 7l4 4"/></svg> Відповісти</a></div></div></section>
<?php if($error):?><div class="notice danger"><?=e($error)?></div><?php endif;?>
<?php if($branch):?><p class="panel">Гілка розмови · <a href="?slug=<?=urlencode($slug)?>#post-<?=$branch?>">Показати всю тему</a></p><?php endif;?>
<article class="post-card topic-op" id="post-topic"><div class="post-author"><?=avatar($topic['avatar_path'],$topic['display_name']??'Автор')?><strong><?=e($topic['display_name']??'Автор')?></strong><span>Автор теми</span></div><div class="post-content"><div class="post-meta"><?=e(format_forum_date($topic['created_at']))?><a href="#post-topic">#1</a></div><div class="post-body"><?=render_forum_text($topic['body'])?></div><?php post_actions($topic,true);?></div></article>
<?php foreach($posts as $p):?><article class="post-card" id="post-<?=(int)$p['id']?>"><div class="post-author"><?=avatar($p['avatar_path'],$p['display_name']??'Учасник')?><strong><?=e($p['display_name']??'Учасник')?></strong><span>Учасник</span><div class="profile-metadata"><div class="profile-registration-label">Реєстрація:</div><div class="profile-registration-date"><?=e(substr($p['joined']??'',0,10))?></div>Повідомлень: <?=(int)$p['post_count']?></div></div><div class="post-content"><div class="post-meta"><?=e(format_forum_date($p['created_at']))?><a href="#post-<?=(int)$p['id']?>">#<?=(int)$p['id']?></a></div>
<?php $parent=$byId[(int)$p['reply_to_post_id']]??null;if($parent):?><a class="reply-context" href="#post-<?=(int)$parent['id']?>">↪ <?=e($parent['display_name']??'Учасник')?>: <?=e(excerpt($parent['body'],120))?></a><?php endif;?>
<?php if($p['quote_topic'])quote_card($topic,true);if(isset($byId[(int)$p['quote_post_id']]))quote_card($byId[(int)$p['quote_post_id']]);?>
<div class="post-body"><?=render_forum_text($p['body'])?></div><?php if($p['updated_at']!==$p['created_at']):?><p class="edited">Останнє редагування: <?=e(format_forum_date($p['updated_at']))?></p><?php endif;?><?php post_actions($p);?></div></article><?php endforeach;?>
<?php if($canReply):?><form method="post" class="panel stack reply-form" id="replyForm"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="reply_to_post_id" id="replyParent" value=""><input type="hidden" name="quote_post_id" id="quotePost" value=""><input type="hidden" name="quote_topic" id="quoteTopic" value=""><div class="reply-target"><span id="replyTarget">Відповідь у тему</span> <button type="button" id="clearReply">Скасувати прив’язку</button></div><label>Ваше повідомлення<textarea id="replyBody" name="body" rows="6" maxlength="50000" required><?=e($_POST['body']??'')?></textarea></label><button class="btn primary">Відповісти</button></form><?php elseif($topic['is_locked']):?><p class="panel">Тему закрито для нових відповідей.</p><?php endif;?>
<?php $st=db()->prepare('SELECT id,slug FROM topics WHERE category_id=? AND is_hidden=0 ORDER BY is_pinned DESC,last_activity_at DESC,id DESC');$st->execute([$topic['category_id']]);$siblings=$st->fetchAll();$pos=array_search($id,array_map('intval',array_column($siblings,'id')),true);?>
<nav class="pagination" aria-label="Сусідні теми"><?php if($pos!==false&&$pos>0):?><a href="?slug=<?=urlencode($siblings[$pos-1]['slug'])?>">‹ Попередня тема</a><?php endif;?><?php if($pos!==false&&isset($siblings[$pos+1])):?><a href="?slug=<?=urlencode($siblings[$pos+1]['slug'])?>">Наступна тема ›</a><?php endif;?></nav>
<?php forum_footer();

