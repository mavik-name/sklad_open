# R210G — CANON checkpoint

Дата канонізації: **2026-08-18**
Статус: **КАНОН / ЄДИНА ЧИННА STRUCTURAL-FUNCTIONAL CORE-БАЗА MAVIK.NAME**.

Автор після живої перевірки прямо затвердив R210G як канонічний реліз. Від цього моменту R210 більше не є поточною робочою базою; він лишається лише попереднім каноном в історії.

## Канонічний binary

Канонічний повний реліз R210G:
- File Library `/Сайт/`: `210G Збірка_Сайт_MENU-BACK-TIGHT_FTP-FULL.zip`
- користувач повторно завантажив еквівалентну копію `210G Збірка_(1).zip` 2026-08-18;
- SHA-256 обох: `eebcbefaa6683078dd1744b790e42a6526f6db4520a6e344e5e774d9946a672c`.

Контроль завантаженої копії:
- ZIP entries: **627**;
- ZIP CRC: **OK**;
- дубльованих шляхів виду `folder/folder/...` у релізі не виявлено;
- структура архіву відповідає R210G FTP-FULL checkpoint.

## Що входить

- `Назад` перенесено з контенту в меню й зроблено першим пунктом; оформлення — окрема pill-плашка в стилі `Адмінка`.
- Верхній відступ внутрішніх сторінок зменшено на 50% від R210F: desktop `122→61`, tablet `106→53`, mobile `88→44` px.
- `Автор`: вступна плашка має симетричне внутрішнє повітря зверху/знизу.
- `Пригостити кавою` desktop: плашка вміщується у viewport з 5 px повітря зверху/знизу, без вертикального scrollbar; відкритий QR не перевищує межі плашки.
- Успадковано R210F: `У фокусі`, mobile-анонси, mobile-меню, дві плашки `Автор`, desktop active gold, `Поділитись`.
- Boss → Книги: `Видалити / Видалити книгу` з confirm; видаляються сторінка книги, читанка та EPUB, обкладинка в медіатеці лишається; focus і live order очищаються.
- Музичний playback-код не змінено від R210F.

## Контроль релізу

- PHP lint: **30/30 OK**.
- Public HTML with global design hook: **180/180**.
- Managed files: **627**.
- Multipart merge: **627/627**, missing 0, mismatch 0, extras 0.
- Patch validation: missing 0, mismatch 0.
- ZIP CRC: OK.
- Book delete handler/UI/confirm/focus cleanup/order cleanup: OK.
- Coffee no-scroll + QR bounded: OK.
- Author symmetric padding: OK.

## Release integrity

- Full manifest SHA256: `d45830fff4481434ce68be6a236391a566b07987a10b64e82e9019acc3694c02`
- Multipart set id: `r210g-d45830fff4481434`
- PART-1 SHA256: `25abaff8080bad04d5031aab6a2f698bc891835fe6fa74a9c250b4b6e9a1196d`
- PART-2 SHA256: `1076560cafa8747e86e9690c1fee1e2a7868f07e94ff065f2c2dff027d6e7584`
- bundle SHA256: `2771572739d6c78b43e43640a2b5198b19fbd12a14dca635a9f462dbb4febf4e`
- FTP-FULL SHA256: `eebcbefaa6683078dd1744b790e42a6526f6db4520a6e344e5e774d9946a672c`
- patch-over-R210F SHA256: `4230f0ad328b77cd9c01e16968c265bcff06d5a0c70d0f17c18dd99e944064bb`

## Робоче правило після канонізації

Усі наступні structural/functional зміни стартують **тільки від R210G** до нового прямого рішення автора.

Не використовувати R1–R210F як активну базу. Старі релізи дозволено згадувати лише для історії або точкового порівняння.

`/_site-state/` не перезаписувати штатним deploy/patch.

Routine content work робити patch/overlay поверх R210G без прихованого refactor CORE.