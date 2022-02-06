window.addEventListener('scroll', function () {
    let header = document.querySelector('header');
    let windowPosition = window.scrollY > 1;
    header.classList.toggle('scrolling-active', windowPosition);
});


const mobileBtn = document.getElementById('mobile-cta')
      nav = document.querySelector('nav')
      mobileBtnExit = document.getElementById('mobile-exit');

mobileBtn.addEventListener('click', () => {
  nav.classList.add('menu-btn');
})

mobileBtnExit.addEventListener('click',() => {
  nav.classList.remove('menu-btn');
})