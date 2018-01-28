<?php
/**
 * Tackle custom post type.
 *
 * @package Tackle
 */

namespace Tackle;

/**
 * Tackle post type.
 */
class Tackle_Post_Type {

	/**
	 * Post Type Tackle.
	 */
	const SLUG = 'tackle';

	/**
	 * Required Pages.
	 *
	 * @var array
	 */
	public $required_pages = array();

	/**
	 * Tackle_Post_Type constructor.
	 *
	 * @param Plugin $plugin Plugin.
	 */
	public function __construct( Plugin $plugin ) {
		$this->plugin = $plugin;

		$labels = array(
			'name'               => _x( 'Tackle', 'post type general name', 'tackle' ),
			'singular_name'      => _x( 'Tackle', 'post type singular name', 'tackle' ),
			'menu_name'          => _x( 'Tackle', 'admin menu', 'tackle' ),
			'name_admin_bar'     => _x( 'Tackle', 'add new on admin bar', 'tackle' ),
			'add_new'            => _x( 'Add New', 'tackle', 'tackle' ),
			'add_new_item'       => __( 'Add New Tackle', 'tackle' ),
			'new_item'           => __( 'New Tackle', 'tackle' ),
			'edit_item'          => __( 'Edit Tackle', 'tackle' ),
			'view_item'          => __( 'View Tackle', 'tackle' ),
			'all_items'          => __( 'All Tackle', 'tackle' ),
			'search_items'       => __( 'Search Tackle', 'tackle' ),
			'parent_item_colon'  => __( 'Parent Tackle:', 'tackle' ),
			'not_found'          => __( 'No tackles found.', 'tackle' ),
			'not_found_in_trash' => __( 'No tackles found in Trash.', 'tackle' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'tackle' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'tackle', $args );

		$this->required_pages = array(
			'account',
			'appearance',
			'authorized-oauth2-api-clients',
			'configure',
			'configure-online-payment',
			'create-new-oauth2-api-client',
			'customize-modules',
			'default-values',
			'delete-account',
			'detailed-time',
			'edit-preferences',
			'expenses',
			'expense-categories',
			'help',
			'home',
			'import-data-into-tackle',
			'import-expenses-from-csv',
			'import-from-freshbooks',
			'import-timesheets-from-csv',
			'invoices',
			'item-types',
			'clients',
			'manage',
			'manage-tasks',
			'messages',
			'my-profile',
			'my-time-report',
			'new-client',
			'new-project',
			'online-payment',
			'projects',
			'recurring',
			'referrals',
			'report',
			'reports',
			'reports-expense',
			'retainers',
			'settings',
			'security',
			'signout',
			'tasks',
			'time',
			'translations',
			'uninvoiced',
			'upgrade',
			'your-projects',
		);

		$this->create_pages();

		add_filter( 'single_template', array( $this, 'add_page_template' ) );
		add_filter( 'template_include', array( $this, 'add_page_template' ) );
		add_action( 'wp_ajax_tackle_ajax_hook', array( $this, 'tackle_save_time_entry' ) );
		add_action( 'wp_ajax_nopriv_tackle_ajax_hook', array( $this, 'tackle_save_time_entry' ) );
	}

	/**
	 * Creates required Pages for custom post type.
	 */
	public function create_pages() {
		foreach ( $this->required_pages as $page_title ) {
			$page_exists = get_page_by_title( $page_title, OBJECT, self::SLUG );
			if ( ! $page_exists ) {
				$args = array(
					'post_title' => $page_title,
					'post_type' => self::SLUG,
					'ping_status' => false,
					'post_status' => 'publish',
				);

			    wp_insert_post( $args );

				exit();
			}
		}
	}

	/**
	 * Adds page template.
	 *
	 * @param string $single page template path.
	 * @return string $single page template path.
	 */
	public function add_page_template( $single ) {
		global $post;

		if ( self::SLUG === $post->post_type ) {
			if ( is_archive() ) {
				$template_path = plugin_dir_path( __DIR__ ) . 'page-templates/home.php';
				if ( file_exists( $template_path ) ) {
					return $template_path;
				}
			} else {
				foreach ( $this->required_pages as $page_name ) {
					if ( $post->post_name === $page_name ) {
						$template_path = plugin_dir_path( __DIR__ ) . 'page-templates/' . $page_name . '.php';
						if ( file_exists( $template_path ) ) {
							return $template_path;
						}
					}
				}
			}
		}

		return $single;
	}

	public function tackle_save_time_entry() {

			$nonce = $_REQUEST[ 'security' ];

			if ( ! wp_verify_nonce( $nonce, 'tackle_ajax_hook' ) ) {
				wp_send_json_error();
			}

			$post_title = $_POST['postTitle'];

			$post_array = array(
				'post_type' => 'tackle_entry',
				'post_title' => $post_title,
				'post_status'   => 'publish',
				'post_author'   => 1,
			);

			if( empty( $post_id ) ) {
				$post_id = wp_insert_post( $post_array );
			}

			if(empty( $post_title )) {
				$post_title = get_the_title( $_POST[$post_id] );
			}

			wp_send_json_success( array(
				'post_id' => $post_id,
				'post_title' => $post_title,
			) );

		}

}
