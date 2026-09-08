<?php
function forum_ad_config(): array {
 return array_merge(['mode'=>'off','size'=>'300x250','image'=>'','url'=>'','alt'=>'','client'=>'','slot'=>'','home'=>false,'composer'=>false],json_decode(setting('advertising','{}'),true)?:[]);
}
function forum_ad(string $placement): void {
 $a=forum_ad_config();if($a['mode']==='off'||empty($a[$placement]))return;
 if($a['mode']==='google'&&($placement!=='home'||setting('maintenance_mode','1')==='1'))return;
 $height=$a['size']==='300x600'?600:250;
 ?><aside class="forum-ad" aria-label="Реклама"><small>Реклама</small><?php if($a['mode']==='own'):?><a href="<?=e($a['url'])?>" target="_blank" rel="sponsored noopener noreferrer"><img src="<?=e($a['image'])?>" alt="<?=e($a['alt'])?>" width="300" height="<?=$height?>" loading="lazy"></a><?php else:?><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?=e($a['client'])?>" crossorigin="anonymous"></script><ins class="adsbygoogle" style="display:inline-block;width:300px;height:<?=$height?>px" data-ad-client="<?=e($a['client'])?>" data-ad-slot="<?=e($a['slot'])?>"></ins><script>(adsbygoogle=window.adsbygoogle||[]).push({});</script><?php endif;?></aside><?php
}
