<?php
require __DIR__.'/../app/bootstrap.php';admin_required();require __DIR__.'/../app/ads.php';$a=forum_ad_config();$error='';$saved=false;
if($_SERVER['REQUEST_METHOD']==='POST'){
 csrf_check();$next=[];foreach(['mode','size','image','url','alt','client','slot'] as $key)$next[$key]=trim((string)($_POST[$key]??''));
 $next['home']=isset($_POST['home']);$next['composer']=isset($_POST['composer']);
 if(!in_array($next['mode'],['off','own','google'],true)||!in_array($next['size'],['300x250','300x600'],true))$error='Оберіть режим і розмір.';
 if($next['mode']==='own')foreach(['image','url'] as $key)if(!filter_var($next[$key],FILTER_VALIDATE_URL)||!in_array(strtolower(parse_url($next[$key],PHP_URL_SCHEME)??''),['https','http'],true))$error='Вкажіть повні https:// посилання на банер і цільову сторінку.';
 if($next['mode']==='google'&&(!preg_match('/^ca-pub-[0-9]{16}$/',$next['client'])||!preg_match('/^[0-9]{10}$/',$next['slot'])))$error='Перевірте AdSense Publisher ID та Slot ID.';
 if(!$error){set_setting('advertising',json_encode($next,JSON_UNESCAPED_UNICODE));$saved=true;}$a=$next;
}
forum_header('Реклама');?><section class="page-title"><a href="/admin/">← Адмінка форуму</a><h1>Реклама</h1></section>
<?php if($error):?><p class="notice danger"><?=e($error)?></p><?php elseif($saved):?><p class="notice success">Збережено.</p><?php endif;?>
<form method="post" class="panel stack settings-form"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>">
<label>Режим<select name="mode"><?php foreach(['off'=>'Вимкнено','own'=>'Власний банер','google'=>'Google AdSense'] as $v=>$label):?><option value="<?=$v?>" <?=$a['mode']===$v?'selected':''?>><?=$label?></option><?php endforeach;?></select></label>
<label>Розмір<select name="size"><?php foreach(['300x250','300x600'] as $size):?><option <?=$a['size']===$size?'selected':''?>><?=$size?></option><?php endforeach;?></select></label>
<label class="switch-row"><input type="checkbox" name="home" <?=$a['home']?'checked':''?>><span>Бічна колонка головної</span></label><label class="switch-row"><input type="checkbox" name="composer" <?=$a['composer']?'checked':''?>><span>Праворуч від форми «Нова тема» (власний банер)</span></label>
<p>На mobile банер переходить під вміст. AdSense не завантажується у закритому режимі та біля форми створення теми. Для Google потрібен схвалений сайт і налаштована згода відвідувачів, якщо її вимагає Google для вашої аудиторії.</p>
<?php foreach(['image'=>'Посилання на зображення банера (PNG, JPG, WebP)','url'=>'Куди веде банер','alt'=>'Опис банера','client'=>'AdSense Publisher ID (ca-pub-…)','slot'=>'AdSense Slot ID'] as $key=>$label):?><label><?=e($label)?><input name="<?=$key?>" value="<?=e($a[$key])?>" maxlength="2000"></label><?php endforeach;?>
<button class="btn primary">Зберегти</button></form><p><a href="/">Перевірити головну</a> · <a href="/new-topic.php">Перевірити сторінку нової теми</a></p><?php forum_footer(); ?>
