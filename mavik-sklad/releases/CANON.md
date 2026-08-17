# Канон збірок MAVIK.NAME

## Поточна канонічна база

**R210 — єдина чинна структурно-функціональна CORE-база сайту.**

Затверджено користувачем: **2026-08-17** після живої перевірки на Cityhost.

Канонічний checkpoint:
`mavik-sklad/files/R210-CANON-CHECKPOINT.md`

R1–R209 не використовувати як робочу або канонічну structural/functional базу. R207 — попередній канон. R208/R209 — неканонічні кандидати, поглинуті R210.

## Файли R210

- `210 Збірка_Сайт_PAGE-BUILDER-IMAP_PART-1.zip`
- `210 Збірка_Сайт_PAGE-BUILDER-IMAP_PART-2.zip`
- `210 Збірка_Сайт_PAGE-BUILDER-IMAP_bundle.zip` — архівний контейнер.

Постійне збереження: File Library `/Сайт/`.

Release manifest SHA-256:
`5fba1abf760b80f77f1bbbd15a0a2c2a61c7cd2d087c50555601fcd5c77b8d28`

ZIP SHA-256:
- PART-1: `2f4af9aa82aff5560257aee6e33bbc3ca91a3c61cdc119c660dcb667998b49cd`
- PART-2: `0e52f6bb0241528818d6f35d116253892105e4e76a3c891b98673e9c83b56e66`
- bundle: `cb6d2938a0195b124aa3926dba3ae2a3fcd003dfd60ac46465968ea32d18fe15`

Multipart set id: `r210-5fba1abf760b80f7`.
Managed files: `618`.

## Захищена поведінка R210

R210 включає й захищає:

- mobile PWA install flow; desktop без MaVik install UI;
- desktop без audio-reader UI і без `▶ Слухати`; mobile `Читати` = text-only; mobile `Слухати` = explicit `?listen=1`;
- центральну аудіокнопку `▶ Слухати ↔ ⏸ Пауза`;
- rollback-safe book creation;
- режими `Завершена · створити EPUB` / `Бета · без EPUB`;
- EPUB temp лише в `/_site-state/tmp/`;
- постійний registry жанрів;
- safe overlay-patch support;
- direct URL priority over stored language preference;
- логічне групування плиток Boss;
- drag&drop-конструктор ключових системних сторінок із preview та rollback попередньої версії;
- компактний список сторінок конструктора без обрізання назв;
- інтегрований поштовий клієнт Boss з IMAP/SMTP;
- автоматичний fallback з PHP IMAP на вбудований TLS IMAP через `stream_socket_client`;
- захищене server-only зберігання поштового пароля поза релізом/експортом state;
- порожній стан книги у фокусі без hard-coded fallback `Скульптор`;
- виправлене desktop-вирівнювання action-блоку в `Анонсах`;
- погоджену сторінку `Автор` і редагування системних сторінок через Boss.

## Maintenance — жорстке правило

У R210 **один глобальний maintenance mode**.

Не використовувати і не відновлювати без нового прямого рішення автора:
- окремий UA maintenance;
- окремий EN maintenance;
- `.maintenance-uk-on`;
- `.maintenance-en-on`;
- `maintenance/index.php` як locale-specific 503 logic.

## ЖОРСТКИЙ КАНОН ПІСЛЯ R210 — CODE/CORE FREEZE

Після канонізації R210 звичайна робота із сайтом виконується **лише PATCH/OVERLAY БЕЗ ЗМІНИ CORE-КОДУ R210**.

Не змінювати без нового прямого рішення користувача:
- PHP;
- JavaScript;
- CSS;
- Boss/deployer;
- templates/rendering architecture;
- PWA/service worker/manifest logic;
- navigation/SEO/indexing engine;
- maintenance architecture;
- locale routing;
- будь-який інший CORE-код, refactoring чи hidden optimization.

Дозволені PATCH/OVERLAY:
- книги та переклади;
- EPUB;
- обкладинки та ілюстрації;
- музика/медіа;
- блог і контентні сторінки;
- контентні дані/метадані;
- generated public/SEO artifacts, які створюються чинними механізмами R210 без зміни їхнього коду.

## Головний канон синхронізації

Контентні зміни через Boss або patch мають лишати узгодженими public state і search state, де релевантно: navigation/internal links, sitemap, robots/noindex, canonical, hreflang, structured data, IndexNow та внутрішній SEO-аудитор. Це робиться чинними можливостями R210, без модифікації CORE.

## English

English-контент доставляти штатними overlay-патчами R210. Не змінювати locale routing і не створювати окремий maintenance для `/en/`.

Єдине джерело нового English-тексту книги — канонічний український текст, фактично опублікований на `mavik.name`. Ніяких домислів чи доданого тексту.

`Соціальна` не перекладається англійською до нового прямого дозволу автора.

## Робоче правило

**Будь-яке нове наповнення стартує від R210 і доставляється тільки PATCH/OVERLAY без змін CORE-коду.**

R210 не перепаковувати, не refactor-ити й не «покращувати» як CORE без нового прямого дозволу користувача.
