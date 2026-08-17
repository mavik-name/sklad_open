# R193 CANON CHECKPOINT

Status: **CANONICAL**.

Approved by the user on 2026-08-17.

Previous releases R1–R192 are obsolete and must not be used as working or canonical bases.

## R193 scope

- Boss tab **SEO / Роботи**.
- Server-side live crawler audit for up to 500 same-host HTML URLs.
- Audit checks HTTP failures, noindex, duplicate titles, canonical presence, robots.txt, sitemap.xml, sitemap coverage, and published-book availability.
- IndexNow integration for automatic URL notification.
- Public IndexNow ownership key file in site root.
- `sitemap_touch_urls()` also notifies IndexNow after content changes.
- Optional direct Bing URL Submission from Boss.
- Bing Webmaster API key is stored only in protected `/_site-state/seo-tools.json`; it is not part of the release.
- `/books/free/` synchronizes automatically from visible final published books; expected completed books: **20**. Beta `Соціальна` is intentionally excluded from completed free releases.

## Release files

ChatGPT Library `/Сайт/`:
- `193 Збірка_Сайт_SEO_PART-1.zip`
- `193 Збірка_Сайт_SEO_PART-2.zip`

Release manifest SHA-256:
`b761bbc9cd3fc4a98f799821c12d691877386d4f8d8c972a0b243ea09d5b658b`

ZIP SHA-256:
- PART-1: `504f6725667db00fbe6b1fc5e347b1e60ec76ee94d57b41923df2944779b61e9`
- PART-2: `e9524fe2db1fda0aa992615a961c2fe6fb80f500451b22803683bc07f71cffb1`

## Validation recorded before handoff

- PHP lint: **26/26 PASS**
- JSON/webmanifest parse: **15/15 PASS**
- XML parse: **2/2 PASS**
- Multipart manifest hash: **PASS both parts**
- `/books/free/` contains `evakuatsiia-abo-dorohoiu-do-stabika`: **PASS**
- `/books/free/` structured ItemList `numberOfItems`: **20**

## Working rule

All structural and functional changes must start from **R193 only** until the user explicitly approves a newer canonical release.

English-translation content and translation working files are not obsolete merely because their filenames refer to an earlier development phase; preserve them while translation work is active.
