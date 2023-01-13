<?php
/* Секция FAQ */
$faq = get_field('home_faq', 'option');

if(!$faq) {
  return;
}
?>

<section class="faq" id="faq">
  <div class="faq__container container">
    <div class="faq__wrapper">
      <h2 class="faq__title h2-title">Вопросы и ответы</h2>
      <?php foreach ($faq as $item): ?>
      <div class="accordion faq__accordion">
        <button class="accordion__control" aria-expanded="false">
          <span class="accordion__title"><?= $item['question'] ?></span>
          <span class="accordion__icon">
            <svg class="accordion__icon-icon" width="20" height="20">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#accordion-icon"></use>
            </svg>
          </span>
        </button>
        <div class="accordion__content" aria-hidden="true">
          <p>
            <?= $item['answer'] ?>
          </p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
