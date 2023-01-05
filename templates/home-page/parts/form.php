<?php
/* Шаблон формы обратной связи на сайте */

$form_id = $args['id'] ?: '';
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
