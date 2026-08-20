# Канон збірок MAVIK.NAME

Оновлено: 2026-08-20 Europe/Kyiv

## Єдина чинна канонічна база

**R222 — єдина чинна structural/functional CORE-база mavik.name.**

R222 прямо затверджено після встановлення та pre-pause аудиту.

Усі site releases, candidates, checkpoints, ZIP/PART, recovery/backup artifacts і release-specific control files **до R222 = obsolete trash**. Вони не є робочими або recovery-базами й видаляються з активних сховищ.

Canonical checkpoint:
`mavik-sklad/files/R222-CANON.md`

Pre-pause audit:
`mavik-sklad/files/R222-PRE-PAUSE-AUDIT-2026-08-20.md`

Persistent binaries: ChatGPT Library `/Сайт/`:
- `R222.zip`
- `R222_PART1.zip`
- `R222_PART2.zip`
- `R222-AUDIT.txt`
- `R222-CHECKPOINT.txt`
- `R222-CHECKSUMS.txt`

Identifiers:
- release: 222;
- managed files: 261;
- manifest SHA-256: `38a1a21936163bef3f17f517dac6daa1d3b753ce26e9afb326f17ebacf4a27e2`;
- multipart set: `r222-38a1a21936163bef`;
- FULL SHA-256: `89f8d3079027f1b0041e142f004ae547c81f957c35fdbb4c1a7cf38b26b0229d`;
- PART1 SHA-256: `bff28f101563376f9d9ecc371118b0b3a6a51f01d98bbb08942266c8e15573d0`;
- PART2 SHA-256: `14ddadc437251d51400895fdcaea4f34b0517917241f9a69a104b30d3fd9b470`.

Gate: manifest 261/261 exact; garbage 0; EN/localization/PWA refs 0; PHP 31/31; JS 14/14; XML 2/2; JSON-LD 81/81; sitemap 82/82; broken refs 0; EPUB 21/21; covers JPG 23/23; FULL/PART validators PASS; deploy/rollback/crawler/security/cache/compression gates PASS.

## Поточний пріоритет

- одна українська locale `uk-UA`;
- максимальна швидкодія, crawlability, індексація та українська присутність;
- first-party Boss statistics/SEO monitoring;
- clean minimal install tree;
- localization implementation frozen;
- 7-денна стабілізаційна пауза без безпідставних structural SEO змін.

## SEO/entity

Permanent authority: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`.

## Localization freeze

Localization/translation data preserved separately and inactive; this is not pre-R222 release trash. Recovery: `freeze/localization-2026-08-19`, Library `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`, `mavik-sklad/translations/en/`.

## Робоче правило

Будь-яка наступна site work/recovery починається **тільки від R222**. Pre-R222 release artifacts не використовувати й не відновлювати.