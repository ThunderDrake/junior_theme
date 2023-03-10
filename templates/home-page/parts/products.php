<?php
/* Секция Products */
global $post;
$products = get_posts(
  [
      'numberposts' => -1,
      'post_type'   => 'products',
      'publish'     => true,
  ]
);
?>

<section class="products" id="production">
  <div class="products__container container">
    <div class="products__wrapper">
      <div class="products__header">
        <h2 class="products__title h2-title">Продукция</h2>
        <div class="products__small-text">Для заказа обращайтесь<br>к администратору вашего филиала</div>
      </div>
      <div class="swiper products__slider slider">
        <div class="swiper-wrapper products__slider-wrapper slider__wrapper">
          <?php foreach($products as $post): ?>
          <?php setup_postdata($post); ?>
          <?php
          $product_thumb_src = kama_thumb_src([ 'w' => 285, 'h' => 285, 'allow' => 'any', 'src' => get_the_post_thumbnail_url(get_the_ID(), 'full'), 'stub_url' => ct()->get_static_url() . '/img/photo-placeholder.png' ], )
          ?>
          <div class="swiper-slide products__item products-item slider__item">
            <div class="products-item__image">
              <img loading="lazy" src="<?= $product_thumb_src ?>"
                class="products-item__image-image" width="285" height="285" alt="<?php the_title() ?>">
            </div>
            <div class="products-item__title"><?php the_title() ?></div>
          </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata() ?>
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
