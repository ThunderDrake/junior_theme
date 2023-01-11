<?php
/* Шаблон модальных окон сайта */
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
    <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="news">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <article class="graph-modal__content news-item__modal">
        <div class="news-item__date">13 ноября 2022</div>
        <h3 class="news-item__modal-title">Наш клуб заключил соглашение о развитии детского женского футбола с РФС
          и UEFA</h3>
        <p class="news-item__modal-content">
          А ещё интерактивные прототипы заблокированы в рамках своих собственных рациональных ограничений. Имеется
          спорная точка зрения, гласящая примерно следующее: акционеры крупнейших компаний объективно рассмотрены
          соответствующими инстанциями. В частности, сплочённость команды профессионалов обеспечивает актуальность новых
          принципов формирования материально-технической и кадровой базы. Однозначно, действия представителей оппозиции,
          инициированные исключительно синтетически, указаны как претенденты на роль ключевых факторов. Задача
          организации, в особенности же курс на социально-ориентированный национальный проект в значительной степени
          обусловливает важность стандартных подходов. Однозначно, сторонники тоталитаризма в науке формируют глобальную
          экономическую сеть и при этом — в равной степени предоставлены сами себе.
        </p>
      </article>
    </div>
    <?php foreach($reviews as $post): ?>
    <?php setup_postdata($post); ?>
    <?php
      $reviews_src = '';
      error_log( print_r( get_field('review_video_type'), true ) );
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
          <iframe width="560" height="850" src="" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </article>
    </div>
    <?php endforeach; ?>
    <div class="graph-modal__container review__modal" role="dialog" aria-modal="true" data-graph-target="callback">
      <div class="form-section__content">
        <h2 class="form-section__title">Запишитесь на пробную тренеровку</h2>
        <?php ct()->template('home-page/parts/form.php', [ 'id' => 'callback' ]) ?>
      </div>
    </div>
  </div>
</section>
