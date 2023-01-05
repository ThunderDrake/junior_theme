<?php
/* Шаблон страницы "Команды" */

ct()->header();
?>

<main class="main">
<?php ct()->template('comands-page/parts/hero.php') ?>
<?php ct()->template('comands-page/parts/comand.php') ?>



</main>

<?php

ct()->footer();
