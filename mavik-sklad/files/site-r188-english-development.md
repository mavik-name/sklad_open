# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Started: 15.08.2026
Base: canonical **R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`**, SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`.

STATUS: WORK IN PROGRESS. NOT CANONICAL. Do not deploy/declare as final until complete checks and direct user approval.

## Hard decisions

- English is a **native site under `/en/`**, not Google Translate output.
- Ukrainian R187 remains the source/canonical Ukrainian edition and must not be overwritten by English work.
- Public language control becomes direct native `UA ↔ EN`.
- Once `/en/` is fully ready, automatic translator widgets/multilingual selectors are removed from Ukrainian UI.
- User has no official English literary translations and explicitly assigned the literary translation work to ChatGPT.
- Translate literature as literature: preserve plot, facts, voice, rhythm, humour, subtext and character; avoid literal Ukrainian calques; do not invent plot/details.
- English editions require **English covers**, not Ukrainian-title covers.
- Current Boss gets a separate top-level **English** management area.

## Architecture implemented in working tree

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

## Boss / English

Implemented in working tree:
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
- Mom, I Want to Live
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

## Real translations completed in working tree

1. **You and I** — translated and native web reader published as beta.
2. **Solya, the Grain of Sand Who Dreamed of a Skyscraper** — full translation; native web reader published as beta.
3. **Rejection in Advance** — full literary translation; native web reader published as beta.
4. **Transfer** — full literary translation completed and native web reader published as beta.
5. **The Gospel According to Macarius** — full literary translation (preface, prologue, 25 chapters, afterword) completed and native web reader published as beta.

`beta` means the actual full translated text exists, but final English editorial pass / English cover / final EPUB packaging may still be pending. Do not confuse beta with a placeholder.

## Covers

Boss support for separate English cover files is implemented. Actual English cover adaptation/generation is still required title by title. Do not mark an edition final while it still visibly uses a Ukrainian-title cover.

## EPUB caveat in local environment

Local PHP CLI used during development lacks `ZipArchive`, therefore final English EPUB generation has not been used as the local proof step yet. Existing Boss implementation expects `ZipArchive`. For pre-release verification either generate EPUB with a local Python ZIP implementation or verify in an environment with PHP ZipArchive. Do not claim English EPUB finished until actual archive validation passes.

## Next required work

- continue literary translations, preferably shorter completed works first, then long novels;
- create/adapt English covers;
- final English editorial pass per book;
- produce and validate English EPUB per final book;
- translate/publish English blog and announcements;
- finish English SEO (`title`, descriptions, canonical, hreflang, sitemap);
- service worker/cache audit;
- full local-ref audit;
- PHP lint / JS checks / JSON/XML / EPUB CRC;
- create R188 manifest with exact managed file list and validate through Boss deploy validator;
- package a full R188 candidate;
- do NOT canonicalize without direct user approval.
