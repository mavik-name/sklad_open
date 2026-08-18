# MAVIK — CANON REGISTRY

Updated: 2026-08-18
Status: **AUTHORITATIVE INDEX**

## Universal

- Human-writing canon: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- Shared creative working notebook: `mavik-sklad/files/00-ROBOCHYI-ZAPYSNYK-SPILNOHO-PYSMENNYA.md`
- Technical fiction canon: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoint/storage rules: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`

## Site MAVIK.NAME

- Start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Simple-first working canon: `mavik-sklad/files/SIMPLE-FIRST-WORKING-CANON.md`
- Protected SEO files canon: `mavik-sklad/files/PROTECTED-SEO-FILES.md`
- Current canonical checkpoint: `mavik-sklad/files/R210G-CANON-CHECKPOINT.md`
- Current structural/functional CORE base: **R210G**
- Current next-release work: `mavik-sklad/files/R211-WIP-CHECKPOINT.md` — **WIP, NOT CANON**

R1–R210F are obsolete as active structural/functional site bases. R210G is the only current canonical CORE base. R211 may replace it only after completion, live verification and a new explicit author approval.

### SIMPLE FIRST — HARD WORKING CANON

For every new site task, first propose and implement the **simplest effective solution that fully solves the requested need**.

Do not add extra dropdowns, previews, modes, duplicated controls, new subsystems or workflows unless the simpler solution cannot meet a concrete requirement or creates a real technical risk.

If two options are equally effective, choose the one that is easier to understand, test, maintain and roll back.

Mandatory control question before implementation: **Can this be done more simply without losing functionality or reliability?** If yes, use the simpler solution.

### HARD CODE/CORE FREEZE AFTER R210G

Routine content work is **PATCH/OVERLAY ONLY, WITH NO CORE CODE CHANGES**.

Allowed content patches: books, translations, EPUBs, covers, images, music/media, blog/static content, content data/metadata, and generated public/SEO artifacts produced by existing R210G mechanisms.

Forbidden without a new explicit user decision: PHP/JS/CSS changes; Boss/deployer/template changes; PWA/service-worker/manifest logic; navigation/SEO engine; maintenance architecture; locale routing; refactoring or other CORE modifications.

### PROTECTED SEO IDENTITY

`651fd21ecd39f1571c9d4ab6a9a7574c.txt` in the site root is the active IndexNow/Bing verification key file. It is **not garbage** and must not be deleted by cleanup or ordinary content/overlay patches. See `PROTECTED-SEO-FILES.md`.

### BLOG CONTENT PATCH — HARD CANON

**Publishing a normal new blog post is not a CORE change.**

Canonical mechanism:
1. Prepare the blog entry and any content media.
2. Package them as a **content-only ZIP patch compatible with the Boss patch mechanism**.
3. Apply the ZIP through **Boss**.
4. Change only blog content/state and the generated public/SEO artifacts produced by the existing engine.
5. Do not modify CORE code.

For routine blog publication, do **not** use FTP/file manager, manual root uploads, standalone PHP installers, `PATCH-*.php`, `?apply=1`, or a new CORE release.

A blog content patch should be idempotent where practical: reapplying it must not create duplicate posts or overwrite newer live content. Blog illustrations/media belong in the same content patch.

Manual FTP/PHP installation is an emergency recovery path only when the author explicitly chooses it.

### R210G protected behavior

- mobile-only MaVik install flow;
- desktop has no MaVik install UI;
- desktop has no audio-reader UI and no `▶ Слухати` CTA;
- mobile `Читати` is text-only;
- mobile `Слухати` uses explicit `?listen=1`;
- central audio control `▶ Слухати ↔ ⏸ Пауза`;
- Boss book editor inline;
- server-backed book order;
- editable announcement reason;
- mobile menu without numbering;
- rollback-safe book creation;
- `Завершена · створити EPUB` / `Бета · без EPUB`;
- EPUB temp in `/_site-state/tmp/`;
- persistent custom genre registry;
- safe Boss overlay patches;
- direct URL priority over stored language preference;
- logically grouped Boss tiles;
- compact page-builder index;
- Boss IMAP/SMTP mail with PHP-IMAP or built-in TLS fallback;
- server-only mail credentials;
- no hard-coded `Скульптор` fallback for empty focus;
- one global maintenance mode;
- persistent `/_site-state/` protected from ordinary deploy/patch;
- root IndexNow verification file `651fd21ecd39f1571c9d4ab6a9a7574c.txt` protected from accidental cleanup/deletion;
- R210G public geometry and menu behavior.

### MAINTENANCE HARD RULE

R210G has **one global maintenance mode only**.
Do not restore separate UA/EN maintenance, `.maintenance-uk-on`, `.maintenance-en-on`, or locale-specific 503 logic without a new explicit author decision.

Narrow active canons:
- mobile reader header: `mavik-sklad/files/kanon-shapky-mobilnoi-chytanky.txt`
- book page: `mavik-sklad/files/kanon-storinky-knyhy.txt`

## English content MAVIK.NAME

- Start: `mavik-sklad/files/EN-TRANSLATION-START-HERE.md`
- Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`
- Source policy: `mavik-sklad/files/EN-SOURCE-POLICY.md`
- Continuation canon: `mavik-sklad/translations/en/CONTINUATION-CANON.md`
- Current status: `mavik-sklad/translations/en/STATUS.md`
- Physical workspace: `mavik-sklad/translations/en/`

The ONLY authoritative source for new English book translation text is the canonical Ukrainian text actually published on mavik.name. If the canonical site text cannot be retrieved, translation stops.

`Соціальна` remains blocked from English translation until a new explicit author permission.

## Social / Соціальна

- Project start/history: `mavik-sklad/files/00-SOCIALNA-START-HERE.txt`
- Canon notes: `mavik-sklad/files/socialna-kanonichni-zamitky.txt`
- Historical review plan: `mavik-sklad/files/SOCIALNA-PLAN-AFTER-REVIEWS-2026-08-16.md`
- Persistent manuscript: `mavik-sklad/files/Соціальна.docx`
- English stop canon: `mavik-sklad/files/SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md`

`Соціальна. Книга перша` is completed / author-closed.

## Other active creative projects

- Всесвіт 25: `mavik-sklad/files/START-HERE-VSESVIT-25.md`
- Код легенди: `mavik-sklad/files/START-HERE-KOD-LEHENDY.md`
- Евакуація: `mavik-sklad/files/START-HERE-EVAKUATSIIA.md`
- Generation-ship concept: `mavik-sklad/files/START-HERE-GENERATION-SHIP.md`

## Conflict rule

1. Latest explicit user-approved canon wins.
2. For site work, the `SIMPLE-FIRST-WORKING-CANON.md` principle applies before selecting implementation complexity.
3. `PROTECTED-SEO-FILES.md` protects active SEO verification identity files from accidental cleanup.
4. For the site, **R210G is the authoritative CORE base** until a newer release is explicitly approved.
5. R211 is WIP only until explicit approval.
6. Routine content work is patch/overlay only and may not silently modify CORE.
7. Routine blog publication specifically uses **content-only ZIP through Boss**.
8. Any future CODE/CORE change requires a new explicit user decision.
9. R210G maintenance is global-only.
10. For English book translation source, `translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md` is highest authority.
11. Historical release/checkpoint documents never override a newer approved canon.
