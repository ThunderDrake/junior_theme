import Swiper, { Navigation, Pagination } from 'swiper';

const seasonSlider = document.querySelector('.season__slider');

Swiper.use([Navigation, Pagination]);
const swiper = new Swiper(seasonSlider, {
  slidesPerView: 1,
  pagination: {
    el: '.season .swiper-pagination',
    type: 'fraction',
  },
  navigation: {
    nextEl: '.season .swiper-button-next',
    prevEl: '.season .swiper-button-prev',
  },
});

