# THE SCULPTOR — ENGLISH WORK STATUS

Updated: 2026-08-19
Status: **CHAPTERS 1–3 VERIFIED / CHAPTER 4 READY TO RESUME FROM CANONICAL R215 EPUB**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Current site core: **R215**
Canonical reader: `https://mavik.name/books/skulptor/read/`
Canonical EPUB transport: `/downloads/skulptor.epub`
Verified layer: `mavik-sklad/translations/en/work/skulptor/verified/`

## HARD RULE
Only canonical Ukrainian prose published by mavik.name may generate new/verified English. Approved transports include current R215 reader, generated reader-text, and provenance-verified R215 EPUB generated from the reader.

## VERIFIED
- Chapter 1 `Бруд на дитячих руках` — reader lines 26–1231.
- Chapter 2 `Глина` — reader lines 1232–2040.
- Chapter 3 `Збори фонду` — reader lines 2041–2878.

## SOURCE BLOCKER RESOLVED
R215 `/downloads/skulptor.epub` was physically inspected. Its `OEBPS/text/content.xhtml` contains:
- `Глава 4. Пам’ятка`;
- `Пам’ятка мала вміститися на одну сторінку.`

This exactly matches the previously recorded next canonical reader point. External web-fetch failure is therefore no longer a blocker for Chapter 4 parity.

## CHAPTER 4
Recovery parts 01–38 remain quarantined until checked against the canonical R215 EPUB source. Known recovery chunking issues to resolve from canonical text:
1. 09→10 duplicate `Serhii was silent.`
2. 21→22 repeated start of `Second. Don’t give...`

Next action: exact Chapter 4 EPUB extraction → line-by-line parity → verified save/readback/source marker/safety mirror.

## CHAPTER 5
Recovery parts 01–26 exist and remain unverified. No Part 27 exists in main, safety or Git history. After Chapter 4 parity is complete, perform Chapter 5 parity against canonical R215 EPUB and create any missing continuation only from that canonical Ukrainian source.

## FORBIDDEN
Do not use `Скульптор.docx`, old manuscript, recovery English, summaries, memory or guessed continuation as Ukrainian prose source.