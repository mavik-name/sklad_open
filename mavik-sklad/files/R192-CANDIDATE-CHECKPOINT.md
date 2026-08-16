# MAVIK.NAME — R192 CANDIDATE CHECKPOINT

Updated: 2026-08-16
Status: **CANDIDATE — NOT CANONICAL UNTIL EXPLICIT USER APPROVAL**
Base chain: R188 canon → R189 → R190 → R191 → R192

## Core change

R192 adds a provider-agnostic international support layer so Western payment/support services can be added later by a tiny content patch without rebuilding the site core.

- Ukrainian support remains unchanged: current Privat24 coffee block and QR codes.
- Non-Ukrainian versions no longer expose Privat24 / Ukrainian QR support.
- Foreign support reads public configuration from `assets/app/international-support.json`.
- Shipped config is intentionally `enabled: false` with no methods, therefore no empty/broken support button appears in foreign versions.
- Later patch only needs to replace/update that JSON and set `enabled: true`.
- Supported public methods: HTTPS `link` and copyable `copy` values.
- Per-language `labels` and `notes` are supported.
- Invalid/non-HTTPS link methods are rejected by the PHP normalizer.
- Never place secret API keys/tokens in this public config.

Example future data patch:

```json
{
  "schema": 1,
  "enabled": true,
  "methods": [
    {
      "id": "provider-id",
      "type": "link",
      "label": "Provider name",
      "url": "https://provider.example/author",
      "note": "Optional public note"
    }
  ]
}
```

`language-data.php` reads the file on request with no-store semantics, so after such a patch the UI appears without a new core release.

## Retained behavior

- `Код легенди` is one normal book page/object; announcement is only placement/status.
- stale Discover link corrected to `/books/kod-lehendy/`.
- manual/explicit language selection has priority over browser autodetect.
- English legal/copyright/footer layer retained.
- universal in-content Back navigation retained.
- separate desktop/mobile homepage book limits retained.
- multipart Boss deploy retained.

## Validation

- PHP: 25/25 PASS
- JavaScript: 16/16 PASS
- JSON: 14/14 PASS
- XML: 2/2 PASS
- EPUB CRC: 20/20 PASS
- public local refs checked: 4,654; broken: 0
- `/en/` static Privat24/payment-QR references: 0
- `site-shell.js` Privat24/payment-QR references: 0
- support disabled smoke: PASS
- future support data-patch smoke: PASS
- multipart ZIP integrity: PASS
- PART-1 → PART-2 deploy: PASS, 603 files copied, `/_site-state/` preserved, backup created, pending parts 0
- reverse PART-2 → PART-1 deploy: PASS

## Candidate archives

`192 Збірка_Сайт_MULTILANG_PART-1.zip`
- size: 27,168,114 bytes
- SHA-256: `2dbe799249e833eb5f9980f862bc02117ffafbfae0bc052b57fe9740467784b8`

`192 Збірка_Сайт_MULTILANG_PART-2.zip`
- size: 23,379,542 bytes
- SHA-256: `daf69e57df27ada7f1d5bb38416c298195fe8225b1e996e368872338b8d9759a`

Release manifest:
- release: 192
- base_release: 191
- managed files: 603
- SHA-256: `2baa602e6d542f2aa443d8af2abe922e3817555f1a480c5c1fb77a1f50f60620`
- multipart set id: `r192-2baa602e6d542f2a`

## Binary-storage note

The connected GitHub channel can record this checkpoint but the ZIP binaries are not claimed to be physically stored in GitHub. Local runtime artifacts are `/mnt/data/192 Збірка_Сайт_MULTILANG_PART-1.zip` and `/mnt/data/192 Збірка_Сайт_MULTILANG_PART-2.zip`.

## Canon rule

Do **not** update `releases/CANON.md` yet. Promote R192 only after the user installs/tests it and explicitly says OK/canonical.