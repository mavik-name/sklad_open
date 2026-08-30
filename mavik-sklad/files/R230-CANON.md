# MAVIK.NAME — R230 CANON

Дата затвердження автором: 2026-08-30

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / SOLE WORKING BASE**

## Identity
- file: `R230.zip`
- size: `28005558` bytes
- SHA-256: `e03cbfdd328d176eacb9548c75fc73d119ec8f924fbe1f2e669fefca2f2abea0`
- base release: `R229`

## Канонічне правило
- `R230` — єдина чинна структурно-функціональна робоча база mavik.name.
- Усі наступні зміни, recovery, hotfix і нові повні релізи починати тільки від `R230`, доки автор прямо не затвердить новішу канонічну збірку.
- `R229` зберігати як попередню перевірену rollback reserve; не видаляти і не трактувати як сміття.
- `R229` не використовувати як робочу базу, крім прямого наказу автора на відкат.

## Ключові зміни R230
- один compose-лист для багатьох адресатів;
- поле «Кому» з chips: Enter / кома / `;` / bulk paste;
- autocomplete з адресної книги;
- кожен адресат отримує окреме SMTP-повідомлення;
- у `To:` кожен бачить тільки власну адресу;
- окремий `Message-ID` для кожного адресата;
- окремий accepted/failed статус по кожній адресі та підсумок X/Y;
- після часткової помилки повторна спроба можлива тільки для невдалих адрес;
- окремий IMAP Sent append для кожного SMTP accepted листа;
- protected runtime log: `/_site-state/mail-send-log.json`;
- protected address book: `/_site-state/mail-address-book.json`;
- дедуплікація, автодоповнення, ручне редагування/видалення контактів;
- адресна книга навчається з відправлень, чернеток, відкритих листів та site-contact повідомлень;
- тіло листів у журнал/адресну книгу не записується.

## Validation
- PHP syntax: PASS
- compose JavaScript syntax: PASS
- address dedupe: PASS
- 3 recipients → 3 unique Message-ID: PASS
- no cross-recipient `To:` leakage: PASS
- BCC hidden from visible headers: PASS
- simulated 2 accepted + 1 failed accounting: PASS
- address-book persistence: PASS
- send-log persistence: PASS
- ZIP integrity: PASS
- Boss deploy validation: PASS — 393 entries / 268 managed files
- live SMTP delivery: not run in release container because production credentials are intentionally absent from release ZIP

## Rollback reserve
See: `mavik-sklad/files/R229-RESERVE.md`.
