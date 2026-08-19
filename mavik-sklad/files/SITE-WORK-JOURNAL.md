# MAVIK.NAME — SITE WORK / HANDOFF JOURNAL

Updated: 2026-08-20
Status: **AUTHORITATIVE CROSS-BRANCH HANDOFF**

## CURRENT RELEASE AUTHORITY

Sole explicitly approved structural/functional CORE base: **R215**.

- R216 = **REJECTED / DO NOT INSTALL** because the EN public shell failed visual/semantic parity.
- R217_GoodRelise = **FINAL TESTED CANDIDATE**, ready for installation/review, but not canonical until direct author approval.

Authority/checkpoints:
- `mavik-sklad/releases/CANON.md`
- `mavik-sklad/files/R215-CANON.md`
- `mavik-sklad/files/R217-GOODRELISE-CANDIDATE.md`
- `mavik-sklad/files/LOCALIZATION-FREEZE-2026-08-20.md`

Persistent release storage: ChatGPT Library `/Сайт/`.

## USER PRIORITY CHANGE — 2026-08-20

Author stopped all active localization implementation.

Current hard priority:
1. pure Ukrainian one-locale site (`uk-UA`);
2. maximum performance;
3. maximum crawlability/indexing;
4. maximum distribution/presence in Ukrainian segment;
5. comprehensive first-party statistics/SEO monitoring in Boss;
6. remove all non-required install garbage.

Localization/translation work is preserved separately and must not be merged into active site releases until explicit author command to resume.

## LOCALIZATION FREEZE

Recovery points:
- GitHub branch `freeze/localization-2026-08-19`;
- Library `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`;
- checksum sidecar beside the archive;
- translation workspace `mavik-sklad/translations/en/`.

Ten complete EN editions and all work/checkpoints remain preserved. Incomplete The Sculptor material remains preserved. Do not retranslate completed editions from scratch.

## R217_GOODRELISE — COMPLETED CANDIDATE

Built fresh from canonical R215. R216 was used only as a reference source for useful non-localization mechanisms.

Artifacts:
- `R217_GoodRelise.zip`
- `R217_GoodRelise_PART1.zip`
- `R217_GoodRelise_PART2.zip`
- `R217_GoodRelise-AUDIT.txt`
- `R217_GoodRelise-CHECKPOINT.txt`
- `R217_GoodRelise-CHECKSUMS.txt`

Identifiers:
- release 217 / base 215 / label `217_GoodRelise`;
- managed files 284;
- raw tree 44,225,038 bytes;
- FULL ZIP 26,239,709 bytes;
- manifest `f05a3f5f9d02ad357b88006480c56d8845ba8bcec8dd24f20baf2563d38d0219`;
- set `r217-f05a3f5f9d02ad35`;
- FULL SHA-256 `2234dcb886413cd66e5fb75d2c1c1ffe99f8c3c639a4615ae89e6c72d2a5b22d`;
- PART1 `11bd21282ae7fc27760e1824966801df5be1599630f4ddb238bdeed9a1ecab67`;
- PART2 `e0115a39790123c94950678f6386abc6c50ff7f51c79576cd2dd9ed4ebcc3059`.

## R217 IMPLEMENTATION

### Pure Ukrainian cleanup
- `/en/` removed;
- hreflang/locale/lang runtime removed;
- language selector and EN state removed;
- PWA/service worker/offline shell removed;
- third-party Cloudflare analytics JS removed;
- Ukrainian UI/Boss/system-message cleanup completed;
- no localization/WIP/checkpoint/audit/dev artifacts inside install ZIP.

### Performance/media
- book-cover JPG 23 / book-cover PNG 0;
- 4 legacy opaque PNG covers converted to progressive JPG;
- same 4 EPUB covers converted from embedded PNG to JPG;
- EPUB PNG-cover count 0;
- 248 duplicated clean-text TXT parts removed;
- one immediate clean HTML read-aloud mirror retained per book, no JS, `lang=uk-UA`, `noindex,follow`, canonical to main reader;
- heavy blog/author images optimized.

### SEO/indexing
- `MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name` entity package retained;
- stable `#website/#person`, `/mavik/`, `/about/` retained;
- robots/sitemap/IndexNow key retained;
- OAI-SearchBot / ChatGPT-User access retained;
- sitemap 82/82 unique canonical URLs + 11 images;
- public HTML 107; indexable 81;
- JSON-LD 81/81 parse;
- internal refs 5329/5329.

### Boss statistics
First-party, no-cookie/no-third-party-JS analytics:
- views, 30s/120s engagement, average time, scroll;
- reader progress 25/50/75/100, read clicks, EPUB downloads;
- blog interactions, music starts/30s/completion, coffee/support, outbound;
- devices/referrers/search engines/UTM;
- native Web Vitals TTFB/FCP/LCP/CLS/INP.

Dashboard also reports index/noindex counts, sitemap/robots/IndexNow, SEO scans, technical weight/deltas, content counts, latest deploy, popular/largest pages/files and CSV exports. It does not fabricate Search Console data without an authorized source.

### Deploy/rollback/cleanup
- database-only persistent pre-deploy backup;
- short-lived transaction snapshot for affected CORE;
- automatic rollback;
- uploaded release archive cleanup after success;
- obsolete managed files removed;
- empty legacy trees pruned;
- protected state preserved;
- retired localization runtime state removed only after the pre-deploy database backup exists.

## FINAL TESTS

Static/code:
- PHP 31/31 PASS;
- JS 14/14 PASS;
- XML 2/2 PASS;
- JSON-LD 81/81 PASS;
- refs 5329/5329 PASS;
- FULL/PART1/PART2 validators PASS;
- EPUB 21/21 integrity/mimetype/XML PASS;
- install garbage scan PASS.

Synthetic actual deploy using `mavik_deploy_archive()`:

### R215 → R217
PASS. copied 284; removed obsolete files 349. Old `/en/`, PWA/language files and empty trees removed. Live sentinel preserved. Old locale-shaped `site-core` migrated to version 7 direct Ukrainian label/path. Retired languages/locales state removed after backup. tx/stage/pending garbage = 0. Post-deploy gate PASS.

### R216 → R217
PASS. copied 284; removed obsolete files 615. Old `/en/` and locale runtime state removed. Live sentinel preserved. `site-core` migrated to version 7. tx/stage = 0.

## PERMANENT SEO/ENTITY RULE

Independent of localization pause:
`MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name` remains one entity; exact/ambiguous query `mavik` remains a long-term brand target. Do not fake DJI/drone topical relevance.

## NEW-BRANCH START RULE

For any new site branch:
1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. `mavik-sklad/releases/CANON.md`
4. `mavik-sklad/files/START-HERE-SITE.txt`
5. `mavik-sklad/files/R215-CANON.md`
6. `mavik-sklad/files/R217-GOODRELISE-CANDIDATE.md`
7. this journal
8. relevant SEO/deploy/privacy/blog canons.

Do not use R216 as working base. Do not resume localization without explicit author command. Do not promote R217_GoodRelise to canonical without explicit author approval.
