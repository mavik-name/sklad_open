<?php
require __DIR__.'/build-0.9/app/social.php';
$token='unit-test-token-not-a-real-bot';$data=['id'=>'123456','first_name'=>'Тест','auth_date'=>(string)time()];ksort($data);$pairs=[];foreach($data as $k=>$v)$pairs[]=$k.'='.$v;$data['hash']=hash_hmac('sha256',implode("\n",$pairs),hash('sha256',$token,true));
$checks=['valid Telegram signature'=>telegram_verify($data,$token,time()),'wrong secret rejected'=>!telegram_verify($data,'wrong',time()),'expired signature rejected'=>!telegram_verify($data,$token,time()+601)];$data['first_name']='Forged';$checks['forged profile rejected']=!telegram_verify($data,$token,time());$checks['unconfigured providers disabled']=!social_enabled('google')&&!social_enabled('telegram');$checks['arbitrary avatar host rejected']=social_avatar('https://example.invalid/avatar.png')===null;
file_put_contents(__DIR__.'/social-checks.json',json_encode($checks,JSON_PRETTY_PRINT));echo json_encode($checks,JSON_PRETTY_PRINT);if(in_array(false,$checks,true))exit(1);
