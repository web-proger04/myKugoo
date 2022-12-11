const sliderReviews = new Swiper('.slider-reviews', {
   loop: true,
   navigation: {
      nextEl: '.slider-reviews__next'
   },
   speed: 480,
   spaceBetween: 30,
   slidesPerView: 3,

   breakpoints: {
      // when window width is >= 320px
      320: {
         slidesPerView: 2,
         spaceBetween: 15,
      },
      480: {
         slidesPerView: 2,
         spaceBetween: 30,
      },
      640: {
         slidesPerView: 3,
         spaceBetween: 30,
      }
   }
});