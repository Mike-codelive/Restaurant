<?php
/**
 * Main template single post.
 *
 * @package Restaurant
 */
get_header();

while(have_posts()) :
  the_post();

  $image_id = get_post_thumbnail_id();
  $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
  if (!$image_alt):
    $image_alt = get_the_title();
  endif;
  global $post;
  $author_ID          =   $post->post_author;
  $author_URL         =   get_author_posts_url( $author_ID );
  ?>

  <section class="post">

    <div class="container-lg d-flex flex-column my-5">

      <div class="post__header d-flex flex-column mb-5">
        <img class="mb-3 mb-md-0 align-self-lg-center" src="<?php 
        if (!has_post_thumbnail()):
        echo get_theme_file_uri('/images/asset-1.jpg');
        else :
        the_post_thumbnail_url('full');
        endif
      ?>" alt="<?php echo $image_alt; ?>">

      <div class="mt-5 ms-3 ms-md-5 d-flex flex-column justify-content-center">
        <div class="post__stats mb-5 d-flex align-items-center">
          <a href="<?php echo $author_URL; ?>">
            <span class="material-icons-outlined"> person_outline</span>
            <?php the_author(); ?>
          </a>
          <p>
            <span class="material-icons-outlined">
              calendar_today
            </span>
            <?php the_date(); ?>
          </p>
          <p>
            <span class="material-icons-outlined">
              category
            </span>
            <?php the_category(' '); ?>
          </p>
          <p>
            <span class="material-icons-outlined">
              forum
            </span>
            <?php comments_number(); ?>
          </p>
        </div>
        <h1 class="mb-3"> <?php the_title(); ?></h1>

        <p class="text-secondary">
          <?php 
          if (has_excerpt()):
            the_excerpt();
          else:
            ?>
            <p class="text-secondary">Here's how to ensure remote employes stay engaged with your company culture and values
            </p>
            <?php
          endif
          ?>
        </p>
      </div>
    </div>

    <div class="post__content mx-2 ms-md-5">
      <?php the_content(); ?>
    </div>

  </div>

</section>

<?php

if (get_comments_number() || comments_open()) :
  comments_template();
endif;

endwhile;
get_template_part('Components/contact', 'contact');


get_footer();

?>