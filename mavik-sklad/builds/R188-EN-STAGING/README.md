# MAVIK.NAME — R188 ENGLISH STAGING

Purpose: persistent mirror of **every file that will enter the future R188 full release**.

Canonical base: R187 `187 КАНОН_Сайт_ОК_daf4fd24.zip`
SHA-256: `daf4fd2415b6eb790f145172873cb95fbba3947a83f4a7bfbe0b81a01bdb4e21`
R188 status: WORK IN PROGRESS / NOT CANONICAL.

## HARD RULE

The directory tree under `mavik-sklad/builds/R188-EN-STAGING/` must mirror the final R188 ZIP paths.

Examples:
- final `/en/index.html` -> `mavik-sklad/builds/R188-EN-STAGING/en/index.html`
- final `/assets/app/en-site.css` -> `mavik-sklad/builds/R188-EN-STAGING/assets/app/en-site.css`
- final Boss file -> same relative Boss path under this staging root
- final English cover -> same relative `images/covers/en/...` path under this staging root
- final English EPUB -> same relative downloads path under this staging root

A file is **not considered safely included in R188** until its current copy exists in this staging tree, or a documented technical binary exception exists in `STAGING-MANIFEST.txt` with exact permanent location, size and SHA-256.

## PACKAGING RULE

The final R188 candidate must be assembled from this staging tree, or through an explicitly documented deterministic base-R187 + staging-overlay procedure. Never package from an untracked temporary session folder.

Before packaging:
1. reconcile staging tree against `STAGING-MANIFEST.txt`;
2. verify no required staged path is missing;
3. verify there are no untracked release files outside the manifest;
4. generate the exact `.mavik-release.json managed_files` list;
5. validate through the real Boss deploy validator;
6. run ZIP integrity / PHP / JS / JSON/XML / EPUB checks.

## CHECKPOINT RULE

After every meaningful work block, copy the changed release files into this staging tree **before or together with** updating the R188 checkpoint.

The checkpoint is documentation; this staging directory is the persistent file copy.

Mandatory canon: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`.
Latest handoff: `mavik-sklad/files/R188-EN-CHECKPOINT-LATEST.md`.
