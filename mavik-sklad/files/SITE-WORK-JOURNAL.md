# MAVIK.NAME — SITE WORK / HANDOFF JOURNAL

Updated: 2026-08-19
Status: **AUTHORITATIVE CROSS-BRANCH HANDOFF**

## CURRENT RELEASE AUTHORITY

Sole explicitly approved structural/functional CORE base: **R215**.
Everything before R215 is obsolete release trash and must not be used as the current working/recovery/continuation base.

**R216 is a FINAL TESTED CANDIDATE and is ready for author installation/approval, but is not canonical until explicit approval.**

Release authority: `mavik-sklad/releases/CANON.md`
Current approved checkpoint: `mavik-sklad/files/R215-CANON.md`
R216 candidate checkpoint: `mavik-sklad/files/R216-CANDIDATE.md`
Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
Permanent SEO/entity/query canon: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`
Locale storage canon: `mavik-sklad/files/SITE-LOCALE-STORAGE-CANON.md`
Deploy backup canon: `mavik-sklad/files/SITE-DEPLOY-BACKUP-CANON.md`

Persistent binary storage: ChatGPT Library `/Сайт/`.

## R215 CURRENT CANON BASELINE

R215 hashes:
- Manifest: `39c99c980a186d6630a4a0be4ae370ac20f647333e14f474c7a44ad325d484d5`
- Set id: `r215-39c99c980a186d66`
- FULL: `3e2da10b16c6e697a6f4f945c4f3ed781d4ddd751b00e558c587be9e0ac2c8eb`
- PART1: `5424ca74462e06b2cd492dc952151197b5b044a889ddd08ae6202d5700903777`
- PART2: `28999d59144430fa92797487b280f2705afaa792f7ecdb2f450d5b12978eeb3c`

- 22 public book objects = 21 final library books + 1 announcement.
- 21/21 Ukrainian EPUB.
- 21 indexable Ukrainian main readers.
- Sitemap baseline: 86 unique canonical page URLs + 11 image entries.
- PHP 35/35; JS 17/17; XML 2/2.
- Crawler matrix: 430/430 HTTP 200 for Browser, Googlebot, Bingbot, OAI-SearchBot and ChatGPT-User in verified Apache configuration.
- Protected live state: `/_site-state/` must not be overwritten by routine content patches.

## R216 FINAL TESTED CANDIDATE — COMPLETED 2026-08-19

Artifacts saved in ChatGPT Library `/Сайт/`:
- `216 Збірка_Сайт_ОК.zip`
- `216 Збірка_Сайт_ОК_PART1.zip`
- `216 Збірка_Сайт_ОК_PART2.zip`
- `R216-AUDIT.txt`
- `R216-CHECKPOINT.txt`
- `R216-CHECKSUMS.txt`

Identifiers:
- release: 216;
- base release: 215;
- managed files: 895;
- manifest SHA-256: `ccbfcef34fa96b48261643de6c1635edf7c1f16f482bebd03763e322775214c5`;
- multipart set: `r216-ccbfcef34fa96b48`;
- FULL SHA-256: `a309b5eff63d92d6b9b910a802a4450dd5de1075ec4858c3cb92b39182449760`;
- PART1 SHA-256: `dcf769b5e4f4bf6e586e2a548376dce6d15d523487659c665b29049264c8e602`;
- PART2 SHA-256: `80a534ceadf3a8233532ca42fc15fcc7de1c58891722b7f4930baaed24e9cc62`.

### R216 implementation

1. Locale-aware persistent databases under `/_site-state/locales/<locale>/`; physical media/content binaries remain shared.
2. R215→R216 migration absorbs 22 UK objects and 10 already installed EN editions into isolated locale databases.
3. Legacy EN `_published` markers are removed only after successful migration.
4. Routine Boss removal becomes locale-unpublish (`Прибрати з локалі`), not shared-file physical delete.
5. Locale-aware patch contract: declared target databases only; cross-locale writes fail validation.
6. Boss blog workflow has visible UA/EN scope and complete EN payload fields; locale-aware book/music controls are present.
7. Shared reader CORE for UA/EN; locale UI does not duplicate reader logic in book patches.
8. EN home/public projections are generated from actual published EN state.
9. Persistent deploy backup contains mutable DB/JSON state only; affected CORE/shared files use short-lived transaction snapshot.
10. Automatic media pipeline has responsive derivatives, JPEG fallback for opaque PNG, WebP/AVIF where supported, GD and ImageMagick fallback, self-test and prebuilt derivatives.
11. Service-worker/cache/release identity moved to R216.
12. Entity SEO package implemented on home/About plus `/mavik/` and `/en/mavik/`, stable `#website` / `#person`, ProfilePage/Person/WebSite JSON-LD.

### R216 final release gate

Actual final FULL ZIP was deployed through the real deploy path over a fresh R215 state with all ten verified EN edition patches.

PASS:
- copied managed files: 895;
- UK locale book DB: 22;
- EN locale book DB: 10;
- protected live sentinel/state survived deploy;
- legacy EN `_published` removed after migration;
- `/mavik/` and `/en/mavik/` present;
- sitemap: 109/109 unique canonical URLs;
- EN book projection: `/en/books/` + 10 landings + 10 readers;
- database-only persistent backup about 104 KB;
- transaction snapshot cleaned after successful deploy;
- transaction rollback PASS;
- database rollback PASS;
- media pipeline PASS;
- PHP lint 37/37;
- JS syntax 18/18;
- XML 2/2;
- real JSON-LD 107/107 parse;
- readers with shared reader-core 42/42;
- FULL/PART1/PART2 Boss validation PASS.

## PERMANENT SEO / ENTITY STRATEGY FROM R216 FORWARD

This is inherited by every future site build until the author explicitly changes it.

One entity:
`MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name`.

Primary brand-search objective: exact/ambiguous query `mavik`, including the case where a searcher typed `mavik` while meaning `mavic`. The site must accumulate its own entity/brand/search signals strongly enough to be treated as a distinct meaning of the query.

Do not target generic `дрони`, `купити дрон`, DJI/Mavic product queries through keyword stuffing, doorway pages or fake topical relevance.

Permanent identity contract:
- `/mavik/` = brand/entity landing;
- `/about/` = author page;
- `https://mavik.name/#website` and `https://mavik.name/#person` stable across releases/locales;
- books/blog/music consistently bind to the same author entity;
- real external profiles via `sameAs`/`rel=me` where appropriate;
- monitor `mavik`, `MaVik`, `мавік`, `mavik name`, author-name queries and Google `mavik → mavic` rewriting.

Full authority: `SITE-SEO-IDENTITY-CANON.md`.

## ENGLISH PUBLICATION STATE

Ten complete English editions were previously validated as R215 Boss overlays and are now included in the R216 migration test/state model:
1. Mom, I Want to Live! (`mamo-zhyty`)
2. The Nameless (`bezimenni`)
3. The Man Without an Account (`liudyna-bez-akaunta`)
4. Rejection in Advance (`vidmova-avansom`)
5. Transfer (`transfer`)
6. Solya, the Grain of Sand Who Dreamed of a Skyscraper (`pishchynka-solya`)
7. Patterns of Self-Reflection (`paterny-samorefleksii`)
8. You and I... (`ty-i-ia`)
9. The Gospel According to Macarius (`yevanheliie-vid-makariia`)
10. Evacuation, or On the Road to the Stabilization Point (`evakuatsiia-abo-dorohoiu-do-stabika`)

Previous publication checkpoint: `mavik-sklad/translations/en/PUBLICATION-READY-R215.md`.
Previous patch storage: `/Сайт/book_patches/`.

Active incomplete English target: **The Sculptor**.
Social / Соціальна: **NO ENGLISH TRANSLATION / STOP** remains active until explicit author reversal.

## TRANSLATION SOURCE CANON

Only canonical Ukrainian prose actually published by mavik.name may generate new verified English prose.
Approved transports: live reader, clean-text reader, provenance-verified canonical EPUB generated from the same reader body.
Do not regenerate the ten completed EN editions from scratch.

## NEW-BRANCH START RULE

For any new site branch read, in order:
1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. `mavik-sklad/releases/CANON.md`
4. `mavik-sklad/files/START-HERE-SITE.txt`
5. `mavik-sklad/files/R215-CANON.md`
6. if reviewing/continuing next release: `mavik-sklad/files/R216-CANDIDATE.md`
7. this journal
8. `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
9. relevant SEO/locale/deploy canon and project/translation checkpoint.

Never reconstruct current state from old release archives or chat memory when these checkpoints exist. Do not promote R216 to canonical status without explicit author approval.
