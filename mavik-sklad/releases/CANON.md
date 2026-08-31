# Канон збірок MAVIK.NAME

Оновлено: 2026-08-31

## Єдина чинна канонічна база

**R237 — єдина чинна робоча structural/functional база mavik.name.**

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**

Identity:
- file: `R237.zip`
- SHA-256: `35a9a05fe45523916b702ed07775e6f6127c76672a15e9da8dd868d23ff583bd`
- approved: `2026-08-31`
- base release: exact canonical `R236`

Усі наступні зміни, виправлення, recovery та нові релізи починати **тільки від R237**, доки автор прямо не затвердить новішу канонічну збірку.

## Hard exclusion of older site releases
Усі site releases, candidates, patches і checkpoints до R237 є історичними/застарілими та НЕ є source-of-truth. Не використовувати їх для поточної розробки, відновлення чи аудиту без нового прямого наказу автора.

## Language architecture
- public site architecture: Ukrainian-only;
- canonical R237 contains no `/en/` tree and no public English hreflang branch;
- all legacy `/en/*` URLs permanently return HTTP 410 Gone from canonical `.htaccess`;
- Polish `Ewakuacja` remains a public direct-link book only, not an international site branch.

## Key R237 state
- R236 editor/link fixes retained;
- `Петля` reader heading/TOC defect corrected;
- post-restore reader normalization prevents old live content from reintroducing the defect;
- reader structure gate checks prose-like headings, missing TOC targets and duplicate reader IDs;
- BlogPosting/Breadcrumb JSON-LD preserved/improved;
- OG/Twitter image metadata and image dimensions normalized;
- undefined `$language` blog-generator path fixed;
- LIVE CONTENT FIRST deploy protection retained and validated.

## Validation
- ZIP integrity PASS;
- managed files 273, missing 0;
- `en_dirs=0`, `hreflang_en=0`, public English refs 0;
- JSON-LD 85/85 parse PASS;
- missing public image dimensions 0;
- reader prose headings 0;
- missing TOC targets 0;
- duplicate reader IDs 0;
- broken internal refs 0;
- EPUB 21/21 PASS;
- static SEO gate PASS;
- deploy simulation PASS.

## LIVE CONTENT FIRST
Canonical ZIP is the code/structure baseline, not automatically the newest mutable production content. A full deploy must preserve newer Boss-managed live content unless the author explicitly orders otherwise.

Current canon checkpoint: `mavik-sklad/files/R237-CANON.md`.
Current release checkpoint: `mavik-sklad/files/R237-CHECKPOINT.md`.
