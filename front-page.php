<?php
/**
 * Main template front-page.
 *
 * @package Restaurant
 */


get_header();
require_once('Components/_api.php');

if (get_theme_mod('hero_callout_display') == true) {

  ?>

<section class='banner'>

    <div class="banner__header container-lg d-flex flex-column flex-lg-row justify-content-between px-3 px-lg-0">
      <h1 class="fw-bolder text-dark mb-3 mb-lg-0 me-0 me-lg-5">
        <?php echo get_theme_mod('hero_callout_headline'); ?>
      </h1>
      <p class="text-secondary align-self-md-center">
        <?php echo get_theme_mod('hero_callout_paragraph'); ?>
      </p>
    </div>

    <div class="position-relative d-flex justify-content-center
    justify-content-lg-start align-items-center container-fluid px-0">

    <img class="banner__hero" alt="hero img" src="
    <?php 
    if (!get_theme_mod('hero_callout_image')) {
      echo get_theme_file_uri('/images/hero-2.jpg');
      } else {
        echo wp_get_attachment_url(get_theme_mod('hero_callout_image'));
      } ?>
      "/>

      <div class="banner__bar bottom-0 d-flex flex-column flex-lg-row">

        <div class="d-flex flex-column flex-lg-row align-items-lg-center">

          <div>
            <a class="btn btn-secondary btn-book shadow-none border-0 text-start bg-transparent mb-lg-0 p-5" role="button" id="dropdownMenuLink" aria-expanded="false">
              <span class="text-secondary">DATE</span> <br>
              <input class="menu-book fw-bolder border-0 shadow-none" type="text" name="date" value="" />
              <div class="shadow ms-5 rounded-circle d-inline">
                <span class="material-icons-outlined text-dark p-1 rotate-select-arrow">
                  arrow_forward_ios
                </span>
              </div>
            </a>
          </div>

          <div class="dropdown">
            <a class="btn btn-secondary shadow-none border-0 text-start bg-transparent mb-lg-0 p-5" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="text-secondary">PERSONS</span> <br>
              <input class="menu-book shadow-none border-0 fw-bolder" type="text" name="persons" value="Select" />
              <div class="shadow ms-5 rounded-circle d-inline">
                <span class="material-icons-outlined text-dark p-1 rotate-select-arrow">
                  arrow_forward_ios
                </span>
              </div>
            </a>

            <ul class="dropdown-menu dropdown-book w-100 text-dark justify-content-center" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" value='1'>1</a></li>
              <li><a class="dropdown-item" value='2'>2</a></li>
              <li><a class="dropdown-item" value='3'>3</a></li>
              <li><a class="dropdown-item" value='4'>4</a></li>
              <li><a class="dropdown-item" value='5'>5</a></li>
              <li><a class="dropdown-item" value='6'>6</a></li>
              <li><a class="dropdown-item" value='7'>7</a></li>
              <li><a class="dropdown-item" value='8'>8</a></li>
              <li><a class="dropdown-item" value='9'>9</a></li>
              <li><a class="dropdown-item" value='10'>10</a></li>
              <li><a class="dropdown-item" value='11'>11</a></li>
              <li><a class="dropdown-item" value='12'>12</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <a class="btn btn-secondary shadow-none border-0 text-start bg-transparent mb-lg-0 p-5" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="text-secondary">MEMBER</span> <br>
              <input class="menu-book shadow-none border-0 fw-bolder" type="text" name="membership" value="Select" />
              <div class="shadow ms-5 rounded-circle d-inline">
                <span class="material-icons-outlined text-dark p-1 rotate-select-arrow">
                  arrow_forward_ios
                </span>
              </div>
            </a>

            <ul class="dropdown-menu dropdown-book w-100" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" value='yes'>yes</a></li>
              <li><a class="dropdown-item" value='no'>no</a></li>
            </ul>
          </div>
        </div>

        <button type="button" class="btn btn--search page-banner__select-bar-btn shadow-none border-0 px-md-4 ">BOOK <br> NOW</button>
      </div>

    </div>

  </section>


  <?php

}

get_template_part('Components/cowork', 'cowork');
get_template_part('Components/solution', 'solution');
get_template_part('Components/experience', 'experience');
get_template_part('Components/prod', 'prod');
get_template_part('Components/carousel', 'carousel');
get_template_part('Components/review', 'review');
get_template_part('Components/insight', 'insight');
get_template_part('Components/contact', 'contact');

?>


<?php 
get_footer();
?>