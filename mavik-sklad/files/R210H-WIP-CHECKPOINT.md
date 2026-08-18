# R210H — WIP checkpoint

Дата: 2026-08-18
Статус: **РОБОЧА РЕВІЗІЯ, НЕ КАНОН**.
Канонічна база: **R210G**.

## Мета

Наступна ревізія після канонічного R210G має не лише виправити залишкові баги, а й прибрати причини їх повторення: persistent state має бути джерелом правди, deploy/patch не повинен скидати контентний стан, SEO та публічні артефакти мають синхронізуватися автоматично.

## Уже реалізовано у робочій копії

### Медіатека / обкладинки
- Виправлено хибне блокування видалення старих зображень.
- Старий механізм шукав URL по всіх HTML/JSON/XML/PHP/CSS/JS файлах і міг вважати файл «використовуваним» через застарілий generated HTML або seed/template.
- Новий механізм перевіряє тільки актуальний persistent state (`boss-content.json`, `announcements.json`, `page-builder.json`, `site-core.json`, `languages.json`).
- Якщо файл справді використовується, Boss показує конкретний state-файл і шлях прив’язки.
- У drag&drop-переліку медіатеки клік по мініатюрі відкриває велике preview у modal/dialog; drag лишається на окремій ручці.
- PHP lint `boss/index.php`: OK після змін.

## Обов’язково включити до R210H

1. **Deploy/state protection**
   - після FULL/PATCH автоматично перебудовувати generated public HTML із persistent `/_site-state/`;
   - косметичний патч не має права повертати стару обкладинку анонсу, focus, порядок книг чи інші live-налаштування.

2. **Analytics**
   - `analytics/data` має гарантовано існувати після clean deploy;
   - runtime/self-test перевіряє writable і показує зрозумілу діагностику в Boss.

3. **SEO синхронізація книг**
   - одне джерело даних про книги;
   - автоматично синхронізувати `/books/`, `/books/new/`, `/books/free/`, genres/themes/discovery де релевантно, sitemap, meta description, JSON-LD ItemList/Book, lastmod та IndexNow;
   - прибрати ручні/застарілі числа на кшталт «19 книг»;
   - нова книга не повинна з’являтися у видимому каталозі без одночасного оновлення schema.org.

4. **SEO self-test у Boss**
   - state = public catalog = JSON-LD count;
   - indexable books present in sitemap;
   - covers exist;
   - canonical/hreflang/robots/noindex consistency;
   - IndexNow key accessible;
   - Bing URL submission configuration status;
   - analytics writable;
   - live generated HTML synchronized with persistent state.

5. **Boss → Пошта / головне меню адмінки**
   - у головному меню Boss біля `Пошта` залишити unread badge;
   - додати компактний preview останніх 3–5 отриманих листів: відправник, тема, час, unread state;
   - клік відкриває конкретний лист;
   - mobile layout без перевантаження.

6. **Книги → платформи**
   - у створенні й редагуванні книги додати repeatable `Посилання на платформи`: назва + URL;
   - додавання/видалення/сортування без нового релізу;
   - зберігати у persistent state;
   - автоматично показувати на сторінці книги;
   - за потреби включати в structured data `sameAs`.

7. **User-generated media protection**
   - чітко відділити user media від release-owned assets;
   - FULL/PATCH не повинен видаляти або повертати старі user covers/blog images/QR та інші Boss-uploaded файли.

## Правило релізу

R210H не стає каноном автоматично. Після завершення: повний lint/CRC/manifest, регресійні перевірки state→HTML→SEO→media→analytics, жива перевірка автором, лише потім окреме пряме рішення про канонізацію.
