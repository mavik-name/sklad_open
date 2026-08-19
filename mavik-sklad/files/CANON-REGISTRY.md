# MAVIK — CANON REGISTRY

Updated: 2026-08-19
Status: **AUTHORITATIVE INDEX**

## Site MAVIK.NAME

- Master start: `mavik-sklad/START-HERE.txt`
- Site start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Canon checkpoint: `mavik-sklad/files/R215-CANON.md`
- Cross-branch work journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`
- Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
- Sole structural/functional CORE base: **R215**

### Hard rules

1. Будь-яка наступна site structural/functional робота стартує тільки від **R215**.
2. Усе до R215 — obsolete release trash; не використовувати як робочу, recovery або comparison base без прямої історичної вимоги автора.
3. `publication_mode` — єдине джерело істини для статусу української книги та похідного SEO/public state.
4. `final ↔ beta` синхронізує EPUB, `/books/free/`, reader robots, sitemap, canonical/metadata, structured data та status-dependent SEO copy.
5. Основний `/read/` final-книги індексується; `/read/text/` — `noindex,follow`, canonical на main reader.
6. EPUB regeneration: ZipArchive + PharData fallback.
7. `/_site-state/` — protected live state; routine patch/deploy не повинен скидати live focus, порядок, статуси або media bindings.
8. Routine content work — PATCH/OVERLAY поверх R215 без прихованої зміни CORE.
9. Root `651fd21ecd39f1571c9d4ab6a9a7574c.txt` — protected IndexNow/Bing identity file.
10. Перед structural/functional release обов'язково читати `SITE-TECHNICAL-ROADMAP.md`.

## R215 canonical baseline

- Public book objects: 22 = 21 final library + 1 announcement.
- Ukrainian EPUB: 21/21.
- Main indexable Ukrainian readers: 21.
- Sitemap baseline: 86 unique canonical page URLs + 11 image entries.
- PHP: 35/35; JS: 17/17; XML: 2/2.
- Crawler verification: 86 URLs × Browser/Googlebot/Bingbot/OAI-SearchBot/ChatGPT-User = 430/430 HTTP 200 in verified Apache configuration.

## English publication state

Publication checkpoint: `mavik-sklad/translations/en/PUBLICATION-READY-R215.md`.
Persistent binaries: ChatGPT Library `/Сайт/book_patches/`.

**10 complete English editions are validated and packaged as R215 native Boss book patches:** Mom, I Want to Live!; The Nameless; The Man Without an Account; Rejection in Advance; Transfer; Solya...; Patterns of Self-Reflection; You and I...; The Gospel According to Macarius; Evacuation.

Expected cumulative state after installing all ten:
- 10 published EN books + 10 EN EPUB;
- `/en/books/` with 10 cards;
- sitemap 107 unique canonical page URLs;
- reciprocal UA↔EN hreflang on published book landing/read pairs.

Active incomplete English target: The Sculptor, continue from Chapter 4 using canonical R215 EPUB.
Social / Соціальна: English STOP remains active.

## Mandatory technical roadmap

Automatic cover media pipeline remains required: master original, JPEG fallback for opaque PNG, WebP/AVIF where safe, responsive derivatives, `<picture>`, batch rebuild, Boss self-test.

## Other active canons

- Human-writing canon: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- Shared creative notebook: `mavik-sklad/files/00-ROBOCHYI-ZAPYSNYK-SPILNOHO-PYSMENNYA.md`
- Technical fiction canon: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoint rules: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`
- Simple-first canon: `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- Privacy-media canon: `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- Public-blog editorial canon: `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`
- Protected SEO canon: `mavik-sklad/files/PROTECTED-SEO-FILES.md`

## Conflict rule

Останній прямо затверджений користувачем канон має найвищий пріоритет. Для site CORE авторитетний тільки **R215**.