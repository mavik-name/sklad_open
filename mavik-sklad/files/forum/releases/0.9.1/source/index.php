<?php
require __DIR__.'/app/bootstrap.php';
maintenance_gate();
$pdo=db();
$categories=$pdo->query("SELECT c.*, (SELECT COUNT(*) FROM topics t WHERE t.category_id=c.id AND t.is_hidden=0) topic_count, (SELECT COUNT(*) FROM posts p JOIN topics t2 ON t2.id=p.topic_id WHERE t2.category_id=c.id AND p.is_hidden=0 AND t2.is_hidden=0) post_count, (SELECT t3.title FROM topics t3 WHERE t3.category_id=c.id AND t3.is_hidden=0 ORDER BY t3.last_activity_at DESC LIMIT 1) latest_title, (SELECT t3.last_activity_at FROM topics t3 WHERE t3.category_id=c.id AND t3.is_hidden=0 ORDER BY t3.last_activity_at DESC LIMIT 1) latest_at FROM categories c WHERE c.is_visible=1 ORDER BY sort_order,title")->fetchAll();
$latest=$pdo->query("SELECT t.id,t.title,t.slug,t.last_activity_at,t.is_pinned,t.views,c.title category_title,c.slug category_slug,(SELECT COUNT(*) FROM posts p WHERE p.topic_id=t.id AND p.is_hidden=0) replies, COALESCE((SELECT u.display_name FROM posts p JOIN users u ON u.id=p.user_id WHERE p.topic_id=t.id AND p.is_hidden=0 ORDER BY p.created_at DESC,p.id DESC LIMIT 1),(SELECT u2.display_name FROM users u2 WHERE u2.id=t.user_id),'Учасник') last_author,COALESCE((SELECT u.avatar_path FROM posts p JOIN users u ON u.id=p.user_id WHERE p.topic_id=t.id AND p.is_hidden=0 ORDER BY p.created_at DESC,p.id DESC LIMIT 1),(SELECT u.avatar_path FROM users u WHERE u.id=t.user_id)) last_avatar FROM topics t JOIN categories c ON c.id=t.category_id WHERE t.is_hidden=0 AND c.is_visible=1 ORDER BY t.is_pinned DESC,t.last_activity_at DESC LIMIT 6")->fetchAll();
forum_header('Форум');
?>
<section class="forum-hero">
  <div class="forum-hero-copy">
    <h1>Форум</h1>
    <p>Розмови про книги, тексти, музику й читання.</p>
    <p class="mobile-hero-quote">«Хороші розмови<br>так само важливі, як і хороші книги»<br>— mavik.name</p>
  </div>
  <div class="forum-hero-visual" aria-hidden="true"></div>
  <div class="forum-hero-tools">
    <form class="search" method="get" action="/search.php">
      <input name="q" placeholder="Пошук по форуму…" aria-label="Пошук по форуму">
    </form>
    <?php if(is_logged_in() && (setting('maintenance_mode','1')!=='1' || is_admin())): ?>
      <a class="btn primary create-topic" href="/new-topic.php">＋ Створити тему</a>
    <?php else: ?>
      <a class="btn primary create-topic" href="/auth.php">＋ Створити тему</a>
    <?php endif; ?>
  </div>
</section>

<div class="content-grid">
<section class="forum-main-column">
  <div class="section-head"><h2>Категорії форуму</h2><a class="mobile-all section-link" href="#categories">Усі категорії →</a></div>
  <div class="category-list" id="categories">
  <?php foreach($categories as $c): ?>
    <a class="category-card" href="/category.php?slug=<?=urlencode($c['slug'])?>">
      <div class="cat-icon"><?=category_icon($c['icon'] ?: $c['slug'])?></div>
      <div class="cat-copy"><h3><?=e($c['title'])?></h3><p><?=e($c['description'])?></p></div>
      <div class="cat-count"><strong><?=e((string)$c['topic_count'])?></strong><span>тем</span></div>
      <div class="cat-count replies"><strong><?=e((string)$c['post_count'])?></strong><span>відповідей</span></div>
      <div class="cat-latest"><strong><?=e($c['latest_title'] ?: 'Поки без тем')?></strong><?php if($c['latest_at']):?><span><?=e(format_forum_date($c['latest_at']))?></span><?php endif;?></div>
      <div class="arrow">›</div>
    </a>
  <?php endforeach; ?>
  </div>

  <div class="section-head recent-head"><h2>Останні теми</h2><a class="section-link" href="/topics.php">Усі теми →</a></div>
  <div class="topic-list">
  <div class="topic-table-head" aria-hidden="true"><span>Тема</span><span>Відповіді</span><span>Перегляди</span><span>Останнє повідомлення</span></div>
  <?php foreach($latest as $t): ?>
    <a class="topic-row" href="/topic.php?slug=<?=urlencode($t['slug'])?>">
      <div class="topic-kind"><?=category_icon($t['category_slug'])?></div>
      <div class="topic-copy"><strong><?=e($t['title'])?></strong><span><?=e($t['category_title'])?><?=($t['is_pinned']?' · закріплено':'')?></span></div>
      <div class="topic-stat"><strong><?=e((string)$t['replies'])?></strong><span>відповідей</span></div>
      <div class="topic-stat views"><strong><?=(int)$t['views']?></strong><span>переглядів</span></div>
      <div class="topic-last"><?=avatar($t['last_avatar'],$t['last_author'])?><div><strong><?=e($t['last_author'])?></strong><span><?=e(format_forum_date($t['last_activity_at']))?></span></div></div>
      <div class="arrow">›</div>
    </a>
  <?php endforeach; ?>
  </div>
</section>

<aside>
  <div class="panel welcome-panel"><h3>Ласкаво просимо!</h3><p>Приєднуйтесь до спільноти, щоб брати участь в обговореннях, ділитися думками та знаходити однодумців.</p><?php if(is_admin()): ?><a class="btn primary block" href="/admin/">Адмінка форуму</a><?php elseif(is_logged_in()): ?><a class="btn primary block" href="/new-topic.php">Створити тему</a><?php else: ?><a class="btn primary block" href="/auth.php?mode=register">Зареєструватися</a><p class="welcome-login">Вже маєте акаунт? <a href="/auth.php">Увійти</a></p><?php endif; ?></div>
  <div class="panel"><h3><span class="heading-icon"><?=category_icon('vilne')?></span>Останні обговорення</h3><div class="aside-discussions"><?php foreach(array_slice($latest,0,5) as $t):?><a href="/topic.php?slug=<?=urlencode($t['slug'])?>"><?=avatar($t['last_avatar'],$t['last_author'])?><span><strong><?=e($t['title'])?></strong><small><?=e($t['last_author'])?> · <?=e(format_forum_date($t['last_activity_at']))?></small></span></a><?php endforeach;?></div></div>
  <div class="panel rules-mini"><h3><span class="heading-icon"><?=category_icon('blog-i-teksty')?></span>Правила форуму</h3><ol><li>Повага одне до одного</li><li>Без спаму й образ</li><li>Писати можна про все</li></ol><a class="quiet-link" href="/rules.php">Усі правила →</a></div>
  <div class="panel"><h3><span class="heading-icon"><svg viewBox="0 0 24 24"><path d="M3 3h8l10 10-8 8L3 11z"/><circle cx="7" cy="7" r="1"/></svg></span>Популярні теги</h3><div class="tags"><a href="/search.php?q=<?=urlencode('книги')?>">#книги</a><a href="/search.php?q=<?=urlencode('українська література')?>">#українська_література</a><a href="/search.php?q=<?=urlencode('поезія')?>">#поезія</a><a href="/search.php?q=<?=urlencode('музика')?>">#музика</a><a href="/search.php?q=<?=urlencode('читання')?>">#читання</a><a href="/search.php?q=<?=urlencode('рекомендації')?>">#рекомендації</a><a href="/search.php?q=<?=urlencode('есе')?>">#есе</a><a href="/search.php?q=<?=urlencode('дискусія')?>">#дискусія</a></div></div>
</aside>
</div>
<?php forum_footer(); ?>
