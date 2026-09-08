from pathlib import Path
import re,sqlite3,json,urllib.request,urllib.parse,urllib.error,http.cookiejar,types
class Session:
 def __init__(self): self.opener=urllib.request.build_opener(urllib.request.HTTPCookieProcessor(http.cookiejar.CookieJar()))
 def request(self,url,data=None):
  try:r=self.opener.open(url,None if data is None else urllib.parse.urlencode(data).encode())
  except urllib.error.HTTPError as e:r=e
  return types.SimpleNamespace(status_code=r.code,text=r.read().decode('utf-8'),headers=r.headers)
 def get(self,url,params=None):return self.request(url+('?' +urllib.parse.urlencode(params) if params else ''))
 def post(self,url,data):return self.request(url,data)
requests=types.SimpleNamespace(Session=Session)
root=Path(__file__).parent
base='http://127.0.0.1:8099'
checks=[]
def ok(name,value):
 checks.append({'check':name,'passed':bool(value)})
 assert value,name
def csrf(s,path):
 h=s.get(base+path).text
 m=re.search(r'name="csrf" value="([^"]+)"',h)
 assert m,(path,h[:500])
 return m[1]
admin=requests.Session();guest=requests.Session()
install=admin.post(base+'/install.php',data={'name':'MaVik QA','email':'admin@example.test','password':'Test-only-0.9-password'})
ok('Fresh 0.8-schema install',install.status_code==200)
db=sqlite3.connect(root/'build-0.9/storage/forum.sqlite')
original=db.execute('SELECT id,title,body FROM topics').fetchall()
r=guest.get(base+'/');ok('Maintenance returns 503 and noindex',r.status_code==503 and 'noindex' in r.headers.get('X-Robots-Tag',''))
ok('Robots blocks all',guest.get(base+'/robots.txt').text.strip()=='User-agent: *\nDisallow: /')
admin.post(base+'/admin/login.php',data={'email':'admin@example.test','password':'Test-only-0.9-password'})
ok('Admin preview works',admin.get(base+'/').status_code==200)
ok('Migration preserves topics',db.execute('SELECT id,title,body FROM topics').fetchall()==original)
ok('Upgrade version',db.execute('PRAGMA user_version').fetchone()[0]==9)
token=csrf(admin,'/admin/settings.php')
r=admin.post(base+'/admin/settings.php',data={'csrf':token});ok('Public opening needs confirmation',r.status_code==422)
admin.post(base+'/admin/settings.php',data={'csrf':token,'confirm_open':'1'})
ok('Public forum opens',guest.get(base+'/').status_code==200)
token=csrf(guest,'/auth.php?mode=register')
data={'csrf':token,'action':'register','email':'reader@example.test','display_name':'Читач','password':'Test-only-reader-password'}
r=guest.post(base+'/auth.php?mode=register',data=data)
ok('Consent enforced by server',db.execute("SELECT COUNT(*) FROM users WHERE email='reader@example.test'").fetchone()[0]==0)
data['accept_rules']='1';guest.post(base+'/auth.php?mode=register',data=data)
ok('Consent timestamp stored',db.execute("SELECT rules_accepted_at FROM users WHERE email='reader@example.test'").fetchone()[0] is not None)
slug=db.execute('SELECT slug FROM topics ORDER BY id LIMIT 1').fetchone()[0];url='/topic.php?slug='+slug
token=csrf(guest,url)
r=guest.post(base+url,data={'csrf':token,'body':'УКРАЇНСЬКА ПОЕЗІЯ — тест пошуку'});ok('Reply created',r.status_code==200 and 'УКРАЇНСЬКА' in r.text)
first=db.execute('SELECT MAX(id) FROM posts').fetchone()[0]
r=guest.post(base+url,data={'csrf':token,'body':'Відповідь із цитатою','reply_to_post_id':first,'quote_post_id':first})
second=db.execute('SELECT MAX(id) FROM posts').fetchone()[0]
ok('Thread and quote IDs stored',db.execute('SELECT reply_to_post_id,quote_post_id FROM posts WHERE id=?',(second,)).fetchone()==(first,first))
ok('Every post has stable anchor',f'id="post-{second}"' in r.text and f'id="post-{first}"' in r.text)
ok('Quote markup and attribution', 'post-quote' in r.text and 'Повідомлення від' in r.text)
ok('Branch route',guest.get(base+url+'&branch='+str(first)).status_code==200)
ok('Unicode search finds post', 'УКРАЇНСЬКА' in guest.get(base+'/search.php',params={'q':'українська поезія'}).text)
ok('Title search finds topic',slug in guest.get(base+'/search.php',params={'q':'перед сном'}).text)
tokenadmin=csrf(admin,'/admin/moderation.php')
before=db.execute('SELECT last_activity_at FROM topics WHERE slug=?',(slug,)).fetchone()[0]
admin.post(base+'/admin/moderation.php',data={'csrf':tokenadmin,'action':'edit','id':first,'body':'Відредаговано УКРАЇНСЬКА ПОЕЗІЯ'})
ok('Editing does not bump activity',db.execute('SELECT last_activity_at FROM topics WHERE slug=?',(slug,)).fetchone()[0]==before)
admin.post(base+'/admin/moderation.php',data={'csrf':tokenadmin,'action':'hide','id':first})
ok('Hidden post excluded from search', 'Відредаговано' not in guest.get(base+'/search.php',params={'q':'українська поезія'}).text)
cat=db.execute('SELECT category_id FROM topics WHERE slug=?',(slug,)).fetchone()[0]
tokenadmin=csrf(admin,'/admin/categories.php')
admin.post(base+'/admin/categories.php',data={'csrf':tokenadmin,'action':'delete','id':cat})
ok('Nonempty category protected',db.execute('SELECT COUNT(*) FROM categories WHERE id=?',(cat,)).fetchone()[0]==1)
admin.post(base+'/admin/categories.php',data={'csrf':tokenadmin,'action':'toggle','id':cat})
ok('Hidden category topic inaccessible',guest.get(base+url).status_code==404)
ok('Hidden category excluded from search',slug not in guest.get(base+'/search.php',params={'q':'перед сном'}).text)
admin.post(base+'/admin/categories.php',data={'csrf':tokenadmin,'action':'toggle','id':cat})
admin.post(base+'/admin/moderation.php',data={'csrf':tokenadmin,'action':'hide','id':first})
ok('Storage protected',guest.get(base+'/storage/forum.sqlite').status_code==403)
for page in ['/','/topics.php',url,'/category.php?slug=knyhy','/rules.php','/profile.php','/admin/','/admin/topics.php','/admin/users.php','/admin/categories.php','/admin/settings.php','/admin/moderation.php']:
 response=admin.get(base+page);ok('No runtime error '+page,response.status_code==200 and not re.search('Fatal error|Warning:|Deprecated:',response.text))
(root/'checks.json').write_text(json.dumps(checks,ensure_ascii=False,indent=2),encoding='utf-8')
print(json.dumps(checks,ensure_ascii=False))
