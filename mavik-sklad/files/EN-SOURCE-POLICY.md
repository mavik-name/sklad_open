# ENGLISH TRANSLATION — CURRENT SOURCE POLICY

Updated: 2026-08-18
Status: **ACTIVE / AUTHORITATIVE SOURCE POLICY**
Current structural-functional site core: **R210G**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Continuation authority: `mavik-sklad/translations/en/CONTINUATION-CANON.md`

## SOURCE PRIORITY — HARD RULE

1. **The canonical Ukrainian text actually published on mavik.name is the ONLY source that may generate English translation.**
2. The public reader `/books/<slug>/read/` is authoritative. A site-generated reader-text representation under `/books/<slug>/read/text/` may be used only when it is physically retrieved and demonstrably represents the same published text.
3. File Library manuscripts, warehouse manuscripts, release archives, old site copies, old translations, summaries, checkpoints and chat/model memory are comparison/recovery aids only. They may not generate new English prose.
4. A structural release number, including R210G, does not replace live published Ukrainian content as translation authority.
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

The Ukrainian `Соціальна` is now completed, but the existing project-specific **NO ENGLISH TRANSLATION / STOP** remains active until the author explicitly permits English translation.

Authority: `mavik-sklad/files/SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md`.

Old English Social files deleted on 2026-08-17 are not recovery input and must not be restored unless the author explicitly changes that decision.

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

Current old Chapter 4 and Chapter 5 files outside `verified/` remain quarantined recovery material. Mechanical maps:
- `mavik-sklad/translations/en/work/skulptor/CHAPTER-04-RECOVERY-STRUCTURAL-AUDIT.md`
- `mavik-sklad/translations/en/work/skulptor/CHAPTER-05-RECOVERY-STRUCTURAL-AUDIT.md`

Chapter 5 recovery is physically preserved through `chapter-05-part-26.txt` on both main and safety branch. This does NOT prove that Chapter 5 is complete and does not authorize creation of part 27.

## REQUIRED WORKFLOW

For every valid translation block:
1. retrieve exact next contiguous Ukrainian passage from mavik.name/site-generated reader text;
2. translate or retain only wording justified by that passage;
3. save physically under the verified/current work layer;
4. read back;
5. record exact site-source position/marker;
6. mirror to safety branch;
7. update status/canon.

## CONTENT SURVIVES RELEASE OBSOLESCENCE

Old release numbers do not invalidate translation content by themselves. Historical translation files may be useful recovery content, but they remain subject to published-site parity verification before publication.

An explicit author deletion/exclusion overrides preservation; Social English remains such an exclusion until explicitly released.

Before declaring non-excluded translation work lost, search:
1. current `main`;
2. `backup/english-translations-2026-08-17`;
3. Git history/tree/blob SHAs;
4. historical translation workspaces/branches as read-only recovery sources;
5. File Library.

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

Do not translate from chat memory, manuscript files, release archives or old English recovery when the canonical site publication is the required source.