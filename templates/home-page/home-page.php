<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <?php ct()->template('home-page/parts/hero.php') ?>
  <?php ct()->template('home-page/parts/info.php') ?>
  <?php ct()->template('home-page/parts/why-us.php') ?>
  <?php ct()->template('home-page/parts/advantages.php') ?>
  <?php ct()->template('home-page/parts/form-section.php', [ 'revert' => false, 'form_id' => 'firstForm' ]) ?>
  <?php ct()->template('home-page/parts/steps.php') ?>
  <?php ct()->template('home-page/parts/team.php') ?>
  <?php ct()->template('home-page/parts/hymn.php') ?>
  <?php ct()->template('home-page/parts/schedule.php') ?>
  <?php ct()->template('home-page/parts/form-section.php', [ 'revert' => true, 'form_id' => 'secondForm' ]) ?>
  <?php ct()->template('home-page/parts/news.php') ?>
  <?php ct()->template('home-page/parts/partners.php') ?>
  <?php ct()->template('home-page/parts/reviews.php') ?>
  <?php ct()->template('home-page/parts/faq.php') ?>
  <?php ct()->template('home-page/parts/products.php') ?>
  <?php ct()->template('home-page/parts/contacts.php') ?>

</main>

<?php

ct()->footer();
