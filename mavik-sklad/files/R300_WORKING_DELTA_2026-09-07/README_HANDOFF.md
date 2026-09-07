# R300 WORKING DELTA — 2026-09-07

This package is the resumable working state for the priority modular R300 work.

Base artifacts:
- R300_Core_R1(1).zip
- R300_Design(2).zip
- Lite_R300_Canon_V1_07_09_2026 (1).zip

Current source of truth for runtime reconciliation: Lite_R300_Canon_V1_07_09_2026 (1).zip.

`files/` contains every file currently changed or added relative to the extracted Full Build baseline.
`R300_WORKING_CHANGES.patch` is the same working delta as a unified patch.
`SOURCE_SHA256SUMS.txt` identifies the exact three supplied source archives.
`R300_PRIORITY_CHECKLIST_2026-09-07.md` is the work log/handoff checklist.

No `_private` files, credentials, runtime tokens, user backups, music binaries, images, or other sensitive/live data are included in this handoff package.

Resume rule:
1. Start from the exact Full Build matching SOURCE_SHA256SUMS.txt.
2. Overlay `files/` preserving paths, or apply `R300_WORKING_CHANGES.patch`.
3. Read the checklist before continuing.
4. Continue action -> log action to remote warehouse.
