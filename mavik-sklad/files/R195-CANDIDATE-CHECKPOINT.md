# R195 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL UNTIL USER APPROVES AFTER DEPLOY/LIVE SMOKE**

Base: R194 installed/test candidate; R193 remains the last release explicitly declared canonical by the user until R195 is approved.

Final candidate build: 2026-08-17 13:05 Europe/Kyiv.

## R195 functionality

- Boss header reads installed `.mavik-release.json` and shows actual release number plus build date/time.
- Boss → Books: compact single drag&drop list; the existing list itself is the ordering UI. `Add book` is separate.
- Boss → Music → Collections: Edit / Hide-or-Show / Delete; deleting a collection preserves the track files.
- Boss → Music → Music for books: All tracks / No music / visible collections / individual visible tracks. Individual track assignment uses `track:<id>`.
- If an already assigned collection or track is later hidden, the assignment is preserved but public playback returns zero tracks until it is shown again; it does not unexpectedly fall back to the whole catalog.
- Static pages: sections, section/page drag&drop, rich-text, preview, page and section visibility, page trash, section trash, restore and guarded permanent deletion.
- Section visibility and page visibility are independent. Hiding/showing a section never overwrites the page's own hidden flag; public visibility is the combined state.
- Menu, sitemap and rendered `noindex` state respect section + page status.
- Existing SEO/IndexNow/Bing tools retained and hardened.

## Defects found and fixed during adversarial audit

1. Missing reciprocal hreflang on `/en/about/`, `/en/privacy/`, `/en/copyright/` → fixed on both language sides.
2. Hreflang on English `noindex` placeholder pages → removed; generators now emit hreflang only for indexable language pages.
3. Stale language asset cache-busters → normalized to R195 for the changed language CSS/JS/data references, including root index and 404.
4. SEO crawler could inflate “URLs outside sitemap” with noindex pages and lose redirect diagnostics after curl follow → fixed; index-only sitemap diagnostics and explicit final-URL redirect tracking added.
5. SEO crawler now also reports missing title, missing description, H1 problems and canonical mismatch.
6. Section hide/show previously risked overwriting individual page hidden state and menu state → fixed with effective-visibility logic.
7. Section order and unsectioned-page order were missing from the first R195 candidate → added.
8. Hidden music assignment previously could fall back to all tracks → fixed; hidden assignment now yields no public tracks while preserving the relationship.
9. Release manifest files are deployment metadata and are now explicitly denied from public HTTP access by root `.htaccess`.

## Final validation

- Managed files: 605; missing from package: 0.
- PHP lint: 26/26 PASS.
- JavaScript syntax: 16/16 PASS.
- JSON parse: 13/13 PASS.
- Public HTML inspected: 180.
- Indexable HTML: 61.
- Duplicate title groups: 0.
- Missing indexable titles: 0.
- Missing indexable meta descriptions: 0.
- H1 issues: 0.
- Canonical mismatches: 0.
- Duplicate canonical targets: 0.
- Duplicate HTML IDs: 0.
- JSON-LD parse errors: 0.
- Sitemap URLs: 61; duplicates 0; missing files 0; noindex-in-sitemap 0; canonical mismatches 0.
- Hreflang-enabled indexable pages: 8; target/reciprocity issues 0.
- Public internal href/src references checked: 4,256; broken 0.
- Broken OG/Twitter image references: 0.
- Stale changed-language cache references: 0.
- EPUB files: 20; CRC errors 0.
- Book structure: 20 completed releases + 1 beta reader + 1 announcement object.
- Boss literal form actions without handlers: 0.
- POST forms missing CSRF: 0.
- Nested/unclosed forms: 0.
- Runtime music assignment tests PASS: all / none / visible collection / hidden collection / visible track / hidden track.
- Multipart ZIP CRC: PASS for both parts.

## Final multipart identity

- Full manifest SHA-256: `7f4c346fda9d403e03b9643dd5f96009625ca5343f4576ef87491c2983403f0a`
- Multipart set id: `r195-7f4c346fda9d403e`
- PART-1 SHA-256: `776df70614921563725cc6fa6a28b27cef843492941d0abd9773a241e479794c`
- PART-2 SHA-256: `7cf5ce3a7f0f1e4719e3c5a7eace372acb9862050674a0b90089511f25b3720e`

## Artifacts

- `/Сайт/195 Збірка_Сайт_CMS-SEO_PART-1.zip`
- `/Сайт/195 Збірка_Сайт_CMS-SEO_PART-2.zip`

Next: deploy both parts through Boss, then run the live crawler/robot smoke against `https://mavik.name/`. Only after the live pass should the user explicitly approve R195 as canonical.