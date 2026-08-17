# MAVIK.NAME — ENGLISH TRANSLATION CONTINUATION CANON

Updated: 2026-08-17
Status: **AUTHORITATIVE CONTINUATION CANON**
Canonical site/core base: **R193**

This file is the single continuity authority for English-content translation work. A new ChatGPT branch must read it before continuing or reconstructing translation work.

## HARD RULE

**Site release numbers and translation-content preservation are separate concerns.**

- R1–R192 are obsolete as site structural/functional bases.
- R193 is the only current canonical site/core base.
- Translation text is CONTENT. A translation file must never be deleted, ignored, or retranslated merely because its filename/path contains an old release number such as `r188`.
- Before declaring any translation lost, search all persistent recovery layers listed below.

## REQUIRED READ ORDER IN ANY NEW BRANCH

1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. `mavik-sklad/files/START-HERE-SITE.txt`
4. `mavik-sklad/files/EN-TRANSLATION-START-HERE.md`
5. `mavik-sklad/files/EN-SOURCE-POLICY.md`
6. **this file**
7. `mavik-sklad/translations/en/STATUS.md`
8. active-book STATUS/checkpoint, if one exists
9. actual saved translation files and current authoritative Ukrainian source

Do not continue from chat memory alone when these files are available.

## CURRENT PHYSICAL ENGLISH CONTENT

### A. Nine complete recovered English books

Physically stored under `mavik-sklad/translations/en/books/`:

1. `mamo-zhyty` — *Mom, I Want to Live!*
2. `bezimenni` — *The Nameless*
3. `liudyna-bez-akaunta` — *The Man Without an Account*
4. `vidmova-avansom` — *Rejection in Advance*
5. `transfer` — *Transfer*
6. `pishchynka-solya` — *Solya, the Grain of Sand Who Dreamed of a Skyscraper*
7. `paterny-samorefleksii` — *Patterns of Self-Reflection*
8. `ty-i-ia` — *You and I*
9. `yevanheliie-vid-makariia` — *The Gospel According to Macarius*

These are physically recovered translations, not status claims. Do not translate them again unless a parity check against the current Ukrainian source proves that source text materially changed.

### B. Evacuation — translation text complete

Ukrainian: `Евакуація, або Дорогою до стабіка`
Working English title: *Evacuation, or On the Road to the Stabilization Point*

Physical authoritative set:
`mavik-sklad/translations/en/work/evakuatsiia/`

Eight saved stories:
- `story-01-pixel.txt`
- `story-02-beard.txt`
- `story-03-doc.txt`
- `story-04-shorty.txt`
- `story-05-cashier.txt`
- `story-06-mongol.txt`
- `story-07-philosopher.txt`
- `story-08-ghost.txt`

Completion checkpoint:
`mavik-sklad/translations/en/EVAKUATSIIA-COMPLETE-CHECKPOINT-2026-08-16.md`

Text translation is complete. Packaging into the completed `books/` publication tree is a separate future operation and must not be claimed complete until physically performed.

### C. Three Novels Nobody Reads — partial

Sections 1–8 are physically preserved under:
`mavik-sklad/translations/en/partial/try-romany-yaki-nikhto-ne-chytaie-sections-1-8/`

Do not redo Sections 1–8. Continue from the first genuinely untranslated section after source-parity verification.

### D. Social / Соціальна — partial archive-only content

The Ukrainian source is unfinished, so this English work must not be presented as a complete/public English edition. The translated content itself is protected and must not be deleted.

Physical English batches:
- `mavik-sklad/files/r188-social-en-ch08-10.md`
- `mavik-sklad/files/r188-social-en-ch11-13.md`
- `mavik-sklad/files/r188-social-en-ch14-16.md`

The `r188` prefix is historical only. These are content files, not obsolete site releases.

## ACTIVE WORK — THE SCULPTOR

Ukrainian: `Скульптор`
English working title: *The Sculptor*

Working directory:
`mavik-sklad/translations/en/work/skulptor/`

Working source:
`Скульптор.docx` from File Library, unless a newer explicitly approved source is found.

Detailed status:
`mavik-sklad/translations/en/work/skulptor/STATUS.md`

Physically saved progress:

### Chapter 1 — COMPLETE
- `chapter-01-part-01.txt`
- `chapter-01-part-02.txt`
- `chapter-01-part-03.txt`
- `chapter-01-part-04.txt`
- `chapter-01-part-05.txt`

The final Chapter-1 line `And the doors open on their own.` is source-parity-correct and must remain.

### Chapter 2 — ACTIVE
- `chapter-02-part-01.txt`
- `chapter-02-part-02.txt`
- `chapter-02-part-03.txt`
- `chapter-02-part-04.txt`
- `chapter-02-part-05.txt`

**NEXT EXACT SOURCE POINT:** continue immediately after:
`— Але будете.`

The next Ukrainian paragraph has not yet been retrieved into the active source window. Retrieve the next contiguous passage from `Скульптор.docx` first. Do not infer, bridge, rewrite, restart, or repeat already saved parts.

## AFTER THE SCULPTOR — REMAINING QUEUE

- `UNIVERSE`
- `Адвокат Диявола` — *The Devil’s Advocate*
- `Пацієнт` — *The Patient*
- `Петля` — *The Loop*
- `Той, що несе світло` — *The Light-Bringer*
- `Олена` — *Olena*
- `Листи полковнику` — *Letters to the Colonel*
- `Три романи, які ніхто не читає` — remaining sections after Section 8
- `Як Вітько з москалями воював` — *How Vitko Fought the Russians*

## RECOVERY LAYERS — SEARCH ALL BEFORE DECLARING LOSS

1. Current `main` tree under `mavik-sklad/translations/en/` and protected content files under `mavik-sklad/files/`.
2. Dedicated safety branch: `backup/english-translations-2026-08-17`.
3. Git commit history and immutable tree/blob SHAs, including the recovery map in `mavik-sklad/translations/en/RECOVERY-MAP.md`.
4. Historical translation branches/workspaces as read-only recovery sources only, never as current site architecture.
5. File Library for authoritative/current manuscript binaries such as `Скульптор.docx`.

Never conclude that translation work is lost after checking only one directory.

## PERSISTENCE RULE FOR EVERY FUTURE TRANSLATION BLOCK

After every meaningful block of translation:

1. Save the actual translated text file(s) physically to the warehouse.
2. Read back/verify the saved files.
3. Update `mavik-sklad/translations/en/STATUS.md`.
4. Update the active-book STATUS/checkpoint.
5. If the global continuation point changed materially, update this file.
6. Preserve the exact next source line/paragraph marker.
7. Never leave irreplaceable translation text only in a chat session or temporary runtime.

## CONFLICT RULE

- Latest explicit user-approved canon wins.
- R193 governs site/core structure until a newer release is explicitly approved.
- This file governs English-translation continuity unless superseded by a later explicit user-approved translation canon.
- Actual saved translation files and the latest authoritative Ukrainian manuscript govern prose content.
- Historical release documents may help recover files but cannot override current site or translation authority.
