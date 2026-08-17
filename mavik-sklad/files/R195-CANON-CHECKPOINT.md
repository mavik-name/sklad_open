# R195 CANON CHECKPOINT

Status: **CANONICAL**
Approved by user: **2026-08-17**

R195 is the only active structural/functional base for MAVIK.NAME until the user explicitly approves a newer release.

## Artifacts

- `195 Збірка_Сайт_CMS-SEO_PART-1.zip`
  - SHA-256: `776df70614921563725cc6fa6a28b27cef843492941d0abd9773a241e479794c`
- `195 Збірка_Сайт_CMS-SEO_PART-2.zip`
  - SHA-256: `7cf5ce3a7f0f1e4719e3c5a7eace372acb9862050674a0b90089511f25b3720e`

Release manifest SHA-256:
`7f4c346fda9d403e03b9643dd5f96009625ca5343f4576ef87491c2983403f0a`

Build timestamp:
`2026-08-17T13:05:18+03:00`

## Validation of final candidate before canonization

- managed release files: 605/605;
- PHP lint: 26/26 PASS;
- JavaScript syntax: 16/16 PASS;
- JSON parse: 13/13 PASS;
- indexable HTML duplicate title groups: 0;
- missing title: 0;
- missing description: 0;
- H1 errors: 0;
- canonical errors: 0;
- sitemap: 61/61 indexable URLs represented;
- noindex URLs in sitemap: 0;
- hreflang errors: 0;
- internal links checked: 4,256; broken: 0;
- JSON-LD errors: 0;
- EPUB CRC: 20/20 PASS;
- multipart ZIP CRC: PASS.

## R195 functional scope

- Boss header reads actual release number and build date/time from `.mavik-release.json`.
- Books use one compact drag&drop list; no duplicate ordering list.
- Music collections support Edit / Hide-or-Show / Delete while retaining track files.
- Music-to-book assignment supports All tracks / No music / visible collection / individual visible track.
- Hidden assigned music does not silently fall back to All tracks; the assignment remains preserved and public playback stays empty until the source is shown again or reassigned.
- Static pages support hierarchy, rich text, preview, visibility, trash/restore and section management.
- Section visibility is independent from per-page visibility; hiding/showing a section does not destroy a page's own hidden state.
- Public menu + SEO synchronization observes page and parent-section visibility.
- SEO tooling checks redirect/canonical/title/description/H1/sitemap semantics more strictly than the earlier audit implementation.
- localization/hreflang/cache-buster issues found during adversarial review were corrected before canonization.
- release manifest files are protected from public HTTP exposure.

## Main construction canon

Every mutation in Boss must be propagated consistently to the public site and search-facing state, where relevant: navigation, internal links, sitemap, robots/noindex, canonical, hreflang, structured data, IndexNow, and the internal SEO auditor.

## Known next-release cleanup

R195 contains mobile-menu visual numbering `01–05` plus a hardcoded owner/admin marker `99`. By the user's explicit follow-up decision, the next release must **remove all mobile-menu numbering completely**, not replace `99` with another number. Labels and ordering remain unchanged.

## Continuation rule

All new structural/functional site work starts from **R195 only**. R1–R194 are obsolete as site bases. Translation content remains protected independently of historical R-number prefixes.
