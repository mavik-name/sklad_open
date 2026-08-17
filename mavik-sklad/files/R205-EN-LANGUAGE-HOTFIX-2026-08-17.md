# R205 — English language routing hotfix

Date: 2026-08-17
Base: R205
Status: hotfix / include in next CORE revision

## Problem 1 — English maintenance page
When `/en/` was closed for maintenance, Apache `ErrorDocument 503` could lose the original English route and render the Ukrainian maintenance page.

## Problem 2 — language lock
`assets/app/mavik-language.js` stored `mavik-language-preference=en` after opening `/en/`. On a later visit to the unprefixed Ukrainian site (`/`, `/books/...`, etc.), the script could automatically redirect the visitor back to `/en/`. In the same browser this could make the Ukrainian locale effectively unreachable.

## Canonical fix
The URL is authoritative.

- Opening an unprefixed Ukrainian URL stays Ukrainian.
- Opening `/en/` or another English-prefixed URL stays English.
- The currently viewed locale may be remembered, but a saved preference or browser language must not force a cross-locale redirect.
- `/en` and `/en/` maintenance routes preserve `lang=en` through the 503 internal redirect.
- Owner maintenance bypass remains unchanged.

## Patch artifacts
- `EN_PATCH_001_MAINTENANCE_LANGUAGE.zip` — maintenance-language fix.
- `EN_PATCH_002_LANGUAGE_LOCK_FIX.zip` — language-lock fix.
- `EN_PATCH_003_COMBINED_HOTFIX.zip` — preferred combined hotfix containing both fixes.

## Files touched by combined hotfix
- `.htaccess`
- `maintenance/index.php`
- `assets/app/mavik-language.js`
- `index.html`
- `en/index.html`
- `_site-admin/core.php`
- `_site-admin/boss-templates/blog-article.tpl.html`
- `_site-admin/boss-templates/book-reader.tpl.html`
- `_site-admin/boss-templates/book-landing.tpl.html`

## Integration rule
Include this behavior in the next CORE revision. Do not restore automatic locale redirection from `localStorage` or browser language without an explicit user decision.
