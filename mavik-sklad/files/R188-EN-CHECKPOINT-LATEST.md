# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — PHASE A / DEPLOYABLE ENGLISH BASE**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## CURRENT USER DIRECTIVE
Build and issue a **complete deployable native-English R188 base first**. After that, add remaining literary/editorial content by lightweight content overlays instead of blocking the base release on every translation, cover and EPUB.

## SOURCE AUTHORITY
User directly uploaded canonical R187 on 16.08.2026. SHA-256 matched exactly and ZIP integrity passed. Extracted R187 is the primary structural/source authority.

Source priority:
1. extracted canonical R187;
2. live mavik.name / canonical reader / EPUB for verification;
3. final warehouse documents;
4. File Library only emergency fallback.

## PHASE A — COMPLETED STRUCTURAL PASSES
Work branch: `r188-english-work`.

### 1. Route parity / no dead English routes
Commit: `818e6749b12be267b9a196ca6983a49aa1652a70`
Tree: `5c3f811b9a64900520e1e70e29d530c16fd45002`

Added temporary native-English `noindex,follow` status routes without touching completed English pages:
- 10 unfinished-in-English completed books × landing/read/text-index = 30 routes;
- 8 blog article routes;
- 1 announcement article route;
- 8 genre routes;
- 4 theme routes;
- 5 system leaf routes.

Total potential English 404s closed in this pass: **56**.
Unfinished Ukrainian `books/sotsialna` remains excluded from English publication.
Journal: `WORKSPACE/control/journal/2026-08-16-r188-phase1-route-parity.txt`.

### 2. Native English system layer
Commit: `bda526af9078f25ef6823d405b0156d792e15b1d`
Tree: `3366a63b61531bc06aac5cc2f09d97a685343023`

Added/updated in STAGING:
- `/en/404.html` — native English 404;
- `/en/.htaccess` — local English ErrorDocument + DirectoryIndex;
- `/en/manifest.webmanifest` — full English PWA identity/icons/shortcuts;
- `/en/sw.js` — English-scope network-first service worker;
- `/en/account/index.html` — English owner-access bridge;
- `/en/llms.txt` — English machine-readable content map.

Readback of `/en/404.html`: PASS.
Journal: `WORKSPACE/control/journal/2026-08-16-r188-phase1-system-layer.txt`.

### 3. Direct native UA ↔ EN; machine translation removed
Commit: `ff298331c4297f2feb9d745bce59584599407a27`
Tree: `65ffdad9589620ba0d33b639e37212915e460d5b`

R188 overlay now replaces:
- `assets/app/mavik-language.js`
- `assets/app/mavik-language.css`

Rules:
- only Ukrainian + English;
- direct path-preserving UA ↔ EN;
- no Google Translate / `translate.goog` proxy;
- no automatic browser-language redirect;
- query string/hash preserved;
- desktop/mobile/reader UI retained;
- `books/sotsialna` maps to `/en/books/`, not to a fake English edition;
- reader selector grid = 2 languages.

Local JS validation: `node --check` PASS.
JS SHA-256: `f872bbe3e43f3cacfcec4048c81a5c6a0bd71e615eba0cf61a391c65beb6b1f1`.
CSS SHA-256: `9f984cd38b4a552cbcb3537f25ba7e769418d42b0732fcca498caa4984310b78`.
Journal: `WORKSPACE/control/journal/2026-08-16-r188-native-language-switch.txt`.

## EXISTING ENGLISH CORE PRESERVED
Native pages already in STAGING and not rewritten by the passes above:
`/en/`, `/en/books/`, `/en/books/new/`, `/en/books/free/`, `/en/about/`, `/en/blog/`, `/en/announcements/`, `/en/music/`, `/en/discover/`, `/en/genres/`, `/en/themes/`, plus `assets/app/en-site.css`.

Nine completed beta English web editions remain preserved and must not be redone:
1. You and I...
2. Solya, the Grain of Sand Who Dreamed of a Skyscraper
3. Rejection in Advance
4. Transfer
5. The Gospel According to Macarius
6. The Nameless
7. Patterns of Self-Reflection
8. Mom, I Want to Live!
9. The Man Without an Account

Active tenth book `Three Novels Nobody Reads`: Sections 1–8 translated/staged/read back. Exact remaining Ukrainian text is directly available from canonical R187; literary translation remains secondary until the deployable base is issued.

## BOSS ENGLISH — NEXT MAJOR BLOCKER
Exact saved implementation is preserved under `WORKSPACE/large-files/boss/` as six gzip parts.
Target: `boss/index.php`.
Original size: `234087` bytes.
Original SHA-256: `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`.
Compressed size: `55577` bytes.
Compressed SHA-256: `f940e8027dc018bf9f573cee6016e21a856d12c93b62003abd29fa388300ec22`.
Prior PHP lint: PASS.
Restore exactly; never rewrite from memory.

## PHASE A REMAINING BEFORE BASE R188 CAN BE ISSUED
1. Restore exact Boss English into final assembly/STAGING and validate SHA/PHP.
2. Reconcile root canonical/hreflang/sitemap/robots with the native `/en/` layer; placeholders must remain out of indexing until content is final.
3. Finish English-side nav/account/system consistency and check all local references.
4. Reconcile service-worker/cache versioning and language asset cache busting for R188.
5. Build full R188 from canonical R187 + reconciled STAGING overlay.
6. Generate correct `.mavik-release.json` / managed_files.
7. Run PHP/JS/JSON/XML/link checks and real Boss archive validator.
8. ZIP integrity/readback.
9. User approval before canonicalization.

## AFTER BASE R188
Publish missing English literary/editorial material via lightweight content overlays (single title or batches), including English covers/EPUBs when ready.

## PROGRESS REPORTING RULE
Report separately:
- `R188 BASE RELEASE` readiness;
- `EN CONTENT` readiness.
Do not change the denominator between progress updates.
