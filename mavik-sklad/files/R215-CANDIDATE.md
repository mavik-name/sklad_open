# MAVIK.NAME — R215 CANDIDATE CHECKPOINT

Дата: 2026-08-19
Статус: **VALIDATED CANDIDATE, НЕ КАНОН ДО ПРЯМОГО ЗАТВЕРДЖЕННЯ АВТОРОМ**

Чинний канон до окремого прямого рішення автора: **R214**.

## Артефакти

- `215 Збірка_Сайт_ОК.zip`
  - SHA-256: `3e2da10b16c6e697a6f4f945c4f3ed781d4ddd751b00e558c587be9e0ac2c8eb`
- `215 Збірка_Сайт_ОК_PART1.zip`
  - SHA-256: `5424ca74462e06b2cd492dc952151197b5b044a889ddd08ae6202d5700903777`
- `215 Збірка_Сайт_ОК_PART2.zip`
  - SHA-256: `28999d59144430fa92797487b280f2705afaa792f7ecdb2f450d5b12978eeb3c`

Manifest SHA-256: `39c99c980a186d6630a4a0be4ae370ac20f647333e14f474c7a44ad325d484d5`
Multipart set id: `r215-39c99c980a186d66`
Managed files: **629**.

Постійне збереження кандидата: ChatGPT Library `/Сайт/`.

## Ключові покращення R215

1. Explicit `OAI-SearchBot` і `ChatGPT-User` allow policy в `robots.txt`; private/admin/state/API paths закриті.
2. One-hop HTTP→HTTPS і www→non-www; legacy/query/preview redirects ведуть одразу на абсолютні HTTPS canonical URL.
3. Boss full crawler audit: Browser, Googlebot, Bingbot, OAI-SearchBot, ChatGPT-User; 403/429/5xx, redirect chain, timings, robots, sitemap, X-Robots і security/cache headers.
4. Після успішного deploy sitemap автоматично надсилається через IndexNow; якщо є Bing Webmaster API key — додатково напряму в Bing. Збій зовнішнього submission не скасовує успішний deploy.
5. Security headers: CSP, HSTS, X-Content-Type-Options, Referrer-Policy, Permissions-Policy; sensitive config/backup artifacts закриті.
6. `/reactions/config.php` закритий 403; `/en/contact/` виправлений з 403 на 200.
7. Service Worker не кешує contact/CSRF, authenticated/private paths, API та EPUB downloads; cache namespace R215.
8. Static delivery: gzip/Brotli where available, immutable cache for versioned CSS/JS, safe cache windows for images/machine-readable files, ETag/Last-Modified.
9. Reader SEO: title/description/canonical, OG/Twitter, valid JSON-LD, final main readers indexable; `/read/text/` лишається noindex canonical mirror.
10. UTF-8-safe reader description fallback without mbstring.
11. `publication_mode` лишається single source of truth; `final ↔ beta` синхронізує EPUB, `/books/free/`, reader robots/canonical, sitemap і metadata.
12. EPUB regeneration: `ZipArchive` або `PharData` fallback.
13. Deployment backup fallback оптимізований: при відсутності ZipArchive використовується fast uncompressed TAR через `PharData::buildFromIterator`; protected live-state/user-media не архівуються, бо deploy їх не перезаписує.
14. Intrinsic image dimensions/decoding/lazy-vs-eager priority зменшують layout shift без агресивного перекодування медіа.
15. Sitemap очищений від ignored priority/changefreq; canonical set — 86 page URLs; image entries — 11.
16. R215 payload не містить `_site-state`, старих release-note або активних згадок R210–R214.

## Контроль

- PHP lint: **35/35 OK**.
- JS syntax: **17/17 OK**.
- Static audit: **0 issues / 0 warnings**.
- XML: **2/2 valid**.
- Public/static HTML: **181**; indexable **84**; noindex **97**.
- JSON-LD blocks audited: **84**.
- Sitemap: **86/86 unique page URLs**, image entries **11**.
- Books: **22 public objects = 21 final library + 1 announcement**.
- EPUB: **21/21 final books**.
- Main indexable readers: **21**.
- HTTP crawler matrix on local Apache R215 config: **430/430 HTTP 200** (86 sitemap URLs × Browser/Googlebot/Bingbot/OAI-SearchBot/ChatGPT-User).
- Sensitive config/state endpoints: **403**.
- Full R214→R215 deploy simulation: OK; protected state preserved; obsolete files removed; rollback cleaned after success.
- Multipart R214→R215 simulation: OK; first part waits, second assembles/deploys; protected state preserved; pending parts cleaned.
- `final → beta → final` status cascade: OK, including physical EPUB removal/regeneration.

## Обмеження зовнішньої перевірки

Build-container / зовнішній fetch-канал у цій сесії не дає стабільного DNS/fetch до `mavik.name`. Це не є доказом live-site помилки. Після встановлення R215 через Boss потрібно повторити live HTTP/search audit.

## Канонізація

Після прямого підтвердження автора `R215 канонічна`:
- перевести `mavik-sklad/releases/CANON.md`, `CANON-REGISTRY.md`, `START-HERE-SITE.txt` на R215;
- створити/перейменувати canonical checkpoint R215;
- видалити R214 та все старіше з активних release-сховищ/контрольних записів відповідно до жорсткого cleanup-правила автора.
