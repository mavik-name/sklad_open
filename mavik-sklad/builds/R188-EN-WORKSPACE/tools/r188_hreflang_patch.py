#!/usr/bin/env python3
from pathlib import Path
from urllib.parse import urlsplit
import re
import sys
import xml.etree.ElementTree as ET

root = Path(sys.argv[1] if len(sys.argv) > 1 else '.').resolve()
sitemap = root / 'sitemap-en.xml'
if not sitemap.is_file():
    raise SystemExit(f'Missing {sitemap}')

NS = {'sm': 'http://www.sitemaps.org/schemas/sitemap/0.9'}
tree = ET.parse(sitemap)
locs = [x.text.strip() for x in tree.findall('.//sm:loc', NS) if x.text and x.text.strip()]

changed = []
missing = []
pairs = []
ALT_RE = re.compile(r'<link\b(?=[^>]*\brel=["\']alternate["\'])(?=[^>]*\bhreflang=["\'](?:uk|en|x-default)["\'])[^>]*>\s*', re.I)

for en_url in locs:
    u = urlsplit(en_url)
    if u.netloc != 'mavik.name' or not u.path.startswith('/en/'):
        continue
    en_path = u.path
    ua_path = en_path[3:] or '/'
    if not ua_path.startswith('/'):
        ua_path = '/' + ua_path
    if ua_path.endswith('/'):
        ua_file = root / ua_path.lstrip('/') / 'index.html'
        if ua_path == '/':
            ua_file = root / 'index.html'
    else:
        ua_file = root / ua_path.lstrip('/')
    if not ua_file.is_file():
        missing.append((en_url, ua_path, str(ua_file)))
        continue
    text = ua_file.read_text('utf-8', errors='strict')
    original = text
    text = ALT_RE.sub('', text)
    uk_url = 'https://mavik.name' + ua_path
    links = f'<link rel="alternate" hreflang="uk" href="{uk_url}"/><link rel="alternate" hreflang="en" href="{en_url}"/>'
    canonical = re.search(r'<link\b[^>]*\brel=["\']canonical["\'][^>]*>', text, re.I)
    if canonical:
        pos = canonical.end()
        text = text[:pos] + links + text[pos:]
    else:
        m = re.search(r'</head\s*>', text, re.I)
        if not m:
            missing.append((en_url, ua_path, 'no </head>'))
            continue
        text = text[:m.start()] + links + text[m.start():]
    if text != original:
        ua_file.write_text(text, 'utf-8')
        changed.append(ua_file.relative_to(root).as_posix())
    pairs.append((ua_path, en_path))

verify_errors = []
for ua_path, en_path in pairs:
    ua_file = root / ('index.html' if ua_path == '/' else ua_path.lstrip('/') + 'index.html' if ua_path.endswith('/') else ua_path.lstrip('/'))
    if not ua_file.is_file():
        verify_errors.append(f'MISSING_UA_FILE {ua_path}')
        continue
    text = ua_file.read_text('utf-8', errors='strict')
    en_url = 'https://mavik.name' + en_path
    uk_url = 'https://mavik.name' + ua_path
    if f'hreflang="en" href="{en_url}"' not in text:
        verify_errors.append(f'MISSING_EN_ALT {ua_path} -> {en_path}')
    if f'hreflang="uk" href="{uk_url}"' not in text:
        verify_errors.append(f'MISSING_UK_ALT {ua_path}')

print(f'english_sitemap_urls={len(locs)}')
print(f'paired_routes={len(pairs)}')
print(f'changed_ua_files={len(changed)}')
print(f'missing_targets={len(missing)}')
for item in missing: print('MISSING', *item)
print(f'verify_errors={len(verify_errors)}')
for err in verify_errors: print('ERROR', err)
if missing or verify_errors: raise SystemExit(2)
print('R188_HREFLANG_PATCH_OK')
