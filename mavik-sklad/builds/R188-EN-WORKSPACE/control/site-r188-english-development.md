# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Updated: 15.08.2026 19:00 +03:00
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
- **Only completed Ukrainian works may enter the English translation/publication pipeline.** Unfinished works remain subject to editing and therefore are excluded until completed.

## Recovery status of architecture

The previous R188 working session reported a native `/en/` site, direct UA/EN bridge and separate Boss English management area. The actual working tree was not preserved in the warehouse after that session. Therefore those implementation files must be reconstructed from canonical R187 before packaging R188. The journal records the intended/previously implemented architecture but does not claim the missing files currently exist on `main`.

Reported architecture included:
- `/en/`, `/en/books/`, `/en/books/new/`, `/en/books/free/`;
- English book landing routes;
- `/en/blog/`, `/en/announcements/`, `/en/music/`, `/en/music/reading/`;
- `/en/about/`, `/en/privacy/`, `/en/copyright/`;
- `/en/discover/`, `/en/genres/`, `/en/themes/`, `/en/platformy/`;
- English PWA manifest and `assets/app/en-site.css`;
- native direct UA/EN language bridge;
- Boss `English` tab with Overview / Books / Blog;
- English state in export/import;
- per-book English metadata/status/publication mode;
- English cover upload under `/images/covers/en/`;
- English manuscript DOCX/TXT upload;
- native English reader generation;
- English EPUB generation path;
- English blog publishing and rebuild-all.

## Full literary translations reported completed in the previous R188 working session

The previous session reported full translations/readers for nine works. Their physical English artifacts were not found after session loss; preserve the status as history, but do not claim current on-disk availability until recovered or rebuilt.

1. **You and I** — full translation; native beta reader reported.
2. **Solya, the Grain of Sand Who Dreamed of a Skyscraper** — full translation; native beta reader reported.
3. **Rejection in Advance** — full literary translation; native beta reader reported.
4. **Transfer** — about 8,161 English words; native beta reader reported.
5. **The Gospel According to Macarius** — preface, prologue, 25 chapters, afterword; native beta reader reported.
6. **The Nameless** — 13 chapters + afterword; about 12,786 English words; native beta reader reported.
7. **Patterns of Self-Reflection** — introduction + 49 texts; about 14,554 English words; native beta reader reported.
8. **Mom, I Want to Live!** — 26 chapters + afterword; about 15,801 English words; native beta reader reported.
9. **The Man Without an Account** — 5 chapters + author’s afterword; about 22,961 English words; native beta reader reported.

## Social — archived work, excluded from R188 release

`Social` / `Соціальна` is an unfinished Ukrainian work. The user explicitly decided it should **not** be translated further now because the source will still be edited.

Preserved work:
- Chapters 1–7 were reported translated in a previous session, but their physical files were not recovered.
- Chapters 8–10 are physically stored at `mavik-sklad/files/r188-social-en-ch08-10.md`.
- Chapters 11–13 are physically stored at `mavik-sklad/files/r188-social-en-ch11-13.md`.

Status of these files:
- archive of work already performed;
- do not delete;
- do not continue from Chapter 14;
- do not put into `/en/` public content;
- do not put into R188 staging;
- do not generate English EPUB from them;
- resume only after the Ukrainian work is completed and the user explicitly requests continuation.

## Completed-works-only rule

Before starting any new English book translation:
1. verify the Ukrainian work is completed/final enough for publication;
2. if unfinished, skip it and move to another completed work;
3. partial old translation may be preserved separately, but not treated as release content.

## Staging

Future-release staging folder:
`mavik-sklad/builds/R188-EN-STAGING/`

Rules:
- every actual file intended for R188 gets copied into staging at its final ZIP-relative path;
- final R188 ZIP is built from staging, not from an unsaved local worktree;
- `STAGING-MANIFEST.txt` must match staging tree and `.mavik-release.json`;
- unfinished-work drafts, including `Social`, stay outside staging.

## Covers

Actual English cover adaptation/generation remains required title by title. Final English covers should preserve the identity/composition of the Ukrainian edition where practical while replacing Ukrainian title/subtitle text with approved English text. Do not mark an edition final while it visibly uses a Ukrainian-title cover.

## EPUB caveat

Final English EPUB validation remains pending. Before R188 release, create actual English EPUB archives and validate structure/CRC. Do not claim English EPUB completion without archive validation.

## Remaining major work

- identify the next completed Ukrainian title not yet translated;
- reconstruct/preserve missing artifacts for the nine previously completed English works;
- reconstruct native `/en/` architecture and Boss English implementation from canonical R187;
- copy actual future-release files continuously into staging;
- create/adapt English covers;
- final English editorial pass per completed book;
- produce and validate English EPUB per final book;
- translate/publish English blog and announcements;
- finish English SEO (`title`, descriptions, canonical, hreflang, sitemap);
- service worker/cache audit;
- full local-ref audit;
- PHP lint / JS checks / JSON/XML / EPUB CRC;
- create R188 manifest with exact managed file list and validate through Boss deploy validator;
- package a full R188 candidate;
- do **not** canonicalize without direct user approval.

## Persistence / next-session rule

Before continuing R188 in any later chat/session, read in this order:
1. `mavik-sklad/files/START-HERE-SITE.txt`
2. `mavik-sklad/releases/CANON.md`
3. `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`
4. `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`
5. this file `site-r188-english-development.md`
6. `mavik-sklad/builds/R188-EN-STAGING/STAGING-MANIFEST.txt`.

After every meaningful work block, update checkpoint, journal and mirror and store the real artifact. A progress note is not a substitute for the translation/code/cover/EPUB/ZIP itself.