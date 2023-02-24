<?php
/* Секция Partners */

$partners = get_posts([
  'numberposts' => -1,
  'post_type'   => 'partners',
  'publish'     => true,
])
?>

<section class="partners" id="partners">
  <div class="container partners__container">
    <div class="partners__wrapper">
      <h2 class="partners__title h2-title">Партнёры</h2>
      <div class="swiper partners__slider slider">
        <div class="swiper-wrapper partners__slider-wrapper slider__wrapper">
          <?php foreach($partners as $post): ?>
          <?php setup_postdata($post) ?>
          <div class="swiper-slide partners__item partners-item slider__item">
            <div class="partners-item__image">
              <img loading="lazy" src="<?= wp_get_attachment_image_url( get_field('partner_image'), 'full' ) ?>"
                class="partners-item__image-image" width="200" height="100" alt="<?php the_title(); ?>">
            </div>
          </div>
          <?php endforeach; ?>
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
  </div>
</section>
