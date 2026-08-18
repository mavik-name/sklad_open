# R211 — release candidate checkpoint

Дата: 2026-08-18
Статус: **ЗІБРАНИЙ ПОВНИЙ РЕЛІЗ-КАНДИДАТ, НЕ КАНОН**.
Канонічна база: **R210G**.

## Рішення автора про нумерацію

Буквені ревізії припинено. Наступний повний structural/functional реліз після R210G має номер **R211**. Назву `R210H` не використовувати як активну робочу версію; усі її задачі перенесені сюди.

## Мета R211

Не лише виправити залишкові баги R210G, а прибрати причини їх повторення: persistent state має бути джерелом правди, deploy/patch не повинен скидати live-контент, SEO та generated public artifacts мають синхронізуватися автоматично.

## Реалізовані зміни

### 1. Deploy / persistent state
- Після FULL/PATCH generated public HTML відновлюється з живого `/_site-state/`, де це потрібно.
- Косметичний patch не має права повертати старі обкладинки анонсів, focus, порядок книг чи інші live-налаштування.
- User-generated media відділені від release-owned assets; нові Boss-uploaded covers/blog images зберігаються в protected user media paths.

### 2. Analytics
- `analytics/data` гарантовано існує після clean deploy або створюється runtime без ручного втручання.
- Boss/self-test перевіряє writable та показує конкретну діагностику.

### 3. SEO синхронізація книг
- Одне джерело даних про книги.
- Автоматично синхронізуються `/books/`, `/books/new/`, sitemap, meta description, JSON-LD, обкладинки та platform links; інші discovery/search artifacts — у межах чинної архітектури.
- Прибрано залежність від застарілих ручних чисел на кшталт `19 книг`.
- Нова книга не має з'являтися у видимому каталозі без одночасного оновлення schema.org/search-state.

### 4. SEO self-test у Boss
- state = public catalog = JSON-LD count;
- indexable books present in sitemap;
- covers exist;
- canonical/hreflang/robots/noindex consistency;
- IndexNow key accessible;
- Bing URL submission configuration status;
- analytics writable;
- live generated HTML synchronized with persistent state.

### 5. Boss → Пошта
- У головному меню є preview останніх отриманих IMAP-листів з unread state.
- Додано окремий канал **`З сайту`** для повідомлень із форми `Контакт`.
- Повідомлення `З сайту` зберігаються у захищеному `/_site-state/contact-inbox/` як основне джерело, а `site@mavik.name` отримує резервну email-копію.
- У каналі `З сайту`: список, unread state, перегляд, відповідь читачеві через SMTP та видалення.
- У верхньому меню Boss є окремий видимий лічильник `З сайту N`; на головній Boss є окрема картка повідомлень.
- Якщо SMTP тимчасово недоступний, повідомлення все одно зберігається в Boss і не губиться.

### 6. Книги → посилання на платформи
- У створенні та редагуванні книги repeatable поля `назва платформи + URL`.
- Додавання/видалення без нового релізу.
- Зберігання у persistent state.
- Автоматичний показ на сторінці книги.
- Structured data `sameAs`, де семантично доречно.

### 7. Медіатека / обкладинки
- Перевірка `зображення використовується` дивиться на актуальні active bindings/persistent state, а не на будь-яку стару згадку у generated HTML/template/seed.
- Якщо файл реально використовується, Boss показує **де саме**.
- У drag&drop-медіатеці клік по мініатюрі відкриває велике preview; drag лишається на окремій ручці.
- Стару невикористану обкладинку можна видалити без false positive.

### 8. Анонси / обкладинка книги
- Обкладинка анонсу зберігається у persistent state як джерело правди.
- Deploy/косметичний patch не має права підміняти її release seed або старим generated `announcements/index.html`.
- Після deploy generated announcements перебудовуються зі state.

### 9. Публічний `Контакт`
- У UA/EN меню додано `Контакт / Contact`.
- Публічна форма має вступний авторський текст, ім'я, email, тему та повідомлення.
- CSRF + honeypot + rate-limit.
- Основне збереження — protected Boss inbox; резервна доставка — `site@mavik.name` із `Reply-To` читача.
- Upgrade R210G → R211 додає пункт `Контакт` у live menu рівно один раз і не ламає існуючий порядок/стан.

## БЛОГ — ЖОРСТКИЙ МЕХАНІЗМ, НЕ CORE

**Звичайне додавання нового блогу = content-only ZIP patch через Boss.**

Канонічний workflow:
1. Асистент створює готовий блоговий запис і, за потреби, ілюстрацію.
2. Формує **Boss-compatible content-only ZIP patch**.
3. Користувач завантажує ZIP через штатний механізм патчів у Boss.
4. Патч додає/оновлює тільки blog content/state та generated public/SEO artifacts, які штатно створює чинний engine.
5. CORE не змінюється.

Для регулярної публікації блогів **не використовувати** FTP / Cityhost File Manager, ручне копіювання у корінь, `PATCH-*.php`, ручний `?apply=1` або новий CORE release лише заради блогу. Ручний FTP/PHP installer — тільки аварійний recovery за окремим прямим рішенням автора.

Готові записи з `R210G_BLOG_CONTENT_PATCH_2026-08-18.zip` включені в R211 як content snapshot; це не змінює механізм майбутніх blog content-only patches.

## Фінальний контроль release candidate

- PHP lint: **35/35 OK**.
- JSON parsing: **15/15 OK**.
- Contact inbox unit flow: store → unread=1 → read → unread=0 → replied → delete: **OK**.
- R210G → R211 `Контакт` menu migration, повторний запуск без дубля: **OK**.
- Managed manifest parity: **636/636**.
- FULL ZIP: CRC **OK**, deployer validation **OK**.
- Multipart PART1/PART2: CRC **OK**, deployer validation **OK**, union parity **636/636**.
- Full manifest SHA-256: `f0bf9e91c7c1edf6aba02e58355cc04f972025432290c962cbaa65398eaaf641`.
- Multipart set id: `r211-f0bf9e91c7c1edf6`.
- FULL SHA-256: `33d98cf442bb6b3e4f22bc710c281b6ef30c7b5b79ab2eb32229a93b93c8a2a9`.
- PART1 SHA-256: `0d3594cd277b090885275481dd0f1a08c9dbdd5d8689a0e9b231a6c020f41e3e`.
- PART2 SHA-256: `bdefb5fe52aec5184bc6f34e7f21716089d7daaf58cbe8aae83b54d85e28a151`.

## Правило канонізації

R211 **не стає каноном автоматично**. Після встановлення потрібна жива перевірка автором. Лише після окремого прямого `R211 канон` змінюється канонічна база. До цього **R210G лишається єдиним каноном**.
