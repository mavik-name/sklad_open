# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **15.08.2026 20:53 +03:00**
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
- mandatory persistence cycle: `source → WORKSPACE → translation/code → WORKSPACE → STAGING if release file → ledger → readback → journal/checkpoint → next`;
- every file used during work must have a persistent warehouse copy.

## PERSISTENCE
- development branch: `r188-english-work`
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
- ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
- operations log: `mavik-sklad/builds/R188-EN-WORKSPACE/control/R188-OPERATIONS-LOG.txt`
- server fallback if GitHub write is impossible: `/_site-state/r188-workspace/` (must be protected; do not claim a server copy unless it is actually written).

## PHYSICALLY PRESERVED ENGLISH BETA BOOKS

1. **You and I...** (`ty-i-ia`) — complete native English beta reader preserved in WORKSPACE + STAGING.
2. **Solya, the Grain of Sand Who Dreamed of a Skyscraper** (`pishchynka-solya`) — complete English text/reader preserved; 4 release text parts in WORKSPACE + STAGING; full-text insurance copy in WORKSPACE.
3. **Rejection in Advance** (`vidmova-avansom`) — complete 3/3 English translation + landing + reader + text page preserved in WORKSPACE + STAGING.
4. **Transfer** (`transfer`) — complete 6/6 English translation + landing + reader + text page preserved in WORKSPACE + STAGING. All six canonical Ukrainian source chunks are separately preserved in `R188-EN-WORKSPACE/source/transfer/`. Staging readback passed after assembly.

These four books are `translated_beta`, not final: English covers and validated English EPUBs are still pending.

## ENGLISH SHELL ALREADY PRESENT IN STAGING
Native English shell/routes physically exist in the `r188-english-work` staging tree, including `/en/`, `/en/books/`, `/en/books/new/`, `/en/books/free/`, `/en/about/`, `/en/blog/`, `/en/announcements/`, `/en/music/` and English CSS/manifest assets. Do not rebuild a file blindly; read staging first and update only if needed.

## SOURCE / CANONICAL BASE STATUS
The exact canonical R187 ZIP was revalidated in the current 15.08.2026 work session: SHA matches, 498 files, manifest `release=187`, `base_release=186`, `managed_files` is a valid array. It was unpacked locally for active reconstruction. A local/runtime copy is not a substitute for warehouse persistence: before translating each next book, copy its exact Ukrainian source into WORKSPACE first.

## EXCLUDED WORK
`Social` / `Соціальна` is unfinished. Existing partial English work is preserved under WORKSPACE/archive and must not enter STAGING or be continued until the Ukrainian work is completed and the user explicitly resumes it.

## MAJOR WORK STILL REQUIRED
- translate remaining completed books, one source-controlled book at a time;
- create English covers for every English edition;
- generate and validate English EPUBs;
- physically reconstruct and persist separate Boss `English` management code;
- English blog/announcements content;
- SEO/hreflang/sitemap/service-worker audit;
- final PHP/JS/link/JSON/XML/EPUB checks;
- exact R188 release manifest + Boss archive validator;
- full R188 candidate ZIP;
- no canonicalization without direct user approval.

## NEXT CONTINUATION POINT
**Next completed title: `Євангеліє від Макарія` / working English title `The Gospel According to Macarius`.**

Before translating:
1. take the exact Ukrainian R187 source;
2. persist that source/chunks in `R188-EN-WORKSPACE/source/yevanheliie-vid-makariia/`;
3. only then translate, saving every chunk immediately to WORKSPACE + STAGING;
4. after completion assemble landing/reader/text page and update ledger + journal + checkpoint.

Do not redo Transfer, Rejection in Advance, Solya, or You and I unless an explicit editorial revision is required.
