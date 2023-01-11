<?php

// Регистрируем
add_action( 'init', function () {

	register_post_type( 'news', [
		'labels'           => [
			'name'               => 'Новости',
			'singular_name'      => 'Новости',
			'name_admin_bar'     => 'Новости',
			'add_new'            => 'Добавить новость',
			'add_new_item'       => 'Добавить новую новость',
			'edit_item'          => 'Редактировать новость',
			'new_item'           => 'Новая новость',
			'view_item'          => 'Посмотреть новость',
			'search_items'       => 'Найти новость',
			'not_found'          => 'Новость не найдена',
			'not_found_in_trash' => 'В корзине новость не найдена',
			'menu_name'          => 'Новости',
		],
		'public'           => true,
		'rewrite'          => true,
    'publicly_queryable' => false,
		'map_meta_cap'     => true,
		'has_archive'      => false,
		'hierarchical'     => false,
		'menu_position'    => 11,
		'menu_icon'        => 'dashicons-welcome-write-blog',
		'supports'         => [ 'title', 'editor', 'thumbnail'],
		'show_in_rest'     => false,
		'show_ui'          => true,
		'show_in_menu'     => true,
	] );

}, 9 );
