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
- all 38 parts covered by a separate non-canonical old-manuscript comparison heuristic;
- 09→10 confirmed old chunking duplicate relative to manuscript: repeated `Serhii was silent.`;
- 21→22 confirmed old chunking duplicate relative to manuscript: repeated start of `Second. Don’t give...`;
- no additional obvious exact boundary duplicate or gross scene/event reordering found in retrieved manuscript spans;
- structural audit: `work/skulptor/CHAPTER-04-RECOVERY-STRUCTURAL-AUDIT.md`;
- manuscript heuristic: `work/skulptor/CHAPTER-04-MANUSCRIPT-COMPARISON-HEURISTIC.md`.

These findings do NOT authorize edits to `verified/` until confirmed against the published site text.

### CHAPTER 5 — FULL STORED RECOVERY TRIAGE 01–26 COMPLETE, NOT SITE-VERIFIED
- quarantine parts 01–26 mechanically inspected;
- full stored 01–26 sequence also covered by non-canonical manuscript-comparison triage;
- no obvious exact sentence boundary duplicate found across stored 01→26 sequence;
- short parts 12, 14, 19 and 22 are supported as contiguous fragments rather than obvious duplicates;
- no gross scene/event reordering found in retrieved manuscript spans;
- `part-26` exists on both main and safety;
- `part-27` exists on neither branch;
- old manuscript continues immediately after the end of part 26, so stored recovery is **definitely truncated inside Chapter 5 relative to the manuscript**;
- structural audit: `work/skulptor/CHAPTER-05-RECOVERY-STRUCTURAL-AUDIT.md`;
- full non-canonical manuscript heuristic: `work/skulptor/CHAPTER-05-MANUSCRIPT-COMPARISON-HEURISTIC.md`.

The manuscript continuation after part 26 is known only as a recovery fact. It must NOT be translated into part 27. Missing English may only be created from the exact published site continuation after Chapter 4 parity is complete.

## CURRENT SOURCE-TRANSPORT BLOCKER
The canonical reader is currently not physically retrievable through the available tools. The latest web retrieval attempt returned an internal service error, and direct HTTP access failed DNS resolution.

File Library exposes the old manuscript for recovery comparison, but the manuscript remains forbidden as translation source. No usable canonical R210G reader snapshot has been retrieved.

## EXACT NEXT CANONICAL ACTION
Chapter 4 `Глава 4. Пам’ятка`:
- heading recorded reader line 2879;
- narrative starts recorded line 2881 `Пам’ятка мала вміститися на одну сторінку.`

When source retrieval works: retrieve exact site text → line-by-line Chapter 4 parity → resolve 09→10 and 21→22 from site → save only site-justified English under `verified/` → read back → record markers → mirror → update statuses/canon.

After Chapter 4 is fully verified, Chapter 5 site parity starts from its exact site heading. When parity reaches the end of stored part 26, retrieve the exact next Ukrainian site passage before creating any new English continuation.

Last canonical verified point remains end of Chapter 3, reader line 2878.

## RECOVERY ORDER
`main` → safety branch → Git history/tree/blob → historical translation workspaces recovery-only → File Library.
Recovery never overrides the published-site source rule.

## QUEUE AFTER THE SCULPTOR
UNIVERSE; The Devil’s Advocate; The Patient; The Loop; The Light-Bringer; Olena; Letters to the Colonel; remaining Three Novels Nobody Reads; How Vitko Fought the Russians.
