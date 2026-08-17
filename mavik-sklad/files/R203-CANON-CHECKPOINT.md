# R203 CANON CHECKPOINT

Status: **CANONICAL / FROZEN CORE**
Approved by user: **2026-08-17**

R203 is the only active structural/functional CORE base for MAVIK.NAME.

## Canon artifacts

- `203 Збірка_Сайт_DESKTOP-NO-LISTEN_PART-1.zip`
  - SHA-256: `a005b4708de6eeab8ba0ca7560a80c527f0dd3478e8e085f3be8839868512235`
- `203 Збірка_Сайт_DESKTOP-NO-LISTEN_PART-2.zip`
  - SHA-256: `48916934bcecf008644d8d3170310675b2fbb95be178335d0bf82d6a83fa0370`

Release manifest SHA-256:
`df26d452fe240421327b076bebbb044e3b2477374f92b11d47777f22dd1aa2c8`

Multipart set id:
`r203-df26d452fe240421`

Build: 2026-08-17 17:38 Europe/Kyiv.

Library paths:
- `/Сайт/203 Збірка_Сайт_DESKTOP-NO-LISTEN_PART-1.zip`
- `/Сайт/203 Збірка_Сайт_DESKTOP-NO-LISTEN_PART-2.zip`

## Protected R203 behavior

R203 includes and supersedes the R200→R203 bugfix line.

- Mobile: MaVik PWA install flow is available.
- Mobile: audio reader is available with one central `▶ Читати ↔ ⏸ Пауза` control.
- Mobile: tap-to-start from the selected text position and Screen Wake Lock remain available.
- Desktop: audio reader does not initialize.
- Desktop: `▶ Слухати` CTA on book landing pages is hidden completely.
- Desktop: MaVik install UI does not initialize.
- Service worker and manifest remain technically present for mobile PWA support.
- Mobile menu has no numbering.
- Book order saving is server-backed and is reflected in the live content manifest/public rebuild rather than relying only on client-side rearrangement.
- Donation QR codes do not open a separate QR frame/modal; clicking a QR expands it only to the maximum width of the donation block, similarly on desktop and mobile.
- Donation block is constrained to the visible viewport and can scroll internally when needed.
- Literal `<iframe>`, `<frame>` and `<frameset>` markup is absent from the R203 build.
- Boss book editing is an ordinary inline panel, not a fixed drawer/frame.
- For books in Announcements, Boss allows the owner to edit the reason why the book is in announcements; this text is stored per book and rendered publicly. Current seeded reason for `kod-lehendy`: `Рукопис передано у видавництво на розгляд · поки лише анонс`.
- `/_site-state/` remains live protected state and must not be overwritten by ordinary deploy/patch.

## Validation recorded for R203 line

Final R203 targeted checks:
- PHP lint: 26/26 PASS;
- JavaScript syntax: 17/17 PASS;
- 21/21 book landing pages carrying the listen CTA load the R203 site-shell rule;
- desktop hide rule present for `.listen-read`;
- reader remains mobile-only;
- public internal references checked: 4318; broken: 0;
- duplicate indexable title groups: 0;
- multipart ZIP CRC: PASS for both parts.

R202 predecessor validation also recorded: sitemap 61 URLs; literal iframe/frame/frameset count 0; QR inline expansion and announcement-reason controls present.

## HARD CODE FREEZE AFTER R203

After R203, ordinary site work is **PATCH/OVERLAY ONLY, WITH NO CODE CHANGES**.

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
- generated public/SEO artifacts created by existing R203 mechanisms.

A content patch must never silently alter code.

## Cleanup decision

By explicit user decision on 2026-08-17, all site release archives before R203 were removed from `/Сайт`. Active GitHub checkpoint files for older site releases are removed so they cannot interfere with continuation. Git history may still retain historical commits, but they are not active state and must never be used as the working site base.

## Continuation rule

Always start ordinary site work from R203 and issue only the minimal content PATCH/OVERLAY. Do not modify code unless the user gives a new explicit instruction that overrides the R203 freeze.
