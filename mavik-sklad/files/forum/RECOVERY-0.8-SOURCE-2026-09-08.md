# FORUM.MAVIK.NAME — RECOVERY 0.8 SOURCE

Дата перевірки: 2026-09-08
Статус: технічний блокер перед build 0.9

## Що підтверджено
- `main` містить канонічні текстові файли форуму: `START-HERE-FORUM.md`, `CANON-FORUM.md`, `NEXT-BUILD-0.9.md`, `BUILD-STATUS.md`, `CHECKPOINT-2026-09-08.md`.
- Існує окрема гілка `forum-mavik-handoff-2026-09-08`.
- HEAD цієї гілки: `2a02a2d03ad4d08444bd86ea63d831307d339ab7`.
- У гілці є `forum_mavik/handoff_2026-09-08/FORUM_MAVIK_HANDOFF.md` з повним handoff/каноном.

## Чого в репозиторії немає
Станом на цю перевірку у дереві `main` і в дереві `forum-mavik-handoff-2026-09-08` відсутні:
- `forum_mavik_test_build_0.8.zip`;
- `forum_mavik_test_build_0.7.zip` / rollback-архів;
- `FORUM_MAVIK_HANDOFF_GITHUB_2026-09-08.zip`;
- каталог із розпакованим source build 0.8;
- канонічні reference PNG, на які посилається handoff.

## Жорстке правило
Build 0.9 не реконструювати з пам'яті, мокапів або опису. Початкова кодова база має бути саме build 0.8. Це потрібно, щоб не втратити вже реалізовану PHP/SQLite-логіку, маршрути, сесії, структуру БД, адмінку та сумісність зі `storage/forum.sqlite`.

## Що зробити одразу після відновлення 0.8
1. Покласти незмінений архів у `mavik-sklad/files/forum/builds/forum_mavik_test_build_0.8.zip`.
2. Покласти rollback 0.7 у `mavik-sklad/files/forum/builds/`.
3. Додати SHA-256 для обох архівів.
4. Додати канонічні reference-файли в `mavik-sklad/files/forum/references/`.
5. Розпакувати 0.8 у робочу директорію/гілку без `storage/forum.sqlite` у deploy-пакеті.
6. Перший контрольований delta для 0.9: пошук + reply/threading + згода з правилами; далі піктограми, аватари, maintenance/admin і візуальна звірка desktop/mobile.

## Заборонено
- Не починати 0.9 з нуля.
- Не переносити SQLite шляхом видалення/перегенерації робочої БД.
- Не робити самовільний редизайн.
- Не називати новий пакет 0.9, якщо він не походить від 0.8.
