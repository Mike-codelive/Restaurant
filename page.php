<?php

get_header();

if (!get_theme_mod('about_callout_image')) : 
    $img_alt = 'about restaurant';
    $imgUrl = get_theme_file_uri('/images/card.jpg');
else :
    $img_Url = get_theme_mod('about_callout_image');
    $imgUrl = wp_get_attachment_url(get_theme_mod('about_callout_image'));
    $imageId = attachment_url_to_postid($img_Url);
    $img_alt = get_post_meta( $imageId, '_wp_attachment_image_alt', true );

    print_r(wp_get_attachment_url($imgUrl));
endif;

?>


<section class="prod">

    <div class="container-lg">
        <div class="row no-gutters">
            <div class="prod__first col-12 col-lg-6 text-dark mb-5 mb-lg-0">
                <div class="mb-5">
                    <p>
                        <?php echo get_theme_mod( 'about_callout_title' ); ?>
                    </p>
                    <h1 class="mb-4 fw-bolder">
                        <?php echo get_theme_mod('about_callout_headline') ?>
                    </h1>
                    <p>
                        <?php echo get_theme_mod('about_callout_paragraph') ?>
                    </p>
                </div>
            </div>

            <div class="col-12 col-lg-6 mb-lg-5">
                <img class="w-100" src="<?php echo $imgUrl;?>
                " alt="<?php echo $img_alt; ?>">
            </div>

            <div class="prod__map d-flex justify-content-center col-12 col-lg-6 mb-3 mb-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96828.01455741416!2d-74.02537604734877!3d40.676713056206964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva%20York%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1634521800554!5m2!1ses-419!2smx" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-12 col-lg-6">
                <h1 class="fw-bolder"><?php echo get_theme_mod('about_callout_loc_title') ?></h1>
                <p><?php echo get_theme_mod('about_callout_loc_paragraph') ?></p>
            </div>

        </div>


    </div>

</section>

<?php

get_footer();

?>