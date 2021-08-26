<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>

    <nav class="navbar container-md navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar__brand text-decoration-none text-dark fw-bolder fs-4" href="#"><span class="site-title"><?php echo get_bloginfo( 'name' ); ?></span></a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container-fluid" id="navbarNav">

          <div class="navbar__links">
            <ul class="text-center mb-3 mb-lg-0 d-flex flex-column flex-lg-row mb-3 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link navbar__link active" aria-current="page" href="#"><span> Home</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link navbar__link" href="#"> <span>Features</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link navbar__link" href="#"> <span>Pricing</span></a>
              </li>
            </ul>
          </div>
          

          <div class="container-fluid d-flex justify-content-center justify-content-lg-end">
            <button href="#" type="button" class="btn flex-shrink-1 btn-sm btn-green btn-green--nav p-1 px-3" role="group">Login</button>
          </div>

        </div>
      </div>

    </nav>
  </header>
