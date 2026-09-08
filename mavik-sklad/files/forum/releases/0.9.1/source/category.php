<?php
require __DIR__.'/app/bootstrap.php'; maintenance_gate();
$slug=(string)($_GET['slug']??''); $st=db()->prepare('SELECT * FROM categories WHERE slug=? AND is_visible=1'); $st->execute([$slug]); $cat=$st->fetch(); if(!$cat){http_response_code(404);exit('Категорію не знайдено');}
$st=db()->prepare('SELECT t.*,u.display_name,(SELECT COUNT(*) FROM posts p WHERE p.topic_id=t.id AND p.is_hidden=0) replies FROM topics t LEFT JOIN users u ON u.id=t.user_id WHERE t.category_id=? AND t.is_hidden=0 ORDER BY t.is_pinned DESC,t.last_activity_at DESC,t.id DESC');$st->execute([$cat['id']]);$topics=$st->fetchAll();
forum_header($cat['title']); ?>
<section class="page-title"><a href="/">← Форум</a><h1><?=e($cat['title'])?></h1><p><?=e($cat['description'])?></p></section>
<div class="category-topics">
<?php foreach($topics as $t): ?>
  <a class="category-topic-row" href="/topic.php?slug=<?=urlencode($t['slug'])?>">
    <div class="category-topic-copy">
      <strong><?=e($t['title'])?></strong>
      <span><?=e($t['display_name']??'Автор')?><?=$t['is_pinned']?' · закріплено':''?></span>
    </div>
    <div class="category-topic-meta">
      <span class="category-topic-replies"><?=(int)$t['replies']?> відповідей</span>
      <time datetime="<?=e(str_replace(' ','T',$t['last_activity_at']))?>"><?=e(format_forum_date($t['last_activity_at']))?></time>
    </div>
    <span class="category-topic-arrow" aria-hidden="true">›</span>
  </a>
<?php endforeach; ?>
<?php if(!$topics):?><p class="category-topics-empty">У цій категорії поки немає тем.</p><?php endif;?>
</div>
<?php forum_footer(); ?>
