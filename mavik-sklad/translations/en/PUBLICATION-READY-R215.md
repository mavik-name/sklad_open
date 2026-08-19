# ENGLISH PUBLICATION READY — R215 BOOK PATCHES

Updated: 2026-08-19
Status: **10 COMPLETE ENGLISH EDITIONS VALIDATED AND PACKAGED FOR PUBLICATION**
Base site core: **R215**
Library storage: `/Сайт/book_patches/`

## Canonical source and parity

Current R215-generated Ukrainian EPUB is an approved canonical transport because R215 EPUB generation takes the text directly from the same published reader `<article class="reader" id="reader">` body. The ten complete recovered English editions below were checked against their corresponding canonical R215 Ukrainian EPUBs for complete start/end, structural order, section/story boundaries, stable volume ratios and available numeric anchors.

The book patches do not publish the old JS-fetch recovery readers. Each patch builds a crawler-readable static English reader with the complete prose already present in HTML, plus an indexable landing, `noindex,follow` clean-text mirror and a separate English EPUB.

## Publication-ready book patches

1. `R215_book_patch_EN_mamo-zhyty.zip`
   - Mom, I Want to Live!
   - SHA-256 `11c77b5884f3e4b936237dc5a8c5018dd4a0f29598e05632b7b397e43f6e28a7`
2. `R215_book_patch_EN_bezimenni.zip`
   - The Nameless
   - SHA-256 `2b5e4a8f836b873a924d99baa4b1a2c72f747d442af0ec1c3b064d5c00cd8e02`
3. `R215_book_patch_EN_liudyna-bez-akaunta.zip`
   - The Man Without an Account
   - SHA-256 `41748ad76cb5b4290e2c2d8071ddd80f34543bef1d6e94048ba0a6ccfdd4349b`
4. `R215_book_patch_EN_vidmova-avansom.zip`
   - Rejection in Advance
   - SHA-256 `07786d8375196881518f3c22a44f839d8d6c6018b087400cf3892333cb30b59b`
5. `R215_book_patch_EN_transfer.zip`
   - Transfer
   - SHA-256 `e901883d27b4c15bd752254c0120184ab46c3475ed484d58c2ed6d9b279636cc`
6. `R215_book_patch_EN_pishchynka-solya.zip`
   - Solya, the Grain of Sand Who Dreamed of a Skyscraper
   - SHA-256 `6b74726c2d0b0a934e701484a2d34ae1522d1f5d27823b513368bc2f7451cb16`
7. `R215_book_patch_EN_paterny-samorefleksii.zip`
   - Patterns of Self-Reflection
   - SHA-256 `8379a3addf5ca567f8f3b79983db51aa688306d2aaef1d7893fe5163b2174cf5`
8. `R215_book_patch_EN_ty-i-ia.zip`
   - You and I...
   - SHA-256 `d3f1af6c5ffedb157f09be98146cb6917e35d72070134b05b77d60c6a6b0ebf7`
9. `R215_book_patch_EN_yevanheliie-vid-makariia.zip`
   - The Gospel According to Macarius
   - SHA-256 `14c4a46193fd1cbc42a220268c7de552775ee04afe76515917c6c0fe29789523`
10. `R215_book_patch_EN_evakuatsiia-abo-dorohoiu-do-stabika.zip`
   - Evacuation, or On the Road to the Stabilization Point
   - SHA-256 `88f3df03196da323f00746199fbe631d7131b2cbe83420cd38698206186cad4a`

Convenience archive containing all ten individual installable patches:
`R215_book_patches_EN_READY_SET.zip`
SHA-256: `0e03f8a1d3bd2342f5361118b2114fffc163b0c859c20b96f7e28b988a12c146`

## Patch behaviour

Every book patch is a native Boss `mavik-overlay`, `base_release=215`.
Each patch:
- installs one complete English landing and static reader;
- installs a clean-text mirror with `noindex,follow` and canonical to main reader;
- creates `/downloads/en/<slug>.epub`;
- installs a protected cumulative publication marker under `/en/books/_published/`;
- seeds `/en/books/`, sitemap and reciprocal hreflang so the first installed patch is immediately complete;
- installs the same idempotent EN publication projection in `_site-admin/live-sync.php` so later patches automatically accumulate all markers regardless of install order.

## Validation

- Native R215 Boss patch validator: 10/10 PASS.
- ZIP CRC: 10/10 PASS.
- Sequential real deploy through R215 deployer: 10/10 PASS, no rollback.
- Single-patch cold R215 test: 89/89 unique sitemap page URLs, one EN catalog card, 3 EN book-related sitemap URLs.
- Ten-patch cumulative test: 10 markers, 10 English EPUB, 10 EN catalog cards.
- Cumulative sitemap: 107/107 unique canonical page URLs; 21 `/en/books/` URLs.
- All 21 EN sitemap URLs: HTTP 200 in Apache verification.
- Googlebot/Bingbot/OAI-SearchBot/ChatGPT-User: HTTP 200 on EN reader test.
- English EPUB: `application/epub+zip`, `X-Robots-Tag: noindex, nofollow`.
- Publication marker endpoint: 403.
- PHP lint after all patches: 35/35 OK.
- Landing/reader/text metadata, canonical, hreflang and JSON-LD audit: 0 issues.
- 10/10 generated English EPUB: valid ZIP mimetype-first/uncompressed and XML package/navigation/text parse.

Detailed local audit is preserved in Library as `R215-EN-PUBLICATION-PARITY-AUDIT.txt` and checksums as `R215-book-patches-CHECKSUMS.txt`.

## Not in the final-ready set

- The Sculptor: Chapters 1–3 verified; Chapter 4/5 recovery work exists, but a complete English book is not yet finished. Continue from canonical R215 EPUB.
- Three Novels Nobody Reads: only Sections 1–8 are preserved; incomplete.
- Social / Соціальна: explicit NO ENGLISH TRANSLATION / STOP remains active until direct author reversal.

## Continuation rule

Do not retranslate the ten publication-ready books from scratch. Their patch files are the current publication deliverables. Future work moves to the incomplete queue while preserving parity against current canonical R215 transport.