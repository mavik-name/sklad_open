# ENGLISH TRANSLATION — HARD SOURCE CANON

Updated: 2026-08-19
Status: **HARD CANON / OVERRIDES ALL OLDER SOURCE RULES**
Current canonical site core: **R215**

## USER RULE
For English translation of books on mavik.name, the ONLY authoritative Ukrainian prose is the canonical text actually published by mavik.name.

### ALLOWED CANONICAL TRANSPORTS
The same canonical published text may be consumed through any of these physically retrieved representations when provenance is demonstrable:
1. public reader `/books/<slug>/read/`;
2. site-generated clean-text reader `/books/<slug>/read/text/`;
3. public EPUB `/downloads/<slug>.epub` for a `final` library book, when that EPUB is generated from the canonical reader;
4. the EPUB contained in the current canonical R215 binary, provided its book/slug and canonical release provenance are verified.

R215 implementation proof: `_site-admin/live-sync.php` function `mavik_live_reader_payload()` reads `/books/<slug>/read/index.html` and extracts the reader article; `mavik_live_create_epub()` packages that reader body into the EPUB. Therefore an R215 canonical EPUB is an authorized transport copy of the published reader, not a manuscript source.

## FORBIDDEN SOURCES
No translation sentence may be created from:
- chat/model memory;
- File Library DOCX/DOC/TXT manuscript;
- warehouse manuscript;
- obsolete site release or arbitrary release ZIP as prose authority;
- old English translation as source of new Ukrainian meaning;
- synopsis, status, checkpoint or summary;
- guessed continuation;
- reconstructed or paraphrased missing source;
- assistant-written bridge, connective phrase, clarification or addition.

## ZERO-ADDITION RULE
- No invented text.
- No added explanations, descriptions, dialogue or connective passages.
- No filling gaps from context.
- No improving or expanding the original.
- Translate only physically retrieved canonical Ukrainian text from an allowed transport above.
- Preserve chapter/section boundaries, voice, register, rhythm, profanity level and deliberate roughness.

The task is translation only, not co-writing.

## SOURCE PRECEDENCE
If allowed transports disagree, the current canonical R215 public reader is the highest authority and the discrepancy must be investigated before publication. A current R215 EPUB may be used when live fetch is unavailable because its provenance is tied to the reader-generation pipeline.

## EXISTING ENGLISH FILES
Existing English translation files are recovery artifacts until checked against an allowed canonical Ukrainian transport. Once a file/block has been checked and saved in the designated verified layer, that verified copy is canonical English for the exact recorded source range.

### THE SCULPTOR
Verified layer: `mavik-sklad/translations/en/work/skulptor/verified/`

Already verified:
- Chapter 1 `Бруд на дитячих руках` — reader lines 26–1231;
- Chapter 2 `Глина` — reader lines 1232–2040;
- Chapter 3 `Збори фонду` — reader lines 2041–2878.

R215 EPUB source has now been physically inspected. It contains:
- `Глава 4. Пам’ятка`;
- first narrative sentence `Пам’ятка мала вміститися на одну сторінку.`

Therefore the previous live-fetch transport blocker no longer blocks verified translation. Chapter 4 parity may continue from the canonical R215 EPUB.

## REQUIRED WORKFLOW
For every valid block:
1. physically retrieve the exact next contiguous Ukrainian passage from an allowed canonical transport;
2. record transport, slug, chapter/source marker and, for EPUB use, the EPUB file identity/hash when practical;
3. translate or retain only wording justified by that source;
4. save physically in the verified/current layer;
5. read it back;
6. record source marker/position;
7. mirror to safety storage;
8. update status/canon.

## SOCIAL / СОЦІАЛЬНА
The separate project-specific English STOP remains in force until the author explicitly permits English translation.

## PRIORITY
This file overrides older instructions that required live web-fetch specifically. The hard requirement is canonical published Ukrainian text with demonstrable provenance; canonical R215 EPUB is an approved transport of that text.