# MAVIK.NAME — R188 ENGLISH CHECKPOINT — LATEST

Updated: **16.08.2026 — FULL NATIVE ENGLISH SITE ASSEMBLY / 9 complete beta editions + active book Sections 1–3 translated**
Status: **WORK IN PROGRESS / NOT CANONICAL**
Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`

## USER DIRECTIVE
Build the **full English version of mavik.name**, not isolated translations.
Parallel release workstreams:
- remaining completed-book literary translations;
- native `/en/` public site/readers;
- exact Boss `English` restore;
- English cover adaptations + validated EPUBs;
- Blog/Announcements/About/Music/Discover/Genres/Themes + SEO/system/cache audit;
- reconciled STAGING → full numbered R188 candidate ZIP.

## HARD RULES
- Ukrainian R187 remains untouched;
- native `/en/`, direct `UA ↔ EN`, no Google Translate as the English edition;
- completed Ukrainian works only; `Social` is unfinished/archive-only;
- every process/release file persists through WORKSPACE → STAGING → readback → journal/ledger/checkpoint;
- English cover + validated English EPUB required before final book status;
- no R188 canonicalization without explicit user approval.

## STORAGE / AUTHORITATIVE STATE
- branch: `r188-english-work`
- WORKSPACE: `mavik-sklad/builds/R188-EN-WORKSPACE/`
- STAGING: `mavik-sklad/builds/R188-EN-STAGING/`
- authoritative ledger: `mavik-sklad/builds/R188-EN-WORKSPACE/R188-FILE-LEDGER.json`
- live staging manifest: `mavik-sklad/builds/R188-EN-STAGING/STAGING-MANIFEST-CURRENT.txt`
- full-site audit: `mavik-sklad/builds/R188-EN-WORKSPACE/control/journal/2026-08-16-full-site-assembly-audit.txt`

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

## PUBLIC ENGLISH CORE — PRESENT IN STAGING
Physical routes/assets verified: `/en/`, Books/New/Free, About, Blog, Announcements, Music, Discover, Genres, Themes, English manifest and `assets/app/en-site.css`.
Development defect: `/en/books/` already lists all 19 target books; untranslated routes remain development dead links until completed.

## ACTIVE TENTH BOOK
Ukrainian: `Три романи, які ніхто не читає`
English: `Three Novels Nobody Reads`
Slug: `try-romany-yaki-nikhto-ne-chytaie`
Authoritative source: `Три романи, які ніхто не читає.docx`, **08.08.2026**.
Verified structure: **15 numbered sections + author's afterword**.
Blocking: dynamic true-section boundaries only.

### Section 1 — COMPLETE
- UK SHA `fc24b7eff3c32423162ac470cc2c542776c62103`
- EN WORKSPACE/STAGING SHA `583876095944af4054c2337fba91003abe7171e0`

### Section 2 — COMPLETE
- UK SHA `89f8cf295e1ec7a7155bcc09c93da64556c5e768`
- EN WORKSPACE/STAGING SHA `de6f4890a83f8c35ab581d8fb3338e5de2a92df9`

### Section 3 — COMPLETE
- UK: `Розділ 3. Анотація на сімсот знаків`
- exact end: `Для одного вечора цього було більш ніж достатньо.`
- next heading excluded: `Розділ 4. Синопсис, або Як поховати роман на трьох сторінках`
- UK source SHA `015d1ddd940d98f5287f0f8659850dcbe873d0e0`
- EN: `CHAPTER 3. A SEVEN-HUNDRED-CHARACTER BLURB`
- EN WORKSPACE/STAGING SHA `2ee11bf6bbf2ec2a9368133da4465a1874ebf729`
- staging commit `c2ef54638755341c24a8d1a3d56f19fc7172ce55`
- readback PASS.

Current active-book progress: **Sections 1–3 translated and staged; Sections 4–15 + afterword remain.**

## BOSS ENGLISH
Exact validated prior R188 Boss implementation exists as six-part compressed backup in `WORKSPACE/large-files/boss/`.
Target: `boss/index.php`, original size `234087`, original SHA-256 `e9223e2820227c23adb8d716590e5bc4bd9ba12b926cba3bae30fd7d90b9d0d8`, prior PHP lint PASS.
STAGING restore still pending. **Do not rewrite Boss from memory.**

## NEXT EXACT ACTION
1. Extract exact August Section 4 `Синопсис, або Як поховати роман на трьох сторінках` through Section 5 boundary.
2. Persist `uk-004.txt`.
3. Translate/stage `part-004.txt`, read back and journal.
4. Continue Sections 5–15 + afterword without waiting for another instruction.
5. Continue full-site Boss/covers/EPUB/SEO workstreams in parallel.

Do not redo the nine complete beta editions or active-book Sections 1–3.
