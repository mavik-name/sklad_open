# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — DEPLOYABLE BASE FIRST / CONTENT OVERLAYS AFTER**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## CURRENT USER DIRECTIVE
Do **not** wait for all English books/content before making the release.

### PHASE A — R188 BASE RELEASE
Build a complete native-English R188 full-site ZIP that is already safe to upload through Boss and use on the live site.
Required before release candidate:
- complete `/en/` site/system structure;
- route/UI parity where appropriate with R187;
- no dead English routes; untranslated content gets proper English status pages;
- direct UA ↔ EN;
- exact Boss English restore and validation;
- English SEO/system layer;
- correct manifest/managed files;
- PHP/JS/JSON/XML/link checks;
- Boss archive validator;
- ZIP integrity/readback.

Already completed English web editions may be included in base R188. Missing covers/EPUBs/content do not block the base release, but no dead buttons/links are allowed.

### PHASE B — CONTENT OVERLAYS AFTER R188 IS INSTALLED
Add English content with lightweight overlay ZIPs:
- one book at a time;
- several books as a set;
- Blog/Announcements/About batches;
- English cover + EPUB + web text;
- translation corrections/metadata.

Suggested naming:
`R188-EN-CONTENT-001-<slug>.zip`
`R188-EN-CONTENT-SET-001.zip`

Content overlays are not new full structural releases and must not overwrite runtime data.

### PHASE C — OPTIONAL CONSOLIDATION
Later, if useful, consolidate base R188 + accepted overlays into a newer full numbered release. This is not required for each content update.

## SOURCE AUTHORITY
User uploaded canonical R187 on 16.08.2026.
Verified SHA-256 exact match: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`.
Archive integrity passed and canonical R187 is extracted locally.
Source priority:
1. extracted canonical R187;
2. live mavik.name / canonical reader / EPUB for verification;
3. final warehouse documents;
4. File Library only emergency fallback.

## PRESERVED ENGLISH CONTENT
Do not redo nine complete beta web editions:
1. You and I...
2. Solya, the Grain of Sand Who Dreamed of a Skyscraper
3. Rejection in Advance
4. Transfer
5. The Gospel According to Macarius
6. The Nameless
7. Patterns of Self-Reflection
8. Mom, I Want to Live!
9. The Man Without an Account

Active tenth book `Three Novels Nobody Reads`: Sections 1–8 translated/staged/read back. Exact Section 9 source is available from canonical R187, but further literary translation is secondary until base R188 is deployable.

## ENGLISH CORE ALREADY PRESENT IN STAGING
`/en/`, `/en/books/`, `/en/books/new/`, `/en/books/free/`, `/en/about/`, `/en/blog/`, `/en/announcements/`, `/en/music/`, `/en/discover/`, `/en/genres/`, `/en/themes/`, `/en/manifest.webmanifest`, `assets/app/en-site.css`.

## BOSS ENGLISH
Exact saved implementation under `WORKSPACE/large-files/boss/` as six gzip parts.
Target `boss/index.php`.
Original size `234087` bytes.
SHA-256 `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`.
Compressed SHA-256 `f940e8027dc018bf9f573cee6016e21a856d12c93b62003abd29fa388300ec22`.
Prior PHP lint PASS.
Exact restore is a Phase A priority.

## NEXT EXACT ACTION
1. Inventory canonical R187 routes/files against current English STAGING.
2. Complete missing `/en/` routes/placeholders.
3. Restore exact Boss English.
4. Finish direct UA↔EN and SEO/system plumbing.
5. Build and validate the first full deployable R188 ZIP.
6. After R188 is approved/installed, resume translations as content overlays.

## PROGRESS REPORTING
Maintain two separate percentages:
- `R188 BASE RELEASE` — deployable site/system readiness;
- `EN CONTENT` — translations/covers/EPUB readiness.
Never merge them into one number without explicitly explaining the weighting.
