# MAVIK.NAME — R188 ENGLISH — LIVE HANDOFF

Updated: **16.08.2026 15:27 Europe/Uzhgorod**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Purpose: fast, lossless continuation from a new chat/branch if the current thread is interrupted.

## READ THIS FIRST
Canonical Ukrainian base: **R187** `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`
Work branch: `r188-english-work`
WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
Authoritative ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
Main checkpoint: `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`
Staging manifest: `mavik-sklad/builds/R188-EN-STAGING/STAGING-MANIFEST-CURRENT.txt`
Full-site audit: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/2026-08-16-full-site-assembly-audit.txt`

## USER DIRECTIVE
Build the **full native English version of mavik.name**, not isolated book translations.
Keep running notes and durable handoff state during work so a new branch can resume without reconstructing history.

## HARD RULES
- Ukrainian R187 remains untouched.
- Native `/en/`, direct UA ↔ EN; no Google Translate as the English edition.
- Only completed Ukrainian works enter English publication.
- `Social` / `Соціальна` is unfinished and archive-only.
- Every substantive step must persist: source → WORKSPACE → translation/code → WORKSPACE → STAGING → readback → journal/ledger/checkpoint/handoff → next.
- Do not claim a book complete until its English web shell is physically present and read back.
- English cover adaptation + validated English EPUB remain mandatory before final publication status.
- Boss `English` must be restored from the exact saved R188 implementation, not rewritten from memory.
- Final output is a full numbered R188 site ZIP based on canonical R187 + reconciled R188 STAGING.
- No R188 canonicalization without explicit user approval.

## COMPLETE ENGLISH BETA WEB EDITIONS — 9/19
Do NOT redo these:
1. You and I...
2. Solya, the Grain of Sand Who Dreamed of a Skyscraper
3. Rejection in Advance
4. Transfer
5. The Gospel According to Macarius
6. The Nameless
7. Patterns of Self-Reflection
8. Mom, I Want to Live!
9. The Man Without an Account

All nine remain `translated_beta`: English cover + validated EPUB pending.

## ACTIVE TENTH BOOK
Ukrainian: `Три романи, які ніхто не читає`
English: `Three Novels Nobody Reads`
Slug: `try-romany-yaki-nikhto-ne-chytaie`
Authoritative source: `Три романи, які ніхто не читає.docx`, **08.08.2026**.
Verified structure: **15 numbered sections + author's afterword**.
Blocking: exact August section boundaries only; no forced fixed block count.

### Completed Sections 1–5
Section 1:
- UK source SHA `fc24b7eff3c32423162ac470cc2c542776c62103`
- EN WORKSPACE/STAGING SHA `583876095944af4054c2337fba91003abe7171e0`

Section 2:
- UK source SHA `89f8cf295e1ec7a7155bcc09c93da64556c5e768`
- EN WORKSPACE/STAGING SHA `de6f4890a83f8c35ab581d8fb3338e5de2a92df9`

Section 3 `Анотація на сімсот знаків`:
- UK source SHA `015d1ddd940d98f5287f0f8659850dcbe873d0e0`
- EN `A SEVEN-HUNDRED-CHARACTER BLURB` SHA `2ee11bf6bbf2ec2a9368133da4465a1874ebf729`

Section 4 `Синопсис, або Як поховати роман на трьох сторінках`:
- UK source SHA `1ddbd32d94a1d93fec00f73aedff73de4ba90245`
- EN `THE SYNOPSIS, OR HOW TO BURY A NOVEL IN THREE PAGES` SHA `4e11ae561fe20b51a9118400c5d0f9d3887fed04`

Section 5 `Лист видавцю`:
- UK source SHA `1db97d07b4c37da2a518a0d5cc00c1a93441cb5f`
- exact UK end: `Не помер. Поки що.`
- EN `LETTER TO A PUBLISHER` SHA `9954d248c43d8cf571a720a387436a9d9acdbef1`
- exact EN end: `Didn't die. Not yet.`
- WORKSPACE/STAGING readback PASS.

Current active-book progress: **Sections 1–5 complete and staged; Sections 6–15 + afterword remain.**

## EXACT CURRENT STOP POINT
Now working on:
`Розділ 6. Бар, де всі щось пишуть`
Verified next section heading / hard boundary:
`Розділ 7. Читацька ніч`
Verified Section 6 ending scene: Olya enters Artur's flat; on the table the laptop with the novel is waiting.
The middle of Section 6 (bar + route home) still needs exact August-source retrieval before `uk-006.txt` may be created.
**Do not invent or reconstruct missing Section 6 text from memory or old June copies.**

### FIRST ACTION IN A NEW BRANCH
1. Read this handoff.
2. Read `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`.
3. Read authoritative ledger `R188-FILE-LEDGER.json`.
4. Resume exact August retrieval of Section 6 `Бар, де всі щось пишуть` through the hard boundary `Розділ 7. Читацька ніч`.
5. Persist `source/try-romany-yaki-nikhto-ne-chytaie/uk-006.txt` only when complete.
6. Read back.
7. Translate `part-006.txt`, persist WORKSPACE + STAGING, compare blob SHA, journal.
8. Update checkpoint + ledger + this handoff after the block.

## PUBLIC ENGLISH SITE
Verified native English core physically present in STAGING:
- `/en/`
- `/en/books/`, `/en/books/new/`, `/en/books/free/`
- `/en/about/`, `/en/blog/`, `/en/announcements/`, `/en/music/`
- `/en/discover/`, `/en/genres/`, `/en/themes/`
- `/en/manifest.webmanifest`
- `/assets/app/en-site.css`

Known development issue: `/en/books/index.html` already links all 19 targets, so untranslated book routes remain dead development links until completed.

## BOSS ENGLISH
Exact previously implemented R188 Boss backup exists in:
`mavik-sklad/builds/R188-EN-WORKSPACE/large-files/boss/`
Target release path: `boss/index.php`
Original size: `234087` bytes
Original SHA-256: `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`
Validated gzip SHA-256: `f940e8027dc018bf9f573cee6016e21a856d12c93b62003abd29fa388300ec22`
Prior PHP lint: PASS.
Six-part compressed backup is authoritative. Old truncated single gzip must never be used.
STAGING Boss restore is still pending exact deterministic reassembly.

## REMAINING BOOK QUEUE AFTER ACTIVE TITLE
1. `yak-vitko-z-moskaliamy-voiuvav`
2. `toi-shcho-nese-svitlo`
3. `lysty-polkovnyku`
4. `olena`
5. `universe`
6. `petlia`
7. `patsiient`
8. `advokat-dyiavola`
9. `skulptor`

## FINAL R188 WORK STILL REQUIRED
- finish all remaining completed-book translations and web shells;
- English cover adaptations for all 19;
- validated English EPUBs;
- exact Boss English restore;
- English Blog/Announcements/content audit;
- canonical/hreflang/sitemap/robots/service-worker/cache/local-reference audit;
- PHP/JS/JSON/XML/EPUB checks;
- exact `.mavik-release.json` managed files;
- deterministic full R188 ZIP from R187 + reconciled STAGING;
- Boss archive validator and ZIP integrity/readback;
- explicit user approval before canonicalization.

## CONTINUITY RULE FROM NOW ON
After every completed translation block or meaningful technical change:
1. write/update its immutable journal entry;
2. update `R188-FILE-LEDGER.json`;
3. update `R188-EN-CHECKPOINT-LATEST.md`;
4. update this `R188-EN-HANDOFF-LATEST.md` with the exact next action and any new SHAs.

This file is deliberately concise enough for a new branch to resume immediately without relying on chat memory.
