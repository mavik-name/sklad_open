# MAVIK.NAME — R191 CANDIDATE CHECKPOINT

Updated: 2026-08-16
Status: **CANDIDATE — NOT CANONICAL UNTIL EXPLICIT USER APPROVAL**
Base: R190 candidate installed by user; far-warehouse canonical base remains R188 until explicit promotion.

## Main change

`Код легенди` is no longer implemented as a special announcement-detail page. It is one normal book object with one permanent book URL:

`/books/kod-lehendy/`

`placement=announcements` only controls where the same book is listed and temporarily suppresses reading/EPUB actions. Moving it back to Books restores normal book behavior without recreating the page or content object.

Legacy `/announcements/kod-lehendy/` redirects to `/books/kod-lehendy/`.

English follows the same object/route model: an untranslated placeholder exists at `/en/books/kod-lehendy/`; the old dedicated English announcement-detail page is retired and redirects to the book route.

## Migration of the user's existing manual announcement

R191 explicitly migrates the existing R190 stand-alone `kod-lehendy` announcement into the book object on the first Boss request after the upgrade:

- the owner-selected cover from the old announcement is copied to the book object's `cover_catalog` / `cover_home`;
- the duplicate generic announcement object is removed;
- the normal `/books/kod-lehendy/` landing is patched with that same cover;
- the Announcements index is regenerated and links to `/books/kod-lehendy/` using the same owner-selected cover.

The old special announcement detail page is not kept as a second content mechanism.

## Retained changes from R190/R189

- universal `← Back / Назад` navigation on internal pages;
- R190 English footer/copyright/coffee block and manual-language priority fix;
- R189 multilingual language-pack core;
- separate desktop/mobile home-book limits;
- drag/drop Boss ordering;
- book placement workflow Books ↔ Announcements;
- `Евакуація, або Дорогою до стабіка` and English translation queue;
- multipart server deploy support.

## Validation

- PHP lint: 25/25 PASS
- JavaScript parse: 16/16 PASS
- JSON/XML: PASS
- EPUB CRC: 20/20 PASS
- release manifest: 602/602 files present
- `/_site-state/` excluded from release managed files
- Code Legend unified-book model: PASS
- legacy owner-cover migration smoke: PASS
- duplicate stand-alone announcement removal: PASS
- Announcements card after migration uses owner-selected cover and links to `/books/kod-lehendy/`: PASS
- multipart deploy through the R190 deploy engine: PART-1 waits; PART-2 assembles and deploys R191; 602/602 files copied; protected state preserved; pending parts after success: 0
- reverse multipart order was also smoke-tested earlier in the R191 work and the server correctly waited for the missing part before deploying.

## Multipart release files

`191 Збірка_Сайт_MULTILANG_PART-1.zip`
- size: 27,167,057 bytes
- SHA-256: `fd4d8bf446b57b2287f2fe8af1c59610724e892195863ed490625da662f1e52b`

`191 Збірка_Сайт_MULTILANG_PART-2.zip`
- size: 23,379,368 bytes
- SHA-256: `8c2d9c624e0b53940d376ce310577e1fbfbf4fd882ffca39e2aa91d6c7b150da`

Multipart set ID: `r191-1184d83ac18aa99f`
Full release manifest SHA-256: `1184d83ac18aa99f73a051341d36e5a9ad530269ae91757be53c05580c38a4ca`
Managed files: **602**.

## Binary-storage note

The connected GitHub channel records the exact release metadata/checkpoint but does not upload these ZIP binaries in this session. Do not claim the binary ZIPs themselves are stored on GitHub unless later verified separately.

## Canon rule

Do **not** replace canonical R188 in `releases/CANON.md` yet. Promote R191 only after the user installs/tests both ZIP parts and explicitly says the result is OK/canonical.