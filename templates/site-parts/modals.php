<?php
/* Шаблон модальных окон сайта */
?>

<section class="modals">
  <div class="graph-modal">
    <!-- <div class="graph-modal__bg"></div> -->
    <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="team-member-modal">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <div class="graph-modal__content team-member__modal">
        <div class="team__big-item team-member team-member--big">
          <div class="team-member__image">
            <img loading="lazy" src="img/team/team-member-1.jpg" class="team-member__image-image" width="590"
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
      </div>
    </div>
    <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="news">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <article class="graph-modal__content news-item__modal">
        <div class="news-item__date">13 ноября 2022</div>
        <h3 class="news-item__modal-title">Наш клуб заключил соглашение о развитии детского женского футбола с РФС
          и UEFA</h3>
        <p class="news-item__modal-content">
          А ещё интерактивные прототипы заблокированы в рамках своих собственных рациональных ограничений. Имеется
          спорная точка зрения, гласящая примерно следующее: акционеры крупнейших компаний объективно рассмотрены
          соответствующими инстанциями. В частности, сплочённость команды профессионалов обеспечивает актуальность новых
          принципов формирования материально-технической и кадровой базы. Однозначно, действия представителей оппозиции,
          инициированные исключительно синтетически, указаны как претенденты на роль ключевых факторов. Задача
          организации, в особенности же курс на социально-ориентированный национальный проект в значительной степени
          обусловливает важность стандартных подходов. Однозначно, сторонники тоталитаризма в науке формируют глобальную
          экономическую сеть и при этом — в равной степени предоставлены сами себе.
        </p>
      </article>
    </div>
    <div class="graph-modal__container review__modal" role="dialog" aria-modal="true" data-graph-target="review">
      <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"><span
          class="graph-modal__close-icon"></span></button>
      <article class="graph-modal__content review-item__modal">
        <div class="modal__video" data-video="https://www.youtube.com/embed/eGi447l2_mM">
          <iframe width="560" height="850" src="" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </article>
    </div>
  </div>
</section>
