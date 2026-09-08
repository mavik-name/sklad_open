<?php
require __DIR__.'/build-0.9/app/upgrade.php';
$source=file_get_contents(__DIR__.'/source/forum_mavik_test_build_0.8_src/install.php');
preg_match('/<<<SQL\R(.*?)\RSQL/s',$source,$m);
$db=new PDO('sqlite::memory:');$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);$db->exec('PRAGMA foreign_keys=ON');$db->exec($m[1]);
$db->exec("INSERT INTO users(id,display_name,email,password_hash) VALUES(13,'Автор','migration@example.test','unchanged-hash'); INSERT INTO categories(id,slug,title) VALUES(11,'books','Книги'); INSERT INTO topics(id,category_id,user_id,title,slug,body,created_at,updated_at) VALUES(17,11,13,'Назва','migration','Текст','2020-01-01 00:00:00','2026-09-01 00:00:00'); INSERT INTO posts(id,topic_id,user_id,body,created_at) VALUES(21,17,13,'Перша відповідь','2021-01-01 00:00:00'); INSERT INTO posts(id,topic_id,user_id,body,parent_post_id,created_at) VALUES(22,17,13,'Друга відповідь',21,'2022-01-01 00:00:00')");
forum_upgrade($db);forum_upgrade($db);
$checks=[
 'existing user hash preserved'=>$db->query('SELECT password_hash FROM users WHERE id=13')->fetchColumn()==='unchanged-hash',
 'legacy parent migrated'=>$db->query('SELECT reply_to_post_id FROM posts WHERE id=22')->fetchColumn()===21,
 'activity from replies, not edit date'=>$db->query('SELECT last_activity_at FROM topics WHERE id=17')->fetchColumn()==='2022-01-01 00:00:00',
 'topic IDs and content preserved'=>$db->query('SELECT body FROM topics WHERE id=17')->fetchColumn()==='Текст',
 'foreign key integrity'=>$db->query('PRAGMA foreign_key_check')->fetchAll()===[],
 'idempotent migration'=>$db->query('SELECT COUNT(*) FROM posts')->fetchColumn()===2,
];file_put_contents(__DIR__.'/migration-checks.json',json_encode($checks,JSON_PRETTY_PRINT));echo json_encode($checks,JSON_PRETTY_PRINT);if(in_array(false,$checks,true))exit(1);
