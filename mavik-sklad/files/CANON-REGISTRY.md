# MAVIK — CANON REGISTRY

Updated: 2026-08-19
Status: **AUTHORITATIVE INDEX**

## Site MAVIK.NAME

- Site start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Canon checkpoint: `mavik-sklad/files/R214-CANON.md`
- Sole structural/functional CORE base: **R214**

### Hard rules

1. Будь-яка наступна site structural/functional робота стартує тільки від **R214**.
2. `publication_mode` — єдине джерело істини для статусу книги та похідного SEO/public state.
3. `final ↔ beta` автоматично синхронізує EPUB, `/books/free/`, reader robots, sitemap, canonical/metadata, structured data та статусні SEO-описи.
4. Основний `/read/` final-книги індексується; `/read/text/` завжди `noindex,follow` з canonical на основну читанку.
5. EPUB regeneration має працювати і через ZipArchive, і через PharData fallback.
6. `/_site-state/` — protected live state; deploy/patch не повинен ламати узгодженість live/public/search state.
7. Після успішного нового full/multipart release старі rollback/release artifacts очищуються з робочого стану.
8. Routine content work — patch/overlay без прихованих CORE-змін.
9. Root `651fd21ecd39f1571c9d4ab6a9a7574c.txt` — protected IndexNow/Bing identity file.

## Canonical state

- Books: 21
- Final: 21
- Beta: 0
- EPUB: 21/21
- Main indexable readers: 21
- Sitemap page URLs: 86 unique
- Public JSON-LD: 55 valid blocks
- PHP: 35/35 lint OK

## Other active canons

- Human-writing canon: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- Shared creative working notebook: `mavik-sklad/files/00-ROBOCHYI-ZAPYSNYK-SPILNOHO-PYSMENNYA.md`
- Technical fiction canon: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoint/storage rules: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`
- Simple-first canon: `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- Privacy-media canon: `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- Public-blog editorial canon: `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`
- Protected SEO canon: `mavik-sklad/files/PROTECTED-SEO-FILES.md`

## Conflict rule

Останній прямо затверджений користувачем канон має найвищий пріоритет. Для site CORE авторитетний тільки **R214**.
