BUILD 0.9 — тестовий кандидат. Почніть з README-UPDATE-0.9.md. Нижче — історичні інструкції бази 0.8.

Forum MaVik — test build 0.8 Visual Rebuild

Target: https://forum.mavik.name/

Deployment over 0.7:
1. Keep a backup of the current forum folder and storage/forum.sqlite if it exists.
2. Extract this archive into the document root of forum.mavik.name, replacing application files.
3. Do NOT delete the existing storage/forum.sqlite database.
4. Open the forum as administrator and hard-refresh the page (Ctrl+F5) so style.css?v=0.8 is loaded.

Fresh install:
1. Extract to the document root.
2. Open https://forum.mavik.name/install.php
3. Create the first administrator.
4. The forum starts in maintenance/noindex mode.

Build 0.8 focus:
- visual rebuild against the approved MaVik forum reference;
- canonical MaVik-style header and true mobile menu;
- integrated hero photo (books + cup, no writing on objects);
- compact forum category table and recent-topic table;
- compact right sidebar;
- MaVik copyright footer;
- coffee + back-to-top controls;
- replies and quotes remain enabled;
- topics rank by pinned status, then latest activity;
- category admin: edit, hide/show, delete empty categories, desktop drag reorder, mobile up/down reorder.
