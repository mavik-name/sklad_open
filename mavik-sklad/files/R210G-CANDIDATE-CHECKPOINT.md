# R210G — candidate checkpoint

Дата: 2026-08-18
Статус: **КАНДИДАТ, НЕ КАНОН**. Канонічний CORE лишається **R210** до прямого затвердження автора після живої перевірки.

## База

R210G зібрано поверх R210F і включає раніше погоджений hotfix desktop-блоку «Пригостити кавою» без зовнішнього frame.

## Зміни R210G

- `Назад` перенесено з контенту в навігацію і зроблено **першим пунктом меню** на внутрішніх сторінках.
- `Назад` оформлено компактною золотою pill-плашкою в стилі `Адмінка`.
- Старі верхні/нижні `mavik-backbar` більше не монтуються; legacy-рядки примусово приховані.
- Верхній відступ внутрішнього контенту зменшено рівно на 50% від R210F:
  - desktop `122 → 61 px`;
  - tablet `106 → 53 px`;
  - mobile `88 → 44 px`.
- На сторінці `Автор` вступна плашка отримала додаткове повітря зверху: desktop `38 px`, tablet `32 px`, mobile `28 px`.
- Desktop `Пригостити кавою`: зовнішній frame/overlay прибрано; лишається одна центральна плашка висотою `100dvh`; суми лишаються в окремих плашках; QR не винесені у fullscreen.
- Успадковано всі погоджені R210F visual fixes: `У фокусі`, mobile-анонси, mobile-меню, дві плашки `Автор`, desktop active gold, `Поділитись`.
- Музичний playback-код **не змінювався**: `assets/app/music-library.js` і `music-data.php` байт-у-байт однакові з R210F/R210E; MP3 не входять у patch і не чіпаються.
- Cache-bust public shell піднято `210f → 210g`; service-worker cache `mavik-shell-r210g`.

## Контроль

- PHP lint: **30/30 OK**.
- Public HTML with global design hook: **180/180**.
- Managed files: **627**.
- Multipart merge: **627/627**, missing 0, mismatch 0, extras 0.
- Patch validation: missing 0, mismatch 0.
- ZIP CRC: OK.
- JS unit check: `Назад` стає first child desktop/mobile menu; legacy backbars = 0.
- Render check desktop: author hero starts at Y≈150 after 88px header; Back pill 79×34, Admin 73×31.
- Render check mobile: Back pill 84×40; internal content top offset 44px.
- Coffee render check desktop 1440×900: outer background transparent, padding 0, card height **900/900**, border 0, radius 0, shadow none.

## Release integrity

- Full manifest SHA256: `0851aa0c0764093f41e7e46e5964ae564616b8a8ccb261e454412d3571d8c014`
- Multipart set id: `r210g-0851aa0c0764093f`
- PART-1 SHA256: `8497b3add1d9984f51d781a6faba8dabcb982cba4229679bfe7c6c6403b51fe6`
- PART-2 SHA256: `95bf58e0293aad5b3c02af7a6b2b7a6ad2efbfd6db60a75fd1f53c7a94f3f03e`
- bundle SHA256: `659c10f8bc55846428c4e33d7c0b1dc2bccb39f954b52f4c22b0e0ccb91db390`
- FTP-FULL SHA256: `7e44adbefa96364ee47d576f61a0a246ab5172fb16553b45601cf39283a16047`
- patch-over-R210F SHA256: `1678eff47758c738b141ee80610e6828c04a43a2ed2ba1f0708ce647fdc5689f`

## File Library `/Сайт/`

- `210G Збірка_Сайт_MENU-BACK-TIGHT_FTP-FULL.zip`
- `210G Збірка_Сайт_MENU-BACK-TIGHT_PART-1.zip`
- `210G Збірка_Сайт_MENU-BACK-TIGHT_PART-2.zip`
- `210G Збірка_Сайт_MENU-BACK-TIGHT_bundle.zip`
- `210G ПАТЧ_FTP_поверх_R210F.zip`

Для живого сайту, якщо вже стоїть R210F, достатньо накласти `210G ПАТЧ_FTP_поверх_R210F.zip` із заміною файлів. Для чистого розгортання — FTP-FULL.
