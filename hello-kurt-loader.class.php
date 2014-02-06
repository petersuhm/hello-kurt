<?php
/**
 * Hello_Kurt_Loader
 *
 * Loads Hello_Kurt to display a random line of Smells Like Teen Spirit on every
 * admin page. 
 *
 * @package Hello_Kurt
 * @since   1.1
 */
class Hello_Kurt_Loader {

	function __construct() {
		if ( is_admin() ) {
			$hello_kurt = new Hello_Kurt;
			add_action( 'admin_notices', array( $hello_kurt, 'print_random_line' ) );
			add_action( 'admin_head', array( $hello_kurt, 'set_css' ) );
			add_action( 'admin_head', array( $hello_kurt, 'print_css' ) );
		}
	}

}
