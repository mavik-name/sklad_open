# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Updated: 15.08.2026 19:34 +03:00
Base: canonical **R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`**, SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`.
STATUS: **WORK IN PROGRESS. NOT CANONICAL.**

## Fixed product decisions
- native English site under `/en/`;
- no Google Translate as English edition;
- Ukrainian R187 remains intact;
- direct `UA ↔ EN`;
- separate top-level Boss `English` management area;
- literary translation by ChatGPT from exact canonical source;
- English covers required;
- validated English EPUBs required;
- only completed Ukrainian works enter English translation/publication;
- unfinished `Social` remains archive-only and excluded from R188 release.

## Persistence architecture
- work branch `r188-english-work`;
- WORKSPACE `mavik-sklad/builds/R188-EN-WORKSPACE/`;
- STAGING `mavik-sklad/builds/R188-EN-STAGING/`;
- ledger `R188-EN-WORKSPACE/R188-FILE-LEDGER.json`;
- staging manifest `R188-EN-STAGING/STAGING-MANIFEST.txt`;
- operations log `mavik-sklad/files/R188-OPERATIONS-LOG.txt`.

Execution cycle:
`create → WORKSPACE → STAGING if release-bound → ledger/hash → GitHub readback → checkpoint → next artifact`.

## Canonical source status
Exact R187 was physically verified in the earlier 19:26 recovery runtime: 47,727,892 bytes, matching SHA, 498 files, valid manifest. That transient worktree is not present in the current runtime.

Current source-access checks:
- `/mnt/data/r188_work`: missing;
- no canonical R187 ZIP found under current `/mnt/data` or `/tmp`;
- WORKSPACE contains no source copies for the remaining completed books;
- File Library retrieval currently returns `RetrievalClientResponseError`;
- public book landing is reachable, but EPUB/reader binary fetch failed through available tool/runtime channels;
- no saved persistent direct-download/workspace token for the exact R187 ZIP or old R188 working ZIP was recovered from project history.

Therefore no new book, Boss-code or legal-page reconstruction is allowed until exact canonical source is physically accessible again.

## Real R188 release artifacts — 10 verified
All 10 are stored in WORKSPACE + STAGING, registered in ledger and staging manifest, with GitHub readback `ok`.

- `/en/index.html`
- `/en/books/index.html`
- `/en/about/index.html`
- `/en/blog/index.html`
- `/en/announcements/index.html`
- `/en/books/ty-i-ia/index.html`
- `/en/books/ty-i-ia/read/index.html`
- `/en/books/ty-i-ia/read/text/index.html`
- `/en/books/ty-i-ia/read/text/full.txt`
- `/en/books/ty-i-ia/read/text/part-001.txt`

### You and I...
Full physical native English beta reconstructed from verified canonical R187. Ledger status: `translated_beta`. Do not rebuild unless editorial revision is requested.

### Structural pages
- `/en/about/`: native English author page, current facts 19 completed works / 73 MaVik_AI tracks.
- `/en/blog/`: native empty-state, no machine-translated Ukrainian feed.
- `/en/announcements/`: native empty-state; only edited English announcements will be published there.

## Previous lost English translations
One of nine is now safe: **You and I...**.
Still requiring physical recovery/reconstruction:
- Mom, I Want to Live!
- The Nameless
- The Man Without an Account
- Rejection in Advance
- Transfer
- Solya, the Grain of Sand Who Dreamed of a Skyscraper
- Patterns of Self-Reflection
- The Gospel According to Macarius

Historical recovery lead: `C:\Users\user\Downloads\mavik-name-en-20260815-0548.zip`.

Ten other completed Ukrainian titles still require first English translation.

## Next continuation point
Continue strictly from branch `r188-english-work` and its ledger. Do not redo the 10 verified files. As soon as exact R187 source is physically available, copy the source needed for the next completed book into WORKSPACE first, then translate under the mandatory persistence cycle. Boss English and exact legal pages also wait for canonical source.
