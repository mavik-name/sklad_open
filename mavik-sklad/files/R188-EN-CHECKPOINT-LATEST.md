# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **15.08.2026 — SESSION END**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## HARD RULES
- native `/en/`, direct `UA ↔ EN`, no Google Translate as English edition;
- Ukrainian R187 remains intact;
- separate Boss `English` area required before release;
- only completed Ukrainian works enter translation/publication;
- `Social` is unfinished and archive-only;
- English covers + validated EPUBs required before final status;
- mandatory persistence cycle: `source → WORKSPACE → translation/code → WORKSPACE → STAGING if release → readback → journal/ledger/checkpoint → next`;
- every process file is persisted; every intermediate result is journaled.

## STORAGE
- branch: `r188-english-work`
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
- ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
- operations log: `mavik-sklad/builds/R188-EN-WORKSPACE/control/R188-OPERATIONS-LOG.txt`
- immutable journal: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/`
- authoritative session-end handoff: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/2026-08-15-SESSION-END-HANDOFF.txt`

## COMPLETE ENGLISH BETA WEB EDITIONS — 8/19
1. You and I...
2. Solya, the Grain of Sand Who Dreamed of a Skyscraper
3. Rejection in Advance — 3/3
4. Transfer — 6/6 + source 6/6
5. The Gospel According to Macarius — 6/6, foreword + prologue + 25 chapters + afterword
6. The Nameless — 6/6, 13 chapters + afterword
7. Patterns of Self-Reflection — 8/8, author introduction + 49 texts
8. Mom, I Want to Live! — 7/7, 26 chapters + afterword; landing + reader + text page; staging readback passed

All eight remain `translated_beta`: English cover adaptation and validated EPUB pending.

## THE SCULPTOR
- canonical R187 source inspected: 47 chapters + afterword, ~138,164 words;
- safe 28-block structure preserved in `control/journal/2026-08-15-2324-skulptor-structure.txt`;
- translation deliberately deferred by shorter-first queue optimization;
- no English block started;
- `WORKSPACE/source/skulptor/uk-001.txt` was checked and is **NOT present**. Do not assume it is persisted.

Queue decision: `control/journal/2026-08-15-2328-translation-queue-optimization.txt`.

## CURRENT ACTIVE WORK
**`Людина без акаунта` → `The Man Without an Account` (`liudyna-bez-akaunta`)**

Canonical structure: **5 chapters + author's afterword, ~18,840 words**.
Planned split: **6 blocks**.

Physically persisted:
- `mavik-sklad/builds/R188-EN-WORKSPACE/source/liudyna-bez-akaunta/uk-001.txt`
- exact canonical R187 Chapter 1 source
- GitHub readback confirmed
- blob SHA: `46a215b96cd2c2591baaa4dbaeedef67ea12d687`

## EXACT STOP POINT
- source block **1/6 persisted**;
- English translation **0/6 persisted**;
- English Chapter 1 must be considered **NOT STARTED** for continuation purposes.

## FIRST ACTION NEXT SESSION
1. Read `START-HERE-SITE.txt`, `releases/CANON.md`, checkpoint canon, this file and `2026-08-15-SESSION-END-HANDOFF.txt`.
2. Fetch `WORKSPACE/source/liudyna-bez-akaunta/uk-001.txt`.
3. Translate Chapter 1.
4. Persist English `part-001.txt` to WORKSPACE + STAGING.
5. Read back both copies.
6. Journal result.
7. Continue source 2/6 → translation 2/6.

## STILL REQUIRED BEFORE R188 RELEASE
- remaining 11 completed works;
- English covers;
- validated English EPUBs;
- separate Boss `English` management;
- English blog/announcements;
- SEO/hreflang/sitemap/service worker/link audit;
- PHP/JS/JSON/XML/EPUB checks;
- exact R188 manifest + Boss validator;
- full R188 candidate ZIP;
- explicit user approval before canonicalization.

Do not redo the 8 complete beta editions. Resume exactly from `The Man Without an Account`, Chapter 1 translation.
