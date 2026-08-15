# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Updated: 15.08.2026 19:26 +03:00
Base: canonical **R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`**, SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`.
STATUS: **WORK IN PROGRESS. NOT CANONICAL.**

## Fixed product decisions
- native English site under `/en/`;
- no Google Translate as English edition;
- Ukrainian R187 remains intact;
- direct `UA ↔ EN`;
- separate top-level Boss `English` management area;
- literary translation by ChatGPT, preserving plot/voice/rhythm/subtext without invented details;
- English covers required;
- validated English EPUBs required;
- only completed Ukrainian works enter English translation/publication;
- unfinished `Social` remains archive-only and is excluded from R188 release.

## Persistence architecture now enforced
- GitHub work branch: `r188-english-work`;
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/` — every process artifact;
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/` — only release-bound files at ZIP-relative paths;
- fallback when GitHub write fails: `/_site-state/r188-workspace/` on site;
- ledger: `R188-EN-WORKSPACE/R188-FILE-LEDGER.json`;
- operations log: `mavik-sklad/files/R188-OPERATIONS-LOG.txt`.

Hard execution cycle:
`create → WORKSPACE → STAGING if release file → ledger/hash → GitHub readback → journal/user report → next artifact`.

## Canonical base status
The exact R187 binary is physically available in the current runtime and was verified:
- 47,727,892 bytes;
- SHA-256 matches canon;
- unpacked to `/mnt/data/r188_work`;
- 498 files;
- valid R187 manifest.

## Real R188 release artifacts physically preserved

### English home
`/en/index.html`
- 19 completed books;
- `Social` excluded;
- native English metadata and direct UA link;
- WORKSPACE + STAGING copies read back successfully.

### English library
`/en/books/index.html`
- exactly 19 completed titles;
- `Social` excluded;
- WORKSPACE + STAGING copies read back successfully.

### You and I...
Full physical English beta edition reconstructed from canonical R187:
- `/en/books/ty-i-ia/index.html`
- `/en/books/ty-i-ia/read/index.html`
- `/en/books/ty-i-ia/read/text/index.html`
- `/en/books/ty-i-ia/read/text/full.txt`
- `/en/books/ty-i-ia/read/text/part-001.txt`

All five files are stored in WORKSPACE + STAGING, hashes/blobs are in ledger, and GitHub directory readback succeeded. Book status: `translated_beta`.

## Previous lost English translations
Nine were reported completed previously. One is now reconstructed and safe: **You and I...**.
Still requiring physical recovery/reconstruction:
- Mom, I Want to Live!
- The Nameless
- The Man Without an Account
- Rejection in Advance
- Transfer
- Solya, the Grain of Sand Who Dreamed of a Skyscraper
- Patterns of Self-Reflection
- The Gospel According to Macarius

Historical recovery lead:
`C:\Users\user\Downloads\mavik-name-en-20260815-0548.zip`
If recovered, inspect before duplicating work.

## Remaining completed Ukrainian titles requiring first English translation
- The Sculptor
- UNIVERSE
- The Devil’s Advocate
- The Patient
- The Loop
- The Light-Bringer
- Olena
- Letters to the Colonel
- Three Novels Nobody Reads
- How Vitko Fought the Russians

## Major remaining technical work
- reconstruct native English structural pages;
- build Boss `English` management area from exact R187;
- reconstruct/translate remaining completed books;
- English cover adaptations;
- English EPUB generation and CRC/structure validation;
- English blog and announcements;
- SEO/hreflang/sitemap;
- service-worker/cache/local-link audit;
- final R188 manifest and Boss validator;
- full candidate ZIP;
- no canonicalization without direct user approval.

## Next continuation point
Continue from the physically preserved R188 branch/state. Do not redo `You and I...`. Use the verified R187 worktree and mandatory persistence cycle for every next file.
