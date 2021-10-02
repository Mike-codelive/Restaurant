<?php 
if (get_theme_mod('productivity_callout_display') == true) {
	?>

	<section class="prod">

		<div class="container-lg d-flex flex-column flex-lg-row align-items-lg-stretch">

			<div class="prod__first text-dark mb-5 mb-lg-0">
				<div class="mb-5">
					<h6>
						<?php echo get_theme_mod( 'productivity_callout_title' ); ?>
					</h6>
					<!-- <h1 class="mb-4 fw-bolder">More productivity <br> Less burn out</h1> -->
					<h1 class="mb-4 fw-bolder"><?php echo get_theme_mod( 'productivity_callout_headline' ); ?></h1>
					<p>
						<?php echo esc_html( get_theme_mod( 'productivity_callout_paragraph' ) ); ?>
					</p>
				</div>
				<div class="prod__first-icons d-flex flex-lg-wrap  justify-content-between flex-column align-items-center flex-lg-row">
					<div class="prod__icon prod__icon-lg">
						<div class="d-flex bg-white">
							<span class="material-icons-outlined">
								food_bank
							</span>
							<div>
								<h1>700</h1>
								<p>Meeting Room</p>
							</div>
						</div>
					</div>
					<div class=" prod__icon prod__icon-lg">				<div class="d-flex bg-white">
						<span class="material-icons-outlined">
							store
						</span>
						<div>
							<h1>620</h1>
							<p>Creative Studio</p>
						</div>
					</div>
				</div>
				<div class="prod__icon prod__icon-lg">				<div class="d-flex bg-white">
					<span class="material-icons-outlined">
						menu_book
					</span>
					<div>
						<h1>380</h1>
						<p>Event Space</p>
					</div>
				</div>
			</div>

			<div class="prod__icon prod__icon-lg">
				<div class="d-flex bg-white">
					<span class="material-icons-outlined">
						dinner_dining
					</span>
					<div>
						<h1>36</h1>
						<p>Countries</p>
					</div>
				</div>
			</div>


		</div>
	</div>

	<div class="prod__second d-flex d-lg-block justify-content-center align-items-center position-relative">
		<img class="d-none d-lg-block" src="
		<?php 
		if (!get_theme_mod('productivity_callout_image')) {
			echo get_theme_file_uri('/images/card.jpg');
			} else {
				echo wp_get_attachment_url(get_theme_mod('productivity_callout_image'));
			} ?>
			" alt="productivity">
			<div class="top-0 end-0 text-light py-3 px-4">
				<span class="material-icons-outlined fs-3">
					apartment
				</span>

				<h3>
					<?php 
					echo esc_html( get_theme_mod( 'productivity_callout_card_headline' ) );
					?>
				</h3>
				<p>
					<?php 
					echo esc_html( get_theme_mod( 'productivity_callout_card_paragraph' ) );
					?>
				</p>
			</div>
		</div>
	</div>

</section>

<?php 
}
?>