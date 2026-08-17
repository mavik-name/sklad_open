# R204 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL**

Canonical CORE remains **R203** until explicit user approval of R204.

Base: R203 canonical.

Built: 2026-08-17.

## Purpose

Strictly separate mobile text-reading mode from mobile audio-listening mode.

## R204 behavior

- Mobile `/books/<slug>/read/` without `?listen=1`: text reader only.
- In ordinary reading mode the audio module exits before any access to `window.speechSynthesis` and before creating the audio control.
- Mobile `/books/<slug>/read/?listen=1`: audio mode is enabled.
- Central audio button labels: `▶ Слухати` / `⏸ Пауза`.
- Accessibility label uses `Слухати вголос`, not `Читати вголос`.
- Desktop remains as in R203: no audio reader and no `▶ Слухати` CTA on book landing pages.
- No other intentional functional change.

## Validation

- PHP lint: 26/26 PASS.
- JavaScript syntax: 17/17 PASS.
- Strict `listen=1` gate occurs before `speechSynthesis`: PASS.
- Strict `listen=1` gate occurs before audio-button creation: PASS.
- Reader pages: 21/21 use `reader-listen.js?v=204`.
- Start label `Слухати`: PASS.
- Pause label `Пауза`: PASS.
- Old start label `Читати`: absent from the audio control.
- Public internal references: 4318 checked; broken: 0.
- Duplicate indexable title groups: 0.
- Multipart ZIP CRC: PASS for both parts.

Release manifest SHA-256:
`e5c2303f6568aca817f4bf8f1fce28792fff01b5f2a5d7fe757e3d225768a4e2`

ZIP SHA-256:
- PART-1: `030f88cf1f7a2099e0a91677a9964f0e0751fc43bad4cc1dc93ec74c303fb509`
- PART-2: `321f18f4ff09e6f7bc04da1cda45407c3075807ab3100d0b3037ea482bb2d634`

Multipart set id:
`r204-e5c2303f6568aca8`

Artifacts:
- `/Сайт/204 Збірка_Сайт_LISTEN-MODE-ONLY_PART-1.zip`
- `/Сайт/204 Збірка_Сайт_LISTEN-MODE-ONLY_PART-2.zip`

Next: deploy both parts and verify on mobile that ordinary `Читати` has no audio UI, while `Слухати` opens audio mode with the `Слухати / Пауза` button.
