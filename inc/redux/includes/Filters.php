<?php

namespace inc\redux\includes;

class Filters extends Headers {

	/**
	 * Filters constructor.
	 */
	public function __construct() {
		add_filter( 'redux/options/' . static::$opt_name . '/compiler', array( $this, 'compiler_action' ), 10, 3 );
	}


	/**
	 * @param $options
	 * @param $css
	 * @param $changed_values
	 */
	public function compiler_action( $options, $css, $changed_values ) {
		$file = fopen( stolTheme::$theme_path . '/assets/css/generate.css', 'w+' );

		fwrite( $file, $css );

		fclose( $file );
	}

}