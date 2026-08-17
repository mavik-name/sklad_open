# ENGLISH TRANSLATION SAFETY BRANCH — RECOVERY MANIFEST

Branch: `backup/english-translations-2026-08-17`
Created: 2026-08-17
Purpose: persistent recovery snapshot of English translation content independently of later `main` cleanup or site-release changes.

## What this branch protects

At snapshot creation time, it contains the persistent English translation tree and protected translation-content files then present on `main`, including:

- nine complete recovered English books under `mavik-sklad/translations/en/books/`;
- complete Evacuation translation: eight story files under `mavik-sklad/translations/en/work/evakuatsiia/`;
- Three Novels Nobody Reads partial translation: Sections 1–8 under `mavik-sklad/translations/en/partial/`;
- active The Sculptor files under `mavik-sklad/translations/en/work/skulptor/`, including Chapter 1 parts 1–5 and Chapter 2 parts 1–5;
- protected Social English batches under `mavik-sklad/files/r188-social-en-ch08-10.md`, `r188-social-en-ch11-13.md`, `r188-social-en-ch14-16.md`.

## Exact active continuation at snapshot

The Sculptor:
- Chapter 1 parts 1–5 COMPLETE;
- Chapter 2 parts 1–5 SAVED;
- continue after Ukrainian source line `— Але будете.`;
- retrieve the next contiguous passage from `Скульптор.docx` before translating further.

## Recovery rule

This branch is a recovery source, not the current site architecture.

Do not restore old site release structure from it wholesale. Recover translation-content files selectively when needed.

An old R-prefix in a translation filename does not make the content obsolete.

If `main` translation files appear missing, compare against this branch before retranslating anything.

For the current authoritative continuity rules on `main`, use:
`mavik-sklad/translations/en/CONTINUATION-CANON.md`

Additional recovery layers remain Git history/tree/blob SHAs and File Library.