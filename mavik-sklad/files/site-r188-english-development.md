# MAVIK.NAME — R188 / NATIVE ENGLISH DEVELOPMENT JOURNAL

Updated: **16.08.2026**
Base: canonical R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`, SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`.
Status: **WORK IN PROGRESS / NOT CANONICAL**.

## Product canon
Native `/en/`; direct `UA ↔ EN`; Ukrainian R187 remains intact; no automatic translation as English edition; separate Boss English area; English covers and validated EPUBs; only completed Ukrainian works enter English publication; unfinished `Social` is archive-only.

## Persistence canon
Work branch `r188-english-work`.
WORKSPACE `mavik-sklad/builds/R188-EN-WORKSPACE/`.
STAGING `mavik-sklad/builds/R188-EN-STAGING/`.
Ledger `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`.
Operations log `mavik-sklad/builds/R188-EN-WORKSPACE/control/R188-OPERATIONS-LOG.txt`.
Hard cycle: source → WORKSPACE → translation/code → WORKSPACE → STAGING for release files → readback → journal/ledger/checkpoint → next.

## Physically preserved complete English beta web editions — 9/19
1. **You and I...** (`ty-i-ia`)
2. **Solya, the Grain of Sand Who Dreamed of a Skyscraper** (`pishchynka-solya`)
3. **Rejection in Advance** (`vidmova-avansom`) — 3/3
4. **Transfer** (`transfer`) — 6/6
5. **The Gospel According to Macarius** (`yevanheliie-vid-makariia`) — 6/6
6. **The Nameless** (`bezimenni`) — 6/6
7. **Patterns of Self-Reflection** (`paterny-samorefleksii`) — 8/8
8. **Mom, I Want to Live!** (`mamo-zhyty`) — 7/7
9. **The Man Without an Account** (`liudyna-bez-akaunta`) — 6/6 + landing + reader + clean text entry

All nine are `translated_beta`: English cover adaptations and validated English EPUBs remain pending.

## Latest completed milestone — The Man Without an Account
- authoritative August source: `Людина без акаунта.docx`, 08.08.2026;
- 5 chapters + author's afterword translated 6/6;
- all six English text parts persisted in WORKSPACE + STAGING and hash-verified;
- landing SHA `00a49bd1092de36d70ee7f6db906ff6c5ffe2faa`;
- reader SHA `575a5e95976906f2ced7fa5a6fc3e5832dffb22f`;
- clean text entry SHA `68d68d4548346ff52d08f7828352421822c1d62d`;
- staging shell commit `cdbcb4e7ccd9412a13f26378848e951252d71ed5`;
- journal: `control/journal/2026-08-16-liudyna-bez-akaunta-web-shell-complete.txt`.

## Unfinished Social
`Social` / `Соціальна` remains excluded from English publication until the Ukrainian work is completed. Existing partial English work remains archive-only and must not enter STAGING.

## The Sculptor
- exact canonical R187 source inspected: 47 chapters + afterword, ~138,164 words;
- safe 28-block plan preserved in `control/journal/2026-08-15-2324-skulptor-structure.txt`;
- deliberately deferred under shorter-first queue strategy;
- no English translation block started.

## Current active work — next completed book
**`Три романи, які ніхто не читає`** (`try-romany-yaki-nikhto-ne-chytaie`), ~30,905 Ukrainian words.

Source verification completed so far:
- latest matching source file: `Три романи, які ніхто не читає.docx`;
- CreatedAt/ModifiedAt: **2026-08-08T10:24:22Z**;
- older matching copies dated 23.06.2026 are explicitly excluded;
- document opens with title `Три романи, які ніхто не читає`, genre `повість`, then heading `Розділ 1. Три романи, які ніхто не читає`;
- exact full heading inventory must be extracted from this August DOCX before translation;
- old site-menu labels must not be treated as authoritative chapter boundaries.

## Remaining shorter-first queue — 10 works
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

## Boss English
A separate top-level Boss `English` management area remains a hard requirement. Do not claim it complete until physical files are reconstructed from canonical R187, persisted, and tested.

## Remaining major work
- translate remaining completed Ukrainian books source-first;
- English covers;
- validated English EPUBs;
- Boss English management;
- English blog and announcements;
- SEO/hreflang/sitemap/service-worker/local-reference audit;
- PHP/JS/JSON/XML/EPUB checks;
- exact R188 manifest and Boss validator;
- full R188 candidate ZIP;
- no canonicalization without direct user approval.

## Next exact continuation point
Extract the **exact heading inventory** from `Три романи, які ніхто не читає.docx` dated 08.08.2026, create a safe block plan, persist the structure journal, then extract and translate block 1. Do not translate from an older June copy or infer chapter boundaries from old navigation.
