<?php
/**
 * Добавляем шаблоны, которые лежат глубже, чем может прочесть движок.
 */


/**
 * @param string[] $templates
 *
 * @return string[]
 */
function add_templates_to_dropdown( $templates ) {

	// выбор шаблона в атрибутах
	$templates['templates/comands-page/comands-page.php'] = 'Команды клуба';
	$templates['templates/thank-you-page/thank-you-page.php'] = 'Спасибо';

	return $templates;
}

add_filter( 'theme_page_templates', 'add_templates_to_dropdown' );
