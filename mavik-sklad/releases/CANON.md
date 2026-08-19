# Канон збірок MAVIK.NAME

Оновлено: 2026-08-20 Europe/Kyiv

## Єдина чинна канонічна база

**R215 — єдина прямо затверджена structural/functional CORE-база mavik.name.**

R215 прямо затверджено автором 2026-08-19.

**R217_GoodRelise — FINAL TESTED CANDIDATE, але НЕ канонічна до прямого затвердження автором.**

**R216 — REJECTED / DO NOT INSTALL.** Причина й історичний аудит: `mavik-sklad/files/R216-CANDIDATE.md`.

Канонічний checkpoint R215: `mavik-sklad/files/R215-CANON.md`.
R217 candidate checkpoint: `mavik-sklad/files/R217-GOODRELISE-CANDIDATE.md`.
Cross-branch journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`.

## R217_GoodRelise

Модель: **одна українська locale `uk-UA`**.
Localization implementation поставлено на паузу і законсервовано окремо; воно не є частиною R217.

Поточний пріоритет:
- максимальна швидкодія;
- максимальна crawlability/індексація;
- максимальна присутність у українському сегменті;
- розширена first-party статистика в Boss;
- install tree без localization/WIP/backup/dev/legacy garbage.

Persistent artifacts: ChatGPT Library `/Сайт/`:
- `R217_GoodRelise.zip`
- `R217_GoodRelise_PART1.zip`
- `R217_GoodRelise_PART2.zip`
- `R217_GoodRelise-AUDIT.txt`
- `R217_GoodRelise-CHECKPOINT.txt`
- `R217_GoodRelise-CHECKSUMS.txt`

Identifiers:
- release: 217;
- base_release: 215;
- release_label: `217_GoodRelise`;
- managed files: **284**;
- manifest SHA-256: `f05a3f5f9d02ad357b88006480c56d8845ba8bcec8dd24f20baf2563d38d0219`;
- multipart set: `r217-f05a3f5f9d02ad35`;
- FULL SHA-256: `2234dcb886413cd66e5fb75d2c1c1ffe99f8c3c639a4615ae89e6c72d2a5b22d`;
- PART1 SHA-256: `11bd21282ae7fc27760e1824966801df5be1599630f4ddb238bdeed9a1ecab67`;
- PART2 SHA-256: `e0115a39790123c94950678f6386abc6c50ff7f51c79576cd2dd9ed4ebcc3059`.

Final gate:
- PHP 31/31 OK;
- JS 14/14 OK;
- XML 2/2 valid;
- JSON-LD 81/81 parse;
- internal refs 5329/5329;
- sitemap 82 unique canonical URLs + 11 image entries;
- 21/21 EPUB integrity PASS;
- book-cover PNG 0; EPUB cover PNG 0;
- FULL/PART1/PART2 validators PASS;
- synthetic real deploy R215→R217 PASS;
- synthetic real deploy R216→R217 PASS;
- protected live state preserved;
- old EN/PWA/locale files and empty legacy trees removed;
- site-core migrated to direct Ukrainian model;
- tx/stage temporary garbage after success = 0.

## Localization freeze

Implementation frozen until explicit author command to resume.

Recovery:
- GitHub branch `freeze/localization-2026-08-19`;
- Library `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`;
- translation workspace `mavik-sklad/translations/en/`;
- authority `mavik-sklad/files/LOCALIZATION-FREEZE-2026-08-20.md`.

## Постійний SEO/entity contract

Незалежно від localization pause зберігати:
`MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name`.

Exact/ambiguous query `mavik` лишається довгостроковою бренд-ціллю. Не маскувати сайт під DJI/drone тематику і не застосовувати doorway/keyword spam. Authority: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`.

## Deploy/state continuity

- `/_site-state/` — protected live state;
- persistent backup = mutable JSON/database state only;
- affected CORE = short-lived transaction snapshot;
- successful deploy cleans tx/stage archives;
- retired locale runtime state може прибиратися тільки після pre-deploy database backup.

## Робоче правило

До прямого затвердження R217_GoodRelise будь-яка production-authority перевірка посилається на R215. Якщо треба продовжувати/виправляти новий кандидат — продовжувати саме від `R217-GOODRELISE-CANDIDATE.md`/його binary, не від R216.

Будь-який новий full release стає єдиною канонічною базою тільки після прямого рішення автора.
