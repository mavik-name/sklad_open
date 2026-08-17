# ENGLISH TRANSLATION SAFETY BRANCH — RECOVERY MANIFEST

Branch: `backup/english-translations-2026-08-17`
Updated: 2026-08-17
Purpose: persistent recovery copy of English translation content independent of `main` and site-release changes.

## Protected translation set

- nine complete recovered English books;
- complete Evacuation, eight stories;
- Three Novels Nobody Reads, Sections 1–8;
- Social / Соціальна protected English batches ch08–16;
- active The Sculptor translation.

## THE SCULPTOR — EXACT RECOVERY STATE

- Chapter 1 — COMPLETE, parts 01–05.
- Chapter 2. Clay — COMPLETE, parts 01–06.
- Chapter 3. Fund Meeting — ACTIVE:
  - `chapter-03-part-01.txt` saved;
  - `chapter-03-part-02.txt` saved.

Both Chapter 3 files are physical files on this branch.

## EXACT CONTINUATION

Continue immediately after Ukrainian source sentence:
`Саме тому вона вдарила сильніше.`

Next file: `chapter-03-part-03.txt`.
Retrieve the next contiguous passage from `Скульптор.docx` first. Do not infer or repeat.

## Recovery rule

This branch is a recovery source, not the current site architecture. If `main` is incomplete, recover translation files selectively from here before retranslating anything. Also search Git history/tree/blob objects and File Library.

Current authority remains on `main`:
- `mavik-sklad/translations/en/CONTINUATION-CANON.md`
- `mavik-sklad/translations/en/STATUS.md`
- `mavik-sklad/translations/en/work/skulptor/STATUS.md`
