# MAVIK.NAME — SITE WORK / HANDOFF JOURNAL

Updated: 2026-08-19
Status: **AUTHORITATIVE CROSS-BRANCH HANDOFF**

## CURRENT CANON

Sole structural/functional CORE base: **R215**.
Everything before R215 is obsolete release trash and must not be used as the current working/recovery/continuation base.

Release authority: `mavik-sklad/releases/CANON.md`
Canon checkpoint: `mavik-sklad/files/R215-CANON.md`
Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`

R215 hashes:
- Manifest: `39c99c980a186d6630a4a0be4ae370ac20f647333e14f474c7a44ad325d484d5`
- Set id: `r215-39c99c980a186d66`
- FULL: `3e2da10b16c6e697a6f4f945c4f3ed781d4ddd751b00e558c587be9e0ac2c8eb`
- PART1: `5424ca74462e06b2cd492dc952151197b5b044a889ddd08ae6202d5700903777`
- PART2: `28999d59144430fa92797487b280f2705afaa792f7ecdb2f450d5b12978eeb3c`

Persistent binary storage: ChatGPT Library `/Сайт/`.

## R215 BASELINE

- 22 public book objects = 21 final library books + 1 announcement.
- 21/21 Ukrainian EPUB.
- 21 indexable Ukrainian main readers.
- Sitemap baseline: 86 unique canonical page URLs + 11 image entries.
- PHP 35/35; JS 17/17; XML 2/2.
- Crawler matrix: 430/430 HTTP 200 for Browser, Googlebot, Bingbot, OAI-SearchBot and ChatGPT-User in verified Apache configuration.
- Sensitive config/state paths: 403.
- publication_mode final↔beta cascade: EPUB/free/reader robots/canonical/sitemap/metadata synchronized.
- IndexNow after successful deploy; Bing URL Submission additionally if API key configured.
- Protected live state: `/_site-state/` must not be overwritten by routine content patches.

## ENGLISH PUBLICATION — READY NOW

Ten complete English editions are validated and packaged as native R215 Boss overlays (`mavik-overlay`, `base_release=215`).
Publication checkpoint: `mavik-sklad/translations/en/PUBLICATION-READY-R215.md`.
Persistent patch storage: `/Сайт/book_patches/`.

Ready books:
1. Mom, I Want to Live! (`mamo-zhyty`)
2. The Nameless (`bezimenni`)
3. The Man Without an Account (`liudyna-bez-akaunta`)
4. Rejection in Advance (`vidmova-avansom`)
5. Transfer (`transfer`)
6. Solya, the Grain of Sand Who Dreamed of a Skyscraper (`pishchynka-solya`)
7. Patterns of Self-Reflection (`paterny-samorefleksii`)
8. You and I... (`ty-i-ia`)
9. The Gospel According to Macarius (`yevanheliie-vid-makariia`)
10. Evacuation, or On the Road to the Stabilization Point (`evakuatsiia-abo-dorohoiu-do-stabika`)

All ten passed Boss validator, ZIP integrity, real sequential R215 patch deployment, PHP/HTML/JSON-LD/EPUB tests and Apache crawler checks.

Expected cumulative site state after installing all 10:
- English published books: 10;
- English EPUB: 10;
- English catalog cards: 10;
- sitemap canonical page URLs: 107 unique;
- 21 EN-book sitemap URLs = `/en/books/` + 10 landings + 10 readers;
- reciprocal UA↔EN hreflang on published book landing/read pairs.

Convenience archive in Library contains ten individual installable patch ZIPs. The convenience archive itself is a container; Boss installs the individual `R215_book_patch_EN_*.zip` overlays.

## TRANSLATION SOURCE CANON

Only canonical Ukrainian prose published by mavik.name may generate English prose.
Approved canonical transports:
- current public reader;
- site-generated clean-text reader;
- provenance-verified current R215 EPUB generated directly from the same reader body.

R215 EPUB therefore removes the previous web-fetch transport blocker.

## NEXT TRANSLATION WORK

Active incomplete target: **The Sculptor**.
- Chapters 1–3 verified through old reader line 2878.
- next: Chapter 4 `Глава 4. Пам’ятка`.
- canonical R215 EPUB physically contains the next sentence `Пам’ятка мала вміститися на одну сторінку.`
- Chapter 4 recovery 01–38 must be parity-checked against R215 EPUB.
- Chapter 5 recovery exists 01–26; there is no historical Part 27.

Other incomplete work:
- Three Novels Nobody Reads — Sections 1–8 only.
- queue: UNIVERSE; The Devil’s Advocate; The Patient; The Loop; The Light-Bringer; Olena; Letters to the Colonel; remaining Three Novels Nobody Reads; How Vitko Fought the Russians.

Social / Соціальна: **NO ENGLISH TRANSLATION / STOP** remains active until explicit author reversal.

## MANDATORY TECHNICAL ROADMAP

Next structural/functional work must include or continue the automatic cover media pipeline:
- preserve master original;
- JPEG fallback for opaque PNG;
- WebP and AVIF where safe;
- responsive derivatives;
- `<picture>`/srcset/sizes;
- hero/LCP priority and below-fold lazy loading;
- idempotent batch rebuild;
- obsolete derivative cleanup only after successful replacement;
- Boss self-test for missing/broken/heavy derivatives and binding mismatch.

Full rules: `SITE-TECHNICAL-ROADMAP.md`.

## NEW-BRANCH START RULE

For any new site branch read, in order:
1. `mavik-sklad/releases/CANON.md`
2. `mavik-sklad/files/R215-CANON.md`
3. this journal
4. `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
5. relevant project/translation checkpoint.

Never reconstruct current state from old release archives or chat memory when these checkpoints exist.