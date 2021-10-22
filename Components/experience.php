<section class="experience container-fluid py-3 mt-5">

	<div class="experience__box container-lg">

		<div class="experience__box-1 position-relative d-flex flex-column align-items-center mb-5">

			<?php 
			$menuMonth = new WP_Query(array(
				'post_type' => 'recipe',
				'posts_per_page' => 1,
				'category_name' => 'menu',
			));

			if (!empty($menuMonth->have_posts())) :
				while ($menuMonth->have_posts()) :
					$menuMonth->the_post();
					$image_id = get_post_thumbnail_id();
					$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
					if (!$image_alt):
						$image_alt = get_the_title();
					endif;
					?>

					<img class="w-100" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $image_alt; ?>">

					<?php
				endwhile;
			else :
				?>

				<img class="w-100" src="<?php echo get_theme_file_uri('/images/menu-1.jpg') ?>" alt="experience-img">
				<?php
			endif;

			rewind_posts();
			?>
			<a href="<?php echo site_url('/recipe') ?>" class="experience__btn text-light rounded-circle">
				<span class="material-icons-outlined p-4 rounded-circle">
					restaurant 
				</span>
			</a>

		</div>

		<div class="experience__box-2 d-flex align-items-center justify-content-between my-5 align-text-top">
			<div class="text-light mb-5 mb-lg-0">
				<?php
				$menuMonth = new WP_Query(array(
					'post_type' => 'recipe',
					'posts_per_page' => 1,
					'category_name' => 'menu',
				));

				if (!empty($menuMonth->have_posts())) :
					while ($menuMonth->have_posts()) :
						$menuMonth->the_post(); ?>
						<p>
							Menú of the Month
						</p>

						<h1>
							<?php 
							echo wp_trim_words(the_title(), 15);
							?>
						</h1>
					</div>
					<div class="text-light me-5 ms-5">
						<h6 class="mb-4">
							Opinion from Experts
						</h6>

					</div>

					<?php
				endwhile;
			else :
				?>
				<div>
					<h6>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus corrupti molestiae praesentium voluptate at! Ratione?
					</h6>

					<h1>
						Lorem ipsum dolor sit amet.
					</h1>
				</div>
				<div class="text-light fs-1">
					<h6 class="mb-4">
						Opinion from experts
					</h6>
				</div>
				<?php
			endif;
			?>

		</div>
	</div>

</section>