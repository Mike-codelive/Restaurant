<?php

get_header();

?>

<section class="menu container-lg">

    <h1 class="text-center bgc-dark fw-bolder text-light py-5">Menú of <?php echo get_bloginfo('name'); ?> </h1>
    <div class="row">

        <?php

        if (!empty(have_posts())) :
            while(have_posts()) :
                the_post();
                ?>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div class="mx-2 mt-2">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <div>
                          <?php the_content(); ?>
                      </div>
                  </div>
              </div>

              <?php 
          endwhile;
      else :
       ?>

       <div class="col-12 col-sm-6 col-md-4">
        <div class="">
            <img src="<?php echo get_theme_file_uri("/images/menu-1.jpg");?>" alt="logo">
        </div>
        <div class="mx-2 mt-2">
            <h3>
                French Fries
            </h3>
            <div>
                Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Hic modi sequi minima adipisci voluptatem suscipit.
            </div>
        </div>
    </div>

    <?php 
endif;
?>

</div>
</section>


<?php


get_footer();

?>