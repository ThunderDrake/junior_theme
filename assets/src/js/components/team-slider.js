import Swiper, { Navigation, Pagination } from 'swiper';

const teamSlider = document.querySelector('.team__slider');

Swiper.use([Navigation, Pagination]);
const swiper = new Swiper(teamSlider, {
  slidesPerView: 4,
  spaceBetween: 20,
  pagination: {
    el: '.team .swiper-pagination',
    type: 'fraction',
  },
  navigation: {
    nextEl: '.team .swiper-button-next',
    prevEl: '.team  .swiper-button-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1.15,
      spaceBetween: 10,
    },
    568: {
      slidesPerView: 2.25,
      spaceBetween: 10,
    },
    769: {
      slidesPerView: 3,
      spaceBetween: 10
    },
    1025: {
      slidesPerView: 4,
      spaceBetween: 20,
    }
  }
});
