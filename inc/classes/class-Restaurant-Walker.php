<?php
/**
 * Register Menus
 *
 * @package Restaurant
 */

namespace RESTAURANT_THEME\Inc;
// require_once ABSPATH . 'wp-includes/class-walker-nav-menu.php';
// require_once ABSPATH . 'wp-includes/class-wp-walker.php';

use RESTAURANT_THEME\Inc\Traits\Singleton;
// use ABSPATH\wp-includes\Walker_Nav_Menu;


// use \Walker_Nav_Menu;

print_r(ABSPATH . 'wp-includes/class-wp-walker.php');

class Restaurant_Walker {

	use Singleton;
	use Walker_Nav_Menu;

	// protected function __construct() {

	// 	// load class.
	// 	$this->setup_hooks();
	// }

	// protected function setup_hooks() {
	// 	/**
	// 	 * Actions.
	// 	 */
	// }

	public function start_lvl( &$output, $depth = 0, $args = [] ){
		$output         .=  '<ul class="special-class">';
	}

	public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ){
		$output         .=  '<li class="special-class-item">';
		$output         .=  $args->before;
		$output         .=  '<a href="' . $item->url . '">';
		$output         .=  $args->link_before . $item->title . $args->link_after;
		$output         .=  '</a>';
		$output         .=  $args->after;
	}

	public function end_el( &$output, $item, $depth = 0, $args = [], $id = 0 ){
		$output         .=  '</li>';
	}

	public function end_lvl( &$output, $depth = 0, $args = [] ){
		$output         .=  '</ul>';
	}

}
