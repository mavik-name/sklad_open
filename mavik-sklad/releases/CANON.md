# Канон збірок MAVIK.NAME

Оновлено: 2026-08-19

## Єдина чинна канонічна база

**R214 — єдина чинна structural/functional CORE-база сайту.**

Канонічний checkpoint:
`mavik-sklad/files/R214-CANON.md`

## Канонічні binary

- `214 Збірка_Сайт_ОК.zip`
- `214 Збірка_Сайт_ОК_PART1.zip`
- `214 Збірка_Сайт_ОК_PART2.zip`

Постійне збереження: ChatGPT Library `/Сайт/`.

Manifest SHA-256:
`27a33d77fd5f16bfce7ba01270eb236d37be257545b9c48db8dd9c7641d7e759`

Multipart set id:
`r214-27a33d77fd5f16bf`

FULL SHA-256:
`63f25eec23f7a68c15e31bec732802125e199db0759d1fb135dba81898f1d2d3`

PART1 SHA-256:
`f5b6787cc7cd6b9fcf264540074c951c2beceb7d310e27d75a4ed62a8aacf112`

PART2 SHA-256:
`0fd93319038963117aefdee0e81691b6ff2d1b7deb234ce587d2e085ad880598`

Managed files: **629**.

## Канонічний стан

- Books: **21**
- Final: **21**
- Beta: **0**
- EPUB: **21/21**
- Main indexable readers: **21**
- Sitemap page URLs: **86 unique**
- Public JSON-LD: **55 valid blocks**
- PHP lint: **35/35 OK**

`publication_mode` — єдине джерело істини. `final ↔ beta` автоматично синхронізує EPUB, `/books/free/`, reader robots, canonical, sitemap, structured data та динамічні SEO-описи каталогу/нових книг.

EPUB regeneration працює через ZipArchive або PharData ZIP fallback.

## Cleanup policy

R214 є самодостатнім релізом (`release=214`, `base_release=214`). Старі release-owned файли, migration markers і deployment history не є робочим станом. Після успішного full/multipart deploy rollback-копії попереднього релізу видаляються; rollback зберігається лише до моменту успішного завершення встановлення.

## Робоче правило

Будь-яка наступна structural/functional робота стартує **тільки від R214**.

Routine content work — PATCH/OVERLAY поверх R214 без прихованої зміни CORE.

`/_site-state/` — protected live state; статусні зміни мають лишати public/search state узгодженими.

Root IndexNow/Bing verification key `651fd21ecd39f1571c9d4ab6a9a7574c.txt` — protected SEO identity file.

Будь-який наступний full release стає новою єдиною базою після прямого рішення автора; попередні release artifacts після цього мають бути очищені з робочих сховищ.
