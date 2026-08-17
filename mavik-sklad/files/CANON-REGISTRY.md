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
- Current canonical checkpoint: `mavik-sklad/files/R198-CANON-CHECKPOINT.md`
- Current structural/functional CORE base: **R198**

R1–R197 are obsolete as structural/functional site bases.

### HARD CORE FREEZE AFTER R198

Routine site filling is **PATCH/OVERLAY ONLY, with no CORE intervention**.

Content patches may add/update content, books, translations, EPUBs, covers, images, music, blog/static content, content data and required generated public/SEO artifacts. They must not rewrite R198 PHP/JS/CSS core logic, Boss functionality, templates, PWA/service-worker logic or architecture.

If a genuine CORE change is needed, it is a separate full candidate release based on R198 and requires separate explicit user approval. Never smuggle a CORE change into a content patch.

Main site synchronization canon remains active: every content-state mutation must stay synchronized with public navigation/internal links and, where applicable, sitemap, robots/noindex, canonical, hreflang, structured data, IndexNow and the internal SEO auditor.

R198 protected UI/behavior includes:
- installable PWA;
- mobile menu without numbering;
- one central listen control `▶ Читати ↔ ⏸ Пауза`;
- tap-to-start reading from the selected text position;
- Screen Wake Lock throughout listen mode, including pause.

Narrow active canons that are not release snapshots may remain in force when relevant:
- mobile reader header: `mavik-sklad/files/kanon-shapky-mobilnoi-chytanky.txt`
- book page: `mavik-sklad/files/kanon-storinky-knyhy.txt`

## English content MAVIK.NAME

- Start: `mavik-sklad/files/EN-TRANSLATION-START-HERE.md`
- **Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`**
- Source policy: `mavik-sklad/files/EN-SOURCE-POLICY.md`
- Authoritative continuation canon: `mavik-sklad/translations/en/CONTINUATION-CANON.md`
- Current exact status: `mavik-sklad/translations/en/STATUS.md`
- Physical workspace: `mavik-sklad/translations/en/`
- Dedicated safety branch: `backup/english-translations-2026-08-17`

### HARD TRANSLATION SOURCE RULE
The ONLY authoritative source for new English book translation text is the canonical Ukrainian text actually published on mavik.name.

No English sentence may be created from chat/model memory, File Library manuscripts, warehouse manuscripts, old site copies, summaries/checkpoints, old English text or guessed continuation. No additions, bridges, clarifications or invented prose.

If the canonical site text cannot be retrieved, translation stops.

### Existing English recovery content
Recovered/saved English files remain protected content, but they are not automatically publication-canonical until checked against the current Ukrainian site publication.

`The Sculptor` remains QUARANTINED / UNVERIFIED AGAINST SITE / NOT FOR PUBLICATION until site-source parity is established.

English translation content survives historical release prefixes only as a general rule; an explicit author deletion/exclusion overrides recovery preservation.

## Social / Соціальна

- Project start: `mavik-sklad/files/00-SOCIALNA-START-HERE.txt`
- Canon notes: `mavik-sklad/files/socialna-kanonichni-zamitky.txt`
- Review plan: `mavik-sklad/files/SOCIALNA-PLAN-AFTER-REVIEWS-2026-08-16.md`
- Persistent manuscript: `mavik-sklad/files/Соціальна.docx`
- **English stop canon: `mavik-sklad/files/SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md`**

`Соціальна` is unfinished and actively edited. Do not translate it into English until the author explicitly permits it.

## Other active creative projects

- Всесвіт 25: `mavik-sklad/files/START-HERE-VSESVIT-25.md`
- Код легенди: `mavik-sklad/files/START-HERE-KOD-LEHENDY.md`
- Евакуація: `mavik-sklad/files/START-HERE-EVAKUATSIIA.md`
- Generation-ship concept: `mavik-sklad/files/START-HERE-GENERATION-SHIP.md`

## Conflict rule

1. Latest explicit user-approved canon wins.
2. For the site, **R198 is the authoritative frozen CORE base**.
3. Routine site content updates are patch/overlay only and may not modify CORE.
4. For English book translation source, `translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md` is the highest source authority.
5. For English translation continuity, `translations/en/CONTINUATION-CANON.md` is authoritative subject to the hard source canon.
6. For `Соціальна`, `SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md` blocks English translation until a new author decision.
7. Historical release/checkpoint documents never override a newer approved canon.
