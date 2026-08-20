# MAVIK.NAME — SITE WORK / HANDOFF JOURNAL

Updated: 2026-08-20
Status: **AUTHORITATIVE CROSS-BRANCH HANDOFF**

## CURRENT RELEASE AUTHORITY

Sole explicitly approved structural/functional CORE base: **R215**.

- R216 = **REJECTED / DO NOT INSTALL** because the EN public shell failed visual/semantic parity.
- R217_GoodRelise = previous installed/tested candidate.
- **R222 = currently installed live candidate**, author confirmed installation 2026-08-20; pre-pause audit found no release-blocking defect, but R222 is not formally canonical until direct author approval.

Authority/checkpoints:
- `mavik-sklad/releases/CANON.md`
- `mavik-sklad/files/R215-CANON.md`
- `mavik-sklad/files/R222-CANDIDATE.md`
- `mavik-sklad/files/R222-PRE-PAUSE-AUDIT-2026-08-20.md`
- `mavik-sklad/files/LOCALIZATION-FREEZE-2026-08-20.md`

Persistent release storage: ChatGPT Library `/Сайт/`.

## USER PRIORITY — 2026-08-20

Current hard priority:
1. pure Ukrainian one-locale site (`uk-UA`);
2. maximum performance;
3. maximum crawlability/indexing;
4. maximum distribution/presence in Ukrainian segment;
5. comprehensive first-party statistics/SEO monitoring in Boss;
6. remove all non-required install garbage;
7. after R222 stabilization, avoid unnecessary structural changes and allow crawlers/search engines time to recrawl.

Localization/translation implementation remains frozen and must not be merged into active site releases until explicit author command to resume.

## LOCALIZATION FREEZE

Recovery points:
- GitHub branch `freeze/localization-2026-08-19`;
- Library `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`;
- checksum sidecar beside the archive;
- translation workspace `mavik-sklad/translations/en/`.

Ten complete EN editions and all work/checkpoints remain preserved. Incomplete The Sculptor material remains preserved. Do not retranslate completed editions from scratch.

## R222 — CURRENT INSTALLED STABILIZATION CANDIDATE

Artifacts in Library `/Сайт/`:
- `R222.zip`
- `R222_PART1.zip`
- `R222_PART2.zip`
- `R222-AUDIT.txt`
- `R222-CHECKPOINT.txt`
- `R222-CHECKSUMS.txt`

Identity:
- release 222 / base 217;
- managed files 261;
- raw tree 44,235,022 bytes;
- manifest `38a1a21936163bef3f17f517dac6daa1d3b753ce26e9afb326f17ebacf4a27e2`;
- FULL SHA-256 `89f8d3079027f1b0041e142f004ae547c81f957c35fdbb4c1a7cf38b26b0229d`;
- PART1 `bff28f101563376f9d9ecc371118b0b3a6a51f01d98bbb08942266c8e15573d0`;
- PART2 `14ddadc437251d51400895fdcaea4f34b0517917241f9a69a104b30d3fd9b470`.

R222 release gate before installation:
- tree↔manifest 261/261;
- garbage 0;
- EN/localization/PWA runtime 0;
- PHP 31/31;
- JS 14/14;
- XML 2/2;
- JSON-LD 81/81;
- sitemap 82/82 unique;
- broken internal refs 0;
- EPUB 21/21;
- covers 23 JPG / 0 PNG;
- FULL/PART validators PASS;
- real R217→R222 FULL deploy PASS;
- multipart deploy PASS;
- forced-failure rollback PASS;
- local Apache crawler matrix 82 URLs × 5 agents = 410/410 HTTP 200;
- security/cache/redirect/noindex/maintenance gates PASS.

R222 improvements over R217:
- normalized indexable HTML to one H1 per page/reader without rewriting prose;
- SEO title/description cleanup;
- SSR public navigation retained;
- centralized clean-text `X-Robots-Tag` and removal of 21 duplicate per-book `.htaccess` files;
- improved robots private-path exclusions for wildcard/OpenAI groups;
- cache busting `?v=222` + `X-MaVik-Release: R222`;
- removed remaining retired helper/legacy files;
- Boss static/garbage audit capable of local checks without external DNS;
- analytics search/AI referral attribution expanded.

## PRE-PAUSE AUDIT — 2026-08-20

Author confirmed R222 installed.

Independent re-audit of FULL R222:
- ZIP SHA/integrity PASS;
- 261 files / 44,235,022 raw bytes;
- public external scripts 0;
- unversioned CSS/JS refs 0;
- sitemap 82/82 unique, EN URLs 0, missing sitemap images 0;
- public JSON-LD parse PASS;
- duplicate public indexable title/description/canonical 0;
- one-H1 structure retained;
- static local asset misses 0;
- robots/sitemap/llms/entity/canonical configuration retained.

Non-blocking notes only:
- three meta descriptions are 172–174 chars (possible snippet truncation only);
- stable `#person` ID is consistent even where books catalog uses fuller personal name;
- public analytics collector can be intentionally spoofed because client-side event credentials are necessarily visible; this affects statistics integrity only, not SEO/content/admin access.

External search snapshot through the available search channel did not yet return direct `site:mavik.name` results. External author/book pages do already mention MaVik and/or the official domain, so off-site reference signals exist. Direct production fetch of mavik.name from this audit environment failed due DNS/cache limitations; do not treat that as a claim that the site itself was unavailable.

Decision: **NO RELEASE-BLOCKING DEFECT FOUND.**

Stabilization plan: **7-day pause** from structural URL/canonical/robots/sitemap/entity/layout changes unless a genuine outage/security/broken-route emergency occurs. After 7 days compare Search Console/Bing/indexing, query visibility, sitemap processing, IndexNow/crawler state, first-party referrers/Web Vitals and any 404/410/5xx/canonical/noindex anomalies.

Full checkpoint: `mavik-sklad/files/R222-PRE-PAUSE-AUDIT-2026-08-20.md`.

## PERMANENT SEO/ENTITY RULE

Independent of localization pause:
`MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name` remains one entity; exact/ambiguous query `mavik` remains a long-term brand target. Do not fake DJI/drone topical relevance.

## NEW-BRANCH START RULE

For any new site branch:
1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. `mavik-sklad/releases/CANON.md`
4. `mavik-sklad/files/START-HERE-SITE.txt`
5. `mavik-sklad/files/R222-CANDIDATE.md`
6. `mavik-sklad/files/R222-PRE-PAUSE-AUDIT-2026-08-20.md`
7. this journal
8. relevant SEO/deploy/privacy/blog canons.

Do not use R216 as working base. Do not resume localization without explicit author command. R222 is installed/tested but not formally canonical until explicit author approval.
