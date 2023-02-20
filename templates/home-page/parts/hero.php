<?php
/* Секция Hero */
?>

<section class="hero">
  <div class="container hero__container">
    <div class="hero__content-wrapper">
      <div class="hero__text">
        <span class="hero__suptitle">для мальчиков и девочек от 3 до 17 лет</span>
        <h1 class="hero__title">детский футбольный центр <span>Джуниор</span></h1>
      </div>
      <button class="btn-reset hero__appointment gradient-button"
        data-graph-path="callback">Записаться</button>
    </div>
  </div>
  <video src="<?= ct()->get_static_url() ?>/hero__video-bg.mp4" autoplay muted loop playsinline pip="false" class="hero__video-bg"></video>
</section>
