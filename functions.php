<?php

/*function pageBanner($args = NULL) {

  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    }
  }

  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>
  </div>
<?php }*/

// function trimString($string, $len) {
//   if (!$len) {
//     $len = -1;
//   }
//   // return substr($string, start)
//   echo $string ? wordwrap(substr($string, 0, $len), $len, "...") : $string;
//   // return $boolean;
// }

// function postContent($conItem = '', $len = false) {

//   // foreach ($conItem as $key => $value) {
//   //   $title = $key == 'title' ? trimString(get_the_title(), $len) : 'kitchen';
//   //   $excerpt = $key == 'excerpt' ? trimString(get_the_excerpt(), $len) : 'recent content Lorem, ipsum dolor sit amet consectetur, adipisicing elit';
//   //   $content = $key == 'content' ? trimString(get_the_content(), $len) : 'recent content Lorem, ipsum dolor sit amet consectetur, adipisicing elit';
//   // }


//   // $contentBase;
//   switch ($conItem) {
//     case 'content';
//     echo trimString(get_the_content(), $len);
//     break;

//     default:
//       // code...
//     break;
//   }

//   // echo $contentBase;


//   // $title = strlen(get_the_title()) == 0 ? 'kitchen' : trimString(get_the_title(), $len);
//   // $excerpt = strlen(get_the_excerpt()) == 0 ? 'recent content Lorem, ipsum dolor sit amet consectetur, adipisicing elit' : trimString(get_the_excerpt(), $len);
//   // $content = strlen(get_the_content()) == 0 ? 'recent content Lorem, ipsum dolor sit amet consectetur, adipisicing elit' : trimString(get_the_content(), $len);

//   // echo wp_trim_words(get_the_content(), 18);
//   // substr(, start)
//   // wordwrap(substr($content, $), 20, "<br />\n");

// }


function university_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('Material-Icons', '//fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp');
  wp_enqueue_style('Bootstrap-Ico', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
  
  // wp_enqueue_script('gSap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', NULL, '1.0', true); 

  if (strstr($_SERVER['SERVER_NAME'], 'restaurant.local')) {

    wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);

  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.df2f99216876fb9b504e.js'), NULL, '1.0', true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.ce8718c0ff8b0537b614.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.ce8718c0ff8b0537b614.css'));
  }
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('professorLandscape', 400, 260, true);
  add_image_size('professorPortrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'university_features');

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
// show_admin_bar( false );
