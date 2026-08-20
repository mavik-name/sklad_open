# MAVIK.NAME — R222 CLEAN / STABILIZATION CANDIDATE

Оновлено: 2026-08-20
Статус: **FINAL TESTED CANDIDATE / ГОТОВО ДО ВСТАНОВЛЕННЯ / НЕ КАНОНІЧНИЙ ДО ПРЯМОГО ЗАТВЕРДЖЕННЯ АВТОРОМ**

## База

- фактично встановлена live-база перед R222: **R217_GoodRelise**;
- остання прямо затверджена release authority у канонах: **R215**;
- R216: REJECTED / DO NOT INSTALL;
- localization implementation: PAUSED/FROZEN, не входить у R222.

## Мета R222

Фінальний clean/stabilization release перед періодом спокійної індексації: виправити підтверджені SEO/crawler/HTML/deploy/garbage недоробки без запуску нового великого функціонального циклу.

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
- base_release: **217**
- managed files: **261**
- raw managed tree: **44,235,022 bytes**
- manifest SHA-256: `38a1a21936163bef3f17f517dac6daa1d3b753ce26e9afb326f17ebacf4a27e2`
- multipart set: `r222-38a1a21936163bef`
- FULL SHA-256: `89f8d3079027f1b0041e142f004ae547c81f957c35fdbb4c1a7cf38b26b0229d`
- PART1 SHA-256: `bff28f101563376f9d9ecc371118b0b3a6a51f01d98bbb08942266c8e15573d0`
- PART2 SHA-256: `14ddadc437251d51400895fdcaea4f34b0517917241f9a69a104b30d3fd9b470`

## Реалізовано

- indexable readers/pages: рівно один H1; chapter headings нормалізовані до H2 без зміни художнього тексту;
- title/meta description приведені до практичних SEO-меж;
- SSR public navigation збережена й перевірена;
- robots.txt: general + OAI-SearchBot + ChatGPT-User успадковують однакові private endpoint exclusions;
- clean-text X-Robots-Tag централізований у root `.htaccess`; 21 дубльований per-book `.htaccess` прибрано;
- retired/unused helper code прибраний;
- R222 cache-busting і `X-MaVik-Release: R222`;
- single-UA model збережена: EN/lang/PWA/service-worker/hreflang runtime = 0;
- covers: 23 JPG / 0 PNG; EPUB PNG covers = 0;
- Boss static/garbage gate = 0 defects;
- first-party analytics/SEO monitoring збережені та розширені для search/AI referral attribution;
- protected runtime state не входить у install tree.

## Final gate

Static/data:
- install tree ↔ manifest: **261/261 exact**;
- garbage: **0**;
- English UI hits: **0**;
- retired localization/PWA refs: **0**;
- public HTML: **104**;
- indexable HTML: **81**;
- JSON-LD: **81/81**;
- broken internal refs: **0**;
- sitemap: **82/82 unique URLs**;
- PHP: **31/31**;
- JS: **14/14**;
- XML: **2/2**;
- EPUB: **21/21**.

Archives:
- FULL validator PASS;
- PART1 validator PASS;
- PART2 validator PASS.

Actual deploy from installed R217 deployer:
- FULL R217→R222 PASS: copied 261, obsolete removed 23, live state preserved, tx/stage/pending garbage 0;
- multipart PART1→PART2 PASS: waiting after PART1, assembled/deployed after PART2, live state preserved, pending/merge/tx/stage garbage 0;
- post-deploy static/SEO audit: **0 issues**;
- post-deploy PHP 31/31; JS 14/14.

Apache/.htaccess crawler matrix after real deploy:
- Browser 82/82;
- Googlebot 82/82;
- Bingbot 82/82;
- OAI-SearchBot 82/82;
- ChatGPT-User 82/82;
- total **410/410 HTTP 200**.

HTTP/security checks PASS:
- HTTP→HTTPS 301 one hop;
- www→non-www 301 one hop;
- legacy reader audio URL 301;
- retired blog URL 410;
- repository 404;
- release manifest / `_site-admin` / config endpoints 403;
- custom 404 PASS;
- security headers PASS;
- gzip/cache policies PASS;
- clean-text `noindex, follow` header PASS;
- EPUB `noindex, nofollow` header PASS;
- maintenance public = 503 + Retry-After; robots/sitemap remain 200.

Forced failure rollback:
- deliberately corrupted R222 failed after deployment started;
- old R217 release manifest restored byte-for-byte;
- old Boss restored byte-for-byte;
- live state preserved;
- tx garbage = 0.

## Scope note

Internet production DNS/HTTP access to `mavik.name` was unavailable from the build container during this session. Therefore the crawler matrix is a real local Apache test against the post-deploy R222 tree and active `.htaccess`, not a claim about CDN/Internet routing. After author installs R222, perform a separate live-site verification.

## Next action

1. Install R222 FULL or PART1+PART2.
2. Run live HTTP/SEO/crawler verification against `mavik.name`.
3. If live PASS, author may explicitly approve R222 as canonical stabilization base.
4. After approval, avoid unnecessary structural SEO changes for a stabilization period and let search robots recrawl the site.
