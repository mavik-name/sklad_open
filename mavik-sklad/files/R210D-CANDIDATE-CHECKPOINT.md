# R210D — CANDIDATE CHECKPOINT · MAVIK.NAME

Дата збірки: 2026-08-18
Статус: **CANDIDATE / НЕ КАНОНІЗОВАНО**
Чинний канон до прямого затвердження автора: **R210**
Попередні буквені кандидати: R210A → R210B → R210C.

## Рішення автора

Після живої перевірки R210C автор зафіксував, що сторінки все ще візуально «скачуть» між собою, зокрема `Анонси`, ordinary pages, mobile і footer/copyright. Автор прямо вирішив спростити модель верстки:

- не робити основний каркас «гумовим» на всю ширину екрана;
- мати лише кілька чітких точок зупину;
- використовувати прийнятну фіксовану максимальну ширину й центрувати сторінку на великих моніторах;
- однаково вирівняти `Музика`, `Автор`, `Приватність`, `Права`, `Платформи`, `Анонси`, `Книги`, `Що почитати`, `Теми`;
- однаково перевірити desktop / tablet / mobile;
- верхня `Назад`, hero, контент і footer мають сидіти на спільній геометрії;
- copyright-рядок має починатися рівно **10 px нижче верхнього краю footer**.

`/music/` використано як візуальний орієнтир, але її outer shell також обмежено тим самим новим максимумом, щоб вона не розтягувалась на великих екранах.

## Геометрія R210D

Основний outer shell більше не масштабується безмежно.

### Desktop — від 1100 px
- максимальна ширина shell: **1120 px**;
- великі монітори додають тільки бокове повітря;
- ordinary content card: максимум **960 px**;
- h1 у shared hero: фіксований desktop-size;
- `Назад` і hero мають однакові стартові координати на контрольних сторінках.

### Tablet / вузький desktop — 768–1099 px
- shell: максимум **920 px**, фактична ширина `viewport - 40 px`;
- окрема фіксована позиція `Назад` і hero;
- ordinary card padding має власне фіксоване tablet-значення.

### Mobile — до 767 px
- shell: максимум **620 px**, фактична ширина `viewport - 28 px`;
- окрема фіксована mobile-позиція `Назад` і hero;
- ordinary card padding має власне фіксоване mobile-значення.

Ключова ідея: **всередині одного режиму outer geometry не плаває від ширини viewport**. Компоненти всередині сторінки можуть адаптуватися, але каркас має лише три чіткі режими.

## Ordinary pages

`Автор`, `Приватність`, `Права`, `Платформи` залишаються ordinary multilingual pages і не повертаються в CORE-контент.

Збережено:
- один shared ordinary renderer;
- зовнішня плашка;
- `Автор`: круглий портрет, desktop-обтікання, mobile-centering, `Письменництво...`;
- `Права`: внутрішні legal cards;
- штатні CTA і footer;
- редагування контенту через Boss без нової CORE-збірки.

R210D **не піднімає seed ordinary pages**, тому вже відредагований live content-state не має перезаписуватися. Зміна — у shared geometry/CSS/template shell.

## Footer

Footer уніфіковано на всіх перегенерованих сторінках:
- copyright row іде першим;
- його верхня координата = **footer top + 10 px**;
- legal row іде нижче;
- порядок та CSS однакові для desktop/tablet/mobile.

## Файли

- `210D Збірка_Сайт_GLOBAL-GEOMETRY_PART-1.zip`
- `210D Збірка_Сайт_GLOBAL-GEOMETRY_PART-2.zip`
- `210D Збірка_Сайт_GLOBAL-GEOMETRY_bundle.zip`

Постійне збереження: **File Library `/Сайт/`** — усі три binary R210D завантажені окремо, без перезапису B/C.

Внутрішній numeric release: `210`
Display label: `210D`
Revision: `D`
Base release: `210`
Managed files: **623**
Multipart set id: `r210d-570c1ad8878546c0`
Full release manifest SHA-256: `570c1ad8878546c0adf62884b0b202b7d6142eae2a4715dd4d31a8dfee80529b`

ZIP SHA-256:
- PART 1: `e2a040f6c8fe098f3a7421fc27fdf450add988444f90907cc6148a36f55a5d6a`
- PART 2: `46bfe2c833ede6fea12514172fb8cc72dcbd3c537c6a45c1e9b95b995e001b5f`
- bundle: `e1643966347918232403ebf96ebe4fb3681555c71f4286cae912db3a336ccb4c`

Розміри:
- PART 1: `26,723,530` bytes
- PART 2: `24,040,630` bytes
- bundle: `50,764,546` bytes

## Перевірки

- PHP lint: **30/30 OK**.
- штатний Boss multipart validator:
  - PART 1: OK, 459 entries;
  - PART 2: OK, 467 entries.
- ZIP CRC: PART 1 / PART 2 / bundle — OK.
- контрольне складання: **623/623**, missing 0, mismatch 0, extras 0.
- render geometry перевірено на 1440 / 900 / 390 px.

Контрольні результати:

### 1440 px desktop
`Музика / Автор / Приватність / Права / Платформи / Анонси / Книги / Що почитати / Теми`:
- main width: **1120 px**;
- main X: **160 px**;
- Back Y: **153 px**;
- hero Y: **211 px**;
- footer copyright gap: **10 px**.

### 900 px tablet
- main width: **860 px**;
- main X: **20 px**;
- Back Y: **141 px**;
- hero Y: **195 px**;
- footer copyright gap: **10 px**.

### 390 px mobile
- main width: **362 px**;
- main X: **14 px**;
- Back Y: **111 px**;
- hero Y: **161 px**;
- footer copyright gap: **10 px**.

Ordinary card width: 960 px max на desktop; на tablet/mobile займає доступний shared shell.

## Канонізація

R210D — **тільки кандидат**. До живої перевірки автора чинним каноном лишається R210.

Після прямого авторського `ОК`:
1. R210D стає єдиним чинним CORE;
2. canonical START-HERE / CANON / registry переводяться на R210D;
3. попередні binary R210/A/B/C прибираються з активного `/Сайт/`, якщо автор підтвердить очищення;
4. історичні checkpoints у Git залишаються як історія.