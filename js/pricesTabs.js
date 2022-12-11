const pricesTabsButton = document.querySelectorAll('.prices-tabs__button');
const pricesTabsList = document.querySelectorAll('.prices-tabs__list');

pricesTabsButton.forEach(onTabsPricesClick);

function onTabsPricesClick(item) {
   item.addEventListener('click', () => {
      let curentPagesBtn = item;
      let pricesTabId = curentPagesBtn.getAttribute('data-prices-tab');
      let curentPagesTab = document.querySelector(pricesTabId);

      if (!curentPagesBtn.classList.contains('active')) {
         pricesTabsButton.forEach((item) => {
            item.classList.remove('active');
         });

         pricesTabsList.forEach((item) => {
            item.classList.remove('active');
         });
      };

      curentPagesBtn.classList.add('active');
      curentPagesTab.classList.add('active');
   });
};

document.querySelector('.prices-tabs__button:nth-child(1)').click();