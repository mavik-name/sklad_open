# R194 CMS/SEO CANDIDATE CHECKPOINT

Status: **CANDIDATE / NOT CANONICAL**
Base: **canonical R193**
Date: 2026-08-17

## Implemented

- Boss → Books: one existing book list is also the drag-and-drop ordering list; no duplicate sort list; explicit `Save order` in the same list.
- `Add book` is a separate Books submenu.
- Boss → Announcements: book objects placed into announcements are visibly listed as the same book objects; empty standalone-announcement ordering no longer shows a meaningless Save order action.
- Music collections: hide/show control added; hidden collections are excluded from public `music-data.php`; hidden tracks are also excluded from public API output; hidden collections are not offered for book assignment.
- Static pages upgraded to CMS hierarchy:
  - create section;
  - add page to section;
  - drag-and-drop order inside a section;
  - rich-text editor;
  - preview;
  - hide/show page;
  - hide/show section;
  - delete section while either moving its pages out or moving them to trash;
  - soft-delete page to trash, restore, permanent delete.
- SEO synchronization for managed static pages:
  - public managed pages are synchronized into sitemap;
  - hidden/deleted pages are excluded;
  - managed menu export skips hidden/deleted page paths;
  - managed pages have per-locale canonical and hreflang links;
  - page changes trigger IndexNow when available.
- Existing R193 SEO/Bing/IndexNow crawler tooling retained.
- Language fallback behavior from current candidate retained: selector hidden when native localization resolved; desktop fallback uses `文` dropdown.
- Duplicate-title diagnostics ignore `noindex` pages; local indexable HTML check: 0 duplicate-title groups.

## Validation

- PHP lint: 26/26 PASS.
- JSON parse: PASS.
- JavaScript syntax check: PASS.
- Multipart manifest: PASS.
- ZIP CRC: both parts PASS.
- Full managed-file union across both ZIP parts: PASS (no missing/extra payload files).

## Candidate files

- `194 Збірка_Сайт_CMS-SEO_PART-1.zip`
- `194 Збірка_Сайт_CMS-SEO_PART-2.zip`

Copies saved in ChatGPT Library `/Сайт/`.

## Canon rule

R193 remains canonical until the user explicitly approves R194 after deployment/testing. Do not silently promote R194.
