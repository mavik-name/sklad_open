# MAVIK.NAME — R237 CANON

Date: 2026-08-31
Status: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**

## Identity
- File: `R237.zip`
- SHA-256: `35a9a05fe45523916b702ed07775e6f6127c76672a15e9da8dd868d23ff583bd`
- Base: exact canonical `R236.zip`
- Author approval: 2026-08-31

## Canon rule
R237 is now the sole canonical, working, recovery and reference base for mavik.name.
All pre-R237 site releases, candidates, patches and checkpoints are historical/obsolete and must not be used as source-of-truth unless the author explicitly orders rollback to an older artifact.
All future site changes must start only from R237 until the author explicitly canonizes a newer release.

## Included R237 changes
1. Legacy English branch permanently retired at HTTP layer:
   - `.htaccess`: all `/en/*` return HTTP 410 Gone;
   - no `/en/` tree, no `hreflang=en`, no public English refs;
   - `X-MaVik-Release: R237`.
2. Reader structure repair:
   - `Петля` invalid duplicate heading/TOC structure corrected;
   - prose paragraph no longer promoted into H2/TOC;
   - post-restore normalization prevents live content from reintroducing the defect;
   - reader structure gate detects prose-like headings, missing TOC targets and duplicate reader IDs.
3. Metadata/SEO hardening:
   - valid BlogPosting/Breadcrumb JSON-LD preserved/improved;
   - OG/Twitter image metadata normalized;
   - public images have explicit dimensions;
   - blog generator undefined `$language` path fixed.
4. Crawl/media integrity:
   - broken internal refs: 0;
   - missing public image dimensions: 0;
   - EPUB validation: 21/21 PASS.
5. LIVE CONTENT FIRST deploy preservation retained and validated.

## Validation
- ZIP integrity: PASS.
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
- Deploy simulation: PASS.
- Post-restore reader normalization: PASS.

## Language architecture
- Public architecture: Ukrainian-only.
- Polish `Ewakuacja` remains a separate public direct-link resource and is not an international branch.

## LIVE CONTENT FIRST
Canonical ZIP is the code/structure baseline. Newer Boss-managed mutable production content must be preserved during full deploy unless the author explicitly orders otherwise.
