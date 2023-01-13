<?php

// Регистрируем
add_action( 'init', function () {

	register_post_type( 'comands', [
		'labels'           => [
			'name'               => 'Команды',
			'singular_name'      => 'Команды',
			'name_admin_bar'     => 'Команды',
			'add_new'            => 'Добавить команду',
			'add_new_item'       => 'Добавить новую команду',
			'edit_item'          => 'Редактировать команду',
			'new_item'           => 'Новая команда',
			'view_item'          => 'Посмотреть команду',
			'search_items'       => 'Найти команду',
			'not_found'          => 'Команда не найдена',
			'not_found_in_trash' => 'В корзине команда не найдена',
			'menu_name'          => 'Команды',
		],
		'public'           => true,
		'rewrite'          => true,
    'publicly_queryable' => false,
		'map_meta_cap'     => true,
		'has_archive'      => false,
		'hierarchical'     => false,
		'menu_position'    => 14,
		'menu_icon'        => 'dashicons-universal-access',
		'supports'         => [ 'title', 'thumbnail'],
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
