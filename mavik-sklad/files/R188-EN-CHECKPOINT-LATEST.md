# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — `The Man Without an Account` COMPLETE / 9 of 19 English beta web editions**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## HARD RULES
- native `/en/`, direct `UA ↔ EN`, no Google Translate as English edition;
- Ukrainian R187 remains intact;
- separate Boss `English` area required before release;
- only completed Ukrainian works enter translation/publication;
- `Social` is unfinished and archive-only;
- English cover adaptations + validated EPUBs required before final status;
- mandatory persistence cycle: `source → WORKSPACE → translation/code → WORKSPACE → STAGING if release → readback → journal/ledger/checkpoint → next`;
- every process file is persisted; every intermediate result is journaled.

## STORAGE
- branch: `r188-english-work`
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
- ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
- operations log: `mavik-sklad/builds/R188-EN-WORKSPACE/control/R188-OPERATIONS-LOG.txt`
- immutable journal: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/`

## COMPLETE ENGLISH BETA WEB EDITIONS — 9/19
1. You and I...
2. Solya, the Grain of Sand Who Dreamed of a Skyscraper
3. Rejection in Advance — 3/3
4. Transfer — 6/6 + source 6/6
5. The Gospel According to Macarius — 6/6, foreword + prologue + 25 chapters + afterword
6. The Nameless — 6/6, 13 chapters + afterword
7. Patterns of Self-Reflection — 8/8, author introduction + 49 texts
8. Mom, I Want to Live! — 7/7, 26 chapters + afterword; landing + reader + text page; staging readback passed
9. The Man Without an Account — 6/6, 5 chapters + author's afterword; landing + reader + clean text page; staging readback passed

All nine remain `translated_beta`: English cover adaptation and validated English EPUB pending.

## JUST COMPLETED — THE MAN WITHOUT AN ACCOUNT
Ukrainian: `Людина без акаунта`
English: `The Man Without an Account`
Slug: `liudyna-bez-akaunta`
Canonical structure: **5 chapters + author's afterword = 6 blocks**.

### Translation body — 6/6 COMPLETE
- part-001 SHA: `ec51115f74b55fc441f3957ed675c45e9830aa3a`
- part-002 SHA: `d15dc0c530a8883f41a579f1e5fb8505ee9a1323`
- part-003 SHA: `2b929ced487f4d04efe39161748f6524567f633a`
- part-004 SHA: `e1048e2675fc6cef9d2287e4443039315d21a5ca`
- part-005 SHA: `691eb6f2a53ada2053594c6a6a6c0b2d4decfb07`
- part-006 SHA: `bba5760b5d708e243a9e68ba765dfb08609ec625`
- all six parts persisted in WORKSPACE + STAGING and read back successfully.

### August-source corrections
- source authority: `Людина без акаунта.docx`, 08.08.2026;
- block 4 was corrected after detecting an earlier shortened reconstruction;
- block 4 source SHA: `87a688f4472c728936b0b111e33f3e81bc4229d1`;
- block 5 source SHA: `0add59882f940aff45a6f5284429aa21e63458ec`;
- block 6 source SHA: `4fc347f4485a5539dc29e77991568b70ce4ef303`;
- exact afterword ending preserved: `Бо де моя рука — і де ваша впевненість, що все так просто?`

### English web shell — COMPLETE
WORKSPACE + STAGING identical:
- landing `index.html` SHA: `00a49bd1092de36d70ee7f6db906ff6c5ffe2faa`
- reader `read/index.html` SHA: `575a5e95976906f2ced7fa5a6fc3e5832dffb22f`
- clean text entry `read/text/index.html` SHA: `68d68d4548346ff52d08f7828352421822c1d62d`
- atomic staging shell commit: `cdbcb4e7ccd9412a13f26378848e951252d71ed5`
- reader/text entry load exactly `part-001.txt` through `part-006.txt`;
- cover path used: `/assets/covers/library/liudyna-bez-akaunta.jpg`;
- shell readback: PASS.

Journals:
- `control/journal/2026-08-16-liudyna-bez-akaunta-part-006.txt`
- `control/journal/2026-08-16-liudyna-bez-akaunta-web-shell-complete.txt`

## THE SCULPTOR
- canonical R187 source inspected: 47 chapters + afterword, ~138,164 words;
- safe 28-block structure preserved in `control/journal/2026-08-15-2324-skulptor-structure.txt`;
- translation deliberately deferred by shorter-first queue optimization;
- no English block started.

## NEXT ACTIVE WORK
**`Три романи, які ніхто не читає` → English edition TBD (`try-romany-yaki-nikhto-ne-chytaie`)**
Approximate Ukrainian size: **30,905 words**.

### FIRST ACTION ON RESUME / CONTINUE
1. Locate and verify the latest R187/August canonical source for `Три романи, які ніхто не читає`.
2. Inspect exact structure and choose safe chapter-boundary translation blocks.
3. Persist structure journal.
4. Extract first exact source block to WORKSPACE.
5. Translate, persist WORKSPACE + STAGING, read back, journal, checkpoint.

## REMAINING SHORTER-FIRST QUEUE — 10 WORKS
1. `try-romany-yaki-nikhto-ne-chytaie` ~30,905
2. `yak-vitko-z-moskaliamy-voiuvav` ~33,499
3. `toi-shcho-nese-svitlo` ~41,372
4. `lysty-polkovnyku` ~52,406
5. `olena` ~62,766
6. `universe` ~68,944
7. `petlia` ~86,054
8. `patsiient` ~96,982
9. `advokat-dyiavola` ~108,462
10. `skulptor` ~138,164

## STILL REQUIRED BEFORE R188 RELEASE
- remaining completed works;
- English cover adaptations;
- validated English EPUBs;
- separate Boss `English` management;
- English blog/announcements;
- SEO/hreflang/sitemap/service worker/link audit;
- PHP/JS/JSON/XML/EPUB checks;
- exact R188 manifest + Boss validator;
- full R188 candidate ZIP;
- explicit user approval before canonicalization.

Do not redo the nine completed beta editions or any blocks of `The Man Without an Account`.
