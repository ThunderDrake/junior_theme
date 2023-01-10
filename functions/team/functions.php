<?php

/**
 * Важная новость, находящаяся вверху списка новостей.
 */

/**
 * При запросе значения поля "Новость-молния" Новости устанавливаем галочку активной,
 * если во временной опции 'pinned_news_post_id' находится текущий ID поста.
 *
 * @param array $field
 *
 * @return array
 */
function acf_load_field_member_pinned( $field ) {
	if ( get_option( 'pinned_member_post_id' ) == get_the_ID() ) {
		$field['value'] = 1;
	}

	return $field;
}

add_filter( 'acf/load_field/name=team_member_main', 'acf_load_field_member_pinned' );


/**
 * Устанавливаем transient 'pinned_news_post_id', если выбрана галочка "Новость-Молния".
 *
 * @param $value
 * @param $new_post_id
 *
 * @return string
 */
function acf_update_value_member_pinned( $value, $new_post_id ) {
	$old_post_id = get_option( 'pinned_member_post_id' );

	if ( $value == 1 && $old_post_id == $new_post_id ) {
		return '';
	}

	if ( $value == 1 && $old_post_id !== $new_post_id ) {
		update_option( 'pinned_member_post_id', $new_post_id, false );

		return '';
	}

	if ( $value == 0 && $old_post_id == $new_post_id ) {
		delete_option( 'pinned_member_post_id' );

		return '';
	}

	return '';
}

add_filter( 'acf/update_value/name=team_member_main', 'acf_update_value_member_pinned', 10, 2 );

/**
 * Возвращает объект прикреплённой новости.
 *
 * @return WP_Post|null
 */
function get_pinned_member_post() {
	$pinned_id = get_option( 'pinned_member_post_id' );

	if ( ! $pinned_id ) {
		return null;
	}

	return get_post( $pinned_id );
}
