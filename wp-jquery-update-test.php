<?php
/*
 * Plugin Name: Test jQuery Updates
 * Plugin URI: https://wordpress.org/plugins/wp-jquery-update-test
 * Description: A feature plugin to help with testing updates of the jQuery and jQuery UI JavaScript libraries (not intended for use in production).
 * Version: 3.0.2
 * Requires at least: 6.5
 * Tested up to: 6.8
 * Requires PHP: 7.0
 * Author: The WordPress Team
 * Author URI: https://wordpress.org
 * Contributors: wordpressdotorg, azaozz
 * License: GPLv2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-jquery-update-test
 * Network: true
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

// Only for WP 6.5, 6.6, and 6.7 (alpha, beta, RC, and release)
if ( version_compare( $GLOBALS['wp_version'], '6.5', '>=' ) && version_compare( $GLOBALS['wp_version'], '6.9-alpha', '<' ) ) {
	include_once __DIR__ . '/class_wp_jquery_update_test.php';
}
