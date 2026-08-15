# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **15.08.2026 22:18 +03:00**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## HARD RULES
- native `/en/`, direct `UA ↔ EN`, no Google Translate as English edition;
- Ukrainian R187 remains intact;
- separate Boss `English` area is required before release;
- only completed Ukrainian works enter translation/publication;
- `Social` is unfinished and archive-only;
- English covers + validated EPUBs required before final status;
- mandatory persistence cycle: `source → WORKSPACE → translation/code → WORKSPACE → STAGING if release → ledger → readback → journal/checkpoint → next`;
- every file used during work must have a persistent warehouse copy.

## PERSISTENCE
- development branch: `r188-english-work`
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
- ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
- operations log: `mavik-sklad/builds/R188-EN-WORKSPACE/control/R188-OPERATIONS-LOG.txt`
- server fallback if GitHub write is impossible: `/_site-state/r188-workspace/` (do not claim a server copy unless actually written).

## PHYSICALLY PRESERVED COMPLETE ENGLISH BETA WEB EDITIONS — 7/19
1. **You and I...** (`ty-i-ia`) — complete native English beta reader in WORKSPACE + STAGING.
2. **Solya, the Grain of Sand Who Dreamed of a Skyscraper** (`pishchynka-solya`) — complete English text/reader in WORKSPACE + STAGING; full-text insurance copy in WORKSPACE.
3. **Rejection in Advance** (`vidmova-avansom`) — complete 3/3 translation + landing + reader + text page in WORKSPACE + STAGING.
4. **Transfer** (`transfer`) — complete 6/6 translation + landing + reader + text page in WORKSPACE + STAGING; all 6 Ukrainian source chunks preserved; staging readback passed.
5. **The Gospel According to Macarius** (`yevanheliie-vid-makariia`) — complete 6/6 translation covering foreword + prologue + 25 chapters + afterword; all 6 Ukrainian source chunks preserved; landing + reader + text page in WORKSPACE + STAGING; staging readback passed.
6. **The Nameless** (`bezimenni`) — complete 6/6 translation covering all 13 chapters + afterword; all 6 exact canonical Ukrainian source chunks preserved; landing + reader + text page in WORKSPACE + STAGING; staging readback passed.
7. **Patterns of Self-Reflection** (`paterny-samorefleksii`) — complete 8/8 translation covering author introduction + 49 texts; all 8 controlled Ukrainian source blocks preserved under `WORKSPACE/source/paterny-samorefleksii/`; all 8 English parts plus landing + reader + text page persisted to WORKSPACE + STAGING; staging readback confirmed landing, text index and all eight text parts.

All seven are `translated_beta`, not final: English cover adaptation and validated English EPUB remain pending.

## ENGLISH SHELL
Native English shell/routes physically exist in the `r188-english-work` staging tree, including `/en/`, `/en/books/`, `/en/books/new/`, `/en/books/free/`, `/en/about/`, `/en/blog/`, `/en/announcements/`, `/en/music/` and English CSS/manifest assets. Inspect staging before replacing existing files.

## EXCLUDED WORK
`Social` / `Соціальна` is unfinished. Existing partial English work is preserved under WORKSPACE/archive only; do not translate further or move it into STAGING until Ukrainian completion and explicit user instruction.

## CURRENT COUNTS
- completed Ukrainian works eligible for English: **19**
- physically preserved complete English beta web editions: **7**
- remaining completed works to translate: **12**
- unfinished excluded works: **1 (`Social`)**

## MAJOR WORK STILL REQUIRED
- translate remaining 12 completed books with source-first persistence;
- English covers;
- validated English EPUBs;
- reconstruct/persist/test separate Boss `English` management;
- English blog/announcements;
- SEO/hreflang/sitemap/service worker/link audit;
- PHP/JS/JSON/XML/EPUB checks;
- exact R188 manifest + Boss validator;
- full R188 candidate ZIP;
- no canonicalization without direct user approval.

## NEXT CONTINUATION POINT
**`Мамо, жити!` → `Mom, I Want to Live!`.**

Procedure:
1. take exact Ukrainian R187 source;
2. split only on chapter/afterword boundaries into controlled blocks;
3. persist every source block under `R188-EN-WORKSPACE/source/mamo-zhyty/` before translating it;
4. translate each block and immediately persist to WORKSPACE + STAGING;
5. assemble landing + reader + text page;
6. read back, update ledger/operations log/checkpoint.

Do not redo the seven physically preserved beta editions unless explicit editorial revision is required.
