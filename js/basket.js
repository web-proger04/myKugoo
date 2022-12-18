const productsBtn = document.querySelectorAll('.product-card__icon_basket');
const basketProductList = document.querySelector('.basket__list');
const basket = document.querySelector('.basket');
const basketQuantity = document.querySelector('.basket__quantity');
const fullPrice = document.querySelector('.basket__fullprice');
let price = 0;

const randomId = () => {
   return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
};

const priceWithoutSpaces = (str) => {
   return str.replace(/\s/g, '');
};

const normalPrice = (str) => {
   return String(str).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
};


const plusFullPrice = (currentPrice) => {
   return price += currentPrice;
};

const minusFullPrice = (currentPrice) => {
   return price -= currentPrice;
};

const printFullPrice = () => {
   fullPrice.textContent = `${normalPrice(price)} ₽`;
};

const printQuantity = () => {
   let length = basketProductList.children.length;
   basketQuantity.textContent = length;
   length > 0 ? basket.classList.add('active') : basket.classList.remove('active');
};

const generateCartProduct = (img, title, price, id) => {
   return `

   <li class="basket__item-basket item-basket" data-id="${id}">
      <div class="item-basket__info">
         <div class="item-basket__image">
            <img src="${img}" alt="Kugoo Kirin M4">
         </div>
         <div class="item-basket__desk">
            <p class="item-basket__title">
               ${title}
            </p>
            <span class="item-basket__price">
               ${normalPrice(price)} ₽
            </span>
         </div>
      </div>
      <button class="item-basket__button-reset" type="button" aria-label="Сбросить товар">
         <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
               d="M7.03125 3.59375H6.875C6.96094 3.59375 7.03125 3.52344 7.03125 3.4375V3.59375H12.9688V3.4375C12.9688 3.52344 13.0391 3.59375 13.125 3.59375H12.9688V5H14.375V3.4375C14.375 2.74805 13.8145 2.1875 13.125 2.1875H6.875C6.18555 2.1875 5.625 2.74805 5.625 3.4375V5H7.03125V3.59375ZM16.875 5H3.125C2.7793 5 2.5 5.2793 2.5 5.625V6.25C2.5 6.33594 2.57031 6.40625 2.65625 6.40625H3.83594L4.31836 16.6211C4.34961 17.2871 4.90039 17.8125 5.56641 17.8125H14.4336C15.1016 17.8125 15.6504 17.2891 15.6816 16.6211L16.1641 6.40625H17.3438C17.4297 6.40625 17.5 6.33594 17.5 6.25V5.625C17.5 5.2793 17.2207 5 16.875 5ZM14.2832 16.4062H5.7168L5.24414 6.40625H14.7559L14.2832 16.4062Z"
               fill="#5D6C7B" />
         </svg>
      </button>
   </li>

   `;
};

const deleteProducts = productParent => {
   let id = productParent && productParent.dataset.id;

   if (!id) return;

   const productBtn = document.querySelector(`.product-card__content[data-id="${id}"] .product-card__icon_basket`);

   if (productBtn) {
      productBtn.disabled = false;
      productBtn.classList.remove("product-card__icon_active");
   }

   let currentPrice = parseInt(priceWithoutSpaces(productParent.querySelector(".item-basket__price").textContent));
   minusFullPrice(currentPrice);
   printFullPrice();
   productParent.remove();
   printQuantity();
};


productsBtn.forEach(el => {
   el.closest('.product-card__content').setAttribute('data-id', randomId());
   el.addEventListener('click', (e) => {
      let self = e.currentTarget;
      let parent = self.closest('.product-card__content');
      let id = parent.dataset.id;
      let img = parent.querySelector('.product-card__image img').getAttribute('src');
      let title = parent.querySelector('.product-card__title').textContent;
      let priceNumber = parseInt(priceWithoutSpaces(parent.querySelector('.price-card__numb').textContent));

      plusFullPrice(priceNumber);
      printFullPrice();
      basketProductList.insertAdjacentHTML('afterbegin', generateCartProduct(img, title, priceNumber, id));
      printQuantity();
      self.disabled = true;
      self.classList.add('product-card__icon_active');
   });
});

basketProductList.addEventListener("click", e => {
   const btn = e.target.closest(".item-basket__button-reset");

   if (!btn) return;

   deleteProducts(btn.closest(".item-basket"));
});
