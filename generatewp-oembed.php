<?php
/*
Plugin Name: GenerateWP oEmbed
Description: Adds oEmbed support for GenerateWP.com
Version: 1.2
Author: Rami Yushuvaev
Author URI: http://GenerateWP.com/
Text Domain: generatewp-oembed
Domain Path: /languages
License: GPL2+
*/



/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * GenerateWP oEmbed
 */
function generatewp_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www.)?generatewp.com/snippet/.*#i', 'http://api.generatewp.com/v1/oembed/', true );

}
add_action( 'init', 'generatewp_oembed_provider' );
