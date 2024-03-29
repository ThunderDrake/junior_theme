<?php
/* Шаблон модальных окон сайта */
global $post;
$news = get_posts(
  [
      'numberposts' => -1,
      'post_type'   => 'news',
      'publish'     => true,
  ]
);
$team_members = get_posts(
  [
      'numberposts' => -1,
      'post_type'   => 'team',
      'publish'     => true,
  ]
);
$reviews = get_posts(
  [
      'numberposts' => -1,
      'post_type'   => 'reviews',
      'publish'     => true,
  ]
);
?>

<section class="modals">
  <div class="graph-modal">
    <!-- <div class="graph-modal__bg"></div> -->
    <?php foreach($team_members as $post): ?>
    <?php setup_postdata($post); ?>
    <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="<?= get_the_ID() ?>">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <div class="graph-modal__content team-member__modal">
        <div class="team__big-item team-member team-member--big">
          <div class="team-member__image">
            <img loading="lazy" src="<?= get_post_thumb(['w' => 590, 'h' => 590]) ?>" class="team-member__image-image" width="590"
              height="590" alt="<?php the_title() ?>">
          </div>
          <div class="team-member__content">
            <?php if(wp_get_post_terms(get_the_ID(), 'position')): ?>
            <div class="team-member__label"><?= wp_get_post_terms(get_the_ID(), 'position')[0]->name ?></div>
            <?php endif; ?>
            <div class="team-member__title"><?php the_title() ?></div>
            <div class="team-member__descr">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata() ?>
    <?php foreach($news as $post): ?>
    <?php setup_postdata($post); ?>
    <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="<?php the_ID() ?>">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <article class="graph-modal__content news-item__modal">
        <div class="news-item__date"><?= get_field('news_date') ?></div>
        <h3 class="news-item__modal-title"><?php the_title() ?></h3>
        <p class="news-item__modal-content">
          <?php the_content() ?>
        </p>
      </article>
    </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata() ?>
    <?php foreach($reviews as $post): ?>
    <?php setup_postdata($post); ?>
    <?php
      $reviews_src = '';
      if('yotube' == get_field('review_video_type')) {
        $reviews_src = get_field('review_video_link');
      } else if('source' == get_field('review_video_type')) {
        $reviews_src = get_field('review_video_source');
      } else {
        $reviews_src = 'https://www.youtube.com/embed/eGi447l2_mM';
      }
    ?>
    <div class="graph-modal__container review__modal" role="dialog" aria-modal="true" data-graph-target="<?php the_ID() ?>">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <article class="graph-modal__content review-item__modal">
        <div class="modal__video" data-video="<?= $reviews_src ?>">
          <video width="560" height="850" src="" controls style="border-radius: 40px"></video>
        </div>
      </article>
    </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata() ?>
    <div class="graph-modal__container review__modal" role="dialog" aria-modal="true" data-graph-target="callback">
      <div class="form-section__content">
        <h2 class="form-section__title">Запишитесь на пробную тренировку</h2>
        <?php ct()->template('home-page/parts/form.php', [ 'id' => 'callback' ]) ?>
      </div>
    </div>

    <div class="graph-modal__container modal__height" role="dialog" aria-modal="true" data-graph-target="info__item-1">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <div class="graph-modal__content team-member__modal">
        <div class="team__big-item team-member team-member--big">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/fcloko.png" class="team-member__image-image" width="590" alt="<?php the_title() ?>">
          <!-- <div class="team-member__image">
          </div> -->
        </div>
      </div>
    </div>

    <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="info__item-3">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <div class="graph-modal__content team-member__modal">
        <div class="team__big-item team-member team-member--big">
          <div class="team-member__image license">
            <div class="swiper license__slider slider">
              <div class="swiper-wrapper license__slider-wrapper slider__wrapper">
                <div class="swiper-slide license__item license-item slider__item">
                  <div class="license-item__image" style="display: flex;">
                    <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/license/license-1.jpg"
                      class="license-item__image-image" width="590" height="285" alt="" style="margin: 0 auto;">
                  </div>
                </div>
                <div class="swiper-slide license__item license-item slider__item">
                  <div class="license-item__image" style="display: flex;">
                    <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/license/license-2.jpg"
                      class="license-item__image-image" width="590" height="285" alt="" style="margin: 0 auto;">
                  </div>
                </div>
                <div class="swiper-slide license__item license-item slider__item">
                  <div class="license-item__image" style="display: flex;">
                    <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/license/license-3.jpg"
                      class="license-item__image-image" width="590" height="285" alt="" style="margin: 0 auto;">
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
          <div class="team-member__content">
            <div class="team-member__title">Государственная лицензия на образовательную деятельность</div>
            <div class="team-member__descr">
              <p><strong>Что это значит при выборе секции:</strong></p>
              <p>1.  Государственная лицензия – показатель качества услуг, предоставляемых нашей школой.</p>
              <p><strong>Для родителей:</strong></p>
              <p>1. Вы можете оформить и получить налоговый вычет за обучение Вашего ребенка в нашей школе. Это 13% от стоимости обучения, Максимальный размер вычета на одного ребенка составляет 50 тыс.руб. (6 500 руб.к возврату)</p>
              <p>2. Оплата материнским капиталом на обучение детей у нас.</p>
              <p>Для уточнения всех подробностей обращайтесь к администраторам в наших филиалах.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="graph-modal__container modal__height" role="dialog" aria-modal="true" data-graph-target="info__item-4">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <div class="graph-modal__content team-member__modal">
        <div class="season" style="padding: 30px">
          <div class="swiper season__slider slider">
            <div class="swiper-wrapper season__slider-wrapper slider__wrapper">
              <div class="swiper-slide season__item season-item slider__item">
                <div class="season-item__image" style="display: flex;">
                  <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/season/season-1.jpg"
                    class="season-item__image-image" width="590" height="285" alt="" style="margin: 0 auto;">
                </div>
              </div>
              <div class="swiper-slide season__item season-item slider__item">
                <div class="season-item__image" style="display: flex;">
                  <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/season/season-2.jpg"
                    class="season-item__image-image" width="590" height="285" alt="" style="margin: 0 auto;">
                </div>
              </div>
              <div class="swiper-slide season__item season-item slider__item">
                <div class="season-item__image" style="display: flex;">
                  <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/season/season-3.jpg"
                    class="season-item__image-image" width="590" height="285" alt="" style="margin: 0 auto;">
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
      </div>
    </div>
  </div>
</section>
