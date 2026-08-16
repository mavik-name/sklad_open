# MAVIK.NAME — R192 MULTILANG CANON CHECKPOINT

Updated: 2026-08-16 21:41 +03:00
Status: **CANONICAL — EXPLICITLY APPROVED BY USER**
Previous canon: R188
Canonical chain: R188 → R189 → R190 → R191 → **R192**

## Canonical release

R192 is the current canonical full-site release for mavik.name.
It is transported as two ZIP archives handled by Boss as one logical release:

`192 Збірка_Сайт_MULTILANG_PART-1.zip`
- size: 27,168,114 bytes
- SHA-256: `2dbe799249e833eb5f9980f862bc02117ffafbfae0bc052b57fe9740467784b8`

`192 Збірка_Сайт_MULTILANG_PART-2.zip`
- size: 23,379,542 bytes
- SHA-256: `daf69e57df27ada7f1d5bb38416c298195fe8225b1e996e368872338b8d9759a`

Release manifest:
- release: 192
- base_release: 191
- managed files: **603**
- manifest SHA-256: `2baa602e6d542f2aa443d8af2abe922e3817555f1a480c5c1fb77a1f50f60620`
- multipart set id: `r192-2baa602e6d542f2a`

User installed the multipart release through Boss and explicitly approved it on 2026-08-16 at 21:41 +03:00.

## Architectural canon

- one multilingual core;
- one Boss admin;
- one data model;
- languages are language packs/config, not separate site copies;
- Ukrainian is the root version; foreign versions use prefixes such as `/en/`;
- no Google Translate / translator UI / translator fallback;
- explicit language URL or manual selection has priority over saved/browser language;
- browser autodetect is only a fallback when no explicit/manual/saved choice exists;
- native language buttons remain as manual fallback/override;
- menu and pages support drag & drop;
- homepage book count is configured separately for desktop and mobile;
- universal in-content `← Назад / Back` navigation exists on internal pages, outside the main menu;
- `/_site-state/` is protected live state and is never overwritten by normal deploy.

## Books / announcements canon

A book remains one book object and one book page regardless of placement.

- placement/status determines whether the object appears in Books or Announcements;
- announcement status does **not** use a special page renderer;
- moving back to Books does not recreate page, cover, description or metadata.

`Код легенди`:
- canonical page: `/books/kod-lehendy/`;
- current placement: announcements;
- manuscript was sent to a publisher **for review**;
- never describe it as accepted or published until the user explicitly changes that status;
- legacy `/announcements/kod-lehendy/` redirects to the canonical book page;
- internal cards link directly to `/books/kod-lehendy/`.

`Евакуація, або Дорогою до стабіка`:
- present in the Ukrainian library;
- included in the English translation queue.

## Support / coffee canon

Ukrainian support remains the existing Privat24/QR flow.

Foreign-language support is provider-agnostic:
- public config: `assets/app/international-support.json`;
- R192 ships it disabled with no methods, so no empty support UI appears;
- Privat24 and Ukrainian QR support are not shown in foreign versions;
- future Western provider data is added by a small content/config patch, not a core rebuild;
- supported public methods include HTTPS links and copyable public values;
- secret API keys/tokens must never be placed in this public config.

## Validation recorded before approval

- PHP: 25/25 PASS
- JavaScript: 16/16 PASS
- JSON: 14/14 PASS
- XML: 2/2 PASS
- EPUB CRC: 20/20 PASS
- public local refs checked: 4,654; broken: 0
- `/en/` static Privat24/payment-QR references: 0
- `site-shell.js` Privat24/payment-QR references: 0
- support-disabled smoke: PASS
- future support data-patch smoke: PASS
- multipart ZIP integrity: PASS
- PART-1 → PART-2 deploy: PASS
- PART-2 → PART-1 deploy: PASS
- 603 files copied in smoke deploy
- `/_site-state/` preserved
- backup created
- pending multipart staging after successful deploy: 0

## Binary-storage note

The GitHub connector records canonical metadata/checkpoints but does not imply the ZIP binaries themselves are physically stored in GitHub.
The approved release is identified by the exact archive names, sizes and SHA-256 values above.

## Rule for all next site work

All future structural or functional site changes start **only from canonical R192**, until the user explicitly approves a newer canonical release.
