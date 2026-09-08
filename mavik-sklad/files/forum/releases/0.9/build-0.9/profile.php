<?php
require __DIR__.'/app/bootstrap.php';require __DIR__.'/app/social.php';maintenance_gate();member_required();$user=authenticated_user();$error='';$message='';
if($_SERVER['REQUEST_METHOD']==='POST'){
 require_writable_forum();csrf_check();$action=$_POST['action']??'';$path=null;
 try{
  if($action==='upload'){
   $file=$_FILES['avatar']??[];
   if(($file['error']??UPLOAD_ERR_NO_FILE)!==UPLOAD_ERR_OK || ($file['size']??0)>5*1024*1024)throw new RuntimeException('Оберіть зображення до 5 МБ.');
   $info=getimagesize($file['tmp_name']);
   if(!$info||!in_array($info[2],[IMAGETYPE_JPEG,IMAGETYPE_PNG,IMAGETYPE_WEBP],true)||$info[0]*$info[1]>20000000)throw new RuntimeException('Потрібне JPEG, PNG або WebP до 20 мегапікселів.');
   $source=imagecreatefromstring(file_get_contents($file['tmp_name']));if(!$source)throw new RuntimeException('Не вдалося прочитати зображення.');
   $out=imagecreatetruecolor(512,512);imagefill($out,0,0,imagecolorallocate($out,17,21,22));$side=min($info[0],$info[1]);imagecopyresampled($out,$source,0,0,(int)(($info[0]-$side)/2),(int)(($info[1]-$side)/2),512,512,$side,$side);
   $path='/assets/avatars/'.bin2hex(random_bytes(16)).'.webp';if(!imagewebp($out,APP_ROOT.$path,85))throw new RuntimeException('Не вдалося зберегти аватар.');
  }elseif($action==='identity'){
   $st=db()->prepare('SELECT avatar_path FROM identities WHERE id=? AND user_id=?');$st->execute([(int)($_POST['identity_id']??0),$user['id']]);$path=$st->fetchColumn();
   if(!$path||!preg_match('~^/assets/avatars/[a-f0-9]{32}\.webp$~D',$path)||!is_file(APP_ROOT.$path))throw new RuntimeException('У підключеному профілі ще немає збереженого аватара.');
  }elseif($action!=='reset')throw new RuntimeException('Невідома дія.');
  db()->prepare('UPDATE users SET avatar_path=? WHERE id=?')->execute([$path,$user['id']]);$user['avatar_path']=$path;$message='Аватар оновлено.';
 }catch(RuntimeException $e){$error=$e->getMessage();}
}
$st=db()->prepare('SELECT id,provider,avatar_path FROM identities WHERE user_id=?');$st->execute([$user['id']]);$identities=$st->fetchAll();forum_header('Профіль');
?><section class="page-title"><a href="/">← Форум</a><h1><?=e($user['display_name'])?></h1></section><?php if($error):?><p class="notice danger"><?=e($error)?></p><?php endif;?><?php if($message):?><p class="notice success"><?=e($message)?></p><?php endif;?>
<section class="panel settings-form stack"><?=avatar($user['avatar_path'],$user['display_name'],'profile-avatar')?><form method="post" enctype="multipart/form-data" class="stack"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="action" value="upload"><label>Ваш аватар<input type="file" name="avatar" accept="image/jpeg,image/png,image/webp" required></label><small>JPEG, PNG або WebP, до 5 МБ. Зображення буде обрізане до квадрата.</small><button class="btn primary">Завантажити</button></form>
<form method="post"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="action" value="reset"><button class="btn">Повернути стандартну маску</button></form>
<?php foreach($identities as $identity):?><form method="post"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="action" value="identity"><input type="hidden" name="identity_id" value="<?=(int)$identity['id']?>"><button class="btn">Взяти збережений аватар <?=e($identity['provider'])?></button></form><?php endforeach;?><?php foreach(['google'=>'Google','telegram'=>'Telegram'] as $provider=>$label):if(social_enabled($provider)):?><a class="btn" href="/social.php?provider=<?=e($provider)?>&amp;start=1">Підключити / оновити <?=e($label)?></a><?php endif;endforeach;?><a class="btn" href="/auth.php?logout=1">Вийти</a></section>
<?php forum_footer();
