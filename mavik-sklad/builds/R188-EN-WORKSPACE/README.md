# R188 ENGLISH — PERSISTENT WORKSPACE

Created: 15.08.2026 19:04 +03:00
Status: ACTIVE WORKSPACE / NOT RELEASE STAGING

Purpose: persistent warehouse copy of **every file needed during R188 English development**, including source/control files, intermediate translations, code, cover work, EPUB work, notes and archived drafts.

Hard rule:
- No work file may exist only in a transient chat/container session.
- As soon as a file is created, changed, imported or becomes necessary for the process, a current copy/reference must be stored here.
- Files intended for the final release are additionally copied to `mavik-sklad/builds/R188-EN-STAGING/` at their final ZIP-relative paths.
- Archive-only material (for example partial translation of unfinished `Social`) stays in WORKSPACE and MUST NOT enter STAGING.

Workspace structure:
- `control/` — checkpoints, journals, canons, source-release passport, plans.
- `source/` — source snapshots/pointers needed to reconstruct work.
- `translations/` — active/completed English manuscript files.
- `code/` — working implementation files before/while they are staged.
- `covers/` — English cover work.
- `epub/` — English EPUB work and validation notes.
- `archive/` — work performed that is not currently release-eligible.
- `WORKSPACE-LOG.md` — chronological record of every significant copy/change.

Release staging is separate:
`mavik-sklad/builds/R188-EN-STAGING/`

Final R188 ZIP must be assembled from canonical R187 + the fully reconciled staged R188 overlay (or from a complete staged mirror once that mirror is built), never from undocumented transient files.