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

  register_taxonomy( 'district', [ 'affiliate' ], [
		'hierarchical'      => true,
		'labels'            => [
			'name'               => 'Район',
			'singular_name'      => 'Район',
			'add_new'            => 'Добавить район',
			'add_new_item'       => 'Добавить новый район',
			'edit_item'          => 'Редактировать район',
			'new_item'           => 'Новый район',
			'view_item'          => 'Посмотреть район',
			'search_items'       => 'Найти район',
			'not_found'          => 'Район не найден',
			'not_found_in_trash' => 'В корзине нет района',
			'menu_name'          => 'Район',
		],
		'show_admin_column' => true,
		'show_in_rest'      => false,
    'publicly_queryable' => false
	] );

  register_taxonomy( 'group', [ 'affiliate' ], [
		'hierarchical'      => false,
		'labels'            => [
			'name'               => 'Группы',
			'singular_name'      => 'Группы',
			'add_new'            => 'Добавить группу',
			'add_new_item'       => 'Добавить новую группу',
			'edit_item'          => 'Редактировать группу',
			'new_item'           => 'Новая группа',
			'view_item'          => 'Посмотреть группу',
			'search_items'       => 'Найти группу',
			'not_found'          => 'Группа не найден',
			'not_found_in_trash' => 'В корзине нет группы',
			'menu_name'          => 'Группы',
		],
		'show_admin_column' => true,
		'show_in_rest'      => false,
    'publicly_queryable' => false
	] );
}
