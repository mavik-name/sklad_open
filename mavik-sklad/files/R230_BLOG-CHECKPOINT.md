# MAVIK.NAME — R230_Blog CHECKPOINT

Дата: 2026-08-31

## Статус
**R230_Blog — AUTHOR APPROVED / OFFICIAL / CANONICAL / SOLE WORKING BASE.**

Попередній канон `R230` переведено в preserved verified rollback reserve.
`R229` лишається старішим verified rollback reserve.

## Ідентичність
- file: `R230_Blog.zip`
- size: `28005701` bytes
- SHA-256: `ad1d46c7209e53e0c4058ad033a30946a3cffc85b5ec9677f8af4d2d7bdcc348`
- release label: `R230_Blog`
- numeric release: `230`
- base release: `R230`
- managed files: `268`
- ZIP entries: `393`

## Зміна
Текст кожної статті (`.article-body`) розміщений на panel-картці за візуальною логікою сторінки «Про автора»: panel background, border, rounded corners, responsive padding, shadow. Тексти постів не змінені.

Cache-buster тільки `assets/blog/blog.css`: `v=230blog`.

## Валідація
PASS:
- source R230 SHA exact;
- PHP 31/31;
- JS 15/15;
- JSON 12/12;
- EPUB 21/21;
- blog content unchanged except CSS cache-buster;
- manifest 268/268;
- ZIP integrity;
- full Boss deploy simulation;
- `/_site-state/` preservation.

## Жорстке правило наступних релізів
`R230_Blog` є базою коду/структури. Майбутній full deploy не має права перезаписувати новіший live-контент, створений або змінений через Boss. У конфлікті старішого ZIP-контенту з новішим production content зберігати live-версію, доки автор прямо не наказав інакше.

## Канон
**Поточний єдиний канон: R230_Blog.**
Canon record: `mavik-sklad/files/R230_BLOG-CANON.md`.
Immediate rollback: `mavik-sklad/files/R230-RESERVE.md`.
Older rollback: `mavik-sklad/files/R229-RESERVE.md`.
