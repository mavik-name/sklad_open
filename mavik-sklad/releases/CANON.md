# Канон збірок MAVIK.NAME

Оновлено: 2026-08-19 Europe/Uzhgorod

## Єдина чинна канонічна база

**R215 — єдина чинна structural/functional CORE-база сайту mavik.name.**

Прямо затверджено автором 2026-08-19.

**R216 — FINAL TESTED CANDIDATE, але НЕ канонічний до прямого затвердження автором.**

**УСЕ ДО R215 — СМІТТЯ.**

Будь-які R1–R214, включно з R213-reload, їхні ZIP/PART, patch, bundle, backup, rollback, recovery, candidate, WIP, checkpoint, release-note, migration-history та інші попередні release artifacts:
- не є робочими або канонічними базами;
- не можуть використовуватися для нової роботи, відновлення, порівняння чи перенесення коду без окремої прямої вимоги автора;
- мають бути відсутні з активних робочих сховищ;
- історичні згадки не мають жодного пріоритету над R215.

Канонічний checkpoint R215:
`mavik-sklad/files/R215-CANON.md`

Перевірений кандидат R216:
`mavik-sklad/files/R216-CANDIDATE.md`

Поточний handoff-журнал:
`mavik-sklad/files/SITE-WORK-JOURNAL.md`

Технічний roadmap:
`mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`

## Канонічні binary R215

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

## R216 final tested candidate

Persistent storage: ChatGPT Library `/Сайт/`.

Candidate binaries:
- `216 Збірка_Сайт_ОК.zip`
- `216 Збірка_Сайт_ОК_PART1.zip`
- `216 Збірка_Сайт_ОК_PART2.zip`
- `R216-AUDIT.txt`
- `R216-CHECKPOINT.txt`
- `R216-CHECKSUMS.txt`

Identifiers:
- Managed files: **895**.
- Manifest SHA-256: `ccbfcef34fa96b48261643de6c1635edf7c1f16f482bebd03763e322775214c5`.
- Multipart set id: `r216-ccbfcef34fa96b48`.
- FULL SHA-256: `a309b5eff63d92d6b9b910a802a4450dd5de1075ec4858c3cb92b39182449760`.
- PART1 SHA-256: `dcf769b5e4f4bf6e586e2a548376dce6d15d523487659c665b29049264c8e602`.
- PART2 SHA-256: `80a534ceadf3a8233532ca42fc15fcc7de1c58891722b7f4930baaed24e9cc62`.

Final candidate gate:
- PHP 37/37 OK;
- JS 18/18 OK;
- XML 2/2 valid;
- JSON-LD 107/107 parse OK;
- shared reader-core 42/42;
- actual FULL deploy over R215 + 10 verified EN patches PASS;
- locale migration UK 22 / EN 10 PASS;
- database-only backup + transaction rollback PASS;
- media pipeline PASS;
- sitemap 109/109 unique canonical URLs after candidate sync.

R216 implements locale-isolated databases/bindings over shared physical content, locale unpublish instead of routine physical deletion, shared locale CORE/readers, EN projections, deploy database-only backup, responsive media pipeline and the permanent MaVik/Mavik/Мавік entity/query strategy.

**This section records a tested candidate only. It does not promote R216 to canonical status. Promotion requires an explicit author decision.**

## Канонічні механізми R215 / continuity requirements

`publication_mode` — джерело істини для R215. `final ↔ beta` автоматично синхронізує EPUB, `/books/free/`, reader robots/canonical, sitemap, metadata, structured data та status-dependent SEO copy.

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
- service worker не кешує private/dynamic/CSRF/download endpoints.

## Спадковий SEO/entity канон від R216

Від R216 і в усіх наступних збірках обов'язково зберігати єдину сутність `MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name` і довгострокову ціль перехоплення exact/ambiguous query `mavik` як власного бренду. Не маскувати сайт під drone/DJI тематику і не застосовувати keyword/doorway spam. Повний authority: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`.

## Робоче правило

До прямого затвердження R216 будь-яка нова structural/functional робота має відштовхуватися від **R215** або продовжувати саме зафіксований `R216-CANDIDATE.md` як candidate work — не реконструювати його з чату.

`/_site-state/` — protected live state; deploy/patch не повинен скидати live focus, порядок, статуси або media bindings.

Root IndexNow/Bing verification key `651fd21ecd39f1571c9d4ab6a9a7574c.txt` — protected SEO identity file.

Будь-який наступний full release стає новою єдиною базою лише після прямого рішення автора; попередні release artifacts після цього зачищаються з активних робочих сховищ.
