# R300 PRIORITY WORK — CHECKLIST / HANDOFF

Date: 2026-09-07
Status: IN PROGRESS
Canonical rule: every completed work package produces 3 synchronized archives: Core + Template + Full Build.
Architecture rule: after deployment, all application functionality works only through modules; Core is kernel only; Template is presentation only.

## Source artifacts
- R300_Core_R1(1).zip — supplied canonical Core baseline.
- R300_Design(2).zip — supplied canonical Template/Design baseline.
- Lite_R300_Canon_V1_07_09_2026 (1).zip — supplied current Full Build / live canonical baseline.

## Priority scope approved by user
1. Player Core: player scans its own audio directory and builds a complete playlist automatically; no manual hard-coded track list or artificial limit.
2. Module Registry: all installed modules self-register; eliminate false `v— / disabled` state; protect system modules.
3. Blog Publisher: import prepared ZIP packages with content, images, tags, links and SEO metadata.
4. Blog sandbox: imported blog package is unpacked and previewed in an isolated sandbox; publication to live only after explicit manual approval.
5. Player Manager in Boss: upload/hide/delete tracks; create/manage playlists; assign playlists to books; optionally allow reader to choose among allowed playlists.
6. Boss modularization: connect/disconnect/sort/hide modules, dependencies, versions, states; system modules cannot be disabled/deleted.
7. Boss module UX: module connection menu must be simple and obvious; each module exposes only its most useful logical settings, while technical/internal parameters remain hidden from normal admin use.

## Action log — verified completed actions only
- [DONE] 2026-09-07 — Official start received from user.
- [DONE] 2026-09-07 — Established immutable output rule: Core + Template + Full Build, synchronized to one canonical state.
- [DONE] 2026-09-07 — Established immutable modular architecture rule: application functionality only via modules.
- [DONE] 2026-09-07 — Extracted and inspected all 3 supplied archives in isolated working directories; originals remain untouched.
- [DONE] 2026-09-07 — Confirmed Full Build is newer than R300_Core_R1 and is the runtime source of truth for reconciliation.
- [DONE] 2026-09-07 — Confirmed module-state root symptom: several modules exist as directories/classes but lack module.json and are absent from modules.json, therefore Boss reports `v— / disabled` although functionality may exist elsewhere.
- [DONE] 2026-09-07 — Confirmed current runtime has two parallel module paths: Core ModuleRegistry plus LegacyModuleManager/overlay, while Boss independently infers state from module.json/modules.json.
- [DONE] 2026-09-07 — Confirmed Player bug root cause: Reader builds its playlist only from `_data/content/music.json` and further narrows it to the selected album; physical audio files not represented there are invisible.
- [DONE] 2026-09-07 — Confirmed remote warehouse is GitHub repository `mavik-name/sklad_open`, branch `main`, prefix `mavik-sklad`; created this persistent checklist.
- [DONE] 2026-09-07 — User UX requirement recorded: Boss module manager must remain simple/obvious; expose only everyday controls and each module's essential logical settings.
- [DONE] 2026-09-07 — Created and syntax-validated `_app/Core/Modules/ModuleCatalog.php` in the Full Build working tree. It provides canonical installed-module discovery, enabled state, protected modules, dependencies, Boss menu visibility and ordering while preserving boolean `modules.json` compatibility.

## Current action
- Wire ModuleCatalog into bootstrap, LegacyModuleManager and Boss ModuleManager; add/normalize module metadata. Then syntax-test before moving to Player Core.
