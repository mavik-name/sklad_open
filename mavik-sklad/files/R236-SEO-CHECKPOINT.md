# MAVIK.NAME — R236 SEO / TECHNICAL CHECKPOINT

Date: 2026-08-31
Base: **R236 canonical only**
Status: ACTIVE WORK CHECKPOINT

## Why this checkpoint exists
Several external SEO audits were reviewed on 2026-08-31. Most generic recommendations were already implemented, outdated, irrelevant to an author site, or unverified. Only confirmed/relevant items are carried forward here.

## Already done / do not redo blindly
- Google Search Console is already in use.
- sitemap and robots exist in canonical lineage.
- public site architecture is Ukrainian-only.
- canonical build has no `/en/` tree and no public English hreflang branch.
- `Person`/entity and public JSON-LD existed in validated lineage; R235 gate parsed 85/85 JSON-LD blocks.
- main-page H1 does not need replacement merely to stuff keywords.
- Local SEO / NAP / Google Business Profile are not relevant to this author site.
- FAQ schema is not a priority.
- do not add GA4 merely because generic SEO checklists say so; first-party site analytics already exist.

## LIVE action completed
Production `.htaccess` updated manually on 2026-08-31:
`RewriteRule ^en(?:/.*)?$ - [G,L,NC]`
Result verified by the author: legacy `/en/...` returns **410 Gone**.

Required: fold this rule into the next full release based on R236 so a future deploy cannot restore the old behavior.

## CONFIRMED LIVE STRUCTURAL DEFECT — HIGH PRIORITY
URL: `https://mavik.name/books/petlia/read/`
Observed in crawler-visible document structure on 2026-08-31:
1. TOC contains `Глава четверта: Сергій` followed by a second `Глава четверта`.
2. TOC contains an ordinary prose paragraph beginning `Частина підійшла до Лідії та Олени. Не натовп...`.
3. That ordinary prose is exposed as a heading in the reader document structure.

This is a real reader/HTML structure issue, not a theoretical SEO concern.

### Fix requirements
- Correct the underlying heading markup/content for `Петля`.
- Do not merely hide the bad TOC entry with CSS.
- Ensure ordinary prose cannot be promoted to H2/H3 by import/editor artifacts.
- Validate all public readers, not only `Петля`, for suspicious headings/TOC entries.
- Add a release-gate check that flags headings which are implausibly long or contain multi-sentence prose.
- Add a duplicate-heading check for adjacent/near-adjacent chapter headings.

## LIVE reader scan — completed subset
Checked successfully through crawler-visible document structure:
- `Людина без акаунта`: TOC is structurally clean (5 chapters + afterword); no prose pollution observed.
- `Соціальна`: TOC is structurally clean (20 chapter headings); no prose pollution observed.
- `Евакуація, або Дорогою до стабіка`: TOC is structurally clean (character/section headings); no prose pollution observed.
- `Мамо, жити!`: TOC is structurally clean (26 sections + afterword); no prose pollution observed.
- `Піщинка Соля, що мріяла про хмарочос`: TOC is structurally clean (`Початок`); no prose pollution observed.
- Prior spot checks: `Скульптор`, `Безіменні`, `Євангеліє від Макарія` showed no obvious prose pollution.

Not classified as defects without source confirmation:
- `UNIVERSE` repeats `Акт I. Народження` around chapter structure; could be intentional hierarchy/import behavior.
- `Той, що несе світло` contains unusual section headings such as `Частина, яку не створив Деймон.` / `Частина була брехнею.` / `Частина — ні.`; these may be intentional literary headings.

Crawler fetch was unstable/cache-miss for several other long readers. Those remain **NOT VERIFIED**, not failed.

## OTHER RELEVANT CHECKS BEFORE NEXT RELEASE
1. Canonical relationships:
   - book landing `/books/<slug>/` should be self-canonical;
   - reader `/books/<slug>/read/` must have an intentional canonical policy and must not accidentally canonicalize unrelated duplicate content;
   - text mirrors remain `noindex, follow` as already configured through `.htaccess`.
2. Structured data:
   - preserve existing valid JSON-LD;
   - verify `Person`/author entity, `Article`/`BlogPosting`, breadcrumbs and book/creative-work semantics where already supported;
   - no promise of rich snippets from `Book` alone.
3. Open Graph/images:
   - verify `og:title`, `og:description`, `og:image` on representative home/book/blog pages;
   - ensure covers have sensible alt text without keyword stuffing.
4. Core Web Vitals:
   - measure actual LCP / INP / CLS, especially mobile;
   - do not optimize speculative bottlenecks without measurements.
5. Crawl integrity:
   - scan for 4xx/5xx, broken internal links, accidental old language URLs, duplicate public headings.

## CURRENT BUILD BLOCKER
The exact canonical binary `R236.zip` is not currently available in the active runtime or the GitHub warehouse. File Library search finds only the canonical/hash/control records, not the ZIP payload. GitHub main tree also contains no release ZIP binary.

Hard rule: **do not reconstruct from R235/R232/pre-R236**. Therefore a safe full next release cannot be assembled until the exact canonical `R236.zip` is supplied/retrieved. Expected SHA-256:
`aea84cdc069b5cf695d628698d67d3e2c0c9c662b30b1734405e1ef7ee83f0a6`

When R236.zip becomes available, next release work must:
1. verify its SHA-256 before editing;
2. fold in the `/en/*` 410 rule;
3. correct `Петля` heading/TOC source markup;
4. add reader heading-integrity validation;
5. verify canonical/OG/JSON-LD and crawl integrity without regressing live content;
6. package a full numbered release and validate deploy preservation.

## OFF-PAGE PRIORITY
External editorial mentions/backlinks are a meaningful growth reserve. This is a content/PR task, not a code defect; it should not block the technical release.

## HARD RELEASE RULES
- Start only from R236 canonical.
- Preserve all newer Boss-managed live content.
- Polish direct-link `Ewakuacja` must remain public/indexable and hidden from normal catalog navigation.
- No `/en/` directory, no public English hreflang, no English navigation branch.
- Legacy `/en/*` must return 410 after deploy.
- Deliver a full numbered release, not a loose final patch.
