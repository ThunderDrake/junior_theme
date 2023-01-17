<?php

// Регистрируем
add_action( 'init', function () {

	register_post_type( 'affiliate', [
		'labels'           => [
			'name'               => 'Филиалы',
			'singular_name'      => 'Филиалы',
			'name_admin_bar'     => 'Филиалы',
			'add_new'            => 'Добавить филиал',
			'add_new_item'       => 'Добавить новый филиал',
			'edit_item'          => 'Редактировать филиал',
			'new_item'           => 'Новый филиал',
			'view_item'          => 'Посмотреть филиал',
			'search_items'       => 'Найти филиал',
			'not_found'          => 'Филиал не найден',
			'not_found_in_trash' => 'В корзине филиал не найден',
			'menu_name'          => 'Филиалы',
		],
		'public'           => true,
		'rewrite'          => true,
    'publicly_queryable' => false,
		'map_meta_cap'     => true,
		'has_archive'      => false,
		'hierarchical'     => false,
		'menu_position'    => 15,
		'menu_icon'        => 'dashicons-building',
		'supports'         => [ 'title'],
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
