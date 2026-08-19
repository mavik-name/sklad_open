# R215 — CANON CHECKPOINT · MAVIK.NAME

Updated: 2026-08-19
Status: **OFFICIAL CANON / SOLE STRUCTURAL-FUNCTIONAL CORE BASE**

## Authority

R215 is the only canonical structural/functional site base. Everything before R215 is obsolete release trash and must not be used as a working, recovery, comparison or continuation base unless the author explicitly requests historical recovery.

Release authority: `mavik-sklad/releases/CANON.md`.
Handoff journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`.
Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`.

## Canonical binary

- `215 Збірка_Сайт_ОК.zip`
- `215 Збірка_Сайт_ОК_PART1.zip`
- `215 Збірка_Сайт_ОК_PART2.zip`

Manifest SHA-256: `39c99c980a186d6630a4a0be4ae370ac20f647333e14f474c7a44ad325d484d5`
Multipart set id: `r215-39c99c980a186d66`
FULL SHA-256: `3e2da10b16c6e697a6f4f945c4f3ed781d4ddd751b00e558c587be9e0ac2c8eb`
PART1 SHA-256: `5424ca74462e06b2cd492dc952151197b5b044a889ddd08ae6202d5700903777`
PART2 SHA-256: `28999d59144430fa92797487b280f2705afaa792f7ecdb2f450d5b12978eeb3c`
Managed files: **629**.

## Baseline state before content overlays

- 22 public book objects = 21 final library books + 1 announcement.
- 21/21 Ukrainian EPUB.
- 21 indexable Ukrainian main readers.
- `/read/text/` mirrors: `noindex,follow`, canonical to main reader.
- Sitemap: 86 unique canonical page URLs + 11 image entries.
- PHP 35/35; JS 17/17; XML 2/2.
- R215 crawler matrix: 86 URLs × Browser/Googlebot/Bingbot/OAI-SearchBot/ChatGPT-User = 430/430 HTTP 200 in verified Apache configuration.
- Sensitive config/state endpoints protected with 403.

## R215 content overlay policy

Routine content publication is done through validated PATCH/OVERLAY packages with `base_release=215`; this does not create a new structural release number.

English publication book patches are recorded in:
`mavik-sklad/translations/en/PUBLICATION-READY-R215.md`.

After the currently prepared 10 English book patches are installed, expected projected state is:
- English published books: 10;
- English EPUB: 10;
- `/en/books/` indexable with 10 cards;
- English book landing/read URLs in sitemap: 20 plus `/en/books/` = 21;
- total sitemap canonical page URLs: 107 unique;
- reciprocal UA↔EN hreflang on published book landing/read pairs.

## Mandatory next technical item

Automatic cover media pipeline from `SITE-TECHNICAL-ROADMAP.md`: preserve master original; JPEG fallback for opaque PNG; WebP/AVIF where safe; responsive sizes; `<picture>`; batch rebuild; Boss self-test.

## Hard continuation rule

Every new branch starts from R215 + `SITE-WORK-JOURNAL.md` + relevant project checkpoint. Never infer current site state from an older release file or historical chat.