# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **15.08.2026 19:31 +03:00**
Purpose: authoritative handoff point for the next session.

## CANONICAL BASE
- R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
- SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`
- size `47,727,892` bytes
- canonical R187 was physically mounted and verified during the 19:26 recovery session, unpacked to `/mnt/data/r188_work`, 498 files, valid R187 manifest;
- that transient runtime path is NOT guaranteed to exist in a later session — rely on the persistent work branch/ledger and remount exact R187 when source access is needed.
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
- staging manifest: `R188-EN-STAGING/STAGING-MANIFEST.txt`;
- operations log: `mavik-sklad/files/R188-OPERATIONS-LOG.txt`.

Mandatory cycle:
`create file → persist to WORKSPACE → persist to STAGING if release-bound → ledger → readback → journal/report → next file`.

## CURRENT REAL R188 RELEASE FILES — 9 VERIFIED
All files below are physically stored in WORKSPACE + STAGING and have readback `ok` in the ledger.

1. `/en/index.html`
2. `/en/books/index.html`
3. `/en/about/index.html`
4. `/en/blog/index.html`
5. `/en/books/ty-i-ia/index.html`
6. `/en/books/ty-i-ia/read/index.html`
7. `/en/books/ty-i-ia/read/text/index.html`
8. `/en/books/ty-i-ia/read/text/full.txt`
9. `/en/books/ty-i-ia/read/text/part-001.txt`

Current staging manifest has been synchronized with these 9 files and their hashes/blobs.

### You and I...
Full native English beta edition reconstructed from canonical R187 and marked `translated_beta` in ledger. Do not retranslate/reconstruct it unless editorial revision is explicitly required.

### Author page
`/en/about/index.html` is native English, not machine translation. It uses current canonical/public facts: 19 completed works and 73 MaVik_AI tracks.

### Blog index
`/en/blog/index.html` is a native English empty-state. It intentionally does NOT expose Ukrainian posts as machine-translated English; posts enter it only after edited English publication.

## LOST PREVIOUS WORK — STATUS
Nine English translations had been reported completed in the lost previous worktree. One is now physically reconstructed and safe: **You and I...**.
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

Historical recovery lead:
`C:\Users\user\Downloads\mavik-name-en-20260815-0548.zip`
If recovered, inspect before duplicating work.

## SOCIAL
Unfinished; archive only. Do not translate further, stage, publish or EPUB-package until Ukrainian original is completed and user explicitly resumes it.

## NEXT CONTINUATION POINT
- Continue from work branch `r188-english-work`, never from memory.
- Do not redo the 9 verified release files above.
- System pages that do not require missing manuscript source may be built under the mandatory cycle.
- For any new/reconstructed book translation, remount/verify exact canonical R187 source first.
- Next book must be a completed Ukrainian title only.

## MANDATORY CHECKPOINT PROTOCOL
After each meaningful block:
1. update this file;
2. update `site-r188-english-development.md`;
3. mirror to `mavik-sklad/text/R188-EN-CHECKPOINT-LATEST.md`;
4. update operations log, ledger and staging manifest;
5. store real artifacts in WORKSPACE and release files in STAGING.
