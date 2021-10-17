<?php
/**
 * Main template blog.
 *
 * @package Restaurant
 */

get_header();

?>
<section class="insight" id="insight">

  <div class="container-lg d-flex flex-column mb-5">

    <div class="d-flex flex-column flex-md-row  justify-content-center justify-content-md-between align-items-center align-items-md-baseline mb-5">
      <h1 class="mb-5 mb-md-0 text-center">News, updates and insights in our Blog!</h1>
    </div>

    <?php

    $insightPosts = new WP_Query(array(
      'order' => 'DESC',
    ));

    if (!empty($insightPosts->have_posts())):
      while ($insightPosts->have_posts()):
        $insightPosts->the_post();
        $image_id = get_post_thumbnail_id();
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
        if (!$image_alt):
          $image_alt = get_the_title();
        endif;


        ?>
        <div class="container">
          <div class="insight__main-post row mb-5 px-2">
            <img class="mb-md-0 px-0 col-12 col-lg-6" src="<?php 
            if (!has_post_thumbnail()):
            echo get_theme_file_uri('/images/asset-2.jpg');
            else :
            the_post_thumbnail_url('full');
            endif?>" alt="<?php echo $image_alt; ?>">
            <div class="px-lg-3 mt-lg-0 col-12 col-lg-6 d-flex flex-column justify-content-center border border-1">
              <h2 class="my-3 mt-lg-0">
                <?php the_title(); ?>
              </h2>
              <p class="text-secondary">
                <?php echo wp_trim_words(get_the_content(), 20); ?>
              </p>
              <a href="<?php the_permalink(); ?>" type="button" class="btn link-green shadow-none border-0 bg-transparent p-0 mb-3 mb-lg-0 align-self-start d-flex align-items-center">Read More 
                <span class="material-icons-outlined ms-2">
                  chevron_right
                </span>
              </a>
            </div>
          </div>
        </div>

        <?php
      endwhile;
    else:
      ?>

      <div class="d-flex flex-column flex-lg-row mb-5">
        <img class="mb-3 mb-md-0" src="<?php echo get_theme_file_uri('/images/asset-2.jpg') ?>" alt="insights">
        <div class="px-3 mt-5 mt-lg-0 d-flex flex-column justify-content-center border border-1">
          <h2 class="my-3 mt-lg-0">Engagin remote employees through company culture</h2>
          <p class="text-secondary">Here's how to ensure remote employes stay engaged with your company culture and values</p>
        </div>
      </div>

      <?php 
    endif
    ?>

  </div>

</section>

<?php 

get_footer();

?>