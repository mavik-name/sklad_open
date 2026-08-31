# CANON REGISTRY — MAVIK.NAME

## ЄДИНИЙ КАНОН
`R237`

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**
Дата затвердження: 2026-08-31

Identity:
- file: `R237.zip`
- SHA-256: `35a9a05fe45523916b702ed07775e6f6127c76672a15e9da8dd868d23ff583bd`
- base: exact canonical `R236`

Правила:
- усі зміни, виправлення, recovery та наступні релізи починати тільки від `R237`;
- усі pre-R237 site releases/candidates/patches/checkpoints вважати застарілими і не використовувати як source-of-truth;
- не відновлювати старіший site release без нового прямого наказу автора;
- production визначати за R237 + свіжими live-даними;
- LIVE CONTENT FIRST залишається обов’язковим.

## LANGUAGE ARCHITECTURE
- public architecture: Ukrainian-only;
- canonical R237: no `/en/`, no public English hreflang branch;
- legacy `/en/*` permanently returns HTTP 410 Gone from canonical `.htaccess`;
- exception: Polish `Ewakuacja` is public by direct link and remains indexable; it is not an international branch.

## R237 STATE
- all R236 editor/link fixes retained;
- `Петля` reader heading/TOC corruption fixed;
- reader normalization executes after live-content restore;
- release gate catches prose-like headings, missing TOC targets and duplicate reader IDs;
- valid BlogPosting/Breadcrumb JSON-LD preserved/improved;
- OG/Twitter image metadata and public image dimensions normalized;
- blog generator `$language` path fixed;
- crawl/media integrity and LIVE CONTENT FIRST deploy preservation validated.

## VALIDATION
- ZIP integrity PASS;
- managed files: 273; missing: 0;
- English branch refs: 0;
- JSON-LD: 85/85 PASS;
- missing image dimensions: 0;
- reader prose headings: 0;
- missing TOC targets: 0;
- duplicate reader IDs: 0;
- broken internal refs: 0;
- EPUB: 21/21 PASS;
- static SEO gate PASS;
- deploy simulation PASS.

## LIVE CONTENT FIRST — ПОСТІЙНЕ ПРАВИЛО
- canonical ZIP = база коду/структури, а не гарантовано найсвіжіша копія mutable production content;
- full deploy не має права затерти новіший Boss-managed live-content;
- blog/books/media та інший mutable content захищати, синхронізувати або відновлювати;
- у конфлікті canonical ZIP та новішого live content зберігати live content, якщо автор прямо не наказав інакше.

## ПОСТІЙНЕ ПРАВИЛО АУДИТУ
Для production досліджень використовувати реальний зовнішній доступ до mavik.name. Чітко маркувати LIVE / CANONICAL BUILD / NOT VERIFIED. Search cache/snippets та сторонні SEO-аудити не видавати за live-стан.

Current canon checkpoint: `mavik-sklad/files/R237-CANON.md`.
Current release checkpoint: `mavik-sklad/files/R237-CHECKPOINT.md`.
