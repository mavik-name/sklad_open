# MAVIK.NAME — LOCALIZATION / TRANSLATION FREEZE

Дата: 2026-08-20
Статус: **IMPLEMENTATION PAUSED / DATA PRESERVED / DO NOT MERGE INTO CURRENT UA RELEASE**

За прямим рішенням автора всю роботу з впровадження локалізацій сайту зупинено на невизначений час.

## Що це означає

- current production direction = одна українська локаль `uk-UA`;
- localization/EN implementation не переноситься в R217_GoodRelise;
- `/en/`, lang/locale runtime, locale state, hreflang і locale admin workflow не є частиною активного українського CORE;
- попередній R216 відхилений і не є джерелом release authority;
- перекладені тексти й напрацьована localization architecture НЕ видаляються з архіву/складу.

## Recovery points

1. GitHub immutable-style working freeze branch:
   `freeze/localization-2026-08-19`
2. Persistent archive in ChatGPT Library:
   `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`
3. Checksum sidecar:
   `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.sha256`
4. Translation workspace:
   `mavik-sklad/translations/en/`
5. Translation start/policy/status documents:
   - `mavik-sklad/files/EN-TRANSLATION-START-HERE.md`
   - `mavik-sklad/files/EN-SOURCE-POLICY.md`
   - `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
   - `mavik-sklad/translations/en/STATUS.md`
   - `mavik-sklad/translations/en/PUBLICATION-READY-R215.md`

## Preserved translation state

- 10 previously verified complete English editions remain preserved;
- incomplete/working material including The Sculptor remains preserved under `mavik-sklad/translations/en/work/`;
- Social / Соціальна English STOP remains historical project canon until the author explicitly changes it;
- do not retranslate already completed English works from scratch when localization work is resumed.

## Future resume rule

If author later resumes localization:
1. start from this freeze document;
2. inspect the freeze branch + archive + translation status before writing code;
3. reuse the highest-priority unified-design localization canon;
4. do not resurrect the rejected separate EN shell;
5. localization must follow one site / one CORE / one design / one logical content model / one admin, with lang files and per-locale visibility.

Until explicit author command to resume, localization is **FROZEN and OUT OF ACTIVE SITE RELEASES**.
