<?php
/* Шаблон страницы "Спасибо" */

ct()->header();
?>
<main class="main thanks" style="flex: 1; padding-top: var(--header-height);">

  <div class="thanks__container container">
    <div class="thanks__content">
      <div class="logo thanks__logo">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/logo.svg" class="thanks__image" width="100"
          height="128" alt="ФК Джуниор логотип школы">
      </div>
      <h1 class="thanks__title">Спасибо!</h1>
      <p class="thanks__descr">Наш менеджер свяжется с вами в ближайшее время</p>
      <a class="thanks__button gradient-button" href="/">Вернуться на главную</a>
      <video src="<?= ct()->get_static_url() ?>/thanks__video.mp4" controls autoplay muted loop playsinline pip="false"
        class="thanks__video"></video>
    </div>
  </div>

</main>

<?php

ct()->footer();
