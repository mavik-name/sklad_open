# R199 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL**

Base: **R198 canonical CORE**.

Built: 2026-08-17 15:04 Europe/Kyiv.

## Purpose

Make the **audio reader only** mobile-only. The normal text reader remains available on desktop exactly as before.

## R199 change scope

- `assets/app/reader-listen.js` exits immediately on desktop viewports wider than 780px.
- `assets/app/reader-listen.css` has a desktop safety guard hiding the audio-reader control at 781px and wider.
- Mobile audio-reader behavior is preserved from R198:
  - exactly one central `Читати ↔ Пауза` button;
  - tap a position in text to start reading from there;
  - Screen Wake Lock stays active in listen mode, including pause, and reacquires on return to the page.
- Text reading itself is not removed from desktop; only the audio-reader UI/logic is disabled there.
- Reader listen asset cache-buster bumped to R199 and service-worker shell cache bumped to R199 so installed PWA clients do not keep stale R198 listen JS.

## Validation

- PHP lint: 26/26 PASS.
- JavaScript syntax: 17/17 PASS.
- Reader pages using `reader-listen.js?v=199`: 22/22.
- Mobile gate present: PASS.
- Desktop listener initialization disabled: PASS.
- Desktop CSS safety guard: PASS.
- Single audio-reader button preserved: PASS.
- Tap-to-start preserved: PASS.
- Wake Lock preserved: PASS.
- Indexable HTML duplicate-title groups: 0.
- Multipart ZIP CRC: PASS for both parts.
- Release manifest SHA-256: `5ddecb7507ea643658c8f55bef6856b3b29d304f2ee91bc1327f201e780ff2ce`.
- Multipart set id: `r199-5ddecb7507ea6436`.

## Artifacts

- `/Сайт/199 Збірка_Сайт_MOBILE-LISTEN_PART-1.zip`
- `/Сайт/199 Збірка_Сайт_MOBILE-LISTEN_PART-2.zip`

R198 remains canonical until the user explicitly approves R199 after mobile + desktop smoke testing.
