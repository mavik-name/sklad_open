# Канон збірок MAVIK.NAME

Оновлено: 2026-08-19

## Єдина чинна канонічна база

**R213-reload — єдина чинна structural/functional CORE-база сайту.**

Канонізовано користувачем: **2026-08-19**.

Безпосередня база походження: R213. R213 після канонізації R213-reload більше не є робочою базою.

Канонічний checkpoint:
`mavik-sklad/files/R213-RELOAD-CANON.md`

## Канонічні binary

- `R213-reload Збірка_Сайт_ОК.zip`
- `R213-reload Збірка_Сайт_ОК_PART1.zip`
- `R213-reload Збірка_Сайт_ОК_PART2.zip`

Постійне збереження: ChatGPT Library `/Сайт/`.

Manifest SHA-256:
`8d93786fe3832b90b86485587f8aab2be004aa4ab07a340c99a75057bde7f556`

Set id:
`r213-reload-8d93786fe3832b90`

FULL SHA-256:
`0456895fd3fca6bcbe6737794e0480537f0c3ab343d4f7804d857e89348ec65e`

PART1 SHA-256:
`4633d2fca755e3feb9d6a3f5b503dd01f5df791fd77d5fb5576757b50f5977f3`

PART2 SHA-256:
`d0b330eaec320e11ccb3f71be1011e6f1718124cb3264577316699fca278ea44`

Managed files: **629**.

## Канонічний стан книг та SEO

- книг: **21**;
- завершених: **21**;
- beta: **0**;
- EPUB: **21/21**;
- основних індексованих `/read/`: **21**;
- `/read/text/`: `noindex,follow`, canonical на основну `/read/`;
- sitemap: **86 унікальних URL**.

`publication_mode` є єдиним джерелом істини для статусу книги та похідних артефактів. Зміна `final ↔ beta` автоматично синхронізує EPUB, `/books/free/`, reader robots, sitemap, canonical/metadata та пов'язані public/SEO артефакти.

## Перевірки перед канонізацією

- PHP lint: 35/35 OK;
- public JSON-LD: 55 блоків, 0 помилок;
- sitemap: 86/86 унікальних URL;
- books: 21 final / 0 beta;
- EPUB: 21/21;
- multipart payload: 628/628, дублікати між частинами: 0;
- FULL і обидві multipart-частини пройшли штатні валідатори Boss;
- перевірено оновлення старого R213-state;
- перевірено динамічний сценарій `final → beta → final`.

## Робоче правило

Будь-яка наступна structural/functional робота стартує **тільки від R213-reload**.

Routine content work — PATCH/OVERLAY поверх R213-reload без прихованої зміни CORE.

`/_site-state/` — protected live state; чинні механізми синхронізації статусів мають лишати public/search state узгодженими.

Root IndexNow/Bing verification key `651fd21ecd39f1571c9d4ab6a9a7574c.txt` — protected SEO identity file.

**R214, зібраний від старого R213, не є валідним наступником R213-reload і не може використовуватися без повного rebase на R213-reload.**

Будь-який майбутній реліз стає каноном лише після окремого прямого затвердження автора.
