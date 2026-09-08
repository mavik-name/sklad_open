<?php
// Environment takes priority; private local configuration is never packaged with real keys.
function forum_social_setting(string $key): string {
 $env=getenv($key);if($env!==false&&$env!=='')return $env;
 static $config=null;
 if($config===null){
  $config=[];$path=__DIR__.'/../storage/social-config.php';
  if(is_file($path)){$loaded=require $path;if(is_array($loaded))$config=$loaded;}
 }
 return isset($config[$key])&&is_string($config[$key])?trim($config[$key]):'';
}
function social_enabled(string $provider): bool {
 return $provider==='google' ? (bool)(forum_social_setting('FORUM_GOOGLE_CLIENT_ID')&&forum_social_setting('FORUM_GOOGLE_CLIENT_SECRET')) : ($provider==='telegram'&&(bool)(forum_social_setting('FORUM_TELEGRAM_BOT_TOKEN')&&forum_social_setting('FORUM_TELEGRAM_BOT_USERNAME')));
}
function social_request(string $url,?array $body=null,?string $token=null): array {
 if(!extension_loaded('curl'))throw new RuntimeException('На сервері потрібен модуль cURL.');
 $c=curl_init($url);curl_setopt_array($c,[CURLOPT_RETURNTRANSFER=>true,CURLOPT_TIMEOUT=>15,CURLOPT_FOLLOWLOCATION=>false,CURLOPT_PROTOCOLS=>CURLPROTO_HTTPS]);
 if($body!==null){curl_setopt($c,CURLOPT_POST,true);curl_setopt($c,CURLOPT_POSTFIELDS,http_build_query($body));}
 if($token)curl_setopt($c,CURLOPT_HTTPHEADER,['Authorization: Bearer '.$token]);
 $raw=curl_exec($c);$status=curl_getinfo($c,CURLINFO_RESPONSE_CODE);if($status!==200||!is_string($raw))throw new RuntimeException('Сервіс входу тимчасово недоступний.');
 $data=json_decode($raw,true);if(!is_array($data))throw new RuntimeException('Некоректна відповідь сервісу входу.');return $data;
}
function telegram_verify(array $data,string $token,int $now): bool {
 $hash=(string)($data['hash']??'');unset($data['hash']);
 if(!ctype_digit((string)($data['id']??''))||!isset($data['auth_date'])||abs($now-(int)$data['auth_date'])>300)return false;
 foreach($data as $key=>$value)if(!is_scalar($value)||!in_array($key,['id','first_name','last_name','username','photo_url','auth_date'],true))return false;
 ksort($data);$rows=[];foreach($data as $key=>$value)$rows[]=$key.'='.$value;
 return hash_equals(hash_hmac('sha256',implode("\n",$rows),hash('sha256',$token,true)),$hash);
}
function social_avatar(?string $url): ?string {
 if(!$url||!extension_loaded('curl')||!extension_loaded('gd'))return null;
 $parts=parse_url($url);$host=strtolower($parts['host']??'');
 if(($parts['scheme']??'')!=='https'||isset($parts['user'])||isset($parts['port'])||!preg_match('~(^|\.)(googleusercontent\.com|telegram\.org|t\.me|telesco\.pe)$~D',$host))return null;
 $data='';$c=curl_init($url);curl_setopt_array($c,[CURLOPT_TIMEOUT=>10,CURLOPT_FOLLOWLOCATION=>false,CURLOPT_PROTOCOLS=>CURLPROTO_HTTPS,CURLOPT_WRITEFUNCTION=>static function($c,$chunk)use(&$data){if(strlen($data)+strlen($chunk)>5*1024*1024)return 0;$data.=$chunk;return strlen($chunk);}]);
 if(!curl_exec($c)||curl_getinfo($c,CURLINFO_RESPONSE_CODE)!==200)return null;
 $info=@getimagesizefromstring($data);if(!$info||$info[0]*$info[1]>20000000||!in_array($info[2],[IMAGETYPE_PNG,IMAGETYPE_JPEG,IMAGETYPE_WEBP],true))return null;
 $image=@imagecreatefromstring($data);if(!$image)return null;$out=imagecreatetruecolor(512,512);$side=min($info[0],$info[1]);imagecopyresampled($out,$image,0,0,(int)(($info[0]-$side)/2),(int)(($info[1]-$side)/2),512,512,$side,$side);
 $path='/assets/avatars/'.bin2hex(random_bytes(16)).'.webp';return imagewebp($out,APP_ROOT.$path,85)?$path:null;
}
