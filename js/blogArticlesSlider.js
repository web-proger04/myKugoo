const blogArticlesSlider = new Swiper('.slider-blog', {
   loop: true,
   navigation: {
      nextEl: '.slider-blog__button'
   },
   spaceBetween: 30,
   slidesPerView: 3,
   speed: 480,
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