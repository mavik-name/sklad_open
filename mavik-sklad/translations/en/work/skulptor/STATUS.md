# THE SCULPTOR — ENGLISH WORK STATUS

Updated: 2026-08-18
Status: **CHAPTERS 1–3 SITE-VERIFIED / CHAPTERS 4–5 RECOVERY TRIAGE COMPLETE / SITE SOURCE FETCH BLOCKED**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Canonical source: `https://mavik.name/books/skulptor/read/`
Safety branch: `backup/english-translations-2026-08-17`
Verified status: `mavik-sklad/translations/en/work/skulptor/verified/STATUS.md`
Source checkpoint: `mavik-sklad/translations/en/work/skulptor/SOURCE-CHECKPOINT.md`
Chapter 4 structural audit: `mavik-sklad/translations/en/work/skulptor/CHAPTER-04-RECOVERY-STRUCTURAL-AUDIT.md`
Chapter 4 manuscript heuristic: `mavik-sklad/translations/en/work/skulptor/CHAPTER-04-MANUSCRIPT-COMPARISON-HEURISTIC.md`
Chapter 5 structural audit: `mavik-sklad/translations/en/work/skulptor/CHAPTER-05-RECOVERY-STRUCTURAL-AUDIT.md`
Chapter 5 manuscript heuristic: `mavik-sklad/translations/en/work/skulptor/CHAPTER-05-MANUSCRIPT-COMPARISON-HEURISTIC.md`

## HARD RULE
Only the canonical Ukrainian text actually published on mavik.name, or a physically retrieved site-generated reader text demonstrated to be the same publication, may generate new or verified English prose.

Manuscripts, DOCX/TXT, old English recovery, warehouse copies, release ZIPs, summaries, chat/model memory and inference may not generate translation prose.

## SITE-VERIFIED
- Chapter 1 `Бруд на дитячих руках` — reader lines 26–1231.
- Chapter 2 `Глина` — reader lines 1232–2040; old recovery gap 1966–2040 translated directly from site.
- Chapter 3 `Збори фонду` — reader lines 2041–2878.

Chapter 3 parity removed two old boundary duplicates: `I’m a mother...` and `Nothing mystical`.

## CHAPTER 4 — FULL RECOVERY TRIAGE COMPLETE, NOT VERIFIED
Old parts 01–38 were all mechanically read and then covered by a separate non-canonical manuscript-comparison heuristic.

Two old chunking defects are independently confirmed relative to the old manuscript:
1. 09→10 repeats `Serhii was silent.`; manuscript has corresponding `Сергій мовчав.` once.
2. 21→22 repeats the start of `Second. Don’t give...`; manuscript has one continuous `— Друге. Не давайте дітям...` sentence.

No other obvious exact boundary duplicate or gross event reordering/addition was found during recovery preparation.

These findings do not authorize edits to `verified/` until checked against the site.

## CHAPTER 5 — FULL RECOVERY TRIAGE 01–26 COMPLETE, NOT VERIFIED
Stored recovery parts 01–26 were mechanically inspected and then covered by a full non-canonical manuscript-comparison triage.

Findings:
- no obvious exact sentence boundary duplicate across 01→02 through 25→26;
- short parts 12, 14, 19 and 22 are supported as contiguous fragments rather than obvious duplicate files;
- broad scene/event continuity was checked across the complete stored 01–26 sequence;
- no gross scene/event reordering was found in retrieved manuscript spans;
- `part-26` exists on both main and safety;
- `part-27` exists on neither branch;
- critically, the old manuscript continues immediately after the end of `part-26`, so the stored recovery is **definitely truncated inside Chapter 5 relative to the old manuscript**.

Do not create part 27 from the manuscript. The missing continuation may only be translated after the exact corresponding Ukrainian site passage is physically retrieved and Chapter 4 site parity is complete.

## CURRENT SOURCE-TRANSPORT BLOCKER
The canonical live reader and generated text route are not physically retrievable through the available fetch path at present. Recent web retrieval returned an internal service error and direct HTTP access failed DNS resolution.

This is a transport blocker only. It is not permission to use `Скульптор.docx` or any other fallback prose source.

## EXACT NEXT CANONICAL ACTION
Chapter 4 `Глава 4. Пам’ятка`:
- heading recorded reader line 2879;
- narrative begins recorded reader line 2881 `Пам’ятка мала вміститися на одну сторінку.`

When source retrieval works:
site text → line-by-line Chapter 4 parity → resolve 09→10 and 21→22 from the site → save only justified English under `verified/` → read back → record markers → mirror → update statuses.

Only after Chapter 4 is complete may Chapter 5 site parity begin. When site parity reaches the end of stored part 26, retrieve the exact next Ukrainian site passage before creating any new English continuation.

Until then, last canonical verified point remains end of Chapter 3, reader line 2878.
