# MAVIK.NAME — R230 MAIL BROADCAST CHECKPOINT

Дата: 2026-08-30
База: **R229 (CANONICAL / ONLY WORKING BASE)**
Статус R230: **RELEASE CANDIDATE / BUILT / VALIDATED / NOT CANONICAL**

## Ідентичність кандидата
- file: `R230.zip`
- size: `28005558` bytes
- SHA-256: `e03cbfdd328d176eacb9548c75fc73d119ec8f924fbe1f2e669fefca2f2abea0`
- ZIP entries: `393`
- managed files: `268`
- Boss deploy validation: PASS

## UX: один лист — багато адресатів
Користувач пише **один лист один раз**: одна тема, одне поле тексту, один набір вкладень. У полі «Кому» додає 1, 2, 10, 50 або більше адресатів.

Поле «Кому»:
- компактне chip/tag поле;
- Enter, кома або `;` завершують адресу;
- масове вставлення списку адрес;
- автопідказки з адресної книги;
- дедуплікація;
- лічильник унікальних отримувачів;
- перед масовою розсилкою підтвердження кількості окремих листів.

Після одного натискання «Надіслати» Boss автоматично робить окреме SMTP-відправлення на кожну адресу.

## Приватність розсилки
- НЕ надсилається один RFC-лист із кількома адресами в `To:`.
- Кожна адреса = окремий SMTP message/transaction.
- У видимому `To:` кожного листа є тільки поточний адресат.
- Інші адреси розсилки не присутні у видимих headers.
- Для кожного адресата генерується окремий `Message-ID`.
- HTML + plain-text alternative R229 збережено.
- BCC не використовується як основний механізм масової розсилки; якщо BCC заданий вручну, прихований лист має `To: undisclosed-recipients:;`.

## Результат по кожному адресату
Після розсилки Boss показує окремо для кожної адреси:
- email;
- timestamp;
- статус `accepted` / `failed`;
- Message-ID;
- короткий SMTP result/error без секретів.

Підсумок: `Успішно: X із Y`.
Термінологія UI: **«Сервер прийняв лист»** / **«Помилка відправлення»**. Не заявляти «доставлено» або «прочитано», якщо є лише SMTP acceptance.

При частковій помилці у compose залишаються тільки невдалі адреси, а тема/текст зберігаються для безпечного повтору без дублювання успішних відправлень.

## Надіслані
Після успішного SMTP кожен окремий лист додається в IMAP `Надіслані` окремою копією, якщо папка доступна. Помилка IMAP append не змінює вже успішний SMTP-статус.

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
- автопідказки в compose;
- додавання / редагування / видалення контактів;
- email, ім’я/назва та організація, якщо задані;
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
6. `boss/index.php` — handlers/actions/styles;
7. `stats/index.php` — release label R230.

Побічні зміни публічного дерева/cache-busters були виявлені під час складання і відкинуті; публічний контент відновлено точно з R229.

## Валідація
PASS:
- PHP syntax/lint;
- compose JavaScript syntax (`node --check`);
- parser separators + dedupe;
- 3 адресати → 3 окремі MIME payloads;
- у кожного payload тільки власний `To:`;
- 3 унікальні Message-ID;
- BCC без видимого `Bcc:` header;
- симуляція 2 SMTP accepted + 1 failed → точний 2/3 результат;
- IMAP append тільки для accepted;
- send log persistence;
- address book persistence/dedupe/counters;
- ZIP integrity;
- Boss deploy validation (`393` entries / `268` managed files).

Реальний SMTP-тест у локальній збірці **не запускався**, тому що live пароль поштової скриньки правильно зберігається лише у production `/_site-state/` і відсутній у release ZIP. Після встановлення R230 реальний SMTP acceptance буде показуватися окремо для кожного адресата.

## Канон
**R229 залишається єдиним каноном.**
R230 не отримує канонічного статусу без прямого затвердження автора після встановлення і перевірки.
