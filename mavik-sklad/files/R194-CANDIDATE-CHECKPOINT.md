# R194 CANDIDATE CHECKPOINT

Status: **CANDIDATE / NOT CANONICAL UNTIL USER APPROVAL**
Base: canonical **R193**.
Date: 2026-08-17.

Changes in candidate R194:
- Boss → Books now contains direct drag-and-drop book ordering with explicit save; separate Order subnav item removed as redundant.
- Boss → Pages now uses a visual rich-text editor for each locale (paragraphs, H2/H3, bold, italic, quotes, ordered/unordered lists, links, undo/redo, clear formatting) instead of raw textarea HTML entry.
- Native language UI changed: if explicit URL, saved preference, or browser locale resolves successfully to a supported pack, language controls stay hidden. If localization cannot be resolved, fallback language choices appear; on desktop they are under a compact `文` dropdown icon.
- SEO crawler duplicate-title diagnostics now ignore `noindex` pages, so reader shells and untranslated/noindex language placeholders do not create false alarms.
- Static verification of indexable HTML in the assembled candidate reports **0 duplicate title groups**.
- Existing R193 SEO crawler, IndexNow, Bing tools, free-books synchronization and protected secret storage are retained.

Candidate artifacts in ChatGPT Library `/Сайт/`:
- `194 Збірка_Сайт_SEO-UX_PART-1.zip`
- `194 Збірка_Сайт_SEO-UX_PART-2.zip`

Integrity:
- full manifest SHA-256: `64964e49e15116f810d66c9efb4ae596992f2e75fd0fa19162e937303b3ef6cc`
- multipart set id: `r194-64964e49e15116f8`
- PART-1 SHA-256: `9b7f0a3b703350f9744734c056edfbc6a204273887e0baff2919ceedd699a5f3`
- PART-2 SHA-256: `b817ad177e9aa6d6b3dde344d21bb9225323d27406cc86a88beee8f4a09b43c6`
- ZIP CRC: PASS both parts.
- PHP lint: PASS `boss/index.php`, `_site-admin/seo-tools.php`.
- JavaScript syntax: PASS `assets/app/mavik-language.js`.

Do not call R194 canonical until the user explicitly approves it. If approved, update `START-HERE-SITE.txt`, `releases/CANON.md`, master START-HERE and registry accordingly.