<?php
/**
 * Main 404 file.
 *
 * @package Restaurant
 */

get_header();

?>

<section class="sec-404 container-lg d-flex flex-column align-items-center">
    <h1 class="fw-bolder">
        <?php _e('404', 'restaurant'); ?>
    </h1>
    <h2>
        <?php _e('Sorry Incorrect place back to'); ?>
        <a href="<?php site_url(); ?>">home</a>!!</h2>
    </section>

    <?php
    get_footer();
?>