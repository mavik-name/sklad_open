# MAVIK.NAME — R212 CANON CHECKPOINT

Дата канонізації: 2026-08-18
Статус: **ЄДИНА ЧИННА КАНОНІЧНА STRUCTURAL/FUNCTIONAL CORE-БАЗА**

## Канонічна збірка

- `212 Збірка_Сайт_ОК.zip`
- `212 Збірка_Сайт_ОК_PART1.zip`
- `212 Збірка_Сайт_ОК_PART2.zip`

Manifest SHA-256: `a3261b7e127653097e23d014c7b3d0c8414c534457265a7f3be68990481801cf`
Set id: `r212-a3261b7e12765309`
FULL SHA-256: `694cd5c247a047c71bf9ccaaa61336a5cfd41cb91016d4a9c85af29d8580b390`
PART1 SHA-256: `2fb8ab725be66842c4086e3fd5e203f94cd8969d003e5c26fb5da7c3ab24c635`
PART2 SHA-256: `74ddd17d354798e81dce5b695058b7c6f8e7e7a57707ca915e0409de300bafc9`
Managed files: **646**.

## Перевірки канонічної збірки

- PHP lint: **35/35 OK**.
- JSON parse: **OK**.
- `.mavik-release.json`: **646/646**.
- Blog public/state: **10/10**.
- Hero images: **2560×1440 / high-res OK**.
- FULL ZIP CRC: **OK**.
- PART1/PART2 CRC: **OK**.
- Multipart union: **646/646**.

## Канонічна поведінка

### Книги / Анонси
- При додаванні книги автор обирає розміщення: **Бібліотека** або **Анонси**.
- Анонс — це статус тієї самої книги, не окрема сутність і не дубль сторінки.
- Розміщення можна змінювати в редагуванні книги.
- `Опис для анонсу` — окреме редаговане поле; за відсутності використовується короткий опис книги.
- Обкладинка анонсу береться з обкладинки книги.
- Стабільна обкладинка `Коду легенди`: `/images/covers/kod-lehendy.jpg`.

### Блог
- Публічний блог: **10 записів**.
- Тематика: література, твори автора, задуми, ідеї, читач.
- Технології написання не є темою блогу.
- Не акцентувати використання ШІ в літературному контенті.
- Виняток: музика, де згадка допустима як чесний опис аранжування/виконання.
- Публічний підпис `Ілюстрацію згенеровано в ChatGPT` не показується.
- Ілюстрації мають відповідати змісту й бути достатньої якості для desktop.

### Privacy media
- Приватні фото/відео автора не є загальною медіатекою.
- Дозвіл на використання завжди локальний і діє лише для конкретної прямо погодженої публікації/зображення.
- Без нового прямого дозволу приватні матеріали або похідні від них не використовувати.

### Contact / Mail
- Public `Контакт / Contact` працює у штатному public shell і має штатне темне тло.
- Contact form: ім’я, email, тема, повідомлення; CSRF + honeypot + simple rate-limit.
- Primary delivery: protected `/_site-state/contact-inbox/`.
- Backup email: `site@mavik.name`, `Reply-To` читача.
- Boss → Пошта: один звичайний пункт `Пошта` + маленький числовий unread badge; без dropdown/preview/pulse.
- Усередині пошти прості канали `З сайту` / `Скринька`.

### Persistent state / media / deploy
- `/_site-state/` — protected live state; штатний deploy/patch його не перезаписує.
- Cosmetic/content deploy не повинен скидати focus, порядок, анонсні прив’язки або live media bindings.
- Media delete check має дивитися на активні bindings/state і показувати реальне місце використання.
- User media зберігається окремо від release-owned assets.

### SEO / analytics
- `analytics/data` створюється runtime; writable перевіряється diagnostics/self-test.
- Books public/meta/JSON-LD/sitemap мають синхронізуватися з єдиного актуального стану.
- Root IndexNow/Bing key `651fd21ecd39f1571c9d4ab6a9a7574c.txt` — protected SEO identity file.
- Контентна зміна має лишати узгодженими public state і search state: internal links, sitemap, robots/noindex, canonical, hreflang, structured data, IndexNow та SEO self-test — де релевантно.

### Public shell / reader / maintenance
- Один global public shell і одна система геометрії.
- Public font family: `Georgia, 'Times New Roman', serif`.
- Breakpoints: mobile `<=767`, tablet `768–1099`, desktop `>=1100`.
- `Назад` — перший пункт меню на внутрішній сторінці.
- Desktop active menu item — золотий.
- `Поділитись` — коротка назва public share action.
- Mobile-only PWA install flow.
- Desktop без install UI та без audio-reader UI.
- Mobile `Читати` = текст; `Слухати` = explicit listen mode; central audio control `▶ Слухати ↔ ⏸ Пауза`.
- Один global maintenance mode.

### Boss / content workflow
- SIMPLE FIRST — обов’язковий принцип.
- Нормальний новий блог = **content-only ZIP patch через Boss**, без CORE change, FTP, standalone PHP installer або нового CORE release.
- Routine content work не повинна приховано змінювати PHP/JS/CSS/Boss/templates/routing/PWA/SEO engine.

## Обов’язкові супровідні канони

- `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`
- `mavik-sklad/files/PROTECTED-SEO-FILES.md`
- `mavik-sklad/files/kanon-shapky-mobilnoi-chytanky.txt`
- `mavik-sklad/files/kanon-storinky-knyhy.txt`

## Продовження роботи

Будь-яка наступна site structural/functional робота починається **тільки від R212**.

Нова версія не стає каноном автоматично. Потрібне окреме пряме затвердження автора.
