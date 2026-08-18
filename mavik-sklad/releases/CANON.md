# Канон збірок MAVIK.NAME

## Поточна канонічна база

**R210G — єдина чинна структурно-функціональна CORE-база сайту.**

Затверджено користувачем: **2026-08-18** після живої перевірки.

Канонічний checkpoint:
`mavik-sklad/files/R210G-CANON-CHECKPOINT.md`

R1–R210F не використовувати як робочу або канонічну structural/functional базу. R210 — попередній канон; R210A–R210F — проміжні буквені ревізії, поглинуті R210G.

## Канонічний binary R210G

- `210G Збірка_Сайт_MENU-BACK-TIGHT_FTP-FULL.zip`
- повторно завантажена користувачем еквівалентна копія: `210G Збірка_(1).zip`

FTP-FULL SHA-256:
`eebcbefaa6683078dd1744b790e42a6526f6db4520a6e344e5e774d9946a672c`

Full manifest SHA-256:
`d45830fff4481434ce68be6a236391a566b07987a10b64e82e9019acc3694c02`

Multipart set id: `r210g-d45830fff4481434`.
Managed files: `627`.

ZIP-контроль повторно завантаженої копії: CRC **OK**, 627 entries; SHA-256 збігається з R210G FTP-FULL.

## Захищена поведінка R210G

R210G успадковує захищену поведінку R210 і наступних буквенных ревізій, зокрема:

- mobile-only PWA install flow; desktop без MaVik install UI;
- desktop без audio-reader UI і без `▶ Слухати`; mobile `Читати` = text-only; mobile `Слухати` = explicit `?listen=1`;
- центральну аудіокнопку `▶ Слухати ↔ ⏸ Пауза`;
- rollback-safe book creation;
- режими `Завершена · створити EPUB` / `Бета · без EPUB`;
- EPUB temp лише в `/_site-state/tmp/`;
- постійний registry жанрів;
- safe overlay-patch support;
- direct URL priority over stored language preference;
- логічне групування плиток Boss;
- інтегрований поштовий клієнт Boss з IMAP/SMTP і TLS fallback;
- server-only зберігання поштових облікових даних;
- порожній focus-state без hard-coded `Скульптор` fallback;
- один global maintenance mode;
- `/_site-state/` не перезаписується штатним deploy/patch;
- global public shell R210E/F/G;
- `Назад` як перший пункт внутрішнього меню;
- чинну геометрію desktop/tablet/mobile R210G;
- Boss → Книги: штатне видалення книги з confirm і cleanup focus/live order.

## Maintenance — жорстке правило

У R210G **один глобальний maintenance mode**.

Не використовувати і не відновлювати без нового прямого рішення автора:
- окремий UA maintenance;
- окремий EN maintenance;
- `.maintenance-uk-on`;
- `.maintenance-en-on`;
- locale-specific 503 logic.

## CODE/CORE FREEZE ПІСЛЯ R210G

Після канонізації R210G звичайна робота із сайтом виконується **PATCH/OVERLAY БЕЗ ЗМІНИ CORE-КОДУ R210G**.

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
- generated public/SEO artifacts, які створюються чинними механізмами R210G без зміни їхнього коду.

## Головний канон синхронізації

Контентні зміни через Boss або patch мають лишати узгодженими public state і search state, де релевантно: navigation/internal links, sitemap, robots/noindex, canonical, hreflang, structured data, IndexNow та внутрішній SEO-аудитор. Це робиться чинними можливостями R210G, без модифікації CORE.

## English

English-контент доставляти штатними overlay-патчами R210G. Не змінювати locale routing і не створювати окремий maintenance для `/en/`.

Єдине джерело нового English-тексту книги — канонічний український текст, фактично опублікований на `mavik.name`. Ніяких домислів чи доданого тексту.

`Соціальна` не перекладається англійською до нового прямого дозволу автора.

## Робоче правило

**Будь-яка нова structural/functional робота стартує від R210G.**

Routine content work — тільки PATCH/OVERLAY поверх R210G. R210G не перепаковувати, не refactor-ити й не «покращувати» як CORE без нового прямого дозволу користувача.