<?php

namespace Junior;

class Assets {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', [ $this, 'attach_assets' ] );
	}

	public function attach_assets() {
		// HTML Love
		$this->attach_style( '/static/build/css/style.min.css' );
		$this->attach_script( '/static/build/js/vendor.min.js' );
		$this->attach_script( '/static/build/js/main.min.js' );

		// Custom
		$this->attach_style( '/custom/custom.css' );
		$this->attach_script( '/custom/custom.js' );
	}

	private function attach_style( $path, $deps = [] ) {
		wp_enqueue_style( $this->get_handle( $path ), $this->get_url( $path ), $deps, $this->get_ver( $path ) );
	}

	private function attach_script( $path, $deps = [] ) {
		wp_enqueue_script( $this->get_handle( $path ), $this->get_url( $path ), $deps, $this->get_ver( $path ), true );
	}

	private function get_handle( $path ) {
		return sanitize_title( $path );
	}

	private function get_url( $path ) {
		return wp_normalize_path( get_theme_file_uri( $path ) );
	}

	private function get_ver( $path ) {
		return filemtime( get_theme_file_path( $path ) );
	}

}
