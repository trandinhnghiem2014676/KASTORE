window.addEventListener('load',function(){
    let itemMenuToggle = document.querySelector('.mobile-menu-btn');
    let menuHeader = document.querySelector('.menu-header');
    let heightHeader = document.querySelector('.header').offsetHeight;
   menuHeader?menuHeader.style.top =`${heightHeader}px`:"";
    itemMenuToggle?.addEventListener('click',function(){
        menuHeader.classList.toggle('active');
    })
})