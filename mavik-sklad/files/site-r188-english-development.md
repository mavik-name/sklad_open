# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Updated: 15.08.2026 20:53 +03:00
Base: canonical R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`, SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`.
Status: **WORK IN PROGRESS / NOT CANONICAL**.

## Product canon
Native `/en/`; direct `UA ↔ EN`; Ukrainian R187 remains intact; no automatic translation as English edition; separate Boss English area; English covers and validated EPUBs; only completed Ukrainian works enter English publication; unfinished `Social` is archive-only.

## Persistence canon
Work branch `r188-english-work`.
WORKSPACE `mavik-sklad/builds/R188-EN-WORKSPACE/`.
STAGING `mavik-sklad/builds/R188-EN-STAGING/`.
Ledger `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`.
Operations log `mavik-sklad/builds/R188-EN-WORKSPACE/control/R188-OPERATIONS-LOG.txt`.
Hard cycle: source → WORKSPACE → translation/code → WORKSPACE → STAGING for release files → ledger → readback → journal/checkpoint → next.
Every file needed or created in the process must be persistently copied to the warehouse. Server fallback `/_site-state/r188-workspace/` is only a fallback and must not be claimed unless actually written.

## Canonical source recovery
The exact R187 ZIP was revalidated in the active 15.08.2026 session: SHA matched canonical, 498 files, valid manifest (`release=187`, `base_release=186`, `managed_files` array). It was unpacked for current reconstruction. Source used for translation must nevertheless be copied into WORKSPACE before translation so later sessions do not depend on runtime state.

## Physical English shell
Native English shell/routes physically exist in the `r188-english-work` staging tree, including `/en/`, Books, New, Free, About, Blog, Announcements, Music, and supporting English assets. Existing staging files must be inspected before replacement; do not rebuild blindly.

## Physically preserved complete English beta editions

### 1. You and I...
- slug `ty-i-ia`;
- full native English beta reader physically in WORKSPACE + STAGING;
- landing/reader/text files preserved.

### 2. Solya, the Grain of Sand Who Dreamed of a Skyscraper
- slug `pishchynka-solya`;
- full English translation physically preserved;
- 4 release text parts in WORKSPACE + STAGING;
- full-text insurance copy in WORKSPACE;
- landing and reader physically preserved.

### 3. Rejection in Advance
- slug `vidmova-avansom`;
- full translation 3/3;
- all three chapter files in WORKSPACE + STAGING;
- landing + reader + text page in both storage layers;
- chapter 3 was explicitly recovered/read back after an interrupted turn, so the book is not dependent on chat memory.

### 4. Transfer
- slug `transfer`;
- full translation 6/6 completed in the active reliable persistence cycle;
- every Ukrainian source chunk saved under `R188-EN-WORKSPACE/source/transfer/uk-001.txt` through `uk-006.txt`;
- every English chunk saved immediately in WORKSPACE + STAGING;
- landing + six-part reader + text page saved in WORKSPACE + STAGING;
- staging readback confirmed the assembled landing, reader tree and all six text parts;
- ledger marks `translated_beta`.

These four books are **beta**, not final, because English-language covers and validated English EPUBs are still pending.

## Unfinished Social
`Social` / `Соціальна` is not in the R188 English publication pipeline until the Ukrainian work is completed. Existing partial English work is retained only in WORKSPACE/archive and must not enter STAGING.

## Boss English
A separate top-level Boss `English` management area is a hard user requirement. Earlier sessions described an implementation, but the actual code was not reliably preserved. Do not claim this part complete until physical files are reconstructed from canonical R187, saved to WORKSPACE/STAGING as appropriate, and tested.

## Remaining major work
- translate remaining completed Ukrainian books with source-first persistence;
- create/adapt English covers for every English edition;
- generate and validate English EPUBs;
- reconstruct/persist/test Boss English management;
- translate/publish English blog and announcements;
- SEO/hreflang/sitemap/service worker/local-reference audit;
- PHP/JS/JSON/XML/EPUB checks;
- exact R188 manifest and Boss archive validator;
- full R188 candidate ZIP;
- no canonicalization without direct user approval.

## Next exact continuation point
Next completed book: **`Євангеліє від Макарія` → `The Gospel According to Macarius`**.

Before translating, copy its exact Ukrainian R187 source into:
`mavik-sklad/builds/R188-EN-WORKSPACE/source/yevanheliie-vid-makariia/`
Then translate in controlled chunks, saving every English chunk immediately to WORKSPACE + STAGING and logging each milestone.
