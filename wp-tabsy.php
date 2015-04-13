<?php

/**
 * 
 * Plugin Name:       WP Tabsy
 * Plugin URI:        http://codecanyon.net/user/phpbits?ref=phpbits
 * Description:       Easily add smart responsive tab to your contents.
 * Version:           1.1
 * Author:            phpbits
 * Author URI:        http://codecanyon.net/user/phpbits?ref=phpbits
 * Text Domain:       wp-tabsy
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('WP_TABSY',dirname(__FILE__));
define('WP_TABSY_VERSION','1.0');

add_filter('widget_text', 'do_shortcode');

/*##################################
	REQUIRE
################################## */
require_once( dirname( __FILE__ ) . '/core/functions.enqueue.php' );
require_once( dirname( __FILE__ ) . '/core/functions.shortcode.php' );

?>