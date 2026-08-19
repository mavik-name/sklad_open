# MAVIK — CANON REGISTRY

Updated: 2026-08-19
Status: **AUTHORITATIVE INDEX**

## Site MAVIK.NAME

- Master start: `mavik-sklad/START-HERE.txt`
- Site start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Current canonical checkpoint: `mavik-sklad/files/R215-CANON.md`
- Tested next-release candidate: `mavik-sklad/files/R216-CANDIDATE.md`
- Cross-branch work journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`
- Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
- Localization architecture canon: `mavik-sklad/files/SITE-LOCALIZATION-ARCHITECTURE-CANON.md`
- Locale storage canon: `mavik-sklad/files/SITE-LOCALE-STORAGE-CANON.md`
- Deploy backup canon: `mavik-sklad/files/SITE-DEPLOY-BACKUP-CANON.md`
- SEO identity/query canon: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`
- Sole approved structural/functional CORE base: **R215** until R216 is explicitly approved by the author.

### Hard rules

1. Будь-яка site structural/functional робота стартує тільки від **R215** до прямого затвердження R216; `R216-CANDIDATE.md` є перевіреним кандидатом, але ще не release authority.
2. Усе до R215 — obsolete release trash; не використовувати як робочу, recovery або comparison base без прямої історичної вимоги автора.
3. `publication_mode` — джерело істини для статусу української книги в R215; R216 переводить locale-aware publication state у physically separate locale databases.
4. `final ↔ beta` синхронізує EPUB, `/books/free/`, reader robots, sitemap, canonical/metadata, structured data та status-dependent SEO copy.
5. Основний `/read/` final-книги індексується; `/read/text/` — `noindex,follow`, canonical на main reader.
6. EPUB regeneration: ZipArchive + PharData fallback.
7. `/_site-state/` — protected live state; routine patch/deploy не повинен скидати live focus, порядок, статуси або media bindings.
8. Routine content work — PATCH/OVERLAY без прихованої зміни CORE.
9. Root `651fd21ecd39f1571c9d4ab6a9a7574c.txt` — protected IndexNow/Bing identity file.
10. Перед structural/functional release обов'язково читати `SITE-TECHNICAL-ROADMAP.md`.
11. **Blog locale scope:** Boss має явний multi-select локалей публікації. Дефолт може бути UA+EN, але автор визначає фактичний scope. Повний канон: `PUBLIC-BLOG-EDITORIAL-CANON.md` + `SITE-LOCALIZATION-ARCHITECTURE-CANON.md`.
12. **Localization architecture:** локалі є функціональними дзеркалами на одному CORE; системні тексти — через lang/locale layer; авторський контент — locale content state/patches без зміни CORE.
13. **Locale storage:** фізичні контентні файли спільні; окремими є папки тільки для locale databases/registries/bindings. Патч змінює лише явно задекларовані locale targets. Штатне прибирання матеріалу в Boss — тільки `Прибрати з локалі`, без фізичного видалення shared file.
14. **R216 migration:** 10 уже встановлених EN book editions мають бути перенесені в нову EN locale database/bindings; старий `_published`/legacy marker state видаляється лише після успішної міграції й не лишається паралельним source of truth.
15. **SEO/entity hard canon від R216 і назавжди далі:** `MaVik / Mavik / Мавік ↔ Віктор Макарчук / Viktor Makarchuk ↔ mavik.name`; exact/ambiguous query `mavik` є окремою довгостроковою SEO-ціллю. Не ранжувати сайт штучно за загальними drone/DJI product queries. Повний спадковий канон: `SITE-SEO-IDENTITY-CANON.md`.
16. **Deploy backup від R216:** persistent backup = mutable database/JSON state only; affected CORE/shared files = short-lived transaction snapshot. Повний канон: `SITE-DEPLOY-BACKUP-CANON.md`.
17. Усі наступні збірки повинні успадковувати SEO/entity contract R216 автоматично, доки автор прямо його не змінить.

## R216 tested final candidate — 2026-08-19

Candidate checkpoint: `mavik-sklad/files/R216-CANDIDATE.md`.
Persistent binaries: ChatGPT Library `/Сайт/`.

- Managed files: 895.
- Manifest SHA-256: `ccbfcef34fa96b48261643de6c1635edf7c1f16f482bebd03763e322775214c5`.
- Multipart set: `r216-ccbfcef34fa96b48`.
- FULL: `a309b5eff63d92d6b9b910a802a4450dd5de1075ec4858c3cb92b39182449760`.
- PART1: `dcf769b5e4f4bf6e586e2a548376dce6d15d523487659c665b29049264c8e602`.
- PART2: `80a534ceadf3a8233532ca42fc15fcc7de1c58891722b7f4930baaed24e9cc62`.

Release gate passed: PHP 37/37; JS 18/18; XML 2/2; JSON-LD 107/107; shared reader-core 42/42; real FULL deployment over R215+10 EN patches PASS; locale migration UK 22 / EN 10 PASS; DB-only backup + transaction rollback PASS; media pipeline PASS.

**R216 is not canonical until explicit author approval. R215 remains release authority until then.**

## R215 canonical baseline

- Public book objects: 22 = 21 final library + 1 announcement.
- Ukrainian EPUB: 21/21.
- Main indexable Ukrainian readers: 21.
- Sitemap baseline: 86 unique canonical page URLs + 11 image entries.
- PHP: 35/35; JS: 17/17; XML: 2/2.
- Crawler verification: 86 URLs × Browser/Googlebot/Bingbot/OAI-SearchBot/ChatGPT-User = 430/430 HTTP 200 in verified Apache configuration.

## English publication state before R216 migration

Publication checkpoint: `mavik-sklad/translations/en/PUBLICATION-READY-R215.md`.
Persistent binaries: ChatGPT Library `/Сайт/book_patches/`.

10 complete English editions exist and were delivered as R215 native Boss book patches: Mom, I Want to Live!; The Nameless; The Man Without an Account; Rejection in Advance; Transfer; Solya...; Patterns of Self-Reflection; You and I...; The Gospel According to Macarius; Evacuation.

R216 candidate absorbs these editions into the new EN locale database/binding model and removes old publication marker state only after successful migration.

Active incomplete English target: The Sculptor.
Social / Соціальна: English STOP remains active until explicit author reversal.

## Mandatory technical roadmap

R216 candidate implements the currently mandatory shared-reader, localized-home/public projection and automatic cover media-pipeline work. Future unfinished roadmap items continue forward until implemented or explicitly cancelled.

## Other active canons

- Human-writing canon: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- Shared creative notebook: `mavik-sklad/files/00-ROBOCHYI-ZAPYSNYK-SPILNOHO-PYSMENNYA.md`
- Technical fiction canon: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoint rules: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`
- Simple-first canon: `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- Privacy-media canon: `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- Public-blog editorial canon: `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`
- Protected SEO canon: `mavik-sklad/files/PROTECTED-SEO-FILES.md`
- SEO identity/query canon: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`
- Locale storage canon: `mavik-sklad/files/SITE-LOCALE-STORAGE-CANON.md`
- Deploy backup canon: `mavik-sklad/files/SITE-DEPLOY-BACKUP-CANON.md`

## Conflict rule

Останній прямо затверджений користувачем канон має найвищий пріоритет. Для site CORE авторитетний тільки **R215** до прямого затвердження R216 або іншого наступного CORE-релізу.
