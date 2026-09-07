# R300 PRIORITY WORK — CHECKLIST / HANDOFF

Date: 2026-09-07
Status: IN PROGRESS
Canonical rule: every completed work package produces 3 synchronized archives: Core + Template + Full Build.
Architecture rule: after deployment, all application functionality works only through modules; Core is kernel only; Template is presentation only.

## Source artifacts
- R300_Core_R1(1).zip — supplied canonical Core baseline.
- R300_Design(2).zip — supplied canonical Template/Design baseline.
- Lite_R300_Canon_V1_07_09_2026 (1).zip — supplied current Full Build / live canonical baseline.

## Priority scope approved by user
1. Player Core: player scans its own audio directory and builds a complete playlist automatically; no manual hard-coded track list or artificial limit.
2. Module Registry: all installed modules self-register; eliminate false `v— / disabled` state; protect system modules.
3. Blog Publisher: import prepared ZIP packages with content, images, tags, links and SEO metadata.
4. Blog sandbox: imported blog package is unpacked and previewed in an isolated sandbox; publication to live only after explicit manual approval.
5. Player Manager in Boss: upload/hide/delete tracks; create/manage playlists; assign playlists to books; optionally allow reader to choose among allowed playlists.
6. Boss modularization: connect/disconnect/sort/hide modules, dependencies, versions, states; system modules cannot be disabled/deleted.
7. Boss module UX: module connection menu must be simple and obvious; each module exposes only its most useful logical settings, while technical/internal parameters remain hidden from normal admin use.
8. Permanent SEO entry page module `Що почитати` at `/shcho-pochytaty/`, implemented as a standalone module (or SEO/Discover module), never as Core content or a hard-coded static page.

## Canonical task 8 — SEO/Discover module `Що почитати`

### Canonical URL and redirect
- Canonical URL: `https://mavik.name/shcho-pochytaty/`
- Historical `/discover/` must return **301** to `/shcho-pochytaty/`
- `/discover/` must not redirect to `/` or `/books/`
- No long SEO URL variants

### Search role
Main organic landing page for queries around:
- що почитати
- що почитати українською
- що почитати українською онлайн
- що почитати українською онлайн безкоштовно
- читати книги українською онлайн
- безкоштовні книги українською
- книги Віктора Макарчука
- MaVik книги
- українські книги онлайн
- слухати книги українською

No keyword stuffing. Copy must remain natural and useful.

### First screen
H1: **Що почитати українською онлайн безкоштовно**
Intro: explain that mavik.name lets readers read books by Віктор Макарчук / MaVik online, with audio available for some works, without registration or third-party redirects.
Primary CTA: **Обрати книгу** → `/books/`

### Dynamic blocks
All data must come from existing modules/contracts, never duplicated just for this page.
1. `Що почитати зараз` — 3–5 books, cover, title, short description, read button.
2. `Можна не тільки читати` — works with audio capability, linking to the relevant Reader.
3. `Про автора` — Віктор Макарчук / MaVik, short copy, link `/about/`.
4. `Про читання` — relevant thematic Blog posts only; automatically refresh as new matching posts appear.
5. `Усі книги` — link `/books/`.

### Internal linking
Must use crawlable HTML links, not JS-only navigation.
Required:
- `/books/` → `/shcho-pochytaty/`
- `/shcho-pochytaty/` → `/books/`
- `/shcho-pochytaty/` → specific books
- `/shcho-pochytaty/` → `/about/`
- `/shcho-pochytaty/` → thematic blogs
- relevant blogs → `/shcho-pochytaty/`
- optional persistent footer link `Що почитати`
- do not add to main menu without separate user command

### SEO metadata
Title: **Що почитати українською онлайн безкоштовно | MaVik — Віктор Макарчук**
Meta description: **Шукаєте, що почитати українською онлайн безкоштовно? На mavik.name — книги Віктора Макарчука / MaVik для читання онлайн, аудіоверсії та авторський блог про книги й читання.**
Canonical: `https://mavik.name/shcho-pochytaty/`
Robots: `index, follow`
Also required:
- URL in sitemap.xml
- correct lastmod
- Open Graph
- Twitter/X metadata when the site mechanism already supports it
- `lang="uk"`
- UTF-8
- exactly one H1
- logical H2/H3 structure
- alt text on images
- breadcrumbs schema may remain even when visual breadcrumbs are hidden

### Structured data
Use only valid, truthful schema.org types:
- `WebPage`
- `BreadcrumbList`
- optionally `ItemList` for real books with real URLs
Do not create fake rating/review/FAQ schema.

### Module boundaries
Correct architecture:
- Core → registry/router/contracts only
- Discover/SEO module → route `/shcho-pochytaty/`, data selection, SEO metadata, page block assembly
- Design → template/CSS/presentation only
- Books module → books data
- Blog module → thematic posts
- Reader module → reading/audio capability
Do not duplicate books/blogs into a separate JSON if module repositories/APIs already expose them.
Do not modify stable Books/Reader/Blog behavior merely to implement this page; consume their data through module contracts.

### Boss settings — simple only
Boss page `Що почитати` must expose only:
- module enabled/disabled
- H1
- intro text
- number of recommended books
- auto-selection vs manual selection mode
- number of blog materials
- ability to pin a specific book
- meta title
- meta description
No complex page builder.
If module is disabled, do not leave an indexable empty URL.

### Stability/indexing requirements
Page must:
- return HTTP 200 when enabled
- render primary content server-side / without JS dependency
- not have `noindex`
- not canonicalize to `/books/` or `/`
- be in sitemap
- have persistent internal links
- avoid duplicate copies via query parameters
- avoid duplicate `/discover/` content; `/discover/` is 301 only

### Required verification before canonization
- `/shcho-pochytaty/` → 200
- `/discover/` → 301
- canonical correct
- sitemap entry and lastmod correct
- robots correct
- schema validator clean
- all internal links checked
- mobile and desktop checked
- no 404
- no PHP warning/notice
- books/blogs are sourced from modules, not manually duplicated

### Packaging rule
After implementation the feature must be present in the three synchronized canonical packages:
1. Core — only if a system contract change is genuinely required
2. Template / Design — presentation layer
3. Full Build — complete deployable build
All three must correspond to the same version.

## Action log — verified completed actions only
- [DONE] 2026-09-07 — Official start received from user.
- [DONE] 2026-09-07 — Established immutable output rule: Core + Template + Full Build, synchronized to one canonical state.
- [DONE] 2026-09-07 — Established immutable modular architecture rule: application functionality only via modules.
- [DONE] 2026-09-07 — Extracted and inspected all 3 supplied archives in isolated working directories; originals remain untouched.
- [DONE] 2026-09-07 — Confirmed Full Build is newer than R300_Core_R1 and is the runtime source of truth for reconciliation.
- [DONE] 2026-09-07 — Confirmed module-state root symptom: several modules exist as directories/classes but lack module.json and are absent from modules.json, therefore Boss reports `v— / disabled` although functionality may exist elsewhere.
- [DONE] 2026-09-07 — Confirmed current runtime has two parallel module paths: Core ModuleRegistry plus LegacyModuleManager/overlay, while Boss independently infers state from module.json/modules.json.
- [DONE] 2026-09-07 — Confirmed Player bug root cause: Reader builds its playlist only from `_data/content/music.json` and further narrows it to the selected album; physical audio files not represented there are invisible.
- [DONE] 2026-09-07 — Confirmed remote warehouse is GitHub repository `mavik-name/sklad_open`, branch `main`, prefix `mavik-sklad`; created this persistent checklist.
- [DONE] 2026-09-07 — User UX requirement recorded: Boss module manager must remain simple/obvious; expose only everyday controls and each module's essential logical settings.
- [DONE] 2026-09-07 — Created and syntax-validated `_app/Core/Modules/ModuleCatalog.php` in the Full Build working tree. It provides canonical installed-module discovery, enabled state, protected modules, dependencies, Boss menu visibility and ordering while preserving boolean `modules.json` compatibility.
- [DONE] 2026-09-07 — Wired ModuleCatalog into bootstrap and LegacyModuleManager. Compatibility/Design modules now consume the same enabled-state catalog instead of reading a second independent manifest path. PHP syntax validation passed for both files.
- [DONE] 2026-09-07 — Added canonical task 8: permanent modular SEO/Discover landing page `Що почитати` at `/shcho-pochytaty/`, with `/discover/` 301 redirect, dynamic module-fed content, Boss settings, structured data, sitemap/internal-linking rules, and 3-package canonization requirement.

## Current action
- Continue migrating Boss ModuleManager and module UI/actions to ModuleCatalog; then add/normalize module metadata and syntax-test before moving to Player Core. SEO/Discover module task is now part of the canonical work queue and must be included before final three-package release.
