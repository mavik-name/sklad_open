# MAVIK — CANON REGISTRY

Updated: 2026-08-19
Status: **AUTHORITATIVE INDEX**

## Site MAVIK.NAME

- Master start: `mavik-sklad/START-HERE.txt`
- Site start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Canon checkpoint: `mavik-sklad/files/R215-CANON.md`
- Cross-branch work journal: `mavik-sklad/files/SITE-WORK-JOURNAL.md`
- Technical roadmap: `mavik-sklad/files/SITE-TECHNICAL-ROADMAP.md`
- Localization architecture canon: `mavik-sklad/files/SITE-LOCALIZATION-ARCHITECTURE-CANON.md`
- Locale storage canon: `mavik-sklad/files/SITE-LOCALE-STORAGE-CANON.md`
- SEO identity canon: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`
- Sole structural/functional CORE base: **R215** until R216 is explicitly approved.

### Hard rules

1. Будь-яка наступна site structural/functional робота стартує тільки від **R215** до прямого затвердження R216.
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
14. **R216 migration:** 10 уже встановлених EN book editions мають бути перенесені в нову EN locale database/bindings; старий `_published`/legacy marker state видаляється і не лишається паралельним source of truth.
15. **R216 SEO identity package:** `MaVik ↔ Мавік ↔ Віктор Макарчук` обов'язково зв'язуються у видимому тексті головної та сторінки автора, `<title>`, `WebSite`/`Person` JSON-LD з `alternateName`; після live deploy — reindex ключових змінених URL у Google Search Console + штатний IndexNow/Bing submission. Повний канон: `SITE-SEO-IDENTITY-CANON.md`.

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

R216 must absorb these editions into the new EN locale database/binding model and remove old publication marker state.

Active incomplete English target: The Sculptor.
Social / Соціальна: English STOP remains active until explicit author reversal.

## Mandatory technical roadmap

Automatic cover media pipeline remains required: master original, JPEG fallback for opaque PNG, WebP/AVIF where safe, responsive derivatives, `<picture>`, batch rebuild, Boss self-test.

## Other active canons

- Human-writing canon: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- Shared creative notebook: `mavik-sklad/files/00-ROBOCHYI-ZAPYSNYK-SPILNOHO-PYSMENNYA.md`
- Technical fiction canon: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoint rules: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`
- Simple-first canon: `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- Privacy-media canon: `mavik-sklad/files/PRIVACY-MEDIA-CANON.md`
- Public-blog editorial canon: `mavik-sklad/files/PUBLIC-BLOG-EDITORIAL-CANON.md`
- Protected SEO canon: `mavik-sklad/files/PROTECTED-SEO-FILES.md`
- SEO identity canon: `mavik-sklad/files/SITE-SEO-IDENTITY-CANON.md`
- Locale storage canon: `mavik-sklad/files/SITE-LOCALE-STORAGE-CANON.md`

## Conflict rule

Останній прямо затверджений користувачем канон має найвищий пріоритет. Для site CORE авторитетний тільки **R215** до прямого затвердження наступного CORE-релізу.
