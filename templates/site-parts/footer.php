<?php
/* Шаблон футера сайта */
?>
<?php ct()->template('site-parts/modals.php') ?>
<footer class="footer">
  <div class="container footer__container">
    <div class="footer__content-wrapper">
      <div class="footer__logo logo">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/logo.svg" class="logo__image" width="100" height="128"
          alt="ФК Джуниор логотип школы">
      </div>
      <div class="footer__nav">
        <div class="footer__col">
          <nav class="footer__menu">
            <ul class="footer__menu-list list-reset">
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#info"><span data-text="Цели и принципы">Цели
                    и принципы</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#why-us"><span data-text="Почему мы">Почему мы</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#advantages"><span
                    data-text="Преимущества">Преимущества</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#team"><span data-text="Наша команда">Наша
                    команда</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#hymn"><span data-text="Гимн клуба">Гимн клуба</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#news"><span data-text="Новости">Новости</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#production"><span
                    data-text="Продукция">Продукция</span></a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="footer__col">
          <nav class="footer__menu">
            <ul class="footer__menu-list list-reset">
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#schedule"><span
                    data-text="Расписание">Расписание</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#partners"><span
                    data-text="Партнеры">Партнеры</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#reviews"><span data-text="Отзывы">Отзывы</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#contacts"><span
                    data-text="Контакты">Контакты</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/#faq"><span data-text="Вопросы и ответы">Вопросы
                    и ответы</span></a>
              </li>
              <li class="footer__menu-item">
                <a class="footer__menu-link hover-opacity" href="/commands/"><span
                    data-text="Сборные команды клуба">Сборные команды клуба</span></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="footer__legal">
        <div class="footer__legal-title">Наши реквизиты</div>
        <p class="footer__legal-content">
          <?php if(get_field('home_commercial', 'options')): ?>
            <?= get_field('home_commercial', 'options'); ?>
          <?php else: ?>
            ИП Новоградская Ксения Игоревна<br>
            ОГРНИП: 318547600003968<br>
            ИНН: 544600140013<br>
            Банк: МОСКОВСКИЙ ФИЛИАЛ АО КБ «МОДУЛЬБАНК»<br>
            БИК: 044525092<br>
            к/с №: 30101810645250000092<br>
            Счёт №: 40802810370010063330
          <?php endif; ?>
        </p>
      </div>
      <div class="footer__additional">
        <div class="footer__credits">ДФЦ Джуниор © 2022 </div>
        <a class="footer__policy hover-opacity" href="/policy.pdf/"><span
            data-text="Политика конфиденциальности">Политика конфиденциальности</span></a>
        <div class="footer__authors">
          <a class="footer__authors-link hover-opacity" href="https://instagram.com/sanechek.xyz"><span data-text="Дизайн">Дизайн</span></a> и <a
            class="footer__authors-link hover-opacity" href="https://t.me/ThunderDrake"><span data-text="разработка">разработка</span></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php ct()->template('site-parts/footer-ymap.php') ?>
</div>
<?php wp_footer() ?>
</body>

</html>
