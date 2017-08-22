<?php
/**
 * Plugin Name: Tackle
 * Plugin URI: https://github.com/mahvash-fatima/tackle
 * Description: Creates timer.
 * Version: 0.1
 * Author:  Mahvash Fatima
 * Author URI: https://github.com/mahvash-fatima/
 * License: GPLv2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: tackle
 * Domain Path: /languages
 *
 * Copyright (c) 2016 Mahvash Fatima (https://github.com/mahvash-fatima)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package Tackle
 */

if ( version_compare( phpversion(), '5.3', '>=' ) ) {
	require_once __DIR__ . '/instance.php';
} else {
	if ( defined( 'WP_CLI' ) ) {
		WP_CLI::warning( _tackle_php_version_text() );
	} else {
		add_action( 'admin_notices', '_tackle_php_version_error' );
	}
}

/**
 * Admin notice for incompatible versions of PHP.
 */
function _tackle_php_version_error() {
	printf( '<div class="error"><p>%s</p></div>', esc_html( _tackle_php_version_text() ) );
}

/**
 * String describing the minimum PHP version.
 *
 * @return string
 */
function _tackle_php_version_text() {
	return __( 'Tackle plugin error: Your version of PHP is too old to run this plugin. You must be running PHP 5.3 or higher.', 'tackle' );
}

/**
 * Includes header for tackle templates.
 */
function tackle_get_header() {
	$header_path = plugin_dir_path( __FILE__ ) . 'page-templates/header.php';

	if ( file_exists( $header_path ) ) {
	    include_once $header_path;
	}
}

/**
 * Includes functions for tackle templates.
 */
function tackle_functions() {
	$functions_path = plugin_dir_path( __FILE__ ) . 'php/functions.php';

	if ( file_exists( $functions_path ) ) {
		include_once $functions_path;
	}
}

/**
 * Includes footer for tackle templates.
 */
function tackle_get_footer() {
	$footer_path = plugin_dir_path( __FILE__ ) . 'page-templates/footer.php';

	if ( file_exists( $footer_path ) ) {
		include_once $footer_path;
	}
}

/**
 * Register Google fonts for Tackle.
 *
 * Create your own tackle_fonts_url() function to override in a child plugin.
 *
 * @since Tackle 1.0
 *
 * @return string Google fonts URL for the plugin.
 */
function tackle_fonts_url() {
	$font_url = 'fonts.googleapis.com/css?family=Karla:400,700';

	return ( substr( site_url(), 0, 8 ) == 'https://') ? 'https://' . $font_url : 'http://' . $font_url;
}
