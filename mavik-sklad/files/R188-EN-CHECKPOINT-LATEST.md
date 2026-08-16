# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — FULL NATIVE ENGLISH SITE ASSEMBLY / 9 complete beta editions + active book Sections 1–5 translated**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## USER DIRECTIVE
Build the **full native English version of mavik.name**, not isolated translations.
Parallel workstreams: remaining literary translations; native `/en/`; exact Boss `English` restore; English covers + validated EPUBs; content/SEO/system audit; reconciled STAGING; full numbered R188 candidate ZIP.

## HARD RULES
- Ukrainian R187 remains untouched.
- Native `/en/`, direct UA ↔ EN; no Google Translate edition.
- Completed Ukrainian works only; `Social` remains archive-only.
- Mandatory persistence: source → WORKSPACE → translation/code → WORKSPACE → STAGING → readback → journal/ledger/checkpoint → next.
- English cover + validated EPUB required before final book status.
- No R188 canonicalization without explicit user approval.

## STORAGE
- branch: `r188-english-work`
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
- authoritative ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
- live staging manifest: `mavik-sklad/builds/R188-EN-STAGING/STAGING-MANIFEST-CURRENT.txt`
- journal: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/`
- full-site audit: `control/journal/2026-08-16-full-site-assembly-audit.txt`

## COMPLETE ENGLISH BETA WEB EDITIONS — 9/19
1. You and I...
2. Solya, the Grain of Sand Who Dreamed of a Skyscraper
3. Rejection in Advance
4. Transfer
5. The Gospel According to Macarius
6. The Nameless
7. Patterns of Self-Reflection
8. Mom, I Want to Live!
9. The Man Without an Account

All nine remain `translated_beta`: English covers + validated EPUBs pending.

## PUBLIC ENGLISH CORE
Native `/en/` core is physically present in STAGING: home, Books/New/Free, About, Blog, Announcements, Music, Discover, Genres, Themes, English manifest and CSS.
Development defect remains: English catalogue already lists all 19 target books, so untranslated routes are dead until completed.

## ACTIVE TENTH BOOK
Ukrainian: `Три романи, які ніхто не читає`
English: `Three Novels Nobody Reads`
Slug: `try-romany-yaki-nikhto-ne-chytaie`
Authoritative source: `Три романи, які ніхто не читає.docx`, 08.08.2026.
Verified structure: **15 numbered sections + author's afterword**.
Blocking: true August section boundaries only.

Completed and read back in WORKSPACE + STAGING:
1. Section 1 — source `fc24b7eff3c32423162ac470cc2c542776c62103`; EN `583876095944af4054c2337fba91003abe7171e0`.
2. Section 2 — source `89f8cf295e1ec7a7155bcc09c93da64556c5e768`; EN `de6f4890a83f8c35ab581d8fb3338e5de2a92df9`.
3. Section 3 `Анотація на сімсот знаків` — source `015d1ddd940d98f5287f0f8659850dcbe873d0e0`; EN `2ee11bf6bbf2ec2a9368133da4465a1874ebf729`.
4. Section 4 `Синопсис, або Як поховати роман на трьох сторінках` — source `1ddbd32d94a1d93fec00f73aedff73de4ba90245`; EN `4e11ae561fe20b51a9118400c5d0f9d3887fed04`.
5. Section 5 `Лист видавцю` — source `1db97d07b4c37da2a518a0d5cc00c1a93441cb5f`; EN `9954d248c43d8cf571a720a387436a9d9acdbef1`; staging commit `06cbc5e962a580247ca8e81994b5851d0a0290e6`; exact end `Didn’t die.` / `Not yet.`; readback PASS.

Current active-book progress: **5/15 sections translated and staged; Sections 6–15 + afterword remain.**

## BOSS ENGLISH
Exact validated R188 Boss implementation exists as six-part compressed backup under `WORKSPACE/large-files/boss/`.
Target: `boss/index.php`; original size `234087`; original SHA-256 `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`; prior PHP lint PASS.
STAGING restore pending. Do not rewrite Boss from memory.

## NEXT EXACT ACTION
1. Extract exact August `Розділ 6. Бар, де всі щось пишуть` through Section 7 boundary.
2. Persist `uk-006.txt`.
3. Translate/stage `part-006.txt`, read back and journal.
4. Continue Sections 7–15 + afterword without waiting for another instruction.
5. Continue Boss/covers/EPUB/SEO/full-ZIP workstreams in parallel.

Do not redo the nine complete beta editions or active-book Sections 1–5.
