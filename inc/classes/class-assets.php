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
    if (strstr($_SERVER['SERVER_NAME'], 'restaurant.local0')) {

        add_action( 'wp_enqueue_scripts', [ $this, 'dev_scripts' ] );
    } else {
      add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
      add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );

  }
    /**
     * The 'enqueue_block_assets' hook includes styles and scripts both in editor and frontend,
     * except when is_admin() is used to include them conditionally
     */
    // add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_assets' ] );
}

function register_scripts() {
    wp_register_script('vendors', RESTAURANT_DIR_URI . '/bundled-assets/vendors~scripts.8c53231443eb1a832602.js', [], filemtime( RESTAURANT_DIR_PATH . '/bundled-assets/styles.8f5a41971d1f86baaf0f.css'), true);
    wp_register_script('restaurant', RESTAURANT_DIR_URI . '/bundled-assets/scripts.8f5a41971d1f86baaf0f.js', [], filemtime( RESTAURANT_DIR_PATH . '/bundled-assets/scripts.8f5a41971d1f86baaf0f.js'), true);


    wp_enqueue_script('vendors');
    wp_enqueue_script('restaurant');
}

function register_styles() {
    wp_register_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_register_style('material-icons', '//fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp');
    wp_register_style('bootstrap-ico', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
    wp_register_style('main-styles', RESTAURANT_DIR_URI . '/bundled-assets/styles.8f5a41971d1f86baaf0f.css', [], filemtime( RESTAURANT_DIR_PATH . '/bundled-assets/styles.8f5a41971d1f86baaf0f.css'));


    wp_enqueue_style('custom-google-fonts');
    wp_enqueue_style('material-icons');
    wp_enqueue_style('bootstrap-ico');
    wp_enqueue_style('main-styles');

}

function dev_scripts() {
    wp_register_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_register_style('material-icons', '//fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp');
    wp_register_style('bootstrap-ico', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
    wp_register_script('main-restaurant-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);


    wp_enqueue_style('custom-google-fonts');
    wp_enqueue_style('material-icons');
    wp_enqueue_style('bootstrap-ico');
    wp_enqueue_script('main-restaurant-js');
}

}