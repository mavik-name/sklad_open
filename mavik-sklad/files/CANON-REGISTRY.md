# MAVIK — CANON REGISTRY

Updated: 2026-08-21
Status: **AUTHORITATIVE INDEX**

## Site MAVIK.NAME

- Master start: `mavik-sklad/START-HERE.txt`
- Site start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- **Current canonical checkpoint: `mavik-sklad/files/R223_TTS-CANON.md`**
- Cross-branch journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`
- Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
- Deploy backup canon: `mavik-sklad/files/SITE-DEPLOY-BACKUP-CANON.md`
- SEO identity/query canon: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`
- Protected SEO files: `mavik-sklad/files/PROTECTED-SEO-FILES.md`
- Localization freeze: `mavik-sklad/files/LOCALIZATION-FREEZE-2026-08-20.md`

## CURRENT RELEASE AUTHORITY

**R223_TTS = sole canonical structural/functional working base.**

Built directly from `R222_Statistic` and explicitly approved by the author on 2026-08-21.

`R222_Statistic` is preserved only as rollback reserve. It is not a working base and must not receive new changes.

All site releases before `R222_Statistic` remain obsolete/history unless the author explicitly orders otherwise.

## CURRENT HARD PRIORITY

1. Ukrainian-only `uk-UA` active site;
2. maximum performance/crawlability/indexing/Ukrainian reach;
3. comprehensive first-party Boss statistics/SEO monitoring;
4. minimum clean install tree;
5. localization implementation frozen;
6. no unnecessary structural SEO changes.

## R223_TTS

Persistent binaries/control files: ChatGPT Library `/Сайт/`:
- `R223_TTS.zip`
- `R223_TTS.sha256.txt`
- `R223_TTS-CHANGELOG.txt`
- `R223_TTS-CHECKPOINT.txt`
- `R223_TTS-CANON.txt`
- `CANONICAL_RELEASE.txt`

Identity:
- size `26847258` bytes;
- SHA-256 `d199f2dbd4d5d48aed71b85866176d141d3f4340b268fbd7c5f03159bfeb95bc`;
- base `R222_Statistic`.

Key delta:
- strict Ukrainian TTS voice selection (`uk-UA` / `uk-*`);
- no foreign-language fallback;
- install-help shown only if Ukrainian system voice is absent;
- platform-specific help for iPhone/iPad and Android;
- reader-listen cache-buster `v=224` across 21 readers;
- mobile PWA/install handling retained.

## Rollback reserve

Library: `/Сайт/reserve/R222_Statistic/`.

Preserve R222_Statistic unchanged. Use only on explicit rollback order from the author.

## SEO/entity

Permanent authority remains `SITE-SEO-IDENTITY-CANON.md`.

## Localization / translations

Preserved but inactive. Recovery: GitHub `freeze/localization-2026-08-19`, Library `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`, workspace `mavik-sklad/translations/en/`.

## Conflict rule

Latest explicit author instruction has highest priority. For site CORE, R223_TTS is the only valid working base; R222_Statistic is reserve only.