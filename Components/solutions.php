<section class="solutions container-lg px-5">
	<div class="solutions__title d-flex flex-column flex-lg-row justify-content-between mb-5">
		<div class="d-flex justify-content-between flex-column mb-5 mb-lg-0">
			<h6 class="text-secondary mb-3">SOLUTIONS</h6>
			<h1 class="mb-0">Solutions Desingned for all <br> your needs</h1>
		</div>
		<button type="button" class="btn shadow-none border-0 bg-transparent flex-grow-0 py-0 d-flex align-items-center align-self-center align-self-md-end">View All Solutions <span class="material-icons-outlined mx-3">
			chevron_right
		</span></button>
	</div>

	<div class="d-flex flex-column d-md-none">
		<img class="mb-5" src="<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>" alt="solutions-working">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nobis modi sequi quasi quis dolor quas sed. Voluptatum reiciendis ducimus ab beatae, exercitationem, consequatur vel, obcaecati, consectetur ullam autem maxime sed voluptatibus? Modi, praesentium, velit.</p>
		<button type="button" class="btn shadow-none border-0 bg-transparent flex-grow-0 py-0 d-flex align-items-center align-self-center text-center">View All Solutions <span class="material-icons-outlined mx-3">
			chevron_right
		</span></button>
	</div>

	<div class="solutions__collapse d-none d-md-flex" id="cards">
		<p class="w-100">
			<a class="btn btn-primary shadow-none border-0 bg-transparent text-secondary d-flex align-items-center justify-content-between px-0 fw-bolder mb-3" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Private Offices <span class="material-icons-outlined me-3">
				expand_more
			</span></a>
			<a class="btn btn-primary shadow-none border-0 bg-transparent text-secondary d-flex align-items-center px-0 justify-content-between fw-bolder mb-3" type="button" data-bs-toggle="collapse" href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Coworking Space <span class="material-icons-outlined me-3">
				expand_more
			</span></a>
			<a class="btn btn-primary shadow-none border-0 bg-transparent text-secondary d-flex align-items-center px-0 justify-content-between fw-bolder mb-3" type="button" data-bs-toggle="collapse" href="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">On-Demand Access <span class="material-icons-outlined me-3">
				expand_more
			</span></a>
			<a class="btn btn-primary shadow-none border-0 bg-transparent text-secondary d-flex align-items-center px-0 justify-content-between fw-bolder" data-bs-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">Event Space <span class="material-icons-outlined me-3">
				expand_more
			</span></a>

		</p>
		<div class="row solutions__collapse-card" id="cards">
			<div class="col position-relative" id="cards">
				<div class="collapse position-absolute show multi-collapse" id="multiCollapseExample1" data-bs-parent="#cards">
					<div class="card card-body">
						First
					</div>
				</div>
				<div class="collapse position-absolute multi-collapse" id="multiCollapseExample2" data-bs-parent="#cards">
					<div class="card card-body">
						second
					</div>
				</div>
				<div class="collapse position-absolute multi-collapse" id="multiCollapseExample3" data-bs-parent="#cards">
					<div class="card card-body">
						third
					</div>
				</div>
				<div class="collapse position-absolute multi-collapse" id="multiCollapseExample4" data-bs-parent="#cards">
					<div class="card card-body">
						Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
					</div>
				</div>
				<div class="collapse position-absolute multi-collapse" id="multiCollapseExample5" data-bs-parent="#cards">
					<div class="card card-body">
						Some placeholder content for the first collapse component of this multi-
					</div>
				</div>
			</div>
		</div>
	</div>

</section>