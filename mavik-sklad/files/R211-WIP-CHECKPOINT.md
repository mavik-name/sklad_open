# R211 — DEPLOYMENT CANDIDATE checkpoint

Дата: 2026-08-18
Статус: **ВИПРАВЛЕНИЙ КАНДИДАТ ДЛЯ LIVE-РОЗГОРТАННЯ, НЕ КАНОН**.
Канонічна база: **R210G**.

## Відхилений попередній R211

Попередній package R211 з SHA-256 `33d98cf442bb6b3e4f22bc710c281b6ef30c7b5b79ab2eb32229a93b93c8a2a9` — **REJECTED**. Не використовувати й не канонізувати.

Причини: public menu/content не пройшли коректний upgrade, а Boss header був перевантажений mail-preview/dropdown.

## SIMPLE FIRST

Перед будь-якою наступною правкою обов'язково читати `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`.

Boss → Пошта у верхній навігації = **один звичайний пункт `Пошта` + маленький цифровий badge**. Клік веде прямо в пошту. Жодних dropdown/preview/окремого `З сайту` у верхній навігації.

## Ключова корекція upgrade R210G → R211

Під час тесту виявлено корінь попереднього збою: перше встановлення R211 виконує ще **старий R210G-deployer**, тому нові PHP-функції R211 не можуть виконатися в тому самому вже завантаженому PHP-процесі.

Виправлення SIMPLE-FIRST:
- усі потрібні public-файли R211 вже входять у release ZIP і з'являються одразу після копіювання;
- при **першому відкритті нового Boss** запускається одноразовий `r211-bootstrap-v2`;
- bootstrap додає в live state відсутній `Контакт`, 3 нові blog posts та редакторську версію всіх 11 українських blog posts;
- після успіху записується protected marker у `/_site-state/migrations/`;
- повторні відкриття/розгортання не переписують подальші ручні правки автора.

Реальний simulation test старим R210G-deployer:
- одразу після deploy public blog = **11 posts**;
- public menu містить **Контакт**;
- live state до першого нового Boss лишається старим (8 posts), як і очікується;
- перше відкриття нового Boss: `+3 posts`, `11 editorial updates`, `+Contact`;
- повторний bootstrap: `already-applied`;
- тестова ручна правка після bootstrap пережила повторний sync без перезапису.

Multipart R210G-deployer simulation: PART1 → waiting, PART2 → successful assembly/deploy, потім bootstrap → **11 posts + Contact**.

## Блог — редакторська ревізія

Усі **11 українських записів** пройшли жорсткий антисинтетичний прохід за головним каноном людського письма:
- прибрані шаблонні підводки й висновки;
- прибрані штучні `Контекст і джерела`/sourcebox-блоки, де вони не потрібні живому авторському тексту;
- зменшена лекційність, надмірна симетрія та пояснення очевидного;
- збережені факти, позиція автора, назви й дати;
- голос переведений у конкретне перше лице/авторську думку там, де це природно;
- `Просто — дякую` повернуто до прямої людської манери автора.

У R211 є 3 нові записи за 12, 15 і 18 серпня:
1. `А що тут, власне, читати?`
2. завершення `Евакуації`
3. завершення `Соціальної`

Надалі новий блог = **content-only ZIP patch через Boss**, без CORE/FTP/manual PHP installer/`?apply=1`.

## Інші зміни R211

- `analytics/data` створюється runtime автоматично; Boss SEO self-test перевіряє writable.
- Books SEO: state ↔ `/books/` ↔ `/books/new/` ↔ JSON-LD ↔ sitemap/meta синхронізація; hard-coded `19 книг` прибрано.
- Books JSON-LD у фінальному дереві: **21**; New books ItemList: **8**.
- Sitemap містить нові blog URLs і UA/EN Contact.
- `651fd21ecd39f1571c9d4ab6a9a7574c.txt` збережений як protected IndexNow SEO identity file.
- Boss → Книги: repeatable `Платформа + URL`, persistent state, public links, `sameAs` де доречно.
- Boss → Зображення: active-binding check замість пошуку старих згадок; показ місця використання; click-to-large-preview у drag&drop list.
- User-uploaded covers/blog images мають protected user paths.
- Announcement cover/focus/order не повинні скидатися cosmetic deploy.
- Public `Контакт / Contact`: ім'я, email, тема, повідомлення; CSRF + honeypot + rate-limit.
- Contact primary delivery = protected `/_site-state/contact-inbox/`; резервна копія = `site@mavik.name` з `Reply-To` читача.
- Boss → Пошта всередині має прості канали `З сайту` / `Скринька`.

## Перевірки фінального DEPLOY-кандидата

- Boss base geometry (`.top`, `.nav`, `.nav a`, mobile breakpoints) звірена з R210G: базові правила не змінені.
- mail dropdown/preview у top nav: **відсутні**; pulse-animation badge: **відсутня**.
- PHP lint: **35/35 OK**.
- JSON parse: **16/16 OK**.
- Blog JSON-LD parse: **OK**.
- Blog public cards: **11**.
- Contact form POST: message stored in protected Boss inbox; SMTP failure у тестовому середовищі не втрачає primary copy.
- R210G → R211 FULL deploy simulation старим R210G-deployer: **OK**.
- R210G → R211 multipart simulation: **OK**.
- Persistent `/_site-state/`, fake Bing secret і protected user-media sentinel пережили FULL deploy: **OK**.
- IndexNow key content = filename key: **OK**.
- Suspicious adjacent duplicate directory segments: **0**.
- Raw release manifest parity: **640/640 files**.
- FULL ZIP CRC: **OK**.
- PART1/PART2 CRC: **OK**.
- FULL deployer validation: **OK**.
- PART1/PART2 deployer validation: **OK**.
- Multipart union parity: **640/640**.

## Фінальні файли для live-перевірки

- `211 Збірка_Сайт_DEPLOY.zip`
- `211 Збірка_Сайт_DEPLOY_PART1.zip`
- `211 Збірка_Сайт_DEPLOY_PART2.zip`

Generated at: `2026-08-18T13:55:47+03:00`

Full manifest SHA-256:
`dedebde4c3e8b0186e6ae396c43e3a40177925c9c8307d49aa61b47a8a3060d4`

Multipart set id:
`r211-dedebde4c3e8b018`

FULL SHA-256:
`45ff1773ee2efce05ec4101dac673390fb3c1658f9cf0f0f712da4e8e291c5d0`

PART1 SHA-256:
`d29be2af001755ff2cc01b63ff2ce221b1e99d690d03e2c6ee66697f54a43058`

PART2 SHA-256:
`cf41d969dcdc1c779a460758faf24e4c18ab2131e0560b6bad6fc1961236e841`

## Канонізація

Це **deployment candidate**, не канон. Після live-встановлення й перевірки автор окремо вирішує `R211 канон`. До цього **R210G лишається чинною канонічною CORE-базою**.
