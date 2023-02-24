<?php

// Регистрируем
add_action( 'init', function () {

	register_post_type( 'partners', [
		'labels'           => [
			'name'               => 'Партнеры',
			'singular_name'      => 'Партнеры',
			'name_admin_bar'     => 'Партнеры',
			'add_new'            => 'Добавить партнера',
			'add_new_item'       => 'Добавить нового партнера',
			'edit_item'          => 'Редактировать партнера',
			'new_item'           => 'Новый партнер',
			'view_item'          => 'Посмотреть партнера',
			'search_items'       => 'Найти партнера',
			'not_found'          => 'Партнер не найден',
			'not_found_in_trash' => 'В корзине партнер не найден',
			'menu_name'          => 'Партнеры',
		],
		'public'           => true,
		'rewrite'          => true,
    'publicly_queryable' => false,
		'map_meta_cap'     => true,
		'has_archive'      => false,
		'hierarchical'     => false,
		'menu_position'    => 14,
		'menu_icon'        => 'dashicons-buddicons-buddypress-logo',
		'supports'         => [ 'title'],
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
