# MAVIK — CANON REGISTRY

Updated: 2026-08-20
Status: **AUTHORITATIVE INDEX**

## Site MAVIK.NAME

- Master start: `mavik-sklad/START-HERE.txt`
- Site start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Last explicitly approved checkpoint: `mavik-sklad/files/R215-CANON.md`
- Installed pre-R222 base: `mavik-sklad/files/R217-GOODRELISE-CANDIDATE.md`
- Current final tested candidate: `mavik-sklad/files/R222-CANDIDATE.md`
- Rejected R216: `mavik-sklad/files/R216-CANDIDATE.md`
- Cross-branch journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`
- Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
- Deploy backup canon: `mavik-sklad/files/SITE-DEPLOY-BACKUP-CANON.md`
- SEO identity/query canon: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`
- Protected SEO files: `mavik-sklad/files/PROTECTED-SEO-FILES.md`
- Localization freeze: `mavik-sklad/files/LOCALIZATION-FREEZE-2026-08-20.md`

## CURRENT STATE

- R215 = остання прямо затверджена release authority.
- R217_GoodRelise = фактично встановлена база перед R222.
- R222 = **FINAL TESTED CLEAN/STABILIZATION CANDIDATE**, готова до встановлення, ще не канонічна без прямого ОК автора.
- R216 = REJECTED / DO NOT INSTALL.

## CURRENT HARD PRIORITY

1. one Ukrainian locale `uk-UA`;
2. maximum performance, crawlability, indexing and Ukrainian reach;
3. comprehensive first-party Boss statistics/SEO monitoring;
4. minimum clean install tree;
5. localization implementation remains frozen;
6. after successful R222 live verification: stabilization period without unnecessary structural SEO changes.

## R222 candidate

Persistent binaries: ChatGPT Library `/Сайт/`.

- `R222.zip`
- `R222_PART1.zip`
- `R222_PART2.zip`
- `R222-AUDIT.txt`
- `R222-CHECKPOINT.txt`
- `R222-CHECKSUMS.txt`

Identity:
- release 222; base 217;
- managed files 261;
- manifest `38a1a21936163bef3f17f517dac6daa1d3b753ce26e9afb326f17ebacf4a27e2`;
- multipart set `r222-38a1a21936163bef`;
- FULL `89f8d3079027f1b0041e142f004ae547c81f957c35fdbb4c1a7cf38b26b0229d`;
- PART1 `bff28f101563376f9d9ecc371118b0b3a6a51f01d98bbb08942266c8e15573d0`;
- PART2 `14ddadc437251d51400895fdcaea4f34b0517917241f9a69a104b30d3fd9b470`.

Gate:
- manifest/install inventory 261/261 exact;
- garbage 0; EN/localization/PWA refs 0; third-party scripts 0;
- PHP 31/31; JS 14/14; XML 2/2; JSON-LD 81/81;
- internal broken refs 0;
- sitemap 82/82 unique;
- 21/21 EPUB;
- 23/23 book covers JPG;
- FULL/PART1/PART2 validators PASS;
- actual FULL R217→R222 deploy PASS;
- actual multipart R217→R222 deploy PASS;
- post-deploy static/SEO audit 0 issues;
- Apache crawler matrix Browser/Googlebot/Bingbot/OAI-SearchBot/ChatGPT-User = 410/410 HTTP 200;
- redirect/security/cache/compression/maintenance tests PASS;
- forced-failure rollback PASS.

Full details: `mavik-sklad/files/R222-CANDIDATE.md` and Library `/Сайт/R222-AUDIT.txt`.

## Permanent SEO/entity rule

`MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name` = one author/brand entity.
Exact/ambiguous `mavik` remains long-term brand target. Preserve `/mavik/`, `/about/`, stable `#website/#person`, real `sameAs` and author bindings. No fake DJI/drone relevance.

## Localization / translations — preserved but inactive

Recovery:
- GitHub branch `freeze/localization-2026-08-19`;
- Library `/Сайт/archive/MAVIK_LOCALIZATION_FREEZE_2026-08-19.zip`;
- workspace `mavik-sklad/translations/en/`;
- authority `mavik-sklad/files/LOCALIZATION-FREEZE-2026-08-20.md`.

Do not resume localization without explicit author command. Do not retranslate already completed EN works from scratch.

## Other active canons

- Human writing/editing: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- Shared creative notebook: `mavik-sklad/files/00-ROBOCHYI-ZAPYSNYK-SPILNOHO-PYSMENNYA.md`
- Technical fiction control: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoints: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`
- Simple-first: `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- Privacy/media: `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- Public blog: `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`

## Conflict rule

The latest explicit user instruction has highest priority. R222 becomes canonical only after direct author approval following live-site verification.
