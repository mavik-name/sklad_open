# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **15.08.2026 19:20 +03:00**
Purpose: authoritative handoff point for the next ChatGPT session working on the native English edition.

## CANONICAL BASE

- Canonical Ukrainian full site: **R187**
- File: `187 КАНОН_Сайт_ОК_daf4fd24.zip`
- SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`
- Size: `47,727,892` bytes
- Type: full-site-release
- Status: **CANONICAL**, directly approved by the user.
- R188 is **WORK IN PROGRESS / NOT CANONICAL**.
- Obsolete `187 Оболонка_Сайт_ОК.zip` is structural-reference-only and MUST NOT become the release base.

## HARD PRODUCT DECISIONS

- Build a real native English edition under `/en/`.
- Do not use Google Translate as the English edition.
- Ukrainian R187 remains intact as the Ukrainian edition.
- Public language switching becomes direct native `UA ↔ EN`.
- Remove automatic translator widgets/multilingual selectors from Ukrainian public UI only after native `/en/` is fully ready.
- ChatGPT performs literary translation.
- Preserve plot, facts, character, voice, rhythm, humour and subtext; avoid literal Ukrainian calques; do not invent scenes/details.
- Every English book requires an English-language cover.
- Final English publication requires actually generated and validated English EPUBs.
- Boss must have a separate top-level `English` management area.

## HARD CONTENT RULE — COMPLETED WORKS ONLY

- **Only completed Ukrainian works are eligible for English translation/publication in R188.**
- Unfinished works MUST NOT be translated further for release, published under `/en/`, staged, EPUB-packaged, or counted as completed English editions.
- Partial work on an unfinished title may be archived in WORKSPACE only.

## PERSISTENT STORAGE

WORKSPACE:
`mavik-sklad/builds/R188-EN-WORKSPACE/`
- stores all process/control/source/reference/translation/code/cover/EPUB/archive work.

STAGING:
`mavik-sklad/builds/R188-EN-STAGING/`
- stores only current release-eligible files at final ZIP-relative paths.
- final R188 must be assembled from canonical R187 + reconciled staged overlay (or complete staged mirror when built), not from an undocumented transient worktree.

Persistent insurance **BATCH-01: COMPLETE**.

## COMPLETED-TITLE INVENTORY

Canonical/public R187 library verifies **19 full Ukrainian texts**.

Detailed authoritative queue:
`mavik-sklad/builds/R188-EN-WORKSPACE/control/COMPLETED-TITLE-QUEUE.txt`

### 9 full English translations reported completed in the lost previous R188 worktree

1. Mom, I Want to Live!
2. The Nameless
3. The Man Without an Account
4. Rejection in Advance
5. Transfer
6. Solya, the Grain of Sand Who Dreamed of a Skyscraper
7. Patterns of Self-Reflection
8. You and I
9. The Gospel According to Macarius

Their physical English artifacts must be recovered or reconstructed before STAGING.

### 10 completed Ukrainian titles still requiring English translation

1. The Sculptor
2. UNIVERSE
3. The Devil’s Advocate
4. The Patient
5. The Loop
6. The Light-Bringer
7. Olena
8. Letters to the Colonel
9. Three Novels Nobody Reads
10. How Vitko Fought the Russians

Translate only from canonical R187 text.

## LOST R188 WORKTREE — RECOVERY TARGET

Previous session evidence confirms an unfinished working ZIP was created/downloaded as:

`C:\Users\user\Downloads\mavik-name-en-20260815-0548.zip`

Important:
- it was NOT a final English release;
- it may contain the lost native `/en/` implementation, Boss English area and the nine translated readers/manuscripts;
- if recovered, INSPECT IT FIRST before retranslating/rebuilding anything it already contains.

No retained copy of this ZIP has been found in GitHub, current runtime or File Library index.

## CANONICAL R187 BINARY AVAILABILITY

`WORKSPACE/control/BASE-SOURCE.txt` records the exact canonical identity, but the full canonical binary is NOT currently mounted in this runtime and is not physically verified inside GitHub workspace.

Current File Library retrieval is returning service errors. Therefore:
- do not pretend the canonical full ZIP is mounted;
- do not reconstruct release code from the obsolete shell as if it were canonical;
- shell-only archive may be used only as a structural reference.

## SOCIAL — ARCHIVED / NOT ACTIVE

`Social` / `Соціальна` is unfinished Ukrainian work and is excluded from active R188 release work.

Preserved partial work:
- previous session Chapters 1–7: reported translated, physical files not recovered;
- Chapters 8–10: `mavik-sklad/files/r188-social-en-ch08-10.md`;
- Chapters 11–13: `mavik-sklad/files/r188-social-en-ch11-13.md`;
- Chapters 14–16: `mavik-sklad/files/r188-social-en-ch14-16.md`, blob `434d7ba575d595f578d2362285d43a64dc86b716`, creation commit `1cfafd812db4fef7f082eee39305c48109f9eb6f`;
- WORKSPACE reference for Chapters 14–16: `archive/social/r188-social-en-ch14-16.REFERENCE.txt`.

All Social partial translation is ARCHIVE-ONLY:
- do not continue Chapter 17;
- do not stage;
- do not publish under `/en/`;
- do not generate release EPUB;
- resume only after Ukrainian original is completed and user explicitly resumes translation.

## WORK COMPLETED IN THIS RECOVERY BLOCK

- audited current warehouse tree;
- confirmed WORKSPACE/STAGING persistence model;
- closed BATCH-01 as COMPLETE;
- preserved accidental Chapters 14–16 Social work as archive-only reference;
- verified R187 public library has 19 full texts;
- created completed-title English queue (9 historical full translations + 10 remaining completed titles);
- recovered exact previous local working ZIP path/name;
- logged current canonical-binary/File-Library limitation;
- synchronized `START-HERE-SITE.txt` to current 19:20 state so new sessions do not restart obsolete Social work.

## NEXT CONTINUATION POINT

Priority order:

1. **Recover/inspect `mavik-name-en-20260815-0548.zip` if it still exists.**
2. If not recoverable, obtain/mount exact canonical full R187 binary `187 КАНОН_Сайт_ОК_daf4fd24.zip` and reconstruct native `/en/` + Boss English from it.
3. In parallel, translate only completed titles from `COMPLETED-TITLE-QUEUE.txt`, but only when the canonical R187 source text is physically available/verified.
4. Persist every real process artifact to WORKSPACE immediately; release-eligible files additionally go to STAGING.

Do not redo a previously completed English translation before checking the recovery ZIP.

## CHECKPOINT PROTOCOL — MANDATORY

After every meaningful work block:
1. Update this file.
2. Update `mavik-sklad/files/site-r188-english-development.md`.
3. Mirror to `mavik-sklad/text/R188-EN-CHECKPOINT-LATEST.md`.
4. Store actual artifacts in WORKSPACE.
5. Copy release-eligible artifacts into STAGING.
6. Update operations log / staging manifest as applicable.
7. Create timestamped checkpoint after major milestones.

This file is authoritative unless a newer timestamped/current checkpoint explicitly supersedes it.
