# MAVIK.NAME — R237 RELEASE CHECKPOINT

Date: 2026-08-31
Status: **AUTHOR APPROVED / OFFICIAL / CANONICAL**
Base: exact canonical `R236.zip`

## Input identity
- R236 SHA-256 verified before work:
  `aea84cdc069b5cf695d628698d67d3e2c0c9c662b30b1734405e1ef7ee83f0a6`

## R237 artifact
- file: `R237.zip`
- SHA-256: `35a9a05fe45523916b702ed07775e6f6127c76672a15e9da8dd868d23ff583bd`
- ZIP entries: 402
- uncompressed bytes: 46278139

## Included changes
1. Permanent removal of legacy English branch at HTTP layer:
   - root `.htaccess`: `RewriteRule ^en(?:/.*)?$ - [G,L,NC]`
   - release header updated to `X-MaVik-Release: R237`
   - no `/en/` tree, no `hreflang=en`, no public English refs.
2. Reader structure repair:
   - `Петля` duplicate/invalid heading structure corrected;
   - prose paragraph no longer promoted into H2/TOC;
   - reader normalization runs after LIVE CONTENT FIRST restore so old live content cannot reintroduce the defect;
   - reader structure gate catches prose-like headings, missing TOC targets and duplicate reader IDs.
3. Blog/public metadata hardening:
   - valid BlogPosting/Breadcrumb structured data preserved/improved;
   - OG/Twitter image metadata and image dimensions normalized;
   - blog technical migration works on preserved live posts without replacing their text;
   - fixed undefined `$language` in blog generator path.
4. Crawl and media integrity:
   - no broken internal references in static validation;
   - no missing public image dimensions;
   - EPUB set validates 21/21.
5. LIVE CONTENT FIRST preserved throughout deploy simulation.

## Validation
- ZIP integrity: PASS (`unzip -t`: no errors).
- Managed files: 273; missing: 0.
- `en_dirs`: 0.
- `hreflang_en`: 0.
- HTML English refs: 0.
- Public HTML: 107.
- JSON-LD blocks parsed: 85; errors: 0.
- Missing image dimensions: 0.
- Reader prose headings: 0.
- TOC missing targets: 0.
- Duplicate reader IDs: 0.
- Broken internal refs: 0.
- EPUB: 21; errors: 0.
- Static SEO gate: PASS, 0 issues.
- Deploy simulation: copied 273, removed 0; migration completed.
- Post-restore reader normalization: scanned 21; one Petlia collapse applied in dirty-live simulation, then clean on second pass.

## Canon rule
**R237 is now the sole canonical working/recovery/reference base.**
All future site changes must start only from R237 until the author explicitly approves a newer canonical release. Pre-R237 site releases are historical/obsolete and must not be used as source-of-truth without explicit rollback instruction.

Canonical checkpoint: `mavik-sklad/files/R237-CANON.md`.
