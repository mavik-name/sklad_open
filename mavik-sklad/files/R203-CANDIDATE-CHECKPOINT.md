# R203 CANDIDATE CHECKPOINT

Status: **CANDIDATE — NOT CANONICAL**

Canonical CORE remains **R200** until explicit user approval of a newer release.

Base chain for this bugfix line: R200 canonical → R201 candidate → R202 candidate → R203 candidate.

Built: 2026-08-17 17:38 Europe/Kyiv.

## Purpose

Remove the remaining desktop-visible `▶ Слухати` CTA from book landing pages while keeping mobile audio-reader entry intact.

## R203 behavior

- Mobile book pages: `▶ Слухати` remains visible and opens the mobile audio-reader flow.
- Desktop book pages: `.listen-read` is hidden with a desktop-only media rule.
- The reader itself remains mobile-only as already implemented.
- Future Boss-generated book landing pages use the same cache-busted site-shell CSS.
- No other functional behavior is intentionally changed.

## Validation

- PHP lint: 26/26 PASS.
- JavaScript syntax: 17/17 PASS.
- Book landing pages carrying the Listen CTA: 21; all load `site-shell.css?v=203`.
- Desktop hide rule present: `@media(min-width:781px){.listen-read{display:none!important}}`.
- Public internal references checked: 4318; broken: 0.
- Duplicate indexable title groups: 0.
- Multipart ZIP CRC: PASS for both parts.

Release manifest SHA-256:
`df26d452fe240421327b076bebbb044e3b2477374f92b11d47777f22dd1aa2c8`

ZIP SHA-256:
- PART-1: `a005b4708de6eeab8ba0ca7560a80c527f0dd3478e8e085f3be8839868512235`
- PART-2: `48916934bcecf008644d8d3170310675b2fbb95be178335d0bf82d6a83fa0370`

Multipart set id:
`r203-df26d452fe240421`

Artifacts:
- `/Сайт/203 Збірка_Сайт_DESKTOP-NO-LISTEN_PART-1.zip`
- `/Сайт/203 Збірка_Сайт_DESKTOP-NO-LISTEN_PART-2.zip`

Next: deploy both parts and verify on desktop that the `▶ Слухати` CTA is absent from book pages while it remains available on mobile.