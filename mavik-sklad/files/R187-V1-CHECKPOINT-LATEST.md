# MAVIK.NAME — R187 v1 CHECKPOINT

Дата: 2026-08-15 22:19 +03:00
Статус: **КАНДИДАТ / НЕ КАНОНІЧНИЙ ДО ПРЯМОГО ПІДТВЕРДЖЕННЯ КОРИСТУВАЧА**
База: canonical full R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`, SHA-256 `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`.

## Кандидат

- Файл: `187 КАНОН_Сайт_ОК_daf4fd24_v1.zip`
- Release у `.mavik-release.json`: **187** (номер релізу свідомо НЕ піднято за прямою вказівкою користувача)
- Base release: 186
- SHA-256: `45140ca9998c74e0334d9fca7a134c5f3928158333532d41b901603f5b557c68`
- Розмір: `54,482,694` байти
- `managed_files`: 510, exact match фактичним файлам архіву.
- `unzip -t`: PASS.
- Boss `mavik_deploy_validate`: PASS (`BOSS_ARCHIVE_VALIDATE_OK`).
- Boss `mavik_deploy_manifest`: PASS, release=187, base=186, managed=510.

## Додано книгу

Назва: **«Евакуація, або Дорогою до стабіка»**
Автор: Макарчук Віктор
Тип: повість
Slug: `evakuatsiia-abo-dorohoiu-do-stabika`
Жанр у каталозі: `воєнна проза / містика`
Genre keys: `war`, `mystic`, `drama`
Дата: 2026-08-15
Статус: повний текст / final.

Використано наданий користувачем рукопис `Евакуація_після_редактури.docx` і фінальну обкладинку `Evak_Cover_2.png`.
SHA-256 обкладинки: `71c1a5309043156e5c8cad0181ed8421795ade267c2cb37c90a188a2e9906760`.
EPUB містить ту саму обкладинку byte-for-byte.

Створено/оновлено:
- `/books/evakuatsiia-abo-dorohoiu-do-stabika/`
- `/books/evakuatsiia-abo-dorohoiu-do-stabika/read/`
- текстовий reader `/read/text/` + full TXT + 4 частини
- `/downloads/evakuatsiia-abo-dorohoiu-do-stabika.epub`
- `/images/covers/evakuatsiia-abo-dorohoiu-do-stabika.png`
- каталог `/books/`
- нові книги `/books/new/`
- головна сторінка
- жанри `/genres/voienna-proza/` та `/genres/mistyka/`
- `sitemap.xml`, `llms.txt`
- state defaults `boss-content.json`, `book-order.json`.

DOCX має 16 заголовків змісту після вилучення дубльованої назви твору: 8 блоків `Історія ...` + Піксель, Борода, Док, Малий, Касир, Монгол, Філософ, Ghost.

## Пароль / безпека

Реалізовано:
- аварійне одноразове відновлення доступу до вже існуючого owner-акаунта;
- `Забули пароль?` на `/account/`;
- email reset на `viktor@mavik.name`;
- криптографічний одноразовий токен, у state зберігається тільки SHA-256;
- TTL reset-посилання: 30 хвилин;
- rate limit reset-запитів;
- після використання reset-токен повторно не діє;
- в Boss верхній пункт **Безпека**;
- картка **Пароль і безпека** на головній Boss;
- зміна пароля в Boss з перевіркою чинного пароля;
- мінімальна довжина нового пароля: 12 символів.

Тимчасовий пароль у checkpoint **НАВМИСНО НЕ ЗБЕРІГАЄТЬСЯ**. Його передати користувачеві окремо в приватній розмові.

Security smoke test: PASS:
- аварійний пароль приймається для існуючого owner;
- після входу стає поточним і emergency-id позначається використаним;
- зміна пароля працює;
- старий пароль після зміни не працює;
- reset-token валідний один раз;
- новий пароль після reset працює.

## Технічний контроль

- PHP lint: 21/21, BAD 0.
- JavaScript `node --check`: 15/15, BAD 0.
- JSON: 8, BAD 0.
- XML: sitemap + blog feed, 2/2, BAD 0.
- EPUB: 20, CRC BAD 0.
- Нова книга: landing/reader/EPUB/cover/home/catalog/new/war/mystic/sitemap/llms = PASS.
- `_site-state` у фінальному ZIP: 0.
- nested ZIP у фінальному tree: 0.

## Де лежить binary

На момент checkpoint готовий ZIP фізично створено у поточному runtime:
`/mnt/data/187 КАНОН_Сайт_ОК_daf4fd24_v1.zip`.

GitHub connector у цій сесії має текстові `create_file/update_file`, але не придатний для передачі 54.5 MB binary ZIP безпосередньо. Тому **не стверджувати, що ZIP завантажений на дальній склад**. Користувачеві ZIP видається як файл цієї сесії. SHA і розмір зафіксовано вище.

## Наступний крок

1. Користувач завантажує/перевіряє `187 КАНОН_Сайт_ОК_daf4fd24_v1.zip`.
2. Якщо користувач прямо затверджує v1 — оновити канонічний статус у `releases/CANON.md` та `START-HERE-SITE.txt`.
3. Якщо є зауваження — правити від цього v1-кандидата, не від старої shell-збірки.
4. R188 English не вважати перебазованою на v1, доки v1 не затверджено канонічною.