# English translation status

Updated: 2026-08-18
Status: **AUTHORITATIVE CURRENT STATUS**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Safety branch: `backup/english-translations-2026-08-17`

## HARD SOURCE RULE
The ONLY source for new English translation is the canonical Ukrainian text actually published on mavik.name. File Library manuscripts, warehouse manuscripts, chat/model memory, summaries, checkpoints and old English files may not generate new translation text.

For every valid block: retrieve exact site passage → translate/retain only justified text → save physically → read back → record exact site marker → mirror to safety branch → update status.

## EXCLUDED — SOCIAL / СОЦІАЛЬНА
The existing project-specific STOP remains in force until the author explicitly changes it. Do not restore the intentionally deleted old English Social files.

## PROTECTED RECOVERY CONTENT
Nine recovered English books, Evacuation, and the partial Three Novels Nobody Reads remain protected recovery artifacts. Publication readiness requires parity with the canonical Ukrainian site publication.

## ACTIVE — THE SCULPTOR
Canonical source:
`https://mavik.name/books/skulptor/read/`

Old files directly under `mavik-sklad/translations/en/work/skulptor/` remain quarantined recovery artifacts. Their old physical extent is preserved for recovery, but they are not publication canon.

Verified work now lives under:
`mavik-sklad/translations/en/work/skulptor/verified/`

### VERIFIED
Chapter 1 `Бруд на дитячих руках` is fully audited against the canonical site reader, lines 26–1231.
Five contiguous verified files are saved, read back and mirrored to the safety branch:
- `chapter-01-part-01.txt`
- `chapter-01-part-02.txt`
- `chapter-01-part-03.txt`
- `chapter-01-part-04.txt`
- `chapter-01-part-05.txt`

Corrections found during the audit:
- excluded non-site `Lviv · 2026` metadata;
- did not carry forward the incorrect old `mystical psychological thriller` genre label;
- removed the unsupported narrative sentence `The walls were light-colored but slightly cracked.` because it has no sentence in the canonical Ukrainian publication.

Detailed audit status:
`mavik-sklad/translations/en/work/skulptor/verified/STATUS.md`

## NEXT VALID ACTION
Continue site-source audit with Chapter 2 `Глина`.
Exact next source marker:
- reader line 1232: `Глава 2. Глина`;
- narrative starts at line 1234: `Марта прокинулася раніше будильника.`

Do NOT continue from old `chapter-05-part-26.txt` or create `chapter-05-part-27.txt` until the verified audit reaches that point.

If the canonical site source cannot be retrieved, stop translation. Never improvise.

## RECOVERY
Search `main` → safety branch → Git history/tree/blob → historical translation workspaces recovery-only → File Library before declaring non-excluded work lost. Recovery never overrides the published-site source rule.

## QUEUE AFTER THE SCULPTOR
UNIVERSE; The Devil’s Advocate; The Patient; The Loop; The Light-Bringer; Olena; Letters to the Colonel; remaining Three Novels Nobody Reads; How Vitko Fought the Russians.
