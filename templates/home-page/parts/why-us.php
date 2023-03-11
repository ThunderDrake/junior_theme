<?php
/* Секция Why Us */
$items = get_field('home_why_us', 'option');

if(!$items) {
  return;
}
?>

<section class="why-us" id="why-us">
  <div class="why-us__container container">
    <h2 class="why-us__title h2-title">Почему Джуниор</h2>
    <p class="why-us__subtitle">Cамая крупная футбольная школа за Уралом</p>
    <div class="why-us__list">
      <?php foreach($items as $item): ?>
        <div class="why-us__item">
          <img loading="lazy" src="<?= kama_thumb_src([ 'w' => 248, 'h' => 400, 'allow' => 'any', 'src' => wp_get_attachment_image_url( $item['icon'], 'full' ) ], ) ?>" class="why-us__item-icon"
            width="80" height="80" alt="Иконка элемента">
          <h3 class="why-us__item-title"><?= $item['title'] ?></h3>
          <p class="why-us__item-descr"><?= $item['descr'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
