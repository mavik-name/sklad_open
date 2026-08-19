# MAVIK.NAME — DEPLOY BACKUP CANON

Дата: 2026-08-19
Статус: **HARD DEPLOY CANON / ОБОВ'ЯЗКОВО ВІД R216**

## Головний принцип

Під час розгортання нового CORE-релізу Boss **не створює постійну повну резервну копію всього сайту**.

Постійний pre-deploy backup містить **лише файлові бази даних / JSON state**, необхідні для відновлення mutable content/state.

Мета — не дублювати десятки мегабайт статичних HTML, EPUB, MP3, зображень та CORE-файлів при кожному релізі й не витрачати зайве місце на сервері.

## Що входить у persistent backup

- `/_site-state/locales/<locale>/*.json`;
- locale indexes / bindings / publication state;
- legacy JSON state, якщо він ще існує під час одноразової міграції R215 → R216;
- інші JSON-файли `/_site-state`, які є mutable database/state і можуть бути змінені deploy/live-sync.

Не включати до persistent deploy backup:
- HTML/PHP/JS/CSS CORE;
- EPUB;
- MP3;
- обкладинки та інші зображення;
- статичні downloads;
- інші великі shared content binaries.

## Crash-safe rollback CORE

Відмова від повного persistent backup не означає відмову від rollback.

Перед зміною CORE Boss створює **короткоживучий transaction snapshot тільки тих CORE/shared файлів, які реально будуть змінені або прибрані**.

Правила:
1. Для transaction snapshot за можливості використовувати filesystem hard links, щоб не дублювати байти.
2. Якщо hard link недоступний — допустимий тимчасовий copy fallback тільки для affected files.
3. Transaction snapshot зберігається у захищеному `/_site-state/deploy/`.
4. Після успішного deploy transaction snapshot негайно видаляється.
5. При помилці він використовується для відновлення старого CORE, після чого також видаляється.
6. Persistent після deploy лишається тільки database backup.

## Retention

Зберігати обмежену кількість останніх database-only backup (орієнтир: 3). Старі автоматично прибирати.

## Patch / overlay

Locale/content patch дотримується того самого принципу:
- persistent backup — лише цільові/актуальні бази даних;
- changed shared/CORE files страхуються лише короткоживучим transaction snapshot;
- patch не створює повну копію сайту.

## Заборона регресії

Не повертати в майбутніх релізах автоматичне архівування всього site tree перед кожним deploy, якщо автор прямо не змінить цей канон.

Правильна модель: **persistent database-only backup + short-lived affected-files transaction rollback**.
