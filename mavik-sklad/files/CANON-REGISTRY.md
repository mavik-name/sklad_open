# MAVIK — CANON REGISTRY

Updated: 2026-08-19
Status: **AUTHORITATIVE INDEX**

## Site MAVIK.NAME

- Master start: `mavik-sklad/START-HERE.txt`
- Site start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Current canonical checkpoint: `mavik-sklad/files/R215-CANON.md`
- R216 status/checkpoint: `mavik-sklad/files/R216-CANDIDATE.md`
- Cross-branch journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`
- Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
- Highest-priority localization canon: `mavik-sklad/files/SITE-LOCALIZATION-UNIFIED-DESIGN-CONTENT-CANON.md`
- All-pages locale parity override: `mavik-sklad/files/SITE-ALL-PAGES-LOCALE-PARITY-OVERRIDE.md`
- Localization architecture canon: `mavik-sklad/files/SITE-LOCALIZATION-ARCHITECTURE-CANON.md`
- Locale storage canon: `mavik-sklad/files/SITE-LOCALE-STORAGE-CANON.md`
- Deploy backup canon: `mavik-sklad/files/SITE-DEPLOY-BACKUP-CANON.md`
- SEO identity/query canon: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`

## CURRENT RELEASE AUTHORITY

**R215 remains the sole approved structural/functional CORE base.**

The previous R216 binary candidate is **REJECTED / DO NOT INSTALL / REBUILD REQUIRED** because visual/semantic locale parity failed. Backend/static/deploy tests from that artifact are historical technical results only and do not constitute a release PASS.

## HIGHEST-PRIORITY LOCALIZATION MODEL

This model overrides any older ambiguous wording:

**ONE SITE → ONE CORE → ONE DESIGN → ONE PAGE MODEL → ONE LANG LAYER → ONE LOGICAL CONTENT MODEL → ONE ADMIN → MANY LOCALES.**

Hard rules:
1. **All pages have the same design in all locales.** Same layout, component tree, CSS, typography, cards, spacing, responsive behavior, menus, reader shell, controls and functionality.
2. **Homepage/title page is the same page in every locale.** `/` and `/en/` use the same template/components/blocks/order/content model; only language values differ.
3. The same rule applies to every public route: books, book pages, readers, music, blog, author, contacts, security, `/mavik/`, announcements and all other pages.
4. **Localization of shell/canonical static pages is only through lang files.** No independent EN HTML/PHP/CSS/layout source.
5. **Static canonical pages have the same semantic text in every locale, only translated.** Example: `Автор` and `About` are the same content 1:1 in different languages.
6. **Editable content is one logical object** with localized payloads, not independent UA/EN objects.
7. **One Boss/admin for all locales.** Each content operation has explicit locale scope: one locale, several, or all active locales.
8. CORE/design changes automatically affect all locales.
9. Each logical content object has per-locale visibility/publication state.
10. If a locale translation/payload is absent or incomplete, that locale representation is **hidden**. No placeholders, no partial translation pages, no Ukrainian text under EN URLs.
11. A multi-locale release cannot be READY/PASS without desktop + mobile visual parity, lang-key parity and semantic parity audits.
12. Any separate locale shell/design is a release-blocking defect.

Primary authority:
- `SITE-LOCALIZATION-UNIFIED-DESIGN-CONTENT-CANON.md`
- `SITE-ALL-PAGES-LOCALE-PARITY-OVERRIDE.md`

## R216 REBUILD REQUIREMENTS

R216 must be rebuilt from R215 while retaining already approved R216 technical intentions where compatible:
- locale-aware publication state and isolated locale databases/bindings;
- shared physical content files;
- locale-unpublish instead of routine physical file deletion;
- declared locale targets for patches;
- migration of 10 verified EN editions into the locale model;
- database-only persistent deploy backup + short-lived transaction rollback;
- responsive media pipeline;
- MaVik/Mavik/Мавік SEO/entity package;
- query `mavik` long-term brand strategy.

But the rebuild must remove the separate EN public shell and implement all localization through the one shared page/design/lang architecture.

## SEO / ENTITY HARD CANON FROM R216 FORWARD

`MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name` = one entity.
Exact/ambiguous query `mavik` remains a permanent brand-search target.
Do not fake drone/DJI product relevance or use doorway/keyword spam.
Full authority: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`.

## English publication state

10 complete English editions already exist and were previously validated as R215 book patches. Do not retranslate them from scratch. R216 rebuild must absorb them into the unified locale model without losing them.

Active incomplete English target: The Sculptor.
Social / Соціальна: English STOP remains active until explicit author reversal.

## Other active canons

- Human-writing canon: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- Shared creative notebook: `mavik-sklad/files/00-ROBOCHYI-ZAPYSNYK-SPILNOHO-PYSMENNYA.md`
- Technical fiction canon: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoint rules: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`
- Simple-first canon: `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- Privacy-media canon: `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- Public-blog editorial canon: `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`
- Protected SEO canon: `mavik-sklad/files/PROTECTED-SEO-FILES.md`

## Conflict rule

The latest explicit user canon has highest priority. For site CORE, R215 remains authoritative until a rebuilt R216 passes the new parity gates and is explicitly approved by the author.
