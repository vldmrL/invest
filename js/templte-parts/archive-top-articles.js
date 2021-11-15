
$(document).ready(function () {    
    const swiperTopArticles = new Swiper(".top-articles__slider", {
      spaceBetween: 30,
      slidesPerView: 4,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }          
    });
});