# CANON REGISTRY — MAVIK.NAME

## ЄДИНИЙ КАНОН
`R230_Blog`

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**
Дата затвердження: 2026-08-31

Identity:
- file: `R230_Blog.zip`
- size: `28005701` bytes
- SHA-256: `ad1d46c7209e53e0c4058ad033a30946a3cffc85b5ec9677f8af4d2d7bdcc348`
- base: `R230`

Правила:
- усі зміни, виправлення, recovery та наступні релізи починати тільки від `R230_Blog`;
- `R230` зберігати як immediate verified rollback reserve;
- `R229` зберігати як older verified rollback reserve;
- резерви не видаляти і не використовувати як робочу базу без прямого наказу автора;
- чинний сайт і робочий контекст — українські;
- production визначати за R230_Blog + свіжими live-даними.

## R230_Blog STATE
- R230 mail baseline повністю збережено;
- blog article body має контрастну panel-картку в стилі «Про автора»;
- blog text content не змінювався;
- blog CSS cache-buster `v=230blog`;
- ZIP integrity / Boss deploy / PHP / JS / JSON / EPUB validation PASS.

## LIVE CONTENT FIRST — ПОСТІЙНЕ ПРАВИЛО
- canonical ZIP = база коду/структури, а не гарантовано найсвіжіша копія mutable production content;
- full deploy не має права затерти новіший Boss-managed live-content;
- blog/books/media та інший mutable content захищати, синхронізувати або відновлювати;
- у конфлікті старішого ZIP та новішого live content зберігати live content, якщо автор прямо не наказав інакше.

## RESERVES
### R230
- file: `R230.zip`
- SHA-256: `e03cbfdd328d176eacb9548c75fc73d119ec8f924fbe1f2e669fefca2f2abea0`
- record: `mavik-sklad/files/R230-RESERVE.md`

### R229
- file: `R229.zip`
- SHA-256: `9f047a6b0fc71699bd6a9ab070fe65c291d257110b77bc935f74953b087166c8`
- record: `mavik-sklad/files/R229-RESERVE.md`

## ПОСТІЙНЕ ПРАВИЛО АУДИТУ
Для досліджень mavik.name використовувати реальний зовнішній production-доступ; ізольований container DNS/curl не видавати за live-стан.
