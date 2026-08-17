# R196 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL UNTIL DEPLOY + LIVE SMOKE + USER APPROVAL**

Base: **R195 canonical**.
Built: `2026-08-17T14:01:50+03:00`.

## R196 scope

- Installable PWA flow is now visible to users.
  - Android/Chromium: site captures `beforeinstallprompt` and opens the browser's native install prompt.
  - iPhone/iPad: site provides the Home Screen installation instructions when native prompt is unavailable.
  - install controls disappear in standalone/installed mode.
- PWA manifest updated for books/read/listen positioning and installation metadata.
- Service worker bumped to `mavik-shell-r196` with an explicit offline fallback.
- Security/cache hardening: Boss, account, `_site-admin`, `_site-state`, analytics/API/PHP and MP3/music-library endpoints are excluded from PWA cache.
- Reader now has a prominent fixed **Слухати** control.
  - in-app `speechSynthesis` TTS;
  - prefers a Ukrainian system voice when available;
  - starts near the reader's current viewport;
  - pause/resume, stop, previous/next chunk;
  - saves listening position per book;
  - clean text page remains the fallback for browser/system read-aloud.
- Every current Ukrainian book landing with a reader has a visible `▶ Слухати` action.
- Boss future-book generator also emits the `Слухати` action, so newly added books inherit the feature.
- All visual numbering was removed from mobile menus, both from static initial HTML and JS-rendered menu state. Owner/admin remains last but has no number.

## Validation

- managed release files: 609/609;
- PHP lint: 26/26 PASS;
- JavaScript syntax: 17/17 PASS;
- JSON + webmanifest parse: 14 PASS;
- PWA structural checks: manifest/icons/service worker/install-flow PASS;
- current reader listen coverage: 21/21;
- indexable HTML: 61;
- duplicate title groups: 0;
- missing title/description: 0;
- H1 errors: 0;
- canonical errors: 0;
- sitemap: 61/61 canonical indexable URLs;
- noindex in sitemap: 0;
- hreflang reciprocity: PASS;
- JSON-LD: PASS;
- internal references checked: 4,319; broken: 0;
- Boss actions: 72; POST forms checked: 68; CSRF missing: 0;
- EPUB CRC: 20/20 PASS;
- multipart ZIP CRC: PASS.

## Artifacts

- `196 Збірка_Сайт_PWA-LISTEN_PART-1.zip`
  - SHA-256: `5bf4dd48761c0ddd6334263abb4ecad20099d603b03967d5d45107f2b3445718`
- `196 Збірка_Сайт_PWA-LISTEN_PART-2.zip`
  - SHA-256: `a8f5443202a69616221ba6691a01323251ff5454e15b5c6a244eda15ebe26436`

Release manifest SHA-256:
`a81f0f35167c01b10ab32cd3f33f677c8028540e02fb5791c36c7ff907442c9c`

Multipart set id:
`r196-a81f0f35167c01b1`

## Canon rule

R195 remains canonical until R196 is deployed and explicitly approved by the user. Do not use R196 as the base for a later release before that approval.

## Required live smoke after deploy

- confirm Boss header displays R196 and build timestamp;
- confirm mobile menu has no `01–05` or `99` markers;
- test `Встановити MaVik` on a real Android/Chrome device and iPhone/Safari path if available;
- install PWA and confirm standalone launch;
- open at least one book and test `Слухати`, pause/resume and clean-text fallback;
- verify `/sw.js`, `/manifest.webmanifest`, `/offline.html` over HTTPS;
- run live SEO/HTTP audit and verify no indexing regression.
