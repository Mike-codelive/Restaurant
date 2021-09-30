<?php

get_header();

while(have_posts()) {
  the_post();
    // pageBanner();
  ?>

  <container class="post">

    <div class="container-lg d-flex flex-column mb-5">

      <div class="d-flex flex-column flex-lg-row mb-5">
        <img class="mb-3 mb-md-0" src="<?php echo get_theme_file_uri('/images/apples.jpg') ?>" alt="insights">
        <div class="px-3 mt-5 mt-lg-0 d-flex flex-column justify-content-center border border-1">
          <h2 class="">
            <span class="">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?>

          </span>
        </h2>
        <p class="text-secondary">Here's how to ensure remote employes stay engaged with your company culture and values
        </p>
      </div>
    </div>

    <div class="post__content text-center">
      <?php the_content(); ?>
    </div>

  </div>

</container>


<?php }

get_footer();

?>