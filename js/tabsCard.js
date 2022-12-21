const tabsCardBtn = document.querySelectorAll('.tabs-card__item');
const tabsCardItem = document.querySelectorAll('.tabs-card-li');


tabsCardBtn.forEach(onTabCardClick);

function onTabCardClick(item) {
   item.addEventListener('click', function () {
      let tabsCardCurrentBtn = item;
      let tabsCardId = tabsCardCurrentBtn.getAttribute("data-tab");
      let tabsCurrentTab = document.querySelector(tabsCardId);

      if (!tabsCardCurrentBtn.classList.contains('active')) {
         tabsCardBtn.forEach(function (item) {
            item.classList.remove('active');
         });

         tabsCardItem.forEach(function (item) {
            item.classList.remove('active');
         });
      };

      tabsCardCurrentBtn.classList.add('active');
      tabsCurrentTab.classList.add('active');
   });
};

document.querySelector('.tabs-card__item').click();