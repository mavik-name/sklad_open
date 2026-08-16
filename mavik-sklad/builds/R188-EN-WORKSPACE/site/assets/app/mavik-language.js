(() => {
  'use strict';
  const LANGS=['uk','en'];
  const CODE={uk:'UA',en:'EN'};
  const NAME={uk:'Українська',en:'English'};
  const KEY='mavik-language-native-r188';
  const isEnglish=location.pathname==='/en'||location.pathname.startsWith('/en/');
  const active=isEnglish?'en':'uk';
  const reader=/^\/(?:en\/)?books\/[^/]+\/read\/?$/.test(location.pathname);
  const unsupportedEnglish=/^\/books\/sotsialna(?:\/|$)/;
  const remember=x=>{try{localStorage.setItem(KEY,x)}catch(_){}};
  const enPath=()=>{
    const p=location.pathname||'/';
    if(isEnglish) return p;
    if(unsupportedEnglish.test(p)) return '/en/books/';
    return p==='/'?'/en/':'/en'+p;
  };
  const ukPath=()=>{
    const p=location.pathname||'/';
    if(!isEnglish) return p;
    const stripped=p.replace(/^\/en(?=\/|$)/,'');
    return stripped||'/';
  };
  const go=lang=>{
    if(!LANGS.includes(lang)) return;
    remember(lang);
    const dest=lang==='en'?enPath():ukPath();
    location.assign(dest+location.search+location.hash);
  };
  function makeItems(cls){
    const f=document.createDocumentFragment();
    LANGS.forEach(l=>{
      const b=document.createElement('button');
      b.type='button'; b.className=cls+(l===active?' active':''); b.dataset.mvkLang=l;
      b.setAttribute('translate','no'); b.classList.add('notranslate');
      if(cls==='mvk-lang-item') b.innerHTML='<span class="mvk-lang-code">'+CODE[l]+'</span><span>'+NAME[l]+'</span>';
      else b.textContent=CODE[l];
      b.title=NAME[l]; b.setAttribute('aria-label',NAME[l]); b.onclick=()=>go(l); f.appendChild(b);
    });
    return f;
  }
  function setActive(){
    document.documentElement.dataset.mavikLanguage=active;
    document.querySelectorAll('[data-mvk-lang]').forEach(x=>x.classList.toggle('active',x.dataset.mvkLang===active));
  }
  function desktop(){
    if(document.querySelector('.mvk-lang-desktop')) return;
    const host=reader?document.querySelector('.controls'):(document.querySelector('.mavik-site-desktop-nav')||document.querySelector('nav.menu'));
    const w=document.createElement('div'); w.className='mvk-lang-desktop notranslate'; w.setAttribute('translate','no');
    const t=document.createElement('button'); t.type='button'; t.className='mvk-lang-trigger'; t.textContent='文'; t.title='Language / Мова'; t.setAttribute('aria-label','Language / Мова'); t.setAttribute('aria-expanded','false');
    const pop=document.createElement('div'); pop.className='mvk-lang-pop'; pop.appendChild(makeItems('mvk-lang-item')); w.append(t,pop);
    t.onclick=e=>{e.stopPropagation();const o=w.classList.toggle('open');t.setAttribute('aria-expanded',o?'true':'false')};
    document.addEventListener('click',e=>{if(!w.contains(e.target)){w.classList.remove('open');t.setAttribute('aria-expanded','false')}});
    document.addEventListener('keydown',e=>{if(e.key==='Escape'){w.classList.remove('open');t.setAttribute('aria-expanded','false')}});
    if(host){const before=reader?host.querySelector('#settingsBtn'):host.querySelector('.mavik-site-ding,.ding-small,.js-ding');before&&before.parentElement===host?host.insertBefore(w,before):host.appendChild(w)}else{w.classList.add('mvk-lang-fallback');document.body.appendChild(w)}
  }
  function mobileReader(){
    if(!reader) return;
    const s=document.getElementById('settings'); if(!s||s.querySelector('.mvk-reader-language')) return;
    const box=document.createElement('div'); box.className='mvk-reader-language notranslate'; box.setAttribute('translate','no');
    const title=document.createElement('div'); title.className='mvk-reader-language-title'; title.textContent=active==='en'?'Language':'Мова';
    const grid=document.createElement('div'); grid.className='mvk-reader-language-grid'; grid.appendChild(makeItems('mvk-reader-language-choice')); box.append(title,grid);
    const theme=s.querySelector('.reader-theme-setting'); theme?theme.insertAdjacentElement('afterend',box):s.prepend(box);
  }
  function mobileMenu(){
    if(reader) return;
    document.querySelectorAll('.mavik-site-mobile-inner,.mobile-menu-inner').forEach(host=>{
      if(host.querySelector('.mvk-mobile-language-row')) return;
      const row=document.createElement('div'); row.className='mvk-mobile-language-row notranslate'; row.setAttribute('translate','no'); row.setAttribute('aria-label','Language / Мова');
      row.appendChild(makeItems('mvk-mobile-language-choice')); host.appendChild(row);
    });
  }
  document.addEventListener('DOMContentLoaded',()=>{setActive();desktop();mobileReader();mobileMenu();});
})();
