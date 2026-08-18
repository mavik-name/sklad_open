# English translation status

Updated: 2026-08-18
Status: **AUTHORITATIVE CURRENT STATUS**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Continuation canon: `mavik-sklad/translations/en/CONTINUATION-CANON.md`
Safety branch: `backup/english-translations-2026-08-17`
Recovery integrity audit: `mavik-sklad/translations/en/RECOVERY-INTEGRITY-AUDIT-2026-08-18.md`

## HARD SOURCE RULE
The ONLY source for new or verified English book prose is the canonical Ukrainian text actually published on mavik.name, or a physically retrieved site-generated reader-text representation demonstrated to be the same publication.

Manuscripts, DOCX/TXT, warehouse copies, release ZIPs, chat/model memory, summaries, checkpoints and old English files may not generate translation prose.

For every valid block: retrieve exact site passage → translate/retain only justified text → save physically → read back → record exact site marker → mirror to safety branch → update status/canon.

If the canonical site passage cannot be physically retrieved, verified translation stops at the last verified point.

## EXCLUDED — SOCIAL / СОЦІАЛЬНА
The Ukrainian book is completed, but the project-specific English STOP remains in force until explicit author permission to translate. Intentionally deleted old Social English files must not be restored unless that decision changes.

## PROTECTED RECOVERY CONTENT
Nine recovered English books, the complete eight-file Evacuation English recovery set, and partial Three Novels Nobody Reads Sections 1–8 remain protected recovery assets.

Physical mirror integrity was checked on 2026-08-18:
- 9/9 recovered complete book trees match `main` ↔ safety by tree SHA;
- 8/8 Evacuation story files match by blob SHA;
- Three Novels Sections 1–8 partial tree matches;
- current recovery source/control pointers are synchronized.

This proves storage integrity only, not site parity.

## ACTIVE — THE SCULPTOR
Canonical source: `https://mavik.name/books/skulptor/read/`
Verified layer: `mavik-sklad/translations/en/work/skulptor/verified/`
Detailed status: `mavik-sklad/translations/en/work/skulptor/STATUS.md`

### SITE-VERIFIED
- Chapter 1 `Бруд на дитячих руках`: reader lines 26–1231.
- Chapter 2 `Глина`: reader lines 1232–2040; old recovery gap 1966–2040 translated directly from site.
- Chapter 3 `Збори фонду`: reader lines 2041–2878.

Chapter 3 parity removed old recovery duplicates `I’m a mother...` and `Nothing mystical`.

### CHAPTER 4 — FULL RECOVERY TRIAGE COMPLETE, NOT SITE-VERIFIED
- quarantine parts 01–38 mechanically inspected;
- all 38 parts also covered by a separate non-canonical old-manuscript comparison heuristic;
- 09→10 confirmed old chunking duplicate relative to manuscript: repeated `Serhii was silent.`;
- 21→22 confirmed old chunking duplicate relative to manuscript: repeated start of `Second. Don’t give...`;
- no additional obvious exact boundary duplicate or gross scene/event reordering was found in physically retrieved manuscript spans;
- structural audit: `work/skulptor/CHAPTER-04-RECOVERY-STRUCTURAL-AUDIT.md`;
- manuscript heuristic: `work/skulptor/CHAPTER-04-MANUSCRIPT-COMPARISON-HEURISTIC.md`.

These findings do NOT authorize edits to `verified/` until confirmed against the published site text.

### CHAPTER 5 — RECOVERY PREPARATION, NOT SITE-VERIFIED
- quarantine parts 01–26 mechanically inspected;
- no obvious exact sentence boundary duplicate found in stored 01–26 sequence;
- `part-26` exists on both main and safety;
- `part-27` exists on neither branch;
- part 26 is NOT evidence that canonical Chapter 5 is complete;
- partial non-canonical manuscript triage physically confirmed the Chapter 5 opening/parts 01–02 and the Yakiv/2004-photo block around parts 07–10 without obvious gross drift in those retrieved spans;
- structural audit: `work/skulptor/CHAPTER-05-RECOVERY-STRUCTURAL-AUDIT.md`;
- partial manuscript heuristic: `work/skulptor/CHAPTER-05-MANUSCRIPT-COMPARISON-HEURISTIC.md`.

Do not begin Chapter 5 site parity or generate part 27 before Chapter 4 is site-verified and the exact next site passage is retrieved.

## CURRENT SOURCE-TRANSPORT BLOCKER
The site root and `/books/` library are currently retrievable and confirm `Скульптор` as a listed full Ukrainian work, but the book page/reader route itself continues to fail through the available fetch cache. Direct reader attempts, generated-text route attempts and direct download attempts have not physically retrieved Chapter 4.

File Library currently exposes the old manuscript for recovery comparison but not a usable canonical R210G reader snapshot. The manuscript remains forbidden as translation source.

## EXACT NEXT CANONICAL ACTION
Chapter 4 `Глава 4. Пам’ятка`:
- heading recorded reader line 2879;
- narrative starts recorded line 2881 `Пам’ятка мала вміститися на одну сторінку.`

When source retrieval works: retrieve exact site text → line-by-line Chapter 4 parity → resolve 09→10 and 21→22 from site → save only site-justified English under `verified/` → read back → record markers → mirror → update statuses/canon.

Last canonical verified point remains end of Chapter 3, reader line 2878.

## RECOVERY ORDER
`main` → safety branch → Git history/tree/blob → historical translation workspaces recovery-only → File Library.
Recovery never overrides the published-site source rule.

## QUEUE AFTER THE SCULPTOR
UNIVERSE; The Devil’s Advocate; The Patient; The Loop; The Light-Bringer; Olena; Letters to the Colonel; remaining Three Novels Nobody Reads; How Vitko Fought the Russians.
