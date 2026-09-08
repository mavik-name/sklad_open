# Google / Telegram

Провайдери вимкнені, поки на сервері немає реальних параметрів середовища. Секретів у ZIP немає.

Потрібні PHP cURL, OpenSSL і GD/WebP. `FORUM_PUBLIC_URL=https://forum.mavik.name`.

Google: `FORUM_GOOGLE_CLIENT_ID`, `FORUM_GOOGLE_CLIENT_SECRET`. Зареєструйте redirect URI `https://forum.mavik.name/social.php?provider=google&callback=1`. Використовується authorization code + PKCE, одноразовий state, серверний token exchange та Google UserInfo. Ключ і токени не потрапляють у HTML чи БД форуму.

Telegram: `FORUM_TELEGRAM_BOT_USERNAME` (без @), `FORUM_TELEGRAM_BOT_TOKEN`. У BotFather встановіть домен forum.mavik.name. Widget callback перевіряє HMAC-SHA256 і вік auth_date до 5 хвилин, а також одноразовий state локальної сесії.

Новий соціальний користувач приймає правила перед створенням локального акаунта. Наявний локальний email автоматично НЕ прив’язується: спочатку локальний вхід, потім явне підключення з профілю. Для Telegram без email внутрішній недоставний ідентифікатор `telegram-ID@social.invalid` заповнює обов’язкове поле схеми 0.8; це не контактна адреса.

Повторний вхід із профілю оновлює фото. Дозволені HTTPS-джерела фото Google/Telegram, без редиректів; зображення обмежені за розміром і перекодовуються у 512×512 WebP. Якщо фото недоступне, зберігається попередній аватар / стандартна маска.

Перевірено локально: Telegram-підпис, підробка, прострочення, вимкнення без ключів, заборона сторонніх avatar URL. Повний вхід у реальні Google/Telegram акаунти потребує налаштованих credentials і окремої інтеграційної перевірки на домені.

Первинні специфікації:
- https://developers.google.com/identity/openid-connect/openid-connect
- https://developers.google.com/identity/openid-connect/reference
- https://core.telegram.org/widgets/login/
