# R207 CLEAN CORE — CANDIDATE CHECKPOINT

Date: 2026-08-17
Status: candidate until live-site verification by owner.

## Source
Clean rebuild from canonical R204, not from the experimental locale-maintenance chain.

## Included changes
- Standard Boss book creation repaired and transactional.
- Explicit Completed / Beta book status.
- Completed books generate EPUB; Beta books do not.
- Beta -> Completed creates EPUB; Completed -> Beta removes EPUB.
- EPUB temp work moved from system `/tmp` to protected `/_site-state/tmp/` for Cityhost `open_basedir` compatibility; final EPUB write is atomic.
- Persistent custom book genres in Boss; state included in export/import.
- Safe Boss overlay-patch deployment via `.mavik-patch.json`, exact `base_release`, SHA-256 validation, backup, post-write verification and rollback.
- Language routing fix: URL is authoritative; opening default Ukrainian URL does not auto-redirect to remembered `/en/`; opening `/en/` remains English.
- `mavik-language.js` cache key bumped to `v207`; service-worker cache bumped to `r207`.
- Boss startup cleanup removes obsolete `.maintenance-uk-on`, `.maintenance-en-on`, and `maintenance/index.php` artifacts if they survived earlier experiments.

## Explicitly excluded
- NO per-locale UA/EN maintenance.
- NO language-specific maintenance flags or routing.
- Maintenance remains one GLOBAL switch, matching R204 behavior.

## Validation
- PHP lint: 26/26 passed.
- Multipart PART 1 and PART 2 passed the same Boss multipart validator.
- Full simulated deployment over an R206 tree succeeded: copied 611 managed files and removed 3 obsolete managed files.
- After simulated deployment: `maintenance/index.php` absent; `.htaccess` exactly matches R204; global `_site-admin/maintenance.php` exactly matches R204; no `maintenanceUa`/`maintenanceEn` UI variables remain in Boss.
- Book/EPUB/custom-genre handlers are byte-for-byte identical to the tested R205 implementation.
- Overlay deploy functions present.
- Language script contains no saved-preference auto-redirect (`go(saved,false)`).
- ZIP CRC: PART 1, PART 2, bundle all OK.

## Artifacts
- `207 Збірка_Сайт_CLEAN-CORE_PART-1.zip`
  SHA-256: `b4a6f2389751fe00b4dc6807d545c9419a9a545eac16babf91bc2b1350a50e24`
- `207 Збірка_Сайт_CLEAN-CORE_PART-2.zip`
  SHA-256: `d2581335e1e39ee96d0d197511b997be702a59c93cc6690cc7629f991b01743f`
- bundle SHA-256: `89f0a5ad144dcddaac8eba87299883e3adee81f8ee0bd7b864dacff0dad6a6a3`
- full manifest SHA-256: `eb53a78be448fd8dfc797a8b024aa0d7972722dd5b7b9f72470b317c9a1e872e`
- multipart set id: `r207-eb53a78be448fd8d`

Do not promote R207 to canonical until owner confirms live-site behavior.