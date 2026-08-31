# MAVIK.NAME — R231_LinkFix CHECKPOINT

Дата: 2026-08-31

## Статус
**R231_LinkFix — VALIDATED CANDIDATE / NOT CANONICAL.**

Чинний канон: **R230_Blog**.
База LinkFix: **R231**.

## Ідентичність
- full file: `R231_LinkFix.zip`
- full size: `28007089` bytes
- full SHA-256: `d0ec1a1c974be773e1446d7dc128b462e3bcc3c16c2ca166020c7d5752961ec2`
- base R231 SHA-256: `3175cfa7c7a9b599c9760b98d2702cadd6389cca6f053dad3f7e1d6001b25498`

Safe live overlay for an already installed R231:
- file: `R231_LinkFix_PATCH.zip`
- size: `81983` bytes
- SHA-256: `5d4ae0ed53a666a0b1fdf0de45e00695b906e4f8da426a9a54f255deca5bf080`
- changes exactly one site file: `boss/index.php`.

## Причина
У R231 кнопка «Посилання» у візуальному блог-редакторі використовувала deprecated `document.execCommand('createLink')`. Після browser prompt виділення/Range могло втрачатися, через що link markup не потрапляв стабільно в `body_html`.

## Fix
- `execCommand('createLink')` повністю прибрано з blog editor;
- вставлення посилання робиться через DOM `Range` + реальний `<a href="...">`;
- виділений текст обгортається посиланням;
- без виділення створюється новий link element у позиції курсора;
- dropdown `До допису…` використовує той самий механізм;
- після вставлення link одразу синхронізуються visual HTML, HTML-code textarea і hidden `body_html`;
- server-side sanitizer лишається активним і дозволяє безпечні `http/https`, `mailto:`, внутрішні `/.../`, relative і `#anchor` links.

## Валідація
PASS:
- PHP 31/31;
- standalone JS 15/15;
- inline blog editor JS syntax;
- `createLink` count in editor = 0;
- DOM Range link helper present;
- immediate `body_html` sync present;
- JSON 12/12;
- EPUB 21/21 CRC;
- managed files 268/268;
- full ZIP integrity PASS;
- patch ZIP integrity PASS;
- patch simulation against exact R231: only `boss/index.php` differs.

## Встановлення
Якщо R231 вже встановлений на live: ставити тільки `R231_LinkFix_PATCH.zip`.

Якщо сайт ще на R230_Blog: спочатку R231 bootstrap protection, потім повний `R231_LinkFix.zip`.

## Канон
Не канонізувати автоматично. R230_Blog лишається каноном до прямого затвердження автора нового кандидата.
