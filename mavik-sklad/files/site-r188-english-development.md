# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Updated: 15.08.2026 18:53 +03:00
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

## Architecture implemented in the previous active R188 working tree

The previous chat/session reported the following working implementation. The binary working tree itself was not preserved in the warehouse, so these items are **recovery requirements**, not claims that the files are currently present on `main`:

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
- Native language bridge replacing public Google-translation behaviour with direct UA/EN navigation.

## Boss / English reported implemented in previous working tree

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

These implementation files were not found in the warehouse/File Library after the previous session. They must be reconstructed from canonical R187 when packaging R188; do not pretend the unsaved working tree still exists.

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

## Full literary translations completed in the previous active R188 work

The previous session reported full translations/readers for the following nine works. Their physical English manuscript/reader files were not found in the warehouse after session loss, so preserve this as progress history but **do not claim current on-disk availability** until each artifact is recovered or rebuilt.

1. **You and I** — full translation; native web reader reported published as beta.
2. **Solya, the Grain of Sand Who Dreamed of a Skyscraper** — full translation; native web reader reported published as beta.
3. **Rejection in Advance** — full literary translation; native web reader reported published as beta.
4. **Transfer** — full literary translation; about 8,161 English words; native web reader reported published as beta.
5. **The Gospel According to Macarius** — preface, prologue, 25 chapters and afterword; native web reader reported published as beta.
6. **The Nameless** — 13 chapters + afterword; about 12,786 English words; native web reader reported published as beta.
7. **Patterns of Self-Reflection** — introduction + 49 texts; about 14,554 English words; native web reader reported published as beta.
8. **Mom, I Want to Live!** — 26 chapters + afterword; about 15,801 English words; native web reader reported published as beta.
9. **The Man Without an Account** — 5 chapters + author’s afterword; about 22,961 English words; native web reader reported published as beta.

## Current translation in progress — Social

Source: canonical R187 Ukrainian `Соціальна.docx`.

Recovered prior-session progress:
- Chapters **1–7 were translated** in the lost working session.
- Chapter 1 was reported at about 1,959 English words.
- Physical English files for Chapters 1–7 were not found after session loss.

New physically preserved recovery work:
- **Chapters 8–10 retranslated from the canonical Ukrainian source and saved.**
- Artifact: `mavik-sklad/files/r188-social-en-ch08-10.md`
- English word count: **2,972**.
- File is a literary working translation / beta; not final copy-edited and not EPUB-packaged.
- GitHub persistence verified after save.

**NEXT CONTINUATION POINT: Chapter 11.**

Translation constraints for `Social`:
- preserve restrained emotional delivery;
- preserve authentic NGO/fund/bureaucratic register;
- preserve the distinction between moral parasitism and actual criminality;
- do not turn the fund into a cartoon villain;
- do not invent corruption or embezzlement absent from the source;
- keep the heroine’s personal loss as an emotional undercurrent rather than constant explanation;
- preserve short hard beats rather than explaining them away. Example from Chapter 8: `The money was there. Just not the right money.`

## Covers

Boss support for separate English cover files was reported implemented in the lost working tree. Actual English cover adaptation/generation remains required title by title. Final English covers must preserve the identity/composition of the Ukrainian edition where practical while replacing Ukrainian title/subtitle text with the approved English title. Do not mark an edition final while it still visibly uses a Ukrainian-title cover.

## EPUB caveat

Final English EPUB validation remains pending. The previous local PHP CLI lacked `ZipArchive`; before R188 release, create actual English EPUB archives and validate structure/CRC. Do not claim English EPUB completion without archive validation.

## Remaining major work

- continue `Social` from Chapter 11;
- physically preserve each translated batch immediately;
- later reconstruct/preserve the lost English manuscripts/readers for the nine previously completed works;
- reconstruct the native `/en/` architecture and Boss English implementation from canonical R187 when building the actual R188 package;
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
3. `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`
4. this file `site-r188-english-development.md`
5. the physically saved current translation batch files (`r188-social-en-*.md`).

After every meaningful work block, update the latest checkpoint and journal and store the real artifact. A progress note is not a substitute for the translation/code/cover/EPUB/ZIP itself.