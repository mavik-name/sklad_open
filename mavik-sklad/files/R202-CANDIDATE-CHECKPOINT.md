# R202 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL**

Canonical frozen CORE remains **R200** until explicit user approval of a newer release.

Base chain: R200 canonical → R201 bugfix candidate → R202 candidate.

Built: 2026-08-17 17:29 Europe/Kyiv.

## Purpose

Remove obsolete framed/drawer UI patterns requested by the user and make the announcement-status reason editable.

## R202 changes

### Privat24 QR
- Removed the separate enlarged-QR modal/frame entirely.
- The donation block itself stays inside the viewport.
- Two QR codes remain inside the donation block.
- Clicking one QR expands that QR only to the full available width of the donation block.
- Clicking it again collapses it; clicking the other QR switches the expanded item.
- Behavior is the same principle on mobile and desktop; no fullscreen QR page/frame is created.

### Boss book editor
- Removed the fixed bottom `book-edit-drawer` behavior.
- `Редагувати книгу / Зберегти книгу` is now an ordinary inline Boss panel, not a fixed overlay/drawer.

### Announcement reason
- Added persistent `announcement_reason` to book content state.
- Existing `Код легенди` is seeded with: `Рукопис передано у видавництво на розгляд · поки лише анонс`.
- In Boss → Анонси, each book in announcements has a `Чому книга в анонсах` field and `Зберегти причину` action.
- The same field is available while editing an announcement book.
- The saved reason is used on the public book page instead of the previously hard-coded announcement note.
- When a book is first moved to announcements with no reason, the previous text is used as the safe default.

### Frame audit
- Literal `<iframe>`, `<frame>` and `<frameset>` elements in the R202 site tree: **0**.
- The separate QR modal/frame and the fixed Boss book-edit drawer were removed as requested.

## Scope control

Compared with R201, only 5 files changed:
- `.mavik-release.json`
- `_site-admin/state-defaults/boss-content.json`
- `boss/index.php`
- `index.html`
- `sw.js` (cache namespace bump only)

No unrelated feature or architecture change was made.

## Validation

- PHP lint: 26/26 PASS.
- External JavaScript syntax: 17/17 PASS.
- Homepage inline scripts: PASS.
- Public internal refs checked: 4318; broken: 0.
- Sitemap URLs: 61.
- Indexable duplicate-title groups: 0.
- No literal iframe/frame/frameset elements: PASS.
- No QR modal markup / no `qr-only-frame`: PASS.
- No `book-edit-drawer`: PASS.
- Announcement reason handler/editor/seed: PASS.
- Multipart ZIP CRC: PASS for both parts.

Release manifest SHA-256:
`a291c23e4e4cf9f1f2395c051393fe654977fe94a751241b1ba5d98508cf0ab7`

ZIP SHA-256:
- PART-1: `ab804f7ec2aac54db960f0ca601dee418b099b4b0d6c27923cbad2bfb7668ca0`
- PART-2: `1f8a8fa645855faaf6b62f56dc2ef4e55341654ea2f59bd8c36e563981d33417`

Multipart set id:
`r202-a291c23e4e4cf9f1`

## Artifacts

- `/Сайт/202 Збірка_Сайт_NO-FRAMES-ANNOUNCE_PART-1.zip`
- `/Сайт/202 Збірка_Сайт_NO-FRAMES-ANNOUNCE_PART-2.zip`

Next: deploy both parts and verify QR expansion, ordinary inline book editor, and editing/saving the announcement reason. Canonicalize only after explicit user approval.