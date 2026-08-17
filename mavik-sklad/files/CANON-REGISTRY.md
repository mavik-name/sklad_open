# MAVIK — CANON REGISTRY

Updated: 2026-08-17
Status: **AUTHORITATIVE INDEX**

## Universal

- Human-writing canon: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- Technical fiction canon: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoint/storage rules: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`

## Site MAVIK.NAME

- Start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Current canonical checkpoint: `mavik-sklad/files/R193-CANON-CHECKPOINT.md`
- Current structural/functional base: **R193**

R1–R192 are obsolete and must not be used as working or canonical site bases.

Narrow active canons that are not release snapshots may remain in force when relevant:
- mobile reader header: `mavik-sklad/files/kanon-shapky-mobilnoi-chytanky.txt`
- book page: `mavik-sklad/files/kanon-storinky-knyhy.txt`

## English content MAVIK.NAME

- Start: `mavik-sklad/files/EN-TRANSLATION-START-HERE.md`
- Source policy: `mavik-sklad/files/EN-SOURCE-POLICY.md`
- **Authoritative continuation canon: `mavik-sklad/translations/en/CONTINUATION-CANON.md`**
- Current exact status: `mavik-sklad/translations/en/STATUS.md`
- Physical workspace: `mavik-sklad/translations/en/`
- Dedicated safety branch: `backup/english-translations-2026-08-17`

Protected physical translation state:
- nine complete English books under `translations/en/books/`;
- Evacuation complete: eight stories under `translations/en/work/evakuatsiia/`;
- Three Novels Nobody Reads: Sections 1–8 under `translations/en/partial/`;
- Social: Chapters 8–16 in three protected `mavik-sklad/files/r188-social-en-*.md` files;
- The Sculptor active: Chapter 1 parts 1–5 complete; Chapter 2 parts 1–5 saved; exact continuation after source line `— Але будете.`.

English-translation content is preserved even if an individual working filename was created during an older site-release phase. A historical `r188` or other old release prefix does not make a translation-content file obsolete.

Before declaring translation loss, search all layers listed in `translations/en/CONTINUATION-CANON.md`: current main tree, safety branch, Git history/tree SHAs, historical translation workspaces as recovery-only sources, and File Library.

## Social / Соціальна

- Project start: `mavik-sklad/files/00-SOCIALNA-START-HERE.txt`
- Canon notes: `mavik-sklad/files/socialna-kanonichni-zamitky.txt`
- Review plan: `mavik-sklad/files/SOCIALNA-PLAN-AFTER-REVIEWS-2026-08-16.md`
- Persistent manuscript: `mavik-sklad/files/Соціальна.docx`
- Protected partial English archive: `r188-social-en-ch08-10.md`, `r188-social-en-ch11-13.md`, `r188-social-en-ch14-16.md`.

## Other active creative projects

- Всесвіт 25: `mavik-sklad/files/START-HERE-VSESVIT-25.md`
- Код легенди: `mavik-sklad/files/START-HERE-KOD-LEHENDY.md`
- Евакуація: `mavik-sklad/files/START-HERE-EVAKUATSIIA.md`
- Generation-ship concept: `mavik-sklad/files/START-HERE-GENERATION-SHIP.md`

For textual work, always verify the actual latest manuscript/artifact before editing or translating.

## Conflict rule

1. Latest explicit user-approved canon wins.
2. For the site, R193 is authoritative until a newer release is explicitly approved.
3. For English translation continuity, `translations/en/CONTINUATION-CANON.md` is authoritative unless explicitly superseded.
4. Actual latest approved manuscript/source artifact wins over older notes for prose content.
5. Historical release/checkpoint documents never override a newer approved canon; historical translation trees may still be searched for recovery of already-created content.
