<?php
/**
 * Enqueue theme assets
 *
 * @package Restaurant
 */

namespace RESTAURANT_THEME\Inc;

use RESTAURANT_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		/**
		 * The 'enqueue_block_assets' hook includes styles and scripts both in editor and frontend,
		 * except when is_admin() is used to include them conditionally
		 */
		// add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	function register_scripts() {
		// wp_die('scripts');
		// wp_die(RESTAURANT_DIR_URI);
		// wp_die(get_theme_file_uri());
		// wp_die(RESTAURANT_DIR_PATH);
		wp_register_script('our-vendors-js', RESTAURANT_DIR_URI . '/bundled-assets/vendors~scripts.c61091bb2e8c5230afd2.js', [], filemtime( RESTAURANT_DIR_PATH . '/bundled-assets/vendors~scripts.c61091bb2e8c5230afd2.js'), true);
		wp_register_script('main-restaurant-js', RESTAURANT_DIR_URI . '/bundled-assets/scripts.f894f1b93dab7ff89ab0.js', [], filemtime( RESTAURANT_DIR_PATH . '/bundled-assets/scripts.f894f1b93dab7ff89ab0.js'), true);


		wp_enqueue_script('our-vendors-js');
		wp_enqueue_script('main-restaurant-js');
	}

	function register_styles() {
		wp_register_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_register_style('material-icons', '//fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp');
		wp_register_style('bootstrap-ico', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
		wp_register_style('main-styles', RESTAURANT_DIR_URI . '/bundled-assets/styles.f894f1b93dab7ff89ab0.css', [], filemtime( RESTAURANT_DIR_PATH . '/bundled-assets/styles.f894f1b93dab7ff89ab0.css'));


		wp_enqueue_style('custom-google-fonts');
		wp_enqueue_style('material-icons');
		wp_enqueue_style('bootstrap-ico');
		wp_enqueue_style('main-styles');

	}

	/**
	 * Enqueue editor scripts and styles.
	 */
	
	// public function enqueue_editor_assets() {

	// 	$asset_config_file = sprintf( '%s/assets.php', AQUILA_BUILD_PATH );

	// 	if ( ! file_exists( $asset_config_file ) ) {
	// 		return;
	// 	}

	// 	$asset_config = require_once $asset_config_file;

	// 	if ( empty( $asset_config['js/editor.js'] ) ) {
	// 		return;
	// 	}

	// 	$editor_asset    = $asset_config['js/editor.js'];
	// 	$js_dependencies = ( ! empty( $editor_asset['dependencies'] ) ) ? $editor_asset['dependencies'] : [];
	// 	$version         = ( ! empty( $editor_asset['version'] ) ) ? $editor_asset['version'] : filemtime( $asset_config_file );

	// 	// Theme Gutenberg blocks JS.
	// 	if ( is_admin() ) {
	// 		wp_enqueue_script(
	// 			'aquila-blocks-js',
	// 			AQUILA_BUILD_JS_URI . '/blocks.js',
	// 			$js_dependencies,
	// 			$version,
	// 			true
	// 		);
	// 	}

	// 	// Theme Gutenberg blocks CSS.
	// 	$css_dependencies = [
	// 		'wp-block-library-theme',
	// 		'wp-block-library',
	// 	];

	// 	wp_enqueue_style(
	// 		'aquila-blocks-css',
	// 		AQUILA_BUILD_CSS_URI . '/blocks.css',
	// 		$css_dependencies,
	// 		filemtime( AQUILA_BUILD_CSS_DIR_PATH . '/blocks.css' ),
	// 		'all'
	// 	);

	// }

}
