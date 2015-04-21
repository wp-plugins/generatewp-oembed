<?php
/*
Plugin Name: GenerateWP oEmbed
Plugin URI:  https://wordpress.org/plugins/generatewp-oembed/
Description: Embed code snippets from GenerateWP.com into your WordPress site
Version:     1.2
Author:      Rami Yushuvaev
Author URI:  http://GenerateWP.com/
Text Domain: generatewp-oembed
Domain Path: /languages
*/



/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Register oEmbed Provider
 */
function generatewp_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www.)?generatewp.com/snippet/.*#i', 'http://api.generatewp.com/v1/oembed/', true );

}
add_action( 'init', 'generatewp_oembed_provider' );
