# Канон збірок MAVIK.NAME

Оновлено: 2026-08-19 13:42 Europe/Uzhgorod

## Єдина чинна канонічна база

**R215 — єдина чинна structural/functional CORE-база сайту mavik.name.**

Прямо затверджено автором 2026-08-19.

**УСЕ ДО R215 — СМІТТЯ.**

Будь-які R1–R214, включно з R213-reload, їхні ZIP/PART, patch, bundle, backup, rollback, recovery, candidate, WIP, checkpoint, release-note, migration-history та інші попередні release artifacts:
- не є робочими або канонічними базами;
- не можуть використовуватися для нової роботи, відновлення, порівняння чи перенесення коду без окремої прямої вимоги автора;
- мають бути відсутні з активних робочих сховищ;
- історичні згадки не мають жодного пріоритету над R215.

Канонічний checkpoint:
`mavik-sklad/files/R215-CANON.md`

Поточний handoff-журнал:
`mavik-sklad/files/SITE-WORK-JOURNAL.md`

Технічний roadmap:
`mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`

## Канонічні binary

- `215 Збірка_Сайт_ОК.zip`
- `215 Збірка_Сайт_ОК_PART1.zip`
- `215 Збірка_Сайт_ОК_PART2.zip`

Постійне збереження: ChatGPT Library `/Сайт/`.

Manifest SHA-256:
`39c99c980a186d6630a4a0be4ae370ac20f647333e14f474c7a44ad325d484d5`

Multipart set id:
`r215-39c99c980a186d66`

FULL SHA-256:
`3e2da10b16c6e697a6f4f945c4f3ed781d4ddd751b00e558c587be9e0ac2c8eb`

PART1 SHA-256:
`5424ca74462e06b2cd492dc952151197b5b044a889ddd08ae6202d5700903777`

PART2 SHA-256:
`28999d59144430fa92797487b280f2705afaa792f7ecdb2f450d5b12978eeb3c`

Managed files: **629**.

## Канонічний стан R215

- Public book objects: **22** = 21 final library books + 1 announcement.
- Final library books: **21**.
- Beta: **0**.
- EPUB: **21/21**.
- Main indexable readers: **21**.
- Text mirrors: `noindex,follow`, canonical → main reader.
- Sitemap canonical page URLs: **86 unique**; image entries: **11**.
- Public/static HTML: 181; indexable 84; noindex 97.
- JSON-LD blocks audited: **84**.
- Internal broken public references: **0**.
- PHP lint: **35/35 OK**.
- JS syntax: **17/17 OK**.
- XML: **2/2 valid**.
- Crawler HTTP matrix: **86 URLs × 5 agents = 430/430 HTTP 200** on verified Apache R215 configuration.
- Agents: Browser, Googlebot, Bingbot, OAI-SearchBot, ChatGPT-User.

## Канонічні механізми

`publication_mode` — єдине джерело істини. `final ↔ beta` автоматично синхронізує EPUB, `/books/free/`, reader robots/canonical, sitemap, metadata, structured data та status-dependent SEO copy.

EPUB regeneration: ZipArchive + PharData fallback.

Crawler/search hardening:
- explicit OAI-SearchBot / ChatGPT-User access;
- one-hop HTTPS non-www canonical redirects;
- robots/sitemap залишаються доступними під maintenance;
- Boss crawler self-test для Browser/Googlebot/Bingbot/OAI-SearchBot/ChatGPT-User, redirect chains, 403/429/5xx, headers, timings;
- після успішного deploy — IndexNow; Bing URL Submission додатково, якщо налаштований API key.

Security/performance:
- sensitive config/state endpoints → 403;
- CSP, HSTS, X-Content-Type-Options, Referrer-Policy, Permissions-Policy;
- gzip + cache policy + ETag/Last-Modified revalidation;
- service worker не кешує private/dynamic/CSRF/download endpoints;
- fallback rollback backup без ZipArchive — швидкий TAR через PharData; protected state/user media не дублюються в rollback.

## Обов'язковий наступний технічний пункт

Автоматичний media-pipeline обкладинок із master original, JPEG fallback для непрозорих PNG, WebP/AVIF де безпечно, responsive sizes, `<picture>`, batch rebuild та Boss self-test. Повні вимоги — у `SITE-TECHNICAL-ROADMAP.md`.

## Робоче правило

Будь-яка наступна structural/functional робота стартує **тільки від R215**.

Routine content work — PATCH/OVERLAY поверх R215 без прихованої зміни CORE.

`/_site-state/` — protected live state; deploy/patch не повинен скидати live focus, порядок, статуси або media bindings.

Root IndexNow/Bing verification key `651fd21ecd39f1571c9d4ab6a9a7574c.txt` — protected SEO identity file.

Будь-який наступний full release стає новою єдиною базою лише після прямого рішення автора; попередні release artifacts після цього зачищаються з активних робочих сховищ.