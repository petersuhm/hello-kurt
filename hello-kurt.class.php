<?php
/**
 * Hello_Kurt
 *
 * Randomly display a lyric from Smells Like Teen Spirit in the upper right of
 * the admin screen on every page.
 *
 * @package Hello_Kurt
 * @since   1.1
 */
class Hello_Kurt {

	private $css = '';
	private $lyrics = array();
	private $random_line = '';

	function __construct() {
		// Initialize values for lyrics (CSS will be set from a hook).
		$this->lyrics      = $this->get_lyrics();
		$this->random_line = $this->get_random_line( $html = true );
	}

	/**
	 * Some CSS to position the paragraph.
	 * 
	 * @return string HTML output.
	 */
	private function get_css() {
		// This makes sure that the positioning is also good for right-to-left languages
		$position = is_rtl() ? 'left' : 'right';
		$css = '<style type="text/css">
	#kurt {
		float: ' . $position . ';
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
</style>';
		$css = apply_filters( 'hello_kurt_css', $css );
		return $css;
	}

	/**
	 * These are the lyrics to Smells Like Teen Spirit.
	 * 
	 * @return array Lines of the lyrics.
	 */
	private function get_lyrics() {
		$lyrics = "Load up on guns, bring your friends 
It's fun to lose and to pretend 
She's overboard and self-assured 
Oh, no, I know a dirty word
Hello, hello, hello, how low 
Hello, hello, hello
With the lights out, it's less dangerous 
Here we are now, entertain us 
I feel stupid and contagious 
Here we are now, entertain us
A mulatto, an albino, a mosquito, my libido 
I'm worse at what I do best 
And for this gift I feel blessed 
Our little group has always been and always will until the end 
Hello, hello, hello, how low 
Hello, hello, hello
With the lights out, it's less dangerous 
Here we are now, entertain us 
I feel stupid and contagious 
Here we are now, entertain us 
A mulatto, an albino, a mosquito, my libido 
And I forget just why I taste
Oh, yeah, I guess it makes me smile 
I found it hard, it's hard to find 
Oh well, whatever, nevermind 
Hello, hello, hello, how low 
Hello, hello, hello
With the lights out, it's less dangerous 
Here we are now, entertain us 
I feel stupid and contagious 
Here we are now, entertain us 
A mulatto, an albino, a mosquito, my libido 
A denial, a denial, a denial, a denial";
		$lyrics = explode( "\n", $lyrics );
		$lyrics = apply_filters( 'hello_kurt_lyrics', $lyrics );
		return $lyrics;
	}

	/**
	 * A random line from the lyrics, to be positioned later via CSS.
	 * 
	 * @param  boolean $html Display the random line wrapped in HTML tag or not. 
	 * @return string        HTML or plain text output.
	 */
	private function get_random_line( $html = true ) {
		// Randomly choose a line
		$random_line = wptexturize( $this->lyrics[ mt_rand( 0, count( $this->lyrics ) - 1 ) ] );
		if ( true === $html ) {
			$random_line = '<p id="kurt">' . $random_line . '</p>';
		}
		$random_line = apply_filters( 'hello_kurt_random_line', $random_line );
		return $random_line;
	}

	/**
	 * Echo a given property.
	 * 
	 * @param  string $property Name of the property to be printed. 
	 * @return string           HTML or plain text output.
	 */
	private function __print( $property ) {
		if ( property_exists( $this, $property ) ) {
			echo $this->$property;
		}
	}

	/**
	 * Print random line.
	 */
	function print_random_line() {
		$this->__print( 'random_line' );
	}

	/**
	 * Print CSS.
	 */
	function print_css() {
		$this->__print( 'css' );
	}

	/**
	 * Set value for $this->css.
	 */
	function set_css() {
		$this->css = $this->get_css();
	}

}

