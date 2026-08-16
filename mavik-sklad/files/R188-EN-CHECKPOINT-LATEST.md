# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — FULL NATIVE ENGLISH SITE ASSEMBLY / 9 complete beta editions + active book 2 sections translated**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## USER DIRECTIVE
Build the **full English version of the site**, not isolated book translations.
Parallel workstreams:
1. remaining completed-book literary translations;
2. native `/en/` public site and book readers;
3. exact Boss `English` management restore;
4. English covers + validated EPUBs;
5. Blog/Announcements/About/Music/Discover/Genres/Themes + SEO/system/cache audit;
6. reconciled STAGING → full numbered R188 candidate ZIP;
7. no canonicalization without explicit user approval.

## HARD RULES
- native `/en/`, direct `UA ↔ EN`; no Google Translate as the English edition;
- Ukrainian R187 remains intact;
- only completed Ukrainian works enter English publication;
- `Social` remains unfinished/archive-only;
- English cover adaptation + validated English EPUB required before final status;
- persistence cycle: `source → WORKSPACE → translation/code → WORKSPACE → STAGING → readback → journal/ledger/checkpoint → next`;
- every process/release artifact is persisted.

## STORAGE
- branch: `r188-english-work`
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
- authoritative ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
- live staging manifest: `mavik-sklad/builds/R188-EN-STAGING/STAGING-MANIFEST-CURRENT.txt`
- immutable journal: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/`
- full-site audit: `control/journal/2026-08-16-full-site-assembly-audit.txt`

## COMPLETE ENGLISH BETA WEB EDITIONS — 9/19
1. You and I...
2. Solya, the Grain of Sand Who Dreamed of a Skyscraper
3. Rejection in Advance
4. Transfer
5. The Gospel According to Macarius
6. The Nameless
7. Patterns of Self-Reflection
8. Mom, I Want to Live!
9. The Man Without an Account

All nine remain `translated_beta`: English covers + validated English EPUBs pending.

## PUBLIC ENGLISH CORE — PRESENT IN STAGING
Verified physical native routes/assets include:
- `/en/`
- `/en/books/`, `/en/books/new/`, `/en/books/free/`
- `/en/about/`, `/en/blog/`, `/en/announcements/`, `/en/music/`
- `/en/discover/`, `/en/genres/`, `/en/themes/`
- `/en/manifest.webmanifest`
- `/assets/app/en-site.css`

Development defect to clear before release: `en/books/index.html` already lists all 19 target works, so future/untranslated routes remain dead until those books are completed.

## ACTIVE TENTH BOOK
Ukrainian: `Три романи, які ніхто не читає`
English: `Three Novels Nobody Reads`
Slug: `try-romany-yaki-nikhto-ne-chytaie`
Authoritative source: `Три романи, які ніхто не читає.docx`, 08.08.2026.
Global structure verified: **15 numbered sections + author's afterword**.
Blocking strategy: dynamic true-section boundaries; no forced fixed block count.

### Section / Block 001 — COMPLETE
- UK heading: `Розділ 1. Три романи, які ніхто не читає`
- source SHA: `fc24b7eff3c32423162ac470cc2c542776c62103`
- EN heading: `CHAPTER 1. THREE NOVELS NOBODY READS`
- WORKSPACE/STAGING SHA: `583876095944af4054c2337fba91003abe7171e0`
- staging commit: `35b735724af274eb90185a5c9fea9919a85bf6ae`
- readback: PASS

### Section / Block 002 — COMPLETE
- UK heading: `Розділ 2. Цифровий оракул`
- exact source end: `Радше такою, за яку доведеться сісти й відповісти.`
- source SHA: `89f8cf295e1ec7a7155bcc09c93da64556c5e768`
- EN heading: `CHAPTER 2. THE DIGITAL ORACLE`
- WORKSPACE/STAGING SHA: `de6f4890a83f8c35ab581d8fb3338e5de2a92df9`
- staging commit: `39cd2f57c538f71333c3e7eba2e9449ceb699fc1`
- readback: PASS

Current active-book translation: **Sections 1–2 complete**.
Next exact source boundary: `Розділ 3. Анотація на сімсот знаків` → stop before verified Section 4 heading.

## BOSS ENGLISH — EXACT BACKUP EXISTS / STAGING PENDING
Do NOT rewrite from memory.
Authoritative six-part compressed backup exists at `WORKSPACE/large-files/boss/`.
Target release path: `boss/index.php`.
Original size: `234087` bytes.
Original SHA-256: `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`.
Prior PHP lint: PASS.
Validated gzip SHA-256: `f940e8027dc018bf9f573cee6016e21a856d12c93b62003abd29fa388300ec22`.
STAGING has no restored Boss file yet. Continue exact deterministic recovery; never use the old invalid single gzip.

## STAGING CONTROL CLEANUP DONE
- stale `STAGING-MANIFEST-CURRENT.txt` replaced with current full-site live manifest;
- stale `STAGING-MANIFEST.txt` retired to live-pointer status;
- stale schema-1 `R188-FILE-LEDGER-CURRENT.json` retired to pointer status;
- authoritative detailed ledger remains `R188-FILE-LEDGER.json`.

## REMAINING SHORTER-FIRST BOOK QUEUE AFTER ACTIVE TITLE
1. `yak-vitko-z-moskaliamy-voiuvav`
2. `toi-shcho-nese-svitlo`
3. `lysty-polkovnyku`
4. `olena`
5. `universe`
6. `petlia`
7. `patsiient`
8. `advokat-dyiavola`
9. `skulptor`

## FIRST ACTION ON RESUME
1. Retrieve exact August Section 3 of `Три романи, які ніхто не читає` through the Section 4 heading.
2. Persist `uk-003.txt`.
3. Translate/persist `part-003.txt` to WORKSPACE + STAGING.
4. Readback + journal.
5. Continue book and full-site workstreams without waiting for a separate instruction.

Do not redo the nine complete beta editions or active-book blocks 001–002.
