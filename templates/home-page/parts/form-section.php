<?php
/* Секция с Формой */
$revert = $args['revert'] ? 'form-section__container--revert' : '';
?>

<section class="form-section">

  <div class="form-section__container container <?= $revert ?>">

    <div class="form-section__image">
      <?php if(!$args['revert']): ?>
        <picture>
          <source srcset="<?= ct()->get_static_url() ?>/img/form-section/form-section__image-1.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/form-section/form-section__image-1.jpg"
            class="form-section__image-image" width="660" height="660" alt="Дети тренируются на футбольном поле">
        </picture>
      <?php else: ?>
        <picture>
          <source srcset="<?= ct()->get_static_url() ?>/img/form-section/form-section__image-2.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/form-section/form-section__image-2.jpg" class="form-section__image-image"
            width="660" height="660" alt="Дети тренируются на футбольном поле">
        </picture>
      <?php endif; ?>
    </div>
    <div class="form-section__content">
      <h2 class="form-section__title">Запишитесь на пробную тренировку</h2>
      <?php ct()->template('home-page/parts/form.php', [ 'id' => $args['form_id'] ]) ?>
    </div>
  </div>
</section>
