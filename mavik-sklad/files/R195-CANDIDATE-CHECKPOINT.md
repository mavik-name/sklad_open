# R195 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL UNTIL USER APPROVES AFTER DEPLOY/SMOKE**

Base: R194 candidate, preserving R193 as last explicitly canonical base until a newer release is approved.

Built: 2026-08-17 12:42 Europe/Kyiv.

## Implemented in R195

- Boss top header reads installed `.mavik-release.json` and always shows actual release number plus build date/time.
- Boss → Books: compact single drag&drop list; same list is the ordering UI, no duplicate sorting list.
- Boss → Music → Collections: each collection has Edit / Hide-or-Show / Delete actions; delete removes the collection object while keeping track files.
- Boss → Music → Music for books: selector now offers All tracks, visible collections, and every visible individual track. Individual track assignment is stored as `track:<id>` and is understood by public `music-data.php`.
- Hidden collections/tracks are excluded from book assignment choices.
- Existing R194 CMS/SEO work is preserved: static-page hierarchy, rich text, visibility/trash/preview, SEO synchronization, IndexNow/SEO tooling, and duplicate-title fixes.

## Validation

- PHP lint: 26/26 PASS.
- JavaScript syntax: 16/16 PASS.
- JSON parse: 13/13 PASS.
- Indexable HTML duplicate title groups: 0.
- Multipart ZIP CRC: PASS for both parts.
- Shared full manifest SHA-256: `0ee6c40037da113af33f70dc23b442e5730c4b5453c6ad0e92b8969f4bb68640`.
- Multipart set id: `r195-0ee6c40037da113a`.

## Artifacts

- `/Сайт/195 Збірка_Сайт_CMS-SEO_PART-1.zip`
- `/Сайт/195 Збірка_Сайт_CMS-SEO_PART-2.zip`

Next: deploy both parts through Boss, run live smoke/SEO audit, then user may explicitly approve R195 as canonical.
