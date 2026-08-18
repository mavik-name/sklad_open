# MAVIK.NAME — R212 TECHNICAL RECOVERY MIRROR

Дата: 2026-08-18
Статус: **DUPLICATED RECOVERY DOCUMENTATION**

Цей файл дублює критичні технічні рішення канонічного R212, щоб роботу можна було відновити з нової гілки без залежності від історичних release-notes.

## Release identity

Canonical release: **R212**

Files:
- `212 Збірка_Сайт_ОК.zip`
- `212 Збірка_Сайт_ОК_PART1.zip`
- `212 Збірка_Сайт_ОК_PART2.zip`

Manifest SHA-256: `a3261b7e127653097e23d014c7b3d0c8414c534457265a7f3be68990481801cf`
Set id: `r212-a3261b7e12765309`
FULL SHA-256: `694cd5c247a047c71bf9ccaaa61336a5cfd41cb91016d4a9c85af29d8580b390`
PART1 SHA-256: `2fb8ab725be66842c4086e3fd5e203f94cd8969d003e5c26fb5da7c3ab24c635`
PART2 SHA-256: `74ddd17d354798e81dce5b695058b7c6f8e7e7a57707ca915e0409de300bafc9`
Managed files: **646**.

Checks:
- PHP lint: 35/35 OK
- JSON parse: OK
- Manifest parity: 646/646
- FULL CRC: OK
- Multipart CRC: OK
- Multipart union: 646/646

## Core operating principles

### SIMPLE FIRST
Always implement the simplest effective solution that fully solves the requested need. Do not add extra subsystems, modes, dropdowns, previews or duplicated controls without a concrete requirement.

### Persistent state
`/_site-state/` is protected live state. Normal deploy/patch must not overwrite it. Live focus, ordering, announcement placement and media bindings must survive routine deploys.

### Books and announcements
- New book placement: `Бібліотека` or `Анонси`.
- Announcement is a status of the same book, not a duplicate entity.
- Placement can be changed during book editing.
- `Опис для анонсу` is editable.
- Announcement cover comes from the book cover.
- Stable cover for `Код легенди`: `/images/covers/kod-lehendy.jpg`.

### Blog
- Public blog count in canonical R212: 10.
- Editorial direction: literature, the author’s works, ideas, reading and the reader.
- Do not make writing technology or AI the focus of literary posts.
- Music may mention AI only where needed for honest description of arrangement/performance.
- Public `Ілюстрацію згенеровано в ChatGPT` stamp is not shown.
- Blog hero images are high-resolution for desktop.
- Normal blog publication = content-only ZIP patch through Boss; no routine FTP/manual PHP installer/new CORE release.

### Privacy media
Private photos/videos are not reusable project media. Permission is local to the specific approved use. No reuse or derivative portrait without a new explicit permission.

### Contact and mail
- Public `Контакт / Contact` uses the global public shell and normal dark background.
- Form fields: name, email, subject, message.
- CSRF + honeypot + simple rate-limit.
- Primary copy: `/_site-state/contact-inbox/`.
- Backup email: `site@mavik.name` with reader `Reply-To`.
- Boss top navigation: one `Пошта` item + small numeric unread badge only.
- Mail channels inside: `З сайту` / `Скринька`.

### Media
- Delete checks use active state/bindings, not stale generated mentions.
- If media is in use, show where.
- User media is separated from release-owned assets.
- Drag/drop media list supports large preview by clicking the thumbnail and dragging via a separate handle.

### SEO and analytics
- `analytics/data` is created at runtime and writable state is diagnosed.
- Book state/public cards/meta/JSON-LD/sitemap are synchronized from current state.
- Protected IndexNow/Bing root key: `651fd21ecd39f1571c9d4ab6a9a7574c.txt`.
- Search state must stay synchronized with public state: links, sitemap, robots/noindex, canonical, hreflang, structured data, IndexNow and SEO self-test where relevant.

### Public shell
- One global public shell.
- Font family: `Georgia, 'Times New Roman', serif`.
- Breakpoints: mobile `<=767`, tablet `768–1099`, desktop `>=1100`.
- `Назад` is the first menu item on internal pages.
- Desktop active menu item is gold.
- Public share action label: `Поділитись`.

### Reader / PWA
- Mobile-only install flow.
- Desktop: no install UI, no audio-reader UI.
- Mobile `Читати` = text.
- Mobile `Слухати` = explicit listen mode.
- Central audio control: `▶ Слухати ↔ ⏸ Пауза`.

### Maintenance
One global maintenance mode only.

## Required canon files

- `mavik-sklad/files/R212-CANON-CHECKPOINT.md`
- `mavik-sklad/releases/CANON.md`
- `mavik-sklad/files/START-HERE-SITE.txt`
- `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`
- `mavik-sklad/files/PROTECTED-SEO-FILES.md`
- `mavik-sklad/files/kanon-shapky-mobilnoi-chytanky.txt`
- `mavik-sklad/files/kanon-storinky-knyhy.txt`

## Recovery rule

If a new conversation branch has conflicting site information, this recovery mirror and the current canonical checkpoint route back to **R212**. Do not reconstruct site state from chat memory or historical release documents.
