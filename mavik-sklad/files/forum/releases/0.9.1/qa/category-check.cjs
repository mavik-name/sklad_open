const {chromium}=require(process.env.PLAYWRIGHT_MODULE||'playwright');
const fs=require('fs');const path=require('path');
(async()=>{
 const browser=await chromium.launch({channel:'msedge',headless:true});const page=await browser.newPage();const checks=[];
 const ok=(name,value)=>{checks.push({name,passed:!!value});if(!value)throw Error(name);};
 for(const width of [1889,1448,1024,780,592,390,320]){
  await page.setViewportSize({width,height:850});const response=await page.goto('http://127.0.0.1:8099/category.php?slug=knyhy');
  ok(`${width}: category available`,response.status()===200);
  const measure=()=>page.evaluate(()=>{
   const rows=[...document.querySelectorAll('.category-topic-row')];
   return {overflow:document.documentElement.scrollWidth>innerWidth,readable:rows.every(r=>r.querySelector('.category-topic-copy').getBoundingClientRect().width>innerWidth*.35),separated:rows.every(r=>{const t=r.querySelector('strong').getBoundingClientRect(),a=r.querySelector('.category-topic-copy>span').getBoundingClientRect(),m=r.querySelector('.category-topic-meta').getBoundingClientRect(),parts=[...r.querySelector('.category-topic-meta').children].map(e=>e.getBoundingClientRect());return a.top>=t.bottom&&((m.left>=t.right)||(m.top>=a.bottom))&&(parts[1].left>=parts[0].right||parts[1].top>=parts[0].bottom)})};
  });
  let m=await measure();ok(`${width}: no overflow`,!m.overflow);ok(`${width}: title uses available width`,m.readable);ok(`${width}: author and metadata separated`,m.separated);
  if(width===1889||width===390)await page.screenshot({path:path.join(__dirname,`category-${width}.png`),fullPage:true});
  await page.locator('.category-topic-copy strong').first().evaluate(e=>e.textContent='Дуже довга назва теми про книжки, авторів, сучасну українську літературу та враження від прочитаних романів '.repeat(3));
  m=await measure();ok(`${width}: long title wraps without collisions`,!m.overflow&&m.separated);
 }
 const href=await page.locator('.category-topic-row').first().getAttribute('href');ok('Topic link opens', (await page.goto('http://127.0.0.1:8099'+href)).status()===200);
 for(const width of [1448,390]){await page.setViewportSize({width,height:850});await page.goto('http://127.0.0.1:8099/');ok(`${width}: homepage grid remains intact`,await page.locator('.topic-row').first().evaluate(r=>r.children.length===6&&r.querySelector('.topic-copy').getBoundingClientRect().width>100));}
 fs.writeFileSync(path.join(__dirname,'category-checks.json'),JSON.stringify(checks,null,2));console.log(`${checks.length} checks passed`);await browser.close();
})().catch(e=>{console.error(e);process.exit(1)});
