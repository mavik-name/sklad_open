# Перевірки 0.9

Запускати в окремій тестовій копії цього каталогу; НІКОЛИ не на серверній базі. Тести створюють QA-акаунти, змінюють maintenance, категорії, повідомлення й аватари. У ZIP і GitHub тестової БД немає.

1. PHP 8.1+ з pdo_sqlite, mbstring, gd, fileinfo; Python 3. У директорії releases/0.9: `php -S 127.0.0.1:8099 -t build-0.9 router.php`.
2. На свіжій копії без БД: `python check.py`, потім `python access-check.py`.
3. `php migration-check.php` та `php social-check.php` — ізольовані перевірки без реальних акаунтів.
4. Для браузера: Node.js + Playwright та встановлений Edge. `node browser-check.cjs`, `node interaction-check.cjs`. За потреби встановіть PLAYWRIGHT_MODULE на шлях до свого пакета. Для іншого браузера змініть channel.

Зафіксовано 68 функціональних / інтерактивних / міграційних / signature-перевірок (JSON у qa), плюс браузерні перевірки 4 viewport/page-комбінацій і PHP lint. Горизонтального переповнення та відсутніх зображень на цих сторінках немає. Це не доказ піксельної тотожності референсам.

Google/Telegram live-flow з реальними ключами та Apache/nginx production configuration тут не перевірені.
