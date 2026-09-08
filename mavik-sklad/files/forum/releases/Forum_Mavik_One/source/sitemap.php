<?php
require __DIR__.'/app/bootstrap.php';
header('Content-Type: application/xml; charset=utf-8');
if(setting('maintenance_mode','1')==='1'){http_response_code(503);header('X-Robots-Tag: noindex');header('Retry-After: 3600');exit;}
function sitemap_url(string $path): void {echo '<url><loc>'.htmlspecialchars('https://forum.mavik.name'.$path,ENT_XML1|ENT_QUOTES,'UTF-8').'</loc></url>';}
echo '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';sitemap_url('/');sitemap_url('/rules.php');
foreach(db()->query('SELECT slug FROM categories WHERE is_visible=1') as $c)sitemap_url('/category.php?slug='.urlencode($c['slug']));
foreach(db()->query('SELECT t.slug FROM topics t JOIN categories c ON c.id=t.category_id WHERE t.is_hidden=0 AND c.is_visible=1 LIMIT 49000') as $t)sitemap_url('/topic.php?slug='.urlencode($t['slug']));
echo '</urlset>';
