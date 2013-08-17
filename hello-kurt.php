<?php
/**
 * @package Hello_Kurt
 * @version 1.0
 */
/*
Plugin Name: Hello Kurt
Plugin URI: http://wordpress.org/plugins/hello-kurt/
Description: Just as <a href="http://wordpress.org/plugins/hello-dolly/">Hello Dolly</a>, this is not just a plugin, it symbolizes the angst and disconformity that eventually lead to the hope and enthusiasm of an entire generation wanting to make a change and mark a difference. When activated you will randomly see a lyric from <cite>Smells Like Teen Spirit</cite> in the upper right of your admin screen on every page.
Author: Andr&eacute;s Villarreal
Version: 1.0
*/

function hello_kurt_get_lyric() {
	/** These are the lyrics to Smells Like Teen Spirit */
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

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function hello_kurt() {
	$chosen = hello_kurt_get_lyric();
	echo "<p id='kurt'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_kurt' );

// We need some CSS to position the paragraph
function kurt_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#kurt {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'kurt_css' );

?>
