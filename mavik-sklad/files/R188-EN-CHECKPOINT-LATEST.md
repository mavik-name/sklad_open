# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — LIVE CHECKPOINT AFTER `The Man Without an Account` 3/6**
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
- prior session handoff: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/2026-08-15-SESSION-END-HANDOFF.txt`

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
- no English block started.

## CURRENT ACTIVE WORK
**`Людина без акаунта` → `The Man Without an Account` (`liudyna-bez-akaunta`)**

Canonical structure: **5 chapters + author's afterword, ~18,840 words**.
Planned split: **6 blocks**.

### Block 1/6 — COMPLETE
Source:
- `mavik-sklad/builds/R188-EN-WORKSPACE/source/liudyna-bez-akaunta/uk-001.txt`
- source blob SHA: `46a215b96cd2c2591baaa4dbaeedef67ea12d687`
English WORKSPACE + STAGING:
- `part-001.txt`
- matching blob SHA: `ec51115f74b55fc441f3957ed675c45e9830aa3a`
Journal:
- `control/journal/2026-08-16-liudyna-bez-akaunta-part-001.txt`

### Block 2/6 — COMPLETE
Source:
- `mavik-sklad/builds/R188-EN-WORKSPACE/source/liudyna-bez-akaunta/uk-002.txt`
- Chapter 2 `Сім лайків і три боти`
- source blob SHA: `1b86b5915801266c4d7c80d3a0d4894e2d69f2ac`
English WORKSPACE + STAGING:
- `part-002.txt`
- title: `CHAPTER 2. SEVEN LIKES AND THREE BOTS`
- matching blob SHA: `d15dc0c530a8883f41a579f1e5fb8505ee9a1323`
Journal:
- `control/journal/2026-08-16-liudyna-bez-akaunta-part-002.txt`

### Block 3/6 — COMPLETE
Source:
- `mavik-sklad/builds/R188-EN-WORKSPACE/source/liudyna-bez-akaunta/uk-003.txt`
- Chapter 3 `Шити чи пороти`
- source blob SHA: `6a2ed8a55b400960c54386dfd3af01b72e6eb85d`
English WORKSPACE:
- `mavik-sklad/builds/R188-EN-WORKSPACE/site/en/books/liudyna-bez-akaunta/read/text/part-003.txt`
English STAGING:
- `mavik-sklad/builds/R188-EN-STAGING/en/books/liudyna-bez-akaunta/read/text/part-003.txt`
- title: `CHAPTER 3. SEW OR RIP`
- matching blob SHA: `2b929ced487f4d04efe39161748f6524567f633a`
Journal:
- `control/journal/2026-08-16-liudyna-bez-akaunta-part-003.txt`

## EXACT STOP POINT
- current book source: **3/6 persisted**;
- current book English translation: **3/6 persisted**;
- WORKSPACE/STAGING readback for blocks 1–3: **PASS**;
- next block: **Chapter 4 `Душа як водяний знак` / 4 of 6**.

## FIRST ACTION ON RESUME
1. Open latest August source `Людина без акаунта.docx`.
2. Extract exact Chapter 4 to `WORKSPACE/source/liudyna-bez-akaunta/uk-004.txt`.
3. Read back source.
4. Translate Chapter 4 to `part-004.txt`.
5. Persist WORKSPACE + STAGING.
6. Read back and compare blob SHA.
7. Journal and update this checkpoint.

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

Do not redo completed beta editions or blocks 1–3 of `The Man Without an Account`.
