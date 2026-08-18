# MAVIK.NAME — R213 WIP CHECKPOINT

Дата: 2026-08-18
Статус: **готовий deployment candidate, НЕ КАНОН**
Канонічна CORE-база: **R212**
База R213: **R212**

## Причина релізу

На головній сторінці блок блогу був частково синхронізований із актуальним блогом: великий пост «У фокусі» оновлювався штатним механізмом, а три малі картки поруч залишалися старим статичним HTML. Через це головна показувала застарілі назви/анонси та посилання на вже вилучений пост про ШІ.

Окремо на live-сервері могла фізично залишатися стара директорія вилученого поста, оскільки вона вже не входила до manifest R212 і тому не могла бути визначена штатним diff-cleanup як obsolete managed file.

## Що виправлено

- Головна сторінка: актуальний блок блогу з одного джерела даних.
- Великий пост «У фокусі» та 3 сусідні картки тепер синхронізуються разом.
- Додані окремі маркери `BOSS_HOME_BLOG_LIST_START/END`, щоб майбутні зміни блогу через Boss не залишали старі малі картки.
- Поточний feature: `Навіщо мені власний сайт`.
- Поточні 3 картки: `«Соціальна». Теж завершена.`, `«Евакуація, або Дорогою до стабіка». Готово.`, `А що тут, власне, читати?`.
- Текст блоку на головній більше не акцентує ШІ/ринок/технологічну дискусію.
- Вилучений пост `blog/chy-mozhe-shi-buty-instrumentom-pysmennyka/` отримує HTTP **410 Gone** одразу після встановлення R213.
- Доданий release-cleanup, який фізично видаляє каталог цього поста та застарілі blog-images.
- Cleanup також видаляє цей slug із live `/_site-state/boss-content.json`, якщо він там залишився.
- Cleanup запускається при першому відкритті нового Boss і надалі є idempotent.

## Фізичне сміття, яке видаляється

- `blog/chy-mozhe-shi-buty-instrumentom-pysmennyka/`
- `images/blog/ai-tool-v4.jpg`
- `images/blog/ai-tool.jpg`
- `images/blog/complex-reader.jpg`
- `images/blog/dyakuyu_2000.png`
- `images/blog/pravo-na-vlasnyi-holos.jpg`
- `images/blog/publisher-gates.jpg`
- `images/blog/star-vs-writer.jpg`
- `images/blog/sviy-klaptyk-internetu.jpg`
- `images/blog/unread-author.jpg`

## Перевірки

- PHP lint: **35/35 OK**.
- JSON parse: **OK**.
- `.mavik-release.json`: **646/646** managed files.
- Homepage: старі назви/AI-пост відсутні.
- Old-deployer compatibility: **OK** — R212 live-sync не знищує нові три картки R213.
- R213 cleanup simulation: **OK** — старий пост, 9 obsolete images і stale live-state entry фізично видаляються.
- Multipart union: **646/646 OK**.
- FULL/PART1/PART2 CRC: **OK**.

## Файли релізу

- `213 Збірка_Сайт_ОК.zip`
- `213 Збірка_Сайт_ОК_PART1.zip`
- `213 Збірка_Сайт_ОК_PART2.zip`

Manifest SHA-256: `8c1f963df1e1a6831942eb01fb26eec7eba6ea1195a180f8e1ce5c3fea2134d1`
Set id: `r213-8c1f963df1e1a683`
FULL SHA-256: `05ba73d3a7d9d20041a141d497c78491841887fc9315c091a13f907cbf00f4ee`
PART1 SHA-256: `ab3106e8deab2abbacd8d0d198060d6b78c76e022bb34ced813761207b5d7c7d`
PART2 SHA-256: `2033f034425246666e87cba3ff0e12aff514260c620914f9d1a464b5a24a9546`

## Після встановлення

Один раз відкрити Boss. Це запускає новий R213 cleanup і фізично прибирає старий неманіфестний каталог/зображення. До цього моменту старий URL уже недоступний через 410 Gone.

## Канонізація

R213 НЕ замінює R212 автоматично. Канон — R212, доки автор прямо не скаже `R213 канон`.
