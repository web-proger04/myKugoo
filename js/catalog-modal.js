const catalogModal = document.querySelector('.catalog-modal');
const catalogBtn = document.querySelector('.middle-header__button');

document.addEventListener('click', (event) => {
   const eventBtn = event.target.closest('.middle-header__button');

   if (!eventBtn) return handleCatalog(catalogBtn, catalogModal, false);

   const isActive = eventBtn.classList.contains('active');

   handleCatalog(eventBtn, catalogModal, !isActive)
});

const handleCatalog = (btn, catalog, force) => {
   btn.classList.toggle('active', force);
   catalog.classList.toggle('active', force)
};