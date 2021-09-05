<section class="solution container-lg px-5 mb-5">

	<div class="d-flex flex-column flex-lg-row justify-content-between mb-5">
		<div class="d-flex justify-content-between flex-column mb-5 mb-lg-0">
			<h6 class="text-secondary mb-3">SOLUTIONS</h6>
			<h1 class="mb-0">Solutions Desingned for all <br> your needs</h1>
		</div>
		<a type="button" class="btn link-green shadow-none border-0 bg-transparent flex-grow-0 py-0 d-flex align-items-center align-self-center align-self-md-end">View All Solutions <span class="material-icons-outlined mx-3">
			chevron_right
		</span></a>
	</div>

	<div class="d-flex flex-column d-md-none">
		<img class="mb-5" src="<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>" alt="solutions-working">
		<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nobis modi sequi quasi quis dolor quas sed. Voluptatum reiciendis ducimus ab beatae, exercitationem, consequatur vel, obcaecati, consectetur ullam autem maxime sed voluptatibus? Modi, praesentium, velit.</p>
		<button type="button" class="btn link-green shadow-none border-0 bg-transparent flex-grow-0 py-0 d-flex align-items-center align-self-center text-center">View All Solutions <span class="material-icons-outlined mx-3">
			chevron_right
		</span></button>
	</div>

	<div class="solution__collapse d-none d-md-flex h-100" id="cards">
		<p class="solution__controls">
			<a class="btn btn-primary shadow-none border-0 bg-transparent text-secondary d-flex align-items-center justify-content-between px-0 fw-bolder mb-3" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Private Offices <span class="material-icons-outlined me-3 arrow-to-right" id="arrow-to-right">
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

		<div class="row mx-0" id="cards">
			<div class="col position-relative">
				<div class="collapse openCard show multi-collapse" id="multiCollapseExample1" data-bs-parent="#cards">
					<div class="solution__card card card-body border-0">
						<div><iframe width="100%" height="100%" src="https://www.youtube.com/embed/vrah18bW9w0?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Officia temporibus dignissimos sapiente vero ut blanditiis vel eligendi quasi rem nemo molestiae maxime sint quas, iusto.</p>
						<button type="button" class="btn link-green shadow-none flex-grow-0 d-flex align-items-center align-self-center">View All Solutions <span class="material-icons-outlined mx-3">
							chevron_right
						</span></button>
					</div>
				</div>
				<div class="collapse multi-collapse" id="multiCollapseExample2" data-bs-parent="#cards">
					<div class="solution__card card card-body border-0">
						<div><img src="<?php echo get_theme_file_uri('/images/bread.jpg') ?>" alt="coworking-space"></div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Officia temporibus dignissimos sapiente vero ut blanditiis vel eligendi quasi rem nemo molestiae maxime sint quas, iusto.</p>
						<button type="button" class="btn link-green shadow-none flex-grow-0 d-flex align-items-center align-self-center">View All Solutions <span class="material-icons-outlined mx-3">
							chevron_right
						</span></button>
					</div>
				</div>
				<div class="collapse multi-collapse" id="multiCollapseExample3" data-bs-parent="#cards">
					<div class="solution__card card card-body border-0">
						<div><img src="<?php echo get_theme_file_uri('/images/bread.jpg') ?>" alt="On-Demand access"></div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Officia temporibus dignissimos sapiente vero ut blanditiis vel eligendi quasi rem nemo molestiae maxime sint quas, iusto.</p>
						<button type="button" class="btn link-green shadow-none flex-grow-0 d-flex align-items-center align-self-center">View All Solutions <span class="material-icons-outlined mx-3">
							chevron_right
						</span></button>
					</div>
				</div>
				<div class="collapse multi-collapse" id="multiCollapseExample4" data-bs-parent="#cards">
					<div class="solution__card card card-body border-0">
						<div><img src="<?php echo get_theme_file_uri('/images/bread.jpg') ?>" alt="event space"></div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Officia temporibus dignissimos sapiente vero ut blanditiis vel eligendi quasi rem nemo molestiae maxime sint quas, iusto.</p>
						<button type="button" class="btn link-green shadow-none flex-grow-0 d-flex align-items-center align-self-center">View All Solutions <span class="material-icons-outlined mx-3">
							chevron_right
						</span></button>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>