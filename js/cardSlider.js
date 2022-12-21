const cardSliderMiniatures = new Swiper(".miniatures", {
   loop: true,
   spaceBetween: 10,
   slidesPerView: 7,
   freeMode: true,
   watchSlidesProgress: true,
});
const cardSliderBig = new Swiper(".slider-card", {
   loop: true,
   spaceBetween: 10,
   thumbs: {
      swiper: cardSliderMiniatures,
   },
});