# R200 CANON CHECKPOINT

Status: **CANONICAL / FROZEN CORE**
Approved by user: **2026-08-17**

R200 is the only active structural/functional CORE base for MAVIK.NAME.

## Canon artifacts

- `200 Збірка_Сайт_MOBILE-PWA_PART-1.zip`
  - SHA-256: `78d2f8a920b5800b7b9c80699cb3ff35c4aafe5fcf198485b2508914d3332491`
- `200 Збірка_Сайт_MOBILE-PWA_PART-2.zip`
  - SHA-256: `8c048f87ac6b6e7b6f5ab64fc86d525d2eddadf8759481a0a144df8e582fa890`

Release manifest SHA-256:
`bd1b6ae8229c04e3ba682f287699d1fcf8c8702098c3820e5b7be067e7a3f1fc`

Build timestamp:
`2026-08-17T15:18:29+03:00`

Library paths:
- `/Сайт/200 Збірка_Сайт_MOBILE-PWA_PART-1.zip`
- `/Сайт/200 Збірка_Сайт_MOBILE-PWA_PART-2.zip`

## Protected R200 behavior

- mobile: MaVik PWA install flow is available;
- mobile: audio reader is available;
- reader has one central `▶ Читати ↔ ⏸ Пауза` control;
- tapping the desired text position starts reading from that point;
- Screen Wake Lock is kept during listen mode, including pause, and reacquired after visibility restoration;
- desktop: audio reader does not initialize;
- desktop: MaVik install UI does not initialize;
- service worker and manifest remain technically present for the mobile PWA;
- mobile menu has no numbering.

## Validation recorded for R200

- PHP lint: 26/26 PASS;
- JavaScript syntax: 17/17 PASS;
- PWA script references: 61/61 use R200 cache-buster;
- static install UI in HTML: 0;
- PWA mobile gate before UI creation: PASS;
- audio reader mobile-only: PASS;
- single reader button / Wake Lock / tap-to-start: PASS;
- indexable HTML duplicate-title groups: 0;
- multipart ZIP CRC: PASS.

## HARD CODE FREEZE

After R200, routine site work is **PATCH/OVERLAY ONLY, WITH NO CODE CHANGES**.

Forbidden without a new explicit user decision:
- PHP changes;
- JavaScript changes;
- CSS changes;
- Boss changes;
- template/rendering changes;
- PWA/service-worker/manifest logic changes;
- navigation engine changes;
- SEO/indexing engine changes;
- refactoring, optimization, hidden fixes or any other CORE intervention.

Allowed routine patches:
- books and translations;
- EPUB;
- covers and illustrations;
- music/media;
- blog and static content;
- content data/metadata;
- generated public/SEO artifacts created by existing R200 mechanisms.

A content patch must never silently alter code.

## Cleanup decision

By explicit user decision on 2026-08-17, all site release archives before R200 were removed from `/Сайт`. Old R193–R199 release/checkpoint documents are removed from the active GitHub tree so they cannot interfere with continuation. Git history may still contain historical commits, but they are not active state and must never be used as the working site base.

## Continuation rule

Always start ordinary site work from R200 and issue only the minimal content PATCH/OVERLAY. Do not modify code unless the user gives a new explicit instruction that overrides the R200 freeze.
