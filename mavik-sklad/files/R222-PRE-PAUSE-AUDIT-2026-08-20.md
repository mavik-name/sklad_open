# MAVIK.NAME — R222 PRE-PAUSE AUDIT

Дата: 2026-08-20
Статус: **R222 ВСТАНОВЛЕНО АВТОРОМ / PRE-PAUSE AUDIT / ПАУЗА 7 ДНІВ**

## Контекст
Автор підтвердив, що R222 встановлено на mavik.name, і попросив остаточну перевірку перед 7-денною стабілізаційною паузою.

Прямий live HTTP/DNS fetch `mavik.name` з доступного зовнішнього audit-каналу цієї сесії не спрацював (DNS/cache miss), тому цей checkpoint НЕ стверджує, що CDN/production HTTP було незалежно прочитано ззовні. Live-crawler matrix нижче не повторювався через зовнішній Internet у цій сесії; він уже був пройдений на реальному локальному Apache post-deploy дереві R222 перед видачею релізу.

## Незалежний повторний аудит саме FULL R222 artifact
- SHA-256 FULL: `89f8d3079027f1b0041e142f004ae547c81f957c35fdbb4c1a7cf38b26b0229d`;
- ZIP integrity: PASS;
- managed/install files: 261;
- raw tree: 44,235,022 bytes;
- HTML: 107 total (admin templates included); public indexable HTML = 81 by release gate;
- PHP: 31;
- JS: 14;
- external scripts in public HTML: 0;
- `/en/`, hreflang, locale/PWA/service-worker runtime: 0;
- unversioned CSS/JS refs: 0 (`?v=222` present);
- sitemap: 82 loc / 82 unique / EN URLs 0;
- sitemap image entries: 11, missing local image targets: 0;
- internal static asset misses: 0;
- public JSON-LD: 81/81 parses;
- duplicate public indexable title: 0;
- duplicate public indexable description: 0;
- duplicate public indexable canonical: 0;
- indexable public pages use one H1 after R222 normalization;
- title max observed: 65 chars;
- three descriptions are 172–174 chars; this is a snippet-length/truncation warning only, not an indexing/crawl blocker;
- canonical book/reader structure preserved;
- clean-text mirrors remain `noindex,follow`, canonical to main reader;
- EPUB files remain non-index landing assets;
- covers: 23 JPG, book-cover PNG 0; EPUB PNG cover 0;
- `robots.txt` declares sitemap and blocks Boss/private/runtime endpoints while allowing public crawl;
- `llms.txt` exposes canonical origin, sitemap, robots, main routes and preferred book sources;
- Brotli/Deflate, cache policy, ETag, security headers, HSTS and canonical HTTPS/non-www logic are present in root `.htaccess`.

## Entity / semantic audit
Stable entity IDs remain:
- `https://mavik.name/#website`
- `https://mavik.name/#person`

Автор підтвердив повне ім'я: **Віктор Вікторович Макарчук**. Тому `Макарчук Віктор Вікторович` у каталозі та коротка авторська форма `Віктор Макарчук` на Home/About/MaVik — коректні варіанти імені тієї самої особи, а не inconsistency. Вони використовують той самий `https://mavik.name/#person`; `Віктор Макарчук`, `MaVik / Mavik / Мавік` і `Viktor Makarchuk` можуть лишатися alternate/author identity forms. Окремого SEO/entity дефекту тут немає.

## First-party analytics / monitoring
- collector writes only aggregate JSON under protected `/_site-state/analytics`;
- no third-party analytics JS;
- no cookies required by collector;
- Web Vitals/search/referrer/device/content events remain implemented;
- client-side collector key is necessarily visible in public JS, therefore determined non-browser actors could spoof analytics events. This affects statistics integrity only; it does not grant Boss/state access and is NOT an SEO/crawl/security blocker for the 7-day pause.

## External search visibility snapshot
Search queries through the available public search channel on 2026-08-20 did **not yet return direct `site:mavik.name` results**. This is consistent with a newly rebuilt/redeployed site needing recrawl/reindex time and is the main reason not to churn URLs/metadata during the stabilization period.

At the same time external author pages already expose MaVik and/or the official domain text (e.g. UwURead/NovelKlo/Arkush/ANews results), so off-site entity/reference signals exist.

## Index notification
R222 Boss/deploy code contains automatic IndexNow submission after successful deploy and manual full-sitemap IndexNow/Bing controls. The actual live response stored in protected `/_site-state/` could not be independently read from this audit environment; do not fabricate its status.

## Decision
**NO RELEASE-BLOCKING DEFECT FOUND.**

Recommended stabilization action: **7 days without structural URL/canonical/robots/sitemap/entity-layout changes**, unless a genuine production outage, broken route, security problem or critical publishing need appears.

Allowed during pause without breaking stabilization intent:
- ordinary reading/traffic;
- viewing Boss statistics/SEO reports;
- collecting analytics;
- Search Console/Bing observation;
- content publication only if genuinely necessary and done through normal Boss workflow (preferably avoid mass rewrites).

After 7 days compare:
1. Search Console indexed/discovered/crawled counts and errors;
2. queries `mavik`, `MaVik`, `мавік`, `mavik name`, `Віктор Макарчук`, `Viktor Makarchuk`;
3. sitemap processing;
4. crawler/IndexNow status;
5. first-party traffic/referrers/search engines/Web Vitals;
6. any 404/410/5xx/canonical/noindex anomalies.

R222 remains a tested/installed stabilization candidate until explicit author canonization.
