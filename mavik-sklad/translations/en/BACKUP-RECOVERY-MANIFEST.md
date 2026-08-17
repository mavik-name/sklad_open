# ENGLISH TRANSLATION SAFETY BRANCH — RECOVERY MANIFEST

Branch: `backup/english-translations-2026-08-17`
Updated: 2026-08-17
Purpose: independent persistent recovery copy of English translation content.

## HARD SOURCE OVERRIDE
The ONLY authoritative source for English book translation is the canonical Ukrainian text actually published on mavik.name. Recovery files may not be used to invent or reconstruct missing source text.

## SOCIAL / СОЦІАЛЬНА — INTENTIONALLY EXCLUDED
`Соціальна` is unfinished and actively edited. Do **not** translate it into English until the author explicitly says the Ukrainian book is finished/fixed and may be translated.

Hard rule on this branch: `mavik-sklad/files/SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md`.

The old English Social files for chapters 8–16 were intentionally deleted from both `main` and this safety branch on 2026-08-17. **Do not restore them from Git history for translation work.**

## THE SCULPTOR
This branch contains English `The Sculptor` files through `chapter-05-part-25.txt`.
They are **UNVERIFIED AGAINST THE CANONICAL SITE PUBLICATION / NOT FOR PUBLICATION** until line-by-line audited against mavik.name.

`chapter-05-part-26.txt` exists only on `main` because the hard-canon interruption occurred immediately after that write; it was intentionally not mirrored.

## RECOVERY USE
Use this branch to preserve and compare existing work only. Canonical validity comes only from parity with the published Ukrainian site text. Explicit author deletions/exclusions, such as Social English, must not be undone by recovery.

If the site source cannot be retrieved, stop translation. Never improvise.
