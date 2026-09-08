<?php
function forum_ad_config(): array {
 $defaults=['mode'=>'own','size'=>'300x600','image'=>'https://forum.mavik.name/assets/ads/universe.png','url'=>'https://mavik.name/books/universe/','alt'=>'UNIVERSE — Віктор Макарчук, MaVik','client'=>'','slot'=>'','code'=>'','home'=>true,'composer'=>true];
 if(setting('universe_banner_one','0')!=='1'){set_setting('advertising',json_encode($defaults,JSON_UNESCAPED_UNICODE));set_setting('universe_banner_one','1');}
 return array_merge($defaults,json_decode(setting('advertising','{}'),true)?:[]);
}
function forum_ad(string $placement): void {
 $a=forum_ad_config();if($a['mode']==='off'||empty($a[$placement]))return;
 if($a['mode']==='google'&&($placement!=='home'||setting('maintenance_mode','1')==='1'))return;
 $height=$a['size']==='300x600'?600:250;
 ?><aside class="forum-ad" aria-label="Реклама"><small>Реклама</small><?php if($a['mode']==='code'):?><iframe title="Рекламний блок" sandbox="allow-scripts allow-popups" referrerpolicy="no-referrer" width="300" height="<?=$height?>" style="border:0;max-width:100%" srcdoc="<?=e($a['code']??'')?>"></iframe><?php elseif($a['mode']==='own'):?><a href="<?=e($a['url'])?>" target="_blank" rel="sponsored noopener noreferrer"><img src="<?=e($a['image'])?>" alt="<?=e($a['alt'])?>" width="300" height="<?=$height?>" loading="lazy"></a><?php else:?><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?=e($a['client'])?>" crossorigin="anonymous"></script><ins class="adsbygoogle" style="display:inline-block;width:300px;height:<?=$height?>px" data-ad-client="<?=e($a['client'])?>" data-ad-slot="<?=e($a['slot'])?>"></ins><script>(adsbygoogle=window.adsbygoogle||[]).push({});</script><?php endif;?></aside><?php
}
