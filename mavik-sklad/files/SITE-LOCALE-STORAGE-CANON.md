# MAVIK.NAME — LOCALE STORAGE CANON

Дата: 2026-08-19
Статус: **HARD STORAGE CANON / ПРІОРИТЕТ НАД РАНІШИМИ ТРАКТУВАННЯМИ STORAGE**

## Головний принцип

Фізичні контентні файли mavik.name можуть і повинні зберігатися у **спільному файловому пулі**, якщо дублювання байтів не потрібне.

Окремими для кожної локалі є **файлові бази/реєстри, bindings, metadata та publication state**, а не обов'язково самі MP3/EPUB/обкладинки/інші binaries.

Приклад:
- один MP3 фізично лежить один раз у shared media pool;
- `uk`-база може містити binding на цей MP3 і показувати його в українській музиці;
- `en`-база може не містити binding і не показувати його;
- інший MP3 може бути прив'язаний тільки до `en`;
- один і той самий файл може бути прив'язаний до кількох локалей із різними назвами, описами, порядком, статусом та metadata.

## Канонічна модель R216

```text
/shared-content/              # фізичний пул файлів
  books/
  music/
  images/
  downloads/
  ...

/_site-state/locales/
  uk/
    books.json
    blog.json
    music.json
    pages.json
    announcements.json
    bindings.json
    indexes/
  en/
    books.json
    blog.json
    music.json
    pages.json
    announcements.json
    bindings.json
    indexes/
  es/
  fr/
  de/
```

Точні назви директорій/JSON можуть еволюціонувати, але поділ відповідальності є жорстким:
- shared pool = фізичні файли;
- locale database = що саме належить/видиме/опубліковане в конкретній локалі.

## Безпека локалей

1. Кожна локаль має власну незалежну writable файлову базу.
2. Операція запису/видалення/unpublish для `en` працює тільки з `/_site-state/locales/en/...` і не має права змінювати `uk`.
3. Boss не передає довільні filesystem paths. CORE будує шлях із валідованого locale id, content type та object id.
4. Видалення запису з locale-бази не означає фізичного видалення shared binary.
5. Фізичне видалення shared binary дозволяється лише окремою cleanup-операцією після перевірки, що файл більше не має bindings у ЖОДНІЙ локалі.
6. Якщо binary має хоча б один binding у будь-якій локалі, cleanup не має права його видалити.
7. Для кожної локалі окремо зберігаються title, description, excerpt, alt/caption, publication state, sort/order, visibility та інша locale-specific metadata.
8. Одна локаль може мати матеріал, якого немає в іншій. Це нормальний стан, а не parity defect.
9. Hreflang створюється лише коли існує реальний еквівалентний counterpart між локалями.
10. CORE deploy не перезаписує locale databases. Content patches змінюють лише заявлені locale databases/bindings і, за потреби, додають shared binaries.

## Контентні типи

Та сама модель обов'язкова щонайменше для:
- книг/EPUB;
- блогу;
- музики;
- анонсів;
- інформаційних/редакційних сторінок;
- обкладинок та інших media bindings;
- майбутніх locale-aware content types.

## Boss

Boss має працювати з активною локаллю або явним набором локалей.

Для матеріалу повинно бути можливо:
- додати його в одну чи кілька локалей;
- прибрати лише з конкретної локалі;
- змінити locale-specific title/description/metadata;
- бачити, в яких локалях є binding;
- не зачіпати bindings інших локалей.

Для блогу — явний checkbox/multi-select активних локалей публікації. Дефолт може бути `UA+EN`, але остаточний scope задає автор.

## Приклад музики

Допустимий стан:
- UK: Track A, Track B, Track C;
- EN: Track B, Track D, Track E.

Track B може використовувати той самий фізичний MP3 у shared pool, але мати незалежні UK/EN metadata та publication settings.

## Пріоритет

Цей документ уточнює і **має пріоритет над попереднім формулюванням**, де могло читатися, ніби самі фізичні контентні файли мають дублюватися по папках локалей.

Правильний канон: **shared physical files + physically separate locale databases/bindings**.
