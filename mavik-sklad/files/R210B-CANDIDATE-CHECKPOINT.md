# R210B — CANDIDATE CHECKPOINT · MAVIK.NAME

Дата збірки: 2026-08-17
Статус: **CANDIDATE / НЕ КАНОНІЗОВАНО**
Чинний канон до прямого затвердження автора: **R210**
R210A: **SUPERSEDED CANDIDATE** — не використовувати для нової живої перевірки.

## Чому створено R210B

Після встановлення оновленої R210A автор не побачив погоджених змін. Перевірка локальної збірки виявила дві технічні причини:

1. R210A кілька разів перезаписувалась під тими самими іменами ZIP, тому живий deploy/cache міг працювати зі старою ревізією.
2. В актуальному PHP уже був новий ordinary-page renderer, але готові `about/index.html`, `copyright/index.html` та інші ordinary outputs у пакеті залишалися з попереднього renderer-а. Крім того, живий `_site-state/site-core.json` уже мав `static_pages_seed_version = 2`, тому повторна R210A з тим самим seed version не оновлювала content-state.

R210B усуває обидві причини.

## Файли R210B

- `210B Збірка_Сайт_STATIC-PAGES_PART-1.zip`
- `210B Збірка_Сайт_STATIC-PAGES_PART-2.zip`
- `210B Збірка_Сайт_STATIC-PAGES_bundle.zip` — архівний контейнер; у Boss завантажуються PART-1 та PART-2.

Постійне збереження binary: **File Library `/Сайт/`**.

Внутрішній numeric release: `210` — для сумісності з deployer.
Display label: `210B`.
Revision: `B`.
Base release: `210`.
Managed files: `621`.
Multipart set id: `r210b-e0bd32f858789685`.
Full release manifest SHA-256: `e0bd32f8587896854b607f51c9d2daeea3c65005dd0dd51eb1583ec966624bae`.

ZIP SHA-256:
- PART 1: `35fbdaa932ce4711cc263b4300a2b1bab00b6adf4b15a66caa97ecfb0a659fec`
- PART 2: `b6db7e808efd10c8fabb59adaddda48bb35f37f18ad6634db88ecb8fcae556ad`
- bundle: `1d09798c80c4758132e7a11a323fefd8879481e0aecdc8221d3fd7602ee74538`

Розміри:
- PART 1: `26,717,196` bytes
- PART 2: `24,043,329` bytes
- bundle: `50,760,899` bytes

## Головна технічна відмінність від R210A

`_site-admin/state-defaults/static-pages.json` піднято з seed version **2 → 3**. Усі built-in ordinary pages мають revision 3.

Це означає: якщо на живому сайті вже стояла R210A і `_site-state/site-core.json` має seed version 2, перший `mavik_core_load()` у R210B **одноразово оновить** ordinary pages до поточного content-state revision 3.

Одночасно всі ordinary page outputs у самій release-tree **заздалегідь перегенеровані новим renderer-ом**, а CSS має новий cache-buster `static-pages.css?v=210b`.

## Що має реально з’явитися після R210B

### Автор `/about/`
- повний MaVik site shell;
- штатний footer;
- lead: `Письменництво для мене починалося як хобі...`;
- круглий портрет;
- desktop: портрет ліворуч із обтіканням текстом;
- mobile: портрет по центру над текстом;
- нижні переходи оформлені CTA-плашками.

### Права `/copyright/`
- повний ordinary-page shell;
- відновлені cards/law blocks/final accent/contact block;
- footer.

### Інші ordinary pages
- `/privacy/` і `/platformy/` рендеряться тим самим повним shell;
- правило однакове для UA та міжнародних locale.

### Інші зміни, успадковані з останньої R210A-роботи
- Boss → Пошта: unread beacon із кількістю непрочитаних, refresh раз на 60 секунд і після повернення у вкладку;
- блок `Пригостити кавою` обмежений viewport; QR збільшується в межах самого блоку.

## Перевірки

- PHP lint: **30/30 PHP-файлів OK**.
- Multipart validator Boss:
  - PART 1: OK, 460 entries;
  - PART 2: OK, 460 entries.
- ZIP CRC: обидві частини — OK.
- Контрольне складання: **621/621 managed files**, missing 0, mismatch 0, extras 0.
- Migration simulation `R210A seed v2 → R210B seed v3`: **OK**.
  - `about/privacy/copyright/platformy` отримали revision 3;
  - `/about/` містить `Письменництво...`, footer і `static-pages.css?v=210b`;
  - `/copyright/` містить `rights-grid` і footer.
- У release-tree напряму перевірено:
  - `about/index.html`: current renderer / footer / CTA / new lead — OK;
  - `copyright/index.html`: current renderer / rights design / footer — OK;
  - `privacy/index.html`, `platformy/index.html`: current renderer / footer — OK.

## Канонізація

До живої перевірки автора **R210 лишається канонічним CORE**.
R210B не канонізувати автоматично.

Після прямого `ОК` автора:
1. R210B стає єдиним канонічним CORE;
2. START-HERE / CANON / registry переводяться на R210B;
3. R210/R210A binary прибираються з активного `/Сайт/`, якщо автор цього не змінить;
4. R210 і R210A лишаються тільки історичними checkpoint-ами.