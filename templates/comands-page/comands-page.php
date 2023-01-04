<?php
/* Шаблон страницы "Команды" */

ct()->header();
?>

<main class="main">
  <section class="comands-hero">
    <div class="comands-hero__container container">
      <div class="comands-hero__wrapper">
        <h1 class="comands-hero__title">Сборные команды клуба</h1>
      </div>
    </div>
  </section>

  <section class="comand">
    <div class="comand__container container">
      <div class="comand__tab tabs" data-tabs="comands">
        <ul class="comand__tab-nav tabs__nav list-reset">
          <li class="comand__tab-item tabs__nav-item"><button class="comand__tab-btn tabs__nav-btn btn-reset"
              type="button">2010</button></li>
          <li class="comand__tab-item tabs__nav-item"><button class="comand__tab-btn tabs__nav-btn btn-reset"
              type="button">2011</button></li>
          <li class="comand__tab-item tabs__nav-item"><button class="comand__tab-btn tabs__nav-btn btn-reset"
              type="button">2012</button></li>
          <li class="comand__tab-item tabs__nav-item"><button class="comand__tab-btn tabs__nav-btn btn-reset"
              type="button">2013</button></li>
          <li class="comand__tab-item tabs__nav-item"><button class="comand__tab-btn tabs__nav-btn btn-reset"
              type="button">2014</button></li>
          <li class="comand__tab-item tabs__nav-item"><button class="comand__tab-btn tabs__nav-btn btn-reset"
              type="button">2015</button></li>
          <li class="comand__tab-item tabs__nav-item"><button class="comand__tab-btn tabs__nav-btn btn-reset"
              type="button">2016</button></li>
          <li class="comand__tab-item tabs__nav-item"><button class="comand__tab-btn tabs__nav-btn btn-reset"
              type="button">2017</button></li>
        </ul>
        <div class="comand__tab-content tabs__content">
          <div class="comand__tab-panel tabs__panel">
            <div class="comand__tab-wrapper">
              <div class="comand__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/comand-image.jpg" class="comand__image-image" width="660" height="495"
                  alt="Фото сборной">
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
          <div class="comand__tab-panel tabs__panel"></div>
          <div class="comand__tab-panel tabs__panel"></div>
          <div class="comand__tab-panel tabs__panel"></div>
          <div class="comand__tab-panel tabs__panel"></div>
          <div class="comand__tab-panel tabs__panel"></div>
          <div class="comand__tab-panel tabs__panel"></div>
          <div class="comand__tab-panel tabs__panel"></div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php

ct()->footer();
