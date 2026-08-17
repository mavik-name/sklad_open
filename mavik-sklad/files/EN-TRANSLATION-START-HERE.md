# MAVIK.NAME — ENGLISH CONTENT TRANSLATION — START HERE

Updated: 2026-08-17
Status: **ACTIVE TRANSLATION WORK ONLY**
Canonical site/core source: **R193**

This direction concerns English content inside the single multilingual core. It is NOT a separate English site.

## READ FIRST IN A NEW BRANCH

1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. this file
4. `mavik-sklad/files/EN-SOURCE-POLICY.md`
5. **`mavik-sklad/translations/en/CONTINUATION-CANON.md`**
6. `mavik-sklad/translations/en/STATUS.md`
7. active-book STATUS/checkpoint
8. actual saved files of the active translation and the authoritative Ukrainian source

Do not restart from old pre-R193 site checkpoints/workspaces. Those are obsolete as site architecture and must not override current translation work.

Historical translation branches/workspaces MAY be searched as read-only recovery sources for already-created translation content.

## HARD PRESERVATION RULE

Translation text is CONTENT, not a site release. A file does not become obsolete merely because its path or filename contains `r188`, `r192`, or another old release number.

Before declaring any translation lost, search:
1. current `main` translation/content tree;
2. safety branch `backup/english-translations-2026-08-17`;
3. Git commit history and immutable tree/blob SHAs;
4. historical translation workspaces/branches as recovery-only sources;
5. File Library for current manuscript binaries.

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

The following nine complete English translations are physically stored under:
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

## COMPLETED TRANSLATION TEXT — EVACUATION

Ukrainian title:
`Евакуація, або Дорогою до стабіка`

Working English title:
*Evacuation, or On the Road to the Stabilization Point*

Current authoritative physical English set:
`mavik-sklad/translations/en/work/evakuatsiia/`

All eight English stories are physically saved:
1. `story-01-pixel.txt`
2. `story-02-beard.txt`
3. `story-03-doc.txt`
4. `story-04-shorty.txt`
5. `story-05-cashier.txt`
6. `story-06-mongol.txt`
7. `story-07-philosopher.txt`
8. `story-08-ghost.txt`

Completion checkpoint:
`mavik-sklad/translations/en/EVAKUATSIIA-COMPLETE-CHECKPOINT-2026-08-16.md`

Do NOT restart this translation. The English text is complete but has not yet been physically packaged/copied into the completed `books/` site-tree. Do not claim that packaging is done until it actually is.

## PHYSICALLY RECOVERED PARTIAL WORK

### Three Novels Nobody Reads
Sections 1–8 are physically preserved under:
`mavik-sklad/translations/en/partial/try-romany-yaki-nikhto-ne-chytaie-sections-1-8/`

Do not redo Sections 1–8. Continue from the first genuinely untranslated section after checking current Ukrainian parity.

### Social / Соціальна
Protected English content batches:
- `mavik-sklad/files/r188-social-en-ch08-10.md`
- `mavik-sklad/files/r188-social-en-ch11-13.md`
- `mavik-sklad/files/r188-social-en-ch14-16.md`

These are archive-only while the Ukrainian original is unfinished, but they are CONTENT and must not be deleted because of the historical `r188` prefix.

## ACTIVE TARGET — THE SCULPTOR

Ukrainian title:
`Скульптор`

English working title:
*The Sculptor*

Working directory:
`mavik-sklad/translations/en/work/skulptor/`

Detailed status:
`mavik-sklad/translations/en/work/skulptor/STATUS.md`

Working source:
`Скульптор.docx` from File Library, unless a newer explicitly approved source is found.

Physically saved progress:
- Chapter 1 — COMPLETE: `chapter-01-part-01.txt` through `chapter-01-part-05.txt`.
- Chapter 2 — ACTIVE: `chapter-02-part-01.txt` through `chapter-02-part-05.txt`.

**NEXT EXACT POINT:** continue immediately after the Ukrainian source line:
`— Але будете.`

The next Ukrainian paragraph has not yet been retrieved into the active source window. Retrieve the next contiguous passage from `Скульптор.docx` first. Do not infer, bridge, restart, or repeat saved text.

## STILL NEED TRANSLATION AFTER THE SCULPTOR

- `UNIVERSE` → *UNIVERSE*
- `Адвокат Диявола` → *The Devil’s Advocate*
- `Пацієнт` → *The Patient*
- `Петля` → *The Loop*
- `Той, що несе світло` → *The Light-Bringer*
- `Олена` → *Olena*
- `Листи полковнику` → *Letters to the Colonel*
- `Три романи, які ніхто не читає` → complete remaining sections after Section 8
- `Як Вітько з москалями воював` → *How Vitko Fought the Russians*

`Код легенди` remains an announcement/book object whose manuscript was sent to a publisher **for review**. Do not treat it as published until the user changes its status.

## SOURCE PRIORITY

Use `mavik-sklad/files/EN-SOURCE-POLICY.md` as authority. In short:
1. current approved/canonical R193 Ukrainian content;
2. live mavik.name if confirmed equivalent;
3. latest approved manuscript when it is explicitly newer/authoritative;
4. older copies only for comparison/recovery.

## TRANSLATION STYLE AND PERSISTENCE

- preserve voice, rhythm, roughness and profanity level;
- do not AI-polish;
- do not invent details for fluency;
- preserve story/chapter boundaries unless explicitly changed;
- save meaningful batches immediately to the remote warehouse;
- read back saved files;
- after every meaningful block update `STATUS.md` and the active-book status;
- if the global continuation point changes materially, update `translations/en/CONTINUATION-CANON.md`;
- never leave irreplaceable translation text only in chat/session memory.
