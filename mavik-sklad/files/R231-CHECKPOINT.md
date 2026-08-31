# MAVIK.NAME — R231 CHECKPOINT

Дата: 2026-08-31

## Статус
**R231 — VALIDATED RELEASE CANDIDATE / NOT CANONICAL.**

Чинний канон до прямого затвердження автора: **R230_Blog**.

## Ідентичність R231
- file: `R231.zip`
- size: `28007076` bytes
- SHA-256: `3175cfa7c7a9b599c9760b98d2702cadd6389cca6f053dad3f7e1d6001b25498`
- release: `231`
- release label: `R231`
- managed files: `268`
- ZIP entries: `393`

## Обов'язковий перший перехід з R230-сімейства
Встановлювати строго у два кроки:
1. `R231_BOOTSTRAP.zip`
2. `R231.zip`

Bootstrap:
- size: `11352` bytes
- SHA-256: `d579201f7da236ca603ad744c8c39e8540cfd33464bf7f6a8831d2945ed43329`
- змінює тільки `_site-admin/deploy.php`;
- base release: `230`;
- потрібен лише для того, щоб старий R230-family deployer отримав LIVE CONTENT FIRST protection ДО першого full deploy R231.

## Що входить у R231
### BookFix
- збережене виправлення додавання книг;
- жанровий фільтр більше не є окремою обов'язковою умовою;
- якщо фільтр не вибрано, Boss створює/підбирає його з поля «Жанр / підзаголовок».

### Блог-редактор
- режим `Візуальний`;
- режим `</> HTML` з реальним редагуванням коду;
- синхронізація HTML → visual та visual → HTML без втрати тексту;
- серверний sanitizer HTML залишається активним;
- редактор має власну вертикальну прокрутку;
- desktop height: `clamp(420px,60vh,680px)`;
- mobile: `56vh`, min `340px`, max `560px`;
- toolbar залишається над внутрішнім scroll-area, тому посилання/форматування не треба шукати нагорі сторінки;
- зміна висоти scoped тільки до `.blog-editor-form`, інші rich editors не зачіпаються.

### LIVE CONTENT FIRST — реалізовано в deploy-коді
Перед full deploy snapshot:
- `blog/index.html`;
- `blog/feed.xml`;
- `blog/*/index.html`.

Після копіювання релізу live blog content відновлюється перед post-deploy sync.
Пости, позначені `deleted` у protected `/_site-state/boss-content.json`, не воскресають зі старішого release ZIP.
User media protected paths не перезаписуються.
Старий reader text snapshot/restore збережено.

## Валідація
PASS:
- PHP `31/31`;
- external JS `15/15`;
- inline blog-editor JS syntax;
- browser test HTML/visual toggle + internal scroll;
- JSON `12/12`;
- public JSON-LD `82/82`;
- EPUB CRC `21/21`;
- manifest `268/268`;
- ZIP integrity `393 entries / 268 files`;
- two-step deployment simulation;
- existing live article preserved;
- live blog index preserved;
- live RSS preserved;
- new live article absent from old ZIP preserved;
- deleted live article not resurrected;
- user blog media preserved;
- R231 deployer remains installed after full release.

## Канон
R231 не канонізувати автоматично. Після встановлення й перевірки автора — лише за прямою командою.
