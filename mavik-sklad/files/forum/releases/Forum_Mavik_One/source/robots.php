<?php
require __DIR__.'/app/bootstrap.php';
header('Content-Type: text/plain; charset=utf-8');
if(setting('maintenance_mode','1')==='1') echo "User-agent: *\nDisallow: /\n";
else echo "User-agent: *\nDisallow: /admin/\nDisallow: /app/\nDisallow: /storage/\nSitemap: https://forum.mavik.name/sitemap.php\n";
