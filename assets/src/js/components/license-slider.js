import Swiper, { Navigation, Pagination } from 'swiper';

const licenselider = document.querySelector('.license__slider');

Swiper.use([Navigation, Pagination]);
const swiper = new Swiper(licenselider, {
  slidesPerView: 1,
  pagination: {
    el: '.license .swiper-pagination',
    type: 'fraction',
  },
  navigation: {
    nextEl: '.license .swiper-button-next',
    prevEl: '.license .swiper-button-prev',
  },
});
