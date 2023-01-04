import Swiper, { Navigation, Pagination } from 'swiper';

const newsSlider = document.querySelector('.news__slider');

Swiper.use([Navigation, Pagination]);
  const swiper = new Swiper(newsSlider, {
    slidesPerView: 3,
    spaceBetween: 22,
    pagination: {
      el: '.news .swiper-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.news .swiper-button-next',
      prevEl: '.news .swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1.2,
        slidesOffsetBefore: 20,
        slidesOffsetAfter: 20,
      },
      579: {
        slidesPerView: 1.85,
        slidesOffsetBefore: 40,
        slidesOffsetAfter: 40,
      },
      769: {
        slidesPerView: 3,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
      }
    }
  });
