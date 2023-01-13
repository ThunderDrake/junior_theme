<?php
/* Секция Comand */
global $post;
$comands = get_posts(
  [
      'numberposts' => -1,
      'post_type'   => 'comands',
      'publish'     => true,
  ]
);
?>

<section class="comand">
  <div class="comand__container container">
    <div class="comand__tab tabs" data-tabs="comands">
      <ul class="comand__tab-nav tabs__nav list-reset">
        <?php foreach ($comands as $comand): ?>
        <li class="comand__tab-item tabs__nav-item"><button class="comand__tab-btn tabs__nav-btn btn-reset"
            type="button"><?= $comand->post_title ?></button></li>
        <?php endforeach; ?>
      </ul>
      <div class="comand__tab-content tabs__content">
        <?php foreach ($comands as $post): ?>
          <?php setup_postdata( $post ) ?>
          <?php ct()->template('comands-page/parts/comand-card.php') ?>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>
