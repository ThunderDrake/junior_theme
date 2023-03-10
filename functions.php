<?php
/* * * * * * * * * * * * * * * * * * * * * * * *
 * Подключение и Запуск основного функционала  *
 * * * * * * * * * * * * * * * * * * * * * * * */

namespace Junior;


require __DIR__ . '/functions/Site.php';
require __DIR__ . '/functions/Helper.php';
require __DIR__ . '/functions/functions-main.php';
require __DIR__ . '/functions/functions-other.php';
require __DIR__ . '/functions/dev/module.php';

ct()->hooks();
cth()->hooks();

/* * * * * * * * * * * * * * * *
 * Подключение Запуск модулей  *
 * * * * * * * * * * * * * * * */
require __DIR__ . '/functions/Routes.php';
new Routes();

require __DIR__ . '/functions/Assets.php';
new Assets();

require __DIR__ . '/functions/acf/ACF.php';
new ACF();

require __DIR__ . '/functions/register-common-taxonomies.php';
require __DIR__ . '/functions/other/module.php';
require __DIR__ . '/functions/home-page/module.php';
require __DIR__ . '/functions/team/module.php';
require __DIR__ . '/functions/reviews/module.php';
require __DIR__ . '/functions/news/module.php';
require __DIR__ . '/functions/products/module.php';
require __DIR__ . '/functions/comands/module.php';
require __DIR__ . '/functions/affiliate/module.php';
require __DIR__ . '/functions/schedule/module.php';
require __DIR__ . '/functions/forms/module.php';
require __DIR__ . '/functions/partners/module.php';

