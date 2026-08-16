# MAVIK.NAME — R188 ENGLISH — LIVE HANDOFF

Updated: **16.08.2026 — after Three Novels Nobody Reads Section 7**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Purpose: fast, lossless continuation from a new chat/branch if the current thread is interrupted.

## READ THIS FIRST
Canonical Ukrainian base: **R187** `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`
Work branch: `r188-english-work`
WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
Ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
Main checkpoint: `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`
Staging manifest: `mavik-sklad/builds/R188-EN-STAGING/STAGING-MANIFEST-CURRENT.txt`
Full-site audit: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/2026-08-16-full-site-assembly-audit.txt`

## USER DIRECTIVE / CONTINUITY RULE
Build the **full native English version of mavik.name**, not isolated translations. Keep durable working notes so a new branch can resume immediately. After every completed block or meaningful technical change: source/code → WORKSPACE → STAGING → readback → immutable journal → ledger → checkpoint → this handoff. Never advance a translation block before STAGING readback.

## HARD RULES
- Ukrainian R187 untouched.
- Native `/en/`, direct UA ↔ EN; no Google Translate edition.
- Completed works only; `Social` unfinished/archive-only.
- English cover + validated EPUB required before final publication.
- Exact Boss English backup must be restored, not reimplemented from memory.
- Final is a full numbered R188 site ZIP built from R187 + reconciled STAGING.
- Explicit user approval required before canonicalization.

## COMPLETE ENGLISH BETA WEB EDITIONS — 9/19
Do NOT redo: You and I...; Solya, the Grain of Sand Who Dreamed of a Skyscraper; Rejection in Advance; Transfer; The Gospel According to Macarius; The Nameless; Patterns of Self-Reflection; Mom, I Want to Live!; The Man Without an Account.
All remain `translated_beta`: covers + validated EPUBs pending.

## ACTIVE TENTH BOOK
UK: `Три романи, які ніхто не читає`
EN: `Three Novels Nobody Reads`
Slug: `try-romany-yaki-nikhto-ne-chytaie`
Authoritative source: `Три романи, які ніхто не читає.docx`, **08.08.2026** (`file_00000000d42082439c86ec73f07b493d`).
Older June copies are NON-AUTHORITATIVE.
Structure: **15 numbered sections + author's afterword**.

### Completed, staged, read back — Sections 1–7
1. UK `fc24b7eff3c32423162ac470cc2c542776c62103` / EN `583876095944af4054c2337fba91003abe7171e0`
2. UK `89f8cf295e1ec7a7155bcc09c93da64556c5e768` / EN `de6f4890a83f8c35ab581d8fb3338e5de2a92df9`
3. UK `015d1ddd940d98f5287f0f8659850dcbe873d0e0` / EN `2ee11bf6bbf2ec2a9368133da4465a1874ebf729`
4. UK `1ddbd32d94a1d93fec00f73aedff73de4ba90245` / EN `4e11ae561fe20b51a9118400c5d0f9d3887fed04`
5. UK `1db97d07b4c37da2a518a0d5cc00c1a93441cb5f` / EN `9954d248c43d8cf571a720a387436a9d9acdbef1`
6. UK `9736390e85515837b40706187a07490147efa29b` / EN `dea320a70c099713c9d8bab4da58eaddc89a8b93`
7. `Читацька ніч`:
   - UK path `WORKSPACE/source/try-romany-yaki-nikhto-ne-chytaie/uk-007.txt`
   - UK SHA `d46af97ad096eb0ee4e597c70e0253094cc7c805`
   - source commit `0db2bd30cd6491052c6a60a1a50d1306a0554595`
   - EN heading `CHAPTER 7. READING NIGHT`
   - EN WORKSPACE/STAGING SHA `41e6d58a1b9d57e90a927c6daf3885ea5f0575ab`
   - WORKSPACE commit `f372596d59c1608f5407424b5f505bd42da2cc9f`
   - STAGING commit `77a789a904b8856218116900de2c131618b9de77`
   - readback PASS
   - journal `control/journal/2026-08-16-try-romany-part-007.txt`

Section 7 August reconciliation: old June-only sentence after kitchen counter removed; old standalone `Сама.` removed; old `Оля читала далі.` removed; old `цілком очевидний` reduced to August `очевидний`; old extended paragraph after `Вони читали далі.` removed. Do NOT restore these.

Current active-book progress: **7/15 + afterword pending**.

## EXACT CURRENT STOP POINT / FIRST ACTION IN A NEW BRANCH
Next: `Розділ 8. Шість місяців тиші`.
1. Read this handoff + main checkpoint + ledger.
2. Locate exact **Section 9 heading** in authoritative August DOCX to establish Section 8 end.
3. Extract only exact August Section 8 into `uk-008.txt`.
4. Translate to `part-008.txt`, persist in WORKSPACE, stage exact same blob, read back.
5. Journal and update ledger/checkpoint/handoff to 8/15.
6. Continue without waiting for another instruction.

## PUBLIC ENGLISH SITE
Native `/en/` core physically in STAGING: home; Books/New/Free; About; Blog; Announcements; Music; Discover; Genres; Themes; English manifest/CSS. Dev issue: catalogue already links all 19 targets, so unfinished routes are dead until translated.

## BOSS ENGLISH
Authoritative exact six-part backup in `WORKSPACE/large-files/boss/`. Target `boss/index.php`; original size `234087`; SHA-256 `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`; compressed SHA-256 `f940e8027dc018bf9f573cee6016e21a856d12c93b62003abd29fa388300ec22`; prior PHP lint PASS. STAGING restore pending. Never use old truncated gzip.

## REMAINING BOOK QUEUE AFTER ACTIVE
`yak-vitko-z-moskaliamy-voiuvav` → `toi-shcho-nese-svitlo` → `lysty-polkovnyku` → `olena` → `universe` → `petlia` → `patsiient` → `advokat-dyiavola` → `skulptor`.

## FINAL R188 STILL REQUIRED
Finish translations/web shells; covers all 19; validated EPUBs; exact Boss restore; Blog/Announcements/content audit; canonical/hreflang/sitemap/robots/service-worker/cache/local-ref audit; PHP/JS/JSON/XML/EPUB checks; exact release manifest; deterministic full R188 ZIP + integrity/readback; explicit user approval before canonicalization.
