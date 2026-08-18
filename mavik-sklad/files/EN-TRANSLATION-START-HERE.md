# MAVIK.NAME — ENGLISH CONTENT TRANSLATION — START HERE

Updated: 2026-08-18
Status: **ACTIVE TRANSLATION WORK / AUTHORITATIVE ENTRY POINT**
Current structural-functional site core: **R212**

## READ FIRST IN A NEW BRANCH
1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. this file
4. `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
5. `mavik-sklad/files/EN-SOURCE-POLICY.md`
6. `mavik-sklad/translations/en/CONTINUATION-CANON.md`
7. `mavik-sklad/translations/en/STATUS.md`
8. active-book STATUS/checkpoint
9. canonical Ukrainian publication on mavik.name

## HARD SOURCE CANON
For English book translation, the ONLY source of new or verified English prose is the canonical Ukrainian text actually published on mavik.name.

A site-generated clean-text reader under `/books/<slug>/read/text/` may be used only when physically retrieved and demonstrably identical to the published reader.

Forbidden as translation sources:
- chat/model memory;
- File Library manuscripts;
- warehouse manuscripts;
- release ZIPs as prose authority;
- cached site copies;
- existing English translations as a source of new prose;
- summaries/status/checkpoints;
- guessed or reconstructed continuation.

No invented text. No added descriptions, dialogue, explanations, connective passages or clarifications. If the site text cannot be retrieved, stop verified translation at the last site-verified point.

## SOCIAL / СОЦІАЛЬНА — EXCLUDED
The Ukrainian book is completed, but the project-specific **NO ENGLISH TRANSLATION / STOP** remains active until the author explicitly permits English translation.

Hard rule: `mavik-sklad/files/SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md`.

Deleted English Social material must not be restored unless the author explicitly changes that decision.

## RECOVERY VS CANON
Existing English files for other books are protected recovery artifacts, not automatic publication canon. Before publication they must match the canonical Ukrainian site text.

A version-like prefix in a translation-content filename does not by itself define site-core authority. Translation content remains subordinate to the site-source hard canon.

Before declaring non-excluded work lost, search current translation storage, dedicated safety/recovery paths, Git recovery data where needed, and File Library.

## CURRENT TARGET — THE SCULPTOR
Working directory:
`mavik-sklad/translations/en/work/skulptor/`

Canonical source:
`https://mavik.name/books/skulptor/read/`

Verified layer:
`mavik-sklad/translations/en/work/skulptor/verified/`

### SITE-VERIFIED
- Chapter 1 `Бруд на дитячих руках` — reader lines 26–1231.
- Chapter 2 `Глина` — reader lines 1232–2040.
- Chapter 3 `Збори фонду` — reader lines 2041–2878.

### EXACT NEXT CANONICAL POINT
Chapter 4 `Глава 4. Пам’ятка`:
- heading recorded at reader line 2879;
- narrative begins recorded line 2881: `Пам’ятка мала вміститися на одну сторінку.`

The live reader is currently not retrievable through the available fetch path. That is a source-transport blocker, not loss of work. Do not switch to DOCX or recovery English to bypass it.

### QUARANTINED RECOVERY PREPARATION
Chapter 4 recovery:
- parts 01–38 physically inspected;
- definite boundary duplicate 09/10: `Serhii was silent.`;
- probable 21/22 overlap around `Second.`;
- map: `mavik-sklad/translations/en/work/skulptor/CHAPTER-04-RECOVERY-STRUCTURAL-AUDIT.md`.

Chapter 5 recovery:
- preserved through `chapter-05-part-26.txt` in recovery storage;
- all stored parts 01–26 mechanically inspected;
- no obvious exact sentence boundary duplication found;
- part 26 is only the last recovered fragment and is NOT proof that Chapter 5 is complete;
- `chapter-05-part-27.txt` does not exist in current recovery storage;
- map: `mavik-sklad/translations/en/work/skulptor/CHAPTER-05-RECOVERY-STRUCTURAL-AUDIT.md`.

Do not create any `verified/chapter-04-*` or `verified/chapter-05-*` file until the corresponding exact Ukrainian site passage is physically retrieved.

## OTHER PROTECTED ENGLISH CONTENT
Recovered English books, completed Evacuation translation text, and partial Three Novels Nobody Reads work remain preserved as recovery assets. Their publication readiness still requires parity with the canonical Ukrainian site publication.

## QUEUE AFTER THE SCULPTOR
- `UNIVERSE`
- `Адвокат Диявола`
- `Пацієнт`
- `Петля`
- `Той, що несе світло`
- `Олена`
- `Листи полковнику`
- remaining `Три романи, які ніхто не читає`
- `Як Вітько з москалями воював`

## PERSISTENCE
Every valid block:
canonical mavik.name source → translate only that source → physical save → readback → exact site marker → recovery mirror → status update.

Never leave critical work only in chat/session memory.
