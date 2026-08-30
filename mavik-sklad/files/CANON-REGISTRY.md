# CANON REGISTRY — MAVIK.NAME

## ЄДИНИЙ КАНОН
`R230`

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**
Дата затвердження: 2026-08-30

Identity:
- file: `R230.zip`
- size: `28005558` bytes
- SHA-256: `e03cbfdd328d176eacb9548c75fc73d119ec8f924fbe1f2e669fefca2f2abea0`
- base: `R229`

Правила:
- усі зміни, виправлення, recovery та наступні релізи починати тільки від `R230`;
- `R229` зберігати як попередню перевірену rollback reserve;
- `R229` не видаляти і не трактувати як сміття;
- `R229` не використовувати як робочу базу без прямого наказу автора на відкат;
- чинний сайт і робочий контекст — українські;
- актуальний production визначати за `R230` + свіжими live-даними; search snippets/cache відокремлювати від live-стану.

## R230 MAIL BASELINE
- один compose-лист для багатьох адресатів;
- recipient chips: Enter / кома / `;` / bulk paste;
- autocomplete з protected адресної книги;
- кожна унікальна адреса = окрема SMTP-транзакція/повідомлення;
- у `To:` тільки поточний адресат;
- окремий Message-ID для кожного адресата;
- окремий accepted/failed статус по кожному адресату;
- підсумок X/Y і selective retry тільки невдалих адрес;
- окремий IMAP Sent append після SMTP acceptance;
- protected send log: `/_site-state/mail-send-log.json`;
- protected address book: `/_site-state/mail-address-book.json`;
- validation: PHP PASS, JS PASS, dedupe PASS, 3 unique Message-ID PASS, cross-recipient To leakage absent PASS, 2 accepted + 1 failed simulation PASS, ZIP integrity PASS, Boss deploy PASS.

## R229 — ЗБЕРЕЖЕНИЙ ПОПЕРЕДНІЙ КАНОН
Статус: **VERIFIED ROLLBACK RESERVE / NOT WORKING BASE**

Identity:
- file: `R229.zip`
- size: `27999098` bytes
- SHA-256: `9f047a6b0fc71699bd6a9ab070fe65c291d257110b77bc935f74953b087166c8`

Record: `mavik-sklad/files/R229-RESERVE.md`.

## ПОСТІЙНЕ ПРАВИЛО АУДИТУ
- Для досліджень `mavik.name` використовувати тільки робочий веб-механізм із реальним зовнішнім доступом до production.
- Не використовувати ізольований контейнерний DNS/`curl` як джерело висновків про DNS, HTTP/TLS, crawlability чи індексацію.
