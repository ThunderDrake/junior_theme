<?php

add_filter( 'template_include', function ( $template ) {
	return is_front_page() ? locate_template( '/templates/home-page/home-page.php' ) : $template;
}, 99 );
