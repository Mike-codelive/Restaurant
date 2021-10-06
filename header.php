<?php 
/**
 * Main template header.
 *
 * @package Restaurant
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php
  if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
?>

<header>

    <nav class="navbar bgc-white container-md navbar-expand-xl navbar-light">
      <div class="container-fluid align-items-baseline">

        <!--         <a class="navbar__logo text-decoration-none text-dark fw-bolder fs-2" href="#"><span class="site-title"><?php echo get_bloginfo( 'name' ); ?></span>.</a> -->


        <?php 
        if ( function_exists( 'the_custom_logo' )) {
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

          if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
        } else {
            echo '<a class="navbar__logo text-decoration-none text-dark fw-bolder fs-2" href="#"><span class="site-title"><img src="'. get_theme_file_uri("/images/icons/logo.png"). '" alt="logo"></span></a>';
        }
    }

    ?>

    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse container-fluid" id="navbarNav">

      <div class="navbar__links">
        <!-- <ul class="text-center mb-3 mb-xl-0 d-flex flex-column flex-xl-row"> -->

<!--               <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><span> Home</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span>Coworkspace</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span>Services</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span>Reviews</span></a>
            </li> -->

            <?php 
            if (has_nav_menu( 'restaurant-header-menu') ) {
                wp_nav_menu([
                    'theme_location' => 'restaurant-header-menu',
                    'container' => false,
                    'fallback_cb' => false,
                    'depth' => 4,
                    'menu_class' => 'text-center mb-3 mb-xl-0 d-flex flex-column flex-xl-row',
                    'container_class' => 'jeff lol'

                ]);
            }
            ?>

            <!-- </ul> -->
        </div>

        <div class="container-fluid d-flex justify-content-center justify-content-xl-end">
            <button href="#" type="button" class="btn flex-shrink-1 btn-sm btn--green shadow-none btn--nav" role="group">Sign Up</button>
        </div>

    </div>
</div>

</nav>
</header>
