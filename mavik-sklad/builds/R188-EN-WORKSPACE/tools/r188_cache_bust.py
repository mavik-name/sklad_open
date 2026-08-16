#!/usr/bin/env python3
from pathlib import Path
import sys

root = Path(sys.argv[1] if len(sys.argv) > 1 else '.')
repls = {
    b'mavik-language.js?v=184': b'mavik-language.js?v=188',
    b'mavik-language.css?v=184': b'mavik-language.css?v=188',
}
changed = []
for p in root.rglob('*'):
    if not p.is_file():
        continue
    try:
        data = p.read_bytes()
    except OSError:
        continue
    new = data
    for old, replacement in repls.items():
        new = new.replace(old, replacement)
    if new != data:
        p.write_bytes(new)
        changed.append(p.relative_to(root).as_posix())

remaining = {old.decode(): 0 for old in repls}
for p in root.rglob('*'):
    if not p.is_file():
        continue
    try:
        data = p.read_bytes()
    except OSError:
        continue
    for old in repls:
        remaining[old.decode()] += data.count(old)

print(f'changed_files={len(changed)}')
for k, v in remaining.items():
    print(f'remaining[{k}]={v}')
if any(remaining.values()):
    raise SystemExit(2)
