# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Updated: 15.08.2026 18:48 +03:00
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

## Architecture implemented in the active R188 working tree

- `/en/` homepage.
- `/en/books/`, `/en/books/new/`, `/en/books/free/`.
- English landing route for every current book.
- `/en/blog/` and English blog route structure.
- `/en/announcements/`.
- `/en/music/`, `/en/music/reading/`.
- `/en/about/`, `/en/privacy/`, `/en/copyright/`.
- `/en/discover/`, `/en/genres/`, `/en/themes/`, `/en/platformy/`.
- English PWA manifest.
- English design stylesheet `assets/app/en-site.css`.
- Native language bridge replaces public Google-translation behaviour with direct UA/EN navigation.

## Boss / English implemented in active working tree

- separate top-level `English` Boss tab;
- English Overview / Books / Blog subviews;
- English state seed/runtime file;
- English state included in Boss export/import;
- per-book English title, genre, description, status and publication mode;
- separate English cover upload under `/images/covers/en/`;
- English manuscript upload DOCX/TXT;
- generation of native English web reader;
- English EPUB generation path for final editions;
- English blog editor/publishing;
- rebuild-all action.

## Working English titles

- Social
- Mom, I Want to Live!
- The Nameless
- The Sculptor
- UNIVERSE
- The Devil’s Advocate
- The Patient
- The Loop
- The Light-Bringer
- Olena
- Letters to the Colonel
- Three Novels Nobody Reads
- The Man Without an Account
- How Vitko Fought the Russians
- Rejection in Advance
- Transfer
- Solya, the Grain of Sand Who Dreamed of a Skyscraper
- Patterns of Self-Reflection
- You and I
- The Gospel According to Macarius

Titles remain working literary titles until the specific English edition is final-checked.

## Full literary translations completed in the active R188 work

1. **You and I** — full translation; native web reader published as beta.
2. **Solya, the Grain of Sand Who Dreamed of a Skyscraper** — full translation; native web reader published as beta.
3. **Rejection in Advance** — full literary translation; native web reader published as beta.
4. **Transfer** — full literary translation; about 8,161 English words; native web reader published as beta.
5. **The Gospel According to Macarius** — preface, prologue, 25 chapters and afterword; native web reader published as beta.
6. **The Nameless** — 13 chapters + afterword; about 12,786 English words; native web reader published as beta.
7. **Patterns of Self-Reflection** — introduction + 49 texts; about 14,554 English words; native web reader published as beta.
8. **Mom, I Want to Live!** — 26 chapters + afterword; about 15,801 English words; native web reader published as beta.
9. **The Man Without an Account** — 5 chapters + author’s afterword; about 22,961 English words; native web reader published as beta.

`beta` means the actual full translated text exists in the active R188 work, but final English editorial pass / English cover / final EPUB packaging may still be pending. Do not confuse beta with a placeholder.

## Current translation in progress — Social

- Translation is active from the canonical R187 Ukrainian text.
- **Chapters 1–7 are translated.**
- Chapter 1: about 1,959 English words.
- Chapters 2–7: translated in the same literary pass.
- **NEXT CONTINUATION POINT: Chapter 8.**
- Do not restart from Chapter 1 and do not silently retranslate Chapters 1–7 unless an editorial revision is explicitly requested.
- Preserve the institutional/fund language, moral ambiguity and restrained emotional line; do not turn the fund into a cartoon villain or invent criminality that is absent from the source.

## Covers

Boss support for separate English cover files is implemented. Actual English cover adaptation/generation is still required title by title. Final English covers must preserve the identity/composition of the Ukrainian edition where practical while replacing Ukrainian title/subtitle text with the approved English title. Do not mark an edition final while it still visibly uses a Ukrainian-title cover.

## EPUB caveat

Local PHP CLI used during development lacked `ZipArchive`, therefore final English EPUB generation has not yet been used as the proof step. Existing Boss implementation expects `ZipArchive`. Before R188 release, generate/validate actual English EPUB archives and run CRC/structure checks. Do not claim English EPUB finished until actual archive validation passes.

## Remaining major work

- continue `Social` from Chapter 8;
- translate remaining books;
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
- do NOT canonicalize without direct user approval.

## Persistence / next-session rule

Before continuing R188 in any later chat/session, read in this order:
1. `mavik-sklad/files/START-HERE-SITE.txt`
2. `mavik-sklad/releases/CANON.md`
3. `mavik-sklad/files/R188-EN-CHECKPOINT-2026-08-15-1848.md`
4. this file `site-r188-english-development.md`

Important: this GitHub journal/checkpoint preserves the project state and continuation point. A binary R188 ZIP has **not** been declared canonical and must not be assumed to exist on the warehouse until an actual candidate is packaged and uploaded/identified.