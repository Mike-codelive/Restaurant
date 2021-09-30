<?php
/**
 * funtions file.
 *
 * @package Restaurant
 */


// print_r(filemtime( get_template_directory() . '/bundled-assets/vendors~scripts.c61091bb2e8c5230afd2.js'));
// print_r(get_template_directory());


if ( ! defined( 'RESTAURANT_DIR_PATH' ) ) {
  define( 'RESTAURANT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'RESTAURANT_DIR_URI' ) ) {
  define( 'RESTAURANT_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}



require_once RESTAURANT_DIR_PATH . '/inc/helpers/autoloader.php';

function restaurant_get_theme_instance() {
  \RESTAURANT_THEME\Inc\RESTAURANT_THEME::get_instance();
}


restaurant_get_theme_instance();

function restaurant_scripts() {
  // wp_register_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  // wp_register_style('Material-Icons', '//fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp');
  // wp_register_style('Bootstrap-Ico', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
  // // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  // // wp_enqueue_script('gSap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', NULL, '1.0', true); 

  // wp_enqueue_style('custom-google-fonts');
  // wp_enqueue_style('Material-Icons');
  // wp_enqueue_style('Bootstrap-Ico');

  // if (strstr($_SERVER['SERVER_NAME'], 'restaurant.local')) {

  //   wp_enqueue_script('main-restaurant-js', 'http://localhost:3000/bundled.js', [], '1.0', true);

  // } else {
  //   wp_register_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.c61091bb2e8c5230afd2.js'), [], filemtime( get_template_directory() . '/bundled-assets/vendors~scripts.c61091bb2e8c5230afd2.js'), true);
  //   wp_register_script('main-restaurant-js', get_theme_file_uri('/bundled-assets/scripts.f894f1b93dab7ff89ab0.js'), [], filemtime( get_template_directory() . '/bundled-assets/scripts.f894f1b93dab7ff89ab0.js'), true);
  //   wp_register_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.f894f1b93dab7ff89ab0.css'), [], filemtime( get_template_directory() . '/bundled-assets/styles.f894f1b93dab7ff89ab0.css'));

  //   wp_enqueue_script('our-vendors-js');
  //   wp_enqueue_script('main-restaurant-js');
  //   wp_enqueue_style('our-main-styles');
  // }
}

// add_action('wp_enqueue_scripts', 'restaurant_scripts');

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

add_action('pre_get_posts', 'university_adjust_queries');


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

// show_admin_bar( true );
