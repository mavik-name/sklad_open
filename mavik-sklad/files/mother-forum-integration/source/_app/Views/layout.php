<?php
use Mavik\Core\Html;
$reqPath=parse_url($_SERVER['REQUEST_URI']??'/',PHP_URL_PATH)?:'/';
$isHome=rtrim($reqPath,'/')==='';
$isReader=(bool)preg_match('~^/books/[^/]+/read/?$~',$reqPath);
$current=rtrim($reqPath,'/').'/';
$navActive=static function(string $href)use($current):bool{
    $base=rtrim($href,'/');
    if($base==='')return $current==='/';
    return str_starts_with($current,$base.'/');
};
$forumNavigation=[];$forumInserted=false;
foreach($modules->navigation() as $navItem){
    if(rtrim((string)$navItem['href'],'/')==='https://forum.mavik.name')continue;
    $forumNavigation[]=$navItem;
    if(rtrim((string)$navItem['href'],'/')==='/blog'){$forumNavigation[]=['label'=>'Форум','href'=>'https://forum.mavik.name/'];$forumInserted=true;}
}
if(!$forumInserted)$forumNavigation[]=['label'=>'Форум','href'=>'https://forum.mavik.name/'];
$bodyClass=$isHome?'home-page':($isReader?'reader-layout':'site-page');
if($current==='/support/')$bodyClass.=' support-layout';
?>
<!doctype html>
<html lang="<?=Html::e($site['lang'])?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
<meta name="theme-color" content="#09090a">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="MaVik">
<link rel="manifest" href="/manifest.webmanifest">
<style nonce="<?=Html::e($nonce)?>">html{background:#09090a}</style>
<title><?=Html::e($title)?></title>
<meta name="description" content="<?=Html::e($description)?>">
<meta name="robots" content="<?=Html::e($robots)?>">
<meta name="author" content="<?=Html::e($site['author_display'])?>">
<link rel="canonical" href="<?=Html::e($canonical)?>">
<meta property="og:site_name" content="MaVik"><meta property="og:title" content="<?=Html::e($title)?>"><meta property="og:description" content="<?=Html::e($description)?>"><meta property="og:url" content="<?=Html::e($canonical)?>"><meta property="og:type" content="<?=Html::e($ogType)?>"><?php if($image!==''):?><?php $socialImage=str_starts_with($image,'http')?$image:rtrim($site['base_url'],'/').$image;?><meta property="og:image" content="<?=Html::e($socialImage)?>"><?php if($imageAlt!==''):?><meta property="og:image:alt" content="<?=Html::e($imageAlt)?>"><?php endif;?><meta name="twitter:card" content="summary_large_image"><?php if($twitterTitle!==''):?><meta name="twitter:title" content="<?=Html::e($twitterTitle)?>"><?php endif;?><?php if($twitterDescription!==''):?><meta name="twitter:description" content="<?=Html::e($twitterDescription)?>"><?php endif;?><meta name="twitter:image" content="<?=Html::e($socialImage)?>"><?php endif;?><?php if($ogType==='article'):?><?php if($articlePublishedTime!==''):?><meta property="article:published_time" content="<?=Html::e($articlePublishedTime)?>"><?php endif;?><?php if($articleModifiedTime!==''):?><meta property="article:modified_time" content="<?=Html::e($articleModifiedTime)?>"><?php endif;?><?php if($articleAuthor!==''):?><meta property="article:author" content="<?=Html::e($articleAuthor)?>"><?php endif;?><?php endif;?>
<link rel="stylesheet" href="/assets/core/site.css?v=r300_canon_v1_0709">
<link rel="stylesheet" href="/assets/core/forum-links.css?v=r300-forum-one-2">
<link rel="icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/assets/app/apple-touch-icon.png">
<?php foreach($moduleStyles as $css):?><style nonce="<?=Html::e($nonce)?>"><?=$css?></style><?php endforeach;?>
<?php if($jsonld):?><script type="application/ld+json" nonce="<?=Html::e($nonce)?>"><?=json_encode($jsonld,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES)?></script><?php endif;?>
<?php if(!empty($site['clarity_id'])):?><script type="text/javascript" nonce="<?=Html::e($nonce)?>">
(function(c,l,a,r,i,t,y){
    c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
    t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
    y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
})(window,document,"clarity","script",<?=json_encode((string)$site['clarity_id'],JSON_UNESCAPED_SLASHES)?>);
</script><?php endif;?>
</head>
<body id="page-top" class="<?=$bodyClass?>">
<?php if($isReader):?>
<?php elseif($isHome):?>
<header class="nav">
  <div class="wrap nav-inner">
    <a class="home-brand" href="/" aria-label="MaVik — Макарчук Віктор">
      <img src="/assets/brand/mavik-mvv-gold.svg" alt="" width="42" height="42">
      <span class="home-brand-copy"><strong>MaVik</strong><span>МАКАРЧУК ВІКТОР</span></span>
    </a>
    <nav class="home-menu" aria-label="Головне меню">
      <?php foreach($forumNavigation as $item):?><a href="<?=Html::e($item['href'])?>"><?=Html::e($item['label'])?></a><?php endforeach;?>
      <?php if(!empty($owner)):?><a class="owner-pill" href="/boss/">Адмінка</a><?php endif;?>
      <a class="home-ding mavik-coffee-control" href="/support/" data-coffee-trigger aria-label="Пригостити автора кавою"><img src="/assets/icons/coffee.svg?v=r300-coffee-canon-1" alt="" draggable="false"></a>
    </nav>
    <button class="mobile-menu-toggle mavik-round-control" data-home-menu-toggle aria-label="Меню" aria-expanded="false"><span></span><span></span><span></span></button>
  </div>
  <nav class="mobile-menu" data-home-mobile-menu aria-hidden="true">
    <div class="mobile-menu-inner">
      <?php foreach($forumNavigation as $item):?><a href="<?=Html::e($item['href'])?>"><?=Html::e($item['label'])?></a><?php endforeach;?>
      <?php if(!empty($owner)):?><a class="owner-mobile" href="/boss/">Адмінка</a><?php endif;?>
    </div>
  </nav>
</header>
<?php else:?>
<header class="mavik-site-header">
  <div class="mavik-site-head-inner">
    <a class="mavik-site-brand" href="/" aria-label="MaVik — на головну">
      <img src="/assets/brand/mavik-mvv-gold.svg" alt="" width="42" height="42">
      <span class="mavik-site-brand-copy"><strong>MaVik</strong><span>МАКАРЧУК ВІКТОР</span></span>
    </a>
    <nav class="mavik-site-desktop-nav" aria-label="Головне меню">
      <button class="mavik-back" type="button" data-browser-back>← Назад</button>
      <?php foreach($forumNavigation as $item):?><a href="<?=Html::e($item['href'])?>"<?=$navActive($item['href'])?' aria-current="page"':''?>><?=Html::e($item['label'])?></a><?php endforeach;?>
      <?php if(!empty($owner)):?><a class="owner-pill" href="/boss/">Адмінка</a><?php endif;?>
      <a class="mavik-site-ding mavik-coffee-control" href="/support/" data-coffee-trigger aria-label="Пригостити автора кавою"><img src="/assets/icons/coffee.svg?v=r300-coffee-canon-1" alt="" draggable="false"></a>
    </nav>
    <button class="mavik-site-mobile-toggle mavik-round-control" data-internal-menu-toggle aria-label="Меню" aria-expanded="false"><i></i><i></i><i></i></button>
  </div>
  <nav class="mavik-site-mobile-menu" data-internal-mobile-menu aria-hidden="true">
    <div class="mavik-site-mobile-inner">
      <?php foreach($forumNavigation as $item):?><a href="<?=Html::e($item['href'])?>"<?=$navActive($item['href'])?' aria-current="page"':''?>><?=Html::e($item['label'])?></a><?php endforeach;?>
      <?php if(!empty($owner)):?><a class="owner-mobile" href="/boss/">Адмінка</a><?php endif;?>
    </div>
  </nav>
</header>
<?php endif;?>
<main id="top"><?=$content?><?php if(!$isHome&&!$isReader&&http_response_code()<400):require __DIR__.'/partials/forum.php';endif;?></main>
<footer>
  <div class="footer-inner">
    <span class="footer-copy-row">© 2026 · Макарчук Віктор - MaVik®<br>Всі права застережено</span>
    <span class="footer-legal-row"><a class="footer-legal-link" href="https://forum.mavik.name/">Форум</a> · <a class="footer-legal-link" href="/about/">Про MaVik</a> · <a class="footer-legal-link" href="/copyright/">Правова охорона творчого доробку</a> · <a class="footer-legal-link" href="/privacy/">Приватність</a> · <span class="footer-legal-text">viktor@mavik.name</span></span>
  </div>
</footer>

<?php if(!$isReader):?>
<div class="floating-controls<?=$isHome?' home-floating-controls':''?>" data-floating-controls aria-label="Швидкі дії">
  <?php if(!$isHome):?><a class="floating-coffee mavik-coffee-control" href="/support/" data-coffee-trigger aria-label="Пригостити автора кавою"><img src="/assets/icons/coffee.svg?v=r300-coffee-canon-1" alt="" draggable="false"></a><?php endif;?>
  <a class="floating-top mavik-icon-control" href="#page-top" data-scroll-top aria-label="Догори"><img src="/assets/icons/arrow-up.svg?v=r300-icons-canon-1" alt="" draggable="false"></a>
</div>
<?php endif;?>

<script defer src="/assets/core/site.js?v=r300_rc_v32_scrolltop_1"></script>
<?php foreach($moduleScripts as $js):?><script nonce="<?=Html::e($nonce)?>"><?=$js?></script><?php endforeach;?>
</body></html>
