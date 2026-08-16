# MAVIK.NAME — R190 CANDIDATE CHECKPOINT

Updated: 2026-08-16
Status: **CANDIDATE — NOT CANONICAL UNTIL EXPLICIT USER APPROVAL**
Canonical far-warehouse base remains: **R188 MULTILANG CORE**.
Working chain: R188 → R189 candidate/installed test build → R190 candidate.

## User-approved direction carried into R190

- one multilingual core and one Boss;
- no Google Translate / translator UI / translator fallback;
- browser auto-detection only when there is no explicit/manual/saved language choice;
- native language buttons remain as manual override;
- universal language packs for menu/pages/service/legal/copyright/support content;
- separate desktop/mobile home book-count settings;
- drag-and-drop menu/pages;
- book placement state `books` / `announcements`;
- `Код легенди` is announcement-only and the manuscript is **submitted to a publisher for review**, not accepted/published;
- `Евакуація, або Дорогою до стабіка` is in the Ukrainian library and English translation queue;
- multipart Boss support remains available for future oversized releases.

## R190-specific fixes

### 1. Universal Back navigation
- one `← Назад / ← Back` control in the content field on internal pages;
- uses browser history when safe;
- direct-entry fallback returns to the corresponding section;
- not shown on the home page;
- clean Chrome read-aloud text pages remain interface-free.

### 2. `Код легенди` announcement cover
- `/announcements/kod-lehendy/` shows the cover selected in the live announcement/Boss state;
- Open Graph and Twitter image use the same live announcement-cover endpoint;
- no wording implying publisher acceptance.

### 3. Language-preference priority bug fixed
Previous problem: an older saved `UA` preference could win before an explicit `/en/` URL was considered.

R190 rule:
1. explicit prefixed URL such as `/en/` wins first and becomes the remembered choice;
2. otherwise a saved manual preference is used;
3. otherwise browser language auto-detection runs;
4. native language buttons always allow manual override.

### 4. English coffee/support restored
The English service layer now includes:
- desktop coffee icon;
- mobile coffee shortcut;
- English support dialog;
- two Privat24 QR codes;
- tap/click QR for large full-screen view.

These labels are read from the language pack, not hard-coded into one English page.

### 5. English copyright/footer restored
All `/en/...` HTML pages use the current shared shell and receive:
- `Copyright and legal protection`;
- `Privacy`;
- `viktor@mavik.name`;
- `© 2026 · Viktor Makarchuk — MaVik®`;
- `All rights reserved.`;
- copyright metadata where absent.

### 6. Language-pack service contract extended
Language packs now explicitly cover service strings:
`coffee`, `coffee_title`, `support_title`, `support_text`, `support_hint`, `support_close`, `support_qr`, `legal_rights`, `privacy`, `copyright_meta`, `copyright_line`, `rights_reserved`.

If a future pack is incomplete, missing service strings fall back to the configured default-language strings until translated. The pack README records these keys.

## Validation completed

- PHP lint: **26/26 PASS**
- JavaScript parse: **16/16 PASS**
- JSON: PASS
- XML: PASS
- EPUB CRC: **20/20 PASS**
- public internal refs checked: **4250**, broken: **0**
- English HTML pages using current shell: **79/79**
- Google Translate / translator technical markers: **0**
- English service-layer keys: complete
- explicit-prefix-before-saved-preference assertion: PASS
- ZIP `unzip -t`: PASS
- R189 Boss ZIP validator: PASS
- release ZIP contains no `/_site-state/`

A full local backup+deploy smoke for R189 → R190 was attempted but the backup ZIP operation exceeded the available tool execution timeout. The R190 service/language changes do not modify the deploy algorithm itself. The completed R189 validator accepts the R190 package.

## Candidate artifact

`190 Збірка_Сайт_MULTILANG_CLASSIC.zip`

- size: **50,541,167 bytes** (~48.20 MiB)
- SHA-256: `a645b416ce3f2c5ab72c08884f58451db87190f2a4c79215b998898eefe183d5`
- release: **190**
- base_release: **189**
- managed files: **603**
- one classic ZIP; below a PHP `50M` byte limit (`52,428,800` bytes)

## Binary-storage note

The GitHub connector available in this session can persist UTF-8 text/checkpoints but not upload this large ZIP binary. Therefore the far warehouse records the exact filename, size and SHA-256. Do not claim the R190 ZIP itself is physically stored in GitHub unless that is separately verified.

## Canon rule

Do **not** change `mavik-sklad/releases/CANON.md` from R188 yet. Promote R190 only after the user installs/tests it and explicitly says it is OK / canonical.
