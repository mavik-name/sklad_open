# Канон збірок MAVIK.NAME

Оновлено: 2026-08-21 Europe/Uzhgorod

## Єдина чинна канонічна база

**R223_TTS — єдина чинна робоча structural/functional база mavik.name.**

R223_TTS прямо затверджено автором 21.08.2026. Реліз побудовано безпосередньо від R222_Statistic.

Усі наступні зміни, виправлення, відновлення та нові релізи починати **тільки від R223_TTS**.

## Rollback reserve

**R222_Statistic зберігається окремо лише як перевірений резерв для аварійного rollback.**

- не використовувати його як робочу базу;
- не вносити в нього нових змін;
- повертатися до нього тільки за прямим наказом автора на rollback;
- усі релізи до R222_Statistic залишаються obsolete/history і не відновлюються як робочі бази.

Library reserve: `/Сайт/reserve/R222_Statistic/`.

## R223_TTS identity

Persistent binaries/control files: ChatGPT Library `/Сайт/`:
- `R223_TTS.zip`
- `R223_TTS.sha256.txt`
- `R223_TTS-CHANGELOG.txt`
- `R223_TTS-CHECKPOINT.txt`
- `R223_TTS-CANON.txt`
- `CANONICAL_RELEASE.txt`

Identity:
- file: `R223_TTS.zip`;
- size: `26847258` bytes;
- SHA-256: `d199f2dbd4d5d48aed71b85866176d141d3f4340b268fbd7c5f03159bfeb95bc`;
- base: `R222_Statistic`.

## Ключова дельта R223_TTS

- TTS використовує тільки українські системні голоси `uk-UA` / `uk-*`;
- іншомовний fallback за відсутності українського голосу заборонено;
- інструкція зі встановлення українського голосу показується тільки коли українського голосу реально немає;
- окремі підказки для iPhone/iPad та Android;
- `reader-listen.js/css` cache-buster `v=224` на всіх 21 читалках;
- мобільна PWA/install-логіка для Android та iPhone/iPad збережена;
- функціонал R222_Statistic, включно з first-party Boss statistics, збережено як базу релізу.

## Поточний пріоритет

- одна українська locale `uk-UA`;
- максимальна швидкодія, crawlability, індексація та українська присутність;
- first-party Boss statistics/SEO monitoring;
- clean minimal install tree;
- localization implementation frozen;
- не робити безпідставних structural SEO змін.

## SEO/entity

Permanent authority: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`.

## Localization freeze

Localization/translation data preserved separately and inactive. Recovery: `freeze/localization-2026-08-19`, Library `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`, `mavik-sklad/translations/en/`.

## Робоче правило

Будь-яка наступна site work/recovery починається **тільки від R223_TTS**. R222_Statistic = rollback reserve, не робоча база.