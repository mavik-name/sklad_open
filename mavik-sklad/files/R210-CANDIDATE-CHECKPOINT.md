# R210 — HISTORICAL CANDIDATE CHECKPOINT · MAVIK.NAME

Дата збірки: 2026-08-17
Статус: **ІСТОРИЧНИЙ CANDIDATE / КАНОНІЗОВАНО ЯК R210**
Авторитетний канонічний checkpoint: `mavik-sklad/files/R210-CANON-CHECKPOINT.md`.
Робоча база R210: **R209 candidate**.

## Файли релізу

- `210 Збірка_Сайт_PAGE-BUILDER-IMAP_PART-1.zip`
- `210 Збірка_Сайт_PAGE-BUILDER-IMAP_PART-2.zip`
- `210 Збірка_Сайт_PAGE-BUILDER-IMAP_bundle.zip` — архівний контейнер із двома uploadable-частинами; не завантажувати в Boss як реліз.

Release: `210`
Base release: `209`
Managed files: `618`
Multipart set id: `r210-5fba1abf760b80f7`
Full release manifest SHA-256: `5fba1abf760b80f77f1bbbd15a0a2c2a61c7cd2d087c50555601fcd5c77b8d28`

ZIP SHA-256:
- PART 1: `2f4af9aa82aff5560257aee6e33bbc3ca91a3c61cdc119c660dcb667998b49cd`
- PART 2: `0e52f6bb0241528818d6f35d116253892105e4e76a3c891b98673e9c83b56e66`
- bundle: `cb6d2938a0195b124aa3926dba3ae2a3fcd003dfd60ac46465968ea32d18fe15`

Розмір:
- PART 1: `27,058,915` bytes
- PART 2: `23,700,941` bytes
- bundle: `50,760,246` bytes

## Зміни R210

### 1. Boss → «Сторінки»: виправлена картка вибору сторінки

Після живої перевірки R209 виявлено, що список сторінок конструктора успадковував універсальний `.sort-item`, розрахований на чотири колонки. Через це назви сторінок обрізалися, кнопки ламалися, а більша частина картки залишалася порожньою.

R210:
- використовує окрему компактну grid-верстку `page-builder-index-*`;
- показує повні назви й URL;
- кнопки `Конструктор` та `Відкрити` стоять праворуч на desktop;
- на вузьких екранах actions переходять під текст;
- drag&drop блоків усередині сторінки не змінено.

### 2. Boss → «Пошта»: автоматичний IMAP fallback

R209 вимагав PHP extension `imap` для вхідної пошти. R210 прибирає цю жорстку залежність.

Алгоритм:
1. якщо `imap_open()` доступний — використовується PHP IMAP;
2. інакше Boss використовує пряме IMAP-з’єднання через `stream_socket_client` та TLS/SSL;
3. налаштування скриньки залишаються ті самі; для Cityhost — `mx1.cityhost.com.ua`, IMAP 993 SSL/TLS.

Fallback реалізує:
- LOGIN;
- LIST папок;
- SELECT;
- UID SEARCH / UID FETCH;
- прапор `Seen`;
- декодування encoded-word заголовків;
- MIME multipart;
- text/plain і text/html;
- вхідні вкладення.

SMTP-код R209 не змінено.

## Перевірки

- PHP lint: **30/30 PHP-файлів OK**.
- Штатний валідатор Boss:
  - PART 1: OK, 457 entries;
  - PART 2: OK, 462 entries.
- ZIP CRC: обидві частини OK.
- Контрольне складання multipart: **618/618 managed files**, missing 0, mismatch 0.
- Вбудований IMAP fallback протестовано локально в середовищі без PHP extension `imap` на mock IMAP server:
  - LIST папок — OK;
  - список UID/headers — OK;
  - UTF-8 encoded Subject — OK;
  - читання multipart text/plain — OK;
  - MIME attachment — OK.

## Після живої перевірки

На Cityhost IMAP/TLS підключення та авторизація успішно запрацювали після введення правильної повної email-адреси як логіна. Користувач прямо затвердив R210 як канонічну збірку.

Цей файл лишається лише історією candidate-етапу. Для будь-якої подальшої роботи читати `R210-CANON-CHECKPOINT.md`.
