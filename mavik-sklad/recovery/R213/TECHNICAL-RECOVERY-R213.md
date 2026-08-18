# MAVIK.NAME — TECHNICAL RECOVERY R213

Дата: 2026-08-18
Статус: **КАНОНІЧНА ТЕХНІЧНА RECOVERY-КОПІЯ**

## База

Єдина чинна structural/functional CORE-база: **R213**.
Канонічний checkpoint: `mavik-sklad/files/R213-CANON-CHECKPOINT.md`.
Release authority: `mavik-sklad/releases/CANON.md`.

## Binary

- `213 Збірка_Сайт_ОК.zip`
- `213 Збірка_Сайт_ОК_PART1.zip`
- `213 Збірка_Сайт_ОК_PART2.zip`

FULL SHA-256: `05ba73d3a7d9d20041a141d497c78491841887fc9315c091a13f907cbf00f4ee`
PART1 SHA-256: `ab3106e8deab2abbacd8d0d198060d6b78c76e022bb34ced813761207b5d7c7d`
PART2 SHA-256: `2033f034425246666e87cba3ff0e12aff514260c620914f9d1a464b5a24a9546`
Manifest SHA-256: `8c1f963df1e1a6831942eb01fb26eec7eba6ea1195a180f8e1ce5c3fea2134d1`
Set id: `r213-8c1f963df1e1a683`
Managed files: 646.

## Protected state

- `/_site-state/` не перезаписувати штатним deploy/patch.
- User media не змішувати з release-owned assets.
- Root `651fd21ecd39f1571c9d4ab6a9a7574c.txt` не видаляти й не замінювати під час cleanup.
- Mail/contact credentials зберігаються server-side, не в release.

## Blog

- Головна і `/blog/` мають один актуальний список блогу.
- Feature + 3 cards синхронізуються разом.
- Вилучений пост не повинен лишатися читабельним: R213 має 410 + idempotent cleanup для старого AI-post і 9 obsolete blog-images.
- Нормальна нова публікація блогу: content-only ZIP patch через Boss.

## Books / Announcements

- Одна книга = один book object і canonical book page.
- Placement: `Бібліотека` або `Анонси`.
- Анонс — статус, не дубль сторінки.
- `Опис для анонсу` редагований.
- Обкладинка одна для book object і announcement card.

## Contact / Mail

- Public `Контакт / Contact`.
- Primary storage `/_site-state/contact-inbox/`.
- Backup email `site@mavik.name`.
- Boss top nav: один `Пошта` + unread badge.

## Reader / PWA

- Mobile-only install flow.
- Desktop без install UI та без audio-reader UI.
- Mobile `Читати` = текст; `Слухати` = explicit listen mode.
- Chrome Read Aloud через clean text-only HTML, не як основний JS speechSynthesis flow.

## SEO / analytics

- `analytics/data` runtime-created; writable контролюється diagnostics.
- Books/public/meta/JSON-LD/sitemap синхронізовані з актуального state.
- canonical/hreflang/robots/structured data/IndexNow не ламати контентними змінами.

## Mandatory canons

- `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`
- `mavik-sklad/files/PROTECTED-SEO-FILES.md`
- `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`

## Recovery rule

Якщо нова гілка не знає стану сайту, не відтворювати його з chat memory. Читати R213 START-HERE/CANON/CHECKPOINT/RECOVERY і працювати від реального R213 binary.
