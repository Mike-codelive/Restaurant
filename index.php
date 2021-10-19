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

    // $insightPosts = new WP_Query(array(
    //   'order' => 'DESC',
    //   'posts_per_page' => 4,
    // ));


    if (!empty(have_posts())):
      while (have_posts()):
        the_post();


        $category = get_the_category();
        $link_category = get_category_link( $category[0]->term_id );
        $author_ID          =   get_the_author_ID();
        $author_URL         =   get_author_posts_url( $author_ID );
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
              <h1 class="my-3 fw-bolder fs-1 mt-lg-0">
                <?php the_title(); ?>
              </h1>
              <div class="mb-3 d-flex gap-3 flex-wrap align-items-center text-dark">
                <a class="align-items-center d-flex" href="<?php echo $author_URL; ?>">
                  <span class="material-icons-outlined me-2"> person_outline</span>
                  <?php the_author(); ?>
                </a>
                <p class="align-items-center d-flex mb-0">
                  <span class="material-icons-outlined me-2">
                    calendar_today
                  </span>
                  <?php the_date(); ?>
                </p>
                <a class="align-items-center d-flex" href="<?php echo $link_category; ?>">
                  <span class="material-icons-outlined me-2">
                    category
                  </span>
                  <?php echo $category[0]->cat_name; ?>
                </a>
                <p class="align-items-center d-flex mb-0">
                  <span class="material-icons-outlined me-2">
                    forum
                  </span>
                  <?php comments_number(); ?>
                </p>
              </div>
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
    endif;
    ?>
    <div class="d-flex justify-content-center"> 
     <div class="wp-pagination">

      <?php 
      echo paginate_links(array(
        'prev_text'    => __('«'),
        'next_text'    => __('»'),
      ));

      ?>
    </div>
  </div>

</div>

</section>

<?php 

get_footer();

?>