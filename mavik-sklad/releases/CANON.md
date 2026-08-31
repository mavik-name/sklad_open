# Канон збірок MAVIK.NAME

Оновлено: 2026-08-31

## Єдина чинна канонічна база

**R230_Blog — єдина чинна робоча structural/functional база mavik.name.**

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**

Identity:
- file: `R230_Blog.zip`
- size: `28005701` bytes
- SHA-256: `ad1d46c7209e53e0c4058ad033a30946a3cffc85b5ec9677f8af4d2d7bdcc348`
- base release: `R230`
- managed files: `268`
- ZIP entries: `393`

Усі наступні зміни, виправлення, recovery та нові релізи починати **тільки від R230_Blog**, доки автор прямо не затвердить новішу канонічну збірку.

## Ключовий стан R230_Blog
- повний функціонал R230 з mail redesign;
- one compose → many recipients → separate SMTP per recipient;
- recipient chips/autocomplete/address book/send log/per-recipient status/selective retry;
- blog article body на контрастній panel-картці за візуальною логікою «Про автора»;
- тексти блогових постів не змінені;
- `assets/blog/blog.css` cache-buster `v=230blog`;
- `/_site-state/` preservation PASS;
- full Boss deploy validation PASS.

## LIVE CONTENT FIRST
Канонічний ZIP є базою коду/структури, але не вважається автоматично повною копією найсвіжішого live-content. Майбутній full deploy не має права перезаписувати новіший Boss-managed production content. При конфлікті старішого ZIP-контенту з новішою live-версією зберігати live-версію, доки автор прямо не наказав інакше.

## Rollback reserves
1. **R230** — immediate verified rollback reserve:
   - file: `R230.zip`
   - size: `28005558` bytes
   - SHA-256: `e03cbfdd328d176eacb9548c75fc73d119ec8f924fbe1f2e669fefca2f2abea0`
   - record: `mavik-sklad/files/R230-RESERVE.md`
2. **R229** — older verified rollback reserve:
   - file: `R229.zip`
   - size: `27999098` bytes
   - SHA-256: `9f047a6b0fc71699bd6a9ab070fe65c291d257110b77bc935f74953b087166c8`
   - record: `mavik-sklad/files/R229-RESERVE.md`

Current canon checkpoint: `mavik-sklad/files/R230_BLOG-CANON.md`.
