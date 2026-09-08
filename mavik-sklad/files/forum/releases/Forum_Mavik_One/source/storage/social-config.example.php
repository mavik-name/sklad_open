<?php
// Copy to social-config.php in this same storage directory. Never publish real keys.
if (!defined('APP_ROOT')) { http_response_code(404); exit; }
return [
 'FORUM_PUBLIC_URL' => 'https://forum.mavik.name',
 'FORUM_GOOGLE_CLIENT_ID' => '',
 'FORUM_GOOGLE_CLIENT_SECRET' => '',
 'FORUM_TELEGRAM_BOT_USERNAME' => '',
 'FORUM_TELEGRAM_BOT_TOKEN' => '',
];
