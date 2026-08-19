# R214 — CANON CHECKPOINT · MAVIK.NAME

Дата: 2026-08-19
Статус: **ЄДИНА ЧИННА STRUCTURAL/FUNCTIONAL CORE-БАЗА**

## Канонічні артефакти

- `214 Збірка_Сайт_ОК.zip`
  - SHA-256: `63f25eec23f7a68c15e31bec732802125e199db0759d1fb135dba81898f1d2d3`
- `214 Збірка_Сайт_ОК_PART1.zip`
  - SHA-256: `f5b6787cc7cd6b9fcf264540074c951c2beceb7d310e27d75a4ed62a8aacf112`
- `214 Збірка_Сайт_ОК_PART2.zip`
  - SHA-256: `0fd93319038963117aefdee0e81691b6ff2d1b7deb234ce587d2e085ad880598`

Manifest SHA-256: `27a33d77fd5f16bfce7ba01270eb236d37be257545b9c48db8dd9c7641d7e759`
Multipart set id: `r214-27a33d77fd5f16bf`
Managed files: **629**.

## Канонічний стан

- Books: **21**
- Final: **21**
- Beta: **0**
- EPUB: **21/21**
- Main indexable readers: **21**
- `/read/text/`: `noindex,follow`, canonical → main `/read/`
- Sitemap page URLs: **86 unique**
- Public JSON-LD: **55 valid blocks**
- PHP lint: **35/35 OK**

## Автоматична статусна синхронізація

`publication_mode` — єдине джерело істини.

### final
- EPUB існує або створюється;
- main `/read/` → `index,follow`;
- self-canonical;
- main reader входить у sitemap;
- книга входить у `/books/free/`;
- landing, JSON-LD, metadata, каталог і `/books/new/` перебудовуються під завершений статус.

### beta
- EPUB видаляється;
- main `/read/` → `noindex,follow`;
- reader вилучається із sitemap;
- книга вилучається із `/books/free/`;
- landing лишається публічним/indexable, якщо книга публічна;
- beta metadata і динамічні статусні описи перебудовуються автоматично.

### text reader
`/read/text/` завжди `noindex,follow` і canonical на main `/read/`.

EPUB generation використовує ZipArchive, а за його відсутності — PharData ZIP fallback.

## Cleanup / deploy

R214 самодостатній: `release=214`, `base_release=214`.

Після успішного full/multipart deploy:
- obsolete managed files попереднього релізу видаляються;
- старі migration markers очищуються;
- deployment history нормалізується до актуального релізу;
- rollback backup попереднього релізу видаляється лише після успішного завершення встановлення.

До моменту успішного завершення rollback зберігається як страховка від невдалого deploy.

## Перевірки

- PHP lint: **35/35 OK**
- JSON: **OK**
- Public JSON-LD: **55/55 valid**
- Sitemap: **86/86 unique page URLs**
- Books: **21 final / 0 beta**
- EPUB: **21/21**
- Full ZIP і multipart: штатні Boss validators — **OK**
- Multipart coverage: повне, cross-part duplicates: **0**
- Full deploy simulation: **OK**
- Obsolete release file cleanup: **OK**
- migrations/history/backups post-success cleanup: **OK**
- Dynamic `final → beta → final`: **OK**
- EPUB physical delete/recreate during status test: **OK**
- `/books/new/` dynamic status wording: **OK**

## Жорстке робоче правило

Будь-яка наступна structural/functional робота стартує **тільки від R214**.

Попередні release ZIP/checkpoint/recovery/candidate не використовуються як джерело стану або база нової роботи.
