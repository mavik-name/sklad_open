# MAVIK.NAME — R236 CANON

Date: 2026-08-31
Status: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**

## Identity
- File: `R236.zip`
- SHA-256: `aea84cdc069b5cf695d628698d67d3e2c0c9c662b30b1734405e1ef7ee83f0a6`
- Base: `R235`

## Author rule
R236 is the sole canonical release. Everything before R236 is obsolete for current site work and must not be used as working, recovery or reference source unless the author explicitly orders otherwise.

## Canonical architecture
- Public site: Ukrainian-only.
- No `/en/` branch in the canonical release.
- No public English hreflang branch.
- Polish `Ewakuacja` remains a separate public direct-link resource, not an international site branch.
- `discover` retired to `/shcho-pochytaty/` through 301.
- LIVE CONTENT FIRST deploy protection retained.

## R236 functional changes
1. Shared editor native select controls fixed.
2. Text color selectors preserve the selected text range.
3. Background highlight selectors preserve the selected text range.
4. Shared internal-link picker works across common editors.
5. Internal picker includes public site pages/books/blog; direct-link books excluded intentionally.
6. External HTTP(S) links open in a new tab; internal mavik.name paths stay in current tab.
7. Shared editor cache key: `v=236`.

## Validation inherited/confirmed
- PHP syntax: 32/32 PASS.
- JS syntax: 16/16 PASS.
- ZIP validator: PASS.
- R235 static gate before R236: JSON-LD parse 85/85 PASS; international `en_dirs=0`, `hreflang=0`, `en_sitemap=false`.

## Post-canon live hotfix
On 2026-08-31 the production root `.htaccess` was manually updated so all legacy `/en/*` URLs return **HTTP 410 Gone**.
This live hotfix is NOT allowed to be lost: the next full release derived from R236 must contain the same 410 rule.

## Known confirmed issue after canonization
LIVE `/books/petlia/read/` has reader heading/TOC pollution:
- duplicate `Глава четверта` after `Глава четверта: Сергій`;
- ordinary prose beginning `Частина підійшла до Лідії та Олени...` is exposed as H2/TOC entry.

Next release must fix this and run a reader-wide heading/TOC integrity validation.

## Reporting rule
Always separate:
- LIVE — checked on production;
- CANONICAL BUILD — verified in R236;
- NOT VERIFIED — assumptions, caches, third-party audit claims.
