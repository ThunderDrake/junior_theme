<?php
/* Шаблон блока навигации в шапке сайта */
?>

<div class="navigation" data-menu>
  <div class="navigation__container container">
    <nav class="navigation__nav nav" title="Навигация по сайту">
      <ul class="nav__list list-reset">
        <li class="nav__item"><a href="/#info" class="nav__link" data-menu-item>Цели и принципы</a></li>
        <li class="nav__item"><a href="/#why-us" class="nav__link" data-menu-item>Почему мы</a></li>
        <li class="nav__item"><a href="/#advantages" class="nav__link" data-menu-item>Преимущества</a></li>
        <li class="nav__item"><a href="/#steps" class="nav__link" data-menu-item>Этапы развития</a></li>
        <li class="nav__item"><a href="/#team" class="nav__link" data-menu-item>Наша команда</a></li>
        <li class="nav__item"><a href="/#schedule" class="nav__link" data-menu-item>Расписание</a></li>
        <li class="nav__item"><a href="/#news" class="nav__link" data-menu-item>Новости</a></li>
        <li class="nav__item"><a href="/#partners" class="nav__link" data-menu-item>Партнеры</a></li>
        <li class="nav__item"><a href="/#reviews" class="nav__link" data-menu-item>Отзывы</a></li>
        <li class="nav__item"><a href="/#faq" class="nav__link" data-menu-item>Вопросы и ответы</a></li>
        <li class="nav__item"><a href="/#production" class="nav__link" data-menu-item>Продукция</a></li>
        <li class="nav__item"><a href="/#contacts" class="nav__link" data-menu-item>Контакты</a></li>
        <li class="nav__item"><a href="/comands-single.html" class="nav__link" data-menu-item>Сборные команды клуба</a></li>
      </ul>
    </nav>
    <div class="navigation__contacts">
      <div class="navigation__contacts-group">
        <div class="navigation__contacts-label">Телефон:</div>
        <a class="navigation__contacts-item navigation__contacts-item--big hover-gradient" href="tel:<?= get_field('home_main_phone', 'option') ? cth()->format_phone(get_field('home_main_phone', 'option')) : '' ?>"><span data-text="<?= get_field('home_main_phone', 'option') ?: '' ?>"><?= get_field('home_main_phone', 'option') ?: '' ?></span></a>
        <a class="navigation__contacts-item hover-gradient" href="tel:<?= get_field('home_main_phone_first', 'option') ? cth()->format_phone(get_field('home_main_phone_first', 'option')) : '' ?>"><span data-text="<?= get_field('home_main_phone_first', 'option') ?: '' ?>"><?= get_field('home_main_phone_first', 'option') ?: '' ?></span></a>
        <a class="navigation__contacts-item hover-gradient" href="tel:<?= get_field('home_main_phone_second', 'option') ? cth()->format_phone(get_field('home_main_phone_second', 'option')) : '' ?>"><span data-text="<?= get_field('home_main_phone_second', 'option') ?: '' ?>"><?= get_field('home_main_phone_second', 'option') ?: '' ?></span></a>
      </div>
      <div class="navigation__contacts-group">
        <div class="navigation__contacts-label">Почта:</div>
        <a class="navigation__contacts-item navigation__contacts-item--big hover-gradient" href="mail:<?= get_field('home_email', 'option') ?: '' ?>"><span data-text="<?= get_field('home_email', 'option') ?: '' ?>"><?= get_field('home_email', 'option') ?: '' ?></span></a>
      </div>
    </div>
  </div>
</div>
