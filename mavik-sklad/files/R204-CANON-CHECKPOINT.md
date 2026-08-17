# R204 CANON CHECKPOINT

Status: **CANONICAL / FROZEN CORE**
Approved by user: **2026-08-17**

R204 is the only active structural/functional CORE base for MAVIK.NAME.

## Canon artifacts

- `204 Збірка_Сайт_LISTEN-MODE-ONLY_PART-1.zip`
  - SHA-256: `030f88cf1f7a2099e0a91677a9964f0e0751fc43bad4cc1dc93ec74c303fb509`
- `204 Збірка_Сайт_LISTEN-MODE-ONLY_PART-2.zip`
  - SHA-256: `321f18f4ff09e6f7bc04da1cda45407c3075807ab3100d0b3037ea482bb2d634`

Release manifest SHA-256:
`e5c2303f6568aca817f4bf8f1fce28792fff01b5f2a5d7fe757e3d225768a4e2`

Multipart set id:
`r204-e5c2303f6568aca8`

Build timestamp:
`2026-08-17T17:48:18+03:00`

Library paths:
- `/Сайт/204 Збірка_Сайт_LISTEN-MODE-ONLY_PART-1.zip`
- `/Сайт/204 Збірка_Сайт_LISTEN-MODE-ONLY_PART-2.zip`

## Protected R204 behavior

R204 includes all accepted fixes from the R201–R203 bugfix line and adds strict separation of reading/listening modes.

- mobile PWA install flow remains available;
- desktop MaVik install UI does not initialize;
- desktop has no audio-reader UI and no `▶ Слухати` CTA on book landing pages;
- mobile book landing may offer `Читати` and `Слухати` as separate actions;
- ordinary mobile `Читати` opens the text reader only: the audio module exits before access to `speechSynthesis` and before creating its audio control;
- audio reader activates only in explicit `?listen=1` mode;
- the central audio control is `▶ Слухати ↔ ⏸ Пауза`;
- audio accessibility label uses `Слухати вголос`, not `Читати вголос`;
- listen mode retains tap-to-start and Screen Wake Lock behavior;
- donation QR expands only to the maximum width of its own donation block, without a separate QR frame/modal or fullscreen behavior;
- literal `iframe`, `frame`, `frameset` markup is absent from the release;
- Boss book editor is inline, not a fixed frame/drawer;
- book order is saved server-side and reflected in the live manifest/public rebuild;
- each announcement book has an editable reason field shown to readers;
- mobile menu has no numbering;
- `/_site-state/` remains protected from normal deploy/patch overwrite.

## Validation recorded for R204

- PHP lint: 26/26 PASS;
- JavaScript syntax: 17/17 PASS;
- reader pages using listener asset: 21/21 use R204 cache-buster;
- strict `?listen=1` gate occurs before `speechSynthesis` access and before audio-button creation: PASS;
- start button label `Слухати`, pause label `Пауза`, no start label `Читати`: PASS;
- public internal references checked: 4318; broken: 0;
- duplicate indexable title groups: 0;
- multipart ZIP CRC: PASS for both parts.

## HARD CODE FREEZE

After R204, routine site work is **PATCH/OVERLAY ONLY, WITH NO CODE CHANGES**.

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
- generated public/SEO artifacts created by existing R204 mechanisms.

A content patch must never silently alter code.

## Cleanup decision

By explicit user decision on 2026-08-17, everything before R204 is trash for the active site-release context. All site release archives before R204 are removed from `/Сайт`; only the two R204 parts remain there. Historical Git commits may physically remain in Git history, but historical release/checkpoint files must not be treated as active state or a working base.

## Continuation rule

Always start ordinary site work from R204 and issue only the minimal content PATCH/OVERLAY. Do not modify code unless the user gives a new explicit instruction that overrides the R204 freeze.
