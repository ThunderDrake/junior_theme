import Swiper, { Navigation, Pagination } from 'swiper';

const reviewsSlider = document.querySelector('.reviews__slider');

Swiper.use([Navigation, Pagination]);
const swiper = new Swiper(reviewsSlider, {
  slidesPerView: 5,
  spaceBetween: 20,
  pagination: {
    el: '.reviews .swiper-pagination',
    type: 'fraction',
  },
  navigation: {
    nextEl: '.reviews .swiper-button-next',
    prevEl: '.reviews .swiper-button-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1.5,
      slidesOffsetBefore: 20,
      slidesOffsetAfter: 20,
    },
    568: {
      slidesPerView: 2.75,
      slidesOffsetBefore: 40,
      slidesOffsetAfter: 40,
    },
    769: {
      slidesPerView: 3,
      slidesOffsetBefore: 40,
      slidesOffsetAfter: 40,
    },
    1025: {
      slidesPerView: 5,
      slidesOffsetBefore: 0,
      slidesOffsetAfter: 0,
    }
  }
});
