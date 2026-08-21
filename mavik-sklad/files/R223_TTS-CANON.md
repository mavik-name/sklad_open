# MAVIK.NAME — R223_TTS CANON

Дата: 2026-08-21
Статус: **AUTHOR APPROVED / CANONICAL / ONLY WORKING BASE**

## Авторитет

R223_TTS прямо затверджено автором 21.08.2026 як єдину чинну робочу базу сайту mavik.name.

Реліз побудовано безпосередньо від R222_Statistic.

## Жорстке правило

- усі нові зміни, виправлення, відновлення та наступні релізи починати тільки від R223_TTS;
- R222_Statistic зберігати тільки як rollback reserve;
- не вносити нових змін у R222_Statistic;
- не змішувати код або структуру R223_TTS зі старішими релізами;
- усі релізи до R222_Statistic залишаються obsolete/history і не є recovery/work bases.

## Identity

- file: `R223_TTS.zip`
- size: `26847258` bytes
- SHA-256: `d199f2dbd4d5d48aed71b85866176d141d3f4340b268fbd7c5f03159bfeb95bc`
- base: `R222_Statistic`
- Library: `/Сайт/R223_TTS.zip`

## Ключова дельта

1. TTS примусово використовує тільки українські системні голоси `uk-UA` / `uk-*`.
2. Якщо українського голосу немає, іншомовний fallback не запускається.
3. Інструкція зі встановлення українського голосу показується тільки за його фактичної відсутності.
4. Для iPhone/iPad та Android використовуються окремі системні інструкції.
5. `reader-listen.js/css` cache-buster = `224` на всіх 21 читалках.
6. Мобільна PWA/install-логіка для Android та iPhone/iPad збережена.
7. Увесь функціонал R222_Statistic, включно з first-party Boss statistics, є базовою частиною R223_TTS.

## Rollback reserve

Попередній канон R222_Statistic зберігається тут:

`/Сайт/reserve/R222_Statistic/`

Це резерв для аварійного відкату, а не паралельна робоча база.

## Постійні канони

SEO/entity, privacy/media, deploy/backup, protected SEO files і localization freeze залишаються чинними, якщо не суперечать цьому релізному канону або останньому прямому наказу автора.