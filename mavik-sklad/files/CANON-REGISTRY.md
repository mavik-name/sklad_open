# MAVIK — CANON REGISTRY

Updated: 2026-08-20
Status: **AUTHORITATIVE INDEX**

## Site MAVIK.NAME

- Master start: `mavik-sklad/START-HERE.txt`
- Site start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Current approved checkpoint: `mavik-sklad/files/R215-CANON.md`
- Current tested next-release candidate: `mavik-sklad/files/R217-GOODRELISE-CANDIDATE.md`
- Rejected R216 record: `mavik-sklad/files/R216-CANDIDATE.md`
- Cross-branch journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`
- Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
- Deploy backup canon: `mavik-sklad/files/SITE-DEPLOY-BACKUP-CANON.md`
- SEO identity/query canon: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`
- Protected SEO files: `mavik-sklad/files/PROTECTED-SEO-FILES.md`
- Localization freeze: `mavik-sklad/files/LOCALIZATION-FREEZE-2026-08-20.md`

## CURRENT RELEASE AUTHORITY

**R215 remains the sole explicitly approved structural/functional CORE base until the author directly approves R217_GoodRelise.**

- R216 = **REJECTED / DO NOT INSTALL**.
- R217_GoodRelise = **FINAL TESTED CANDIDATE**, built fresh from R215.

## CURRENT SITE PRIORITY — HARD OVERRIDE

Until the author explicitly changes this direction:

1. current site release = **one Ukrainian locale (`uk-UA`)**;
2. localization implementation is **PAUSED/FROZEN** and excluded from active release code;
3. primary objectives: maximum performance, crawlability, indexing, distribution and presence in the Ukrainian segment;
4. Boss must provide useful first-party statistics/SEO/technical monitoring without third-party analytics JS;
5. install packages must contain only required live/Boss/deploy files — no localization/WIP/backup/dev/legacy garbage.

## R217_GoodRelise candidate

Persistent binaries: ChatGPT Library `/Сайт/`.

- `R217_GoodRelise.zip`
- `R217_GoodRelise_PART1.zip`
- `R217_GoodRelise_PART2.zip`
- `R217_GoodRelise-AUDIT.txt`
- `R217_GoodRelise-CHECKPOINT.txt`
- `R217_GoodRelise-CHECKSUMS.txt`

Identifiers:
- release 217; base 215;
- managed files: **284**;
- manifest SHA-256: `f05a3f5f9d02ad357b88006480c56d8845ba8bcec8dd24f20baf2563d38d0219`;
- multipart set: `r217-f05a3f5f9d02ad35`;
- FULL SHA-256: `2234dcb886413cd66e5fb75d2c1c1ffe99f8c3c639a4615ae89e6c72d2a5b22d`;
- PART1 SHA-256: `11bd21282ae7fc27760e1824966801df5be1599630f4ddb238bdeed9a1ecab67`;
- PART2 SHA-256: `e0115a39790123c94950678f6386abc6c50ff7f51c79576cd2dd9ed4ebcc3059`.

Gate:
- PHP 31/31;
- JS 14/14;
- XML 2/2;
- JSON-LD 81/81;
- internal refs 5329/5329;
- sitemap 82/82 unique canonical URLs + 11 image entries;
- 21/21 EPUB integrity PASS;
- book cover PNG = 0; EPUB cover PNG = 0;
- FULL/PART1/PART2 validators PASS;
- synthetic real deploy R215→R217 PASS;
- synthetic real deploy R216→R217 PASS;
- protected live state preserved; retired locale state cleaned after backup; tx/stage garbage after success = 0.

Full authority for candidate details: `R217-GOODRELISE-CANDIDATE.md`.

## Permanent SEO / entity rule

Even while localization is frozen, the independent SEO/entity strategy remains active:

`MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name` = one author/brand entity.

Exact/ambiguous query `mavik` remains a long-term brand-search target. Do not fake drone/DJI product relevance or use doorway/keyword spam. Preserve `/mavik/`, `/about/`, stable `#website/#person`, real `sameAs`/author bindings and monitoring. Full authority: `SITE-SEO-IDENTITY-CANON.md`.

## Localization / translations — preserved but inactive

Implementation is paused, not deleted.

Recovery:
- GitHub branch: `freeze/localization-2026-08-19`;
- Library: `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`;
- checksum sidecar beside it;
- workspace: `mavik-sklad/translations/en/`;
- status authority: `mavik-sklad/files/LOCALIZATION-FREEZE-2026-08-20.md`.

The highest-priority future localization model remains documented for possible later resumption, but it must not be merged into the current Ukrainian release unless the author explicitly resumes localization.

## Other active canons

- Human writing/editing: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- Shared creative notebook: `mavik-sklad/files/00-ROBOCHYI-ZAPYSNYK-SPILNOHO-PYSMENNYA.md`
- Technical fiction control: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoints: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`
- Simple-first: `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- Privacy/media: `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- Public blog: `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`

## Conflict rule

The latest explicit user instruction has highest priority. R215 is release authority until direct approval of R217_GoodRelise. Localization remains frozen until direct author command to resume.
