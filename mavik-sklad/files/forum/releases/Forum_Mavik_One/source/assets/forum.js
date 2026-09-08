(() => {
 const form=document.querySelector('#replyForm');
 const target=document.querySelector('#replyTarget');
 const select=(id,quote,author)=>{
  if(!form)return;
  document.querySelector('#replyParent').value=id||'';
  document.querySelector('#quotePost').value=quote&&id?id:'';
  document.querySelector('#quoteTopic').value=quote&&!id?'1':'';
  target.textContent=(quote?'Цитата від ':'Відповідь для ')+author;
  form.scrollIntoView({behavior:'smooth',block:'center'});document.querySelector('#replyBody').focus({preventScroll:true});
 };
 document.querySelectorAll('[data-reply]').forEach(b=>b.addEventListener('click',()=>select(Number(b.dataset.reply),false,b.dataset.author)));
 document.querySelectorAll('[data-quote-post]').forEach(b=>b.addEventListener('click',()=>select(Number(b.dataset.quotePost),true,b.dataset.author)));
 document.querySelector('#clearReply')?.addEventListener('click',()=>{['replyParent','quotePost','quoteTopic'].forEach(id=>document.getElementById(id).value='');target.textContent='Відповідь у тему';});
 const toggle=document.querySelector('#mobileMenuToggle');
 document.addEventListener('keydown',e=>{if(e.key==='Escape'&&toggle?.getAttribute('aria-expanded')==='true')toggle.click();});
 const dialog=document.createElement('dialog');dialog.className='coffee-dialog';
 dialog.innerHTML=`<button class="coffee-close" aria-label="Закрити">×</button><div class="eyebrow">ЯКЩО ЗАЙШЛО</div><h2>Пригостити кавою</h2><p>Якщо прочитане чи почуте тут принесло задоволення — можете пригостити автора кавою. А можете й ні. Усе на сайті однаково залишається відкритим.</p><div class="coffee-layout"><section><h3>monobank</h3><p>Банка · швидкий переказ</p><div class="coffee-amounts"><a href="https://send.monobank.ua/jar/5ME4Jndzhv?a=50" target="_blank" rel="noopener">50 грн</a><a href="https://send.monobank.ua/jar/5ME4Jndzhv?a=100" target="_blank" rel="noopener">100 грн</a><a href="https://send.monobank.ua/jar/5ME4Jndzhv?a=200" target="_blank" rel="noopener">200 грн</a><a href="https://send.monobank.ua/jar/5ME4Jndzhv" target="_blank" rel="noopener">Своя сума</a></div></section><section><h3>Privat24</h3><div class="coffee-qr"><img src="/assets/payments/privat24-qr-1.jpg" alt="QR-код Privat24 1"><img src="/assets/payments/privat24-qr-2.jpg" alt="QR-код Privat24 2"></div></section></div>`;
 document.body.append(dialog);dialog.querySelector('.coffee-close').addEventListener('click',()=>dialog.close());dialog.addEventListener('click',e=>{if(e.target===dialog)dialog.close();});
 document.querySelectorAll('.coffee-nav').forEach(a=>a.addEventListener('click',e=>{if(innerWidth<=780)return;e.preventDefault();dialog.showModal();}));
})();
