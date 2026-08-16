# MAVIK.NAME — R188 ENGLISH — LIVE HANDOFF

Updated: **16.08.2026 — PHASE A AFTER ROUTE + SYSTEM + NATIVE LANGUAGE PASSES**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Purpose: lossless continuation from a new branch/chat.

## READ FIRST
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`
User uploaded matching R187 directly on 16.08.2026; SHA exact; ZIP integrity PASS; extracted canonical R187 is primary source.

Work branch: `r188-english-work`
WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
Main checkpoint: `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`
Work-order canon: `mavik-sklad/files/R188-EN-WORK-ORDER-CANON.md`

## USER-DIRECTED ORDER
FIRST: issue a complete deployable native-English R188 base.
SECOND: fill remaining translations/covers/EPUB/editorial content with lightweight overlays.
THIRD: optionally consolidate later.

Do not block base R188 on finishing every literary translation. Do not leave dead English controls/routes.

## PHASE A COMPLETED IN CURRENT RUN
### Route parity
Commit `818e6749b12be267b9a196ca6983a49aa1652a70`.
Closed 56 potential English 404s with temporary `noindex,follow` native-English status pages:
- 10 remaining completed book shells × landing/read/text-index;
- 8 blog article shells;
- 1 announcement shell;
- 8 genre shells;
- 4 theme shells;
- 5 system leaf shells.
`books/sotsialna` excluded because unfinished.

### English system layer
Commit `bda526af9078f25ef6823d405b0156d792e15b1d`.
Added `/en/404.html`, `/en/.htaccess`, full `/en/manifest.webmanifest`, `/en/sw.js`, `/en/account/`, `/en/llms.txt`.
English 404 readback PASS.

### Native UA ↔ EN
Commit `ff298331c4297f2feb9d745bce59584599407a27`.
R188 staging now overrides `assets/app/mavik-language.js` + CSS.
Only UA/EN remain; Google Translate and translate.goog removed; no browser-language auto redirect; direct path-preserving routing; query/hash preserved; Social maps to `/en/books/`.
Local `node --check` PASS.
JS SHA-256 `f872bbe3e43f3cacfcec4048c81a5c6a0bd71e615eba0cf61a391c65beb6b1f1`.
CSS SHA-256 `9f984cd38b4a552cbcb3537f25ba7e769418d42b0732fcca498caa4984310b78`.

## DO NOT REDO
Nine complete beta English web editions:
You and I...; Solya, the Grain of Sand Who Dreamed of a Skyscraper; Rejection in Advance; Transfer; The Gospel According to Macarius; The Nameless; Patterns of Self-Reflection; Mom, I Want to Live!; The Man Without an Account.

`Three Novels Nobody Reads`: Sections 1–8 translated/staged/read back. Remaining source comes directly from canonical R187 `full.txt`. Translation is paused behind base-release work.

## BOSS — FIRST NEXT ACTION
Exact Boss English implementation is stored as six gzip parts under `WORKSPACE/large-files/boss/`.
Restore target: `boss/index.php`.
Original size `234087` bytes.
Original SHA-256 `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`.
Compressed size `55577`.
Compressed SHA-256 `f940e8027dc018bf9f573cee6016e21a856d12c93b62003abd29fa388300ec22`.
Prior PHP lint PASS.
Never rewrite from memory; restore exact bytes.

## AFTER BOSS
1. Root SEO integration: canonical/hreflang/sitemap/robots, with placeholder English routes excluded from indexing.
2. Language asset cache/version reconciliation for R188.
3. Local-reference/link audit.
4. Assemble full R188 from exact R187 + STAGING.
5. Release manifest / managed_files.
6. PHP/JS/JSON/XML/link checks + real Boss archive validator.
7. ZIP integrity/readback.
8. User approval before canonicalization.

## SOURCE ORDER
1. extracted canonical R187;
2. live mavik.name / canonical reader / EPUB verification;
3. final warehouse documents;
4. File Library emergency-only.

## PROGRESS RULE
Report two stable values if asked:
- R188 BASE RELEASE readiness;
- EN CONTENT readiness.
