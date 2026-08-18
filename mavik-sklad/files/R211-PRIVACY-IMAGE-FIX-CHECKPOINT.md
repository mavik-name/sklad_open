# R211 — PRIVACY IMAGE FIX checkpoint

Дата: 2026-08-18
Статус: **deployment candidate / не канон**
База: R211 WIP поверх канонічного R210G.

## Причина

Попередній R211 помилково використав приватно-референсні зображення автора в кількох блогових записах без окремого дозволу на кожне використання.

Це порушення нового HARD CANON:
`mavik-sklad/files/PRIVACY-MEDIA-CANON.md`.

## Жорстке правило

Приватне фото/відео автора не є загальною медіатекою. Дозвіл локальний і діє тільки на конкретне використання.

Станом на 2026-08-18 єдине дозволене використання зовнішності автора в блозі:
`А що тут, власне, читати?` (`shcho-tut-vlasne-chytaty`).

## Що зроблено

- Усі інші blog hero images переведені на неперсональні content-matched visuals.
- Усі активні blog hero images мають 2560×1440.
- Старі superseded files прибрані з release tree/manifest.
- Приватно-референсні файли `vlasnyi-sait-human.jpg`, `ai-tool-real.jpg`, `ai-tool-human.jpg`, `unread-author-real.jpg`, `star-vs-writer-real.jpg` фізично відсутні у новому release tree.
- Додано одноразову migration `r211-blog-images-v4-privacy`, яка оновлює live `boss-content.json` навіть якщо попередній `v3` marker вже існує.
- Після deploy старі managed image files видаляються штатним obsolete cleanup.

## Активні blog image paths

- sotsialna-zavershena → `/images/blog/sotsialna-v4.jpg`
- evakuatsiia-dorohoiu-do-stabika-zavershena → `/images/blog/evakuatsiia-v4.jpg`
- shcho-tut-vlasne-chytaty → `/images/blog/shcho-tut-chytaty.jpg` (єдине дозволене персональне використання)
- prosto-diakuiu → `/images/blog/prosto-diakuiu-v4.jpg`
- vlasnyi-sait-shchob-zalyshatysia-liudynoiu → `/images/blog/vlasnyi-sait-v4.jpg`
- sviy-klaptyk-internetu → `/images/blog/sviy-klaptyk-v4.jpg`
- chomu-vydavnytstvo-vzhe-ne-vorotar → `/images/blog/publisher-v4.jpg`
- chy-mozhe-shi-buty-instrumentom-pysmennyka → `/images/blog/ai-tool-v4.jpg`
- chomu-suchasna-literatura-boitsia-skladnoho-chytacha → `/images/blog/complex-reader-v4.jpg`
- shcho-vidbuvaietsia-z-avtorom-koly-ioho-nikhto-ne-chytaie → `/images/blog/unread-author-v4.jpg`
- zirkoiu-mozhna-zrobyty-koho-zavhodno-a-pysmennykom → `/images/blog/star-vs-writer-v4.jpg`

## Контроль

- release manifest: 645/645 files
- PHP lint: 35/35 OK
- FULL CRC: OK
- PART1 CRC: OK
- PART2 CRC: OK
- deployer validation FULL/PART1/PART2: OK
- upgrade simulation from previous R211: OK
- old private image files after deploy: absent
- allowed `shcho-tut-chytaty.jpg`: present
- v4 privacy migration marker: created

Full manifest SHA-256:
`c4bc117b0f88d14d6099adfe9b6f7775a094351ee495a67114383a954f51b009`

Multipart set id:
`r211-c4bc117b0f88d14d`

FULL SHA-256:
`f823d3bb143219aa279c9dce0df4cf2d9da0a8660e993347fa6165541eaa2c86`

PART1 SHA-256:
`5c9e3983ed513b28ce1d3a4b50cb512d58b7aab388b4b0c9f73c0479fe666ff3`

PART2 SHA-256:
`6a91c215bd6982b7204aa2cc1ba9d0b582e43d87733fb89e62f6a588ca4239a2`
