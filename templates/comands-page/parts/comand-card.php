<?php
/* Шаблон карточки команды */
$teachers = get_field('comand_teachers');
$achivements = get_field('comand_achivement');
?>

<div class="comand__tab-panel tabs__panel">
  <div class="comand__tab-wrapper">
    <div class="comand__image">
      <?php if(has_post_thumbnail()): ?>
        <img loading="lazy" src="<?php the_post_thumbnail_url('full') ?>" class="comand__image-image"
        width="660" height="495" alt="Фото сборной">
      <?php else: ?>
      <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/comand-image.jpg" class="comand__image-image"
        width="660" height="495" alt="Фото сборной">
      <?php endif; ?>
    </div>
    <div class="comand__info">
      <h2 class="comand__name">Сборная <?php the_title() ?></h2>
      <div class="comand__columns">
        <?php if($teachers): ?>
        <div class="comand__label">Тренеры:</div>
        <div class="comand__content">
          <?php foreach($teachers as $key => $person): ?>
            <?php
            if ($person == end($teachers)): ?>
              <?= $person->post_title ?>
            <?php else: ?>
              <?= $person->post_title ?>,<br>
            <?php endif;?>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="comand__columns">
        <div class="comand__label">Турниры:</div>
        <div class="comand__achievement">
          <?php foreach ($achivements as $achivement): ?>
            <?php
            $place = $achivement['place'];
            ?>
            <div class="comand__achievement-item">
              <?php
              switch ($place) {
                case 'first':
                  echo '<div class="comand__achievement-place comand__achievement-place--first">I</div>';
                  break;
                case 'second':
                  echo '<div class="comand__achievement-place comand__achievement-place--second">II</div>';
                  break;
                case 'third':
                  echo '<div class="comand__achievement-place comand__achievement-place--third">III</div>';
                  break;
                default:
                  echo '<div class="comand__achievement-place comand__achievement-place--icon">
                  <svg class="comand__achievement-icon" width="18" height="18">
                    <use xlink:href="'. ct()->get_static_url() . '/img/sprite.svg#achievement-icon"></use>
                  </svg>
                </div>';
                  break;
              }
              ?>
              <div class="comand__achievement-location"><?= $achivement['location'] ?></div>
              <div class="comand__achievement-name"><?= $achivement['title'] ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
