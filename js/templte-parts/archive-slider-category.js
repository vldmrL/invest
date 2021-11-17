$(document).ready(function () {    
    const swiperSliderCategory = new Swiper(".slider-category__slider", {
      spaceBetween: 30,
      speed: 600,
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 2000,
      }
      // navigation: {
      //   nextEl: ".swiper-button-next",
      //   prevEl: ".swiper-button-prev",
      // }          
    });
});