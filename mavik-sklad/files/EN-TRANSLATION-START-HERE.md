# MAVIK.NAME — ENGLISH CONTENT TRANSLATION — START HERE

Updated: 2026-08-16
Status: **ACTIVE TRANSLATION WORK ONLY**
Canonical site/core source: **R192**

This direction concerns English content inside the single multilingual core. It is NOT a separate English site.

## READ FIRST IN A NEW BRANCH

1. `mavik-sklad/START-HERE.txt`
2. this file
3. `mavik-sklad/files/EN-SOURCE-POLICY.md`
4. `mavik-sklad/translations/en/STATUS.md`
5. actual saved files of the active translation

Do not restart from old R188 English site checkpoints/workspaces. Those are archival only.

## ARCHITECTURE RULE

- one shared multilingual core;
- English content lives under the language/content layer of that core;
- same principle for future `es`, `de`, `pl`, etc.;
- no Google Translate or automatic translator as the canonical content source;
- source text must be the latest authoritative Ukrainian content.

## CONTENT PARITY

Everything public in Ukrainian must be able to exist in English in the same structure:
- books;
- blog posts;
- announcements;
- static pages;
- copyright/legal/privacy/service texts;
- menu/content labels.

## PHYSICALLY RECOVERED COMPLETE ENGLISH BOOKS

The following nine complete English translations were recovered from the archival R188-English branch and physically copied into:
`mavik-sklad/translations/en/books/`

1. `mamo-zhyty` — *Mom, I Want to Live!*
2. `bezimenni` — *The Nameless*
3. `liudyna-bez-akaunta` — *The Man Without an Account*
4. `vidmova-avansom` — *Rejection in Advance*
5. `transfer` — *Transfer*
6. `pishchynka-solya` — *Solya, the Grain of Sand Who Dreamed of a Skyscraper*
7. `paterny-samorefleksii` — *Patterns of Self-Reflection*
8. `ty-i-ia` — *You and I*
9. `yevanheliie-vid-makariia` — *The Gospel According to Macarius*

Do NOT translate these again before a parity check proves the Ukrainian source changed materially.

## PHYSICALLY RECOVERED PARTIAL WORK

`Three Novels Nobody Reads` — Sections 1–8 are physically preserved under:
`mavik-sklad/translations/en/partial/try-romany-yaki-nikhto-ne-chytaie-sections-1-8/`

Do not redo Sections 1–8. Continue from the first genuinely untranslated section after checking current Ukrainian parity.

`Social` — partial English batches remain archive-only until the Ukrainian original is complete.

## ACTIVE BOOK RIGHT NOW — EVACUATION

Ukrainian title:
`Евакуація, або Дорогою до стабіка`

Working English title:
*Evacuation, or On the Road to the Stabilization Point*

Current work folder:
`mavik-sklad/translations/en/work/evakuatsiia/`

Physically saved and complete in English:
1. `story-01-pixel.txt`
2. `story-02-beard.txt`
3. `story-03-doc.txt`
4. `story-04-shorty.txt`
5. `story-05-cashier.txt`
6. `story-06-mongol.txt`
7. `story-07-philosopher.txt`

NEXT EXACT POINT:
- translate Story 8 — `Ghost`;
- then perform whole-book consistency pass: names/call signs, terminology, profanity register, repeated phrases, route continuity, ending logic;
- only after that mark the whole book complete and move/copy it into the completed `books/` area.

## STILL NEED TRANSLATION AFTER EVACUATION

- `Скульптор` → *The Sculptor*
- `UNIVERSE` → *UNIVERSE*
- `Адвокат Диявола` → *The Devil’s Advocate*
- `Пацієнт` → *The Patient*
- `Петля` → *The Loop*
- `Той, що несе світло` → *The Light-Bringer*
- `Олена` → *Olena*
- `Листи полковнику` → *Letters to the Colonel*
- `Три романи, які ніхто не читає` → complete remaining sections after Section 8
- `Як Вітько з москалями воював` → *How Vitko Fought the Russians*

`Код легенди` is currently an announcement/book object whose manuscript was sent to a publisher **for review**. Do not treat it as a published book until the user changes its status.

## SOURCE PRIORITY

Use `mavik-sklad/files/EN-SOURCE-POLICY.md` as authority. In short:
1. current approved/canonical R192 Ukrainian content;
2. live mavik.name if confirmed equivalent;
3. latest approved manuscript when it is explicitly newer/authoritative;
4. older copies only for comparison/recovery.

## TRANSLATION STYLE

- preserve voice, rhythm, roughness and profanity level;
- do not AI-polish;
- do not invent details for fluency;
- preserve story/chapter boundaries unless explicitly changed;
- save meaningful batches immediately to the remote warehouse;
- after 2–4 sections/stories or another substantial block, update STATUS/checkpoint.
