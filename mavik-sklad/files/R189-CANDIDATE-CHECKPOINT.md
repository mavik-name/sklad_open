# MAVIK.NAME — R189 CANDIDATE CHECKPOINT

Updated: 2026-08-16 19:58 +03:00
Status: **CANDIDATE — NOT CANONICAL UNTIL EXPLICIT USER APPROVAL**
Base: canonical `R188 MULTILANG CORE`

## What is included

R189 is the next full-site candidate built from R188. It includes all changes agreed with the user after R188:

- universal language-pack architecture; a new language pack registers a new language without copying the site/core;
- browser-language auto-selection first;
- native language buttons remain only as manual fallback/override;
- no Google Translate / translator UI / translator fallback;
- English parity model for all Ukrainian public content: books, blog, announcements, static pages, copyright, privacy/legal/service texts and language UI labels;
- drag-and-drop ordering for Boss Menu and Pages;
- a book has a placement state `books` or `announcements`; moving it to announcements removes it from the public Books catalog/home books and shows the same object on Announcements;
- `Код легенди` is announcement-only because the manuscript was sent to a publisher **for review**; do not say it was accepted or published;
- `Евакуація, або Дорогою до стабіка` added as a Ukrainian book and added to the English translation queue;
- homepage book count is independently configurable for **desktop** and **mobile**;
- R189 Boss includes multipart deployment support for **future** large releases.

## Homepage book count state

New state fields:
- `home.books_limit_desktop`
- `home.books_limit_mobile`

R188 legacy `home.books_limit` is migrated safely: its value becomes both desktop and mobile until the owner saves separate values.

## Important bootstrap correction

Canonical R188 deployer understands only full releases. It does **not** recognize `.mavik-release-part.json` before R189 is installed. Therefore R189 cannot bootstrap itself by uploading PART-1/PART-2 directly to the live R188 Boss.

For the actual R188 → R189 upgrade, use the **single classic full ZIP** below. It was reduced below the practical PHP `50M` upload limit by removing redundant fully opaque alpha channels from four PNG covers. RGB pixels were verified identical; there is no visible image change.

After R189 is installed once through the classic ZIP, its Boss can accept multipart releases in the future.

## Candidate file for live installation

`189 Збірка_Сайт_MULTILANG_CLASSIC.zip`
- size: **50,572,944 bytes** (~48.23 MiB)
- SHA-256: `449fb9e53971b3a05412e99086f741260895fdccab8ab060ba9bfd7c8a9d9304`
- managed files: **600**

Validated using the deploy validator from canonical R188:
- archive opens and passes classic required-file validation;
- ZIP entries: 798;
- release manifest: R189;
- managed files present: 600/600;
- `index.html`: present + managed;
- `boss/index.php`: present + managed;
- `_site-admin/deploy.php`: present + managed.

## Previous multipart transport files

The earlier R189 PART-1/PART-2 files are **not to be used for the first upgrade from R188**. They remain only as an internal test of the R189 multipart engine.

Earlier multipart server smoke had passed:
- PART-1 -> waiting for PART-2;
- PART-2 -> deploy R189;
- copied 600/600 managed files;
- protected `/_site-state/` preserved;
- pending multipart parts after success: 0.

That smoke was performed with the R189 deployer already present and therefore did not prove bootstrap compatibility with live R188. This checkpoint corrects that distinction explicitly.

## Other validation completed

- PHP lint: 25/25 PASS
- JavaScript parse: 15/15 PASS
- JSON: PASS
- XML: PASS
- EPUB CRC: 20/20 PASS
- public local internal refs checked: broken 0
- Google Translate/UI technical markers in core/admin/assets/en/root: 0
- separate desktop/mobile homepage settings present
- four optimized PNG covers: alpha channel was 255 everywhere before removal; RGB pixel identity verified exactly after rewrite.

## Binary-storage note

The GitHub connector available in this session can write UTF-8 text files but not the ~50 MB release ZIP. Therefore this checkpoint records the exact filename, size and SHA-256. Do not claim the binary itself is stored in GitHub unless later verified separately.

## Canon rule

Do **not** replace canonical R188 in `releases/CANON.md` yet. Promote R189 only after the user installs/tests the classic ZIP and explicitly says it is OK / canonical.