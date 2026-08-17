# ENGLISH TRANSLATION — CURRENT SOURCE POLICY

Updated: 2026-08-17
Status: **ACTIVE / AUTHORITATIVE SOURCE POLICY**
Canonical site/core: **R193**
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
Continuation authority: `mavik-sklad/translations/en/CONTINUATION-CANON.md`

## SOURCE PRIORITY — HARD RULE

1. **The canonical Ukrainian text actually published on mavik.name is the ONLY translation source.**
2. The public reader `/books/<slug>/read/` is authoritative. A site-generated text representation may be used only when it is demonstrably the same published text.
3. File Library manuscripts, warehouse manuscripts, old site copies, old translations, summaries, checkpoints and chat memory are comparison/recovery aids only. They may not generate new English text.
4. If any other source differs from the published Ukrainian site text, the published mavik.name text wins unless the user explicitly changes the source canon.

## ZERO-ADDITION TRANSLATION RULE

- Translate only text physically retrieved from the canonical mavik.name publication.
- No invented text.
- No added descriptions, explanations, dialogue or connective passages.
- No filling gaps from context.
- No paraphrased reconstruction of missing source.
- No AI-polish that changes or expands meaning.
- Preserve chapter/section boundaries, voice, register, rhythm, profanity level and deliberate roughness.
- If the next canonical site passage cannot be retrieved, stop at the last verified site-source point. Do not improvise.

## PROJECT EXCLUSION — SOCIAL / СОЦІАЛЬНА

`Соціальна` is unfinished and actively edited. **Do not translate it into English at all** until the author explicitly says the Ukrainian book is finished/fixed and may be translated.

Authority: `mavik-sklad/files/SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md`.

The old English Social files for chapters 8–16 were intentionally deleted from both `main` and `backup/english-translations-2026-08-17` on 2026-08-17. They are not recovery input for translation work and must not be restored unless the author explicitly changes this decision.

## EXISTING ENGLISH FILES

Existing English files for non-excluded books are protected recovery artifacts, but they are not automatically canonical merely because they exist.

For `The Sculptor`, all currently saved English work is **UNVERIFIED / NOT FOR PUBLICATION** until checked line-by-line against the canonical Ukrainian text published on mavik.name. Do not continue from an unverified English file as if it were source truth.

## REQUIRED WORKFLOW

For every translation block:
1. retrieve exact next contiguous Ukrainian passage from mavik.name;
2. translate only that passage;
3. save physically;
4. read back;
5. record exact site-source position/marker;
6. mirror to safety branch;
7. update status/canon.

## CONTENT SURVIVES RELEASE OBSOLESCENCE

Old site release numbers do not invalidate translation content by themselves. A file named with `r188`, `r192`, etc. may still be useful recovery content, but it remains subject to site-source parity verification before publication.

**Exception:** an explicit author deletion/exclusion overrides this preservation rule. `Соціальна` English is currently such an exception.

Before declaring other translation work lost, search:
1. current `main`;
2. `backup/english-translations-2026-08-17`;
3. Git history/tree/blob SHAs;
4. historical translation workspaces/branches as read-only recovery sources;
5. File Library.

Recovery does not override the hard source canon or a project-specific author exclusion.

## ACTIVE ARCHIVE

- `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
- `mavik-sklad/translations/en/CONTINUATION-CANON.md`
- `mavik-sklad/translations/en/STATUS.md`
- `mavik-sklad/translations/en/books/`
- `mavik-sklad/translations/en/partial/`
- `mavik-sklad/translations/en/work/`

## NEW CHAT READ ORDER

1. `mavik-sklad/START-HERE.txt`
2. `mavik-sklad/files/CANON-REGISTRY.md`
3. `mavik-sklad/files/EN-TRANSLATION-START-HERE.md`
4. `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
5. this file
6. `mavik-sklad/translations/en/CONTINUATION-CANON.md`
7. `mavik-sklad/translations/en/STATUS.md`
8. active-book STATUS
9. canonical Ukrainian publication on mavik.name

Do not translate from chat memory or manuscript files when the canonical site publication is the required source.