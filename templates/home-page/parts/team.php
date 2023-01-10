<?php
/* Секция Team */

$pinned_member = get_pinned_member_post();
$team_members = get_posts(
  [
      'numberposts' => -1,
      'post_type'   => 'team',
      'publish'     => true,
  ]
);
$big_member_post_obj = $pinned_member ?: $team_members[0];
$big_member_position_obj = wp_get_post_terms($big_member_post_obj->ID, 'position')[0];
?>

<section class="team" id="team">
  <div class="team__container container">
    <div class="team__wrapper">
      <h2 class="team__title h2-title">Наша команда</h2>
      <div class="team__big-item team-member team-member--big">
        <div class="team-member__image">
          <img loading="lazy" src="<?= kama_thumb_src([ 'w' => 590, 'h' => 590, 'allow' => 'any', 'src' => get_the_post_thumbnail_url($big_member_post_obj) ], ) ?>"
            class="team-member__image-image" width="590" height="590" alt="<?= $big_member_post_obj->post_title ?>">
        </div>
        <div class="team-member__content">
          <div class="team-member__label"><?= $big_member_position_obj->name ?></div>
          <div class="team-member__title"><?= $big_member_post_obj->post_title ?></div>
          <div class="team-member__descr">
            <?= wpautop($big_member_post_obj->post_content) ?>
          </div>
        </div>
      </div>
      <div class="swiper team__slider slider">
        <div class="swiper-wrapper team__slider-wrapper slider__wrapper">
          <?php
          $team_members_filter = get_posts(
            [
                'numberposts' => -1,
                'post_type'   => 'team',
                'publish'     => true,
                'exclude' => $big_member_post_obj->ID
            ]
          );

          foreach($team_members_filter as $post):
            setup_postdata( $post );
          ?>
          <div class="swiper-slide team__item team-member slider__item">
            <div class="team-member__image">
              <img loading="lazy" src="<?= get_post_thumb(['w' => 285, 'h' => '285']) ?>"
                class="team-member__image-image" width="285" height="285" alt="<?php the_title(); ?>">
            </div>
            <div class="team-member__content">
              <?php if(wp_get_post_terms(get_the_ID(), 'position')): ?>
              <div class="team-member__label"><?= wp_get_post_terms(get_the_ID(), 'position')[0]->name ?></div>
              <?php endif; ?>
              <div class="team-member__title"><?php the_title() ?></div>
              <button class="btn-reset team-member__button hover-gradient" data-graph-path="<?= get_the_ID() ?>"><span
                  data-text="Подробнее →">Подробнее →</span></button>
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
