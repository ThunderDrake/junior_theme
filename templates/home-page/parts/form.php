<?php
/* Шаблон формы обратной связи на сайте */

$form_id = $args['id'] ?: '';
$locations = get_posts([
  'post_type' => 'affiliate',
  'numberposts' => -1,
]);

$start_year = date('Y') - 22;
$finish_year = date('Y') - 3;

$array_years = array();
for($i = $start_year; $i <= $finish_year; $i += 1) {
	$array_years[] = $i;
}

$years = array_reverse($array_years);
?>

<form action="#" class="form-section__form form" id="<?= $form_id ?>">
  <label class="form__label">
    <input type="text" name="Name" class="input-reset form__input form__input--name" placeholder="Имя ребенка">
  </label>
  <label class="form__label">
    <input type="tel" name="Phone" class="input-reset form__input form__input--phone" placeholder="+7 (999) 999-99-99">
  </label>
  <label class="form__label form__label--50 mr-10">
    <select name="Year" class="input-reset form__input form__input--year custom-select" data-placeholder="Год рождения">
      <option value="">Год рождения</option>
      <?php foreach($years as $year): ?>
        <option value="<?= $year ?>"><?= $year ?></option>
      <?php endforeach; ?>
    </select>
  </label>
  <label class="form__label form__label--50">
    <select name="Place" class="input-reset form__input form__input--place custom-select"
      data-placeholder="Место тренировки">
      <option value="">Место тренировки</option>
      <?php foreach($locations as $item): ?>
        <option value="<?= $item->post_title ?>"><?= $item->post_title ?></option>
      <?php endforeach; ?>
    </select>
  </label>
  <input type="checkbox" name="art_anticheck" id="art_anticheck" class="art_anticheck" style="display: none !important;" value="true" checked="checked"/>
  <input type="text" name="art_submitted" id="art_submitted" value="" style="display: none !important;"/>
  <button class="btn-reset form__btn gradient-button">Записаться</button>
</form>
