<?php

get_header();


$menuPost = new WP_Query(array(
  'post_type'  => 'recipe_ratings',
));

// echo '<pre>';
// var_dump($menuPost);
// echo '</pre>';


while($menuPost->have_posts()) {
  $menuPost->the_post();

  ?>


  <div class="container container--narrow page-section">
    <h1>hello single w(rate) template</h1>
    <div class="generic-content">
      <div class="row group">

        <div class="one-third">
          <?php the_post_thumbnail(); ?>
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