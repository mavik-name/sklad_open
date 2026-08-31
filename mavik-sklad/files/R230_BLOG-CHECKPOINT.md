# MAVIK.NAME — R230_Blog CHECKPOINT

Дата: 2026-08-31

## Статус
**R230_Blog — RELEASE CANDIDATE / VALIDATED / NOT CANONICAL.**

Канонічна база: **R230**.
R229: preserved rollback reserve.

## Ідентичність
- file: `R230_Blog.zip`
- size: `28005701` bytes
- SHA-256: `ad1d46c7209e53e0c4058ad033a30946a3cffc85b5ec9677f8af4d2d7bdcc348`
- release label: `R230_Blog`
- numeric release: `230`
- base release: `230`
- managed files: `268`
- ZIP entries: `393`

## Зміна
Єдина функціонально-візуальна корекція — читабельність тексту блогу.

Текст кожної статті (`.article-body`) тепер розміщений на окремій панелі за тією самою візуальною логікою, що й контентна картка сторінки «Про автора»:
- `background: var(--panel,#111113)`;
- рамка `1px solid var(--line)`;
- desktop radius 18px;
- mobile radius 16px;
- responsive внутрішні відступи;
- легка тінь.

Тексти блогових постів НЕ змінювалися.

## Cache busting
Щоб браузер не показував старий чорний варіант із кешу, тільки для `assets/blog/blog.css` змінено query version:
- було: `v=228`
- стало: `v=230blog`

Зміна застосована до всіх наявних blog HTML та Boss-шаблону нової статті.

## Release identity
- `.mavik-release.json`: label `R230_Blog`, base `230`;
- `.htaccess`: `X-MaVik-Release: R230_Blog`;
- Boss/Stats читають label із маніфесту; SEO header-check очікує `R230_Blog`.

## Валідація
PASS:
- R230 source SHA exact: `e03cbfdd328d176eacb9548c75fc73d119ec8f924fbe1f2e669fefca2f2abea0`;
- PHP 31/31 syntax PASS;
- JS 15/15 syntax PASS;
- JSON 12/12 parse PASS;
- EPUB 21/21 CRC PASS;
- 13 blog HTML/template files: контент ідентичний R230, окрім cache-buster blog.css;
- manifest 268/268 files present;
- ZIP integrity PASS;
- full Boss deploy simulation PASS;
- `/_site-state/` preservation PASS;
- blog panel та cache-buster зберігаються після post-deploy sync.

## Канон
**R230 залишається єдиним каноном до прямого затвердження автора R230_Blog.**
Не переводити R230_Blog у canonical автоматично.
