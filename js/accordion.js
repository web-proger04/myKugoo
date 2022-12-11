const accordionItems = document.querySelectorAll('.accordion__item');

accordionItems.forEach(function (accordionItem) {
   const accordionHeader = accordionItem.querySelector('.accordion__header');
   accordionHeader.addEventListener('click', function () {
      accordionItems.forEach(function (item) {
         if (item !== accordionItem) {
            item.classList.remove('active');
         }
      });
      accordionItem.classList.toggle('active');
   });
});