const {chromium}=require(process.env.PLAYWRIGHT_MODULE||'playwright');
const fs=require('fs'),path=require('path');
(async()=>{const browser=await chromium.launch({channel:'msedge',headless:true});const page=await browser.newPage();const results=[];
for(const width of [1889,1448,1120,1024,780,768,767,390,320]){
 await page.setViewportSize({width,height:900});await page.goto('http://127.0.0.1:8099/');
 const m=await page.evaluate(()=>{
  const main=document.querySelector('main.wrap').getBoundingClientRect(),header=document.querySelector('.header-inner').getBoundingClientRect(),mark=document.querySelector('.site-brand-mark img').getBoundingClientRect();
  const children=[...document.querySelector('.header-inner').children].filter(e=>getComputedStyle(e).display!=='none').map(e=>e.getBoundingClientRect());
  const overlap=children.some((r,i)=>children.slice(i+1).some(s=>r.left<s.right-1&&r.right>s.left+1&&r.top<s.bottom-1&&r.bottom>s.top+1));
  return {main:main.width,header:header.width,mark:mark.width,overflow:document.documentElement.scrollWidth>innerWidth,overlap,contained:children.every(r=>r.left>=header.left-1&&r.right<=header.right+1),svg:document.querySelector('.site-brand-mark img').getAttribute('src')};
 });
 const expected=width>=1100?Math.min(1120,width-56):width>=768?Math.min(920,width-40):Math.min(640,width);
 for(const [name,pass] of Object.entries({shell:Math.abs(m.main-expected)<1&&Math.abs(m.header-expected)<1,logo:m.mark===(width<=767?40:42)&&m.svg.endsWith('mavik-mvv-gold.svg'),noOverflow:!m.overflow,headerSpacing:!m.overlap&&m.contained})){results.push({width,name,passed:pass});if(!pass)throw Error(JSON.stringify({width,name,m}));}
 if(width===1448||width===390)await page.screenshot({path:path.join(__dirname,`shell-${width}.png`),fullPage:true});
}
fs.writeFileSync(path.join(__dirname,'shell-checks.json'),JSON.stringify(results,null,2));console.log(`${results.length} checks passed`);await browser.close();})().catch(e=>{console.error(e);process.exit(1)});
