# MAVIK.NAME — DEPLOY BACKUP CANON

Дата актуалізації: 2026-08-20
Статус: **HARD DEPLOY CANON / ОБОВ'ЯЗКОВО ВІД R222**

## Головний принцип

Під час розгортання нового CORE-релізу Boss **не створює постійну повну резервну копію всього сайту**.

Persistent pre-deploy backup містить лише mutable database/JSON state, необхідний для відновлення живих даних.

Не дублювати десятки мегабайт статичних HTML, EPUB, MP3, зображень і CORE-файлів при кожному deploy.

## Що входить у persistent backup

- mutable JSON/files under protected `/_site-state/`;
- content/order/focus/statistics/other live database state, який може змінюватися незалежно від release package;
- інші явно визначені mutable database/state файли.

Не включати:
- HTML/PHP/JS/CSS CORE;
- EPUB;
- MP3;
- обкладинки/зображення;
- static downloads;
- інші великі immutable/release-managed binaries.

## Crash-safe rollback CORE

Перед зміною CORE Boss створює короткоживучий transaction snapshot **тільки affected CORE/shared files**, які реально будуть змінені або видалені.

Правила:
1. За можливості використовувати filesystem hard links.
2. Якщо hard link недоступний — допустимий тимчасовий copy fallback для affected files.
3. Transaction snapshot лежить у protected `/_site-state/deploy/`.
4. Після успішного deploy snapshot негайно видаляється.
5. При помилці snapshot відновлює попередній CORE і також видаляється.
6. Persistent після deploy лишається тільки database/state backup.

## Retention

Зберігати обмежену кількість останніх database-only backup; орієнтир — 3. Старі автоматично прибирати.

## Patch / overlay

Content patch дотримується тієї самої моделі:
- persistent backup — лише mutable state, якого реально торкається operation;
- changed CORE/shared files страхуються короткоживучим transaction snapshot;
- patch не створює повну копію site tree.

## R222 continuity

R222 deploy/rollback gate підтвердив:
- live mutable state survives successful deploy;
- tx/stage/pending garbage after success = 0;
- forced post-copy failure restores previous CORE/state;
- uploaded release archive cleans only after successful install;
- obsolete managed files may be removed safely under manifest control.

## Заборона регресії

Не повертати автоматичне архівування всього site tree перед кожним deploy, якщо автор прямо не змінить цей канон.

Правильна модель: **persistent mutable-state backup + short-lived affected-files transaction rollback**.