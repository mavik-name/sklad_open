<?php
$forumPath=parse_url($_SERVER['REQUEST_URI']??'/',PHP_URL_PATH)?:'/';
$forumSection=explode('/',trim($forumPath,'/'))[0];
$forumCopy=[
 ''=>['Хороші історії продовжуються в розмовах','На форумі MaVik можна обговорити книжки й музику, поділитися ідеями, поставити запитання та залишити зауваження.'],
 'books'=>['Прочитали? Поговорімо про це','Обговорюйте героїв, сюжет і власні враження на форумі MaVik. Діліться тлумаченнями, запитаннями та зауваженнями до книжок.'],
 'blog'=>['Продовжимо розмову на форумі','Відгукнулася думка з блогу? Поділіться своїм поглядом, запропонуйте ідею або почніть обговорення з іншими читачами.'],
 'music'=>['Що відгукнулося в музиці?','Обговорюйте треки, тексти й настрій музики MaVik. На форумі можна поділитися враженнями та власними рекомендаціями.'],
 'about'=>['Є запитання до автора?','На форумі MaVik можна поговорити про творчість, запропонувати тему й обмінятися думками з автором та читачами.'],
 'contact'=>['Для спільної розмови є форум','Ідеї, запитання про книжки та загальні зауваження можна обговорити на форумі. Для особистих звернень залишається форма на цій сторінці.'],
];
if(isset($forumCopy[$forumSection])):
[$forumHeading,$forumDescription]=$forumCopy[$forumSection];
?>
<section class="mavik-forum-invite wrap" aria-labelledby="forum-invite-title">
 <div><div class="eyebrow">Спільнота MaVik</div><h2 id="forum-invite-title"><?=\Mavik\Core\Html::e($forumHeading)?></h2><p><?=\Mavik\Core\Html::e($forumDescription)?></p></div>
 <a class="btn btn-gold" href="https://forum.mavik.name/">Перейти на форум <span aria-hidden="true">→</span></a>
</section>
<?php endif; ?>
