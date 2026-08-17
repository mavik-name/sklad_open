# R210E — CANDIDATE CHECKPOINT · MAVIK.NAME

Дата збірки: 2026-08-18
Статус: **CANDIDATE / НЕ КАНОНІЗОВАНО**
Чинний канон до прямого затвердження автора: **R210**
Попередні буквені кандидати: R210A → R210B → R210C → R210D.

## Головне рішення R210E

Після живої перевірки R210D автор встановив остаточне правило: **усі публічні сторінки без винятків мають користуватися однією стабільною дизайн-системою**, а статичний informational CMS у Boss треба прибрати як непотрібне ускладнення.

R210E тому не продовжує латати окремі сторінки. Вона спрощує архітектуру:

- один global public shell;
- одна font-family по всьому сайту;
- лише три breakpoint-и;
- обмежена максимальна ширина замість безмежної «гумової» верстки;
- зарезервована геометрія `Назад` до JavaScript-монтажу;
- один footer rhythm;
- статичні сторінки — прості release HTML, без окремого CMS/state/масиву блоків.

## Глобальна дизайн-система

### Шрифт

Увесь публічний сайт примусово використовує:

`Georgia, 'Times New Roman', serif`

Це стосується заголовків, тексту, меню, кнопок, форм, карток, блогу, анонсів, книг, музики, footer і reader UI. Відмінність між ролями задається лише кеглем/вагою/міжрядковим інтервалом, а не іншою font-family.

Зовнішні webfont не потрібні, тому немає пізньої заміни метрик шрифту й пов'язаного CLS.

### Breakpoint-и

Тільки три режими:

- mobile: `<= 767 px`;
- tablet / вузький desktop: `768–1099 px`;
- desktop: `>= 1100 px`.

Основний shell:

- desktop max-width: **1120 px**;
- tablet max-width: **920 px**;
- mobile max-width: **620 px**;
- основна текстова/ordinary card: до **960 px**.

Великі монітори не розтягують композицію — додається лише бокове повітря.

Фіксований shared `h1`:

- desktop: **64 px**;
- tablet: **52 px**;
- mobile: **42 px**.

Core typography не використовує fluid `clamp()` для основних метрик.

## Усі сторінки без винятків

Global system підключено до всіх **180/180** публічних HTML у збірці та до Boss-шаблонів генерації нових сторінок.

Охоплено, зокрема:

- головну;
- блог-список і всі blog articles;
- Автор;
- Приватність;
- Права;
- Платформи;
- Книги і book landing;
- читалку (її функціональна reading-width логіка лишається, але font-family спільна);
- Анонси;
- Теми;
- Що почитати;
- жанри;
- Музику;
- міжнародні мовні оболонки/шаблони.

## CLS / «літання» сторінок

Для non-home public pages геометрія кнопки `Назад` зарезервована в HTML/CSS **до** того, як JavaScript вставляє саму кнопку. Тому її поява не повинна зсувати hero/контент униз.

Для desktop/tablet увімкнено стабільний scrollbar gutter, а зображення/author portrait мають стабільні розміри/aspect-ratio, щоб їх завантаження не пересувало текст.

Контрольні позиції на тестових сторінках `Автор / Книги / Анонси / Музика / Права`:

- 1440 px: shell 1120, Back Y=153, h1=64;
- 900 px: shared Back Y=141, h1=52;
- 390 px: shared Back Y=111, h1=42.

`Блог` використовує той самий inner shell і typography; `Головна` — той самий max-width system без кнопки `Назад`.

## Footer

Footer уніфіковано по всьому публічному сайту.

Copyright row починається рівно **10 px нижче верхньої межі footer** у всіх трьох breakpoint-ах.

Контрольний render: desktop/tablet/mobile = **10 px / 10 px / 10 px**.

## Статичні сторінки: CMS прибрано

За прямим рішенням автора універсальне редагування інформаційних сторінок через Boss більше не потрібне.

Із Boss прибрано ordinary/static page editor і його зайву інфраструктуру. Сторінки:

- Автор;
- Права;
- Приватність;
- Платформи;
- їх міжнародні аналоги

є простими release HTML-файлами на shared global template. Їх текст/фото надалі змінюються малим ZIP-overlay/патчем, без окремого CMS.

`_site-admin/state-defaults/static-pages.json` видалено. Legacy `pages`, `sections` і `static_pages_seed_version` одноразово очищаються з `site-core.json`, не зачіпаючи функціональні настройки.

Функціональні редактори Boss **залишаються**: книги, блог, музика, анонси, functional page-builder, меню, мови, медіа, SEO, пошта тощо.

## Boss / адмінка

Boss спрощено після видалення static CMS:

- менше технічних плиток і зайвих редакторів;
- у `Сторінках` лишається функціональний каркас і швидкі посилання на static pages;
- додано компактний smart status strip: release / site status / `Статика: патчі` / `CORE: функціональні сторінки`;
- панелі/картки/відступи приведено до єдиної спокійної геометрії;
- верхня навігація sticky;
- Boss також використовує єдину Georgia-family;
- mail unread beacon біля `Пошта` збережено: count, pulse, refresh при відкритті / раз на 60 секунд / після повернення у вкладку.

## Runtime data і чистий FTP deploy

R210E спеціально придатна для чистого розгортання. Старі `/boss/` та `/_site-admin/` **не треба зберігати** — у R210E є свіжі копії.

Перед ручним очищенням FTP обов'язково зберегти, якщо існують:

- `/_site-state/` — **ОБОВ'ЯЗКОВО**: owner auth, пароль/пошта, налаштування, state, deploy history;
- `/analytics/data/`;
- `/reactions/data/`;
- `/assets/music/user/`;
- `/assets/music/user-covers/`;
- `/assets/blog/user/`.

Якщо на сервері є вручну завантажені зображення, яких немає в release, їх треба окремо скопіювати перед очищенням. Known canonical `/images/blog/`, `/images/covers/`, `/images/author/` уже є в R210E.

Deployer R210E захищає `_site-state`, analytics/reactions data, user music, user music covers і Boss-uploaded blog images від видалення/перезапису як release-managed data.

## Файли R210E

- `210E Збірка_Сайт_CLEAN-GLOBAL_PART-1.zip`
- `210E Збірка_Сайт_CLEAN-GLOBAL_PART-2.zip`
- `210E Збірка_Сайт_CLEAN-GLOBAL_bundle.zip`

Постійне збереження: **File Library `/Сайт/`** — усі три binary R210E завантажені окремо.

Внутрішній numeric release: `210`
Display label: `210E`
Revision: `E`
Base release: `210`
Managed files: **625**
Multipart set id: `r210e-d4ba49380809f481`
Full release manifest SHA-256: `d4ba49380809f4816b6979c9dade4c5352e874f797dbbea534334a0366c9cfce`

ZIP SHA-256:

- PART 1: `06771b43eae8dd0a0a37fe0a858eb5abab2e41a51244a181bfaaa668c48cd8af`
- PART 2: `ab53bc5e0654cbb748ba39db83f23f1e48296f44b92ddb6ec006979f63d7cf7f`
- bundle: `f48aecdc59af9d7c48daf6cf27c091d4d41ffa2c75608c993452f7050ca333d8`

Розміри:

- PART 1: `26,639,846` bytes;
- PART 2: `24,117,270` bytes;
- bundle: `50,757,490` bytes.

## Перевірки

- PHP lint: **30/30 OK**;
- public HTML global design hook: **180/180**;
- static CMS seed/editor residue check: **OK**;
- shared Boss smartbar: **OK**;
- runtime protection: music / covers / blog uploads: **OK**;
- multipart extraction + byte-hash merge: **625/625**, missing 0, mismatch 0;
- ZIP read/extract CRC: **OK**;
- visual geometry checked at **1440 / 900 / 390 px**;
- shared font verified: Georgia-family;
- shared h1 verified: **64 / 52 / 42 px**;
- shared Back Y on comparable public pages: **153 / 141 / 111**;
- footer top → copyright: **10 / 10 / 10 px**.

## Канонізація

До живого встановлення та прямого `ОК` автора **R210 залишається канонічним CORE**.

R210E — актуальний кандидат. R210A/B/C/D вважати попередніми/заміненими кандидатами.

Після прямого підтвердження автора окремо виконати канонізацію та очищення старих binary/checkpoint references.