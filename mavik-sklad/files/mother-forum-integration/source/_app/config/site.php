<?php
$base=[
    'name' => 'MaVik',
    'author' => 'Макарчук Віктор',
    'author_display' => 'Макарчук Віктор | MaVik',
    'base_url' => 'https://mavik.name',
    'lang' => 'uk-UA',
    'email' => 'viktor@mavik.name',
    'environment' => 'production',
    'description' => 'Офіційний авторський сайт Макарчука Віктора (MaVik). Книги, проза, поезія, музика, авторський блог та форум.',
    'same_as' => [
        'https://novelklo.com/u/MaVik',
        'https://www.booktons.com/author/makarchuk_viktor_mavik',
        'https://samvydav.com.ua/mavik',
        'https://arkush.net/user/20666',
        'https://soundcloud.com/mavik_ai',
        'https://www.youtube.com/@mavik_ua',
        'https://open.spotify.com/artist/6qEDCkbMZ4wsHOybCuuC0W',
    ],
];
$root=defined('MAVIK_ROOT')?MAVIK_ROOT:dirname(__DIR__,2);
$runtime=$root.'/_private/runtime.php';
if(is_file($runtime)){$x=require $runtime;if(is_array($x))$base=array_replace($base,$x);}
return $base;
