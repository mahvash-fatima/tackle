<?php
/**
 * Bootstraps the Tackle plugin.
 *
 * @package Tackle
 */

namespace Tackle;

/**
 * Main plugin bootstrap file.
 */
class Plugin extends Plugin_Base {

	/**
	 * Tackle Post Type.
	 *
	 * @var Tackle_Post_Type
	 */
	public $tackle_post_type;

	/**
	 * Initiate the plugin resources.
	 *
	 * Priority is 9 because WP_Customize_Widgets::register_settings() happens at
	 * after_setup_theme priority 10. This is especially important for plugins
	 * that extend the Customizer to ensure resources are available in time.
	 *
	 * @action after_setup_theme, 9
	 */
	public function init() {
		$this->config = apply_filters( 'tackle_plugin_config', $this->config, $this );
		$this->tackle_post_type = new Tackle_Post_Type( $this );
	}

	/**
	 * Register and enqueue scripts.
	 *
	 * @action wp_enqueue_scripts
	 */
	public function register_scripts() {
		global $post;

		if ( Tackle_Post_Type::SLUG === $post->post_type ) {
			wp_register_script( 'tackle-main', plugin_dir_url( __DIR__ ) . 'js/main.js', array( 'jquery' ), 0.1 );
			wp_enqueue_script( 'tackle-main' );
		}
	}

	/**
	 * Register and enqueue styles.
	 *
	 * @action wp_enqueue_scripts
	 */
	public function register_styles() {
		global $post;

		if ( Tackle_Post_Type::SLUG === $post->post_type ) {
			wp_register_style( 'tackle-styles', plugin_dir_url( __DIR__ ) . 'css/style.css' );
			wp_register_style( 'tackle-font-awesome', plugin_dir_url( __DIR__ ) . 'css/vendor/font-awesome/css/font-awesome.min.css' );
			wp_enqueue_style( 'tackle-styles' );
			wp_enqueue_style( 'tackle-font-awesome' );
			wp_register_style( 'tackle-fonts', tackle_fonts_url(), array(), null );
			wp_enqueue_style( 'tackle-fonts' );
		}
	}
}
