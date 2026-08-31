# CANON REGISTRY — MAVIK.NAME

## ЄДИНИЙ КАНОН
`R236`

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**
Дата затвердження: 2026-08-31

Identity:
- file: `R236.zip`
- SHA-256: `aea84cdc069b5cf695d628698d67d3e2c0c9c662b30b1734405e1ef7ee83f0a6`
- base: `R235`

Правила:
- усі зміни, виправлення, recovery та наступні релізи починати тільки від `R236`;
- усі pre-R236 site releases/candidates/patches/checkpoints вважати застарілими і не використовувати як source-of-truth;
- не відновлювати старіший site release без нового прямого наказу автора;
- production визначати за R236 + свіжими live-даними;
- LIVE CONTENT FIRST залишається обов’язковим.

## LANGUAGE ARCHITECTURE
- public architecture: Ukrainian-only;
- canonical R236: no `/en/`, no public English hreflang branch;
- exception: Polish `Ewakuacja` is public by direct link and remains indexable; it is not an international branch;
- LIVE 2026-08-31: legacy `/en/*` explicitly returns HTTP 410 Gone through root `.htaccess`;
- next full release from R236 must include that 410 rule.

## R236 STATE
- shared editor fixes for native selects, text colors and background highlights;
- shared internal-link picker across common editors;
- safe internal/external link behavior;
- editor cache `v=236`;
- Ukrainian-only architecture and deploy protections retained.

## CONFIRMED POST-R236 TECHNICAL ISSUE
LIVE reader `/books/petlia/read/` currently shows:
1. duplicate TOC heading `Глава четверта` after `Глава четверта: Сергій`;
2. an ordinary prose paragraph beginning `Частина підійшла до Лідії та Олени...` as a heading/TOC entry.
This must be fixed in the next full release based on R236. After fixing, run a heading/TOC integrity scan across every reader.

## LIVE CONTENT FIRST — ПОСТІЙНЕ ПРАВИЛО
- canonical ZIP = база коду/структури, а не гарантовано найсвіжіша копія mutable production content;
- full deploy не має права затерти новіший Boss-managed live-content;
- blog/books/media та інший mutable content захищати, синхронізувати або відновлювати;
- у конфлікті canonical ZIP та новішого live content зберігати live content, якщо автор прямо не наказав інакше.

## ПОСТІЙНЕ ПРАВИЛО АУДИТУ
Для production досліджень використовувати реальний зовнішній доступ до mavik.name. Чітко маркувати LIVE / CANONICAL BUILD / NOT VERIFIED. Search cache/snippets та сторонні SEO-аудити не видавати за live-стан.

Current canon checkpoint: `mavik-sklad/files/R236-CANON.md`.
Current technical checkpoint: `mavik-sklad/files/R236-SEO-CHECKPOINT.md`.
