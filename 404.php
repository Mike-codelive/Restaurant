<?php
/**
 * Main 404 file.
 *
 * @package Restaurant
 */

get_header();

?>

<section class="sec-404 container-lg d-flex flex-column align-items-center">
    <h1 class="fw-bolder">404</h1>
    <h2>Sorry Incorrect place back to <a href="<?php site_url(); ?>">home</a>!!</h2>
</section>

<?php
get_footer();
?>