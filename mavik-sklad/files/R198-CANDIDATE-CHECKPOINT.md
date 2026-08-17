# R198 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL**

Base: R197 candidate. Canon remains R195 until the user explicitly approves a newer release.

Built: 2026-08-17 14:45 Europe/Kyiv.

## Purpose

Remove duplicate listen controls from the reader UI. Keep exactly one central floating control.

## R198 behavior

- Exactly one central listen button in the reader.
- The single button toggles between `▶ Читати` and `⏸ Пауза`.
- The large duplicate listen-control panel from R197 is removed from the active DOM logic.
- Tapping a sentence/position in the book text starts reading from that point.
- Screen Wake Lock remains active for the listen mode, including while paused, and is reacquired when the document becomes visible again.
- Previous/next/stop controls remain removed.
- Reader listen cache-buster bumped to R198; service-worker shell cache bumped to R198.

## Validation

- PHP lint: 26/26 PASS.
- JavaScript syntax: 17/17 PASS.
- Reader pages using the R198 listener: 22/22.
- Reader listener creates exactly one button and no listen panel.
- Wake Lock logic present.
- Tap-to-start logic present.
- Indexable HTML duplicate title groups: 0.
- Multipart ZIP CRC: PASS for both parts.
- Release manifest SHA-256: `abd9e992fd310d22dfa18567a70d266879a485714b15af1ce91cd791d4dd89ef`.
- Multipart set id: `r198-abd9e992fd310d22`.

## Artifacts

- `/Сайт/198 Збірка_Сайт_SINGLE-LISTEN_PART-1.zip`
- `/Сайт/198 Збірка_Сайт_SINGLE-LISTEN_PART-2.zip`

Next: deploy both parts and verify on the real mobile reader that only one central button remains and that tap-to-start + Wake Lock still work.