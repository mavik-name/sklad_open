<?php
require __DIR__.'/app/bootstrap.php'; maintenance_gate();
$slug=(string)($_GET['slug']??''); $st=db()->prepare('SELECT * FROM categories WHERE slug=? AND is_visible=1'); $st->execute([$slug]); $cat=$st->fetch(); if(!$cat){http_response_code(404);exit('Категорію не знайдено');}
$st=db()->prepare('SELECT t.*,u.display_name,u.avatar_path,lu.display_name last_author,lu.avatar_path last_avatar,lp.user_id last_user_id,lp.id last_post_id,(SELECT COUNT(*) FROM posts p WHERE p.topic_id=t.id AND p.is_hidden=0) replies FROM topics t LEFT JOIN users u ON u.id=t.user_id LEFT JOIN posts lp ON lp.id=(SELECT p2.id FROM posts p2 WHERE p2.topic_id=t.id AND p2.is_hidden=0 ORDER BY p2.created_at DESC,p2.id DESC LIMIT 1) LEFT JOIN users lu ON lu.id=lp.user_id WHERE t.category_id=? AND t.is_hidden=0 ORDER BY t.is_pinned DESC,t.last_activity_at DESC,t.id DESC');$st->execute([$cat['id']]);$topics=$st->fetchAll();
forum_header($cat['title']); ?>
<section class="page-title"><a href="/">← Форум</a><h1><?=e($cat['title'])?></h1><p><?=e($cat['description'])?></p></section>
<div class="category-toolbar"><a class="btn primary" href="/new-topic.php?category_id=<?=(int)$cat['id']?>">+ Створити тему</a></div>
<div class="category-topics">
<div class="category-list-head"><span>Теми</span><span>Статистика</span><span>Останнє повідомлення</span></div>
<?php foreach($topics as $t): ?>
  <a class="category-topic-row" href="/topic.php?slug=<?=urlencode($t['slug'])?>">
    <div class="category-topic-summary"><?=avatar($t['avatar_path'],$t['display_name']??'Автор','',(int)$t['user_id'])?><div class="category-topic-copy">
      <strong><?=e($t['title'])?></strong>
      <span>Створив <?=e($t['display_name']??'Автор')?> · <?=e(format_forum_date($t['created_at']))?><?=$t['is_pinned']?' · закріплено':''?></span>
    </div></div>
    <div class="category-topic-meta">
      <span class="category-topic-replies"><?=(int)$t['replies']?> відповідей</span>
      <span><?=(int)$t['views']?> переглядів</span>
    </div>
    <div class="category-topic-last"><?=avatar($t['last_post_id']?$t['last_avatar']:$t['avatar_path'],$t['last_author']??$t['display_name']??'Учасник','',(int)($t['last_user_id']??$t['user_id']))?><div><span><?=e($t['last_author']??$t['display_name']??'Учасник')?></span>
      <time datetime="<?=e(str_replace(' ','T',$t['last_activity_at']))?>"><?=e(format_forum_date($t['last_activity_at']))?></time>
    </div><span class="category-topic-arrow" aria-hidden="true">»</span></div>
  </a>
<?php endforeach; ?>
<?php if(!$topics):?><p class="category-topics-empty">У цій категорії поки немає тем.</p><?php endif;?>
</div>
<?php forum_footer(); ?>
