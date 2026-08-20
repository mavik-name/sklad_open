# MAVIK.NAME — TECHNICAL ROADMAP

Оновлено: 2026-08-20
Статус: **R222 STABILIZATION ROADMAP**

## Канонічна база

Єдина structural/functional CORE-база: **R222**.
Усі pre-R222 site-release tasks/checkpoints/implementation notes = obsolete і не є активним roadmap.

## Поточна фаза: 7-денна стабілізація

До завершення паузи не виконувати безпідставних змін:
- URL structure;
- canonical;
- robots.txt;
- sitemap.xml;
- entity IDs/graph;
- global layout/navigation;
- mass metadata rewrites;
- CORE/deploy architecture.

Винятки: production outage, security defect, broken route, data-loss risk або критичний publishing need.

## Що дозволено під час паузи

- збір first-party statistics;
- Boss monitoring;
- Search Console/Bing observation;
- Web Vitals observation;
- аналіз crawler/referrer/404/410/5xx;
- звичайний трафік/читання;
- точкова публікація контенту через штатний workflow без structural churn.

## Контроль після 7 днів

Порівняти з checkpoint `R222-PRE-PAUSE-AUDIT-2026-08-20.md`:
1. Search Console discovered/crawled/indexed counts;
2. sitemap processing/errors;
3. 404/410/5xx/canonical/noindex anomalies;
4. IndexNow/Bing status;
5. query visibility для `mavik`, `MaVik`, `мавік`, `mavik name` та авторських запитів;
6. first-party referrers/search engines/AI referrals;
7. Core Web Vitals: TTFB/FCP/LCP/CLS/INP;
8. popular pages/read completion/EPUB downloads;
9. robots/crawler availability;
10. site weight/file-count deltas.

## Постійні технічні цілі

Після стабілізаційного періоду будь-яке нове покращення оцінювати за R222 baseline:
- crawlability/indexability;
- performance/Core Web Vitals;
- security;
- accessibility;
- first-party observability;
- clean minimal install tree;
- backward-safe deploy/rollback;
- zero unnecessary third-party JS;
- server-rendered critical content/navigation.

## Localization

Localization implementation **frozen** і не є активною частиною roadmap. Усі localization/translation recovery data збережені окремо. Не відновлювати цю роботу без прямої команди автора.

## Заборона регресії

Не повертати:
- окремі locale shells;
- PWA/service-worker без окремої доведеної потреби;
- third-party analytics JS;
- PNG book covers;
- duplicated clean-text TXT trees;
- full-site persistent deploy backups;
- pre-R222 release artifacts як development/recovery base.

Наступний structural release створюється **тільки від R222** і лише після завершення стабілізації або за реальною необхідністю.