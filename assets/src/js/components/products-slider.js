import Swiper, { Navigation, Pagination } from 'swiper';

const newsSlider = document.querySelector('.products__slider');

Swiper.use([Navigation, Pagination]);
  const swiper = new Swiper(newsSlider, {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
      el: '.products .swiper-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.products .swiper-button-next',
      prevEl: '.products .swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1.2,
        slidesOffsetBefore: 20,
        slidesOffsetAfter: 20,
      },
      376: {
        slidesPerView: 1.5,
        slidesOffsetBefore: 20,
        slidesOffsetAfter: 20,
      },
      579: {
        slidesPerView: 2.2,
        slidesOffsetBefore: 40,
        slidesOffsetAfter: 40,
      },
      769: {
        slidesPerView: 3,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
      },
      1025: {
        slidesPerView: 4,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
      }
    }
  });
