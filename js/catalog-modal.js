const catalogModalButton = document.querySelector('.middle-header__button');
const catalogModal = document.querySelector('.catalog-modal');

document.addEventListener('click', (event) => {
   const element = event.target;

   if (element !== catalogModalButton) {
      catalogModalButton.classList.remove('active');
      catalogModal.classList.remove('active');
   } else {
      catalogModalButton.classList.toggle('active');
      catalogModal.classList.toggle('active');
   }

});