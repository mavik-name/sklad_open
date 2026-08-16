# MAVIK — CANON / NEW-BRANCH STARTUP AUDIT

Date: 2026-08-16
Status: **AUDIT COMPLETED / STARTUP ROUTING NORMALIZED**
Purpose: make a new ChatGPT branch able to resume work from persistent sources without relying on chat memory.

## 1. MASTER STARTUP CHAIN

Every new branch must begin:

`mavik-sklad/START-HERE.txt`
→ `mavik-sklad/files/CANON-REGISTRY.md`
→ project START-HERE
→ project canon/status/checkpoint
→ actual source artifact
→ work
→ persistent save
→ checkpoint/status update.

The warehouse index `mavik-sklad/index.txt` is synchronized with this route.

## 2. UNIVERSAL CANONS — VERIFIED

### Human writing/editing
Authoritative:
`mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`

Mirror:
`mavik-sklad/text/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`

Both use Git blob:
`6569ae20107677e30e41034aab6d095824a60790`

### Universal technical fiction control
Authoritative:
`mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`

Mirror:
`mavik-sklad/text/technic-files--8f66396249b19de717d81870.txt`

Both use Git blob:
`4a5f8997114db7a8e2c7158076f14ff10693c7c0`

The stale `text/` variant previously tied to `Всесвіт 25` was replaced with the universal canon.

### Persistent checkpoint/storage canon
Authoritative:
`mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`

Mirror:
`mavik-sklad/text/KANON-POSTIINYKH-CHECKPOINTIV.txt`

Both use Git blob:
`0192502e7c31cf02de7f786d46804aabd74ae8a7`

The old R188-English-specific wording was replaced with a universal all-project rule.

## 3. SITE MAVIK.NAME — VERIFIED

Project start:
`mavik-sklad/files/START-HERE-SITE.txt`

Current release authority:
`mavik-sklad/releases/CANON.md`

Current canonical checkpoint:
`mavik-sklad/files/R192-MULTILANG-CANON-CHECKPOINT.md`

Current canonical structural/functional base: **R192**.

Narrow active canons:
- `mavik-sklad/files/kanon-shapky-mobilnoi-chytanky.txt`
- `mavik-sklad/files/kanon-storinky-knyhy.txt`

Historical neutralization completed:
- `R187-CANON.md` now says historical;
- `R187-V1-CHECKPOINT-LATEST.md` now says historical;
- `R188-MULTILANG-CANON-CHECKPOINT.md` now says superseded;
- `R189-CANDIDATE-CHECKPOINT.md` historical;
- `R190-CANDIDATE-CHECKPOINT.md` historical;
- `R191-CANDIDATE-CHECKPOINT.md` historical;
- `R192-CANDIDATE-CHECKPOINT.md` explicitly says promoted/historical;
- old `kanon-obolonky-saitu-r187-plan.txt` explicitly historical.

The original contents remain recoverable through Git history.

## 4. OLD R188 ENGLISH SITE WORKSPACE — ISOLATED AS ARCHIVE

Old `mavik-sklad/builds/R188-EN-*` directories remain only for historical recovery.

Their visible README/CANON/START-HERE/NOTICE entry points were rewritten to say ARCHIVE and point to current R192/English authorities.

Active English site/content work must not start there.

## 5. ENGLISH CONTENT — VERIFIED

Start:
`mavik-sklad/files/EN-TRANSLATION-START-HERE.md`

Current source policy:
`mavik-sklad/files/EN-SOURCE-POLICY.md`

Status:
`mavik-sklad/translations/en/STATUS.md`

Physical workspace:
`mavik-sklad/translations/en/`

Nine complete previously translated English books were physically recovered under `translations/en/books/`.

`Three Novels Nobody Reads` Sections 1–8 are physically preserved under `translations/en/partial/` and are clearly marked partial.

`Evacuation` English Stories 1–7 are physically present under:
`mavik-sklad/translations/en/work/evakuatsiia/`

Exact continuation point:
**Story 8 — Ghost**, then whole-book parity/terminology/profanity/route-continuity pass.

Old `R188-EN-SOURCE-POLICY.md` is now a historical pointer to the R192 policy.

## 6. «СОЦІАЛЬНА» — VERIFIED WITH SOURCE-SAFETY RULE

Start:
`mavik-sklad/files/00-SOCIALNA-START-HERE.txt`

Project notes:
`mavik-sklad/files/socialna-kanonichni-zamitky.txt`

Plan:
`mavik-sklad/files/SOCIALNA-PLAN-AFTER-REVIEWS-2026-08-16.md`

A real DOCX is physically present in GitHub:
`mavik-sklad/files/Соціальна.docx`
Git blob: `0bd9fe41547d460a15305456014f884759614bf4`
Size: 189,231 bytes.

The project checkpoint records a 16-chapter final-polish state and forbids automatic Chapter 17 drafting.

Critical rule: before continuing prose, verify the physical warehouse DOCX matches the 16-chapter checkpoint. If not, stop and recover the newer approved manuscript; never reconstruct missing prose from notes.

## 7. «ВСЕСВІТ 25» — PERSISTENT PROJECT START CREATED

Start/current overlay:
`mavik-sklad/files/START-HERE-VSESVIT-25.md`

It records:
- active trilogy canon;
- Book I `Макар` completed;
- Book II `Арон`, Book III `Деймон` direction;
- anti-utopia is not an evil-AI revolt;
- causal degradation and freedom/pause/love/responsibility axis;
- current approved Book-I overlay including Macar's observer role and 10 adopted children.

Full trilogy canon and Book-I manuscript were verified in File Library, not claimed as GitHub binaries:
- `Всесвіт_25_Канон_трилогії_v1.0.docx`
- `Всесвіт_25_Макар_Робоча.docx`

A new branch must retrieve actual source before textual editing and must not automatically rewrite completed Book I.

## 8. «КОД ЛЕГЕНДИ» — PERSISTENT PROJECT START CREATED

Start:
`mavik-sklad/files/START-HERE-KOD-LEHENDY.md`

It records:
- completed Book I;
- Prologue + 32-part final structure;
- 7 boys + 1 girl, erased Dmytro, ninth bowl, golden carriage and other fixed continuity nodes;
- site status: normal book page, current placement announcements;
- manuscript sent to publisher **for review**, not accepted/published;
- Kyiv/fifth-founder sequel direction is concept-only and open questions remain open.

Approved manuscript was verified in File Library:
`Код Легенди _ОК.docx`

The binary is not claimed as stored in GitHub.

## 9. «ЕВАКУАЦІЯ, АБО ДОРОГОЮ ДО СТАБІКА» — PERSISTENT PROJECT START CREATED

Start:
`mavik-sklad/files/START-HERE-EVAKUATSIIA.md`

It records:
- Ukrainian povist completed/published;
- Ghost + 7 rescued wounded soldiers = 8 total;
- stopped-watch/final reveal time 12:17;
- exact eight-story order;
- cover 1+7 rule;
- English exact continuation point.

Latest edited Ukrainian source was verified in File Library:
`Евакуація_після_редактури.docx`

The binary is not claimed as stored in GitHub.

## 10. GENERATION-SHIP SCI-FI PARABLE — PERSISTENT CONCEPT START CREATED

Start:
`mavik-sklad/files/START-HERE-GENERATION-SHIP.md`

Status is deliberately **CONCEPT ONLY**.

It records only the approved nucleus:
- generation ship across deep space over multiple generations;
- ship as analogue of Earth/created world;
- inherited journal/instruction as analogue of Scripture;
- conflict based on shared-vessel/future-generation responsibility, not simplistic believers-vs-atheists;
- “the ship still flies” versus “the ship will arrive” as a core tension.

Title, names, voyage duration, destination, technology, exact failures, ending and many other details remain explicitly open.

No manuscript is claimed to exist.

## 11. CONFLICTS FOUND AND FIXED

During this audit, the following real risks were found:
1. checkpoint canon still contained R188-English-specific paths;
2. `mavik-sklad/text/` technical canon was a stale Universe-25-specific version;
3. English source policy still gave R188 priority;
4. old R188 English workspace contained active-looking CANON/START-HERE files;
5. Socialna start file referenced a local final-output filename as if it could be persistent;
6. R187/R188/R189/R190/R191/R192 historical/candidate files could be mistaken for current site authority;
7. Universe 25, Code Legend, Evacuation and the generation-ship concept had no unified persistent GitHub project-start routing.

All seven classes were normalized.

## 12. BINARY STORAGE TRUTH

Physically verified in GitHub:
- `mavik-sklad/files/Соціальна.docx`
- English recovered/working text trees under `mavik-sklad/translations/en/`
- historical R187 shell ZIP and other old GitHub artifacts.

Verified in File Library but NOT claimed as GitHub binaries:
- `Всесвіт_25_Канон_трилогії_v1.0.docx`
- `Всесвіт_25_Макар_Робоча.docx`
- `Код Легенди _ОК.docx`
- `Евакуація_після_редактури.docx`

This distinction is intentional and must be preserved in future checkpoints.

## 13. FINAL RULE FOR A NEW BRANCH

A new branch must never begin with “what do I remember?”

It begins with:
`mavik-sklad/START-HERE.txt`.

The master routes to `CANON-REGISTRY.md`, which routes to the project start, which identifies the actual source and exact continuation point.

If a project is not registered, search persistent sources first and create/restore a project start checkpoint before substantial work.

Audit checkpoint itself is informational and does not override project canons.