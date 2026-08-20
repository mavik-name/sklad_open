# Канон збірок MAVIK.NAME

Оновлено: 2026-08-20 Europe/Kyiv

## Release authority

**R215 — остання прямо затверджена structural/functional CORE-база mavik.name.**

R217_GoodRelise фактично встановлена на сайті й використана як база для R222.

**R222 — FINAL TESTED CLEAN/STABILIZATION CANDIDATE, але НЕ канонічна до прямого затвердження автором після live-перевірки.**

R216 — REJECTED / DO NOT INSTALL.

Checkpoints:
- R215: `mavik-sklad/files/R215-CANON.md`
- R217 installed candidate history: `mavik-sklad/files/R217-GOODRELISE-CANDIDATE.md`
- R222 current candidate: `mavik-sklad/files/R222-CANDIDATE.md`
- journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`

## R222

Модель: одна українська locale `uk-UA`; localization implementation frozen and excluded.

Persistent artifacts: ChatGPT Library `/Сайт/`:
- `R222.zip`
- `R222_PART1.zip`
- `R222_PART2.zip`
- `R222-AUDIT.txt`
- `R222-CHECKPOINT.txt`
- `R222-CHECKSUMS.txt`

Identity:
- release 222;
- base_release 217;
- managed files 261;
- raw managed tree 44,235,022 bytes;
- manifest SHA-256 `38a1a21936163bef3f17f517dac6daa1d3b753ce26e9afb326f17ebacf4a27e2`;
- multipart set `r222-38a1a21936163bef`;
- FULL SHA-256 `89f8d3079027f1b0041e142f004ae547c81f957c35fdbb4c1a7cf38b26b0229d`;
- PART1 SHA-256 `bff28f101563376f9d9ecc371118b0b3a6a51f01d98bbb08942266c8e15573d0`;
- PART2 SHA-256 `14ddadc437251d51400895fdcaea4f34b0517917241f9a69a104b30d3fd9b470`.

Final candidate gate:
- install tree ↔ manifest 261/261 exact;
- garbage 0; EN/localization/PWA refs 0; third-party scripts 0;
- PHP 31/31; JS 14/14; XML 2/2; JSON-LD 81/81;
- sitemap 82/82 unique;
- internal broken refs 0;
- EPUB 21/21;
- 23/23 covers JPG;
- FULL/PART1/PART2 validators PASS;
- actual FULL deploy R217→R222 PASS;
- actual multipart deploy R217→R222 PASS;
- post-deploy audit 0 issues;
- Apache crawler matrix 82 URLs × Browser/Googlebot/Bingbot/OAI-SearchBot/ChatGPT-User = 410/410 HTTP 200;
- redirect/security/cache/compression/maintenance suite PASS;
- forced failure rollback PASS.

## Stabilization rule after R222

Після встановлення R222 виконати окремий live HTTP/SEO check `mavik.name`. Якщо live PASS і автор прямо затверджує R222, зробити R222 єдиною канонічною базою та не вносити безпідставних structural/SEO змін протягом стабілізаційного періоду — дати пошуковим роботам переобійти стабільний сайт.

## Permanent SEO/entity contract

`MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name`.
Exact/ambiguous `mavik` лишається довгостроковою бренд-ціллю. Не маскувати сайт під DJI/drone тематику і не застосовувати doorway/keyword spam.

## Localization freeze

Localization implementation не входить у R222 і лишається frozen до прямого наказу автора.
Recovery: `freeze/localization-2026-08-19`, Library `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`, `mavik-sklad/translations/en/`.

## Deploy/state continuity

- `/_site-state/` — protected runtime state;
- persistent backup = mutable JSON/database state only;
- affected CORE = short-lived transaction snapshot;
- successful deploy cleans tx/stage/pending garbage;
- rollback tested by forced post-copy failure.

R222 becomes release authority only after explicit author approval.
