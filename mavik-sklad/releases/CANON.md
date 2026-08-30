# Канон збірок MAVIK.NAME

Оновлено: 2026-08-30

## Єдина чинна канонічна база

**R230 — єдина чинна робоча structural/functional база mavik.name.**

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**

Identity:
- file: `R230.zip`
- size: `28005558` bytes
- SHA-256: `e03cbfdd328d176eacb9548c75fc73d119ec8f924fbe1f2e669fefca2f2abea0`
- base release: `R229`

Усі наступні зміни, виправлення, recovery та нові релізи починати **тільки від R230**, доки автор прямо не затвердить новішу канонічну збірку.

## Ключовий стан R230
- повна база R229 зі збереженням чинних функцій;
- один compose-лист для багатьох адресатів;
- recipient chips у полі «Кому»: Enter / кома / `;` / bulk paste;
- autocomplete з адресної книги;
- окреме SMTP-відправлення кожному унікальному адресату;
- у видимому `To:` тільки поточний адресат;
- окремий Message-ID для кожного адресата;
- окремий accepted/failed статус і загальний підсумок X/Y;
- selective retry тільки для невдалих адрес;
- окремий IMAP append у «Надіслані» після успішного SMTP;
- protected `/_site-state/mail-send-log.json`;
- protected `/_site-state/mail-address-book.json`;
- дедуплікація контактів, autocomplete, ручне редагування/видалення;
- адресна книга навчається з відправлень, чернеток, відкритих листів і site-contact повідомлень;
- захист live-текстів книг і `/_site-state/` під час full deploy збережено.

Validation R230:
- PHP syntax PASS;
- compose JavaScript PASS;
- 3 recipients / 3 unique Message-ID PASS;
- no cross-recipient `To:` leakage PASS;
- simulated 2 accepted + 1 failed PASS;
- address-book persistence PASS;
- send-log persistence PASS;
- ZIP integrity PASS;
- Boss deploy validation PASS — 393 entries / 268 managed files.

## Попередня канонічна збірка — збережений резерв

**R229 зберігається як verified rollback reserve.**

Identity:
- file: `R229.zip`
- size: `27999098` bytes
- SHA-256: `9f047a6b0fc71699bd6a9ab070fe65c291d257110b77bc935f74953b087166c8`

R229 НЕ видаляти і НЕ трактувати як сміття. Водночас нову роботу від R229 не починати, якщо автор прямо не наказав виконати rollback.

Reserve record: `mavik-sklad/files/R229-RESERVE.md`.
Current canon checkpoint: `mavik-sklad/files/R230-CANON.md`.
