# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **15.08.2026 18:48 +03:00**
Purpose: authoritative handoff point for the next ChatGPT session working on the native English edition.

## CANONICAL BASE

- Canonical Ukrainian full site: **R187**
- File: `187 КАНОН_Сайт_ОК_daf4fd24.zip`
- SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`
- Status: **CANONICAL**, directly approved by the user.
- R188 English work is based on this R187.
- R188 is **WORK IN PROGRESS / NOT CANONICAL**.

## HARD PRODUCT DECISIONS

- Build a real native English edition under `/en/`.
- Do not use Google Translate as the English edition.
- Ukrainian R187 remains intact as the Ukrainian edition.
- Public language switching becomes direct native `UA ↔ EN`.
- When `/en/` is complete, remove automatic translator widgets/multilingual selectors from the Ukrainian public UI.
- User has no official English translations; ChatGPT is responsible for literary translation.
- Translate as literature: preserve plot, facts, character, voice, rhythm, humour and subtext; avoid literal Ukrainian calques; do not invent scenes/details.
- Every English book requires an English-language cover.
- Final English publication requires validated English EPUBs.
- Boss must have a separate top-level `English` management area.

## ARCHITECTURE ALREADY IMPLEMENTED IN ACTIVE R188 WORK

Public English routes:
- `/en/`
- `/en/books/`
- `/en/books/new/`
- `/en/books/free/`
- English landing route for every current book
- `/en/blog/`
- `/en/announcements/`
- `/en/music/`
- `/en/music/reading/`
- `/en/about/`
- `/en/privacy/`
- `/en/copyright/`
- `/en/discover/`
- `/en/genres/`
- `/en/themes/`
- `/en/platformy/`
- English PWA manifest
- `assets/app/en-site.css`
- native direct UA/EN language bridge

Boss English area implemented in active work:
- top-level `English` tab;
- Overview / Books / Blog views;
- English state seed/runtime;
- English state included in Boss export/import;
- per-book English title, genre, description, status and publication mode;
- English cover upload under `/images/covers/en/`;
- English manuscript upload DOCX/TXT;
- native English web-reader generation;
- English EPUB generation path;
- English blog editor/publishing;
- rebuild-all action.

## FULL ENGLISH TRANSLATIONS COMPLETED IN ACTIVE R188 WORK

1. **You and I** — full translation, native beta reader.
2. **Solya, the Grain of Sand Who Dreamed of a Skyscraper** — full translation, native beta reader.
3. **Rejection in Advance** — full literary translation, native beta reader.
4. **Transfer** — full literary translation, about 8,161 English words, native beta reader.
5. **The Gospel According to Macarius** — preface + prologue + 25 chapters + afterword, native beta reader.
6. **The Nameless** — 13 chapters + afterword, about 12,786 English words, native beta reader.
7. **Patterns of Self-Reflection** — introduction + 49 texts, about 14,554 English words, native beta reader.
8. **Mom, I Want to Live!** — 26 chapters + afterword, about 15,801 English words, native beta reader.
9. **The Man Without an Account** — 5 chapters + author’s afterword, about 22,961 English words, native beta reader.

`beta` means the full translated text exists in the active R188 work and is readable; final English copy-edit, English cover and validated EPUB may still be pending.

## CURRENT ACTIVE TRANSLATION — SOCIAL

Progress:
- Chapters **1–7 translated**.
- Chapter 1: about 1,959 English words.
- Chapters 2–7: translated in the same literary pass.

**NEXT CONTINUATION POINT: CHAPTER 8.**

Do not restart from Chapter 1 unless the user explicitly requests a new translation/editorial rewrite.

Translation constraints for `Social`:
- preserve restrained emotional delivery;
- preserve authentic NGO/fund/bureaucratic register;
- preserve the distinction between moral parasitism and actual criminality;
- do not turn the fund into a cartoon villain;
- do not invent corruption or embezzlement absent from the source;
- keep the heroine’s personal loss as an emotional undercurrent rather than constant explanation.

## COVERS

- Boss support for separate English covers is implemented.
- Actual English cover adaptation/generation is still required title by title.
- English cover should preserve the visual identity/composition of the Ukrainian edition where practical, replacing Ukrainian title/subtitle text with the approved English title.
- Do not mark an edition final while it visibly uses a Ukrainian-title cover.

## EPUB

- Final English EPUB validation is still pending.
- Local PHP CLI used during development lacked `ZipArchive`; before release, create actual English EPUB archives and validate structure/CRC.
- Do not claim English EPUB completion without archive validation.

## NEXT MAJOR WORK

1. Continue `Social` from **Chapter 8**.
2. Continue remaining literary translations.
3. Create/adapt English covers.
4. Final English editorial pass per completed work.
5. Generate and validate English EPUBs.
6. Translate/publish English blog and announcements.
7. Finish English SEO: titles, descriptions, canonical, hreflang, sitemap.
8. Service-worker/cache audit.
9. Full local-reference audit.
10. PHP lint / JS checks / JSON/XML / EPUB CRC.
11. Build exact R188 manifest and validate through Boss deploy validator.
12. Package full R188 candidate.
13. Do **not** canonicalize without direct user approval.

## CHECKPOINT PROTOCOL — MANDATORY

After every meaningful block of work (for example: 2–4 translated chapters, one completed book, one cover batch, one Boss/SEO milestone):
1. Update this file `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`.
2. Update `mavik-sklad/files/site-r188-english-development.md`.
3. Mirror the checkpoint to `mavik-sklad/text/R188-EN-CHECKPOINT-LATEST.md`.
4. When a major milestone is completed, also create a timestamped snapshot `R188-EN-CHECKPOINT-YYYY-MM-DD-HHMM.md` so history is preserved.
5. Next session must read the latest checkpoint before doing any R188 work.

This file is the authoritative continuation point unless a newer timestamped checkpoint explicitly supersedes it.