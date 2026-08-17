# R200 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL**

Canonical CORE remains **R198** until explicit user approval of a newer release.

Base chain: R198 canonical → R199 candidate (mobile-only audio reader) → R200 candidate.

Built: 2026-08-17 15:18 Europe/Kyiv.

## Purpose

Make the MaVik app-install flow mobile-only as well. Desktop remains a normal website without our PWA-install offer.

## R200 behavior

- Mobile: `Встановити MaVik` install flow remains available.
- Mobile: audio reader remains available exactly as in R199 — one central `Читати / Пауза` control, tap-to-start and Screen Wake Lock.
- Desktop: audio reader does not initialize.
- Desktop: MaVik install UI does not initialize — no floating install button, no install item in menu, no install modal/instructions.
- Service worker registration and manifest remain present because they are required for the mobile PWA architecture.
- The mobile gate executes before any PWA install UI is created.
- No static `Встановити MaVik` control exists in initial HTML.

## Validation

- PHP lint: 26/26 PASS.
- JavaScript syntax: 17/17 PASS.
- PWA script references: 61 pages, all use R200 cache-buster.
- Static install UI in HTML: 0.
- PWA mobile gate before UI creation: PASS.
- Desktop still registers the service worker but receives no MaVik install UI: PASS.
- Audio reader remains mobile-only: PASS.
- Single reader button / Wake Lock / tap-to-start preserved: PASS.
- Indexable HTML duplicate-title groups: 0.
- Multipart ZIP CRC: PASS for both parts.

Release manifest SHA-256:
`bd1b6ae8229c04e3ba682f287699d1fcf8c8702098c3820e5b7be067e7a3f1fc`

ZIP SHA-256:
- PART-1: `78d2f8a920b5800b7b9c80699cb3ff35c4aafe5fcf198485b2508914d3332491`
- PART-2: `8c048f87ac6b6e7b6f5ab64fc86d525d2eddadf8759481a0a144df8e582fa890`

Multipart set id:
`r200-bd1b6ae8229c04e3`

## Artifacts

- `/Сайт/200 Збірка_Сайт_MOBILE-PWA_PART-1.zip`
- `/Сайт/200 Збірка_Сайт_MOBILE-PWA_PART-2.zip`

Next: deploy both parts, verify desktop has neither audio-reader UI nor MaVik install offer, verify mobile keeps both, then canonicalize only after explicit user approval.
