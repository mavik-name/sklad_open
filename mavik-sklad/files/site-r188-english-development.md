# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Updated: 15.08.2026 19:20 +03:00
Base: canonical **R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`**, SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`.

STATUS: **WORK IN PROGRESS. NOT CANONICAL.** Do not deploy/declare as final until complete checks and direct user approval.

## Hard decisions

- English is a **native site under `/en/`**, not Google Translate output.
- Ukrainian R187 remains the canonical Ukrainian source and must not be overwritten by English work.
- Public language control becomes direct native `UA ↔ EN`.
- Once `/en/` is fully ready, automatic translator widgets/multilingual selectors are removed from Ukrainian UI.
- User has no official English literary translations and explicitly assigned the literary translation work to ChatGPT.
- Translate literature as literature: preserve plot, facts, voice, rhythm, humour, subtext and character; avoid literal Ukrainian calques; do not invent plot/details.
- English editions require **English covers**, not Ukrainian-title covers.
- Boss gets a separate top-level **English** management area.
- **Only completed Ukrainian works may enter the English translation/publication pipeline.**

## Persistence architecture

All R188 work uses two permanent warehouse layers:

### WORKSPACE
`mavik-sklad/builds/R188-EN-WORKSPACE/`

Stores every process artifact/control/source/reference/translation/code/cover/EPUB/archive file. No important work may exist only in transient chat/runtime storage.

### STAGING
`mavik-sklad/builds/R188-EN-STAGING/`

Stores only current release-eligible files at final ZIP-relative paths. Final R188 must be built from canonical R187 + reconciled staged overlay (or a complete staged mirror once built), not from an undocumented local worktree.

Persistent insurance BATCH-01 has been closed as COMPLETE.

## Recovery status of previous architecture

The previous R188 session reported a working native `/en/` site, direct UA/EN bridge and separate Boss English management area. The actual worktree was not preserved in GitHub.

Reported implementation included:
- `/en/`, `/en/books/`, `/en/books/new/`, `/en/books/free/`;
- English book landing routes;
- `/en/blog/`, `/en/announcements/`, `/en/music/`, `/en/music/reading/`;
- `/en/about/`, `/en/privacy/`, `/en/copyright/`;
- `/en/discover/`, `/en/genres/`, `/en/themes/`, `/en/platformy/`;
- English PWA manifest and `assets/app/en-site.css`;
- native direct UA/EN bridge;
- Boss `English` tab with Overview / Books / Blog;
- English state in export/import;
- per-book English metadata/status/publication mode;
- English cover upload under `/images/covers/en/`;
- English manuscript DOCX/TXT upload;
- native English reader generation;
- English EPUB generation path;
- English blog publishing and rebuild-all.

### Important recovery lead

Previous-session history confirms an unfinished working ZIP was actually created/downloaded at:

`C:\Users\user\Downloads\mavik-name-en-20260815-0548.zip`

This is not a final release, but it may contain the lost native `/en/` implementation, Boss English code and nine full English translations. If recovered, inspect it before rebuilding or retranslating any content it contains.

No retained copy has been found in GitHub/current runtime/File Library index.

## Canonical R187 binary status

Exact base identity is permanently recorded in `WORKSPACE/control/BASE-SOURCE.txt` and R187 passports.

Current runtime does **not** contain the full canonical binary. File Library retrieval is currently returning service errors. Therefore:
- do not claim canonical R187 is mounted when it is not;
- do not use obsolete `187 Оболонка_Сайт_ОК.zip` as release base;
- old shell may be consulted only as structural reference;
- actual R188 code reconstruction must ultimately reconcile against exact canonical full R187.

## Completed title inventory

Canonical/public R187 library verifies **19 full Ukrainian texts**.

Authoritative map:
`mavik-sklad/builds/R188-EN-WORKSPACE/control/COMPLETED-TITLE-QUEUE.txt`

### 9 full English translations reported completed in lost R188 session

1. **Mom, I Want to Live!**
2. **The Nameless**
3. **The Man Without an Account**
4. **Rejection in Advance**
5. **Transfer** — ~8,161 English words reported.
6. **Solya, the Grain of Sand Who Dreamed of a Skyscraper**
7. **Patterns of Self-Reflection** — intro + 49 texts, ~14,554 words reported.
8. **You and I**
9. **The Gospel According to Macarius** — preface + prologue + 25 chapters + afterword.

Their physical English artifacts require recovery/reconstruction before STAGING.

### 10 completed Ukrainian works still requiring English translation

- **The Sculptor**
- **UNIVERSE**
- **The Devil’s Advocate**
- **The Patient**
- **The Loop**
- **The Light-Bringer**
- **Olena**
- **Letters to the Colonel**
- **Three Novels Nobody Reads**
- **How Vitko Fought the Russians**

Translate only from verified canonical R187 source text.

## Social — archived, excluded from R188 release

`Social` / `Соціальна` is unfinished Ukrainian work and must not continue in active English translation.

Preserved work:
- Chapters 1–7 reported translated in lost session; files not recovered;
- Chapters 8–10: `mavik-sklad/files/r188-social-en-ch08-10.md`;
- Chapters 11–13: `mavik-sklad/files/r188-social-en-ch11-13.md`;
- Chapters 14–16: `mavik-sklad/files/r188-social-en-ch14-16.md`, blob `434d7ba575d595f578d2362285d43a64dc86b716`, creation commit `1cfafd812db4fef7f082eee39305c48109f9eb6f`;
- Chapters 14–16 have a WORKSPACE archive reference at `archive/social/r188-social-en-ch14-16.REFERENCE.txt`.

All Social partial work is archive-only:
- not public `/en/` content;
- not STAGING;
- no release EPUB;
- do not continue Chapter 17 until Ukrainian original is completed and user explicitly resumes translation.

## Work completed during recovery block

- audited GitHub warehouse and File Library availability;
- confirmed lost worktree absence from GitHub;
- recovered exact local name/path of previous R188 working ZIP;
- created/verified persistent WORKSPACE and STAGING rules already present on warehouse;
- closed BATCH-01;
- preserved Social 14–16 as archive-only;
- verified public/canonical R187 library exposes 19 full texts;
- created `COMPLETED-TITLE-QUEUE.txt` with 9 historical full EN translations + 10 remaining completed titles;
- updated operations log;
- synchronized `START-HERE-SITE.txt` so future sessions no longer follow obsolete `Social chapter 8` instruction.

## Covers

Actual English cover adaptation/generation remains required title by title. Preserve the identity/composition of the Ukrainian edition where practical while replacing Ukrainian title/subtitle text with approved English text. Do not mark an edition final while it visibly uses a Ukrainian-title cover.

## EPUB

Final English EPUB validation remains pending. Before R188 release, create actual archives and validate structure/CRC. Do not claim English EPUB completion without validation.

## Current continuation priority

1. Recover/inspect `C:\Users\user\Downloads\mavik-name-en-20260815-0548.zip` if it still exists.
2. Otherwise obtain/mount exact canonical full R187 binary and reconstruct native `/en/` + Boss English against it.
3. Translate only completed works from `COMPLETED-TITLE-QUEUE.txt`, and only from verified canonical R187 source text.
4. Persist every real artifact immediately to WORKSPACE; release-eligible files additionally go to STAGING.

Do not redo one of the nine historical full translations before checking the recovery ZIP.

## Remaining major work

- recover/reconstruct nine missing English manuscripts/readers;
- reconstruct native `/en/` architecture and Boss English implementation from exact canonical R187;
- translate ten remaining completed works;
- English covers;
- final English editorial passes;
- validated English EPUBs;
- English blog and announcements;
- SEO/hreflang/sitemap;
- service-worker/cache and local-ref audit;
- PHP/JS/JSON/XML/EPUB checks;
- exact R188 manifest and Boss validator;
- full R188 candidate;
- no canonicalization without direct user approval.

## Persistence / next-session rule

Read in order:
1. `START-HERE-SITE.txt`
2. `releases/CANON.md`
3. `KANON-POSTIINYKH-CHECKPOINTIV.txt`
4. `R188-EN-CHECKPOINT-LATEST.md`
5. this journal
6. `R188-EN-WORKSPACE/README.md`
7. `R188-EN-WORKSPACE/control/COMPLETED-TITLE-QUEUE.txt`
8. `R188-EN-STAGING/STAGING-MANIFEST.txt`

After every meaningful block: persist actual files, update log/journal/checkpoint/mirror, and stage only release-eligible artifacts.
