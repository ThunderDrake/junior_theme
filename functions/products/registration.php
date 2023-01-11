<?php

// Регистрируем
add_action( 'init', function () {

	register_post_type( 'products', [
		'labels'           => [
			'name'               => 'Продукция',
			'singular_name'      => 'Продукция',
			'name_admin_bar'     => 'Продукция',
			'add_new'            => 'Добавить продукт',
			'add_new_item'       => 'Добавить новый продукт',
			'edit_item'          => 'Редактировать продукт',
			'new_item'           => 'Новый продукт',
			'view_item'          => 'Посмотреть продукт',
			'search_items'       => 'Найти продукт',
			'not_found'          => 'Продукт не найден',
			'not_found_in_trash' => 'В корзине продукт не найден',
			'menu_name'          => 'Продукция',
		],
		'public'           => true,
		'rewrite'          => true,
    'publicly_queryable' => false,
		'map_meta_cap'     => true,
		'has_archive'      => false,
		'hierarchical'     => false,
		'menu_position'    => 13,
		'menu_icon'        => 'dashicons-products',
		'supports'         => [ 'title', 'thumbnail'],
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
