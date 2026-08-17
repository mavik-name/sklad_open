# MAVIK — CANON REGISTRY

Updated: 2026-08-17
Status: **AUTHORITATIVE INDEX**

## Universal

- Human-writing canon: `mavik-sklad/files/golovnyi-kanon-dlya-napysannya-na-redaguvannya-tekstiv-ta-rozmov--b6bbd0fff372f719b852d222.txt`
- **Shared creative working notebook / lessons from completed «Соціальна»: `mavik-sklad/files/00-ROBOCHYI-ZAPYSNYK-SPILNOHO-PYSMENNYA.md`**
- Technical fiction canon: `mavik-sklad/files/technic-files--8f66396249b19de717d81870.txt`
- Persistent checkpoint/storage rules: `mavik-sklad/files/KANON-POSTIINYKH-CHECKPOINTIV.txt`

For new joint fiction projects, read the human-writing canon and the shared creative working notebook before drafting. The notebook transfers writing discipline and diagnostic principles, not the voice/style/plot devices of any specific book.

## Site MAVIK.NAME

- Start: `mavik-sklad/files/START-HERE-SITE.txt`
- Release authority: `mavik-sklad/releases/CANON.md`
- Current canonical checkpoint: `mavik-sklad/files/R204-CANON-CHECKPOINT.md`
- Current structural/functional CORE base: **R204**

R1–R203 are trash/obsolete as structural/functional site bases and must not be used as working context.

### HARD CODE FREEZE AFTER R204

Routine site work is **PATCH/OVERLAY ONLY, WITH NO CODE CHANGES**.

Allowed content patches: books, translations, EPUBs, covers, images, music/media, blog/static content, content data/metadata, and generated public/SEO artifacts produced without changing CORE mechanisms.

Forbidden without a new explicit user decision: any PHP/JS/CSS change; Boss/template changes; PWA/service-worker/manifest logic changes; navigation/SEO engine changes; refactoring, optimization or any other CORE modification.

Never create a new CORE release on your own. A content patch must never modify code silently.

Main synchronization canon remains active: every content-state mutation must stay synchronized with public navigation/internal links and, where applicable, sitemap, robots/noindex, canonical, hreflang, structured data, IndexNow and internal SEO audit using the existing R204 mechanisms.

R204 protected behavior:
- mobile-only MaVik install flow;
- desktop has no MaVik install UI;
- desktop has no audio-reader UI and no `▶ Слухати` CTA;
- mobile `Читати` is text-only and does not initialize the audio module;
- mobile `Слухати` uses explicit `?listen=1`; only then the audio reader starts;
- central audio control is `▶ Слухати ↔ ⏸ Пауза`;
- tap-to-start and Screen Wake Lock remain active in listen mode;
- QR donation code expands only inside the donation block, without separate frame/modal/fullscreen;
- literal iframe/frame/frameset markup absent;
- Boss book editor is inline, not a fixed frame/drawer;
- book order is saved server-side and reflected in live manifest/public rebuild;
- announcement reason is editable per book;
- mobile menu has no numbering.

Cleanup rule: all site release ZIPs before R204 are removed from `/Сайт`; only the two R204 parts remain. Historical Git commits may exist but are not active state.

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

- Project start/history: `mavik-sklad/files/00-SOCIALNA-START-HERE.txt`
- Canon notes: `mavik-sklad/files/socialna-kanonichni-zamitky.txt`
- Historical review plan: `mavik-sklad/files/SOCIALNA-PLAN-AFTER-REVIEWS-2026-08-16.md`
- Persistent manuscript: `mavik-sklad/files/Соціальна.docx`
- **English stop canon: `mavik-sklad/files/SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md`**

**«Соціальна. Книга перша» is COMPLETED / AUTHOR-CLOSED as of 2026-08-17.**
Do not resume structural or stylistic editing unless the author explicitly reopens the book or gives a concrete correction. Historical active checkpoints do not override this completed status.

The completed book is one of the foundations for the universal shared creative working notebook, but its specific voice, motifs, NGO subject matter, character architecture and plot devices must not be mechanically copied into other books.

English translation remains blocked by `SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md` until the author explicitly permits it.

## Other active creative projects

- Всесвіт 25: `mavik-sklad/files/START-HERE-VSESVIT-25.md`
- Код легенди: `mavik-sklad/files/START-HERE-KOD-LEHENDY.md`
- Евакуація: `mavik-sklad/files/START-HERE-EVAKUATSIIA.md`
- Generation-ship concept: `mavik-sklad/files/START-HERE-GENERATION-SHIP.md`

## Conflict rule

1. Latest explicit user-approved canon wins.
2. For the site, **R204 is the authoritative frozen CORE base**.
3. After R204, routine site work is patch/overlay only and may not modify code.
4. Any future CODE/CORE change requires a new explicit user decision that overrides the R204 freeze.
5. For English book translation source, `translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md` is the highest source authority.
6. For English translation continuity, `translations/en/CONTINUATION-CANON.md` is authoritative subject to the hard source canon.
7. For `Соціальна`, `SOCIALNA-NO-ENGLISH-TRANSLATION-CANON.md` blocks English translation until a new author decision.
8. For completed «Соціальна. Книга перша», the author-closed status of 2026-08-17 overrides older active/unfinished checkpoints.
9. Historical release/checkpoint documents never override a newer approved canon.
