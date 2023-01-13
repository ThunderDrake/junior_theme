<?php

add_action( 'init', 'register_common_taxonomies', 9 );

function register_common_taxonomies() {
  register_taxonomy( 'position', [ 'team' ], [
		'hierarchical'      => false,
		'labels'            => [
			'name'               => 'Должность',
			'singular_name'      => 'Должность',
			'add_new'            => 'Добавить должность',
			'add_new_item'       => 'Добавить новую должность',
			'edit_item'          => 'Редактировать должность',
			'new_item'           => 'Новая должность',
			'view_item'          => 'Посмотреть должность',
			'search_items'       => 'Найти должность',
			'not_found'          => 'Должность не найдена',
			'not_found_in_trash' => 'В корзине нет должности',
			'menu_name'          => 'Должность',
		],
		'show_admin_column' => true,
		'show_in_rest'      => false,
    'publicly_queryable' => false
	] );
}
