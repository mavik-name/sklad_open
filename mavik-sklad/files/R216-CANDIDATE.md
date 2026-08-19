# MAVIK.NAME — R216 CANDIDATE STATUS

Оновлено: 2026-08-19
Статус: **REJECTED / DO NOT INSTALL / REBUILD REQUIRED**

## Причина відхилення

Попередній R216 candidate пройшов backend/static/deploy перевірки, але після live/visual review виявлено системну помилку локалізації: EN public pages використовують іншу/спрощену візуальну оболонку й не відповідають дизайну, структурі та semantic parity українського сайту.

Це порушує найвищий локалізаційний канон:
- `mavik-sklad/files/SITE-LOCALIZATION-UNIFIED-DESIGN-CONTENT-CANON.md`
- `mavik-sklad/files/SITE-ALL-PAGES-LOCALE-PARITY-OVERRIDE.md`

Тому попередній R216 ZIP **НЕ Є READY**, не може бути канонізований і не повинен встановлюватися як фінальний реліз.

## Що було технічно перевірено в старому кандидатові

Історично старий candidate мав:
- base R215;
- 895 managed files;
- locale DB migration UK 22 / EN 10;
- PHP 37/37;
- JS 18/18;
- XML 2/2;
- JSON-LD 107/107;
- deploy/rollback/database-backup/media-pipeline PASS.

Ці результати не скасовуються як технічні факти, але **не є достатнім release gate**.

Старі binary identifiers лише для аудиту, не для встановлення:
- Manifest: `ccbfcef34fa96b48261643de6c1635edf7c1f16f482bebd03763e322775214c5`
- FULL SHA-256: `a309b5eff63d92d6b9b910a802a4450dd5de1075ec4858c3cb92b39182449760`
- PART1 SHA-256: `dcf769b5e4f4bf6e586e2a548376dce6d15d523487659c665b29049264c8e602`
- PART2 SHA-256: `80a534ceadf3a8233532ca42fc15fcc7de1c58891722b7f4930baaed24e9cc62`

## Жорстка модель для R216 rebuild

1. **ONE SITE / ONE CORE / ONE DESIGN.**
2. Головна `/` і `/en/` — одна й та сама сторінка/компонентна структура; різниться тільки мова.
3. Те саме для всіх інших public routes.
4. Локалізація shell/canonical static pages — тільки через `lang` files.
5. Статичні сторінки (`Автор`, `Контакти`, `/mavik/` тощо) мають той самий зміст 1:1 у перекладі.
6. Редагований контент — один logical object з locale payloads.
7. Єдина Boss/адмінка; кожна контентна зміна має explicit locale scope: одна, кілька або всі локалі.
8. Якщо locale payload/translation відсутній або неповний — representation = `hidden`; жодних translation placeholders/заглушок.
9. CORE/design зміна автоматично діє на всі локалі.
10. R216 rebuild не може отримати READY/PASS без visual + semantic + lang parity audit на desktop і mobile.

## Release authority

Поточна затверджена CORE-база залишається **R215**.

R216 має бути перебудований від R215 з урахуванням уже затверджених R216 технічних канонів, але без успадкування окремої EN public оболонки.

Жоден новий R216 artifact не вважати фінальним, доки він не пройде новий parity gate і автор не затвердить його прямо.
