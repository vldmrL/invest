
$(document).ready(function () {    
    const swiperLatestFullwidth = new Swiper(".latest-news__slider", {
      spaceBetween: 30,
      slidesPerView: 1,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }          
    });
});