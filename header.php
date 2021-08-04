<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--   <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
            <li <?php if (get_post_type() == 'program') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('program') ?>">Programs</a></li>
            <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"';  ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
            <li><a href="#">Campuses</a></li>
            <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header> -->

  <header>

    <nav class="navbar container-md navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container-fluid" id="navbarNav">

          <ul class="navbar-nav text-center mb-3 mb-lg-0">
            <li class="nav-item me-3 me-mb-0">
              <a class="nav-link active" aria-current="page" href="#"><span> Home</span></a>
            </li>
            <li class="nav-item me-3 me-mb-0">
              <a class="nav-link" href="#"> <span>Features</span></a>
            </li>
            <li class="nav-item me-3 me-mb-0">
              <a class="nav-link" href="#"> <span>Pricing</span></a>
            </li>
          </ul>
          

          <div class="d-flex justify-content-center justify-content-lg-end flex-column flex-lg-row container-fluid">

            <div class="d-flex justify-content-center justify-content-lg-end me-3 mb-5 mb-lg-0">
              <div class="position-relative">
                <input type="text" class="form-control shadow border border-light" id="searchImput" aria-describedby="search">
                <i class="fa fa-search position-absolute top-50 end-0 me-3 translate-middle-y"></i>
                
              </div>

            </div>
            

            <div class="d-flex justify-content-center justify-content-lg-end btn-navbar">
              <button href="#" type="button" class="btn flex-shrink-1  btn-group-sm btn-navbar__primary" role="group">Login</button>
            </div>
            
          </div>

        </div>
      </div>

    </nav>
  </header>
