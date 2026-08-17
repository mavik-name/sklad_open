# R197 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL UNTIL USER APPROVES**

Base release for deployment: R196. Last explicitly canonical release remains R195.

Built: 2026-08-17 14:30 Europe/Kyiv.

## Changes in R197

- Listening mode keeps the screen awake with the Screen Wake Lock API for the entire time the listening panel is open, including while paused.
- Wake Lock is reacquired automatically when the PWA/page returns to the foreground and is released only when listening mode is closed or the page exits.
- Listening controls reduced to two actions only: `Читати` and `Пауза`.
- Previous/next/stop/clean-text controls removed from the listening control panel.
- Reader text is now directly tappable/clickable: tapping a sentence/position selects the nearest speech chunk and immediately starts reading from that position.
- Speech chunks are sentence-oriented for more precise tap-to-start behavior.
- Reader-listen and PWA cache-busters updated to R197; service-worker cache bumped to `mavik-shell-r197`.

## Validation

- PHP lint: 26/26 PASS.
- JavaScript syntax: 17/17 PASS.
- JSON parse: PASS.
- Reader/listen integration pages: 22; all reference `reader-listen.js?v=197`.
- Wake Lock implementation present and foreground reacquire path present.
- Only Read/Pause controls remain in the listening panel.
- Tap-to-start implementation present via caret position APIs.
- Indexable HTML duplicate-title groups: 0 after noindex-aware check.
- Multipart ZIP CRC: PASS for both parts.
- Full manifest SHA-256: `03abaecf73836dbc9f4e433904893549b76b50976b59097e66a5f96d12558d71`.
- Multipart set id: `r197-03abaecf73836dbc`.

## Artifacts

- `/Сайт/197 Збірка_Сайт_LISTEN-WAKE_PART-1.zip`
- `/Сайт/197 Збірка_Сайт_LISTEN-WAKE_PART-2.zip`

Next: deploy both parts over installed R196, test screen-wake behavior on the real phone/PWA, test Read/Pause and tap-to-start, then user may approve R197 as canonical.