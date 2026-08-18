# ENGLISH TRANSLATION — RECOVERY INTEGRITY AUDIT

Date: 2026-08-18
Status: **PHYSICAL RECOVERY INTEGRITY CHECK / NOT SITE-PARITY CERTIFICATION**
Safety branch: `backup/english-translations-2026-08-17`
Hard source canon: `mavik-sklad/translations/en/SITE-PUBLISHED-SOURCE-HARD-CANON.md`

## Scope
This audit verifies that protected English recovery assets are physically mirrored between `main` and the safety branch. Matching Git SHA/tree SHA proves byte/tree identity between the two repository branches. It does NOT prove translation parity with the canonical Ukrainian publication on mavik.name.

## Nine recovered complete book trees — MATCH
The following directory tree SHAs are identical on `main` and the safety branch:

- `bezimenni` — `4460f0ef7ca9e8040bf28c0c108ac01d75bd992a`
- `liudyna-bez-akaunta` — `4d32678995ae6b72a723f3208f6450d11eb2a026`
- `mamo-zhyty` — `36c8b8612940a9613a11c112c3d39a72d39642fa`
- `paterny-samorefleksii` — `b2e020176dfdb1abb4d3fe89e48d8442ee911f24`
- `pishchynka-solya` — `ff5fb6be813563cfa359c78311e833a6f552d36d`
- `transfer` — `0603631f2c949888a4d7dccd86a361c369f9cbb4`
- `ty-i-ia` — `39d72d3b515fe5f9af4c84f5a0c54d2890c3caf1`
- `vidmova-avansom` — `5c29c777037897e06ceb5658e9aaa4ba30cfc387`
- `yevanheliie-vid-makariia` — `d02185641bfaa71d60f40cecfbc3af91b1d3fb72`

Result: **9/9 recovered complete book trees physically identical across both branches.**

## Evacuation — MATCH
All eight recovered/completed English story files have identical blob SHAs on `main` and safety:

1. `story-01-pixel.txt` — `a4d1d4e659ce5990511a87cdc26f9a518256e4cd`
2. `story-02-beard.txt` — `05f011ec305c7e5f6c8df794f9b4bba4faf8aa48`
3. `story-03-doc.txt` — `85decdeb8479ba87ad246f15b127c4cc9d95b18a`
4. `story-04-shorty.txt` — `9761ab9cd0467cbff66d008ef498cff339927d01`
5. `story-05-cashier.txt` — `52c792d4c86367ff98e6da4b879e5dac12ac0898`
6. `story-06-mongol.txt` — `3d358d34c9582338ce2380ce1c3b1fb3057b46bc`
7. `story-07-philosopher.txt` — `ca6c019daa383861a24c2bc602fd3328f620d181`
8. `story-08-ghost.txt` — `aaf3b8e05f352ab9cbf8da2f38be6cdcc8752b79`

Result: **8/8 English Evacuation story files physically identical across both branches.**

## Three Novels Nobody Reads partial — MATCH
Directory:
`partial/try-romany-yaki-nikhto-ne-chytaie-sections-1-8/`

Tree SHA on both branches:
`08966db4996b7685da2a9582b5d27548fc58af70`

Result: **partial Sections 1–8 tree physically identical across both branches.**

## Recovery source pointer — SYNCHRONIZED
`books/RECOVERY-SOURCE.txt` was previously divergent and stale. On 2026-08-18 it was replaced on both branches with the same R210G/site-only source policy version.

Current content blob SHA on both branches:
`b3e13d270fbbf11b25642d42861ceb57be143c62`

## The Sculptor
Handled separately under:
- `work/skulptor/STATUS.md`
- `work/skulptor/verified/STATUS.md`
- `work/skulptor/CHAPTER-04-RECOVERY-STRUCTURAL-AUDIT.md`
- `work/skulptor/CHAPTER-05-RECOVERY-STRUCTURAL-AUDIT.md`

Verified canonical point remains end of Chapter 3. Recovery preparation for Chapters 4–5 does not advance site parity.

## Hard interpretation rule
This audit is about **storage integrity only**.

Do not infer publication readiness from matching SHAs. Before any recovered English book is treated as canonical for publication, compare it against the Ukrainian text actually published on mavik.name according to the hard source canon.

If the live/site-generated Ukrainian source cannot be physically retrieved, parity work stops rather than falling back to a manuscript.
