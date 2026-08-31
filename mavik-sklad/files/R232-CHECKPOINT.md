# MAVIK.NAME — R232 CHECKPOINT

Дата: 2026-08-31

Статус: **VALIDATED RELEASE CANDIDATE / NOT CANONICAL**

## База
- base: `R231_LinkFix`
- base full SHA-256: `d0ec1a1c974be773e1446d7dc128b462e3bcc3c16c2ca166020c7d5752961ec2`
- чинний офіційний канон до прямої команди автора: `R230_Blog`

## R232 identity
- file: `R232.zip`
- size: `28007292` bytes
- SHA-256: `723b8c107f77dbffef2840c8d5f1eb5205d1682fc507ca847d05cc9268398d53`
- release: `232`
- release label: `R232`
- base release numeric: `231`
- managed files: `268`
- ZIP entries: `393`

## Головне виправлення — blog href save
Реальна причина втрати посилань була в server-side sanitizer у `boss/index.php`: regex використовував `#` як delimiter і одночасно як неекранований дозволений anchor-prefix. Через це перевірка href ламалася і сервер міг мовчки видалити `href` з `<a>` під час збереження.

R232:
- використовує коректний regex delimiter;
- дозволяє `http://`, `https://`, `/internal/`, `./`, `../`, `#anchor`, `mailto:`;
- `www.example.com/...` і `example.com/...` нормалізує в `https://...`;
- небезпечні схеми типу `javascript:` блокує;
- якщо submitted HTML містив href, який sanitizer не може безпечно зберегти, збереження зупиняється з явною помилкою замість silent success.

DOM/Range LinkFix із R231 збережено: visual editor, HTML textarea і hidden `body_html` синхронізуються після вставлення посилання.

## Окремий екран «Редагувати допис»
Після кліку `Редагувати` в блозі:
- список `Записи блогу` більше не рендериться над редактором;
- показується тільки panel `Редагувати допис`;
- є `← До списку`;
- є `Відкрити ↗`;
- visual/HTML editor та internal scroll збережені.

## Успадковано
- весь R230/R230_Blog mail/core;
- BookFix;
- visual / HTML blog editor;
- internal editor scroll;
- DOM Range link insertion;
- LIVE CONTENT FIRST deploy protection.

## Валідація
PASS:
- PHP `31/31` syntax;
- static JS `15/15`;
- inline blog editor JS;
- JSON `12/12`;
- public JSON-LD `82/82`;
- EPUB CRC `21/21`;
- manifest `268/268`;
- ZIP integrity;
- link policy: https/internal/anchor/mailto/bare-domain accepted, javascript blocked;
- full deploy simulation from R231-family deployer: `268 copied`, `0 removed`;
- live article preserved;
- live blog index preserved;
- live RSS preserved;
- live-only new blog post preserved;
- user blog media preserved;
- deleted live post did not resurrect.

## Changed files vs R231_LinkFix
Only:
1. `.htaccess`
2. `.mavik-release.json`
3. `_site-admin/seo-tools.php`
4. `boss/index.php`
5. `stats/index.php`

Public blog text/content files were not edited for R232.

## Installation
If R231 is already installed, install `R232.zip` directly. No bootstrap is required because R231 deploy already contains LIVE CONTENT FIRST protection.

Do not mark R232 canonical until the author explicitly approves it.
