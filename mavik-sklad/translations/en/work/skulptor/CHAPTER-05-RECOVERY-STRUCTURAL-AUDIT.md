# THE SCULPTOR — CHAPTER 5 RECOVERY STRUCTURAL AUDIT

Updated: 2026-08-18
Status: **RECOVERY-ONLY / NOT SITE-VERIFIED / NOT FOR PUBLICATION**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Canonical source when retrievable: `https://mavik.name/books/skulptor/read/`
Manuscript triage: `mavik-sklad/translations/en/work/skulptor/CHAPTER-05-MANUSCRIPT-COMPARISON-HEURISTIC.md`

## PURPOSE
This file records mechanical observations about the quarantined old English Chapter 5 recovery files. A separate non-canonical manuscript heuristic is used only to localize recovery defects while the canonical mavik.name reader is inaccessible.

Neither file validates canonical translation accuracy or may be used to create verified prose without line-by-line site parity.

## INVENTORY CHECK
All currently available old Chapter 5 recovery files were physically read:
`chapter-05-part-01.txt` through `chapter-05-part-26.txt`.

The sequence 01–26 is physically present; part 26 is mirrored to the safety branch. Direct path checks found no `chapter-05-part-27.txt` on either branch.

Legacy wrappers such as `THE SCULPTOR`, author line, `Chapter 5. The Witness`, and `Part XX` remain recovery metadata only and are not assumed canonical.

## GIT-HISTORY RECOVERY CHECK
Git commit history was searched specifically for Chapter 5 translation parts and for `part-27`.

The historical translation sequence contains explicit commits for Chapter 5 Parts 1 through 26. The last translation-prose commit is:
- `c0864252b8998cc053f2e508743edf7be821921e` — `Translate The Sculptor Chapter 5 Part 26` — 2026-08-17 14:02:25 +03:00.

Its diff creates exactly `chapter-05-part-26.txt` and ends at Nazar's message `I’m not ready to be good yet.`

No historical commit `Translate The Sculptor Chapter 5 Part 27` was found. A search for `part-27` returns only later audit/checkpoint records documenting its absence, not a translation commit.

The site-only hard source canon was committed immediately afterward:
- `20ccb74b2d1899137be439f545d36b58568ffff3` — `Add hard canon: translate only from published mavik.name Ukrainian text` — 2026-08-17 14:03:55 +03:00.

Therefore the preserved history supports the following recovery conclusion:
**Part 26 was the last old translation fragment actually created before the site-only hard-source stop. There is no hidden Part 27 to recover from Git history.**

This does not authorize translating the missing continuation from the manuscript.

## BOUNDARY CHECK RESULTS
No obvious exact sentence duplication was found across stored boundaries 01→02 through 25→26.

Very short parts 12, 14, 19 and 22 were checked with their neighbors. The later manuscript triage supports them as contiguous fragments of the sequence rather than obvious accidental duplicate files.

No new exact boundary duplicate comparable to the Chapter 4 09→10 or 21→22 defects was found in Chapter 5 parts 01–26.

This does not prove sentence-level accuracy, absence of subtle overlap, or site parity.

## IMPORTANT — STORED RECOVERY IS DEFINITELY TRUNCATED RELATIVE TO OLD MANUSCRIPT
The stored English recovery ends in `chapter-05-part-26.txt` immediately after Olena's message that Nazar refused to meet his mother and said he was not ready to be good yet.

The physically retrieved old manuscript continues immediately after that point: Marta rereads the message, shows it to Serhii, they discuss it, Yakiv continues and signs his statement, and the chapter proceeds further.

Therefore the current recovery sequence 01–26 is **definitely incomplete relative to the old manuscript**. Part 26 is not a valid recovery chapter-end marker.

This is a recovery fact only. The manuscript may not be used to generate the missing English continuation.

## FULL NON-CANONICAL TRIAGE STATUS
A separate manuscript-comparison heuristic covers the full stored recovery sequence 01–26 in broad scene/event continuity:
- 01–06: opening, callback, second call, city-library invitation and arrival;
- 07–10: Yakiv and November 2004 photograph / Luka Myron;
- 11–17: Sofia, formal rules, fragments/strength, fear serving, Luka Myron documents;
- 18–22: 2012 encounter under `Lev`, witness line, photograph evidence handling;
- 23–26: purification/stone, Yakiv statement, ordinary city, Nazar message.

No gross scene/event reordering or new exact boundary duplicate was found in the retrieved manuscript spans.

Again: this is triage, not verification.

## CANONICAL POSITION REMAINS UNCHANGED
The verified audit has **not reached Chapter 5**.

Exact next canonical audit point remains Chapter 4 `Глава 4. Пам’ятка`:
- heading: recorded reader line 2879;
- narrative begins: recorded reader line 2881 `Пам’ятка мала вміститися на одну сторінку.`

Chapter 4 must be fully site-verified before Chapter 5 can be promoted or continued in the verified layer.

## FUTURE SITE-PARITY ORDER
When canonical site retrieval works again:
1. resume at Chapter 4 from recorded line 2879/2881;
2. finish Chapter 4 site parity and save only justified text under `verified/`;
3. determine Chapter 5's exact site heading/start and compare recovery 01–26 line by line;
4. do not assume legacy wrappers are site text;
5. after the exact site passage corresponding to the end of part 26 is reached, retrieve the site's next contiguous Ukrainian text;
6. only then translate the missing continuation into new verified English;
7. never reconstruct a part 27 from the old manuscript;
8. read back, record site markers, mirror to safety, update statuses.

## HARD STOP
While the canonical site source cannot be physically retrieved, do not create `verified/chapter-05-*` files and do not create `chapter-05-part-27.txt` from File Library, warehouse manuscripts, old English recovery, memory, summaries, or inference.
