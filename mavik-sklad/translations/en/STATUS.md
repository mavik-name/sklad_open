# English translation status

Updated: 2026-08-19
Status: **AUTHORITATIVE CURRENT STATUS**
Current site core: **R215**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Publication-ready checkpoint: `mavik-sklad/translations/en/PUBLICATION-READY-R215.md`

## SOURCE RULE
Canonical Ukrainian prose published by mavik.name is the only source for English translation. Approved transports include the current R215 public reader, generated clean-text reader, and a provenance-verified R215 EPUB generated directly from that reader.

External web-fetch unreliability is therefore no longer a translation blocker when a current R215 EPUB is available and provenance is verified.

## PUBLICATION READY — 10 BOOK PATCHES

Ten complete English editions have now passed parity/publication packaging against canonical R215 transports and are ready as native Boss `mavik-overlay` book patches (`base_release=215`):

1. Mom, I Want to Live! — `mamo-zhyty`
2. The Nameless — `bezimenni`
3. The Man Without an Account — `liudyna-bez-akaunta`
4. Rejection in Advance — `vidmova-avansom`
5. Transfer — `transfer`
6. Solya, the Grain of Sand Who Dreamed of a Skyscraper — `pishchynka-solya`
7. Patterns of Self-Reflection — `paterny-samorefleksii`
8. You and I... — `ty-i-ia`
9. The Gospel According to Macarius — `yevanheliie-vid-makariia`
10. Evacuation, or On the Road to the Stabilization Point — `evakuatsiia-abo-dorohoiu-do-stabika`

Canonical patch hashes, validation results and deployment behaviour are in `PUBLICATION-READY-R215.md`.
Persistent binary storage: ChatGPT Library `/Сайт/book_patches/`.

Do **not** retranslate these ten books from scratch. Their current publication deliverables are the validated R215 book patches.

Expected cumulative site state after installing all ten patches:
- 10 published English books;
- 10 English EPUB;
- `/en/books/` indexable with 10 cards;
- 21 English book-related sitemap URLs (catalog + 10 landings + 10 readers);
- total sitemap canonical page URLs: 107 unique;
- reciprocal UA↔EN hreflang on published landing/reader pairs.

## EXCLUDED — SOCIAL / СОЦІАЛЬНА
Project-specific English STOP remains active until explicit author permission. Do not restore or translate Social English material.

## ACTIVE NEXT INCOMPLETE TARGET — THE SCULPTOR
Already verified:
- Chapter 1: reader lines 26–1231;
- Chapter 2: 1232–2040;
- Chapter 3: 2041–2878.

R215 `/downloads/skulptor.epub` has been physically inspected and contains the exact next canonical source:
- Chapter 4 `Глава 4. Пам’ятка`;
- first sentence `Пам’ятка мала вміститися на одну сторінку.`

Next action:
1. extract exact contiguous Chapter 4 Ukrainian text from canonical R215 EPUB;
2. line-by-line parity against Chapter 4 recovery 01–38;
3. resolve known 09→10 and 21→22 old chunking duplicates from canonical source;
4. save only verified English under `work/skulptor/verified/`;
5. record EPUB/source marker/hash and mirror to safety;
6. continue into Chapter 5 only after Chapter 4 parity completes.

Chapter 5 recovery exists through Part 26. No hidden Part 27 exists in Git history.

## OTHER INCOMPLETE WORK
- Three Novels Nobody Reads — Sections 1–8 recovery only; incomplete.
- Remaining queue after The Sculptor: UNIVERSE; The Devil’s Advocate; The Patient; The Loop; The Light-Bringer; Olena; Letters to the Colonel; remaining Three Novels Nobody Reads; How Vitko Fought the Russians.

## PERSISTENCE
canonical R215 transport → exact Ukrainian block → translation/parity → physical save → readback → source marker/hash → safety mirror → status update.

Never leave critical work only in chat/session memory.