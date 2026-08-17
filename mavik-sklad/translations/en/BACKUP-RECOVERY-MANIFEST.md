# ENGLISH TRANSLATION SAFETY BRANCH — RECOVERY MANIFEST

Branch: `backup/english-translations-2026-08-17`
Updated: 2026-08-17
Purpose: persistent recovery copy of English translation content independent of later `main` cleanup or site-release changes.

## Protected content

This branch contains/references the protected translation set, including:
- nine complete recovered English books under `mavik-sklad/translations/en/books/`;
- complete Evacuation translation: eight stories under `mavik-sklad/translations/en/work/evakuatsiia/`;
- Three Novels Nobody Reads Sections 1–8 under `mavik-sklad/translations/en/partial/`;
- protected Social English batches under `mavik-sklad/files/r188-social-en-ch08-10.md`, `r188-social-en-ch11-13.md`, `r188-social-en-ch14-16.md`;
- active The Sculptor translation under `mavik-sklad/translations/en/work/skulptor/`.

## The Sculptor — exact recovery state

### Chapter 1 — COMPLETE
Parts 01–05 saved.

### Chapter 2. Clay — COMPLETE
Parts 01–06 saved.

Latest mirrored file:
`mavik-sklad/translations/en/work/skulptor/chapter-02-part-06.txt`

### Chapter 3. Fund Meeting — ACTIVE
Saved:
`mavik-sklad/translations/en/work/skulptor/chapter-03-part-01.txt`

## Exact continuation

Continue immediately after Ukrainian source sentence:
`Як людина, яка дозволила собі коротку паузу, але не вийшла з ролі.`

Retrieve the next contiguous passage from `Скульптор.docx` before translating. Next output should be `chapter-03-part-02.txt`.

## Recovery rule

This branch is a recovery source, not the current site architecture. Recover translation content selectively; never restore obsolete site release structure wholesale.

If `main` appears incomplete, compare this branch before retranslating anything. Also search Git commit/tree/blob history and File Library.

For current authority on `main` use:
- `mavik-sklad/translations/en/CONTINUATION-CANON.md`
- `mavik-sklad/translations/en/STATUS.md`
- `mavik-sklad/translations/en/work/skulptor/STATUS.md`
