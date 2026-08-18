# R211 — WIP checkpoint

Дата: 2026-08-18
Статус: **ПОВЕРНУТО В РОБОТУ ПІСЛЯ НЕВДАЛОЇ LIVE-ПЕРЕВІРКИ, НЕ КАНОН**.
Канонічна база: **R210G**.

## Важливо

Попередньо виданий package R211 з SHA-256 `33d98cf442bb6b3e4f22bc710c281b6ef30c7b5b79ab2eb32229a93b93c8a2a9` **НЕ вважати придатним release candidate**. Під час живої перевірки:
- public menu не підхопив `Контакт`;
- `/contact/` працював некоректно;
- Boss layout роз'їхався через надмірно складну mail-preview/dropdown реалізацію.

Цей package не канонізувати і не використовувати як базу подальшої роботи. Корекція R211 триває від канонічного R210G з перенесенням лише підтверджених потрібних змін.

## HARD working principle

Перед кожною реалізацією читати `SIMPLE-FIRST-WORKING-CANON.md`.

**Спочатку — найпростіше дієве рішення.** Не додавати dropdown/preview/окремі режими або нові підсистеми без необхідності.

## R211 — погоджений склад

### Deploy / persistent state
- FULL/PATCH не повинен скидати live `/_site-state/`.
- Generated public HTML після deploy синхронізується з live state там, де це потрібно.
- User-generated media відділяються від release-owned assets.

### Analytics
- `analytics/data` існує після clean deploy або створюється runtime.
- Boss/self-test перевіряє writable.

### SEO
- Book state синхронізується з `/books/`, `/books/new/`, sitemap, meta description та JSON-LD.
- Прибираються застарілі hard-coded counts.
- SEO self-test перевіряє state/public/JSON-LD/sitemap/canonical/hreflang/robots/IndexNow/Bing/analytics.

### Protected SEO identity
- `651fd21ecd39f1571c9d4ab6a9a7574c.txt` — активний IndexNow/Bing verification file.
- Файл входить у R211 і має правильний content, рівний імені ключа.
- Cleanup та ordinary overlay/content patches не можуть його видалити або замінити.
- Full CORE release може штатно оновити файл лише якщо ключ свідомо змінюється.
- Жорсткий канон: `mavik-sklad/files/PROTECTED-SEO-FILES.md`.

### Boss → Пошта — SIMPLE FIRST
- У верхньому меню Boss лишається **один звичайний пункт `Пошта`**.
- Поруч — маленький badge/плашка з числом непрочитаних.
- Клік по `Пошта` або badge одразу відкриває пошту.
- **Ніяких dropdown, preview останніх листів, окремого `З сайту` у верхній навігації чи інших елементів, що розтягують header.**
- Усередині пошти допускається просте розділення `З сайту` / `Скринька`.

### Контакт
- Public menu має пункт `Контакт`.
- Contact form: ім'я, email, тема, повідомлення + погоджений вступний текст.
- Повідомлення з форми зберігаються в protected Boss inbox як primary copy.
- `site@mavik.name` — резервна email-копія.
- Повідомлення `З сайту` показуються в Boss → Пошта.
- CSRF + honeypot + простий rate-limit.

### Книги → платформи
- Repeatable `назва платформи + URL` у create/edit.
- Persistent state; public book page; `sameAs` де доречно.

### Медіатека
- False-positive `зображення використовується` прибрати: перевіряти active persistent bindings.
- Якщо використовується — показувати де саме.
- У drag&drop media list клік по thumbnail відкриває велике preview; drag — окремою ручкою.

### Анонси / обкладинки
- Active cover зберігається в persistent state.
- Cosmetic deploy не може повернути старий seed/generated cover.

## БЛОГ — ЖОРСТКИЙ МЕХАНІЗМ

Звичайний новий блог = **content-only ZIP patch через Boss**, без CORE, FTP, ручних PHP installers та `?apply=1`.

Готові записи з `R210G_BLOG_CONTENT_PATCH_2026-08-18.zip` можуть входити в повний R211 як content snapshot, але подальші blog additions — лише штатними content-only patches.

## Перед наступною видачею R211

Обов'язково:
- порівняти Boss geometry з R210G;
- PHP lint;
- JSON parse;
- clean install + upgrade R210G → R211;
- перевірити public `Контакт` і menu migration;
- перевірити mail badge без зміни geometry;
- перевірити contact inbox flow;
- state → HTML → SEO → media → analytics regression;
- manifest parity;
- ZIP CRC;
- FULL + multipart deployer validation.

Нові SHA/hash/set-id записувати тільки після повторного повного пакування. Старі R211 hashes вище вказані лише як **REJECTED BUILD IDENTIFIER**.

R211 стає каноном тільки після нової живої перевірки та прямого рішення автора `R211 канон`. До цього **R210G — єдиний канон**.
