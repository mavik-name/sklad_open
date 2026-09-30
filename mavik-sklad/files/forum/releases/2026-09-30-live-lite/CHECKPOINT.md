# Forum MaVik — LIVE LITE checkpoint 2026-09-30

Status: current working snapshot after migration to `https://mavik.name/forum/`.

## Base
User-provided LITE snapshot:
- file: `forum.mavik.name_LITE_2026-09-30_21-02-56.zip`
- SHA-256: `f2c2ad01c571a532ab4a39b9fa854bf913f9fa9ea7ea1354dd2ae8aaf3ce636c`
- already uses `/forum/` paths and canonical `https://mavik.name/forum/`
- live SQLite DB, OAuth secrets, sessions and user avatars are excluded.

## Result
Updated LITE artifact:
- file: `forum.mavik.name_LITE_2026-09-30_21-24-26_UPDATED.zip`
- SHA-256: `bd15979e80c81019744656985403e378996a4c21cec58a6a58980c75d5055f8e`
- version: `Forum_Mavik_One_2026-09-30_PASSWORD_RESET_KYIV_TIME_ADMIN_EDIT`

## Changes
1. Admin edit button next to every reply in a topic.
   - Link: `/forum/admin/publish.php?post=<id>`
   - Uses the existing owner rich editor.
   - After save returns to the same post anchor.
   - First topic post keeps the existing publication editor.

2. Password recovery by email.
   - Added `forgot-password.php` and `reset-password.php`.
   - One-time 64-hex token; only SHA-256 hash stored.
   - Token lifetime: 1 hour.
   - Repeat request throttle: 5 minutes.
   - Public response does not reveal whether an email exists.
   - Reset invalidates all unused tokens for that user.
   - Mail uses PHP `mail()` and sender `MaVik Forum <viktor@mavik.name>`.

3. Correct forum time.
   - SQLite `CURRENT_TIMESTAMP` is treated explicitly as UTC.
   - Display timezone: `Europe/Kyiv`.
   - DST is automatic: summer +03:00, winter +02:00.
   - JSON-LD DiscussionForumPosting dates use the same conversion.

4. DB upgrade.
   - Additive table `password_resets` + index.
   - `PRAGMA user_version=12`.
   - Existing user/topic/post data is not removed or rewritten.

5. SEO/privacy.
   - Password recovery pages are noindex.
   - robots.txt/robots.php and generated robots rules disallow both recovery endpoints.

## Validation
- PHP syntax check for every PHP file: PASS.
- Password reset table and token lifecycle SQL: PASS in isolated SQLite test.
- Time conversion: 2026-09-30 18:00 UTC -> 21:00 +03:00; 2026-12-30 18:00 UTC -> 20:00 +02:00.
- Result ZIP re-unpacked and re-linted: PASS.

## Important
The exact updated ZIP is the recovery artifact for this change set. Do not fall back to the old subdomain-oriented Forum_Mavik_One source when continuing work.

## LIVE verification 2026-09-30
- Password recovery email flow: VERIFIED WORKING by author on production.
- Admin edit button on every reply: VERIFIED WORKING by author on production.
- Europe/Kyiv displayed publication time: pending live confirmation.
