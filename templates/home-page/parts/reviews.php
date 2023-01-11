<?php
/* Секция Reviews */

$reviews = get_posts(
  [
      'numberposts' => -1,
      'post_type'   => 'reviews',
      'publish'     => true,
  ]
);
?>

<section class="reviews" id="reviews">
  <div class="reviews__container container">
    <div class="reviews__header">
      <h2 class="reviews__title h2-title">Отзывы</h2>
      <a class="reviews__link gradient-button" href="/">Читать отзывы на flamp.ru →</a>
    </div>
    <div class="swiper reviews__slider slider">
      <div class="swiper-wrapper reviews__slider-wrapper slider__wrapper">
        <?php foreach($reviews as $post): ?>
        <?php setup_postdata($post); ?>
        <div class="swiper-slide reviews__item review-item slider__item" data-graph-path="<?php the_ID(); ?>">
          <img loading="lazy" src="<?= kama_thumb_src([ 'w' => 248, 'h' => 400, 'allow' => 'any', 'src' => wp_get_attachment_image_url( get_field('review_image'), 'full' ) ], ) ?>"
            class="review-item__image" width="248" height="400" alt="<?php the_title() ?>">
          <span class="review-item__name"><?php the_title() ?></span>
          <div class="review-item__hover">
            <svg class="review-item__hover-icon" width="80" height="80">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#play-button"></use>
            </svg>
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
    <a class="reviews__link reviews__link--mobile gradient-button" href="/">Читать отзывы на flamp.ru →</a>
  </div>
</section>
