# MAVIK.NAME — R214 WIP CHECKPOINT

Дата: 2026-08-18
Статус: **готовий deployment candidate, НЕ КАНОН**
Канонічна CORE-база: **R213**
База R214: **R213**

## Мета

Технічне прибирання, SEO/indexation refresh і посилення discoverability без зміни редакційної концепції сайту.

## Що виправлено

- `Код легенди` та будь-яка інша публічна книга зі статусом `Анонси` тепер входить у `sitemap.xml`, бо canonical book page існує незалежно від placement.
- `mavik_live_sync_sitemap()` будує book URLs з усіх публічних book objects, а не лише з placement `Бібліотека`.
- SEO consistency self-test перевіряє sitemap для всіх публічних book pages, включно з анонсами.
- Після першого відкриття нового Boss запускається одноразовий `r214-seo-refresh`: усі URL sitemap + вилучений legacy blog URL надсилаються в IndexNow; Bing URL Submission також виконується, якщо server-side Bing API key уже налаштований.
- Результат одноразового refresh зберігається у protected `/_site-state/migrations/r214-seo-refresh.done.json`.
- Старий вилучений URL `blog/chy-mozhe-shi-buty-instrumentom-pysmennyka/` додатково надсилається як dead URL; його 410/cleanup зберігається.
- До Person structured data додано офіційний Booknet profile; existing NovelKlo/Аркуш identity links збережені.
- `about/`: прибране дублювання `MaVik` у title, додані OG/Twitter metadata та Person/ProfilePage JSON-LD без нового використання приватних фото.
- `platformy/`: додані OG/Twitter metadata, Person/WebPage JSON-LD, профільні посилання мають `rel="me noopener noreferrer"`.
- `blog/`: Blog schema тепер містить власний Person node для author `@id`.
- Із CORE фізично вилучено 13 застарілих release-note файлів R208–R212; runtime compatibility migrations не чіпалися, бо вони захищають persistent live state при відновленні.
- Public GitHub repository отримав кореневий `README.md` з прямим офіційним посиланням `https://mavik.name/` — додатковий зовнішній discovery/backlink signal.

## Перевірки

- PHP lint: **35/35 OK**.
- JSON: **20/20 OK**.
- sitemap XML: **OK**.
- sitemap: **65 unique URL**.
- усі 22 публічні canonical book pages присутні в sitemap; missing = 0.
- усі sitemap targets фізично існують; missing = 0.
- для indexable HTML у sitemap: missing title/description/canonical, noindex або H1 mismatch = **0**.
- protected IndexNow key `651fd21ecd39f1571c9d4ab6a9a7574c.txt`: **OK**.
- старий AI blog slug відсутній у sitemap/home/blog.
- FULL/PART CRC: **OK**.
- multipart union: повне покриття managed files, missing 0 / extra 0.

## Файли релізу

- `214 Збірка_Сайт_ОК.zip`
- `214 Збірка_Сайт_ОК_PART1.zip`
- `214 Збірка_Сайт_ОК_PART2.zip`

Managed files: **633**.
Manifest SHA-256: `514a3a30b17cf18b92dd042b7bda25d5f0abde75abed8f3960c2817b3806f9bc`
Set id: `r214-514a3a30b17cf18b`
FULL SHA-256: `441a69f1e5751554a164446c877c7588d0f43631f7a8877e8b3f9373064b359e`
PART1 SHA-256: `f50fd9dc77ad4ca354cfff4cb0ca7cc6651f39c1b72cdc5462d1df826871158b`
PART2 SHA-256: `56d1a8a6f04dfa37bbc38690b2282654804fdc358c0ee54a4164387f760686f5`

## Зовнішня перевірка

Пошуковий crawler snapshot досі показує попередній варіант головної/блогу, тому R214 навмисно робить одноразовий full URL refresh. Booknet і NovelKlo уже публічно містять `Офіційний сайт автора: mavik.name`; GitHub README додає ще одну контрольовану зовнішню згадку.

## Після встановлення

Один раз відкрити Boss. Це запускає R214 SEO refresh. Якщо Bing API key у protected state не заданий, IndexNow все одно виконається; Bing можна додатково запустити пізніше з Boss → SEO.

## Канонізація

R214 **НЕ КАНОН**, доки автор прямо не затвердить його. До затвердження єдина канонічна база — R213.
