# ENGLISH TRANSLATION RECOVERY MAP

Updated: 2026-08-18
Canonical structural/functional site core: **R212**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Continuation canon: `mavik-sklad/translations/en/CONTINUATION-CANON.md`
Current status: `mavik-sklad/translations/en/STATUS.md`
Integrity audit: `mavik-sklad/translations/en/RECOVERY-INTEGRITY-AUDIT-2026-08-18.md`
Safety branch: `backup/english-translations-2026-08-17`

## Recovery principle
Do not conclude that non-excluded translation work is lost after checking one location. Recovery search order:
1. current `main`;
2. safety branch;
3. Git history/tree/blob objects;
4. translation recovery workspaces as read-only recovery sources;
5. File Library.

Recovery preserves existing work but NEVER overrides the hard site-source canon. Recovered English text cannot generate new translation prose and is not publication-canonical until parity with the Ukrainian text actually published on mavik.name.

## Current physical locations
- Recovered complete English books: `mavik-sklad/translations/en/books/`
- Partial English work: `mavik-sklad/translations/en/partial/`
- Current/complete working translations: `mavik-sklad/translations/en/work/`

## Immutable recovered English book trees
Historical recovery source branch: `r188-english-work`
Historical source root: `mavik-sklad/builds/R188-EN-STAGING/en/books/`

Recovered complete directory tree SHAs:
- `bezimenni` — `4460f0ef7ca9e8040bf28c0c108ac01d75bd992a`
- `liudyna-bez-akaunta` — `4d32678995ae6b72a723f3208f6450d11eb2a026`
- `mamo-zhyty` — `36c8b8612940a9613a11c112c3d39a72d39642fa`
- `paterny-samorefleksii` — `b2e020176dfdb1abb4d3fe89e48d8442ee911f24`
- `pishchynka-solya` — `ff5fb6be813563cfa359c78311e833a6f552d36d`
- `transfer` — `0603631f2c949888a4d7dccd86a361c369f9cbb4`
- `ty-i-ia` — `39d72d3b515fe5f9af4c84f5a0c54d2890c3caf1`
- `vidmova-avansom` — `5c29c777037897e06ceb5658e9aaa4ba30cfc387`
- `yevanheliie-vid-makariia` — `d02185641bfaa71d60f40cecfbc3af91b1d3fb72`

Partial only:
- `try-romany-yaki-nikhto-ne-chytaie` — tree `08966db4996b7685da2a9582b5d27548fc58af70` — Sections 1–8 only.

Historical untranslated placeholder tree `57291440dfad9b509a3eac1017da4f28ee7d8b94` is NOT a translation and must never be treated as one.

On 2026-08-18 all nine complete book tree SHAs and the partial tree were confirmed identical between `main` and safety.

## Evacuation
Location: `mavik-sklad/translations/en/work/evakuatsiia/`
All eight English story files are physically saved. Their blob SHAs were confirmed identical between `main` and safety on 2026-08-18. Publication parity with the site remains a separate requirement.

## The Sculptor
Location: `mavik-sklad/translations/en/work/skulptor/`
Verified layer: `mavik-sklad/translations/en/work/skulptor/verified/`

Site-verified:
- Chapter 1 — reader lines 26–1231;
- Chapter 2 — reader lines 1232–2040;
- Chapter 3 — reader lines 2041–2878.

Exact next canonical point remains Chapter 4 `Пам’ятка`, heading recorded line 2879; narrative begins recorded line 2881 `Пам’ятка мала вміститися на одну сторінку.`

### Chapter 4 recovery
Parts 01–38 are quarantine/recovery only. Mechanical and non-canonical manuscript triage are complete.
- 09→10 old chunking duplicate confirmed relative to manuscript: `Serhii was silent.`
- 21→22 old chunking duplicate confirmed relative to manuscript: start of `Second. Don’t give...`

Maps:
- `work/skulptor/CHAPTER-04-RECOVERY-STRUCTURAL-AUDIT.md`
- `work/skulptor/CHAPTER-04-MANUSCRIPT-COMPARISON-HEURISTIC.md`

### Chapter 5 recovery
Stored Parts 01–26 are quarantine/recovery only. Mechanical and non-canonical manuscript triage are complete.
- no obvious exact stored-boundary duplicate found;
- Part 26 is mirrored on main and safety;
- Part 27 exists on neither current branch;
- old manuscript continues after Part 26, proving the stored recovery is truncated relative to that manuscript;
- Git history contains translation commits sequentially through Part 26 and no translation commit for Part 27;
- final prose commit: `c0864252b8998cc053f2e508743edf7be821921e` — Part 26 — 2026-08-17 14:02:25 +03:00;
- hard site-only source canon followed at 14:03:55 +03:00 in `20ccb74b2d1899137be439f545d36b58568ffff3`.

Therefore there is no hidden Part 27 to recover. Do not create missing English from the manuscript.

Maps:
- `work/skulptor/CHAPTER-05-RECOVERY-STRUCTURAL-AUDIT.md`
- `work/skulptor/CHAPTER-05-MANUSCRIPT-COMPARISON-HEURISTIC.md`

Do not continue verified prose from `Скульптор.docx`, recovery English or inferred continuation. If the canonical site source cannot be physically retrieved, verified translation stops.

## Social / Соціальна — EXPLICIT EXCEPTION
The Ukrainian book is completed, but English translation remains blocked by the project-specific STOP canon until new explicit author permission.

English Social material intentionally deleted under that decision is NOT protected recovery input for current translation work and must NOT be restored unless the author explicitly reverses the decision.

Authority: `mavik-sklad/files/SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md`.

## Historical recovery milestone
Key historical recovery commit:
`ffd3b9cfeb6e62273385b16d9f2eb0e313837514` — recovered nine complete English translations and partial Three Novels.

Historical branches/commits are recovery evidence only. Never restore obsolete site architecture or obsolete source rules from them.
