# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Updated: 15.08.2026 19:39 +03:00
Base: canonical R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`, SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`.
Status: **WORK IN PROGRESS / NOT CANONICAL**.

## Product canon
Native `/en/`; direct `UA ↔ EN`; Ukrainian R187 remains intact; no automatic translation as English edition; separate Boss English area; English covers and validated EPUBs; only completed Ukrainian works enter English publication; unfinished `Social` is archive-only.

## Persistence canon
Work branch `r188-english-work`.
WORKSPACE `mavik-sklad/builds/R188-EN-WORKSPACE/`.
STAGING `mavik-sklad/builds/R188-EN-STAGING/`.
Ledger `R188-EN-WORKSPACE/R188-FILE-LEDGER.json`.
Hard cycle: create → WORKSPACE → STAGING → ledger/hash → readback → checkpoint → next.

## Current physical release state — 11 files
All are in WORKSPACE + STAGING with readback `ok`, and ledger/manifest are synchronized:
- `/en/index.html`
- `/en/books/index.html`
- `/en/about/index.html`
- `/en/blog/index.html`
- `/en/announcements/index.html`
- `/en/music/index.html`
- `/en/books/ty-i-ia/index.html`
- `/en/books/ty-i-ia/read/index.html`
- `/en/books/ty-i-ia/read/text/index.html`
- `/en/books/ty-i-ia/read/text/full.txt`
- `/en/books/ty-i-ia/read/text/part-001.txt`

`You and I...` is reconstructed as native English beta from verified canonical R187.

Structural state:
- Home, Books, Music, Blog, Author and Announcements now have physical native-English routes.
- Blog/Announcements are explicit edited-English-only empty states.
- Music is a native English gateway to the full working R187 music library until the exact English player/catalogue is reconstructed; it does not claim the player is already ported.

## Current source access
Exact R187 was mounted and verified in an earlier recovery runtime (498 files, valid manifest, matching SHA), but that runtime worktree is not available now. Remaining canonical book sources are not stored in WORKSPACE. File Library retrieval currently errors, live reader/EPUB binary retrieval failed through available channels, and no reusable direct-download token for exact R187/old R188 ZIP was recovered from project history.

Therefore new book translation/reconstruction, Boss English reconstruction and exact legal-page translation are paused until exact canonical source is physically accessible. Safe structural work that does not falsify/degrade R187 may continue.

Historical recovery lead: `C:\Users\user\Downloads\mavik-name-en-20260815-0548.zip`.

Eight historical full English translations remain to be physically recovered/reconstructed; ten completed Ukrainian works still require first translation.

## Next
Continue only from `r188-english-work` and its ledger. Do not redo the 11 verified files. Once exact R187 source becomes accessible, copy the needed source into WORKSPACE before translating the next completed book.
