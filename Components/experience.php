<section class="experience container-fluid py-3 mt-5">

	<div class="experience__box container-lg">

		<div class="experience__box-1 position-relative d-flex flex-column align-items-center mb-5">

			<img class="w-100" src="<?php echo get_theme_file_uri('/images/apples.jpg') ?>" alt="experience-img">
			<a class="experience__btn text-light rounded-circle">
				<span class="material-icons-outlined p-4 rounded-circle">
					restaurant
				</span>
			</a>

		</div>

		<div class="experience__box-2 d-flex align-items-center my-5 align-text-top">
			<div class="text-light mb-5 mb-lg-0">
				<?php
				$homepagePosts = new WP_Query(array(
					'posts_per_page' => 1,
					'order' => 'DESC',
				));

				if (!empty($homepagePosts->have_posts())) {
					while ($homepagePosts->have_posts()) {
						$homepagePosts->the_post(); ?>
						<h6>
							<?php wp_trim_words(the_title(), 5) ?>
						</h6>

						<h1>
							<?php 
							echo wp_trim_words(get_the_content(), 8);
							?>
						</h1>
					</div>
					<div class="text-light fs-1">
						<h6 class="mb-4">
							Opinion from experts
						</h6>

						<a href="<?php the_permalink(); ?>" type="button" class="btn btn--white text-light shadow-none border-0 bg-transparent flex-grow-0 p-0 d-flex align-items-center align-self-center text-center fs-6">Read more<span class="material-icons-outlined ms-3">
							chevron_right
						</span></a>

						<?php
					};} else {
						?>
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

						<?php
					};
					?>

				</div>
			</div>
		</div>

	</section>