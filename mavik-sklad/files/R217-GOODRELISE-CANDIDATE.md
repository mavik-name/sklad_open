# MAVIK.NAME — R217_GoodRelise FINAL CANDIDATE

Оновлено: 2026-08-20
Статус: **FINAL TESTED CANDIDATE / НЕ КАНОНІЧНИЙ ДО ПРЯМОГО ЗАТВЕРДЖЕННЯ АВТОРОМ**

## Release authority

Поточна прямо затверджена CORE-база лишається **R215**, доки автор прямо не затвердить R217_GoodRelise.

R216 = **REJECTED / DO NOT INSTALL**.
R217_GoodRelise зібрано заново від R215; із R216 перенесено лише корисні механізми, незалежні від локалізації.

## Новий пріоритет

R217_GoodRelise — **чисто українська одно-локальна збірка**.

Головні KPI:
1. максимальна швидкодія;
2. максимальна crawlability та індексація;
3. максимальна присутність і поширення в українському сегменті;
4. максимально корисна first-party статистика в Boss;
5. мінімальний install tree без legacy/WIP/localization/dev garbage.

Роботу з локалізаціями поставлено на паузу і законсервовано окремо; вона НЕ входить до цього релізу.

## Persistent artifacts

ChatGPT Library `/Сайт/`:
- `R217_GoodRelise.zip`
- `R217_GoodRelise_PART1.zip`
- `R217_GoodRelise_PART2.zip`
- `R217_GoodRelise-AUDIT.txt`
- `R217_GoodRelise-CHECKPOINT.txt`
- `R217_GoodRelise-CHECKSUMS.txt`

## Release identity

- release: **217**
- release_label: **217_GoodRelise**
- base_release: **215**
- managed files: **284**
- raw release tree: **44,225,038 bytes**
- FULL ZIP: **26,239,709 bytes**
- manifest SHA-256: `f05a3f5f9d02ad357b88006480c56d8845ba8bcec8dd24f20baf2563d38d0219`
- multipart set: `r217-f05a3f5f9d02ad35`
- FULL SHA-256: `2234dcb886413cd66e5fb75d2c1c1ffe99f8c3c639a4615ae89e6c72d2a5b22d`
- PART1 SHA-256: `11bd21282ae7fc27760e1824966801df5be1599630f4ddb238bdeed9a1ecab67`
- PART2 SHA-256: `e0115a39790123c94950678f6386abc6c50ff7f51c79576cd2dd9ed4ebcc3059`

## Що реалізовано

### Українська single-locale модель
- `/en/` відсутній;
- `hreflang`, locale/lang implementation, language selector, EN state відсутні;
- PWA/service-worker/offline shell прибрані;
- сторонній Cloudflare analytics JS прибраний;
- UI/Boss/system messages очищені від залишків англійського locale-interface;
- власні назви/технічні терміни та SEO alternateName `Viktor Makarchuk` не вважаються locale-сміттям.

### SEO / indexing
- збережено entity package `MaVik / Mavik / Мавік ↔ Віктор Макарчук ↔ mavik.name`;
- stable IDs: `https://mavik.name/#website`, `https://mavik.name/#person`;
- `/mavik/` та `/about/` збережені;
- `robots.txt`, `sitemap.xml`, IndexNow/Bing verification key збережені;
- explicit OAI-SearchBot / ChatGPT-User access збережений;
- sitemap: **82/82 unique canonical URLs**, 11 image entries;
- public HTML: 107; indexable HTML: 81;
- JSON-LD: **81/81 parse OK**;
- internal refs: **5329/5329 OK**.

### Статистика
First-party analytics без cookies/third-party JS:
- views, engagement 30s/120s, average time, scroll depth;
- reader progress 25/50/75/100, read clicks, EPUB downloads;
- blog interactions, music starts/30s/completion, coffee/support, outbound domains;
- devices, referrers, search engines, UTM;
- Web Vitals: TTFB, FCP, LCP, CLS, INP.

Stats dashboard:
- indexable/noindex, sitemap/robots/IndexNow, last SEO scan/IndexNow;
- file count/weight/deltas, content counts, latest deploy;
- popular pages, largest files, reader/music/blog/device/scroll/UTM/outbound aggregates;
- CSV exports.

### Media / weight
- book cover JPG: **23**; book cover PNG: **0**;
- 4 legacy site cover PNG converted to progressive JPG;
- 4 EPUB embedded `cover.png` converted to `cover.jpg`;
- EPUB with PNG cover: **0**;
- 248 duplicated `full.txt` / `part-XXX.txt` clean-text files removed;
- clean Chrome/read-aloud HTML mirror preserved: immediate HTML, no JS, `lang=uk-UA`, `noindex,follow`, canonical to main reader;
- heavy blog/author images optimized.

### Deploy safety / garbage cleanup
- persistent pre-deploy backup = mutable JSON/database state only;
- affected CORE = short-lived transaction snapshot;
- rollback restores CORE + database state;
- successful deploy removes tx/stage temporary trees;
- uploaded archive is deleted only after successful install;
- obsolete managed files are removed;
- empty legacy directories are pruned deepest-first;
- protected live state is preserved;
- retired localization runtime state is removed only after pre-deploy database backup is already created.

## Final release gates

Static/code:
- PHP **31/31** lint OK;
- JS **14/14** syntax OK;
- XML **2/2** valid;
- JSON-LD **81/81** parse OK;
- internal refs **5329/5329** OK;
- FULL/PART1/PART2 deploy validators PASS;
- install tree garbage scan PASS;
- no `/en/`, no locale/PWA files, no nested ZIP/dev scripts;
- 21/21 EPUB integrity + mimetype-first/stored + XML parse PASS;
- EPUB PNG covers = 0.

Synthetic real deploy through `mavik_deploy_archive()`:

### R215 → R217
- PASS;
- copied 284;
- obsolete managed files removed 349;
- `/en/` and empty legacy dirs removed;
- old PWA/language files removed;
- custom live-state sentinel preserved;
- old `site-core` migrated to version 7 direct Ukrainian label/path model;
- retired languages/locales runtime state removed after backup;
- tx dirs 0; stage dirs 0; pending ZIP garbage 0;
- database-only backup in synthetic state ~105 KB;
- post-deploy static gate PASS.

### R216 → R217
- PASS;
- copied 284;
- obsolete managed files removed 615;
- `/en/` removed;
- `/_site-state/locales` and `languages.json` removed after backup;
- custom live-state sentinel preserved;
- site-core migrated to version 7;
- tx/stage dirs after success 0.

## Localization freeze

Implementation paused, but all translation/localization work is preserved separately:
- GitHub branch: `freeze/localization-2026-08-19`;
- Library: `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`;
- SHA sidecar: `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.sha256`;
- warehouse translation workspace: `mavik-sklad/translations/en/`.

## Next action

Автор встановлює/перевіряє R217_GoodRelise. Лише після прямого підтвердження `R217_GoodRelise канонічна` переписати release authority з R215 на R217_GoodRelise.
