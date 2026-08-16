# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — FULL NATIVE ENGLISH SITE ASSEMBLY / 9 complete beta editions + active book Sections 1–7 translated**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## USER DIRECTIVE
Build the **full native English version of mavik.name**, not isolated translations. Maintain durable notes/checkpoints/handoff while working so a new branch can resume without reconstructing history.

## HARD RULES
- Ukrainian R187 remains untouched.
- Native `/en/`, direct UA ↔ EN; no Google Translate edition.
- Completed Ukrainian works only; `Social` remains archive-only.
- Mandatory persistence: source → WORKSPACE → translation/code → WORKSPACE → STAGING → readback → journal/ledger/checkpoint/handoff → next.
- English cover + validated EPUB required before final book status.
- Exact saved Boss English implementation must be restored, not rewritten from memory.
- No R188 canonicalization without explicit user approval.

## STORAGE
- branch: `r188-english-work`
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
- ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
- staging manifest: `mavik-sklad/builds/R188-EN-STAGING/STAGING-MANIFEST-CURRENT.txt`
- journal: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/`
- full-site audit: `control/journal/2026-08-16-full-site-assembly-audit.txt`
- live handoff: `mavik-sklad/files/R188-EN-HANDOFF-LATEST.md`

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
1. Section 1 — UK `fc24b7eff3c32423162ac470cc2c542776c62103`; EN `583876095944af4054c2337fba91003abe7171e0`.
2. Section 2 — UK `89f8cf295e1ec7a7155bcc09c93da64556c5e768`; EN `de6f4890a83f8c35ab581d8fb3338e5de2a92df9`.
3. Section 3 — UK `015d1ddd940d98f5287f0f8659850dcbe873d0e0`; EN `2ee11bf6bbf2ec2a9368133da4465a1874ebf729`.
4. Section 4 — UK `1ddbd32d94a1d93fec00f73aedff73de4ba90245`; EN `4e11ae561fe20b51a9118400c5d0f9d3887fed04`.
5. Section 5 — UK `1db97d07b4c37da2a518a0d5cc00c1a93441cb5f`; EN `9954d248c43d8cf571a720a387436a9d9acdbef1`.
6. Section 6 `Бар, де всі щось пишуть` — UK `9736390e85515837b40706187a07490147efa29b`; EN `dea320a70c099713c9d8bab4da58eaddc89a8b93`; readback PASS.
7. Section 7 `Читацька ніч` — UK `d46af97ad096eb0ee4e597c70e0253094cc7c805`; source commit `0db2bd30cd6491052c6a60a1a50d1306a0554595`; EN `41e6d58a1b9d57e90a927c6daf3885ea5f0575ab`; WORKSPACE commit `f372596d59c1608f5407424b5f505bd42da2cc9f`; STAGING commit `77a789a904b8856218116900de2c131618b9de77`; readback PASS; journal `control/journal/2026-08-16-try-romany-part-007.txt`.

Current active-book progress: **7/15 sections translated and staged; Sections 8–15 + afterword remain.**

Section 7 source was reconciled specifically against the August DOCX. Three old June passages absent from the August edition were excluded and must not be restored.

## BOSS ENGLISH
Exact validated R188 Boss implementation exists as six-part compressed backup under `WORKSPACE/large-files/boss/`.
Target: `boss/index.php`; original size `234087`; original SHA-256 `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`; prior PHP lint PASS.
STAGING restore pending. Do not rewrite Boss from memory.

## NEXT EXACT ACTION
1. Establish exact August boundary for `Розділ 8. Шість місяців тиші` by locating the Section 9 heading in the authoritative 08.08.2026 DOCX.
2. Persist exact `uk-008.txt`.
3. Translate/stage `part-008.txt` with identical WORKSPACE/STAGING blob, read back and journal.
4. Update ledger/checkpoint/handoff to 8/15 and continue without waiting for another instruction.
5. Continue Boss/covers/EPUB/SEO/full-ZIP workstreams in parallel.

Do not redo the nine complete beta editions or active-book Sections 1–7.
