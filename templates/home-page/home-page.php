<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <section class="hero">
    <div class="container hero__container">
      <div class="hero__content-wrapper">
        <div class="hero__text">
          <span class="hero__suptitle">для мальчиков и девочек от 3 до 17 лет</span>
          <h1 class="hero__title">детский футбольный центр <span>Джуниор</span></h1>
        </div>
        <button class="btn-reset hero__appointment gradient-button"
          data-graph-path="appointment-modal">Записаться</button>
      </div>
    </div>
  </section>

  <section class="info" id="info">
    <div class="info__container container">
      <div class="info__slider swiper slider">
        <div class="info__wrapper swiper-wrapper slider__wrapper">
          <div class="info__item swiper-slide slider__item">
            <div class="info__item-wrapper">
              <svg class="info__item-icon" width="40" height="40">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#info__item-icon-1"></use>
              </svg>
              <button class="info__item-title btn-reset hover-gradient" data-graph-path="info__item-1"><span
                  data-text="Сотрудничество с&nbsp;ФК Локомотив&nbsp;→">Сотрудничество с ФК Локомотив →</span></button>
            </div>
          </div>
          <div class="info__item swiper-slide slider__item">
            <div class="info__item-wrapper">
              <svg class="info__item-icon" width="40" height="40">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#info__item-icon-2"></use>
              </svg>
              <button class="info__item-title btn-reset hover-gradient" data-graph-path="info__item-2"><span
                  data-text="Договор оказания услуг&nbsp;→">Договор оказания услуг →</span></button>
            </div>
          </div>
          <div class="info__item swiper-slide slider__item">
            <div class="info__item-wrapper">
              <svg class="info__item-icon" width="40" height="40">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#info__item-icon-3"></use>
              </svg>
              <button class="info__item-title btn-reset hover-gradient" data-graph-path="info__item-3"><span
                  data-text="Наша лицензия&nbsp;→">Наша лицензия →</span></button>
            </div>
          </div>
          <div class="info__item swiper-slide slider__item">
            <div class="info__item-wrapper">
              <svg class="info__item-icon" width="40" height="40">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#info__item-icon-4"></use>
              </svg>
              <button class="info__item-title btn-reset hover-gradient" data-graph-path="info__item-4"><span
                  data-text="Условия абонеметов&nbsp;→">Условия<br>абонеметов →</span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="slider__controlls">
        <div class="swiper-button-prev slider__button slider__button--prev">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="0.5" width="23" height="23" rx="11.5" stroke="currentColor" />
            <path d="M14 8L10 12L14 16" stroke="currentColor" />
          </svg>
        </div>
        <div class="swiper-pagination slider__fraction"></div>
        <div class="swiper-button-next slider__button slider__button--next">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="24" y="23.5" width="23" height="23" rx="11.5" transform="rotate(-180 24 23.5)"
              stroke="currentColor" />
            <path d="M11 16L15 12L11 8" stroke="currentColor" />
          </svg>
        </div>
      </div>
    </div>
  </section>

  <section class="why-us">
    <div class="why-us__container container">
      <h2 class="why-us__title h2-title">Почему Джуниор</h2>
      <div class="why-us__list">
        <div class="why-us__item">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/why-us/why-us__icon-1.svg" class="why-us__item-icon" width="80" height="80"
            alt="Иконка элемента">
          <h3 class="why-us__item-title">Школа жизниШкола жизни</h3>
          <p class="why-us__item-descr">Мы не просто секция. Для учеников мы являемся наставниками и друзьями
            одновременно не только на площадке, но и за её пределамиМы не просто секция. Для учеников мы являемся
            наставниками и друзьями одновременно не только на площадке, но и за её пределами</p>
        </div>
        <div class="why-us__item">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/why-us/why-us__icon-1.svg" class="why-us__item-icon" width="80" height="80"
            alt="Иконка элемента">
          <h3 class="why-us__item-title">Школа жизни</h3>
          <p class="why-us__item-descr">Мы не просто секция. Для учеников мы являемся</p>
        </div>
        <div class="why-us__item">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/why-us/why-us__icon-1.svg" class="why-us__item-icon" width="80" height="80"
            alt="Иконка элемента">
          <h3 class="why-us__item-title">Школа жизни</h3>
          <p class="why-us__item-descr">Мы не просто секция. Для учеников мы являемся наставниками и друзьями
            одновременно не только на площадке, но и за её пределами</p>
        </div>
        <div class="why-us__item">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/why-us/why-us__icon-1.svg" class="why-us__item-icon" width="80" height="80"
            alt="Иконка элемента">
          <h3 class="why-us__item-title">Школа жизни</h3>
          <p class="why-us__item-descr">Мы не просто секция. Для учеников мы являемся наставниками и друзьями
            одновременно не только на площадке, но и за её пределами</p>
        </div>
        <div class="why-us__item">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/why-us/why-us__icon-1.svg" class="why-us__item-icon" width="80" height="80"
            alt="Иконка элемента">
          <h3 class="why-us__item-title">Школа жизни</h3>
          <p class="why-us__item-descr">Мы не просто секция. Для учеников мы являемся наставниками и друзьями
            одновременно не только на площадке, но и за её пределами</p>
        </div>
        <div class="why-us__item">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/why-us/why-us__icon-1.svg" class="why-us__item-icon" width="80" height="80"
            alt="Иконка элемента">
          <h3 class="why-us__item-title">Школа жизни</h3>
          <p class="why-us__item-descr">Мы не просто секция. Для учеников мы являемся наставниками и друзьями
            одновременно не только на площадке, но и за её пределами</p>
        </div>
        <div class="why-us__item">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/why-us/why-us__icon-1.svg" class="why-us__item-icon" width="80" height="80"
            alt="Иконка элемента">
          <h3 class="why-us__item-title">Школа жизни</h3>
          <p class="why-us__item-descr">Мы не просто секция. Для учеников мы являемся наставниками и друзьями
            одновременно не только на площадке, но и за её пределами</p>
        </div>
        <div class="why-us__item">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/why-us/why-us__icon-1.svg" class="why-us__item-icon" width="80" height="80"
            alt="Иконка элемента">
          <h3 class="why-us__item-title">Школа жизни</h3>
          <p class="why-us__item-descr">Мы не просто секция. Для учеников мы являемся наставниками и друзьями
            одновременно не только на площадке, но и за её пределами</p>
        </div>
        <div class="why-us__item">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/why-us/why-us__icon-1.svg" class="why-us__item-icon" width="80" height="80"
            alt="Иконка элемента">
          <h3 class="why-us__item-title">Школа жизни</h3>
          <p class="why-us__item-descr">Мы не просто секция. Для учеников мы являемся наставниками и друзьями
            одновременно не только на площадке, но и за её пределами</p>
        </div>
      </div>
    </div>
  </section>

  <section class="advantages" id="advantages">
    <div class="advantages__container container">
      <div class="advantages__wrapper">
        <div class="advantages__item">
          <div class="advantages__item-number">2000+</div>
          <div class="advantages__item-title">Учеников</div>
        </div>
        <div class="advantages__item">
          <div class="advantages__item-number">30</div>
          <div class="advantages__item-title">Филиалов</div>
        </div>
        <div class="advantages__item">
          <div class="advantages__item-number">2018</div>
          <div class="advantages__item-title">Год основания</div>
        </div>
      </div>
    </div>
  </section>

  <section class="form-section">

    <div class="form-section__container container">

      <div class="form-section__image">

        <picture>
          <source srcset="<?= ct()->get_static_url() ?>/img/form-section/form-section__image-1.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/form-section/form-section__image-1.jpg" class="form-section__image-image"
            width="660" height="660" alt="Дети тренируются на футбольном поле">
        </picture>

      </div>
      <div class="form-section__content">
        <h2 class="form-section__title">Запишитесь на пробную тренеровку</h2>
        <form action="#" class="form-section__form form" id="first-form">
          <label class="form__label">
            <input type="text" name="Name" class="input-reset form__input form__input--name" placeholder="Имя ребенка">
          </label>
          <label class="form__label">
            <input type="tel" name="Phone" class="input-reset form__input form__input--phone"
              placeholder="+7 (999) 999-99-99">
          </label>
          <label class="form__label form__label--50 mr-10">
            <select name="Year" class="input-reset form__input form__input--year custom-select"
              data-placeholder="Год рождения">
              <option value="">Год рождения</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
            </select>
          </label>
          <label class="form__label form__label--50">
            <select name="Place" class="input-reset form__input form__input--place custom-select"
              data-placeholder="Место тренировки">
              <option value="">Место тренировки</option>
              <option value="Место 1">Место 1</option>
              <option value="Место 2">Место 2</option>
              <option value="Место 3">Место 3</option>
              <option value="Место 4">Место 4</option>
              <option value="Место 5">Место 5</option>
            </select>
          </label>
          <button class="btn-reset form__btn gradient-button">Записаться</button>
        </form>
      </div>
    </div>
  </section>

  <section class="steps">
    <div class="steps__container container">
      <h2 class="steps__title h2-title">Этапы развития в клубе</h2>
      <div class="steps__grid">
        <article class="steps__item step step--large">
          <div class="step__header">
            <div class="step__label">Этап  1</div>
            <div class="step__icon">
              <svg class="step__icon-svg" width="40" height="40">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#step-icon"></use>
              </svg>
            </div>
          </div>
          <h3 class="step__title">Пробное занятие</h3>
          <p class="step__descr">На пробном занятии тренер определяет уровень подготовки ребенка и физические данные.
            Внимательно разделяет по возрастным категориям и навыкам. И определяет в подгруппу. </p>
          <div class="step__full-info">
            <p>Мы тщательно подходим к атмосфере в команде. Детям должно быть комфортно заниматься вместе. Поэтому,
              грамотное разделение по возрастным группам — особо важная задача.</p>
            <p>С трех лет дети уже начинают участвовать в наших внутренних турнирах-фестивалях. </p>
          </div>
        </article>
        <article class="steps__item step step--small">
          <div class="step__header">
            <div class="step__label">Этап  2</div>
            <div class="step__icon">
              <svg class="step__icon-svg" width="40" height="40">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#step-icon"></use>
              </svg>
            </div>
          </div>
          <h3 class="step__title">Сборные клуба</h3>
          <p class="step__descr">С шести лет более опытные и перспективные ребята попадают в сборные клуба, согласно
            своего возраст.</p>
          <div class="step__full-info">
            <p>Их уже ждут региональные турниры. Первенство города. И множество других турниров. Здесь родитель уже
              понимает, что футбол в их жизни становится N1.</p>
          </div>
        </article>
        <article class="steps__item step step--small">
          <div class="step__header">
            <div class="step__label">Этап  3</div>
            <div class="step__icon">
              <svg class="step__icon-svg" width="40" height="40">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#step-icon"></use>
              </svg>
            </div>
          </div>
          <h3 class="step__title">Просмотр тренировок</h3>
          <p class="step__descr">Тренировки сборных команд всегда просматривает спортивный директор Академии «Локомотив»
            (Москва) в видео-формате.</p>
          <div class="step__full-info">
            <p>Лучших, по нашему обоюдному решению, приглашают на просмотр и недельный микроцикл в Москву, где дети
              раскрываются и еще больше проявляют себя, свои таланты и профессиональные навыки.</p>
          </div>
        </article>
        <article class="steps__item step step--large">
          <div class="step__header">
            <div class="step__label">Этап  4</div>
          </div>
          <h3 class="step__title">Большой футбол</h3>
          <p class="step__descr">А дальше появляется шанс у каждого попасть в большой футбол и стать звездой мирового
            уровня!</p>
        </article>
      </div>
      <a class="steps__link gradient-button" href="/commands.html/">Сборные команды клуба</a>
    </div>
  </section>

  <section class="team" id="team">
    <div class="team__container container">
      <div class="team__wrapper">
        <h2 class="team__title h2-title">Наша команда</h2>
        <div class="team__big-item team-member team-member--big">
          <div class="team-member__image">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/team/team-member-1.jpg" class="team-member__image-image" width="590"
              height="590" alt="Новоградская Ксения Игоревна">
          </div>
          <div class="team-member__content">
            <div class="team-member__label">Директор</div>
            <div class="team-member__title">Новоградская Ксения Игоревна</div>
            <div class="team-member__descr">
              <p>
                В футбол я пришла около шести лет назад (тогда работая в другом клубе).
                Клубу Джуниор — четвертый год, за эти четыре года все клиенты нашей школы для меня стали словно родные
                люди. А дети наших клиентов — словно это мои дети.
                Я очень дорожу нашим великолепным коллективом и на столько счастлива, что все вместе мы смогли стать
                школой НОМЕР ОДИН в Новосибирске! Наши одни из главных ценностей: открытость и вовлеченность.
              </p>
              <p>
                Мы вегда говорим:<br>
                «Все лучшее — детям!<br>
                За качество отвечаем!»
              </p>
              <p>
                И это действительно так! Приходите и сами все увидите!
              </p>
            </div>
          </div>
        </div>
        <div class="swiper team__slider slider">
          <div class="swiper-wrapper team__slider-wrapper slider__wrapper">
            <div class="swiper-slide team__item team-member slider__item">
              <div class="team-member__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/team/team-member-2.jpg" class="team-member__image-image" width="285"
                  height="285" alt="Новоградский Алексей Петрович">
              </div>
              <div class="team-member__content">
                <div class="team-member__label">Директор по развитию</div>
                <div class="team-member__title">Новоградский Алексей Петрович</div>
                <button class="btn-reset team-member__button hover-gradient" data-graph-path="team-member-modal"><span
                    data-text="Подробнее →">Подробнее →</span></button>
              </div>
            </div>
            <div class="swiper-slide team__item team-member slider__item">
              <div class="team-member__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/team/team-member-2.jpg" class="team-member__image-image" width="285"
                  height="285" alt="Новоградский Алексей Петрович">
              </div>
              <div class="team-member__content">
                <div class="team-member__label">Директор по развитию</div>
                <div class="team-member__title">Новоградский Алексей Петрович</div>
                <button class="btn-reset team-member__button hover-gradient" data-graph-path="team-member-modal"><span
                    data-text="Подробнее →">Подробнее →</span></button>
              </div>
            </div>
            <div class="swiper-slide team__item team-member slider__item">
              <div class="team-member__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/team/team-member-2.jpg" class="team-member__image-image" width="285"
                  height="285" alt="Новоградский Алексей Петрович">
              </div>
              <div class="team-member__content">
                <div class="team-member__label">Директор по развитию</div>
                <div class="team-member__title">Новоградский Алексей Петрович</div>
                <button class="btn-reset team-member__button hover-gradient" data-graph-path="team-member-modal"><span
                    data-text="Подробнее →">Подробнее →</span></button>
              </div>
            </div>
            <div class="swiper-slide team__item team-member slider__item">
              <div class="team-member__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/team/team-member-2.jpg" class="team-member__image-image" width="285"
                  height="285" alt="Новоградский Алексей Петрович">
              </div>
              <div class="team-member__content">
                <div class="team-member__label">Директор по развитию</div>
                <div class="team-member__title">Новоградский Алексей Петрович</div>
                <button class="btn-reset team-member__button hover-gradient" data-graph-path="team-member-modal"><span
                    data-text="Подробнее →">Подробнее →</span></button>
              </div>
            </div>
            <div class="swiper-slide team__item team-member slider__item">
              <div class="team-member__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/team/team-member-2.jpg" class="team-member__image-image" width="285"
                  height="285" alt="Новоградский Алексей Петрович">
              </div>
              <div class="team-member__content">
                <div class="team-member__label">Директор по развитию</div>
                <div class="team-member__title">Новоградский Алексей Петрович</div>
                <button class="btn-reset team-member__button hover-gradient" data-graph-path="team-member-modal"><span
                    data-text="Подробнее →">Подробнее →</span></button>
              </div>
            </div>
            <div class="swiper-slide team__item team-member slider__item">
              <div class="team-member__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/team/team-member-2.jpg" class="team-member__image-image" width="285"
                  height="285" alt="Новоградский Алексей Петрович">
              </div>
              <div class="team-member__content">
                <div class="team-member__label">Директор по развитию</div>
                <div class="team-member__title">Новоградский Алексей Петрович</div>
                <button class="btn-reset team-member__button hover-gradient" data-graph-path="team-member-modal"><span
                    data-text="Подробнее →">Подробнее →</span></button>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__controlls">
          <div class="swiper-button-prev slider__button slider__button--prev">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="0.5" width="23" height="23" rx="11.5" stroke="currentColor" />
              <path d="M14 8L10 12L14 16" stroke="currentColor" />
            </svg>
          </div>
          <div class="swiper-pagination slider__fraction"></div>
          <div class="swiper-button-next slider__button slider__button--next">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="24" y="23.5" width="23" height="23" rx="11.5" transform="rotate(-180 24 23.5)"
                stroke="currentColor" />
              <path d="M11 16L15 12L11 8" stroke="currentColor" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="schedule" id="schedule">
    <div class="schedule__container container">
      <div class="schedule__content-wrapper">
        <h2 class="schedule__title h2-title">Расписание занятий</h2>
        <div class="schedule__timetable">
          <div class="schedule__header">
            <div class="schedule__select">
              <span class="schedule__select-label">Район:</span>
              <select name="area" class="schedule__select-select">
                <option value="Район 1">Район 1</option>
                <option value="Район 2">Район 2</option>
                <option value="Район 3">Район 3</option>
                <option value="Район 4">Район 4</option>
                <option value="Район 5">Район 5</option>
              </select>
            </div>
            <div class="schedule__select">
              <span class="schedule__select-label">Филиал:</span>
              <select name="affiliate" class="schedule__select-select">
                <option value="Филиал 1">Филиал 1</option>
                <option value="Филиал 2">Филиал 2</option>
                <option value="Филиал 3">Филиал 3</option>
                <option value="Филиал 4">Филиал 4</option>
                <option value="Филиал 5">Филиал 5</option>
              </select>
            </div>
            <div class="schedule__select">
              <span class="schedule__select-label">Группа:</span>
              <select name="group" class="schedule__select-select">
                <option value="Группа 1">Группа 1</option>
                <option value="Группа 2">Группа 2</option>
                <option value="Группа 3">Группа 3</option>
                <option value="Группа 4">Группа 4</option>
                <option value="Группа 5">Группа 5</option>
              </select>
            </div>
          </div>
          <div class="schedule__table" data-simplebar>
            <div class="schedule__column">
              <div class="schedule__table-head"><span>Понедельник</span></div>
              <div class="schedule__table-item table-item">
                <div class="table-item__group">2014-2015</div>
                <div class="table-item__time">17:00</div>
                <div class="table-item__location">ул. Изумрудный городок</div>
              </div>
              <div class="schedule__table-item table-item">
                <div class="table-item__group">2014-2015</div>
                <div class="table-item__time">17:00</div>
                <div class="table-item__location">ул. Изумрудный городок</div>
              </div>
            </div>
            <div class="schedule__column">
              <div class="schedule__table-head"><span>Вторник</span></div>
              <div class="schedule__table-item table-item table-item--empty"></div>
            </div>
            <div class="schedule__column">
              <div class="schedule__table-head"><span>Среда</span></div>
              <div class="schedule__table-item table-item">
                <div class="table-item__group">2014-2015</div>
                <div class="table-item__time">17:00</div>
                <div class="table-item__location">ул. Изумрудный городок</div>
              </div>
              <div class="schedule__table-item table-item">
                <div class="table-item__group">2014-2015</div>
                <div class="table-item__time">17:00</div>
                <div class="table-item__location">ул. Изумрудный городок</div>
              </div>
            </div>
            <div class="schedule__column">
              <div class="schedule__table-head"><span>Четверг</span></div>
              <div class="schedule__table-item table-item">
                <div class="table-item__group">2014-2015</div>
                <div class="table-item__time">17:00</div>
                <div class="table-item__location">ул. Изумрудный городок</div>
              </div>
              <div class="schedule__table-item table-item">
                <div class="table-item__group">2014-2015</div>
                <div class="table-item__time">17:00</div>
                <div class="table-item__location">ул. Изумрудный городок</div>
              </div>
            </div>
            <div class="schedule__column">
              <div class="schedule__table-head"><span>Пятница</span></div>
              <div class="schedule__table-item table-item">
                <div class="table-item__group">2014-2015</div>
                <div class="table-item__time">17:00</div>
                <div class="table-item__location">ул. Изумрудный городок</div>
              </div>
              <div class="schedule__table-item table-item">
                <div class="table-item__group">2014-2015</div>
                <div class="table-item__time">17:00</div>
                <div class="table-item__location">ул. Изумрудный городок</div>
              </div>
            </div>
            <div class="schedule__column">
              <div class="schedule__table-head"><span>Суббота</span></div>
              <div class="schedule__table-item table-item table-item--empty"></div>
            </div>
            <div class="schedule__column">
              <div class="schedule__table-head"><span>Воскресенье</span></div>
              <div class="schedule__table-item table-item table-item--empty"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="form-section">

    <div class="form-section__container form-section__container--revert container">

      <div class="form-section__image">

        <picture>
          <source srcset="<?= ct()->get_static_url() ?>/img/form-section/form-section__image-2.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/form-section/form-section__image-2.jpg" class="form-section__image-image"
            width="660" height="660" alt="Дети тренируются на футбольном поле">
        </picture>

      </div>
      <div class="form-section__content">
        <h2 class="form-section__title">Запишитесь на пробную тренеровку</h2>
        <form action="#" class="form-section__form form" id="first-form">
          <label class="form__label">
            <input type="text" name="Name" class="input-reset form__input form__input--name" placeholder="Имя ребенка">
          </label>
          <label class="form__label">
            <input type="tel" name="Phone" class="input-reset form__input form__input--phone"
              placeholder="+7 (999) 999-99-99">
          </label>
          <label class="form__label form__label--50 mr-10">
            <select name="Year" class="input-reset form__input form__input--year custom-select"
              data-placeholder="Год рождения">
              <option value="">Год рождения</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
            </select>
          </label>
          <label class="form__label form__label--50">
            <select name="Place" class="input-reset form__input form__input--place custom-select"
              data-placeholder="Место тренировки">
              <option value="">Место тренировки</option>
              <option value="Место 1">Место 1</option>
              <option value="Место 2">Место 2</option>
              <option value="Место 3">Место 3</option>
              <option value="Место 4">Место 4</option>
              <option value="Место 5">Место 5</option>
            </select>
          </label>
          <button class="btn-reset form__btn gradient-button">Записаться</button>
        </form>
      </div>
    </div>
  </section>

  <section class="news" id="news">
    <div class="container news__container">
      <div class="news__title h2-title">Наши новости</div>
      <div class="swiper news__slider slider">
        <div class="swiper-wrapper news__slider-wrapper slider__wrapper">
          <div class="swiper-slide news__item news-item slider__item" data-graph-path="news">
            <div class="news-item__image">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/news/news-item-1.jpg" class="news-item__image-image" width="385" height="200"
                alt="Новоградский Алексей Петрович">
            </div>
            <div class="news-item__content">
              <div class="news-item__date">13 ноября 2022</div>
              <div class="news-item__title">Наш клуб заключил соглашение о развитии детского женского футбола с РФС
                и UEFA</div>
            </div>
          </div>
          <div class="swiper-slide news__item news-item slider__item">
            <div class="news-item__image">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/news/news-item-1.jpg" class="news-item__image-image" width="385" height="200"
                alt="Новоградский Алексей Петрович">
            </div>
            <div class="news-item__content">
              <div class="news-item__date">13 ноября 2022</div>
              <div class="news-item__title">Наш клуб заключил соглашение о развитии детского женского футбола с РФС
                и UEFA</div>
            </div>
          </div>
          <div class="swiper-slide news__item news-item slider__item">
            <div class="news-item__image">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/news/news-item-1.jpg" class="news-item__image-image" width="385" height="200"
                alt="Новоградский Алексей Петрович">
            </div>
            <div class="news-item__content">
              <div class="news-item__date">13 ноября 2022</div>
              <div class="news-item__title">Наш клуб заключил соглашение о развитии детского женского футбола с РФС
                и UEFA</div>
            </div>
          </div>
          <div class="swiper-slide news__item news-item slider__item">
            <div class="news-item__image">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/news/news-item-1.jpg" class="news-item__image-image" width="385" height="200"
                alt="Новоградский Алексей Петрович">
            </div>
            <div class="news-item__content">
              <div class="news-item__date">13 ноября 2022</div>
              <div class="news-item__title">Наш клуб заключил соглашение о развитии детского женского футбола с РФС
                и UEFA</div>
            </div>
          </div>
          <div class="swiper-slide news__item news-item slider__item">
            <div class="news-item__image">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/news/news-item-1.jpg" class="news-item__image-image" width="385" height="200"
                alt="Новоградский Алексей Петрович">
            </div>
            <div class="news-item__content">
              <div class="news-item__date">13 ноября 2022</div>
              <div class="news-item__title">Наш клуб заключил соглашение о развитии детского женского футбола с РФС
                и UEFA</div>
            </div>
          </div>
          <div class="swiper-slide news__item news-item slider__item">
            <div class="news-item__image">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/news/news-item-1.jpg" class="news-item__image-image" width="385" height="200"
                alt="Новоградский Алексей Петрович">
            </div>
            <div class="news-item__content">
              <div class="news-item__date">13 ноября 2022</div>
              <div class="news-item__title">Наш клуб заключил соглашение о развитии детского женского футбола с РФС
                и UEFA</div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider__controlls">
        <div class="swiper-button-prev slider__button slider__button--prev">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="0.5" width="23" height="23" rx="11.5" stroke="currentColor" />
            <path d="M14 8L10 12L14 16" stroke="currentColor" />
          </svg>
        </div>
        <div class="swiper-pagination slider__fraction"></div>
        <div class="swiper-button-next slider__button slider__button--next">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="24" y="23.5" width="23" height="23" rx="11.5" transform="rotate(-180 24 23.5)"
              stroke="currentColor" />
            <path d="M11 16L15 12L11 8" stroke="currentColor" />
          </svg>
        </div>
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container partners__container">
      <div class="partners__wrapper">
        <h2 class="partners__title h2-title">Партнёры</h2>
        <div class="swiper partners__slider slider">
          <div class="swiper-wrapper partners__slider-wrapper slider__wrapper">
            <div class="swiper-slide partners__item partners-item slider__item">
              <div class="partners-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/partners/partners-item-1.jpg" class="partners-item__image-image"
                  width="200" height="100" alt="Имя партнёра">
              </div>
            </div>
            <div class="swiper-slide partners__item partners-item slider__item">
              <div class="partners-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/partners/partners-item-2.jpg" class="partners-item__image-image"
                  width="200" height="100" alt="Имя партнёра">
              </div>
            </div>
            <div class="swiper-slide partners__item partners-item slider__item">
              <div class="partners-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/partners/partners-item-3.jpg" class="partners-item__image-image"
                  width="200" height="100" alt="Имя партнёра">
              </div>
            </div>
            <div class="swiper-slide partners__item partners-item slider__item">
              <div class="partners-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/partners/partners-item-4.jpg" class="partners-item__image-image"
                  width="200" height="100" alt="Имя партнёра">
              </div>
            </div>
            <div class="swiper-slide partners__item partners-item slider__item">
              <div class="partners-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/partners/partners-item-5.jpg" class="partners-item__image-image"
                  width="200" height="100" alt="Имя партнёра">
              </div>
            </div>
            <div class="swiper-slide partners__item partners-item slider__item">
              <div class="partners-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/partners/partners-item-6.jpg" class="partners-item__image-image"
                  width="200" height="100" alt="Имя партнёра">
              </div>
            </div>
            <div class="swiper-slide partners__item partners-item slider__item">
              <div class="partners-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/partners/partners-item-7.jpg" class="partners-item__image-image"
                  width="200" height="100" alt="Имя партнёра">
              </div>
            </div>
          </div>
        </div>
        <div class="slider__controlls">
          <div class="swiper-button-prev slider__button slider__button--prev">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="0.5" width="23" height="23" rx="11.5" stroke="currentColor" />
              <path d="M14 8L10 12L14 16" stroke="currentColor" />
            </svg>
          </div>
          <div class="swiper-pagination slider__fraction"></div>
          <div class="swiper-button-next slider__button slider__button--next">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="24" y="23.5" width="23" height="23" rx="11.5" transform="rotate(-180 24 23.5)"
                stroke="currentColor" />
              <path d="M11 16L15 12L11 8" stroke="currentColor" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="reviews" id="reviews">
    <div class="reviews__container container">
      <div class="reviews__header">
        <h2 class="reviews__title h2-title">Отзывы</h2>
        <a class="reviews__link gradient-button" href="/">Читать отзывы на flamp.ru →</a>
      </div>
      <div class="swiper reviews__slider slider">
        <div class="swiper-wrapper reviews__slider-wrapper slider__wrapper">
          <div class="swiper-slide reviews__item review-item slider__item" data-graph-path="review">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-item-1.jpg" class="review-item__image" width="248" height="400"
              alt="Отзыв номер 1">
            <span class="review-item__name">Дмитрий Курлаев</span>
            <div class="review-item__hover">
              <svg class="review-item__hover-icon" width="80" height="80">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#play-button"></use>
              </svg>
            </div>
          </div>
          <div class="swiper-slide reviews__item review-item slider__item" data-graph-path="review">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-item-1.jpg" class="review-item__image" width="248" height="400"
              alt="Отзыв номер 1">
            <span class="review-item__name">Дмитрий Курлаев</span>
            <div class="review-item__hover">
              <svg class="review-item__hover-icon" width="80" height="80">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#play-button"></use>
              </svg>
            </div>
          </div>
          <div class="swiper-slide reviews__item review-item slider__item" data-graph-path="review">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-item-1.jpg" class="review-item__image" width="248" height="400"
              alt="Отзыв номер 1">
            <span class="review-item__name">Дмитрий Курлаев</span>
            <div class="review-item__hover">
              <svg class="review-item__hover-icon" width="80" height="80">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#play-button"></use>
              </svg>
            </div>
          </div>
          <div class="swiper-slide reviews__item review-item slider__item" data-graph-path="review">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-item-1.jpg" class="review-item__image" width="248" height="400"
              alt="Отзыв номер 1">
            <span class="review-item__name">Дмитрий Курлаев</span>
            <div class="review-item__hover">
              <svg class="review-item__hover-icon" width="80" height="80">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#play-button"></use>
              </svg>
            </div>
          </div>
          <div class="swiper-slide reviews__item review-item slider__item" data-graph-path="review">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-item-1.jpg" class="review-item__image" width="248" height="400"
              alt="Отзыв номер 1">
            <span class="review-item__name">Дмитрий Курлаев</span>
            <div class="review-item__hover">
              <svg class="review-item__hover-icon" width="80" height="80">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#play-button"></use>
              </svg>
            </div>
          </div>
          <div class="swiper-slide reviews__item review-item slider__item" data-graph-path="review">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-item-1.jpg" class="review-item__image" width="248" height="400"
              alt="Отзыв номер 1">
            <span class="review-item__name">Дмитрий Курлаев</span>
            <div class="review-item__hover">
              <svg class="review-item__hover-icon" width="80" height="80">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#play-button"></use>
              </svg>
            </div>
          </div>
          <div class="swiper-slide reviews__item review-item slider__item" data-graph-path="review">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-item-1.jpg" class="review-item__image" width="248" height="400"
              alt="Отзыв номер 1">
            <span class="review-item__name">Дмитрий Курлаев</span>
            <div class="review-item__hover">
              <svg class="review-item__hover-icon" width="80" height="80">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#play-button"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="slider__controlls">
        <div class="swiper-button-prev slider__button slider__button--prev">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="0.5" width="23" height="23" rx="11.5" stroke="currentColor" />
            <path d="M14 8L10 12L14 16" stroke="currentColor" />
          </svg>
        </div>
        <div class="swiper-pagination slider__fraction"></div>
        <div class="swiper-button-next slider__button slider__button--next">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="24" y="23.5" width="23" height="23" rx="11.5" transform="rotate(-180 24 23.5)"
              stroke="currentColor" />
            <path d="M11 16L15 12L11 8" stroke="currentColor" />
          </svg>
        </div>
      </div>
      <a class="reviews__link reviews__link--mobile gradient-button" href="/">Читать отзывы на flamp.ru →</a>
    </div>
  </section>

  <section class="faq" id="faq">
    <div class="faq__container container">
      <div class="faq__wrapper">
        <h2 class="faq__title h2-title">Вопросы и ответы</h2>
        <div class="accordion faq__accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title">Что здесь есть хорошего</span>
            <span class="accordion__icon">
              <svg class="accordion__icon-icon" width="20" height="20">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#accordion-icon"></use>
              </svg>
            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <p>
              Коробка с инструментами: приложения и сервисы для поиска людей, отслеживания транспортных средств,
              фактчекинга, обработки данных, визуализации, мониторинга, обеспечения информационной безопасности
              и другие.
            </p>
          </div>
        </div>
        <div class="accordion faq__accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title">Как добавлять свой контент</span>
            <span class="accordion__icon">
              <svg class="accordion__icon-icon" width="20" height="20">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#accordion-icon"></use>
              </svg>
            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <p>
              Коробка с инструментами: приложения и сервисы для поиска людей, отслеживания транспортных средств,
              фактчекинга, обработки данных, визуализации, мониторинга, обеспечения информационной безопасности
              и другие.
            </p>
          </div>
        </div>
        <div class="accordion faq__accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title">Сколько рассматривается заявка?</span>
            <span class="accordion__icon">
              <svg class="accordion__icon-icon" width="20" height="20">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#accordion-icon"></use>
              </svg>
            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <p>
              Коробка с инструментами: приложения и сервисы для поиска людей, отслеживания транспортных средств,
              фактчекинга, обработки данных, визуализации, мониторинга, обеспечения информационной безопасности
              и другие.
            </p>
          </div>
        </div>
        <div class="accordion faq__accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title">Не нашли то, что искали?</span>
            <span class="accordion__icon">
              <svg class="accordion__icon-icon" width="20" height="20">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#accordion-icon"></use>
              </svg>
            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <p>
              Коробка с инструментами: приложения и сервисы для поиска людей, отслеживания транспортных средств,
              фактчекинга, обработки данных, визуализации, мониторинга, обеспечения информационной безопасности
              и другие.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="products" id="production">
    <div class="products__container container">
      <div class="products__wrapper">
        <div class="products__header">
          <h2 class="products__title h2-title">Продукция</h2>
          <div class="products__small-text">Для заказа обращайтесь<br>к администратору вашего филиала</div>
        </div>
        <div class="swiper products__slider slider">
          <div class="swiper-wrapper products__slider-wrapper slider__wrapper">
            <div class="swiper-slide products__item products-item slider__item" data-graph-path="products">
              <div class="products-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/products/products-item-1.jpg" class="products-item__image-image"
                  width="285" height="285" alt="Название продукта">
              </div>
              <div class="products-item__title">Название продукта</div>
            </div>
            <div class="swiper-slide products__item products-item slider__item" data-graph-path="products">
              <div class="products-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/products/products-item-1.jpg" class="products-item__image-image"
                  width="285" height="285" alt="Название продукта">
              </div>
              <div class="products-item__title">Название продукта</div>
            </div>
            <div class="swiper-slide products__item products-item slider__item" data-graph-path="products">
              <div class="products-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/products/products-item-1.jpg" class="products-item__image-image"
                  width="285" height="285" alt="Название продукта">
              </div>
              <div class="products-item__title">Название продукта</div>
            </div>
            <div class="swiper-slide products__item products-item slider__item" data-graph-path="products">
              <div class="products-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/products/products-item-1.jpg" class="products-item__image-image"
                  width="285" height="285" alt="Название продукта">
              </div>
              <div class="products-item__title">Название продукта</div>
            </div>
            <div class="swiper-slide products__item products-item slider__item" data-graph-path="products">
              <div class="products-item__image">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/products/products-item-1.jpg" class="products-item__image-image"
                  width="285" height="285" alt="Название продукта">
              </div>
              <div class="products-item__title">Название продукта</div>
            </div>
          </div>
        </div>
        <div class="slider__controlls">
          <div class="swiper-button-prev slider__button slider__button--prev">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="0.5" width="23" height="23" rx="11.5" stroke="currentColor" />
              <path d="M14 8L10 12L14 16" stroke="currentColor" />
            </svg>
          </div>
          <div class="swiper-pagination slider__fraction"></div>
          <div class="swiper-button-next slider__button slider__button--next">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="24" y="23.5" width="23" height="23" rx="11.5" transform="rotate(-180 24 23.5)"
                stroke="currentColor" />
              <path d="M11 16L15 12L11 8" stroke="currentColor" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contacts-section" id="contacts">
    <div class="contacts-section__container container">
      <div class="contacts-section__wrapper">
        <h2 class="contacts-section__title h2-title">Контакты</h2>
        <div class="contacts-section__column">
          <div class="navigation__contacts contacts-section__contacts">
            <div class="navigation__contacts-group">
              <div class="navigation__contacts-label">Телефон:</div>
              <a class="navigation__contacts-item navigation__contacts-item--big hover-gradient"
                href="tel:88001017943"><span data-text="8 (800) 101-79-43">8 (800) 101-79-43</span></a>
              <a class="navigation__contacts-item hover-gradient" href="tel:+7 (383) 380-31-11"><span
                  data-text="+7 (383) 380-31-11">+7 (383) 380-31-11</span></a>
              <a class="navigation__contacts-item hover-gradient" href="tel:+7 (952) 911-91-11"><span
                  data-text="+7 (952) 911-91-11">+7 (952) 911-91-11</span></a>
            </div>
            <div class="navigation__contacts-group">
              <div class="navigation__contacts-label">Почта:</div>
              <a class="navigation__contacts-item navigation__contacts-item--big hover-gradient"
                href="mail:juniornsk@bk.ru"><span data-text="juniornsk@bk.ru">juniornsk@bk.ru</span></a>
            </div>
          </div>
        </div>
        <div class="contacts-section__column">
          <div class="navigation__contacts-group contacts-section__contacts contacts-section__contacts--address">
            <div class="navigation__contacts-label">Адрес:</div>
            <a class="navigation__contacts-item hover-gradient contacts-section__address" href="/"><span
                data-text="Новосибирск, улица Писарева 102, офис 417 (БЦ Парус)">Новосибирск, улица Писарева 102, офис
                417 (БЦ Парус)</span></a>
            <div class="contacts-section__socials">
              <a class="contacts-section__socials-link" href="/">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="contacts-section__socials-icon">
                  <g clip-path="url(#clip0_407_4805)">
                    <path
                      d="M31.162 37.994C31.771 37.994 32.02 37.588 32.013 37.079C31.982 35.162 32.727 34.13 34.072 35.475C35.56 36.963 35.868 37.994 37.675 37.994H40.875C41.683 37.994 42.001 37.734 42.001 37.326C42.001 36.463 40.58 34.94 39.376 33.822C37.69 32.257 37.611 32.22 39.063 30.336C40.864 27.997 43.22 25 41.136 25H37.155C36.383 25 36.327 25.435 36.052 26.083C35.057 28.43 33.166 31.47 32.448 31.005C31.697 30.52 32.041 28.599 32.098 25.744C32.113 24.99 32.109 24.473 30.957 24.205C30.328 24.06 29.716 24 29.148 24C26.875 24 25.307 24.953 26.198 25.119C27.769 25.412 27.618 28.811 27.252 30.279C26.614 32.835 24.216 28.255 23.217 25.974C22.976 25.426 22.902 25 22.042 25H18.787C18.295 25 18 25.16 18 25.516C18 26.118 20.96 32.236 23.786 35.286C26.542 38.261 29.266 37.994 31.162 37.994Z"
                      fill="url(#paint0_linear_407_4805)" />
                  </g>
                  <rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="url(#paint1_linear_407_4805)" />
                  <defs>
                    <linearGradient id="paint0_linear_407_4805" x1="39.2961" y1="36.8724" x2="18.7599" y2="24.3791"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#0B4C8E" />
                      <stop offset="1" stop-color="#0B4C8E" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_407_4805" x1="53.2381" y1="55.1667" x2="-9.23353" y2="32.9977"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#0B4C8E" />
                      <stop offset="1" stop-color="#0B4C8E" />
                    </linearGradient>
                    <clipPath id="clip0_407_4805">
                      <rect width="24" height="24" fill="white" transform="translate(18 19)" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
              <a class="contacts-section__socials-link" href="/">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="contacts-section__socials-icon">
                  <g clip-path="url(#clip0_723_4401)">
                    <path
                      d="M37.615 22.184C34.011 21.938 25.984 21.939 22.385 22.184C18.488 22.45 18.029 24.804 18 31C18.029 37.185 18.484 39.549 22.385 39.816C25.985 40.061 34.011 40.062 37.615 39.816C41.512 39.55 41.971 37.196 42 31C41.971 24.815 41.516 22.451 37.615 22.184V22.184ZM27 35V27L35 30.993L27 35V35Z"
                      fill="url(#paint0_linear_723_4401)" />
                  </g>
                  <rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="url(#paint1_linear_723_4401)" />
                  <defs>
                    <linearGradient id="paint0_linear_723_4401" x1="39.2952" y1="38.5501" x2="16.3063" y2="27.673"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#0B4C8E" />
                      <stop offset="1" stop-color="#0B4C8E" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_723_4401" x1="53.2381" y1="55.1667" x2="-9.23353" y2="32.9977"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#0B4C8E" />
                      <stop offset="1" stop-color="#0B4C8E" />
                    </linearGradient>
                    <clipPath id="clip0_723_4401">
                      <rect width="24" height="24" fill="white" transform="translate(18 19)" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="contacts-section__map">
        <div id="map" class="contacts-section__map-block"></div>
      </div>
    </div>
  </section>

</main>

<?php

ct()->footer();
