# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — LIVE CHECKPOINT AFTER `The Man Without an Account` 5/6**
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
Source: `source/liudyna-bez-akaunta/uk-001.txt`
- source SHA: `46a215b96cd2c2591baaa4dbaeedef67ea12d687`
English WORKSPACE + STAGING: `part-001.txt`
- SHA: `ec51115f74b55fc441f3957ed675c45e9830aa3a`

### Block 2/6 — COMPLETE
Source: `source/liudyna-bez-akaunta/uk-002.txt`
- `Сім лайків і три боти`
- source SHA: `1b86b5915801266c4d7c80d3a0d4894e2d69f2ac`
English WORKSPACE + STAGING: `part-002.txt`
- `SEVEN LIKES AND THREE BOTS`
- SHA: `d15dc0c530a8883f41a579f1e5fb8505ee9a1323`

### Block 3/6 — COMPLETE
Source: `source/liudyna-bez-akaunta/uk-003.txt`
- `Шити чи пороти`
- source SHA: `6a2ed8a55b400960c54386dfd3af01b72e6eb85d`
English WORKSPACE + STAGING: `part-003.txt`
- `SEW OR RIP`
- SHA: `2b929ced487f4d04efe39161748f6524567f633a`

### Block 4/6 — COMPLETE / CORRECTED TO AUGUST CANON
Source: `source/liudyna-bez-akaunta/uk-004.txt`
- `Душа як водяний знак`
- authoritative source: `Людина без акаунта.docx`, 08.08.2026;
- source SHA: `87a688f4472c728936b0b111e33f3e81bc4229d1`
English WORKSPACE + STAGING: `part-004.txt`
- `THE SOUL AS A WATERMARK`
- matching SHA: `e1048e2675fc6cef9d2287e4443039315d21a5ca`
- readback: PASS.

### Block 5/6 — COMPLETE
Source: `source/liudyna-bez-akaunta/uk-005.txt`
- `Де моя рука`
- authoritative source: `Людина без акаунта.docx`, 08.08.2026;
- source SHA: `0add59882f940aff45a6f5284429aa21e63458ec`
- source commit: `0ebcca2fbd99af7e289567ca13f015b54d4e4d21`
English WORKSPACE:
- `mavik-sklad/builds/R188-EN-WORKSPACE/site/en/books/liudyna-bez-akaunta/read/text/part-005.txt`
- commit: `0e7d83fc2e8889706b5419beb51ba753874fb792`
English STAGING:
- `mavik-sklad/builds/R188-EN-STAGING/en/books/liudyna-bez-akaunta/read/text/part-005.txt`
- commit: `6ce50920fc5da0cb2a6e5638b9c2742704b1c691`
- `WHERE IS MY HAND?`
- matching WORKSPACE/STAGING SHA: `691eb6f2a53ada2053594c6a6a6c0b2d4decfb07`
- key `puss / pussy` dialect wordplay preserved;
- exact ending `Because the house was still asleep.` readback: PASS.
Journal:
- `control/journal/2026-08-16-liudyna-bez-akaunta-part-005.txt`
- journal commit: `8bffd929f08aad1b7d5fefc6ed27a0489994de3e`

## EXACT STOP POINT
- current book source: **5/6 persisted**;
- current book English translation: **5/6 persisted**;
- WORKSPACE/STAGING readback for blocks 1–5: **PASS**;
- next block: **author's afterword / 6 of 6**.

## FIRST ACTION ON RESUME
1. Extract/check exact author's afterword from latest August source `Людина без акаунта.docx`.
2. Persist `WORKSPACE/source/liudyna-bez-akaunta/uk-006.txt`.
3. Translate afterword to `part-006.txt`.
4. Persist WORKSPACE + STAGING.
5. Read back, compare SHA, journal result.
6. Mark `The Man Without an Account` complete English beta web edition and advance queue.

## STILL REQUIRED BEFORE R188 RELEASE
- remaining completed works;
- English covers;
- validated English EPUBs;
- separate Boss `English` management;
- English blog/announcements;
- SEO/hreflang/sitemap/service worker/link audit;
- PHP/JS/JSON/XML/EPUB checks;
- exact R188 manifest + Boss validator;
- full R188 candidate ZIP;
- explicit user approval before canonicalization.

Do not redo completed beta editions or blocks 1–5 of `The Man Without an Account`.
