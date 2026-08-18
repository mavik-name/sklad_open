# MAVIK.NAME — R213 CANON CHECKPOINT

Дата: 2026-08-18
Статус: **КАНОН / ЄДИНА ЧИННА STRUCTURAL-FUNCTIONAL CORE-БАЗА**

## Канонічний binary

- `213 Збірка_Сайт_ОК.zip`
- `213 Збірка_Сайт_ОК_PART1.zip`
- `213 Збірка_Сайт_ОК_PART2.zip`

Manifest SHA-256: `8c1f963df1e1a6831942eb01fb26eec7eba6ea1195a180f8e1ce5c3fea2134d1`
Set id: `r213-8c1f963df1e1a683`
FULL SHA-256: `05ba73d3a7d9d20041a141d497c78491841887fc9315c091a13f907cbf00f4ee`
PART1 SHA-256: `ab3106e8deab2abbacd8d0d198060d6b78c76e022bb34ced813761207b5d7c7d`
PART2 SHA-256: `2033f034425246666e87cba3ff0e12aff514260c620914f9d1a464b5a24a9546`
Managed files: **646**.

Перевірки: PHP **35/35 OK**; JSON **OK**; FULL CRC **OK**; PART1/PART2 CRC **OK**; multipart coverage **646/646** managed files.

## Що визначає R213

- Головна сторінка і `/blog/` використовують один актуальний список блогу.
- Великий пост «У фокусі» та 3 малі картки синхронізуються разом.
- Вилучений старий пост про ШІ не є частиною публічного блогу; його старий URL повертає **410 Gone**.
- Release cleanup фізично прибирає старий каталог цього поста та застарілі blog-images і чистить stale live-state entry.
- Blog cleanup idempotent і запускається через Boss після встановлення.
- Блоговий редакційний канон: література, твори, ідеї, читач; зайві згадки ШІ не виносити вперед, крім чесного опису музичного виробництва.
- Книги: при додаванні вибір `Бібліотека` / `Анонси`; анонс — статус тієї самої книги; `Опис для анонсу` редагований; обкладинка спільна з book object.
- `/_site-state/` — protected live state.
- SIMPLE FIRST, privacy-media canon, protected SEO та public-blog editorial canon обов'язкові.

## Робоче правило

Будь-яка наступна structural/functional робота по mavik.name стартує **тільки від R213**.

Будь-яка новіша збірка є лише кандидатом, доки автор прямо не затвердить її каноном.
