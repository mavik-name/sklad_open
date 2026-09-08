<?php
require __DIR__.'/app/bootstrap.php';maintenance_gate();
$q=mb_substr(trim((string)($_GET['q']??'')),0,200);$page=max(1,(int)($_GET['page']??1));$results=[];
if($q!==''){
    // LIKE's ASCII-only case folding is replaced with Unicode folding for Ukrainian.
    db()->sqliteCreateFunction('forum_fold',static fn($s)=>mb_strtolower((string)$s,'UTF-8'),1);
    $pattern='%'.strtr(mb_strtolower($q,'UTF-8'),['\\'=>'\\\\','%'=>'\\%','_'=>'\\_']).'%';
    $sql="SELECT t.id,t.title,t.slug,c.title category_title,t.body text,NULL post_id,t.last_activity_at activity,
       CASE WHEN forum_fold(t.title) LIKE ? ESCAPE '\\' THEN 0 ELSE 1 END rank
       FROM topics t JOIN categories c ON c.id=t.category_id
       WHERE t.is_hidden=0 AND c.is_visible=1 AND (forum_fold(t.title) LIKE ? ESCAPE '\\' OR forum_fold(t.body) LIKE ? ESCAPE '\\')
       UNION ALL SELECT t.id,t.title,t.slug,c.title,p.body,p.id,p.created_at,2
       FROM posts p JOIN topics t ON t.id=p.topic_id JOIN categories c ON c.id=t.category_id
       WHERE p.is_hidden=0 AND t.is_hidden=0 AND c.is_visible=1 AND forum_fold(p.body) LIKE ? ESCAPE '\\'
       ORDER BY rank,activity DESC LIMIT 21 OFFSET ?";
    $st=db()->prepare($sql);foreach([1,2,3,4] as $n)$st->bindValue($n,$pattern);$st->bindValue(5,($page-1)*20,PDO::PARAM_INT);$st->execute();$results=$st->fetchAll();
}
$more=count($results)>20;$results=array_slice($results,0,20);forum_header('Пошук');
function search_excerpt(string $text,string $query): string {
 $pos=mb_stripos($text,$query,0,'UTF-8');$start=max(0,($pos===false?0:$pos)-70);
 return ($start?'…':'').excerpt(mb_substr($text,$start,null,'UTF-8'),360);
}
?><section class="page-title"><a href="/">← Форум</a><h1>Пошук по форуму</h1></section>
<form action="/search.php" method="get" class="search search-page"><input name="q" value="<?=e($q)?>" maxlength="200" placeholder="Назва теми або слова з повідомлення" aria-label="Пошуковий запит"><button class="btn primary">Знайти</button></form>
<?php if($q!=='' && !$results):?><p class="panel">За запитом «<?=e($q)?>» нічого не знайдено.</p><?php endif;?>
<div class="search-results"><?php foreach($results as $r):?><article class="panel"><small><?=e($r['category_title'])?> · <?=$r['post_id']?'Повідомлення':'Тема'?></small><h2><a href="/topic.php?slug=<?=urlencode($r['slug'])?><?=$r['post_id']?'#post-'.(int)$r['post_id']:'#post-topic'?>"><?=e($r['title'])?></a></h2><p><?=e(search_excerpt($r['text'],$q))?></p></article><?php endforeach;?></div>
<nav class="pagination" aria-label="Сторінки результатів"><?php if($page>1):?><a href="?q=<?=urlencode($q)?>&amp;page=<?=$page-1?>">← Попередня</a><?php endif;?><?php if($more):?><a href="?q=<?=urlencode($q)?>&amp;page=<?=$page+1?>">Наступна →</a><?php endif;?></nav>
<?php forum_footer();
