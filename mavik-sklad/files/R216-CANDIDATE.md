# MAVIK.NAME — R216 FINAL CANDIDATE

Оновлено: 2026-08-19
Статус: **FINAL TESTED CANDIDATE / НЕ КАНОНІЧНИЙ ДО ПРЯМОГО ЗАТВЕРДЖЕННЯ АВТОРОМ**

## Release authority

Поточна канонічна CORE-база лишається **R215**, доки автор прямо не затвердить R216.

R216 зібрано виключно від канонічної R215 із поглинанням 10 перевірених EN edition patches у нову locale-aware модель.

Постійне binary storage: ChatGPT Library `/Сайт/`.

## Артефакти кандидата

- `216 Збірка_Сайт_ОК.zip`
- `216 Збірка_Сайт_ОК_PART1.zip`
- `216 Збірка_Сайт_ОК_PART2.zip`
- `R216-AUDIT.txt`
- `R216-CHECKPOINT.txt`
- `R216-CHECKSUMS.txt`

## Ідентифікатори

- Release: `216`
- Base release: `215`
- Managed files: **895**
- Manifest SHA-256: `ccbfcef34fa96b48261643de6c1635edf7c1f16f482bebd03763e322775214c5`
- Multipart set id: `r216-ccbfcef34fa96b48`

### Binary SHA-256

- FULL — `a309b5eff63d92d6b9b910a802a4450dd5de1075ec4858c3cb92b39182449760` — 100363082 bytes
- PART1 — `dcf769b5e4f4bf6e586e2a548376dce6d15d523487659c665b29049264c8e602` — 48495764 bytes
- PART2 — `80a534ceadf3a8233532ca42fc15fcc7de1c58891722b7f4930baaed24e9cc62` — 51872572 bytes

## Реалізовано в R216

1. **Locale storage**: спільне фізичне файлове сховище + окремі protected JSON databases/registries/bindings для кожної локалі під `/_site-state/locales/<locale>/`.
2. **R215 → R216 migration**: 22 UK book objects і 10 уже встановлених EN editions переносяться в нові locale databases; legacy EN `_published` видаляється лише після успішної міграції.
3. **Locale unpublish**: штатне прибирання книги/блогу/музики/анонсу — `Прибрати з локалі`; звичайне фізичне видалення shared content file у Boss відсутнє.
4. **Locale-aware Boss**: blog UA/EN scope, повний EN payload, locale-aware book/music controls та ізольовані writes.
5. **Shared reader CORE**: UA/EN readers використовують спільні `reader-core.css/js`; локалізовані reader controls не дублюються content patches.
6. **Localized home/public projection**: EN home автоматично показує реально опубліковані EN books; locale projections перебудовуються CORE-механізмом.
7. **SEO/entity identity**: `MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name`; стабільні `#website`/`#person`, `/mavik/`, `/en/mavik/`, ProfilePage/Person/WebSite structured data.
8. **Deploy backup**: persistent backup лише mutable database/JSON state; affected CORE/shared files страхуються короткоживучим transaction snapshot, який видаляється після успішного deploy.
9. **Media pipeline**: responsive derivatives, JPEG fallback для opaque PNG, WebP/AVIF де підтримується; GD + безпечний ImageMagick fallback; self-test.
10. **Cache/release identity**: service worker/cache assets і release headers переведені на R216.

## Release gate — PASS

Фінальний FULL ZIP реально встановлено поверх тестового R215 з усіма 10 EN patches через штатний deploy path.

Результат deploy-test:
- copied managed files: **895**;
- UK book DB: **22**;
- EN book DB: **10**;
- legacy EN `_published`: прибрано після успішної міграції;
- protected live sentinel/state: збережено;
- transaction snapshot після успішного deploy: відсутній;
- persistent database-only backup: близько 104 KB;
- `/mavik/` і `/en/mavik/`: присутні;
- sitemap: **109/109 unique canonical URLs**;
- EN book sitemap projection: `/en/books/` + 10 landing + 10 reader URLs.

Static/release gate:
- PHP lint: **37/37 OK**;
- JS syntax: **18/18 OK**;
- XML: **2/2 valid**;
- real JSON-LD blocks: **107/107 parse OK**;
- readers with shared reader-core: **42/42**;
- FULL/PART1/PART2 Boss validation: PASS;
- transaction rollback: PASS;
- database rollback: PASS;
- media pipeline test: PASS.

## SEO / ENTITY — СПАДКОВИЙ КАНОН ВІД R216

R216 є першою реалізацією постійної стратегії: exact/ambiguous query `mavik` має закріплюватися за окремою авторською сутністю MaVik, навіть коли користувач помилково вводить `mavik`, маючи на увазі `mavic`.

Не намагатися ранжувати mavik.name за загальними запитами `дрони`, `купити дрон`, продуктовими DJI/Mavic-запитами й не використовувати doorway pages/keyword stuffing. Ціль — **саме `mavik` як окрема брендова сутність**, а не маскування сайту під тематику дронів.

Повний спадковий канон: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`.

## Наступна дія

1. Передати автору R216 candidate.
2. Автор встановлює/перевіряє release або прямо затверджує його.
3. Лише після прямого затвердження R216 переписати release authority і зробити R216 єдиною канонічною CORE-базою.
4. Після live deploy перевірити live HTML/JSON-LD/sitemap/canonical/hreflang та подати ключові змінені URL на повторну індексацію; виконати IndexNow/Bing submission.
