# CANON REGISTRY — MAVIK.NAME

## ЄДИНИЙ КАНОН
`R229`

Статус: **AUTHOR APPROVED / OFFICIAL / CANONICAL / ONLY WORKING BASE**
Дата затвердження: 2026-08-29

Identity:
- file: `R229.zip`
- size: `27999098` bytes
- SHA-256: `9f047a6b0fc71699bd6a9ab070fe65c291d257110b77bc935f74953b087166c8`

Правила:
- усі зміни, виправлення, recovery та наступні релізи починати тільки від `R229`;
- попередні релізи не використовувати як робочу або recovery базу без нового прямого наказу автора;
- чинний сайт і робочий контекст — українські;
- актуальний production визначати за `R229` + свіжими live-даними; search snippets/cache відокремлювати від live-стану.

## R229 MAIL BASELINE
- SMTP-послідовність відновлена на перевіреній логіці;
- HTML + plain-text alternative;
- Message-ID;
- кілька адрес у «Кому»;
- BCC передається тільки SMTP-конвертом і не відображається в headers;
- після SMTP success робиться IMAP append у «Надіслані», якщо папка доступна;
- чернетки Boss зберігають multi-recipient/BCC;
- validation R229: 2 To + 1 BCC SMTP test PASS, BCC headers absent PASS, IMAP sent append PASS.

## НАСТУПНА РОБОТА
`R230` — кандидат від R229. Не вважати канонічним до прямого затвердження автора.

## ПОСТІЙНЕ ПРАВИЛО АУДИТУ
- Для досліджень `mavik.name` використовувати тільки робочий веб-механізм із реальним зовнішнім доступом до production.
- Не використовувати ізольований контейнерний DNS/`curl` як джерело висновків про DNS, HTTP/TLS, crawlability чи індексацію.
