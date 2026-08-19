# MAVIK.NAME — UNIFIED DESIGN / CONTENT / ADMIN / LANG LOCALE CANON

Дата: 2026-08-19
Статус: **HIGHEST-PRIORITY HARD LOCALIZATION CANON**
Обов'язково для перебудови R216 і всіх наступних релізів.

Цей документ має пріоритет над будь-якими попередніми формулюваннями, які можна було трактувати як окремий EN shell, окремі EN-шаблони, незалежні контентні об'єкти для мов, окреме керування локалями або локалізацію через дубльовані HTML/PHP-сторінки.

## 1. ЄДИНИЙ ДИЗАЙН — РІЗНІ ЛОКАЛІ

Для `uk`, `en` і всіх майбутніх локалей існує один public shell і один design system:
- один layout;
- один набір templates/components;
- одна структура DOM для однакових типів сторінок;
- один CSS/design system;
- одна desktop/mobile responsive поведінка;
- одні картки, відступи, типографіка, меню, footer, reader shell, controls, theme logic, accessibility;
- одна логіка player/share/blog/book components.

Локаль змінює тільки мовозалежні labels, тексти, metadata та locale payload.

Окремий EN CSS/theme/layout/template або спрощена EN-оболонка заборонені.

Якщо `/books/` і `/en/books/` відрізняються дизайном, структурою, поведінкою чи компонентами — це release-blocking CORE defect.

## 2. ЛОКАЛІЗАЦІЯ САЙТУ — ТІЛЬКИ ЧЕРЕЗ LANG FILES

Уся локалізація CORE/shell/canonical static pages виконується через спільний language layer.

Канонічна модель:

```text
/lang/
  uk.php   або uk.json
  en.php   або en.json
  es.php   або es.json
  fr.php   або fr.json
  de.php   або de.json
```

Точний формат може еволюціонувати, але принцип незмінний: **один template/component звертається до одного translation key, а locale підставляє значення з відповідного lang file.**

Приклад:

```text
t('nav.books')
t('books.title')
t('books.lead')
t('music.title')
t('about.body_01')
t('footer.rights')
```

Правила:
1. Не створювати окремі `en/index.html`, `en/books-template.php`, `en/theme.css` як самостійні джерела дизайну/структури.
2. EN/ES/FR/DE не мають власного hardcoded shell text у дубльованих templates.
3. Меню, кнопки, системні labels, aria-labels, footer, canonical page headings/leads/статичні пояснення та інші CORE-controlled тексти локалізуються через lang keys.
4. Canonical page composition лишається одна; перекладаються значення ключів.
5. Missing required lang key для активної локалі = validation/release error, а не fallback на випадковий hardcoded EN/UA текст.
6. Fallback допускається лише технічно контрольований і не повинен робити публічну сторінку змішаномовною.
7. Додавання нової локалі означає додавання нового lang file + locale content payload/state, а не копіювання сторінок.

## 3. СТАТИЧНІ КАНОНІЧНІ СТОРІНКИ — ОДИН І ТОЙ САМИЙ ЗМІСТ, РІЗНІ МОВИ

Для статичних канонічних сторінок діє жорстка семантична parity 1:1.

До них належать щонайменше:
- `Автор` / `About`;
- `Контакти` / `Contacts`;
- `Безпека/Захист`;
- `/mavik/`;
- інші статичні інформаційні сторінки, які є частиною canonical CORE.

Правильна модель:
- один semantic source / один набір змістових блоків;
- той самий порядок блоків;
- ті самі факти;
- ті самі твердження;
- та сама повнота змісту;
- та сама функціональна роль сторінки;
- різниться тільки мова перекладу та locale-specific metadata, якщо це справді мовозалежне.

Наприклад, `/about/` і `/en/about/` повинні містити **один і той самий текст за змістом**, але українською та англійською відповідно. EN не може бути скороченою, розширеною або концептуально іншою біографією.

Переклад статичних canonical pages зберігається через lang keys / lang files, а не через окремі незалежні EN page files.

Якщо для статичної canonical page немає повного перекладу потрібною мовою — її представлення в цій локалі має бути `hidden` до появи повного перекладу.

Заборонено:
- скорочувати EN-версію статичної сторінки відносно UA без прямого рішення автора;
- додавати в одну локаль факти/блоки, яких немає в іншій;
- вести незалежне редагування змісту UA та EN статичної сторінки;
- показувати заглушку замість перекладу.

## 4. ЄДИНЕ НАПОВНЕННЯ КАНОНІЧНИХ СТОРІНОК — РІЗНІ ЛОКАЛІ

Канонічні public pages мають один логічний page object і одну композицію блоків. До них належать головна, каталог книг, музика, блог як системна сторінка, автор, контакти, анонси, безпека/захист, `/mavik/` та інші canonical CORE routes.

Для canonical page спільні:
- object identity;
- route capability;
- component tree;
- порядок блоків;
- функціональність;
- layout.

Статичні/системні тексти canonical page беруться з lang files. Редагований авторський payload береться з logical content object.

Не створювати окрему англійську композицію сторінки або незалежний EN page object.

## 5. ЄДИНИЙ КОНТЕНТНИЙ ОБ'ЄКТ — ЛОКАЛІЗОВАНІ ПРЕДСТАВЛЕННЯ

Для редагованого контенту існує один logical content object зі стабільним id/slug/identity.

Це стосується щонайменше:
- книг;
- блогових записів;
- музики;
- анонсів;
- редагованих інформаційних сторінок;
- інших locale-aware матеріалів.

Один object може мати locale payload для кожної мови: title, description, excerpt, full text, alt/caption, SEO metadata та інші мовозалежні поля.

Локалізовані представлення не є незалежними матеріалами — це одна сутність контенту.

## 6. ЄДИНЕ УПРАВЛІННЯ — ВИБІР SCOPE ЛОКАЛЕЙ

Boss/адмінка єдина для всіх локалей. Не створювати окрему EN admin, UA admin або дубльовані форми керування.

Кожна операція редагування виконується з явним locale scope.

Перед застосуванням зміни автор може вибрати:
- тільки `UK`;
- тільки `EN`;
- `UK + EN`;
- будь-яку комбінацію активних локалей;
- `Усі активні локалі`, якщо зміна повинна застосуватися всюди.

Правила:
1. Одна форма / один об'єкт / один workflow.
2. Scope визначає, у яких locale payload/state застосовується конкретна зміна.
3. Зміна в `EN` не повинна зачепити `UK`, якщо `UK` не вибрана.
4. Глобальна структурна зміна CORE/design застосовується до всіх локалей автоматично і не потребує окремого дублювання.
5. Мовозалежна зміна контенту/metadata застосовується лише до вибраних locale payload.
6. Boss завжди показує поточний scope перед Save/Publish/Unpublish.
7. Для небезпечних масових дій на кількох локалях scope має бути очевидним і підтвердженим у самій формі.
8. Немає окремих «редакторів EN» і «редакторів UK» — є один редактор з locale selector/scope selector.
9. Для статичних canonical pages зміна змісту є зміною semantic source і має бути відображена перекладом в усіх опублікованих локалях; якщо переклад ще не оновлено, відповідна локаль тимчасово `hidden`/needs-translation до синхронізації.

## 7. VISIBILITY / PUBLICATION STATE ПО ЛОКАЛЯХ

Кожен logical object має окремий visibility/publication state для кожної локалі:
- `visible/published`;
- `hidden/unpublished`.

Автор може вимкнути показ матеріалу в одній локалі, не видаляючи сам object і не змінюючи інші локалі.

Штатна дія — `Прибрати з локалі` / locale-unpublish, а не фізичне видалення shared files.

## 8. ЯКЩО ПЕРЕКЛАДУ НЕМАЄ — СТАН `HIDDEN`

Якщо для конкретної локалі немає повного придатного до публікації locale payload або required lang keys, цей object/page автоматично має стан `hidden` у цій локалі.

Заборонено публічно показувати замість відсутнього перекладу:
- `English translation is being prepared`;
- порожню shell-сторінку;
- заглушку;
- український текст під EN URL;
- частково перекладену сторінку, якщо вона не затверджена як повна.

Відсутній locale payload = hidden locale representation.

Коли повний locale payload додано і він проходить validation, локальне представлення може бути переведене в visible/published.

## 9. КАНОНІЧНЕ НАПОВНЕННЯ І ЛОКАЛЬНІ ВІДМІННОСТІ

Canonical structure/content object один. Різниця між локалями допускається лише в:
- мові тексту;
- locale-specific metadata;
- visibility/publication state;
- там, де прямо дозволено автором, локальному порядку/показі редагованого матеріалу.

Для статичних canonical pages локальні відмінності змісту не допускаються без прямого рішення автора.

Не допускається незалежне розходження layout, component set, design, route semantics або object identity між локалями.

## 10. RELEASE GATE / VISUAL + LANG + SEMANTIC PARITY

Жоден multi-locale release не може отримати статус READY/PASS без visual parity audit, lang-key audit та semantic parity audit статичних сторінок.

Обов'язково порівняти щонайменше:
- `/` ↔ `/en/`;
- `/books/` ↔ `/en/books/`;
- book landing UA ↔ EN;
- reader UA ↔ EN;
- `/music/` ↔ `/en/music/`;
- `/blog/` ↔ `/en/blog/`;
- `/about/` ↔ `/en/about/`;
- `/mavik/` ↔ `/en/mavik/`;
- інші активні canonical public routes.

Перевірка обов'язкова на desktop і mobile.

Також обов'язково перевірити:
- required lang keys існують в усіх active locales;
- немає hardcoded EN/UA shell text поза lang layer;
- немає окремих locale CSS/layout/template copies;
- static canonical pages мають однаковий зміст/структуру у перекладі;
- hidden state виставлений для incomplete locale payload;
- немає публічних translation placeholders.

PASS означає однаковий shell/layout/components/responsive behavior і, для статичних canonical pages, однаковий зміст у перекладі. Різниця допускається тільки через мову, довжину перекладеного тексту, locale metadata та свідомий visibility state.

Якщо хоч одна локаль має окрему оболонку/стилі, canonical page без повного payload показує заглушку, статична сторінка має інший зміст або локалізація обходить lang files — release FAIL.

## 11. ПРІОРИТЕТ

Правильна модель mavik.name:

**ONE SITE → ONE CORE → ONE DESIGN → ONE LANG LAYER → ONE SEMANTIC STATIC CONTENT → ONE LOGICAL EDITABLE CONTENT MODEL → ONE ADMIN → MANY LOCALES.**

Локалі — це мовні представлення того самого сайту й тих самих content objects із власними translated payload + visibility state.

Цей принцип обов'язково успадковують R216 rebuild і всі наступні збірки, доки автор прямо його не змінить.
