<?php

// Регистрируем
add_action( 'init', function () {

	register_post_type( 'reviews', [
		'labels'           => [
			'name'               => 'Отзывы',
			'singular_name'      => 'Отзывы',
			'name_admin_bar'     => 'Отзывы',
			'add_new'            => 'Добавить отзыв',
			'add_new_item'       => 'Добавить новый отзыв',
			'edit_item'          => 'Редактировать отзыв',
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Посмотреть отзыв',
			'search_items'       => 'Найти отзыв',
			'not_found'          => 'Отзывы не найдены',
			'not_found_in_trash' => 'В корзине отзывы не найдены',
			'menu_name'          => 'Отзывы',
		],
		'public'           => true,
		'rewrite'          => true,
    'publicly_queryable' => false,
		'map_meta_cap'     => true,
		'has_archive'      => false,
		'hierarchical'     => false,
		'menu_position'    => 10,
		'menu_icon'        => 'dashicons-format-chat',
		'supports'         => [ 'title'],
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
