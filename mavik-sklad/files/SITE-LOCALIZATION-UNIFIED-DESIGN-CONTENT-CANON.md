# MAVIK.NAME — UNIFIED DESIGN / CONTENT / ADMIN LOCALE CANON

Дата: 2026-08-19
Статус: **HIGHEST-PRIORITY HARD LOCALIZATION CANON**
Обов'язково для перебудови R216 і всіх наступних релізів.

Цей документ має пріоритет над будь-якими попередніми формулюваннями, які можна було трактувати як окремий EN shell, окремі EN-шаблони, незалежні контентні об'єкти для мов або окреме керування локалями.

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

## 2. ЄДИНЕ НАПОВНЕННЯ КАНОНІЧНИХ СТОРІНОК — РІЗНІ ЛОКАЛІ

Канонічні public pages мають один логічний page object і одну композицію блоків. До них належать головна, каталог книг, музика, блог як системна сторінка, автор, контакти, анонси, безпека/захист, `/mavik/` та інші canonical CORE routes.

Для canonical page спільні:
- object identity;
- route capability;
- component tree;
- порядок блоків;
- функціональність;
- layout.

Локалі містять тільки відповідні переклади полів, metadata, alt/caption та інші мовозалежні значення.

Не створювати окрему англійську композицію сторінки або незалежний EN page object.

## 3. ЄДИНИЙ КОНТЕНТНИЙ ОБ'ЄКТ — ЛОКАЛІЗОВАНІ ПРЕДСТАВЛЕННЯ

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

## 4. ЄДИНЕ УПРАВЛІННЯ — ВИБІР SCOPE ЛОКАЛЕЙ

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

## 5. VISIBILITY / PUBLICATION STATE ПО ЛОКАЛЯХ

Кожен logical object має окремий visibility/publication state для кожної локалі:
- `visible/published`;
- `hidden/unpublished`.

Автор може вимкнути показ матеріалу в одній локалі, не видаляючи сам object і не змінюючи інші локалі.

Штатна дія — `Прибрати з локалі` / locale-unpublish, а не фізичне видалення shared files.

## 6. ЯКЩО ПЕРЕКЛАДУ НЕМАЄ — СТАН `HIDDEN`

Якщо для конкретної локалі немає повного придатного до публікації locale payload, цей object/page автоматично має стан `hidden` у цій локалі.

Заборонено публічно показувати замість відсутнього перекладу:
- `English translation is being prepared`;
- порожню shell-сторінку;
- заглушку;
- український текст під EN URL;
- частково перекладену сторінку, якщо вона не затверджена як повна.

Відсутній locale payload = hidden locale representation.

Коли повний locale payload додано і він проходить validation, локальне представлення може бути переведене в visible/published.

## 7. КАНОНІЧНЕ НАПОВНЕННЯ І ЛОКАЛЬНІ ВІДМІННОСТІ

Canonical structure/content object один. Різниця між локалями допускається лише в:
- мові тексту;
- locale-specific metadata;
- visibility/publication state;
- там, де прямо дозволено автором, локальному порядку/показі матеріалу.

Не допускається незалежне розходження layout, component set, design, route semantics або object identity між локалями.

## 8. RELEASE GATE / VISUAL PARITY

Жоден multi-locale release не може отримати статус READY/PASS без visual parity audit.

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

PASS означає однаковий shell/layout/components/responsive behavior. Різниця допускається тільки через перекладений текст, довжину тексту, locale payload і свідомий locale visibility state.

Якщо хоч одна локаль має окрему оболонку/стилі або canonical page без повного payload показує заглушку — release FAIL.

## 9. ПРІОРИТЕТ

Правильна модель mavik.name:

**ONE SITE → ONE CORE → ONE DESIGN → ONE LOGICAL CONTENT MODEL → ONE ADMIN → MANY LOCALES.**

Локалі — це мовні представлення того самого сайту й тих самих content objects із власними translated payload + visibility state.

Цей принцип обов'язково успадковують R216 rebuild і всі наступні збірки, доки автор прямо його не змінить.
