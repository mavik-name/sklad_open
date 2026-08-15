# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **15.08.2026 19:00 +03:00**
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

## NEW HARD CONTENT RULE — COMPLETED WORKS ONLY

- **Only completed Ukrainian works are eligible for English translation/publication in R188.**
- Unfinished works remain subject to Ukrainian editing and therefore MUST NOT be translated further for release, published under `/en/`, staged, EPUB-packaged, or counted as completed English editions.
- Before starting a new English book translation, verify that the Ukrainian work is completed/final enough for publication.
- If partial English work already exists for an unfinished title, preserve it as an archive of work performed, but do not continue it until the Ukrainian source is completed.

## RECOVERY NOTE

The previous R188 working tree was not physically preserved after the earlier chat/session. Its architecture and completed-translation status survive in the journal/checkpoints, but do not treat the missing `/en/` code/readers/manuscripts as currently present on disk. Rebuild/package them from canonical R187 when preparing the actual R188 candidate.

## FULL ENGLISH TRANSLATIONS REPORTED COMPLETED IN PREVIOUS R188 WORK

1. **You and I** — full translation, native beta reader reported.
2. **Solya, the Grain of Sand Who Dreamed of a Skyscraper** — full translation, native beta reader reported.
3. **Rejection in Advance** — full literary translation, native beta reader reported.
4. **Transfer** — full literary translation, about 8,161 English words, native beta reader reported.
5. **The Gospel According to Macarius** — preface + prologue + 25 chapters + afterword, native beta reader reported.
6. **The Nameless** — 13 chapters + afterword, about 12,786 English words, native beta reader reported.
7. **Patterns of Self-Reflection** — introduction + 49 texts, about 14,554 English words, native beta reader reported.
8. **Mom, I Want to Live!** — 26 chapters + afterword, about 15,801 English words, native beta reader reported.
9. **The Man Without an Account** — 5 chapters + author’s afterword, about 22,961 English words, native beta reader reported.

Physical recovery/reconstruction of those missing English artifacts remains required before staging.

## SOCIAL — ARCHIVED, NOT ACTIVE

`Social` / `Соціальна` is an **unfinished Ukrainian work** and is therefore removed from the active English translation queue.

Work already performed is preserved and must NOT be discarded:
- Previous-session Chapters 1–7 were reported translated, but their physical English files were not recovered.
- Chapters 8–10 are physically stored at `mavik-sklad/files/r188-social-en-ch08-10.md`.
- Chapters 11–13 are physically stored at `mavik-sklad/files/r188-social-en-ch11-13.md`.
- These files are **archive-only**.
- They are NOT R188 staging files, NOT public English content, and NOT candidates for EPUB/publication while the Ukrainian work is unfinished.
- Do not continue from Chapter 14 unless the user later confirms the Ukrainian book has been completed and requests resumption.

## CURRENT NEXT STEP

Do **not** continue `Social`.

Next R188 work should:
1. identify the next **completed** Ukrainian title not yet translated;
2. continue/reconstruct the native `/en/` architecture and Boss English area from canonical R187;
3. continuously copy every actual R188 release file into `mavik-sklad/builds/R188-EN-STAGING/`.

## STAGING RULE

- Release staging folder: `mavik-sklad/builds/R188-EN-STAGING/`.
- A file is not considered part of the future R188 release until its current copy exists in staging at the same relative path it will use in the ZIP, except a documented binary upload limitation.
- Final R188 ZIP must be assembled from staging, not from a transient local working directory.
- `Social` partial translation files are explicitly excluded from staging.

## MAJOR REMAINING WORK

- physically reconstruct/preserve the nine previously completed English manuscripts/readers;
- reconstruct native `/en/` architecture and Boss English management from canonical R187;
- translate only remaining COMPLETED works;
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

## CHECKPOINT PROTOCOL — MANDATORY

After every meaningful work block:
1. Update this file `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`.
2. Update `mavik-sklad/files/site-r188-english-development.md`.
3. Mirror the checkpoint to `mavik-sklad/text/R188-EN-CHECKPOINT-LATEST.md`.
4. Store the actual translation/code/cover/EPUB/ZIP artifact — a checkpoint description alone is not enough.
5. Copy every actual future release artifact into `mavik-sklad/builds/R188-EN-STAGING/`.
6. On major milestones, create a timestamped checkpoint snapshot.

This file is the authoritative continuation point unless a newer timestamped checkpoint explicitly supersedes it.