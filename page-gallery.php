<?php
/**
 * Main template gallery.
 *
 * @package Restaurant
 */

get_header();

	// $post = get_post(); 
	// $content = apply_filters('the_content', $post->post_content); 
	// echo $content;

$post = get_the_content();

?>

<section class="gallery container-lg bgc-dark">
	<div class="mb-5 pt-5 text-center text-light">
		<h1 class="fw-bolder">
			<?php 
			echo single_post_title();
			?>
		</h1>
		<p>
			<?php echo get_bloginfo('title') ?>
			highlights
		</p>
	</div>
	<div>
		<?php 
		echo $post;
		?>
	</div>
</section>


<?php

get_footer();

?>