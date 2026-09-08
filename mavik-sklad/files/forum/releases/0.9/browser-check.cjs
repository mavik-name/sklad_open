process.chdir(__dirname);
const {chromium}=require(process.env.PLAYWRIGHT_MODULE || 'playwright');
const fs=require('fs');
(async()=>{
 const browser=await chromium.launch({headless:true,channel:'msedge'});const page=await browser.newPage();let errors=[];page.on('pageerror',e=>errors.push(e.message));
 for(const [name,width,height,path] of [['home-desktop',1448,1086,'/'],['home-mobile',390,844,'/'],['topic-desktop',1672,941,'/topic.php?slug=shcho-pochytaty-pered-snom'],['topic-mobile',390,844,'/topic.php?slug=shcho-pochytaty-pered-snom']]){
  await page.setViewportSize({width,height});await page.goto('http://127.0.0.1:8099'+path);await page.screenshot({path:''+name+'.png',fullPage:true});
  const metrics=await page.evaluate(()=>({width:innerWidth,scroll:document.documentElement.scrollWidth,missing:[...document.images].filter(i=>!i.complete||!i.naturalWidth).map(i=>i.src)}));console.log(name,metrics);if(metrics.scroll>width)errors.push(name+' overflow');
 }
 await page.setViewportSize({width:1448,height:1086});await page.goto('http://127.0.0.1:8099/');await page.locator('.coffee-float').click();console.log('Desktop coffee dialog',await page.locator('dialog').evaluate(d=>d.open));await page.keyboard.press('Escape');
 await page.setViewportSize({width:390,height:844});await page.locator('#mobileMenuToggle').click();console.log('Mobile menu',await page.locator('#mobileMenu').getAttribute('aria-hidden'));await page.keyboard.press('Escape');console.log('Menu closes',await page.locator('#mobileMenu').getAttribute('aria-hidden'));
 fs.writeFileSync('browser-errors.json',JSON.stringify(errors));await browser.close();if(errors.length)process.exitCode=1;
})();

