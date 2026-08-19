# MAVIK.NAME — SEO IDENTITY CANON

Дата: 2026-08-19
Статус: **HARD SEO / ENTITY CANON / ОБОВ'ЯЗКОВО ДЛЯ R216**

## Ідентичність

Пошукова та структурована ідентичність сайту має однозначно зв'язувати:
- `MaVik`;
- `Mavik`;
- `Мавік`;
- `Віктор Макарчук` / `Viktor Makarchuk`.

Це **одна авторська/брендова сутність**, а не окремі бренди або окремі Person-сутності.

## Обов'язково в R216

1. **Головна сторінка**: природний видимий текст має зв'язувати `MaVik`, `Mavik`, `Мавік` і Віктора Макарчука без keyword stuffing.
2. **Сторінка автора**: те саме семантичне зв'язування має бути присутнє у видимому тексті сторінки автора.
3. **`<title>`** головної та сторінки автора має містити достатню ідентифікацію автора/бренду та бути locale-aware; не створювати штучного переліку ключових слів.
4. **Schema.org `WebSite`**: canonical `name` = `MaVik`; `alternateName` має включати щонайменше `Mavik`, `Мавік`, `Віктор Макарчук`, `Viktor Makarchuk` там, де це семантично коректно.
5. **Schema.org `Person`**: одна стабільна сутність автора. У UA-контексті `name` = `Віктор Макарчук`; EN-подання може використовувати `Viktor Makarchuk`. `alternateName` має включати `MaVik`, `Mavik`, `Мавік`, `Віктор Макарчук`, `Viktor Makarchuk` без створення дубльованих Person.
6. `WebSite` і `Person` повинні мати стабільні `@id` (`https://mavik.name/#website`, `https://mavik.name/#person`), однакові між локалями.
7. Canonical/hreflang не змінювати заради entity-пакета; не створювати дубльованих URL під різні написання бренду.
8. OpenGraph/Twitter та JSON-LD не повинні суперечити видимим title/name/author identity.
9. Boss/SEO self-test R216 має перевіряти на головній і сторінці автора: title, `WebSite`, `Person`, усі required `alternateName`, валідний JSON-LD та відсутність конфліктних canonical/hreflang.
10. SEO/entity-пакет має працювати для UA та EN через спільний CORE + locale/lang/content layer, без дублювання SEO-логіки в content patches.

## Після live-публікації R216

Після фактичної установки R216 на mavik.name:
1. перевірити live HTML/JSON-LD головної та сторінки автора;
2. перевірити sitemap/canonical/hreflang;
3. повторно подати потрібні ключові URL на індексацію через Google Search Console (головна, сторінка автора та інші сторінки, де entity identity materially changed);
4. виконати штатний IndexNow/Bing submission;
5. зафіксувати результат у SITE-WORK-JOURNAL.

Google Search Console reindex є **post-deploy дією**, бо він має посилатися на вже опублікований live R216, а не на локальну збірку.

## Заборона

- не використовувати meta keywords як заміну нормальній семантиці;
- не повторювати `MaVik / Mavik / Мавік / Віктор Макарчук` неприродно по всіх блоках;
- не створювати окремих дубльованих сторінок під різні написання бренду;
- не робити різні `Person`-сутності для `MaVik`, `Mavik`, `Мавік` і Віктора Макарчука.

Правильна модель: **одна сутність автора/бренду, кілька альтернативних імен, узгоджені visible text + title + structured data**.
