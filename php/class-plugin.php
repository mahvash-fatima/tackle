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
			wp_register_script( 'tackle-slick-script', plugin_dir_url( __DIR__ ) . 'js/vendor/slick/slick.min.js', array( 'jquery' ), null, true );
			wp_register_script( 'tackle-main', plugin_dir_url( __DIR__ ) . 'js/main.js', array( 'jquery' ), null, true );
			wp_register_script( 'tackle-foundation-jquery', plugin_dir_url( __DIR__ ) . 'js/vendor/foundation/jquery.js', array( 'jquery' ), 0.1 );
			wp_register_script( 'tackle-what-input', plugin_dir_url( __DIR__ ) . 'js/vendor/foundation/what-input.js', array( 'jquery' ), 0.1 );
			wp_register_script( 'tackle-foundation', plugin_dir_url( __DIR__ ) . 'js/vendor/foundation/foundation.js', array( 'jquery' ), 0.1 );
			wp_register_script( 'tackle-foundation-app', plugin_dir_url( __DIR__ ) . 'js/vendor/foundation/app.js', array( 'jquery' ), 0.1 );
			wp_register_script( 'tackle-bpopup', plugin_dir_url( __DIR__ ) . 'js/vendor/jquery.bpopup.min.js', array( 'jquery' ), 0.1 );
			wp_enqueue_script( 'tackle-slick-script', 19, 1 );
			wp_enqueue_script( 'tackle-main', 20, 1 );
			wp_enqueue_script( 'tackle-foundation-jquery' );
			wp_enqueue_script( 'tackle-what-input' );
			wp_enqueue_script( 'tackle-foundation' );
			wp_enqueue_script( 'tackle-foundation-app' );
			wp_enqueue_script( 'tackle-bpopup' );
			wp_localize_script( 'tackle-main', 'tackleEntry', array(
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'security' => wp_create_nonce( 'tackle_ajax_hook' ),
			) );
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
			wp_register_style( 'tackle-styles', plugin_dir_url( __DIR__ ) . 'css/sass/style.css' );
			wp_register_style( 'tackle-font-awesome', plugin_dir_url( __DIR__ ) . 'css/vendor/font-awesome/css/font-awesome.min.css' );
			wp_register_style( 'tackle-foundation', plugin_dir_url( __DIR__ ) . 'css/vendor/foundation/foundation.css' );
			wp_register_style( 'tackle-slick-styles', plugin_dir_url( __DIR__ ) . 'css/vendor/slick/slick.css' );
			wp_register_style( 'tackle-slick-theme-styles', plugin_dir_url( __DIR__ ) . 'css/vendor/slick/slick-theme.css' );
			wp_enqueue_style( 'tackle-styles' );
			wp_enqueue_style( 'tackle-font-awesome' );
			wp_enqueue_style( 'tackle-foundation' );
			wp_register_style( 'tackle-fonts', tackle_fonts_url(), array(), null );
			wp_enqueue_style( 'tackle-fonts' );
			wp_enqueue_style( 'tackle-slick-styles' );
			wp_enqueue_style( 'tackle-slick-theme-styles' );
		}
	}
}
