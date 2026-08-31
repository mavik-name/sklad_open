# Канон збірок MAVIK.NAME

Оновлено: 2026-08-31

## Єдина чинна канонічна база

**R236 — єдина чинна робоча structural/functional база mavik.name.**

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**

Identity:
- file: `R236.zip`
- SHA-256: `aea84cdc069b5cf695d628698d67d3e2c0c9c662b30b1734405e1ef7ee83f0a6`
- approved: `2026-08-31`
- base release: `R235`

Усі наступні зміни, виправлення, recovery та нові релізи починати **тільки від R236**, доки автор прямо не затвердить новішу канонічну збірку.

## Hard exclusion of older site releases
Усі site releases, candidates, patches і checkpoints до R236 є історичними/застарілими та НЕ є source-of-truth. Не використовувати їх для поточної розробки, відновлення чи аудиту без нового прямого наказу автора.

## Language architecture
- public site architecture: Ukrainian-only;
- canonical R236 contains no `/en/` tree and no public English hreflang branch;
- Polish `Ewakuacja` remains a public direct-link book only, not an international site branch;
- LIVE hotfix on 2026-08-31: root `.htaccess` returns HTTP 410 Gone for all legacy `/en/*` URLs;
- the next full release derived from R236 must fold this 410 rule into the canonical build.

## Key R236 state
- shared editor select bug fixed;
- text color selectors work and preserve selection;
- background highlight selectors work and preserve selection;
- shared internal-link picker available across blog/books/static/mail editors;
- external http(s) links open in a new tab while internal mavik.name paths stay in current tab;
- editor cache key `v=236`;
- LIVE CONTENT FIRST deploy protection retained;
- Ukrainian-only architecture inherited from R235;
- public JSON-LD gate passed in R235/R236 lineage.

## Confirmed live SEO/structure issue after R236
The `/books/petlia/read/` reader currently exposes an ordinary prose paragraph as a heading/TOC item and also shows a duplicate `Глава четверта` TOC heading. This is a confirmed structural defect, not a generic SEO recommendation. Fix it in the next full release based only on R236 and then validate all readers for heading/TOC pollution.

## LIVE CONTENT FIRST
Canonical ZIP is the code/structure baseline, not automatically the newest mutable production content. A full deploy must preserve newer Boss-managed live content unless the author explicitly orders otherwise.

Current canon checkpoint: `mavik-sklad/files/R236-CANON.md`.
Current technical checkpoint: `mavik-sklad/files/R236-SEO-CHECKPOINT.md`.
