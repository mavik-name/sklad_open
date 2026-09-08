<?php use Mavik\Core\Html; ?>
<section class="hero">
  <div class="wrap hero-grid">
    <div class="hero-copy-block reveal">
      <div class="kicker">Авторський простір</div>
      <h1 class="mavik-author-h1">Макарчук Віктор <span>| MaVik</span></h1>
      <p class="hero-statement">Історії, які не відпускають.</p>
      <p class="hero-copy">Офіційний авторський сайт Макарчука Віктора (MaVik). Книги, проза, поезія, музика, авторський блог та форум.</p>

      <div class="hero-actions">
        <a class="btn btn-primary" href="/books/">Читати</a>
        <a class="btn" href="#books">Дивитись книги</a>
        <a class="btn btn-gold" href="/support/" data-coffee-trigger>Пригостити кавою</a>
        <button class="btn" type="button" data-share-site>Поділитись</button>
      </div>

      <div class="hero-note">
        <div><b>Книги</b>головний простір</div>
        <div><b>Музика</b>інший голос</div>
        <div><b>Без бар'єрів</b>читати там, де зручно</div>
        <div><b>Блог</b>зона спілкування</div>
      </div>
    </div>

    <?php if($focusBook && !empty($focusBook['cover_catalog'])):?>
    <a class="feature-cover book-cover-link reveal" data-book-open href="/books/<?=Html::e($focusBook['slug'])?>/" aria-label="Відкрити книгу «<?=Html::e($focusBook['title'])?>»">
      <span class="feature-tag"><small>У фокусі</small><strong><?=Html::e($focusBook['title'])?></strong></span>
      <img src="<?=Html::e($focusBook['cover_catalog'])?>" alt="Обкладинка книги «<?=Html::e($focusBook['title'])?>»">
    </a>
    <?php endif;?>
  </div>
</section>

<section class="books" id="books">
  <div class="wrap">
    <div class="section-head reveal">
      <div>
        <div class="eyebrow" data-home-anchor-title>Бібліотека</div>
        <h2>Книги</h2>
      </div>
      <p class="section-copy">Твори можна читати безпосередньо на mavik.name або читати з музикою. Для завершених релізів доступний EPUB; зовнішні платформи показуються, коли вони є.</p>
      <nav class="home-books-links" aria-label="Швидкий вибір книг">
        <a href="/books/">Нові книги безкоштовно</a>
        <a href="/books/">Усі безкоштовні книги</a>
        <a href="/books/">Що почитати</a>
        <a href="/books/?q=містика">Українська містика</a>
        <a href="/books/?q=філософ">Філософська проза</a>
        <a href="/books/#genres">Теми книг</a>
        <?php if($focusBook && empty($focusBook['without_text'])):?><a href="/books/<?=Html::e($focusBook['slug'])?>/read/?mode=music">♫ Читати з музикою</a><?php endif;?>
      </nav>
    </div>

    <div class="reading-demo reveal">
      <div class="reading-demo-copy">
        <div class="reading-demo-icon" aria-hidden="true">Aa</div>
        <div>
          <strong>Читати там, де зручно</strong>
          <span>На сайті з пам’яттю місця читання та з музикою; для фінальних релізів — також у EPUB або на зовнішній платформі.</span>
        </div>
      </div>
      <a class="btn btn-primary" href="/books/">Відкрити бібліотеку →</a>
    </div>

    <div class="book-grid">
      <?php foreach($books as $bookIndex=>$b):?>
      <article class="book-card reveal<?= $bookIndex >= $booksLimitDesktop ? ' home-book-hidden-desktop' : '' ?><?= $bookIndex >= $booksLimitMobile ? ' home-book-hidden-mobile' : '' ?>">
        <a class="book-cover-link" data-book-open href="/books/<?=Html::e($b['slug'])?>/">
          <div class="cover-shell"><?php if(!empty($b['cover_catalog'])):?><img src="<?=Html::e($b['cover_catalog'])?>" alt="Обкладинка — <?=Html::e($b['title'])?>"><?php endif;?></div>
        </a>
        <div class="card-meta">
          <div class="card-type"><?=Html::e($b['genre']??'')?></div>
          <h3 class="card-title"><a href="/books/<?=Html::e($b['slug'])?>/"><?=Html::e($b['title'])?></a></h3>
          <p class="card-copy"><?=Html::e($b['description']??'')?></p>
        </div>
      </article>
      <?php endforeach;?>
    </div>

    <div class="more-row reveal"><a class="btn" href="/books/">Усі твори →</a></div>
  </div>
</section>

<section class="statement" id="about">
  <div class="wrap reveal">
    <div class="eyebrow">Кредо</div>
    <blockquote>«Свою творчість я не сприймаю як товар. Я <em>віддаю її тим, кому вона потрібна.</em> Якщо вона комусь відгукнеться — цього вже достатньо.»</blockquote>
    <p>Тому підтримка тут не стоїть перед текстом. Спочатку — книга. Якщо після неї щось залишилося, можна просто пригостити автора кавою.</p>
  </div>
</section>

<section class="journal" id="blog">
  <div class="wrap">
    <div class="section-head reveal">
      <div><div class="eyebrow">Зона спілкування</div><h2>Блог</h2></div>
      <p class="section-copy">Короткі записи про книжки, читання, нові твори й думки, з яких іноді виростає наступний текст.</p>
    </div>

    <div class="journal-grid">
      <?php if($focusBlog):?>
      <article class="journal-feature reveal">
        <a class="journal-media" href="/blog/<?=Html::e($focusBlog['slug'])?>/"><?php if(!empty($focusBlog['image'])):?><img src="<?=Html::e($focusBlog['image'])?>" alt="<?=Html::e($focusBlog['image_alt']??$focusBlog['title'])?>"><?php endif;?></a>
        <div class="journal-copy">
          <div class="journal-meta"><span>У фокусі</span><span><?=Html::e($focusBlog['category']??'Блог')?></span></div>
          <h3><a href="/blog/<?=Html::e($focusBlog['slug'])?>/"><?=Html::e($focusBlog['title'])?></a></h3>
          <p><?=Html::e($focusBlog['excerpt']??'')?></p>
          <div class="journal-actions"><a class="btn btn-primary" href="/blog/<?=Html::e($focusBlog['slug'])?>/">Читати статтю →</a><a class="btn" href="/blog/">Увесь блог</a></div>
        </div>
      </article>
      <?php endif;?>

      <div class="journal-list">
        <?php foreach($posts as $p):?>
        <article class="reveal">
          <div class="journal-meta"><span><?=Html::e($p['category']??'Блог')?></span></div>
          <h3><a href="/blog/<?=Html::e($p['slug'])?>/"><?=Html::e($p['title'])?></a></h3>
          <p><?=Html::e($p['excerpt']??'')?></p>
        </article>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</section>

<section class="music" id="music">
  <div class="wrap">
    <div class="section-head reveal">
      <div><div class="eyebrow">Другий голос</div><h2>Музика</h2></div>
      <p class="section-copy">Окремий напрям MaVik_AI — музика поруч із прозою як інший медіум: інтонація, темп, настрій і післясмак.</p>
    </div>

    <div class="music-panel reveal">
      <a class="music-image" href="/music/" aria-label="Відкрити MaVik Music"><img src="/assets/images/mavik-music.jpg" alt="Музика MaVik"></a>
      <div class="music-content">
        <div class="eyebrow">MaVik_AI</div>
        <h3>Коли тексту<br>вже мало.</h3>
        <p>Треки, що народжуються з тих самих історій, образів і станів. Не фон до книг — інша форма тієї самої розмови.</p>
        <div class="platforms" aria-label="Музичні платформи"><span class="platform">YouTube</span><span class="platform">SoundCloud</span><span class="platform">YouTube Music</span><span class="platform">Spotify</span></div>
        <div class="music-action"><a class="btn btn-primary" href="/music/">Слухати музику →</a></div>
      </div>
    </div>
  </div>
</section>

<?php require dirname(__DIR__,3).'/Views/partials/forum.php'; ?>
<section class="support" id="support">
  <div class="wrap support-box reveal">
    <div>
      <div class="eyebrow" data-home-anchor-title>Післямова</div>
      <h2>Якщо книга зайшла —<br><span>можеш пригостити автора кавою.</span></h2>
      <p class="support-copy">Без підписок і «рівнів підтримки». Кава — просто знак, що текст не пройшов повз.</p>
      <a class="btn btn-gold" href="/support/" data-coffee-trigger>Пригостити кавою</a>
    </div>
    <div class="support-aside">«Спочатку я щось даю читачеві. І лише потім читач вирішує, чи хоче відповісти.»<small>принцип автора</small></div>
  </div>
</section>
