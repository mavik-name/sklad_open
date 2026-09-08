<?php
$path=rawurldecode(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
if(preg_match('~^/(storage|app)/|\.backup|\.sqlite|\.db|\.ini|/\.~',$path)){http_response_code(403);exit;}
if($path==='/robots.txt'){require __DIR__.'/build-0.9/robots.php';return true;}
if($path==='/sitemap.xml'){http_response_code(404);exit;}
return false;
