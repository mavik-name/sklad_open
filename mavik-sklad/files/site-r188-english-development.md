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

## Working English titles

Social; Mom, I Want to Live!; The Nameless; The Sculptor; UNIVERSE; The Devil’s Advocate; The Patient; The Loop; The Light-Bringer; Olena; Letters to the Colonel; Three Novels Nobody Reads; The Man Without an Account; How Vitko Fought the Russians; Rejection in Advance; Transfer; Solya, the Grain of Sand Who Dreamed of a Skyscraper; Patterns of Self-Reflection; You and I; The Gospel According to Macarius.

Titles remain working literary titles until final English editorial approval.

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

## Current translation — Social

Source: canonical R187 Ukrainian `Соціальна.docx`.

Recovered historical progress:
- Chapters **1–7 were translated** in the lost previous session.
- Chapter 1 was reported at about 1,959 English words.
- Physical English files for Chapters 1–7 were not recovered.

Physically preserved recovery work:

### Chapters 8–10
- Saved: `mavik-sklad/files/r188-social-en-ch08-10.md`
- English word count: **2,972**.
- GitHub save/readback verified.
- Literary working translation / beta; not final-edited or EPUB-packaged.

### Chapters 11–13
- Saved: `mavik-sklad/files/r188-social-en-ch11-13.md`
- GitHub save/readback verified.
- Literary working translation / beta; not final-edited or EPUB-packaged.
- Chapter 12 preserves the central ambiguity: internal budget reallocation was technically possible but required donor approval and would effectively cancel/restart the already committed family programme; management chose to keep the approved event and seek partner/private funding for the medical cases.
- Chapter 13 identifies **folder 04 as the heroine’s daughter**, amount **1,000,000 UAH**.
- The archive records only `Forwarded to partners` / `Awaiting response`; the heroine knows the outcome the archive never received.

**NEXT CONTINUATION POINT: Chapter 14.**

Translation constraints for `Social`:
- preserve restrained emotional delivery;
- preserve authentic NGO/fund/bureaucratic register;
- preserve the distinction between moral parasitism and actual criminality;
- do not invent corruption or embezzlement absent from the source;
- do not turn the fund into a cartoon villain;
- keep personal loss as an emotional undercurrent rather than explanatory commentary;
- preserve short hard beats rather than smoothing them into exposition.

## Covers

Actual English cover adaptation/generation remains required title by title. Final English covers should preserve the identity/composition of the Ukrainian edition where practical while replacing Ukrainian title/subtitle text with approved English text. Do not mark an edition final while it visibly uses a Ukrainian-title cover.

## EPUB caveat

Final English EPUB validation remains pending. Before R188 release, create actual English EPUB archives and validate structure/CRC. Do not claim English EPUB completion without archive validation.

## Remaining major work

- continue `Social` from Chapter 14 and persist each batch immediately;
- reconstruct/preserve missing artifacts for the nine previously completed English works;
- reconstruct native `/en/` architecture and Boss English implementation from canonical R187;
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
5. the physically saved translation batches `r188-social-en-*.md`.

After every meaningful work block, update latest checkpoint, journal and mirror and store the real artifact. A progress note is not a substitute for the translation/code/cover/EPUB/ZIP itself.