<section class="cards-coworking container-lg d-flex justify-content-center flex-column">
	<div class="text-center mb-5 flex-fill">
		<h1>Coworking Space</h1>
		<h3 class="text-black-50">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Nihil veniam vero velit blanditiis reprehenderit temporibus ut sequi praesentium iusto, corrupti?
		</h3>
	</div>

	<div class="cards-coworking__cards d-flex flex-fill">
		<div class="cards-pag d-flex justify-content-between align-items-center">
			<div class="cards-pag-bar text-black-50">
				<span></span>
			</div>
			<p><span>01</span>/04</p>
		</div>

		<div class="cards-coworking__cards-img d-flex flex-wrap position-relative">
			<div class='cards-coworking__cards-frontside'>
				<div class='position-relative'>
					<img src="<?php echo get_theme_file_uri('/images/ocean.jpg') ?>" alt="card">
					<figcaption class="bg-dark text-white position-absolute bottom-0 p-3 pe-4 fs-3">01</figcaption>
				</div>
				<div class="text-center mt-3">
					<h5 class="fw-bolder">Work Space</h5>
					<p class="text-black-50">Dedicated and hot desk</p>
				</div>
			</div>

			<div class="cards-coworking__cards-backside position-absolute text-white d-flex flex-column overflow-hidden">
				<h1 class="position-absolute">01</h1>
				<div class="info text-center align-self-center fw-light position-absolute">
					<h2 class="fs-3">Private Space</h2>
					<h3 class="fs-6 fw-lighter">Move-in ready <br> office</h3>
				</div>
				<button type="button" class="btn page-banner__select-bar-btn shadow-none border-0 px-md-4 align-self-end p-3 ps-5 fw-light d-flex position-absolute">More <span class="material-icons-outlined">
					arrow_forward
				</span> </button>
			</div>
		</div>

	</div>
</section>