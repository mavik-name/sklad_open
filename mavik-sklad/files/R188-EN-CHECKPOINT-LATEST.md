# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — SHELL-FIRST STRATEGY / native English site package before content fill**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## USER DIRECTIVE — CURRENT EXECUTION ORDER
Build the **complete native English version of the whole R187 site package FIRST**, then fill it with translated literary/editorial content.

### PHASE A — COMPLETE ENGLISH SITE PACKAGE FIRST
- full native `/en/` route structure and UI parity with R187;
- navigation, reader, account bridge, music, reactions, support, About, Blog, Announcements, Books, Discover, Genres, Themes, legal/privacy/copyright, 404/system routes;
- direct UA ↔ EN navigation;
- exact saved Boss `English` implementation restored and validated;
- English SEO/system layer: canonical, hreflang, sitemap, robots, manifest, service worker/cache and local-link audit;
- no dead `/en/` routes: untranslated content gets proper English `Translation in progress` / `English edition in preparation` pages instead of 404;
- structurally coherent R188 English package before content completion.

### PHASE B — CONTENT FILL
- replace placeholders with finished literary translations;
- translate Blog/Announcements/About editorial content where needed;
- English cover adaptations;
- validated English EPUBs;
- final content/readback/link checks.

### PHASE C — FULL R188 RELEASE
- reconcile canonical R187 + complete English structural layer + completed English content;
- PHP/JS/JSON/XML/EPUB checks;
- real Boss archive validator;
- exact `.mavik-release.json managed_files`;
- deterministic full numbered R188 ZIP + integrity/readback;
- no canonicalization without explicit user approval.

## SOURCE AUTHORITY
The user directly uploaded canonical R187 on 16.08.2026.
Local file: `187 КАНОН_Сайт_ОК_daf4fd24(2).zip`
Verified SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21` — exact match to recorded canonical R187.
The archive passed ZIP integrity testing and has been extracted locally.
Primary source order now:
1. canonical R187 extracted files;
2. live mavik.name / canonical reader / EPUB as secondary verification;
3. final warehouse source documents;
4. File Library only as emergency fallback.

## CURRENT PRESERVED CONTENT STATE
Do NOT redo these nine complete English beta web editions:
1. You and I...
2. Solya, the Grain of Sand Who Dreamed of a Skyscraper
3. Rejection in Advance
4. Transfer
5. The Gospel According to Macarius
6. The Nameless
7. Patterns of Self-Reflection
8. Mom, I Want to Live!
9. The Man Without an Account

Active tenth book: `Three Novels Nobody Reads`.
Sections 1–8 are already translated, staged and read back.
Section 9 exact R187 boundary is now available directly from canonical `full.txt`; literary translation becomes secondary until Phase A structure is completed.

## PUBLIC ENGLISH CORE ALREADY PRESENT
Native English core physically exists in STAGING for:
- `/en/`
- `/en/books/`
- `/en/books/new/`
- `/en/books/free/`
- `/en/about/`
- `/en/blog/`
- `/en/announcements/`
- `/en/music/`
- `/en/discover/`
- `/en/genres/`
- `/en/themes/`
- `/en/manifest.webmanifest`
- `assets/app/en-site.css`

Known defect to eliminate in Phase A: catalogue links can point to untranslated book routes. These must become real English placeholder routes, never 404s.

## BOSS ENGLISH
Exact validated R188 Boss implementation is preserved as six-part compressed backup under `WORKSPACE/large-files/boss/`.
Target: `boss/index.php`
Original size: `234087` bytes
Original SHA-256: `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`
Compressed SHA-256: `f940e8027dc018bf9f573cee6016e21a856d12c93b62003abd29fa388300ec22`
Prior PHP lint: PASS.
STAGING exact restore is a Phase A priority. Never rewrite Boss from memory and never use the old truncated gzip.

## STORAGE
Branch: `r188-english-work`
WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
Ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
Journal: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/`
Live handoff: `mavik-sklad/files/R188-EN-HANDOFF-LATEST.md`
Strategy journal: `control/journal/2026-08-16-r188-shell-first-strategy.txt`

## NEXT EXACT ACTION
Continue Phase A from canonical R187:
1. inventory R187 public/system routes against current `/en/` STAGING routes;
2. identify every missing English counterpart;
3. create real English routes/placeholders for all missing public content paths so there are no dead links;
4. restore exact Boss English into STAGING;
5. complete route/UI/system parity and SEO plumbing;
6. only then return to bulk literary/content filling.

## PROGRESS REPORTING RULE
Use one stable whole-R188 denominator from now on. Do not change progress methodology between updates.
