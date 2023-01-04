import Swiper, { Navigation, Pagination } from 'swiper';

const partnersSlider = document.querySelector('.partners__slider');

Swiper.use([Navigation, Pagination]);
const swiper = new Swiper(partnersSlider, {
  slidesPerView: 'auto',
  spaceBetween: 37,
  pagination: {
    el: '.partners .swiper-pagination',
    type: 'fraction',
  },
  navigation: {
    nextEl: '.partners .swiper-button-next',
    prevEl: '.partners .swiper-button-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    376: {
      slidesPerView: 'auto',
      spaceBetween: 37,
    }
  }
});
