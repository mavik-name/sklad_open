# R198 CANON CHECKPOINT

Status: **CANONICAL CORE**
Approved by user: **2026-08-17**

R198 is the only active structural/functional CORE base for MAVIK.NAME.

## Canon artifacts

- `198 Збірка_Сайт_SINGLE-LISTEN_PART-1.zip`
  - SHA-256: `6322ef0eafabccee04b751a035a5c5b58ca95d0fc08ed725f624e761fe1b64ce`
- `198 Збірка_Сайт_SINGLE-LISTEN_PART-2.zip`
  - SHA-256: `e0830ded4acfd4ac574b07b1a8326d7946a8ac253b6cbaefeda742dbad83aed0`

Release manifest SHA-256:
`abd9e992fd310d22dfa18567a70d266879a485714b15af1ce91cd791d4dd89ef`

Build timestamp:
`2026-08-17T14:45:38+03:00`

Library paths:
- `/Сайт/198 Збірка_Сайт_SINGLE-LISTEN_PART-1.zip`
- `/Сайт/198 Збірка_Сайт_SINGLE-LISTEN_PART-2.zip`

## R198 protected behavior

- installable PWA from the site;
- mobile menu without numbering;
- reader has exactly one central voice-control button;
- control toggles `▶ Читати` / `⏸ Пауза`;
- tapping a location in the text starts reading from that point;
- Screen Wake Lock remains active throughout listen mode, including pause, and is reacquired when the page becomes visible again;
- previous/next/stop duplicate controls are absent;
- R198 inherited the validated CMS/SEO synchronization architecture from the canonical line.

## Validation recorded for R198

- PHP lint: 26/26 PASS;
- JavaScript syntax: 17/17 PASS;
- reader pages using R198 listener: 22/22;
- single listener button / no active listener panel: PASS;
- Wake Lock logic: PASS;
- tap-to-start logic: PASS;
- indexable HTML duplicate-title groups: 0;
- multipart ZIP CRC: PASS.

## HARD CORE FREEZE — explicit user decision

After R198, routine site filling is **content PATCH/OVERLAY only, without any CORE intervention**.

Allowed routine patch scope:
- books and translations;
- EPUB files;
- covers and illustrations;
- music/media;
- blog and other content pages;
- content data/state intended for content;
- generated public indexes / SEO artifacts required to keep public/search state synchronized.

Forbidden in routine content patches:
- PHP/JS/CSS CORE logic;
- Boss functionality;
- templates/rendering architecture;
- PWA/service worker behavior;
- structural navigation engine;
- SEO/indexing engine logic;
- other structural/functional code of R198.

If a genuine CORE change is ever required, it must be treated as a separate structural/functional task, built as a new full candidate from R198, tested separately, and explicitly approved by the user. A content patch must never silently change CORE.

## Synchronization rule remains mandatory

Content changes must still keep public state and search-engine state synchronized where relevant: navigation/internal links, sitemap, noindex/robots, canonical, hreflang, structured data, IndexNow and internal SEO audit.

## Continuation rule

For ordinary content work, start from R198 and issue only the minimal content patch/overlay. Do not rebuild or touch CORE.
