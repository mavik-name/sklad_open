process.chdir(__dirname);
const {chromium}=require(process.env.PLAYWRIGHT_MODULE || 'playwright');
const fs=require('fs');
(async()=>{const b=await chromium.launch({channel:'msedge',headless:true});const p=await b.newPage({viewport:{width:1448,height:1086}});const checks=[];
const ok=(name,value)=>{checks.push({name,passed:value});if(!value)throw Error(name);};
await p.goto('http://127.0.0.1:8099/admin/login.php');await p.locator('[name=email]').fill('admin@example.test');await p.locator('[name=password]').fill('Test-only-0.9-password');await p.locator('button[type=submit],button.btn').click();
await p.goto('http://127.0.0.1:8099/topic.php?slug=shcho-pochytaty-pered-snom');
await p.locator('[data-quote-post="1"]').click();ok('Quote chooses post ID',await p.locator('#quotePost').inputValue()==='1');ok('Quote has author preview',(await p.locator('#replyTarget').textContent()).includes('Читач'));
await p.locator('[data-reply="1"]').click();ok('Reply clears quote',await p.locator('#quotePost').inputValue()==='');ok('Reply retains parent',await p.locator('#replyParent').inputValue()==='1');await p.locator('#clearReply').click();ok('Reply can be cancelled',await p.locator('#replyParent').inputValue()==='');
await p.goto('http://127.0.0.1:8099/profile.php');await p.locator('[name=avatar]').setInputFiles('build-0.9/assets/mavik-logo.png');await p.getByRole('button',{name:'Завантажити',exact:true}).click();ok('Avatar upload succeeds',(await p.locator('.notice.success').textContent()).includes('оновлено'));ok('Avatar is normalized WebP',(await p.locator('.profile-avatar').getAttribute('src')).endsWith('.webp'));
await p.getByRole('button',{name:'Повернути стандартну маску'}).click();ok('Default mask restored',(await p.locator('.profile-avatar').getAttribute('src'))==='/assets/default-mask.svg');
await p.goto('http://127.0.0.1:8099/admin/categories.php');let ids=await p.locator('[data-category-id]').evaluateAll(es=>es.map(e=>e.dataset.categoryId));await p.locator('[data-category-id]').nth(0).dragTo(p.locator('[data-category-id]').nth(2));await p.getByRole('button',{name:'Зберегти порядок',exact:true}).click();let after=await p.locator('[data-category-id]').evaluateAll(es=>es.map(e=>e.dataset.categoryId));ok('Drag reorder saved',ids.join()!=after.join());
// Restore original order through the same authorized form.
await p.locator('#categoryOrderValue').evaluate((el,v)=>{el.value=v;el.form.submit()},ids.join(','));await p.waitForLoadState();
await p.setViewportSize({width:390,height:844});await p.goto('http://127.0.0.1:8099/admin/categories.php');ok('Mobile move controls visible',await p.locator('.mobile-order-buttons').first().isVisible());await p.locator('[data-category-id]').nth(1).getByRole('button',{name:'Перемістити вище'}).click();after=await p.locator('[data-category-id]').evaluateAll(es=>es.map(e=>e.dataset.categoryId));ok('Mobile move saved',after[0]===ids[1]);await p.locator('[data-category-id]').nth(0).getByRole('button',{name:'Перемістити нижче'}).click();
await p.goto('http://127.0.0.1:8099/');ok('Mobile coffee points to support',(await p.locator('.coffee-float').getAttribute('href'))==='https://mavik.name/support');
await p.setViewportSize({width:592,height:950});await p.screenshot({path:'home-mobile-reference-width.png',fullPage:true});
fs.writeFileSync('interaction-checks.json',JSON.stringify(checks,null,2));console.log(checks);await b.close();})();
