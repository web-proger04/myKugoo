const telButton = document.querySelector('.tel-block__button');
const telPopup = document.querySelector('.tel-block__popup');

document.addEventListener('click', (event) => {
   const element = event.target;

   if (element !== telButton) {
      telButton.classList.remove('active');
      telPopup.classList.remove('active');
   } else {
      telButton.classList.toggle('active');
      telPopup.classList.toggle('active');   
   };

});
