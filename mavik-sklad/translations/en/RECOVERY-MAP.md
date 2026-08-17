# ENGLISH TRANSLATION RECOVERY MAP

Updated: 2026-08-17
Canonical site/core: **R193**
Continuation canon: `mavik-sklad/translations/en/CONTINUATION-CANON.md`
Safety branch: `backup/english-translations-2026-08-17`

## Recovery principle

Do not conclude that translation work is lost after checking only one directory. Search current content, backup branch, Git history/tree/blob objects, historical translation workspaces as read-only recovery sources, and File Library.

Old site-release numbers do not invalidate translation content.

## Current main locations

- Complete recovered books: `mavik-sklad/translations/en/books/`
- Partial work: `mavik-sklad/translations/en/partial/`
- Active/completed working translations: `mavik-sklad/translations/en/work/`
- Protected Social English content: `mavik-sklad/files/r188-social-en-ch08-10.md`, `r188-social-en-ch11-13.md`, `r188-social-en-ch14-16.md`

## Immutable recovered English book trees

Original archival source branch: `r188-english-work`
Original source root: `mavik-sklad/builds/R188-EN-STAGING/en/books/`

The following immutable directory tree SHAs are the physically recovered English content:

- `bezimenni` — `4460f0ef7ca9e8040bf28c0c108ac01d75bd992a`
- `liudyna-bez-akaunta` — `4d32678995ae6b72a723f3208f6450d11eb2a026`
- `mamo-zhyty` — `36c8b8612940a9613a11c112c3d39a72d39642fa`
- `paterny-samorefleksii` — `b2e020176dfdb1abb4d3fe89e48d8442ee911f24`
- `pishchynka-solya` — `ff5fb6be813563cfa359c78311e833a6f552d36d`
- `transfer` — `0603631f2c949888a4d7dccd86a361c369f9cbb4`
- `ty-i-ia` — `39d72d3b515fe5f9af4c84f5a0c54d2890c3caf1`
- `vidmova-avansom` — `5c29c777037897e06ceb5658e9aaa4ba30cfc387`
- `yevanheliie-vid-makariia` — `d02185641bfaa71d60f40cecfbc3af91b1d3fb72`

Partial only:
- `try-romany-yaki-nikhto-ne-chytaie` — `08966db4996b7685da2a9582b5d27548fc58af70` — Sections 1–8 only.

Generic untranslated placeholder tree on the archival branch was `57291440dfad9b509a3eac1017da4f28ee7d8b94`; it is not a translation and must not be treated as one.

## Additional protected current work

### Evacuation
`mavik-sklad/translations/en/work/evakuatsiia/`
All eight stories physically saved; translation text complete.

### The Sculptor
`mavik-sklad/translations/en/work/skulptor/`
- Chapter 1: parts 1–5 complete.
- Chapter 2: parts 1–5 saved.
- exact continuation after Ukrainian source line `— Але будете.`

### Social
Three protected content files remain in `mavik-sklad/files/` despite historical `r188` prefixes. They are translation content, not obsolete release artifacts.

## Historical recovery commits

Key recovery milestone commit:
`ffd3b9cfeb6e62273385b16d9f2eb0e313837514` — recovered nine complete English translations and partial Three Novels.

The existence of later site cleanup/removal commits does not erase immutable Git history or tree/blob objects. Use them for recovery only; do not restore obsolete site architecture from them.
