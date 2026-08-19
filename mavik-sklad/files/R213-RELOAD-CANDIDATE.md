# R213-reload — CANDIDATE CHECKPOINT · MAVIK.NAME

Дата: 2026-08-19
Статус: **готовий до встановлення поверх канонічного R213; ще не канонізований до живої перевірки автором**.

## База

- Канонічна база: R213.
- Numeric release для сумісності Boss: `213`.
- `base_release`: `213`.
- `release_label`: `213-reload`.
- Managed files: **629**.
- Manifest SHA-256: `8d93786fe3832b90b86485587f8aab2be004aa4ab07a340c99a75057bde7f556`.
- Multipart set id: `r213-reload-8d93786fe3832b90`.

## Артефакти

- `R213-reload Збірка_Сайт_ОК.zip`
  - SHA-256: `0456895fd3fca6bcbe6737794e0480537f0c3ab343d4f7804d857e89348ec65e`
- `R213-reload Збірка_Сайт_ОК_PART1.zip`
  - SHA-256: `4633d2fca755e3feb9d6a3f5b503dd01f5df791fd77d5fb5576757b50f5977f3`
- `R213-reload Збірка_Сайт_ОК_PART2.zip`
  - SHA-256: `d0b330eaec320e11ccb3f71be1011e6f1718124cb3264577316699fca278ea44`

Постійне збереження: ChatGPT Library `/Сайт/`.

## Що виправлено

1. `Соціальна` переведена у завершені книги й отримала EPUB.
2. Стан: **21 завершена книга, 0 beta**.
3. Основні `/books/<slug>/read/` для final-книг: `index,follow`, self-canonical, входять у sitemap.
4. `/read/text/`: завжди `noindex,follow`, canonical на основну читанку, щоб не створювати текстові дублікати.
5. `Код легенди` як анонсована книжкова сторінка узгоджена із sitemap.
6. `/books/free/`, каталог, JSON-LD, sitemap та SEO-лічильники синхронізовані зі статусами книг.
7. Старі службові release-notes/міграції до R213 вилучені з managed release; deploy видаляє їх як obsolete.
8. Cache keys нормалізовано до `213reload`.

## Автоматична парадигма статусу

`publication_mode` є єдиним джерелом істини.

### final

- EPUB має існувати / створюється Boss;
- основна `/read/` → `index,follow`;
- self-canonical `/read/`;
- читанка входить у sitemap;
- книга входить у `/books/free/`;
- JSON-LD та посадкова сторінка перебудовуються під завершений статус.

### beta

- EPUB видаляється;
- основна `/read/` → `noindex,follow`;
- reader вилучається із sitemap;
- книга вилучається із `/books/free/`;
- landing лишається індексованим, якщо книга публічна;
- beta-позначення та metadata перебудовуються автоматично.

### text reader

Незалежно від статусу `/read/text/` лишається `noindex,follow` і canonical на основну `/read/`.

Boss після зміни статусу автоматично запускає перебудову похідних public/SEO-артефактів. Одноразовий bootstrap R213-reload виправляє старий protected live-state `Соціальної`, якщо на сервері там ще збережено `beta`.

## Перевірки

- PHP lint: **35/35 OK**.
- Public JSON-LD: **55 блоків, 0 помилок**.
- Sitemap: **86 URL / 86 унікальних**.
- Library books: **21**, final: **21**, beta: **0**.
- EPUB: **21/21**, структура EPUB перевірена.
- Multipart payload: **628/628**, дублі між частинами: **0**.
- Full ZIP та обидві multipart-частини пройшли штатні валідатори Boss.
- Симуляція оновлення старого R213-state: `Соціальна beta → final` автоматично; старі R211/R212 runtime-маркери прибираються.
- Динамічний тест `final → beta → final`: reader/noindex, EPUB, `/books/free/` та sitemap перебудовуються узгоджено.

## Канонізація

До встановлення на живий Cityhost і прямого `ОК` автора **R213 залишається чинним каноном**. Після живої перевірки оновити `mavik-sklad/releases/CANON.md`, `CANON-REGISTRY.md` і замінити цей candidate checkpoint на канонічний R213-reload checkpoint.
