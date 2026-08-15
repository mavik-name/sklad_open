# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **15.08.2026 19:26 +03:00**
Purpose: authoritative handoff point for the next session.

## CANONICAL BASE
- R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
- SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`
- size `47,727,892` bytes
- **verified and physically mounted in the active runtime** at this checkpoint;
- unpacked into `/mnt/data/r188_work`, 498 files, valid R187 manifest.
- R188 remains WORK IN PROGRESS / NOT CANONICAL.

## HARD RULES
- native `/en/`, not Google Translate;
- Ukrainian R187 remains intact;
- direct `UA ↔ EN`;
- separate Boss `English` area required;
- English covers required;
- final English EPUBs must be generated and validated;
- translate only completed Ukrainian works;
- `Social` is unfinished and excluded from R188 release work;
- every created/used file must be persisted immediately.

## PERSISTENCE SYSTEM — ACTIVE
- work branch: `r188-english-work`;
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`;
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/`;
- fallback if GitHub write fails: server `/_site-state/r188-workspace/`;
- file registry: `R188-EN-WORKSPACE/R188-FILE-LEDGER.json`;
- operations log: `mavik-sklad/files/R188-OPERATIONS-LOG.txt`.

Mandatory cycle:
`create file → persist to WORKSPACE → persist to STAGING if release-bound → ledger → readback → journal/report → next file`.

## CURRENT REAL R188 FILES
Persisted and read back in WORKSPACE + STAGING:
1. `/en/index.html` — 19 completed books, Social excluded.
2. `/en/books/index.html` — 19 completed books, Social excluded.
3. Full English beta edition **You and I...**:
   - `/en/books/ty-i-ia/index.html`
   - `/en/books/ty-i-ia/read/index.html`
   - `/en/books/ty-i-ia/read/text/index.html`
   - `/en/books/ty-i-ia/read/text/full.txt`
   - `/en/books/ty-i-ia/read/text/part-001.txt`

`You and I...` is physically reconstructed from canonical R187 and marked `translated_beta` in ledger. It must not be retransmitted/retranslated in a later session unless editorial revision is requested.

## LOST PREVIOUS WORK — STATUS
Nine English translations had been reported completed in the lost previous worktree. One has now been physically reconstructed and preserved: **You and I...**.
Still requiring recovery/reconstruction before release:
- Mom, I Want to Live!
- The Nameless
- The Man Without an Account
- Rejection in Advance
- Transfer
- Solya, the Grain of Sand Who Dreamed of a Skyscraper
- Patterns of Self-Reflection
- The Gospel According to Macarius

Ten other completed Ukrainian titles still require first English translation.

Historical recovery lead remains:
`C:\Users\user\Downloads\mavik-name-en-20260815-0548.zip`
If recovered, inspect before duplicating work.

## SOCIAL
Unfinished; archive only. Do not translate further, stage, publish or EPUB-package until Ukrainian original is completed and user explicitly resumes it.

## NEXT CONTINUATION POINT
Continue building R188 from the verified mounted R187 source using the mandatory persistence cycle. Next practical target: the next completed short title, then native English structural pages and Boss English area. Do not proceed to a new artifact before the current artifact is read back from permanent storage.

## MANDATORY CHECKPOINT PROTOCOL
After each meaningful block:
1. update this file;
2. update `site-r188-english-development.md`;
3. mirror to `mavik-sklad/text/R188-EN-CHECKPOINT-LATEST.md`;
4. update operations log and ledger;
5. store real artifacts in WORKSPACE and release files in STAGING.
