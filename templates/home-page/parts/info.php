<?php
/* Секция Info */
?>

<section class="info" id="info">
  <div class="info__container container">
    <div class="info__slider swiper slider">
      <div class="info__wrapper swiper-wrapper slider__wrapper">
        <div class="info__item swiper-slide slider__item">
          <div class="info__item-wrapper">
            <svg class="info__item-icon" width="40" height="40">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#info__item-icon-1"></use>
            </svg>
            <button class="info__item-title btn-reset hover-gradient" data-graph-path="info__item-1"><span
                data-text="Сотрудничество с&nbsp;ФК Локомотив&nbsp;→">Сотрудничество с ФК Локомотив →</span></button>
          </div>
        </div>
        <div class="info__item swiper-slide slider__item">
          <div class="info__item-wrapper">
            <svg class="info__item-icon" width="40" height="40">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#info__item-icon-2"></use>
            </svg>
            <a class="info__item-title btn-reset hover-gradient" href="<?= ct()->get_static_url() ?>/junior-contract.pdf" download target="_blank"><span
                data-text="Договор оказания услуг&nbsp;→">Договор оказания услуг →</span></a>
          </div>
        </div>
        <div class="info__item swiper-slide slider__item">
          <div class="info__item-wrapper">
            <svg class="info__item-icon" width="40" height="40">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#info__item-icon-3"></use>
            </svg>
            <button class="info__item-title btn-reset hover-gradient" data-graph-path="info__item-3"><span
                data-text="Наша лицензия&nbsp;→">Наша лицензия →</span></button>
          </div>
        </div>
        <div class="info__item swiper-slide slider__item">
          <div class="info__item-wrapper">
            <svg class="info__item-icon" width="40" height="40">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#info__item-icon-4"></use>
            </svg>
            <button class="info__item-title btn-reset hover-gradient" data-graph-path="info__item-4"><span
                data-text="Условия абонеметов&nbsp;→">Условия<br>абонеметов →</span></button>
          </div>
        </div>
      </div>
    </div>
    <div class="slider__controlls">
      <div class="swiper-button-prev slider__button slider__button--prev">
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="1" y="0.5" width="23" height="23" rx="11.5" stroke="currentColor" />
          <path d="M14 8L10 12L14 16" stroke="currentColor" />
        </svg>
      </div>
      <div class="swiper-pagination slider__fraction"></div>
      <div class="swiper-button-next slider__button slider__button--next">
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="24" y="23.5" width="23" height="23" rx="11.5" transform="rotate(-180 24 23.5)"
            stroke="currentColor" />
          <path d="M11 16L15 12L11 8" stroke="currentColor" />
        </svg>
      </div>
    </div>
  </div>
</section>
