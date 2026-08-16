# MAVIK — CANON REGISTRY / РЕЄСТР АКТУАЛЬНИХ КАНОНІВ

Updated: 2026-08-16
Status: **AUTHORITATIVE INDEX**

Цей файл не замінює самі канони. Він визначає, ЯКІ саме файли зараз є авторитетними, у якому порядку їх читати і які старі файли не можна випадково приймати за чинні.

## 0. MASTER ROUTER

Перший файл для будь-якої нової гілки:
`mavik-sklad/START-HERE.txt`

Мінімальна схема старту:
MASTER START → CANON REGISTRY → PROJECT START → PROJECT CANON/STATUS → ACTUAL SOURCE ARTIFACT → WORK → SAVE → CHECKPOINT.

## 1. UNIVERSAL / УСІ ПРОЄКТИ

### Людське письмо й редактура — ACTIVE
`mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`

Mirror:
`mavik-sklad/text/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`

Byte-identical Git blob:
`6569ae20107677e30e41034aab6d095824a60790`

### Універсальний технічний канон художнього тексту — ACTIVE
`mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`

Mirror:
`mavik-sklad/text/technic-files--8f66396249b19de717d81870.txt`

Byte-identical Git blob:
`4a5f8997114db7a8e2c7158076f14ff10693c7c0`

Стару версію, прив'язану лише до «Всесвіту 25», не використовувати як загальний технічний канон.

### Постійне збереження/checkpoints — ACTIVE
`mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`

Mirror:
`mavik-sklad/text/KANON-POSTIINYKH-CHECKPOINTIV.txt`

Це універсальний checkpoint/storage canon для всіх проєктів.

## 2. SITE MAVIK.NAME — ACTIVE

Project start:
`mavik-sklad/files/START-HERE-SITE.txt`

Release authority:
`mavik-sklad/releases/CANON.md`

Current canonical checkpoint:
`mavik-sklad/files/R192-MULTILANG-CANON-CHECKPOINT.md`

Current structural/functional base: **R192**.

Narrow active canons:
- mobile reader header: `mavik-sklad/files/kanon-shapky-mobilnoi-chytanky.txt`
- book page: `mavik-sklad/files/kanon-storinky-knyhy.txt`

Historical, NOT active site authority:
- `mavik-sklad/files/kanon-obolonky-saitu-r187-plan.txt`
- R187/R188 release canons/passports/checkpoints
- R189/R190/R191 candidate checkpoints
- old R188 English site/workspace/staging plans
- old `site-zminy-*` notes

## 3. ENGLISH CONTENT MAVIK.NAME — ACTIVE

Start:
`mavik-sklad/files/EN-TRANSLATION-START-HERE.md`

Source policy:
`mavik-sklad/files/EN-SOURCE-POLICY.md`

Current exact status:
`mavik-sklad/translations/en/STATUS.md`

Physical workspace:
`mavik-sklad/translations/en/`

`mavik-sklad/files/R188-EN-SOURCE-POLICY.md` is a historical pointer only.
Old R188 English site architecture is never current authority; only already translated content may be recovered from it.

Current exact active translation point:
- `Евакуація, або Дорогою до стабіка`
- English Stories 1–7 physically saved
- next: Story 8 `Ghost`
- then whole-book parity/terminology/continuity pass

## 4. «СОЦІАЛЬНА» — ACTIVE

Project start:
`mavik-sklad/files/00-SOCIALNA-START-HERE.txt`

Project canon notes:
`mavik-sklad/files/socialna-kanonichni-zamitky.txt`

Plan after review work:
`mavik-sklad/files/SOCIALNA-PLAN-AFTER-REVIEWS-2026-08-16.md`

Persistent manuscript physically present in GitHub:
`mavik-sklad/files/Соціальна.docx`

Current structural checkpoint: 16 chapters after compression/final polish.
Do **not** automatically write Chapter 17. Verify the actual warehouse DOCX against the checkpoint first; if it does not match, stop and recover the newer approved manuscript rather than reconstructing prose from notes.

## 5. «ВСЕСВІТ 25» — ACTIVE TRILOGY CANON

Project start/current persistent overlay:
`mavik-sklad/files/START-HERE-VSESVIT-25.md`

Status:
- trilogy canon active;
- Book I `Макар` treated as completed;
- Book II `Арон` and Book III `Деймон` retain the approved trilogy direction.

Primary full trilogy canon and Book-I manuscript are in the user's File Library, not claimed as GitHub binaries:
- `Всесвіт_25_Канон_трилогії_v1.0.docx`
- `Всесвіт_25_Макар_Робоча.docx`

Before textual work, retrieve/verify the actual source file. Do not rewrite completed Book I automatically.

## 6. «КОД ЛЕГЕНДИ» — ACTIVE COMPLETED-BOOK CANON

Project start:
`mavik-sklad/files/START-HERE-KOD-LEHENDY.md`

Status:
- Book I completed;
- canonical site page `/books/kod-lehendy/`;
- site placement `announcements`;
- manuscript sent to a publisher **for review**;
- never imply acceptance/publication until the user changes the status.

Approved manuscript is in File Library:
`Код Легенди _ОК.docx`

Possible Kyiv/fifth-founder Book-II direction is **concept-only**, with identity/mechanism/final answer intentionally open.

## 7. «ЕВАКУАЦІЯ, АБО ДОРОГОЮ ДО СТАБІКА» — ACTIVE COMPLETED UA / EN IN PROGRESS

Project start:
`mavik-sklad/files/START-HERE-EVAKUATSIIA.md`

Status:
- Ukrainian povist completed and present on mavik.name;
- hard structure: Ghost + 7 rescued soldiers = 8 total;
- watch/reveal time 12:17;
- eight stories: Pixel, Beard, Doc, Малий, Касир, Монгол, Філософ, Ghost;
- English translation active, exact next point = Story 8 Ghost.

Latest verified edited Ukrainian source is in File Library:
`Евакуація_після_редактури.docx`

Do not add a ninth story or alter 1+7/12:17 logic without explicit author decision.

## 8. НФ РОМАН-ПРИТЧА ПРО ПОКОЛІННЄВИЙ КОРАБЕЛЬ — CONCEPT ONLY

Project start:
`mavik-sklad/files/START-HERE-GENERATION-SHIP.md`

Status:
- approved conceptual nucleus only;
- no verified manuscript/title/character bible yet;
- generation ship crossing deep space over generations;
- ship as analogue of Earth/created world;
- inherited journal/instruction as analogue of Scripture;
- conflict is NOT simplistic believers-vs-atheists but responsibility for a shared vessel/future generations versus present-focused neglect;
- many details deliberately remain open.

A new branch must not turn open questions into canon without author approval.

## 9. OTHER / UNLISTED CREATIVE PROJECTS

For any named project not listed above:
1. search the warehouse/File Library for actual files;
2. do not reconstruct canon only from chat memory;
3. if no persistent project START-HERE exists, create/restore one from verified source material before substantial new work.

## 10. CONFLICT RULE

If two files conflict:
1. explicit latest user-approved project canon wins;
2. master START-HERE + this registry identify the active authority;
3. project START-HERE wins over historical checkpoints;
4. actual latest approved manuscript/artifact wins over an older working copy;
5. `mavik-sklad/files/` is authoritative over stale `mavik-sklad/text/` mirrors unless explicitly stated otherwise;
6. historical documents never override a newer approved canon merely because their filename contains CANON/KANON.

## 11. NEW BRANCH MINIMUM CHECK

Before substantive work:
`mavik-sklad/START-HERE.txt` → `CANON-REGISTRY.md` → project START-HERE → project canon/status → actual source artifact.

After substantive work:
actual artifact → persistent save → checkpoint/status update → user report.
