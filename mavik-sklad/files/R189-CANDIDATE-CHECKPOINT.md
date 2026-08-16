# MAVIK.NAME — R189 CANDIDATE CHECKPOINT

Updated: 2026-08-16
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
- full releases are transported as two multipart ZIPs; PART-1 stages only and PART-2 validates/assembles/deploys the complete release.

## Homepage book count state

New state fields:
- `home.books_limit_desktop`
- `home.books_limit_mobile`

R188 legacy `home.books_limit` is migrated safely: its value becomes both desktop and mobile until the owner saves separate values.

## Validation completed

- PHP lint: 25/25 PASS
- JavaScript parse: 15/15 PASS
- JSON: 13/13 PASS
- XML: 2/2 PASS
- EPUB CRC: 20/20 PASS
- public local internal refs checked: 4608; broken: 0
- Google Translate/UI technical markers in core/admin/assets/en/root: 0
- both multipart ZIPs: `unzip -t` PASS
- full internal test ZIP: `unzip -t` PASS
- multipart server smoke:
  - PART-1 -> waiting for PART-2
  - PART-2 -> deploy R189
  - copied 600/600 managed files
  - protected `/_site-state/` preserved
  - pending multipart parts after success: 0
  - separate desktop/mobile homepage settings present after deploy

## Candidate files

`189 Збірка_Сайт_MULTILANG_PART-1.zip`
- size: 27,222,623 bytes
- SHA-256: `2bb256157868846170f93e11db4c16526f72b86279f3c8d908592ba10b6ebc4f`

`189 Збірка_Сайт_MULTILANG_PART-2.zip`
- size: 27,222,300 bytes
- SHA-256: `9f6648f84d44ce7248cb17c759bfa031e2d64d9edd744e414a36248f1639d65c`

Internal full-test ZIP:
`189 Збірка_Сайт_MULTILANG_FULL_TEST.zip`
- size: 54,440,703 bytes
- SHA-256: `7d54b39c4166c0db2ae4c570172c6da36d40dcdde01460a0be32543caab2e924`
- not intended for Boss upload because it exceeds the practical upload limit.

Multipart set ID: `r189-e71f69ffb72a3f8e`
Full release manifest SHA-256: `e71f69ffb72a3f8ede10e46c8e88227bfc9506f4d35f8c276f322d905339d336`
Managed files: **600**.

## Binary-storage note

The GitHub connector available in this session can write UTF-8 text files but not these ZIP binaries. Therefore this checkpoint records exact filenames, sizes and SHA-256 values. Do not claim the binary ZIPs themselves are stored in GitHub unless that is later verified separately.

## Canon rule

Do **not** replace canonical R188 in `releases/CANON.md` yet. Promote R189 only after the user installs/tests the two parts and explicitly says it is OK / canonical.