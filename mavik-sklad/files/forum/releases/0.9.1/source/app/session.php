<?php
declare(strict_types=1);

const FORUM_SESSION_TTL = 30 * 24 * 60 * 60;

// Keep forum sessions outside the host's shared short-lived PHP session pool.
$forumSessionDirectory = __DIR__ . '/../storage/sessions';
if (!is_dir($forumSessionDirectory) && !mkdir($forumSessionDirectory, 0700, true) && !is_dir($forumSessionDirectory)) {
    throw new RuntimeException('Не вдалося створити сховище сесій форуму.');
}
ini_set('session.use_strict_mode', '1');
ini_set('session.use_only_cookies', '1');
ini_set('session.gc_maxlifetime', (string)FORUM_SESSION_TTL);
ini_set('session.gc_probability', '1');
ini_set('session.gc_divisor', '100');
session_save_path($forumSessionDirectory);
session_name('MAVIKFORUMSESSID');
session_set_cookie_params([
    'lifetime'=>FORUM_SESSION_TTL, 'path'=>'/', 'httponly'=>true,
    'samesite'=>'Lax', 'secure'=>!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']!=='off',
]);
session_start();
$forumNow = time();
if (isset($_SESSION['last_activity']) && $forumNow - (int)$_SESSION['last_activity'] >= FORUM_SESSION_TTL) {
    $_SESSION = [];
    session_regenerate_id(true);
}
$_SESSION['last_activity'] = $forumNow;
$forumCookie = session_get_cookie_params();
unset($forumCookie['lifetime']);
$forumCookie['expires'] = $forumNow + FORUM_SESSION_TTL;
setcookie(session_name(), session_id(), $forumCookie);
