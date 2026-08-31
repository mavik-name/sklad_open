# MAVIK.NAME — R230_Blog CANON

Дата затвердження автором: 2026-08-31

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / SOLE WORKING BASE**

## Identity
- file: `R230_Blog.zip`
- size: `28005701` bytes
- SHA-256: `ad1d46c7209e53e0c4058ad033a30946a3cffc85b5ec9677f8af4d2d7bdcc348`
- release label: `R230_Blog`
- numeric release: `230`
- base release: `R230`
- managed files: `268`
- ZIP entries: `393`

## Канонічне правило
- `R230_Blog` — єдина чинна структурно-функціональна робоча база mavik.name.
- Усі наступні зміни, recovery, hotfix і повні релізи починати тільки від `R230_Blog`, доки автор прямо не затвердить новішу канонічну збірку.
- `R230` зберігати як безпосередню попередню verified rollback reserve.
- `R229` також зберігати як старіший verified rollback reserve.
- R230/R229 не використовувати як робочу базу без прямого наказу автора на rollback.

## Що успадковано від R230
- one compose → many recipients → separate SMTP per recipient;
- recipient chips: Enter / кома / `;` / bulk paste;
- protected address book та send log;
- unique `To:` і Message-ID на кожного адресата;
- per-recipient accepted/failed статус, X/Y summary, selective retry;
- IMAP Sent append окремо для кожного SMTP accepted повідомлення;
- захист `/_site-state/` та чинної release/deploy логіки.

## Зміна R230_Blog
- текст статей блогу (`.article-body`) розміщено на контрастній panel-картці за візуальною логікою сторінки «Про автора»;
- `background: var(--panel,#111113)`;
- `1px solid var(--line)`;
- desktop radius 18px / mobile radius 16px;
- responsive padding і легка тінь;
- тексти постів не змінювалися;
- cache-buster змінено тільки для `assets/blog/blog.css` на `v=230blog`.

## Validation
- R230 source SHA exact: PASS;
- PHP 31/31 syntax PASS;
- JS 15/15 syntax PASS;
- JSON 12/12 parse PASS;
- EPUB 21/21 CRC PASS;
- blog content unchanged except CSS cache-buster: PASS;
- manifest 268/268 files: PASS;
- ZIP integrity: PASS;
- Boss deploy simulation: PASS;
- `/_site-state/` preservation: PASS.

## Жорстке правило майбутніх релізів — LIVE CONTENT FIRST
Канонічний ZIP є базою коду/структури, але не вважається автоматично повною копією найсвіжішого live-контенту.

Перед будь-яким наступним full deploy:
1. не перезаписувати новіший контент, створений або змінений через Boss на production;
2. Boss-managed blog/books/media та інший mutable content має бути захищений, синхронізований або відновлений після deploy;
3. новий release не має права стирати live-зміни лише тому, що їх ще немає у ZIP-базі;
4. якщо є конфлікт між старішим ZIP-контентом і новішим live-контентом — зберігати live-контент, доки автор прямо не наказав інакше.

## Reserves
- immediate rollback: `mavik-sklad/files/R230-RESERVE.md`
- older rollback: `mavik-sklad/files/R229-RESERVE.md`
