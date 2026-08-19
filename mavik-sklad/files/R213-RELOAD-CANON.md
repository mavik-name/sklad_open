# R213-reload — CANON CHECKPOINT · MAVIK.NAME

Дата канонізації: 2026-08-19
Статус: **ЄДИНА ЧИННА STRUCTURAL/FUNCTIONAL CORE-БАЗА**
Авторське рішення: R213-reload канонізовано прямим підтвердженням користувача.

## Походження

- Direct base: R213.
- Numeric release для сумісності Boss: `213`.
- `base_release`: `213`.
- `release_label`: `213-reload`.

R213 після цієї канонізації є лише попередником і не використовується як робоча база.

## Канонічні артефакти

- `R213-reload Збірка_Сайт_ОК.zip`
  - SHA-256: `0456895fd3fca6bcbe6737794e0480537f0c3ab343d4f7804d857e89348ec65e`
- `R213-reload Збірка_Сайт_ОК_PART1.zip`
  - SHA-256: `4633d2fca755e3feb9d6a3f5b503dd01f5df791fd77d5fb5576757b50f5977f3`
- `R213-reload Збірка_Сайт_ОК_PART2.zip`
  - SHA-256: `d0b330eaec320e11ccb3f71be1011e6f1718124cb3264577316699fca278ea44`

Manifest SHA-256: `8d93786fe3832b90b86485587f8aab2be004aa4ab07a340c99a75057bde7f556`
Multipart set id: `r213-reload-8d93786fe3832b90`
Managed files: **629**.

## Канонічний стан книг

- Books: **21**
- Final: **21**
- Beta: **0**
- EPUB: **21/21**
- Main indexable readers: **21**
- `/read/text/`: `noindex,follow`, canonical → main `/read/`
- Sitemap: **86 unique URLs**

`Соціальна` — завершена книга, не beta.

## Автоматична парадигма статусу

`publication_mode` — єдине джерело істини.

### final
- EPUB існує / створюється;
- main `/read/` → `index,follow`;
- self-canonical;
- main reader входить у sitemap;
- книга входить у `/books/free/`;
- JSON-LD, metadata та публічні похідні синхронізуються як завершений твір.

### beta
- EPUB видаляється;
- main `/read/` → `noindex,follow`;
- reader вилучається із sitemap;
- книга вилучається із `/books/free/`;
- landing page лишається публічним/indexable, якщо книга публічна;
- beta metadata перебудовуються автоматично.

### text reader
`/read/text/` завжди `noindex,follow` і canonical на main `/read/`.

Boss після зміни статусу перебудовує похідні public/SEO artifacts. Bootstrap R213-reload виправляє старий protected live-state, якщо там лишився застарілий beta-status `Соціальної`.

## Перевірки

- PHP lint: 35/35 OK
- Public JSON-LD: 55 блоків, 0 помилок
- Sitemap: 86/86 unique
- Books: 21 final / 0 beta
- EPUB: 21/21
- Multipart payload: 628/628, cross-part duplicates: 0
- Full ZIP + multipart пройшли штатні Boss validators
- Upgrade simulation R213 → R213-reload: OK
- Dynamic `final → beta → final`: OK

## Жорстке робоче правило

Будь-яка наступна structural/functional робота стартує **тільки від R213-reload**.

R214 WIP, зібраний від старого R213, не є валідним наступником і не використовується без повного rebase на R213-reload.

Майбутня збірка стає каноном лише після нового прямого затвердження автора.
