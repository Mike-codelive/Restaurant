<?php 
/**
 * Main template footer.
 *
 * @package Restaurant
 */
?>

<footer>
  <div class="footer container-lg my-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">

      <div class="footer__block col ps-5 ps-lg-3">
<!--         <h1><span class="site-title fw-bolder"><?php echo get_bloginfo( 'name' ); ?>.</span>
</h1> -->

<?php 

if ( function_exists( 'the_custom_logo' )) {
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

  if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1 class="text-center"><span class="fw-bolder"><img src="'. get_theme_file_uri("/images/icons/logo.png"). '" alt="logo"></span></h1>';
}
}

?>
<p class="footer__text">Counter delivery, carters Beach PostCentre, Wesport</p>
<p class="text-secondary">@ofspace Digital Agency</p>
</div>
<div class="footer__block col ps-5 pe-0">
  <h2 class="footer__links-text">Support</h2>
  <a href="#">E-books</a>
  <a href="#">Presentation</a>
  <a href="#">Dashboard</a>
  <a href="#">Managment</a>
  <a href="#">Privacy Policy</a>
</div>
<div class="footer__block col ps-5 pe-0">
  <h2 class="footer__links-text">Team</h2>
  <a href="#">E-books</a>
  <a href="#">Presentation</a>
  <a href="#">Dashboard</a>
  <a href="#">Managment</a>
  <a href="#">Privacy Policy</a>
</div>
<div class="footer__block col ps-5 pe-0">
  <h2 class="footer__links-text">Product</h2>
  <a href="#">E-books</a>
  <a href="#">Presentation</a>
  <a href="#">Dashboard</a>
  <a href="#">Managment</a>
  <a href="#">Privacy Policy</a>
</div>
<div class="footer__block col ps-sm-5 ps-lg-0 text-center text-sm-start" id="footer__ico">
  <div class="mb-3">
    <h2 class="footer__links-text">Address</h2>
    <p>Counter Delivery, Carters Beach PostCentre, Westport</p>
</div>
<div class="footer__ico">
    <a href="#"><i class="bi bi-facebook"></i></a>
    <a href="#"><i class="bi-instagram"></i></a>
    <a href="#"><i class="bi bi-twitter"></i></a>
</div>
</div>

</div>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>