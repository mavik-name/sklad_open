# R211 — WIP checkpoint

Дата: 2026-08-18
Статус: **РОБОЧИЙ НАСТУПНИЙ РЕЛІЗ, НЕ КАНОН**.
Канонічна база: **R210G**.

## Рішення автора про нумерацію

Буквені ревізії припинено. Наступний повний structural/functional реліз після R210G має номер **R211**. Назву `R210H` не використовувати як активну робочу версію; усі її задачі перенесені сюди.

## Мета R211

Не лише виправити залишкові баги R210G, а прибрати причини їх повторення: persistent state має бути джерелом правди, deploy/patch не повинен скидати live-контент, SEO та generated public artifacts мають синхронізуватися автоматично.

## Заплановані/погоджені зміни

### 1. Deploy / persistent state
- Після FULL/PATCH відновлювати generated public HTML із живого `/_site-state/`, де це потрібно.
- Косметичний patch не має права повертати старі обкладинки анонсів, focus, порядок книг чи інші live-налаштування.
- User-generated media відділити від release-owned assets; нові Boss-uploaded covers/blog images зберігати в protected user media paths.

### 2. Analytics
- `analytics/data` має гарантовано існувати після clean deploy або створюватися runtime без ручного втручання.
- Boss/self-test перевіряє writable та показує конкретну діагностику.

### 3. SEO синхронізація книг
- Одне джерело даних про книги.
- Автоматично синхронізувати `/books/`, `/books/new/`, `/books/free/`, relevant discovery pages, sitemap, meta description, JSON-LD, lastmod та IndexNow.
- Прибрати застарілі ручні числа на кшталт `19 книг`.
- Нова книга не може з'явитися у видимому каталозі без одночасного оновлення schema.org та search-state.

### 4. SEO self-test у Boss
- state = public catalog = JSON-LD count;
- indexable books present in sitemap;
- covers exist;
- canonical/hreflang/robots/noindex consistency;
- IndexNow key accessible;
- Bing URL submission configuration status;
- analytics writable;
- live generated HTML synchronized with persistent state.

### 5. Boss → Пошта у головному меню
- Зберегти unread badge біля `Пошта`.
- Додати preview останніх 3–5 отриманих листів: відправник, тема, час, unread state.
- Клік відкриває конкретний лист.
- Mobile layout без перевантаження.

### 6. Книги → посилання на платформи
- У створенні та редагуванні книги repeatable поля `назва платформи + URL`.
- Додавання/видалення/сортування без нового релізу.
- Зберігати у persistent state.
- Автоматично показувати на сторінці книги.
- Додавати до structured data `sameAs`, де семантично доречно.

### 7. Медіатека / обкладинки
- Перевірка `зображення використовується` має дивитися на актуальні active bindings/persistent state, а не на будь-яку стару згадку у generated HTML/template/seed.
- Якщо файл реально використовується, Boss показує **де саме**.
- У drag&drop-медіатеці клік по мініатюрі відкриває велике preview; drag лишається на окремій ручці.
- Стару невикористану обкладинку можна видалити без false positive.

### 8. Анонси / обкладинка книги
- Обкладинка анонсу зберігається у persistent state як єдине джерело правди.
- Deploy/косметичний patch не має права підміняти її release seed або старим generated `announcements/index.html`.
- Після deploy generated announcements мають перебудовуватися зі state.

## БЛОГ — ЖОРСТКИЙ МЕХАНІЗМ, НЕ CORE

Це окреме правило, яке діє і після появи R211:

**Звичайне додавання нового блогу = content-only ZIP patch через Boss.**

Канонічний workflow:
1. Асистент створює готовий блоговий запис і, за потреби, ілюстрацію.
2. Формує **Boss-compatible content-only ZIP patch**.
3. Користувач завантажує ZIP через штатний механізм патчів у Boss.
4. Патч додає/оновлює тільки blog content/state та generated public/SEO artifacts, які штатно створює чинний engine.
5. CORE не змінюється.

Для регулярної публікації блогів **не використовувати**:
- FTP / Cityhost File Manager;
- ручне копіювання файлів у корінь сайту;
- окремий `PATCH-*.php` installer;
- ручний запуск `?apply=1`;
- новий CORE release лише для додавання блогових записів.

Blog patch має бути ідемпотентним, де це можливо: повторне застосування не створює дублікати та не перезаписує новіший live-content.

Ручний FTP/PHP installer допускається тільки як аварійний recovery за окремим прямим рішенням автора.

## Блоговий контент із R210G_BLOG_CONTENT_PATCH_2026-08-18.zip

Готові записи з наданого патча можуть бути включені в повний R211 як актуальний content snapshot, але це **не змінює канон подальшого додавання блогів**: надалі нові записи додаються content-only patch через Boss, без CORE.

## Правило релізу

R211 не стає каноном автоматично. Перед видачею:
- PHP lint;
- ZIP CRC;
- manifest/integrity verification;
- regression state → HTML → SEO → media → analytics;
- перевірка блогу та відсутності дублювання content patch;
- жива перевірка автором.

Лише після окремого прямого `R211 канон` змінюється канонічна база. До цього **R210G лишається єдиним каноном**.
