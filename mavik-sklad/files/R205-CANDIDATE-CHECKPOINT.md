# R205 CANDIDATE CHECKPOINT

Status: CANDIDATE, not canonical yet.
Base: canonical R204 uploaded by the user on 2026-08-17.

## Included CORE changes

1. Standard Boss book creation repaired end-to-end.
   - Finished: landing + reader + text mode + manifest + EPUB.
   - Beta: landing + reader + text mode, no EPUB.
   - Failed EPUB creation rolls back the newly created book directory and EPUB; no half-created manifest entry remains.
   - Safe recovery of an unregistered Boss-generated orphan directory left by an older failed add attempt with the same slug.

2. Explicit book status in Boss.
   - `Завершена · створити EPUB`
   - `Бета · без EPUB`
   - Beta -> Finished regenerates EPUB from current reader text.
   - Finished -> Beta removes EPUB.
   - Book list shows EPUB status.

3. Cityhost/open_basedir EPUB fix.
   - Removed EPUB dependence on system `/tmp`.
   - EPUB working directory is under protected `/_site-state/tmp/`.
   - Atomic final EPUB write and guaranteed temp cleanup.

4. Persistent custom book genres.
   - Separate `Додати жанр до постійного переліку` field/action.
   - Optional `Новий жанр` field while adding/editing a book.
   - Persistent state: `/_site-state/book-genres.json`, seeded by `/_site-admin/state-defaults/book-genres.json`.
   - Included in Boss state export/import.

5. Language-scoped maintenance.
   - UA and EN can be closed independently.
   - Legacy global maintenance remains as emergency mode.
   - Owner preview cookie bypass remains.
   - Localized UA/EN HTTP 503 page via `/maintenance/index.php`.

## Validation completed

- All PHP files pass `php -l`.
- Real HTTP multipart form test: finished book creation passed.
- Real HTTP test: beta book creation passed without EPUB.
- Failure test without ZipArchive: no book directory, manifest record, or EPUB left behind.
- Persistent genre action/storage test passed.
- Independent UA/EN maintenance flag state test passed.
- Multipart deploy validator accepts both R205 parts.
- Merged multipart manifest: release 205, base 204, 612 managed files.

## Release artifacts built locally

- `205 Збірка_Сайт_CORE_PART-1.zip`
- `205 Збірка_Сайт_CORE_PART-2.zip`
- convenience outer bundle: `205 Збірка_Сайт_CORE_bundle.zip`

R204 remains canonical until the user deploys R205 and explicitly confirms it as the new canonical release.
