# ENGLISH TRANSLATION — CURRENT SOURCE POLICY

Updated: 2026-08-18
Status: **ACTIVE / AUTHORITATIVE SOURCE POLICY**
Current structural-functional site core: **R213**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Continuation authority: `mavik-sklad/translations/en/CONTINUATION-CANON.md`

## SOURCE PRIORITY — HARD RULE
1. **The canonical Ukrainian text actually published on mavik.name is the ONLY source that may generate English translation.**
2. The public reader `/books/<slug>/read/` is authoritative. A site-generated reader-text representation under `/books/<slug>/read/text/` may be used only when physically retrieved and demonstrably identical to the published text.
3. File Library manuscripts, warehouse manuscripts, release archives, cached/site copies not demonstrably canonical, existing translations, summaries, checkpoints and chat/model memory are comparison/recovery aids only. They may not generate new English prose.
4. A structural release number never replaces live published Ukrainian content as translation authority.
5. If another source differs from the published Ukrainian site text, mavik.name wins unless the author explicitly changes the source canon.

## ZERO-ADDITION TRANSLATION RULE
- Translate only text physically retrieved from the canonical mavik.name publication or a demonstrably identical site-generated reader-text file.
- No invented text.
- No added descriptions, explanations, dialogue or connective passages.
- No filling gaps from context.
- No paraphrased reconstruction of missing source.
- No AI-polish that changes or expands meaning.
- Preserve chapter/section boundaries, voice, register, rhythm, profanity level and deliberate roughness.
- If the next canonical site passage cannot be retrieved, stop at the last verified site-source point. Do not improvise.

## PROJECT EXCLUSION — SOCIAL / СОЦІАЛЬНА
The Ukrainian `Соціальна` is completed, but the project-specific **NO ENGLISH TRANSLATION / STOP** remains active until the author explicitly permits English translation.

Authority: `mavik-sklad/files/SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md`.

Deleted English Social material must not be restored unless the author explicitly changes that decision.

## EXISTING ENGLISH FILES
Existing English files for non-excluded books are protected recovery artifacts, but they are not automatically canonical merely because they exist.

### The Sculptor
Canonical source: `https://mavik.name/books/skulptor/read/`
Verified layer: `mavik-sklad/translations/en/work/skulptor/verified/`

Site-verified:
- Chapter 1 `Бруд на дитячих руках` — reader lines 26–1231;
- Chapter 2 `Глина` — reader lines 1232–2040;
- Chapter 3 `Збори фонду` — reader lines 2041–2878.

Exact next canonical point:
- Chapter 4 `Глава 4. Пам’ятка`, heading recorded at reader line 2879;
- narrative begins recorded line 2881: `Пам’ятка мала вміститися на одну сторінку.`

#### Chapter 4 recovery preparation
Chapter 4 files outside `verified/` remain quarantined recovery material.
- parts 01–38 mechanically inspected;
- full non-canonical manuscript triage completed;
- 09→10 confirmed recovery chunking duplicate relative to manuscript: `Serhii was silent.`;
- 21→22 confirmed recovery chunking duplicate relative to manuscript: start of `Second. Don’t give...` repeated by old chunking;
- no other obvious exact boundary duplicate or gross event reordering found in retrieved manuscript spans.

Maps:
- `mavik-sklad/translations/en/work/skulptor/CHAPTER-04-RECOVERY-STRUCTURAL-AUDIT.md`
- `mavik-sklad/translations/en/work/skulptor/CHAPTER-04-MANUSCRIPT-COMPARISON-HEURISTIC.md`

#### Chapter 5 recovery preparation
Chapter 5 files outside `verified/` remain quarantined recovery material.
- stored parts 01–26 mechanically inspected and fully triaged against the old manuscript only as non-canonical recovery preparation;
- no obvious exact boundary duplicate found across the stored sequence;
- part 26 is present on main and safety;
- part 27 is present on neither branch;
- the old manuscript continues immediately after part 26, so stored recovery is definitely truncated inside Chapter 5 relative to the manuscript;
- Git history contains translation commits sequentially through Part 26 and no translation commit for Part 27;
- final old prose commit: `c0864252b8998cc053f2e508743edf7be821921e` — Part 26 — 2026-08-17 14:02:25 +03:00;
- site-only hard-source canon followed at 14:03:55 +03:00 in commit `20ccb74b2d1899137be439f545d36b58568ffff3`.

Therefore there is **no hidden Part 27 to recover**. The known manuscript continuation may not generate English prose.

Maps:
- `mavik-sklad/translations/en/work/skulptor/CHAPTER-05-RECOVERY-STRUCTURAL-AUDIT.md`
- `mavik-sklad/translations/en/work/skulptor/CHAPTER-05-MANUSCRIPT-COMPARISON-HEURISTIC.md`

## REQUIRED WORKFLOW
For every valid translation block:
1. retrieve exact next contiguous Ukrainian passage from mavik.name/site-generated reader text;
2. translate or retain only wording justified by that passage;
3. save physically under the verified/current work layer;
4. read back;
5. record exact site-source position/marker;
6. mirror to safety/recovery storage;
7. update status/canon.

## RECOVERY CONTENT
Translation content survives site-version changes only as recovery material and remains subject to published-site parity verification before publication.

An explicit author deletion/exclusion overrides preservation.

Before declaring non-excluded translation work lost, search:
1. current `main`;
2. dedicated recovery/safety storage;
3. Git history/tree/blob data;
4. File Library.

Recovery never overrides the hard source canon.

## ACTIVE ARCHIVE
- `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
- `mavik-sklad/translations/en/CONTINUATION-CANON.md`
- `mavik-sklad/translations/en/STATUS.md`
- `mavik-sklad/translations/en/books/`
- `mavik-sklad/translations/en/partial/`
- `mavik-sklad/translations/en/work/`

## NEW CHAT READ ORDER
1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. `mavik-sklad/files/EN-TRANSLATION-START-HERE.md`
4. `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
5. this file
6. `mavik-sklad/translations/en/CONTINUATION-CANON.md`
7. `mavik-sklad/translations/en/STATUS.md`
8. active-book STATUS
9. canonical Ukrainian publication on mavik.name

Do not translate from chat memory, manuscript files, release archives or recovery English when the canonical site publication is the required source.
