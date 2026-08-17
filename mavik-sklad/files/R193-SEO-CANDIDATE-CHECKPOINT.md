# R193 SEO CANDIDATE CHECKPOINT

Status: **CANDIDATE / NOT CANONICAL UNTIL USER APPROVES AFTER DEPLOY**

Base: **R192 canonical**.

Built: 2026-08-17.

## Changes

- Added Boss tab **SEO / Роботи**.
- Added server-side live crawler audit up to 500 same-host HTML URLs.
- Audit checks HTTP failures, noindex, duplicate titles, canonical presence, robots.txt, sitemap.xml, sitemap coverage, and published-book availability.
- Added IndexNow integration as the primary automatic URL notification mechanism.
- Added a public IndexNow ownership key file in the site root.
- `sitemap_touch_urls()` now also notifies IndexNow after content changes.
- Added optional direct Bing URL Submission from Boss.
- Bing Webmaster API key is never included in the release; Boss stores it only in protected `/_site-state/seo-tools.json`.
- Fixed `/books/free/`: it now synchronizes automatically from all visible final published books. Current expected completed books: **20**. Beta `Соціальна` is intentionally not counted as a completed free release.

## Candidate files

ChatGPT Library `/Сайт/`:
- `193 Збірка_Сайт_SEO_PART-1.zip`
- `193 Збірка_Сайт_SEO_PART-2.zip`

Release manifest SHA-256:
`b761bbc9cd3fc4a98f799821c12d691877386d4f8d8c972a0b243ea09d5b658b`

ZIP SHA-256:
- PART-1: `504f6725667db00fbe6b1fc5e347b1e60ec76ee94d57b41923df2944779b61e9`
- PART-2: `e9524fe2db1fda0aa992615a961c2fe6fb80f500451b22803683bc07f71cffb1`

## Validation before handoff

- PHP lint: **26/26 PASS**
- JSON/webmanifest parse: **15/15 PASS**
- XML parse: **2/2 PASS**
- Multipart manifest hash: **PASS both parts**
- `/books/free/` contains `evakuatsiia-abo-dorohoiu-do-stabika`: **PASS**
- `/books/free/` structured ItemList `numberOfItems`: **20**

## Deploy continuation

1. Deploy PART-1 then PART-2 through Boss multipart deploy.
2. Open Boss → `SEO / Роботи`.
3. Save the Bing Webmaster API key into protected state.
4. Run `Повний робот-аудит`.
5. Run `IndexNow → Надіслати sitemap` once after deployment.
6. Optionally run direct `Bing URL Submission` for immediate Bing-only submission.
7. Inspect resulting audit. Only after successful live validation may the user explicitly approve R193 as canonical.
