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

## Action log
- [DONE] 2026-09-07 — Official start received from user.
- [DONE] 2026-09-07 — Established immutable output rule: Core + Template + Full Build, synchronized to one canonical state.
- [DONE] 2026-09-07 — Established immutable modular architecture rule: application functionality only via modules.
- [DONE] 2026-09-07 — Extracted and inspected all 3 supplied archives.
- [DONE] 2026-09-07 — Confirmed Full Build is newer than R300_Core_R1 and must be treated as current runtime source of truth before new changes.
- [DONE] 2026-09-07 — Confirmed current live build contains modules absent or newer than Core baseline, including About, Legal, Warehouse and changed Core classes.
- [DONE] 2026-09-07 — Confirmed module-state root symptom: design modules contain module.json/version metadata; Analytics, Author, Releases, Search, Support, System and Warehouse lack module.json and therefore appear as `v— / disabled` in Boss.
- [DONE] 2026-09-07 — Confirmed remote warehouse implementation is GitHub repository `mavik-name/sklad_open`, branch `main`, prefix `mavik-sklad`.
- [DONE] 2026-09-07 — Created persistent remote checklist at `mavik-sklad/files/R300_PRIORITY_CHECKLIST_2026-09-07.md`.
- [DONE] 2026-09-07 — Root cause refined: current runtime has two parallel loaders (Core ModuleRegistry + LegacyModuleManager/overlay) while Boss separately infers module state from module.json; this allows a module to run but appear disabled/unversioned.
- [DONE] 2026-09-07 — Compared supplied Template against current Full Build: 20 overlapping design files differ; Template must be refreshed from live before new UI/module work.
- [DONE] 2026-09-07 — Created isolated working trees for Full Build, Core and Template; original supplied archives remain untouched as rollback/reference sources.
- [DONE] 2026-09-07 — Added canonical `R300\Core\Modules\ModuleCatalog` as the single source of module metadata/state.
- [DONE] 2026-09-07 — Added missing module metadata for Analytics, Author, Releases, Search, Support, System and Warehouse; hardened Boss/System as protected system modules.
- [DONE] 2026-09-07 — Reworked bootstrap so installed Core modules self-register from module directories instead of a second hard-coded module list; compatibility overlay now consumes the same ModuleCatalog state.
- [DONE] 2026-09-07 — Migrated Boss ModuleManager to ModuleCatalog; protected modules cannot be disabled/deleted; module order and Boss-menu visibility are stored separately from enabled state.
- [DONE] 2026-09-07 — Added Boss module controls for move up/down and hide/show in Boss without disabling the module.
- [DONE] 2026-09-07 — PHP syntax validation passed for ModuleCatalog, bootstrap, LegacyModuleManager, ModuleManager, Boss Module and Boss system view after registry changes.
- [DONE] 2026-09-07 — Player bug root cause confirmed: Reader player currently builds its list only from `music.json` and narrows it to the selected album; audio files physically present in the folder but absent from JSON are invisible.

## Next action
- Implement Player module/library so directory contents are authoritative for physical audio discovery, while JSON supplies metadata/visibility/playlists; then connect Reader and Boss Player Manager to that module.
