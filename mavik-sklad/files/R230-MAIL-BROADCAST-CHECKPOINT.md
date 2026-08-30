# MAVIK.NAME — R230 MAIL BROADCAST CHECKPOINT

Дата: 2026-08-30
База: **R229**
Фінальний статус R230: **AUTHOR APPROVED / OFFICIAL / CANONICAL / SOLE WORKING BASE**

## Фінальна ідентичність
- file: `R230.zip`
- size: `28005558` bytes
- SHA-256: `e03cbfdd328d176eacb9548c75fc73d119ec8f924fbe1f2e669fefca2f2abea0`
- ZIP/Boss deploy validation: PASS — `393` entries / `268` managed files
- source R229 SHA-256: `9f047a6b0fc71699bd6a9ab070fe65c291d257110b77bc935f74953b087166c8`

## Канонічне рішення автора
- R230 затверджено канонічною версією 2026-08-30.
- Усі наступні зміни, recovery та нові релізи починати тільки від R230.
- R229 зберігати як **verified rollback reserve**.
- R229 не видаляти, не вважати сміттям і не використовувати як робочу базу без прямого наказу автора на rollback.

## UX: один лист — багато адресатів
- один compose: одна тема, одне поле тексту, один набір вкладень;
- одне компактне chip/tag поле «Кому»;
- Enter, кома або `;` завершують адресу;
- bulk paste списку адрес;
- autocomplete з адресної книги;
- case-insensitive дедуплікація;
- лічильник унікальних отримувачів;
- один Send запускає окреме SMTP-відправлення кожному адресату.

## Приватність
- кожна унікальна адреса = окремий message payload / SMTP transaction;
- у видимому `To:` тільки поточний адресат;
- інші адреси розсилки не присутні у видимих headers;
- окремий Message-ID для кожного адресата;
- HTML + plain-text alternative R229 збережено.

## Результат і повтор
- окремий accepted/failed статус по кожній адресі;
- підсумок `X із Y`;
- SMTP acceptance не називати «доставлено»;
- після часткової помилки retry містить тільки невдалі адреси;
- успішним адресатам лист повторно не надсилається.

## Надіслані
Після кожного SMTP `accepted` Boss окремо намагається додати саме цей лист у IMAP `Надіслані`. Помилка IMAP append не змінює вже успішний SMTP-статус.

## Protected runtime
- send log: `/_site-state/mail-send-log.json`;
- address book: `/_site-state/mail-address-book.json`;
- тіло листів і SMTP-секрети там не зберігаються;
- runtime-файли переживають full deploy.

## Адресна книга
- dedupe;
- autocomplete за ім’ям/назвою/email;
- add/edit/delete;
- швидка дія `Написати`;
- `last_used`, `attempt_count`, `send_count`;
- навчання з використаних адрес/чернеток/відкритих вхідних/site-contact повідомлень.

## Змінені файли відносно R229
1. `.htaccess`;
2. `.mavik-release.json`;
3. `_site-admin/boss-mail-ui.php`;
4. `_site-admin/mail-client.php`;
5. `_site-admin/seo-tools.php`;
6. `boss/index.php`;
7. `stats/index.php`.

## Validation
PASS:
- PHP syntax;
- compose JavaScript syntax;
- address dedupe;
- 3 recipients → 3 unique Message-ID;
- no cross-recipient `To:` leakage;
- BCC hidden-header check;
- simulated `2 accepted + 1 failed` accounting;
- address-book persistence;
- send-log persistence;
- ZIP integrity;
- Boss deploy validation.

Live SMTP delivery test was not run in the release environment because production credentials are intentionally absent from release ZIP.

## Авторитетні записи
- current canon: `mavik-sklad/files/R230-CANON.md`;
- release authority: `mavik-sklad/releases/CANON.md`;
- registry: `mavik-sklad/files/CANON-REGISTRY.md`;
- rollback reserve: `mavik-sklad/files/R229-RESERVE.md`.
