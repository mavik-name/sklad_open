# MAVIK.NAME — R230 MAIL BROADCAST CHECKPOINT

Дата: 2026-08-30
База: **R229 (CANONICAL / ONLY WORKING BASE)**
Статус R230: **RELEASE CANDIDATE / BUILT / VALIDATED / NOT CANONICAL**

## Ідентичність кандидата
- file: `R230.zip`
- size: `28005713` bytes
- SHA-256: `d76f9dcfc12eb28f9132e209ebf1e7a817953eab276a8896288aea238d78b778`
- ZIP entries: `393` (`268` files + `125` directories)
- managed files: `268`
- source R229 SHA-256: `9f047a6b0fc71699bd6a9ab070fe65c291d257110b77bc935f74953b087166c8` — verified exact

## UX: один лист — багато адресатів
Користувач пише **один лист один раз**: одна тема, одне поле тексту, один набір вкладень. У полі «Кому» додає 1, 2, 10, 50 або більше адресатів.

Поле «Кому»:
- одне компактне chip/tag поле замість великих полів адрес;
- Enter, кома або `;` завершують адресу;
- масове вставлення списку адрес;
- автопідказки з адресної книги;
- case-insensitive дедуплікація;
- Backspace видаляє останній chip, `×` — вибраний;
- лічильник унікальних отримувачів;
- кнопка показує `Надіслати N окремих листів`;
- перед масовим Send є підтвердження, що кожен адресат бачитиме тільки себе.

Після одного натискання «Надіслати» Boss автоматично формує окреме SMTP-відправлення на кожну адресу.

## Приватність розсилки
- НЕ надсилається один RFC-лист із кількома адресами в `To:`.
- Кожна адреса = окремий message payload / SMTP transaction.
- У видимому `To:` кожного листа є тільки поточний адресат.
- Інші адреси розсилки не присутні у видимих headers.
- Для кожного адресата генерується окремий `Message-ID`.
- HTML + plain-text alternative R229 збережено.
- Видиме поле BCC у новому compose прибране: масова приватність забезпечується окремим листом кожному.
- Старі R229-чернетки з BCC не втрачають адреси: legacy BCC автоматично мігрує в єдиний потік отримувачів при відкритті.

## Результат по кожному адресату
Після розсилки Boss показує окремо для кожної адреси:
- email;
- timestamp;
- статус `accepted` / `failed`;
- Message-ID;
- короткий SMTP result/error без секретів.

Підсумок: `Сервер прийняв X із Y окремих листів`.
Термінологія UI: **«Сервер прийняв»** / **«Помилка відправлення»**. Не заявляти «доставлено» або «прочитано», якщо є лише SMTP acceptance.

## Часткові помилки та безпечний повтор
- Помилка однієї адреси не маскується загальним успіхом.
- Обробка наступних адрес продовжується.
- Якщо частина адрес не пройшла, автоматична retry-чернетка містить **тільки невдалі адреси** разом із тією самою темою/текстом.
- Успішним адресатам повторний лист випадково не надсилається.

## Надіслані
Після кожного SMTP `accepted` Boss окремо намагається додати саме цей лист у IMAP `Надіслані`. Помилка IMAP append не змінює вже успішний SMTP-статус.

## Журнал розсилок
Protected runtime storage:
`/_site-state/mail-send-log.json`

Зберігаються без тіла листа і без секретів:
- batch_id;
- subject;
- created_at;
- recipient / role;
- status;
- message_id;
- smtp_result/error;
- sent_saved status.

Boss має окремий перегляд історії розсилок з результатом по кожному адресату.

## Адресна книга
Protected runtime storage:
`/_site-state/mail-address-book.json`

Функції:
- автоматична case-insensitive дедуплікація;
- автопідказки в compose за ім’ям/назвою та email;
- додавання / редагування / видалення контактів;
- швидка дія `Написати`;
- `last_used`, `attempt_count`, `send_count`;
- автоматичне навчання з адрес, використаних у відправленнях/чернетках та відкритих вхідних повідомленнях;
- runtime-файл зберігається в захищеному `/_site-state/` і не стирається full deploy.

## Реалізовані файли відносно R229
Змінено тільки:
1. `.htaccess` — release header R230;
2. `.mavik-release.json` — release identity R230 / base R229;
3. `_site-admin/boss-mail-ui.php` — chips, autocomplete, address book, history, per-recipient result;
4. `_site-admin/mail-client.php` — per-recipient SMTP, Message-ID, logs, contacts;
5. `_site-admin/seo-tools.php` — очікуваний release header R230;
6. `boss/index.php` — handlers/actions/styles, retry only failed recipients;
7. `stats/index.php` — release label R230.

Публічний контент і його cache-busters не перебудовувалися без потреби; сайтова частина успадкована безпосередньо з R229.

## Валідація
PASS:
- canonical source R229 SHA-256 exact;
- managed files: `268/268`;
- PHP: `31/31` syntax PASS;
- JS: `15/15` syntax PASS;
- JSON: `12/12` parse PASS;
- public JSON-LD: `82/82` parse PASS і збігається з R229;
- EPUB CRC: `21/21` PASS;
- compose inline JavaScript syntax PASS;
- 3 адресати → 3 окремі MIME payloads;
- у кожного payload тільки власний `To:`;
- 3 унікальні Message-ID;
- симуляція `2 accepted + 1 failed` → точний результат 2/3;
- address-book dedupe / counters PASS;
- retry draft only failed recipients PASS;
- send-log persistence PASS;
- ZIP integrity PASS.

Реальний Cityhost SMTP-тест із production-паролем у release environment не запускався: пароль правильно живе тільки у production `/_site-state/` і не входить до ZIP. Налаштування SMTP/IMAP з R229 не змінювалися.

## Канон
**R229 залишається єдиним каноном.**
R230 не отримує канонічного статусу без прямого затвердження автора після встановлення і перевірки.
