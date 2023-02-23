<?php
/* Шаблон хедера сайта */
?>

<!DOCTYPE html>
<html lang="ru" class="page">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title>Джуниор — футбольная школа для детей</title>
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/ManropeLight.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/ManropeRegular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/ManropeMedium.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/ManropeSemiBold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/ManropeBold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/ManropeExtraBold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/AMERICANCAPTAINCYRILLIC.woff2" as="font" type="font/woff2" crossorigin>
  <?php wp_head() ?>
</head>

<body class="page__body">
  <div class="site-container" <?php if(is_page('thank-you')) {echo 'style="display: flex; flex-direction: column;"';} ?> >

    <header class="header <?php if(!is_front_page()) {echo 'header--inner';} ?>">

      <div class="container header__container">
        <a class="logo header__logo" href="/">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/logo.svg" class="logo__image" width="100" height="128"
            alt="ФК Джуниор логотип школы">
        </a>
        <button class="burger header__burger btn-reset" aria-label="Открыть меню" aria-expanded="false" data-burger>
          <span class="burger__text">Меню</span>
          <span class="burger__lines"></span>
        </button>
      </div>
    </header>
    <?php ct()->template('site-parts/header-nav.php') ?>
