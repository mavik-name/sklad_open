# MAVIK.NAME — R230_Blog_BookFix CHECKPOINT

Дата: 2026-08-31

## Статус
**R230_Blog_BookFix — FIX READY / VALIDATED / NOT CANONICAL.**

Чинний канон: **R230_Blog**.

## Причина
У формі додавання/редагування книги поле `Жанр / підзаголовок` і окремі `Жанрові фільтри` були двома обов'язковими сутностями. Якщо користувач заповнював жанр, але не ставив окрему галочку `genre_keys[]`, backend відмовляв з повідомленням: `Заповніть назву, жанр, опис і виберіть або додайте хоча б один жанровий фільтр.`

## Виправлення
- жанрові checkbox-фільтри більше НЕ обов'язкові;
- якщо жодного `genre_keys[]` не вибрано, але `Жанр / підзаголовок` заповнено, Boss автоматично знаходить існуючий або створює новий постійний жанровий фільтр із цього поля;
- поле `Новий жанр` і ручний вибір кількох фільтрів зберігають стару поведінку;
- те саме правило діє під час редагування книги;
- UI прямо пояснює, що жанрові фільтри необов'язкові;
- помилка валідації тепер стосується лише реально обов'язкових назви, жанру й опису.

## Безпечне встановлення на live
`R230_Blog_BookFix_PATCH.zip`
- overlay patch;
- base_release: `230`;
- patch_id: `r230-blog-book-add-fix-1`;
- targets: `core`;
- змінює РІВНО один файл: `boss/index.php`;
- не видаляє жодного файла;
- не змінює `.mavik-release.json`, тому live release label лишається R230_Blog;
- не перезаписує blog/books/EPUB/covers/user media/`/_site-state/`.

Patch SHA-256: `d5dd80d9ad9c18da1d770415ae8fa190a93ee867e8619b03138224d6a7ecc4f6`.

## Повна контрольна збірка
`R230_Blog_BookFix.zip`
- повний structural candidate від R230_Blog;
- release label: `R230_Blog_BookFix`;
- numeric release: `230`;
- functional delta: тільки `boss/index.php`;
- інші змінені файли — release identity/header labels.

Full ZIP SHA-256: `0a92a1f2ad79b0b7ef8b11070e16f09286bcfcb7fb91616e8c227097f7ec20ee`.

## Валідація
PASS:
- PHP 31/31 syntax;
- JS 15/15 syntax;
- JSON 12/12 parse;
- overlay manifest/hash validation;
- overlay apply simulation;
- live-only blog file unchanged after overlay;
- user media unchanged after overlay;
- full ZIP integrity;
- full release manifest/deploy validation: 393 entries / 268 managed files.

## Канон
R230_Blog залишається єдиним каноном до прямого затвердження автора новішої повної бази. Для live-виправлення цієї конкретної помилки використовувати overlay patch, щоб виконати правило LIVE CONTENT FIRST.
