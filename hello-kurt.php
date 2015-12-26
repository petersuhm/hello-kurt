<?php
/**
 * Hello Kurt
 *
 * A plugin for all those nineties' lovers who just don't feel to much
 * identified by Hello Dolly. When activated, you will randomly see a lyric from
 * Smells Like Teen Spirit in the upper right of your admin screen on every page.
 *
 * @package   Hello_Kurt
 * @version   1.1
 * @author    Andrés Villarreal <andrezrv@gmail.com>
 * @license   GPL-2.0
 * @link      http://github.com/andrezrv/hello-kurt
 * @copyright 2013-2016 Andrés Villarreal
 *
 * @wordpress-plugin
 * Plugin Name: Hello Kurt
 * Plugin URI: http://wordpress.org/extend/plugins/hello-kurt/
 * Description: A plugin for all those nineties' lovers who just don't feel to much identified by <a href="http://wordpress.org/plugins/hello-dolly/">Hello Dolly</a>. When activated, you will randomly see a lyric from <cite>Smells Like Teen Spirit</cite> in the upper right of your admin screen on every page.
 * Author: Andr&eacute;s Villarreal
 * Author URI: http://aufieroinformatica.com/wordpress/
 * Version: 1.1
 */
// Load Hello Kurt class.
require( dirname( __FILE__ ) . '/hello-kurt.class.php' );
// Load Hello Kurt Loader class.
require( dirname( __FILE__ ) . '/hello-kurt-loader.class.php' );
// Load Hello Kurt.
new Hello_Kurt_Loader;
