<?php
require __DIR__.'/../app/bootstrap.php';admin_required();$pdo=db();$notice='';$error='';
if($_SERVER['REQUEST_METHOD']==='POST'){
 csrf_check();$id=(int)($_POST['id']??0);$action=(string)($_POST['action']??'');
 try{
  if($action==='registration'){set_setting('registration_open',isset($_POST['registration_open'])?'1':'0');$notice='Налаштування реєстрації збережено.';}
  elseif($action==='unban_registration'){$pdo->prepare('DELETE FROM registration_bans WHERE label=?')->execute([(string)($_POST['label']??'')]);$notice='Заборону повторної реєстрації знято.';}
  else{
   $st=$pdo->prepare('SELECT * FROM users WHERE id=?');$st->execute([$id]);$u=$st->fetch();if(!$u)throw new RuntimeException('Користувача не знайдено.');
   if($action==='avatar'){$pdo->prepare('UPDATE users SET avatar_path=NULL WHERE id=?')->execute([$id]);$notice='Аватар прибрано.';}
   else{
    if($id===current_user_id()||$u['role']==='admin')throw new RuntimeException('Адміністратора не можна видалити або заблокувати тут.');
    if($action==='ban'){
     $days=filter_var($_POST['days']??'',FILTER_VALIDATE_INT);if($days===false||$days<0||$days>3650)throw new RuntimeException('Вкажіть від 0 до 3650 днів; 0 — безстроково.');
     $pdo->beginTransaction();$pdo->prepare('UPDATE users SET blocked_at=CURRENT_TIMESTAMP WHERE id=?')->execute([$id]);$pdo->prepare('INSERT INTO account_bans(user_id,until_at,reason) VALUES(?,?,?) ON CONFLICT(user_id) DO UPDATE SET until_at=excluded.until_at,reason=excluded.reason')->execute([$id,$days?time()+$days*86400:null,mb_substr(trim((string)($_POST['reason']??'')),0,500)]);$pdo->commit();$notice='Бан застосовано.';
    }elseif($action==='unban'){$pdo->beginTransaction();$pdo->prepare('UPDATE users SET blocked_at=NULL WHERE id=?')->execute([$id]);$pdo->prepare('DELETE FROM account_bans WHERE user_id=?')->execute([$id]);$pdo->commit();$notice='Користувача розблоковано.';}
    elseif($action==='delete'){
     if(empty($_POST['confirm_delete']))throw new RuntimeException('Підтвердьте видалення акаунта.');
     $pdo->beginTransaction();
     if(isset($_POST['deny_return'])){
      $keys=[hash('sha256','email:'.mb_strtolower(trim($u['email'])))];$st=$pdo->prepare('SELECT provider,provider_uid,email FROM identities WHERE user_id=?');$st->execute([$id]);foreach($st as $identity){$keys[]=hash('sha256',$identity['provider'].':'.$identity['provider_uid']);if($identity['email'])$keys[]=hash('sha256','email:'.mb_strtolower(trim($identity['email'])));}
      foreach($keys as $key)$pdo->prepare('INSERT OR IGNORE INTO registration_bans(fingerprint,label) VALUES(?,?)')->execute([$key,'Видалений акаунт #'.$id]);
     }
     foreach(['topics','posts','reports'] as $table)$pdo->prepare("UPDATE $table SET user_id=NULL WHERE user_id=?")->execute([$id]);
     foreach(['subscriptions','identities','user_presence','account_bans'] as $table)$pdo->prepare("DELETE FROM $table WHERE user_id=?")->execute([$id]);
     $pdo->prepare('DELETE FROM users WHERE id=?')->execute([$id]);$pdo->commit();$notice='Акаунт видалено. Теми та повідомлення збережено.';
    }else throw new RuntimeException('Невідома дія.');
   }
  }
 }catch(Throwable $e){if($pdo->inTransaction())$pdo->rollBack();$error=$e instanceof RuntimeException?$e->getMessage():'Не вдалося виконати дію.';}
}
$users=$pdo->query('SELECT u.*,b.until_at,b.reason FROM users u LEFT JOIN account_bans b ON b.user_id=u.id ORDER BY u.created_at DESC')->fetchAll();forum_header('Користувачі');
?><section class="page-title"><a href="/admin/">← Адмінка</a><h1>Користувачі</h1></section>
<?php if($notice):?><p class="notice success"><?=e($notice)?></p><?php endif;?><?php if($error):?><p class="notice danger"><?=e($error)?></p><?php endif;?>
<form method="post" class="panel stack"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="action" value="registration"><label class="switch-row"><input type="checkbox" name="registration_open" <?=setting('registration_open','1')==='1'?'checked':''?>><span>Дозволити нові реєстрації (email, Google, Telegram)</span></label><button class="btn">Зберегти</button></form>
<?php foreach($users as $u):?><section class="panel stack" style="margin-top:16px"><strong><?=e($u['display_name'])?></strong><span><?=e($u['email'])?> · <?=e($u['role'])?></span><small><?=$u['blocked_at']?($u['until_at']?'Бан до '.e(date('Y-m-d H:i',(int)$u['until_at'])).' UTC':'Безстроковий бан'):'Активний'?> <?=e($u['reason']??'')?></small>
<form method="post"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="id" value="<?=(int)$u['id']?>"><button name="action" value="avatar" class="btn">Прибрати аватар</button></form>
<?php if((int)$u['id']!==current_user_id()&&$u['role']!=='admin'):?>
<form method="post" class="stack"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="id" value="<?=(int)$u['id']?>"><label>Днів бану (0 — безстроково)<input type="number" name="days" min="0" max="3650" value="7" required></label><label>Причина<input name="reason" maxlength="500"></label><div><button class="btn" name="action" value="ban">Застосувати бан</button> <?php if($u['blocked_at']):?><button class="btn" name="action" value="unban">Розблокувати</button><?php endif;?></div></form>
<details><summary>Видалити користувача</summary><form method="post" class="stack"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="id" value="<?=(int)$u['id']?>"><p>Акаунт і підключення входу буде видалено. Теми та повідомлення залишаться без прив’язки до акаунта.</p><label class="switch-row"><input type="checkbox" name="deny_return"><span>Заборонити повторну реєстрацію з цим email та підключеними Google/Telegram</span></label><label class="switch-row"><input type="checkbox" name="confirm_delete" required><span>Підтверджую видалення цього акаунта</span></label><button class="btn danger" name="action" value="delete">Видалити назавжди</button></form></details>
<?php endif;?></section><?php endforeach;?>
<h2>Заборони повторної реєстрації</h2><?php foreach($pdo->query('SELECT DISTINCT label FROM registration_bans') as $ban):?><form method="post" class="panel"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="label" value="<?=e($ban['label'])?>"><span><?=e($ban['label'])?></span> <button class="btn" name="action" value="unban_registration">Зняти заборону</button></form><?php endforeach;forum_footer(); ?>
