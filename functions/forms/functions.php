<?php
add_action( 'wp_ajax_form_action', 'ajax_action_callback' );
add_action( 'wp_ajax_nopriv_form_action', 'ajax_action_callback' );
/**
 * Обработка скрипта
 *
 * @see https://wpruse.ru/?p=3224
 */
function ajax_action_callback() {

	// Массив ошибок
	$err_message = array();

	// Проверяем nonce. Если проверкане прошла, то блокируем отправку
	if ( ! wp_verify_nonce( $_POST['nonce'], 'form-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}

	// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
	if ( false === $_POST['art_anticheck'] || ! empty( $_POST['art_submitted'] ) ) {
		wp_die( 'Пошел нахрен, мальчик!(c)' );
	}

	if ( empty( $_POST['Name'] ) || ! isset( $_POST['Name'] ) ) {
		$err_message['Name'] = 'Пожалуйста, введите ваше имя.';
	} else {
		$form_name = sanitize_text_field( $_POST['Name'] );
	}

	if ( empty( $_POST['Phone'] ) || ! isset( $_POST['Phone'] ) ) {
		$err_message['Phone'] = 'Пожалуйста, введите ваш телефон.';
	} else {
		$form_phone = sanitize_text_field( $_POST['Phone'] );
	}

	if ( empty( $_POST['Year'] ) || ! isset( $_POST['Year'] ) ) {
		$err_message['Year'] = 'Пожалуйста, введите год рождения.';
	} else {
		$form_year = sanitize_text_field( $_POST['Year'] );
	}

	if ( empty( $_POST['Place'] ) || ! isset( $_POST['Place'] ) ) {
		$err_message['Place'] = 'Пожалуйста, введите место тренировки.';
	} else {
		$form_place = sanitize_text_field( $_POST['Place'] );
	}

	// Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
	if ( $err_message ) {

		wp_send_json_error( $err_message );

	} else {

		// Указываем адресата
		$email_to = ['Knovogradskas@gmail.com', 'intsystem.k@gmail.com', 'ekucyr@gmail.com', 'Ovleonova1971@gmail.com', '2675505@mail.ru'];

		// Если адресат не указан, то берем данные из настроек сайта
		if ( ! $email_to ) {
			$email_to = get_option( 'admin_email' );
		}

		$body    = "Имя: $form_name \nТелефон для связи: $form_phone \n\nГод рождения: $form_year\nМесто для занятий: $form_place";
		$headers = 'From: ' . $form_name . ' <' . $email_to . '>' . "\r\n" . 'Reply-To: ' . $email_to;

		// Отправляем письмо
		wp_mail( $email_to, $art_subject, $body, $headers );

		// Отправляем сообщение об успешной отправке
		$message_success = 'Собщение отправлено. В ближайшее время я свяжусь с вами.';
		wp_send_json_success( $message_success );
	}

	// На всякий случай убиваем еще раз процесс ajax
	wp_die();

}
