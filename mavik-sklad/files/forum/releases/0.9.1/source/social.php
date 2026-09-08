<?php
require __DIR__.'/app/bootstrap.php';require __DIR__.'/app/social.php';maintenance_gate();
// Public social sign-up is closed even with a maintenance preview cookie.
if(setting('maintenance_mode','1')==='1'){http_response_code(403);exit('Соціальний вхід доступний після відкриття форуму.');}
$provider=(string)($_GET['provider']??$_POST['provider']??'');$error='';
if(!social_enabled($provider)){http_response_code(404);exit('Сервіс входу не підключено.');}
$origin=rtrim(getenv('FORUM_PUBLIC_URL')?:'https://forum.mavik.name','/');$callback=$origin.'/social.php?provider='.$provider.'&callback=1';
try{
 if(isset($_GET['start'])){
  $_SESSION['social_flow']=['provider'=>$provider,'state'=>bin2hex(random_bytes(32)),'verifier'=>bin2hex(random_bytes(32)),'time'=>time(),'link_user'=>current_user_id()];
  $flow=$_SESSION['social_flow'];
  if($provider==='google'){
   $args=['client_id'=>getenv('FORUM_GOOGLE_CLIENT_ID'),'redirect_uri'=>$callback,'response_type'=>'code','scope'=>'openid email profile','state'=>$flow['state'],'code_challenge'=>rtrim(strtr(base64_encode(hash('sha256',$flow['verifier'],true)),'+/','-_'),'='),'code_challenge_method'=>'S256','prompt'=>'select_account'];
   header('Location: https://accounts.google.com/o/oauth2/v2/auth?'.http_build_query($args));exit;
  }
  forum_header('Вхід через Telegram');?><section class="panel"><h1>Вхід через Telegram</h1><script async src="https://telegram.org/js/telegram-widget.js?22" data-telegram-login="<?=e(getenv('FORUM_TELEGRAM_BOT_USERNAME'))?>" data-size="large" data-auth-url="<?=e($callback.'&state='.$flow['state'])?>"></script></section><?php forum_footer();exit;
 }
 if(isset($_GET['callback'])){
  $flow=$_SESSION['social_flow']??[];unset($_SESSION['social_flow']);
  if(($flow['provider']??'')!==$provider||time()-($flow['time']??0)>600||!hash_equals((string)($flow['state']??''),(string)($_GET['state']??''))||empty($flow['state']))throw new RuntimeException('Спроба входу застаріла. Почніть знову.');
  if($provider==='google'){
   $token=social_request('https://oauth2.googleapis.com/token',['code'=>(string)($_GET['code']??''),'client_id'=>getenv('FORUM_GOOGLE_CLIENT_ID'),'client_secret'=>getenv('FORUM_GOOGLE_CLIENT_SECRET'),'redirect_uri'=>$callback,'grant_type'=>'authorization_code','code_verifier'=>$flow['verifier']]);
   if(empty($token['access_token']))throw new RuntimeException('Вхід не підтверджено.');
   $profile=social_request('https://openidconnect.googleapis.com/v1/userinfo',null,$token['access_token']);
   if(empty($profile['sub'])||empty($profile['email_verified']))throw new RuntimeException('Потрібен підтверджений Google-профіль.');
   $pending=['provider'=>$provider,'uid'=>(string)$profile['sub'],'name'=>(string)($profile['name']??'Учасник'),'email'=>(string)($profile['email']??''),'photo'=>$profile['picture']??null];
  }else{
   $data=$_GET;unset($data['provider'],$data['callback'],$data['state']);if(!telegram_verify($data,getenv('FORUM_TELEGRAM_BOT_TOKEN'),time()))throw new RuntimeException('Telegram-підпис недійсний або застарів.');
   $pending=['provider'=>$provider,'uid'=>(string)$data['id'],'name'=>trim(($data['first_name']??'').' '.($data['last_name']??''))?:'Учасник','email'=>'','photo'=>$data['photo_url']??null];
  }
  $pending['time']=time();$pending['link_user']=$flow['link_user'];
  $st=db()->prepare('SELECT i.user_id,u.blocked_at FROM identities i JOIN users u ON u.id=i.user_id WHERE i.provider=? AND i.provider_uid=?');$st->execute([$provider,$pending['uid']]);$existing=$st->fetch();
  if($existing){
   if($existing['blocked_at']||($pending['link_user'] && (int)$pending['link_user']!==(int)$existing['user_id']))throw new RuntimeException('Цей профіль недоступний для підключення.');
   $avatar=social_avatar($pending['photo']);if($avatar){db()->prepare('UPDATE identities SET avatar_path=? WHERE provider=? AND provider_uid=?')->execute([$avatar,$provider,$pending['uid']]);if($pending['link_user'])db()->prepare('UPDATE users SET avatar_path=? WHERE id=?')->execute([$avatar,$existing['user_id']]);}
   session_regenerate_id(true);unset($_SESSION['admin_id']);$_SESSION['user_id']=(int)$existing['user_id'];header('Location:/profile.php');exit;
  }
  $_SESSION['social_pending']=$pending;header('Location:/social.php?provider='.$provider);exit;
 }
 $pending=$_SESSION['social_pending']??null;
 if(!$pending||$pending['provider']!==$provider||time()-$pending['time']>600)throw new RuntimeException('Почніть вхід зі сторінки авторизації.');
 if($_SERVER['REQUEST_METHOD']==='POST'){
  csrf_check();$link=$pending['link_user'];
  if($link && current_user_id()!==(int)$link)throw new RuntimeException('Увійдіть у локальний акаунт повторно.');
  if(!$link&&empty($_POST['accept_rules']))throw new RuntimeException('Потрібна згода з Правилами форуму.');
  $avatar=social_avatar($pending['photo']);$email=$pending['email']?:'telegram-'.$pending['uid'].'@social.invalid';
  if(!$link){$st=db()->prepare('SELECT id FROM users WHERE email=?');$st->execute([$email]);if($st->fetchColumn())throw new RuntimeException('Цей email уже має локальний акаунт. Увійдіть паролем і підключіть сервіс у профілі.');}
  db()->beginTransaction();try{
   if(!$link){db()->prepare('INSERT INTO users(display_name,email,role,rules_accepted_at,avatar_path) VALUES(?,?,?,CURRENT_TIMESTAMP,?)')->execute([$pending['name'],$email,'member',$avatar]);$link=(int)db()->lastInsertId();}
   db()->prepare('INSERT INTO identities(user_id,provider,provider_uid,email,avatar_path) VALUES(?,?,?,?,?)')->execute([$link,$provider,$pending['uid'],$pending['email']?:null,$avatar]);db()->commit();
  }catch(Throwable $e){db()->rollBack();throw new RuntimeException('Не вдалося підключити профіль. Спробуйте повторно.');}
  unset($_SESSION['social_pending'],$_SESSION['admin_id']);session_regenerate_id(true);$_SESSION['user_id']=(int)$link;header('Location:/profile.php');exit;
 }
}catch(RuntimeException $e){$error=$e->getMessage();}
forum_header('Соціальний профіль');?><section class="page-title"><h1>Соціальний профіль</h1></section><?php if($error):?><p class="notice danger"><?=e($error)?></p><?php endif;?><?php if(isset($pending)&&is_array($pending)):?><form method="post" class="panel stack settings-form"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="provider" value="<?=e($provider)?>"><p><?=e($pending['name'])?></p><?php if(empty($pending['link_user'])):?><label class="switch-row"><input type="checkbox" name="accept_rules" value="1" required><span>Я прочитав(ла) і погоджуюся з <a href="/rules.php">Правилами форуму</a></span></label><?php endif;?><button class="btn primary"><?=empty($pending['link_user'])?'Створити акаунт':'Підключити профіль'?></button></form><?php endif;?><a class="btn" href="/auth.php">До входу</a><?php forum_footer();
