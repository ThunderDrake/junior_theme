<?php
/* Шаблон карточки команды */
?>

<div class="comand__tab-panel tabs__panel">
  <div class="comand__tab-wrapper">
    <div class="comand__image">
      <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/comand-image.jpg" class="comand__image-image"
        width="660" height="495" alt="Фото сборной">
    </div>
    <div class="comand__info">
      <h2 class="comand__name">Сборная 2014</h2>
      <div class="comand__columns">
        <div class="comand__label">Тренера:</div>
        <div class="comand__content">Абрамов Андрей Александрович,<br> Лазарев Максим Константинович</div>
      </div>
      <div class="comand__columns">
        <div class="comand__label">Турниры:</div>
        <div class="comand__achievement">
          <div class="comand__achievement-item">
            <div class="comand__achievement-place comand__achievement-place--first">I</div>
            <div class="comand__achievement-location">г. Новосибирск 2020 год</div>
            <div class="comand__achievement-name">Лига чемпионов</div>
          </div>
          <div class="comand__achievement-item">
            <div class="comand__achievement-place comand__achievement-place--second">II</div>
            <div class="comand__achievement-location">г. Новосибирск 2020 год</div>
            <div class="comand__achievement-name">Лига чемпионов</div>
          </div>
          <div class="comand__achievement-item">
            <div class="comand__achievement-place comand__achievement-place--third">III</div>
            <div class="comand__achievement-location">г. Новосибирск 2020 год</div>
            <div class="comand__achievement-name">Лига чемпионов</div>
          </div>
          <div class="comand__achievement-item">
            <div class="comand__achievement-place comand__achievement-place--icon">
              <svg class="comand__achievement-icon" width="18" height="18">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#achievement-icon"></use>
              </svg>
            </div>
            <div class="comand__achievement-location">г. Новосибирск 2020 год</div>
            <div class="comand__achievement-name">Лига чемпионов</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
