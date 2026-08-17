# R201 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL**

Canonical CORE remains **R200** until explicit user approval of R201.

Built: 2026-08-17 17:02 Europe/Kyiv.
Base release: R200.

## Scope — BUGFIX ONLY

R201 contains only two functional fixes requested by the user:

1. **Book order persistence**
   - `save_book_order()` now immediately reads back the saved JSON and rejects the operation if the persisted order does not match.
   - On submit, an active drag is finished before serializing the order.
   - The accepted book order is mirrored into the live Boss content manifest while preserving non-catalog book slots.
   - After saving, Boss runs the normal index rebuild, so `/books/` and the homepage are physically generated in the saved order instead of relying only on client-side JavaScript reordering.
   - A final readback check verifies the saved order after rebuild.

2. **Desktop donation QR modal viewport containment**
   - On desktop (`min-width: 781px`) the donation modal is constrained to the visible viewport.
   - The modal card uses `max-height: calc(100dvh - 48px)` and internal vertical scrolling so the lower QR/content cannot disappear below the visible screen/taskbar area.
   - Mobile donation/QR behavior is unchanged.

## Files changed vs R200

Exactly 4 files differ:
- `.mavik-release.json` — R201 metadata only;
- `boss/index.php` — book-order bugfix;
- `index.html` — desktop donation modal containment;
- `sw.js` — cache namespace bumped from `mavik-shell-r200` to `mavik-shell-r201` only; service-worker behavior unchanged.

## Validation

- PHP lint: 26/26 PASS.
- JavaScript syntax: 17/17 PASS.
- JSON parse: PASS.
- sitemap.xml and blog/feed.xml XML parse: PASS.
- Public HTML internal references checked: 4319, broken: 0.
- Indexable duplicate title groups: 0.
- sitemap URLs: 61.
- R201 order persistence checks: PASS.
- Desktop donation modal max-height/scroll checks: PASS.
- Mobile-only audio reader and mobile-only PWA install guards preserved: PASS.
- Multipart ZIP CRC: PASS for both parts.

Release manifest SHA-256:
`90b85cab642798820aab2010512ef14df9778fe05f83232a2a1f8cde7234bc5d`

ZIP SHA-256:
- PART-1: `9b5dbcc481aae0e807cc9c8aaa156c24faf2b7e9f2671aa74d332fda0c5ebb2e`
- PART-2: `4976f9ac3cb9a28e73a9aedd9d4fe7f7c5dc2a3f0064d5ef440ca912329e1deb`

Multipart set id:
`r201-90b85cab64279882`

## Artifacts

- `/Сайт/201 Збірка_Сайт_BUGFIX-ORDER-QR_PART-1.zip`
- `/Сайт/201 Збірка_Сайт_BUGFIX-ORDER-QR_PART-2.zip`

Next: deploy both parts and verify on the live site that book order survives reload and the desktop donation window remains fully usable above the bottom of the viewport. Canonicalize R201 only after explicit user approval.