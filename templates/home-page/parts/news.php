<?php
/* Секция News */
global $post;
$news = get_posts(
  [
      'numberposts' => -1,
      'post_type'   => 'news',
      'publish'     => true,
  ]
);
?>

<section class="news" id="news">
  <div class="container news__container">
    <div class="news__title h2-title">Наши новости</div>
    <div class="swiper news__slider slider">
      <div class="swiper-wrapper news__slider-wrapper slider__wrapper">
        <?php foreach($news as $post): ?>
        <?php setup_postdata($post) ?>
        <?php $news_thumb_src = kama_thumb_src([ 'w' => 385, 'h' => 200, 'allow' => 'any', 'src' => get_the_post_thumbnail_url(), 'stub_url' => get_template_directory_uri(get_the_ID(), 'full') . '/assets/img/news/news-item-placeholder.jpg' ], ) ?>
        <div class="swiper-slide news__item news-item slider__item" data-graph-path="<?php the_ID() ?>">
          <div class="news-item__image">
            <img loading="lazy" src="<?= $news_thumb_src ?>"
              class="news-item__image-image" width="385" height="200" alt="<?php the_title() ?>">
          </div>
          <div class="news-item__content">
            <div class="news-item__date"><?= get_field('news_date') ?></div>
            <div class="news-item__title"><?php the_title() ?></div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
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
