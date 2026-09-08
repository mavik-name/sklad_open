<?php
require __DIR__.'/app/bootstrap.php';require __DIR__.'/app/social.php';
if(isset($_GET['logout'])){ unset($_SESSION['user_id'],$_SESSION['admin_id']); unset($_SESSION['maintenance_ok']); header('Location:/'); exit; }
maintenance_gate();
if(is_logged_in()){header('Location:/');exit;}
$error=''; $mode=(string)($_GET['mode']??'login');
$registrationOpen = setting('maintenance_mode','1') !== '1' && setting('registration_open','1')==='1';
if($_SERVER['REQUEST_METHOD']==='POST'){
    csrf_check();login_rate_limit();
    $action=(string)($_POST['action']??'login');
    $email=trim((string)($_POST['email']??'')); $pass=(string)($_POST['password']??'');
    if($action==='register'){
        if(!$registrationOpen){$error='Реєстрація поки закрита.';}
        else {
            $name=trim((string)($_POST['display_name']??''));
            if(registration_blocked($email)){$error='Реєстрація для цього акаунта недоступна.';} elseif(empty($_POST['accept_rules'])){$error='Потрібна згода з Правилами форуму.';} elseif($name==='' || !filter_var($email,FILTER_VALIDATE_EMAIL) || strlen($pass)<10){$error='Перевір ім’я, email і пароль (мінімум 10 символів).';}
            else { try{$st=db()->prepare('INSERT INTO users(display_name,email,password_hash,role,rules_accepted_at) VALUES(?,?,?,?,CURRENT_TIMESTAMP)');$st->execute([$name,$email,password_hash($pass,PASSWORD_DEFAULT),'member']);session_regenerate_id(true);$_SESSION['user_id']=(int)db()->lastInsertId();header('Location:/');exit;}catch(Throwable $e){$error='Такий email уже зареєстрований.';} }
        }
    } else {
        $st=db()->prepare('SELECT * FROM users WHERE email=? AND blocked_at IS NULL');$st->execute([$email]);$u=$st->fetch();
        if($u && $u['password_hash'] && password_verify($pass,(string)$u['password_hash'])){session_regenerate_id(true);$_SESSION['user_id']=(int)$u['id'];if($u['role']==='admin')$_SESSION['admin_id']=(int)$u['id'];header('Location:/');exit;}
        $error='Невірний email або пароль.';
    }
}
forum_header($mode==='register'?'Реєстрація':'Вхід');
?><section class="auth-shell"><div class="panel auth-card"><div class="eyebrow">forum.mavik.name</div><h1><?=$mode==='register'?'Реєстрація':'Вхід'?></h1><?php if($error):?><div class="notice danger"><?=e($error)?></div><?php endif;?>
<?php if($mode==='register' && $registrationOpen):?><form method="post" class="stack"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="action" value="register"><label>Ім’я<input name="display_name" required></label><label>Email<input type="email" name="email" required></label><label>Пароль<input type="password" name="password" minlength="10" required></label><label class="switch-row"><input type="checkbox" name="accept_rules" value="1" required><span>Я прочитав(ла) і погоджуюся з <a href="/rules.php" target="_blank" rel="noopener">Правилами форуму</a></span></label><button class="btn primary">Створити акаунт</button></form><a class="quiet-link" href="/auth.php">Вже є акаунт</a>
<?php else:?><form method="post" class="stack"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="action" value="login"><label>Email<input type="email" name="email" required></label><label>Пароль<input type="password" name="password" required></label><button class="btn primary">Увійти</button></form><?php if($registrationOpen):?><a class="quiet-link" href="/auth.php?mode=register">Створити акаунт</a><?php endif;?><?php endif;?>
<div class="social-login"><?php foreach(['google'=>'Google','telegram'=>'Telegram'] as $provider=>$label):if(social_enabled($provider)):?><a class="btn" href="/social.php?provider=<?=e($provider)?>&amp;start=1">Увійти через <?=e($label)?></a><?php endif;endforeach;?></div></div></section><?php forum_footer(); ?>
