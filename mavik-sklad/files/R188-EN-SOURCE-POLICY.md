# R188 ENGLISH — SOURCE POLICY

Updated: 16.08.2026

Purpose: avoid dependence on unstable File Library retrieval while preserving exact Ukrainian source fidelity for the native English edition.

## SOURCE PRIORITY
1. Canonical R187 site files / extracted contents of `187 КАНОН_Сайт_ОК_daf4fd24.zip` when directly available.
2. Live `https://mavik.name/` public book files/routes (reader text and downloadable EPUB), after confirming they correspond to the canonical Ukrainian publication and have no post-R187 content override that changes the text.
3. Authoritative manuscript/source documents in the remote warehouse, preferring the latest approved/final file (for `Три романи, які ніхто не читає`: DOCX dated 08.08.2026).
4. File Library retrieval only as a fallback/search aid, never as the sole authority when it is unstable.
5. Older drafts/copies may be used only as search scaffolding. They may never silently overwrite newer/canonical wording.

## ACTIVE BOOK RULE
For `Три романи, які ніхто не читає`:
- completed Sections 1–8 remain frozen as already source-persisted, translated, staged and read back;
- from Section 9 onward, prefer canonical R187/live-site text over File Library where direct extraction is possible;
- if live site and manuscript differ, compare against R187 canonical publication state and record the decision in the section journal;
- preserve exact section boundaries from the published/canonical text;
- every source block is persisted in WORKSPACE before translation.

## LIVE-SITE OBSERVATION
The live book landing page for `try-romany-yaki-nikhto-ne-chytaie` exposes the full book as free reading and provides a downloadable EPUB. These channels are valid source candidates for exact published Ukrainian text.

## CONTINUITY
New branches must read this file together with:
- `mavik-sklad/files/R188-EN-HANDOFF-LATEST.md`
- `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`
- `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`

Do not stop translation work merely because File Library returns `RetrievalClientResponseError`; switch source channel according to this policy.
