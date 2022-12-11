const popup = document.querySelector('.popup');
const popupBurger = document.querySelector('.popup__burger');
const orderСall = document.querySelectorAll('.order-call');
const body = document.querySelector('body');

orderСall.forEach(function (item) {
   item.addEventListener('click', () => {
      popup.classList.add('active');
      body.classList.add('lock');
   });
});

popupBurger.addEventListener('click', () => {
   popup.classList.remove('active');
   body.classList.remove('lock');
});

popup.addEventListener('click', (event) => {
   $this = event.target;
   if ($this == popup) {
      popup.classList.remove('active');
      body.classList.remove('lock');
   };
});