# MAVIK.NAME — R222 CANON

Оновлено: 2026-08-20 Europe/Kyiv
Статус: **ЄДИНА КАНОНІЧНА STRUCTURAL/FUNCTIONAL CORE-БАЗА**

## Рішення

R222 прямо затверджено як канонічний реліз після встановлення та pre-pause аудиту.

**R222 — єдина чинна робоча, recovery та development база mavik.name.**

Усі site release artifacts/checkpoints/candidates до R222 = obsolete trash. Вони не можуть використовуватися як база для наступної роботи й підлягають видаленню з активних сховищ.

## Модель

- одна українська locale `uk-UA`;
- localization implementation frozen і не входить у active release;
- максимальна швидкодія, crawlability, індексація та присутність у українському сегменті;
- first-party Boss statistics/SEO monitoring;
- clean minimal install tree;
- після канонізації — 7-денна стабілізаційна пауза без безпідставних structural URL/canonical/robots/sitemap/entity/layout змін.

## Persistent artifacts

ChatGPT Library `/Сайт/`:
- `R222.zip`
- `R222_PART1.zip`
- `R222_PART2.zip`
- `R222-AUDIT.txt`
- `R222-CHECKPOINT.txt`
- `R222-CHECKSUMS.txt`

## Identity

- release: **222**
- managed files: **261**
- raw managed tree: **44,235,022 bytes**
- manifest SHA-256: `38a1a21936163bef3f17f517dac6daa1d3b753ce26e9afb326f17ebacf4a27e2`
- multipart set: `r222-38a1a21936163bef`
- FULL SHA-256: `89f8d3079027f1b0041e142f004ae547c81f957c35fdbb4c1a7cf38b26b0229d`
- PART1 SHA-256: `bff28f101563376f9d9ecc371118b0b3a6a51f01d98bbb08942266c8e15573d0`
- PART2 SHA-256: `14ddadc437251d51400895fdcaea4f34b0517917241f9a69a104b30d3fd9b470`

## Canonical release gate

- install tree ↔ manifest: **261/261 exact**;
- garbage: **0**;
- EN/localization/PWA refs: **0**;
- third-party scripts: **0**;
- PHP: **31/31**;
- JavaScript: **14/14**;
- XML: **2/2**;
- JSON-LD: **81/81**;
- sitemap: **82/82 unique canonical URLs**;
- broken internal refs: **0**;
- EPUB: **21/21**;
- book covers: **23/23 JPG**, PNG covers 0;
- FULL/PART1/PART2 validators: PASS;
- FULL deploy to R222: PASS;
- multipart deploy: PASS;
- post-deploy static/SEO audit: 0 issues;
- Apache crawler matrix: 82 URLs × Browser/Googlebot/Bingbot/OAI-SearchBot/ChatGPT-User = **410/410 HTTP 200**;
- redirects/security/cache/compression/maintenance suite: PASS;
- forced-failure rollback: PASS.

## R222 technical state

- indexable pages/readers normalized to one H1; chapter headings H2 without prose rewrite;
- SSR navigation available directly in HTML;
- clean-text mirrors `noindex,follow`, canonical to main reader;
- clean-text X-Robots-Tag centralized at root `.htaccess`;
- robots rules block private/runtime/Boss endpoints and permit public crawl for standard and approved crawler groups;
- cache-busting `?v=222`, `X-MaVik-Release: R222`;
- PWA/service-worker/offline/localization runtime absent;
- protected runtime state remains outside install tree;
- deploy uses mutable-state persistent backup + short-lived CORE transaction snapshot + rollback;
- first-party analytics/SEO monitoring remains active without third-party analytics JS.

## SEO / entity hard contract

The permanent MaVik author/brand entity contract remains governed by `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md` and is inherited by R222 unchanged.

## Pre-pause decision

Installed R222 was re-audited on 2026-08-20. No release-blocking defect found. Static artifact, release, crawler and Apache gates remained green.

Stabilization: 7 days without unnecessary structural SEO changes. Ordinary traffic, Boss statistics, Search Console/Bing observation and analytics collection are allowed.

## Localization freeze

Localization/translation implementation remains preserved separately and inactive. It is not old site-release trash.

Recovery authority:
- GitHub branch `freeze/localization-2026-08-19`;
- Library `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`;
- `mavik-sklad/translations/en/`;
- `mavik-sklad/files/LOCALIZATION-FREEZE-2026-08-20.md`.

Do not resume localization without a direct author command.

## New-branch rule

Every new site conversation starts from:
1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. `mavik-sklad/releases/CANON.md`
4. `mavik-sklad/files/START-HERE-SITE.txt`
5. **this `R222-CANON.md`**
6. `mavik-sklad/files/R222-PRE-PAUSE-AUDIT-2026-08-20.md`
7. `mavik-sklad/files/SITE-WORK-JOURNAL.md`

Never reconstruct the active site from pre-R222 artifacts or chat memory.