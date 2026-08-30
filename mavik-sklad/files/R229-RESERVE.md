# MAVIK.NAME — R229 ROLLBACK RESERVE

Дата переведення в резерв: 2026-08-30

Статус: **PRESERVED PREVIOUS CANON / VERIFIED ROLLBACK RESERVE / NOT WORKING BASE**

## Identity
- file: `R229.zip`
- size: `27999098` bytes
- SHA-256: `9f047a6b0fc71699bd6a9ab070fe65c291d257110b77bc935f74953b087166c8`

## Правило збереження
- `R229` НЕ видаляти.
- `R229` НЕ вважати сміттям або застарілим непотрібним артефактом.
- `R229` зберігати як останню перевірену попередню канонічну збірку для аварійного rollback.
- Нову роботу від `R229` не починати, якщо автор прямо не наказав виконати відкат.
- Поточний канон і sole working base: `R230`.

## Що резервує R229
- перевірену SMTP-логіку попередньої редакції;
- HTML + plain-text mail;
- Message-ID;
- multi-recipient/BCC попереднього типу;
- IMAP append у «Надіслані»;
- захист live-текстів книг і `/_site-state/` під час full deploy;
- попередній стабільний структурно-функціональний стан сайту до R230 mail redesign.
