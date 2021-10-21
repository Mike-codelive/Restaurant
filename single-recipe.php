<?php

get_header();

$menuPost = new WP_Query(array(
  'post_type'  => 'recipe_ratings',
));



while(have_posts()) {
  the_post();

  // echo '<pre>';
  // print_r(the_post());
  // echo '</pre>';

  ?>


  <div class="container container--narrow page-section">
    <h1>hello single w(rate)</h1>
    <div class="generic-content">
      <div class="row group">

        <div class="one-third">
          <?php //the_post_thumbnail('professorPortrait'); ?>
        </div>

        <div>
          <?php the_content(); ?>
        </div>

      </div>
    </div>

  </div>

<?php }

get_footer();

?>