<?php
/**
 * funtions file.
 *
 * @package Restaurant
 */


if ( ! defined( 'RESTAURANT_DIR_PATH' ) ) {
  define( 'RESTAURANT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'RESTAURANT_DIR_URI' ) ) {
  define( 'RESTAURANT_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

// print_r(RESTAURANT_DIR_PATH);
// print_r(RESTAURANT_DIR_URI);
// print_r(get_theme_root());
// print_r(ABSPATH );

require_once RESTAURANT_DIR_PATH . '/inc/helpers/autoloader.php';
require_once RESTAURANT_DIR_PATH . '/inc/customize-social-icons.php';

function restaurant_get_theme_instance() {
  \RESTAURANT_THEME\Inc\RESTAURANT_THEME::get_instance();
}


restaurant_get_theme_instance();


// function university_files() {
//   wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
//   wp_enqueue_style('Material-Icons', '//fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp');
//   wp_enqueue_style('Bootstrap-Ico', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');


//   if (strstr($_SERVER['SERVER_NAME'], 'restaurant.localyt')) {

//     wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);

//   } else {
//     wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.05a9c615d75bc56f1488.css'));
//     wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.c61091bb2e8c5230afd2.js'), NULL, '1.0', true);
//     wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.05a9c615d75bc56f1488.js'), NULL, '1.0', true);
//   }
// }

// add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('professorLandscape', 400, 260, true);
  add_image_size('professorPortrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
}

// add_action('after_setup_theme', 'university_features');

function university_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

  if (!is_admin() AND is_post_type_archive('event') AND is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
      array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      )
    ));
  }
}

// add_action('pre_get_posts', 'university_adjust_queries');


function hero_callout($wp_customize) {
  $wp_customize->add_section('hero_callout_section', array(
    'title' => 'Hero'
  ));
  $wp_customize->add_setting('hero_callout_display', array(
    'default' => 'yes'
  ));
  $wp_customize->add_control(new WP_customize_control($wp_customize, 'hero_callout_display_control', array(
    'label' => 'display',
    'section' => 'hero_callout_section',
    'settings' => 'hero_callout_display',
    'type' => 'select',
    'choices' => array(
      false => 'no',
      true => 'yes'
    )
  )));
  $wp_customize->add_setting('hero_callout_headline', array(
    'default' => 'Welcome to our Restaurant'
  ));
  $wp_customize->add_control(new WP_customize_control($wp_customize, 'hero_callout_headline_control', array(
    'label' => 'headline',
    'section' => 'hero_callout_section',
    'settings' => 'hero_callout_headline'
  )));
  $wp_customize->add_setting('hero_callout_paragraph', array(
    'default' => "Revolutionize you workspace. Whether you're an established enterprise or a growing startup, discover spaces that inspire you most impactful work."
  ));
  $wp_customize->add_control(new WP_customize_control($wp_customize, 'hero_callout_paragraph_control', array(
    'label' => 'paragraph',
    'section' => 'hero_callout_section',
    'settings' => 'hero_callout_paragraph',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('hero_callout_image');
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'hero_callout_image_control', array(
    'label' => 'image',
    'section' => 'hero_callout_section',
    'settings' => 'hero_callout_image',
    'width' => 1080,
    'height' => 720
  )));
};

add_action('customize_register', 'hero_callout');


function productivity($wp_customize) {
  $wp_customize->add_section('productivity_callout_section', array(
    'title' => 'Productivity'
  ));


  $wp_customize->add_setting('productivity_callout_display', array(
    'default' => 'yes'
  ));
  $wp_customize->add_control(new WP_customize_control($wp_customize, 'productivity_callout_display_control', array(
    'label' => 'display productivity',
    'section' => 'productivity_callout_section',
    'settings' => 'productivity_callout_display',
    'type' => 'select',
    'choices' => array(
      false => 'no',
      true => 'yes'
    )
  )));


  $wp_customize->add_setting('productivity_callout_title', array(
    'default' => 'Why ' . get_bloginfo('name')
  ));
  $wp_customize->add_control(new WP_customize_control($wp_customize, 'productivity_callout_title_control', array(
    'label' => 'title',
    'section' => 'productivity_callout_section',
    'settings' => 'productivity_callout_title'
  )));


  $wp_customize->add_setting('productivity_callout_headline', array(
    'default' => 'More productivity Less burn out'
  ));
  $wp_customize->add_control(new WP_customize_control($wp_customize, 'productivity_callout_headline_control', array(
    'label' => 'headline',
    'section' => 'productivity_callout_section',
    'settings' => 'productivity_callout_headline'
  )));


  $wp_customize->add_setting('productivity_callout_paragraph', array(
    'default' => "Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Dolore, fuga. Minus atque accusantium adipisci quibusdam, vero nisi veniam. Voluptates minus earum animi, eum saepe, velit."
  ));
  $wp_customize->add_control(new WP_customize_control($wp_customize, 'productivity_callout_paragraph_control', array(
    'label' => 'paragraph',
    'section' => 'productivity_callout_section',
    'settings' => 'productivity_callout_paragraph',
    'type' => 'textarea'
  )));


  $wp_customize->add_setting('productivity_callout_card_headline', array(
    'default' => get_bloginfo( "name" ) . ' Agency'
  ));
  $wp_customize->add_control(new WP_customize_control($wp_customize, 'productivity_callout_card_headline_control', array(
    'label' => 'headline card',
    'section' => 'productivity_callout_section',
    'settings' => 'productivity_callout_card_headline'
  )));


  $wp_customize->add_setting('productivity_callout_card_paragraph', array(
    'default' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos odio nihil eaque repellendus."
  ));
  $wp_customize->add_control(new WP_customize_control($wp_customize, 'productivity_callout_card_paragraph_control', array(
    'label' => 'paragraph card',
    'section' => 'productivity_callout_section',
    'settings' => 'productivity_callout_card_paragraph',
    'type' => 'textarea'
  )));


  $wp_customize->add_setting('productivity_callout_image');
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'productivity_callout_image_control', array(
    'label' => 'image',
    'section' => 'productivity_callout_section',
    'settings' => 'productivity_callout_image',
    'width' => 550,
    'height' => 550
  )));
};

add_action('customize_register', 'productivity');


function color_theme ($wp_customize) {

  $wp_customize->add_setting( 'color_callout_btn' , array(
    'default'     => "#0fbd94",
    'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_callout_btn', array(
    'label'        => __( 'buttons & Card', 'mytheme' ),
    'section'    => 'colors',
  ) ) );

}


add_action('customize_register', 'color_theme');


function restaurant_customize_css() {
  ?>
  <style type="text/css">
  :root {
    --primaryColor: <?php echo get_theme_mod('color_callout_btn'); ?>;
  }
</style>
<?php
}

add_action( 'wp_head', 'restaurant_customize_css');



class Restaurant_Walker extends Walker_Nav_Menu {


  public function start_lvl( &$output, $depth = 0, $args = [] ){
    $output         .=  '<ul class="dropdown-menu">';
  }
  public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ){
    $output         .=  '<li class="nav-item text-center h-100">';
    $output         .=  $args->before;
    $output         .=  '<a class="nav-link d-flex align-items-center" href="' .$item->url.'">';
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

show_admin_bar( false );