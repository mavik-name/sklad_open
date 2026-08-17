# ENGLISH TRANSLATION — CURRENT SOURCE POLICY

Updated: 2026-08-17
Status: **ACTIVE / AUTHORITATIVE SOURCE POLICY**
Canonical site/core source: **R193**
Continuation authority: `mavik-sklad/translations/en/CONTINUATION-CANON.md`

## SOURCE PRIORITY

1. Canonical R193 multilingual core / its current approved Ukrainian content.
2. Live `mavik.name` Ukrainian publication after confirming it matches the canonical/current publication.
3. Latest approved/final author manuscript on the remote warehouse or File Library when the site copy has not yet been updated or the user explicitly designates the manuscript as authoritative.
4. Older approved warehouse copies only for comparison/recovery.
5. Historical pre-R193 workspaces, old staging, old site branches and old drafts only as archival search scaffolding; never silently override newer Ukrainian wording.

## TRANSLATION RULES

- Translate only from the latest authoritative Ukrainian source.
- Preserve section/chapter/story boundaries unless the author explicitly changes them.
- Preserve voice, register, rhythm, profanity level and deliberate roughness; do not AI-polish the prose.
- Do not invent concrete facts or details for fluency.
- Do not retranslate material already physically saved until existing English artifacts have been checked.
- Persist meaningful translation batches on the warehouse immediately and read them back.
- Partial English work for an unfinished Ukrainian work is archive-only until the Ukrainian source is complete, but the translation files themselves remain protected content.
- Before public deployment, parity-check recovered/translated English text against the current Ukrainian source.

## CONTENT SURVIVES RELEASE OBSOLESCENCE

Old site release numbers do not invalidate translation content.

A file whose name contains `r188`, `r192`, or another obsolete site-release number may still be authoritative translation content. Never delete or disregard a translation solely because of that prefix.

Before declaring translation work lost, search all persistent recovery layers:
1. `main` translation/content tree;
2. safety branch `backup/english-translations-2026-08-17`;
3. Git commit history and immutable tree/blob SHAs;
4. historical translation workspaces/branches as read-only recovery sources;
5. File Library for current manuscript binaries.

## ACTIVE ENGLISH ARCHIVE

Authoritative English continuity/status:
- `mavik-sklad/translations/en/CONTINUATION-CANON.md`
- `mavik-sklad/translations/en/STATUS.md`
- `mavik-sklad/translations/en/books/` — physically recovered complete translations;
- `mavik-sklad/translations/en/partial/` — partial translations that must not be presented as complete;
- `mavik-sklad/translations/en/work/` — current translation work.

## RECOVERED WORK

Nine complete English translations are physically recovered under `mavik-sklad/translations/en/books/`. Their old site shell/architecture is not current; only the translated content is reused.

`Three Novels Nobody Reads`: Sections 1–8 are physically preserved under `mavik-sklad/translations/en/partial/`; continue only from the first genuinely untranslated section after checking current Ukrainian parity.

`Social`: Chapters 8–16 are physically protected in:
- `mavik-sklad/files/r188-social-en-ch08-10.md`
- `mavik-sklad/files/r188-social-en-ch11-13.md`
- `mavik-sklad/files/r188-social-en-ch14-16.md`
These remain archive-only while the Ukrainian work is unfinished. The `r188` prefix is historical and does not make them disposable.

## EVACUATION — COMPLETE

Current physical set:
`mavik-sklad/translations/en/work/evakuatsiia/`

Stories 1–8 are physically saved in English. The translation text is complete. Do not restart it.

Completion checkpoint:
`mavik-sklad/translations/en/EVAKUATSIIA-COMPLETE-CHECKPOINT-2026-08-16.md`

Moving/copying it into the completed `books/` publication tree is separate packaging work and must not be claimed complete until physically performed.

## ACTIVE WORK — THE SCULPTOR

Working directory:
`mavik-sklad/translations/en/work/skulptor/`

Working source:
`Скульптор.docx` from File Library unless a newer explicitly approved source is found.

Physically saved:
- Chapter 1: five parts, COMPLETE.
- Chapter 2: five parts saved, ACTIVE.

Exact next point:
continue immediately after source line `— Але будете.`

Before continuing, retrieve the next contiguous Ukrainian passage from `Скульптор.docx`. Do not infer missing source from memory.

## CONTINUITY FOR A NEW CHAT BRANCH

Read in this order:
1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. `mavik-sklad/files/EN-TRANSLATION-START-HERE.md`
4. this file
5. `mavik-sklad/translations/en/CONTINUATION-CANON.md`
6. `mavik-sklad/translations/en/STATUS.md`
7. active-book STATUS/checkpoint
8. actual saved translation files and current Ukrainian source

Do NOT use old English-site checkpoints, staging manifests, Boss notes or route plans as active translation authority. They may be searched only to recover already-created content.