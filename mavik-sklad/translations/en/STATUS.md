# English translation status

Updated: 2026-08-17
Status: **AUTHORITATIVE CURRENT STATUS**
Canonical Ukrainian site/core: **R193**
Continuation canon: `mavik-sklad/translations/en/CONTINUATION-CANON.md`
Safety branch: `backup/english-translations-2026-08-17`

## Hard continuity rule

Translation content survives obsolete site-release numbering. Never delete, ignore, or retranslate a translation merely because its filename/path contains an old release number.

Before declaring work lost, search `main`, the safety branch, Git commit/tree/blob history, historical translation workspaces as read-only recovery sources, and File Library.

## Complete and physically recovered — 9 books

Under `mavik-sklad/translations/en/books/`:
1. Mom, I Want to Live!
2. The Nameless
3. The Man Without an Account
4. Rejection in Advance
5. Transfer
6. Solya, the Grain of Sand Who Dreamed of a Skyscraper
7. Patterns of Self-Reflection
8. You and I
9. The Gospel According to Macarius

Do not retranslate these before a parity check proves a material Ukrainian source change.

## Evacuation — COMPLETE

All eight stories are physically saved under:
`mavik-sklad/translations/en/work/evakuatsiia/`

Completion checkpoint:
`mavik-sklad/translations/en/EVAKUATSIIA-COMPLETE-CHECKPOINT-2026-08-16.md`

Translation text is complete; publication-tree packaging is separate and not yet claimed complete.

## Partial protected work

### Three Novels Nobody Reads
Sections 1–8 physically preserved under:
`mavik-sklad/translations/en/partial/try-romany-yaki-nikhto-ne-chytaie-sections-1-8/`

### Social / Соціальна
Archive-only while Ukrainian source remains unfinished, but protected content:
- `mavik-sklad/files/r188-social-en-ch08-10.md`
- `mavik-sklad/files/r188-social-en-ch11-13.md`
- `mavik-sklad/files/r188-social-en-ch14-16.md`

## ACTIVE — The Sculptor

Working source: `Скульптор.docx` from File Library unless a newer explicitly approved source appears.
Working folder: `mavik-sklad/translations/en/work/skulptor/`
Detailed status: `mavik-sklad/translations/en/work/skulptor/STATUS.md`

### Chapter 1 — COMPLETE
Five saved parts: `chapter-01-part-01.txt` through `chapter-01-part-05.txt`.

### Chapter 2. Clay — COMPLETE
Six saved parts:
- `chapter-02-part-01.txt`
- `chapter-02-part-02.txt`
- `chapter-02-part-03.txt`
- `chapter-02-part-04.txt`
- `chapter-02-part-05.txt`
- `chapter-02-part-06.txt`

Part 06 was saved and read back on 2026-08-17. It completes Chapter 2.

### Chapter 3. Fund Meeting — ACTIVE
Saved:
- `chapter-03-part-01.txt`

The new files `chapter-02-part-06.txt` and `chapter-03-part-01.txt` are physically present on both `main` and `backup/english-translations-2026-08-17`.

**NEXT EXACT SOURCE POINT:** continue immediately after:
`Як людина, яка дозволила собі коротку паузу, але не вийшла з ролі.`

Retrieve the next contiguous source passage from `Скульптор.docx` before continuing. Do not infer missing text or repeat saved parts.

## Still to finish after The Sculptor

- UNIVERSE
- The Devil’s Advocate
- The Patient
- The Loop
- The Light-Bringer
- Olena
- Letters to the Colonel
- Three Novels Nobody Reads — remaining sections after Section 8
- How Vitko Fought the Russians

## New-branch protocol

Read:
1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. `mavik-sklad/files/EN-TRANSLATION-START-HERE.md`
4. `mavik-sklad/files/EN-SOURCE-POLICY.md`
5. `mavik-sklad/translations/en/CONTINUATION-CANON.md`
6. this file
7. `mavik-sklad/translations/en/work/skulptor/STATUS.md`
8. actual saved files and authoritative manuscript

After every meaningful translation block:
source → translate → physical save → readback → backup mirror → active-book STATUS → this STATUS → continuation canon → exact next source marker.
