# MAVIK — CANON REGISTRY / РЕЄСТР АКТУАЛЬНИХ КАНОНІВ

Updated: 2026-08-16
Status: **AUTHORITATIVE INDEX**

Цей файл не замінює самі канони. Він визначає, ЯКІ саме файли зараз є авторитетними і які старі файли не можна випадково приймати за чинні.

## 0. MASTER ROUTER

Перший файл для будь-якої нової гілки:
`mavik-sklad/START-HERE.txt`

## 1. UNIVERSAL / УСІ ПРОЄКТИ

### Людське письмо й редактура — ACTIVE
`mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`

Mirror:
`mavik-sklad/text/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`

Обидві копії синхронізовані byte-identical Git blob SHA:
`6569ae20107677e30e41034aab6d095824a60790`

### Універсальний технічний канон художнього тексту — ACTIVE
`mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`

Mirror:
`mavik-sklad/text/technic-files--8f66396249b19de717d81870.txt`

Обидві копії синхронізовані byte-identical Git blob SHA:
`4a5f8997114db7a8e2c7158076f14ff10693c7c0`

Стару версію, прив'язану лише до «Всесвіту 25», більше не використовувати як загальний технічний канон.

### Постійне збереження/checkpoints — ACTIVE
`mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`

Mirror:
`mavik-sklad/text/KANON-POSTIINYKH-CHECKPOINTIV.txt`

Обидві копії синхронізовані; правило тепер універсальне для всіх проєктів, а не R188-English-specific.

## 2. SITE MAVIK.NAME — ACTIVE

Project start:
`mavik-sklad/files/START-HERE-SITE.txt`

Release authority:
`mavik-sklad/releases/CANON.md`

Current canonical release checkpoint:
`mavik-sklad/files/R192-MULTILANG-CANON-CHECKPOINT.md`

Current structural/functional base: **R192**.

Narrow active canons:
- mobile reader header: `mavik-sklad/files/kanon-shapky-mobilnoi-chytanky.txt`
- book page: `mavik-sklad/files/kanon-storinky-knyhy.txt`

Historical, NOT active site authority:
- `mavik-sklad/files/kanon-obolonky-saitu-r187-plan.txt`
- R187/R188 release canons/passports when a newer R192 canon exists
- R189/R190/R191 candidate checkpoints
- old R188 English site/workspace/staging plans
- old `site-zminy-*` and `site-r188-english-development.md` notes

## 3. ENGLISH CONTENT — ACTIVE

Start:
`mavik-sklad/files/EN-TRANSLATION-START-HERE.md`

Current source policy:
`mavik-sklad/files/EN-SOURCE-POLICY.md`

Current status/exact continuation point:
`mavik-sklad/translations/en/STATUS.md`

Physical English workspace:
`mavik-sklad/translations/en/`

`mavik-sklad/files/R188-EN-SOURCE-POLICY.md` is HISTORICAL pointer only.
Old R188 English site architecture is never current authority; only already translated content may be recovered from it.

Current exact active translation point at this audit:
- `Евакуація, або Дорогою до стабіка`
- English stories 1–7 physically saved
- next: Story 8 `Ghost`
- then whole-book parity/terminology/continuity pass

## 4. «СОЦІАЛЬНА» — ACTIVE

Project start:
`mavik-sklad/files/00-SOCIALNA-START-HERE.txt`

Project canon notes:
`mavik-sklad/files/socialna-kanonichni-zamitky.txt`

Plan after review work:
`mavik-sklad/files/SOCIALNA-PLAN-AFTER-REVIEWS-2026-08-16.md`

Persistent manuscript currently present on warehouse:
`mavik-sklad/files/Соціальна.docx`

Mandatory universal canons additionally apply:
- human-writing canon
- universal technical canon

Current structural checkpoint says the active written portion has 16 chapters after structural compression/final polish. Do **not** automatically write Chapter 17; first follow the author decision/plan required by the project START-HERE.

Before continuing prose, verify the warehouse DOCX matches the 16-chapter checkpoint. If it does not, STOP and recover the newer approved manuscript; never reconstruct missing prose from notes.

## 5. OTHER CREATIVE PROJECTS

During the repository-wide audit on 2026-08-16, no separate explicit START-HERE/CANON files for other named book projects (for example «Всесвіт 25» or «Код легенди») were found in the current `main` tree as project-specific authorities.

Therefore a new branch working on another creative project must NOT invent its canon from old chat memory. It must:
1. search the warehouse for that project's actual files;
2. use any verified current manuscript/canon found;
3. if no persistent project START-HERE exists, create one from verified source material before doing substantial new work.

This registry only certifies files physically found/audited on the current warehouse; it does not claim missing project canons do not exist elsewhere.

## 6. CONFLICT RULE

If two files conflict:
1. explicit latest user-approved project canon wins;
2. master START-HERE + this registry identify the active authority;
3. project START-HERE wins over historical checkpoints;
4. `mavik-sklad/files/` is authoritative over stale `mavik-sklad/text/` mirrors unless explicitly stated otherwise;
5. historical documents never override a newer approved canon merely because their filename contains CANON/KANON.

## 7. NEW BRANCH MINIMUM CHECK

Before substantive work:
`mavik-sklad/START-HERE.txt` → `CANON-REGISTRY.md` → project START-HERE → project canon → current STATUS/checkpoint → actual source artifact.

After substantive work:
actual artifact → checkpoint/status update → user report.
