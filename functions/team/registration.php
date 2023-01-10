<?php

// Регистрируем
add_action( 'init', function () {

	register_post_type( 'team', [
		'labels'           => [
			'name'               => 'Команда',
			'singular_name'      => 'Команда',
			'name_admin_bar'     => 'Команда',
			'add_new'            => 'Добавить члена команды',
			'add_new_item'       => 'Добавить нового члена команды',
			'edit_item'          => 'Редактировать члена команды',
			'new_item'           => 'Новый член',
			'view_item'          => 'Посмотреть члена команды',
			'search_items'       => 'Найти члена команды',
			'not_found'          => 'Члены команды не найдены',
			'not_found_in_trash' => 'В корзине члены команды не найдены',
			'menu_name'          => 'Команда',
		],
		'public'           => true,
		'rewrite'          => true,
    'publicly_queryable' => false,
		'map_meta_cap'     => true,
		'has_archive'      => false,
		'hierarchical'     => false,
		'menu_position'    => 9,
		'menu_icon'        => 'dashicons-groups',
		'supports'         => [ 'title', 'editor', 'thumbnail' ],
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
