> Поточний канонічний реліз: [Forum_Mavik_One](releases/Forum_Mavik_One/CHECKPOINT.md).

> Поточний канонічний реліз: [Forum_Mavik_One](releases/Forum_Mavik_One/CHECKPOINT.md).

> Поточний канонічний реліз: [Forum_Mavik_One](releases/Forum_Mavik_One/CHECKPOINT.md).

> Поточний канонічний реліз: [Forum_Mavik_One](releases/Forum_Mavik_One/CHECKPOINT.md).

> Актуальне виправлення: [0.9.1 checkpoint](releases/0.9.1/CHECKPOINT.md) — категорії, ширина 1120px, оригінальний SVG 42/40px.

> Актуальний тестовий кандидат 0.9 і checkpoint: [START-HERE-0.9.md](START-HERE-0.9.md). Архіви 0.8/0.7 відновлено. 100% візуального приймання ще не завершено.

# FORUM.MAVIK.NAME — START HERE

Оновлено: 2026-09-08
Статус: handoff / checkpoint перед переходом у нову гілку ChatGPT
Проєкт: https://forum.mavik.name/

## Головне правило
Нова гілка ChatGPT = нова розмова, але НЕ новий стан форуму.
Перед будь-якою роботою прочитати цей файл, `CANON-FORUM.md`, `NEXT-BUILD-0.9.md` і `BUILD-STATUS.md`.
Не відновлювати стан із припущень або пам'яті, якщо він описаний тут.

## Поточна база
- Поточна тестова збірка: `builds/forum_mavik_test_build_0.8.zip`.
- Rollback: `builds/forum_mavik_test_build_0.7_ROLLBACK.zip`.
- 0.8 значно краща за 0.7 і є поточною функціональною/візуальною базою, але НЕ фінальний канон.
- Наступна збірка має бути 0.9 і починатися від 0.8, без втрати SQLite-даних.
- При оновленнях не видаляти `storage/forum.sqlite` на сервері.

## Архітектурний канон
- Форум повністю самостійний застосунок на `forum.mavik.name`.
- PHP + SQLite; база належить лише форуму.
- Основний сайт `mavik.name` не читає і не пише SQLite форуму.
- У R300 потрібні лише переходи: публічне меню `Форум` -> `https://forum.mavik.name/`; в адмінці сайту `Форум` -> `https://forum.mavik.name/admin/`.
- В адмінці форуму потрібен перехід назад у адмінку основного сайту.
- Клік по логотипу НА ФОРУМІ завжди веде на головну форуму `https://forum.mavik.name/`, не на mavik.name.

## Maintenance / закритий запуск
- До публічного старту форум за замовчуванням закритий.
- Гості бачать ремонтну сторінку.
- HTTP 503 + `X-Robots-Tag: noindex, nofollow` + meta robots noindex/nofollow.
- robots.txt у закритому режимі блокує весь форум.
- sitemap не публікувати до відкриття.
- Адмін після входу бачить реальний форум.
- В адмінці можна увімкнути/вимкнути maintenance, змінити текст і встановити окремий пароль тестового перегляду.
- Відкриття форуму для всіх має мати явне підтвердження.

## Візуальні source-of-truth
1. `references/CANON-forum-homepage.png` — еталон головної форуму.
2. `references/CANON-topic-page.png` — ЗАТВЕРДЖЕНИЙ КАНОН сторінки теми/обговорення.
3. Реальний MaVik header/menu/footer — source-of-truth для брендингу, шрифтів, прозорості, hover/active і mobile menu.
4. `references/MOBILE-concept-layout.png` — концепт мобільної композиції; header/menu має повторювати саме mobile-канон основного сайту.

## Не робити
- Не винаходити окрему форумну айдентику або палітру.
- Не створювати CSS-кружки навколо coffee/arrow/category icons.
- Не робити desktop, який просто стискається в mobile.
- Не робити нескінченні вкладені «сходинки» відповідей.
- Не змінювати архітектуру форуму або SQLite без прямої потреби.
- Не називати збірку готовою, поки desktop і mobile не звірені з каноном поелементно.
