# THE SCULPTOR — ENGLISH WORK STATUS

Updated: 2026-08-18
Status: **SITE-SOURCE AUDIT ACTIVE — CHAPTERS 1–3 VERIFIED / CHAPTER 4 SOURCE FETCH BLOCKED**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Canonical source: `https://mavik.name/books/skulptor/read/`
Safety branch: `backup/english-translations-2026-08-17`
Detailed verified status: `mavik-sklad/translations/en/work/skulptor/verified/STATUS.md`
Source checkpoint: `mavik-sklad/translations/en/work/skulptor/SOURCE-CHECKPOINT.md`
Chapter 4 recovery structural audit: `mavik-sklad/translations/en/work/skulptor/CHAPTER-04-RECOVERY-STRUCTURAL-AUDIT.md`
Chapter 5 recovery structural audit: `mavik-sklad/translations/en/work/skulptor/CHAPTER-05-RECOVERY-STRUCTURAL-AUDIT.md`

## HARD RULE
Only the canonical Ukrainian text actually published on mavik.name may generate English translation. No manuscript, old English file, chat/model memory, summary or reconstruction may generate new text. No additions.

The old instruction that allowed File Library `Скульптор.docx` as a translation source has been explicitly superseded in `SOURCE-CHECKPOINT.md` and must not be used.

## QUARANTINED RECOVERY FILES
Older English files directly under `work/skulptor/` remain recovery artifacts, not publication canon.

Recovery preparation completed so far:
- Chapter 4: `chapter-04-part-01.txt` through `chapter-04-part-38.txt` mechanically inspected;
- Chapter 5: all currently available `chapter-05-part-01.txt` through `chapter-05-part-26.txt` mechanically inspected.

Chapter 4 recovery-only findings:
- definite duplicate across parts 09/10: `Serhii was silent.`;
- probable overlap across parts 21/22 around `Second.` — must be confirmed against the site source.

Chapter 5 recovery-only finding:
- no obvious exact sentence duplication was found across stored boundaries 01→02 through 25→26;
- this does NOT establish translation accuracy, completeness, or that `part-26` is the end of canonical Chapter 5.

Do NOT move any Chapter 4 or Chapter 5 recovery file into `verified/` merely because it exists or passed this mechanical check. Do NOT generate `chapter-05-part-27.txt` without first retrieving the exact canonical Ukrainian site continuation.

## VERIFIED LAYER
`mavik-sklad/translations/en/work/skulptor/verified/`

Completed:
- Chapter 1 `Бруд на дитячих руках` — reader lines 26–1231.
- Chapter 2 `Глина` — reader lines 1232–2040; old recovery gap 1966–2040 newly translated from site.
- Chapter 3 `Збори фонду` — reader lines 2041–2878.

Chapter 3 audit corrected two old boundary duplicates: `I’m a mother...` across parts 05/06 and `Nothing mystical` across parts 07/08. Verified files contain each canonical sentence exactly once.

Every completed verified file was saved, read back and mirrored to the safety branch.

## CURRENT BLOCKER — 2026-08-18
The live reader currently fails through the available external fetch path. Attempts through browser and separate file-download paths failed. This is a source-transport blocker only. The translation work is not lost.

The site architecture confirms a generated clean-text reader under `/books/<slug>/read/text/` (`full.txt`, `index.txt`, parts), which is an acceptable site-generated source only when it can be physically retrieved and matched to the canonical publication.

Per hard canon, do NOT fall back to File Library manuscripts, old recovery English or reconstruction while the canonical site source is unavailable.

## NEXT VALID ACTION
Chapter 4 `Пам’ятка`.
Exact next site marker:
- heading line 2879 `Глава 4. Пам’ятка`;
- narrative starts line 2881 `Пам’ятка мала вміститися на одну сторінку.`

Workflow once the site source is retrievable:
site source → audit/translate only justified text → save under `verified/` → read back → record marker → mirror → update statuses.

Chapter 5 parity work begins only after Chapter 4 is fully site-verified.

Until then, the last canonical verified point remains the end of Chapter 3, reader line 2878.