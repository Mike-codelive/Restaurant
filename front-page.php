<?php get_header(); ?>

<!-- <section class='page-banner position-relative d-flex justify-content-center
justify-content-lg-start align-items-center container-fluid'>
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);">
</div>

<div class="page-banner__select-bar bottom-0 d-flex flex-column flex-lg-row rounded">

  <div class="d-flex flex-column flex-lg-row align-items-lg-center">
    <div class="dropdown">
      <a class="btn btn-secondary shadow-none border-0 text-start bg-transparent mb-lg-0 p-5" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="text-secondary">TYPE</span> <br>
        <span class="text-dark fw-bolder">Personal</span>
        <div class="shadow ms-5 rounded-circle d-inline">
          <span class="material-icons-outlined text-dark p-1 rotate-select-arrow">
            arrow_forward_ios
          </span>
        </div>
      </a>

      <ul class="dropdown-menu d-menu w-100 bg-dark" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>

    <div class="dropdown">
      <a class="btn btn-secondary shadow-none border-0 text-start bg-transparent mb-lg-0 p-5" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="text-secondary">TYPE</span> <br>
        <span class="text-dark fw-bolder">Personal</span>
        <div class="shadow ms-5 rounded-circle d-inline">
          <span class="material-icons-outlined text-dark p-1 rotate-select-arrow">
            arrow_forward_ios
          </span>
        </div>
      </a>

      <ul class="dropdown-menu w-100 bg-dark" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>

    <div class="dropdown">
      <a class="btn btn-secondary shadow-none border-0 text-start bg-transparent mb-lg-0 p-5" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="text-secondary">TYPE</span> <br>
        <span class="text-dark fw-bolder">Personal</span>
        <div class="shadow ms-5 rounded-circle d-inline">
          <span class="material-icons-outlined text-dark p-1 rotate-select-arrow">
            arrow_forward_ios
          </span>
        </div>
      </a>

      <ul class="dropdown-menu w-100 bg-dark" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>

  </div>

  <button type="button" class="btn page-banner__select-bar-btn shadow-none border-0 px-md-4">BOOK <br> NOW</button>

</div>
</section> -->


<?php

// get_template_part('Components/cards-coworking', 'cards coworking');
// get_template_part('Components/solutions', 'solutions');
// get_template_part('Components/experience', 'experience');
get_template_part('Components/productivity', 'productivity');
get_template_part('Components/carousel', 'carousel');
?>

<!-- <div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Welcome!</h1>
    <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
    <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
    <a href="<?php echo get_post_type_archive_link('program'); ?>" class="btn btn--large btn--blue">Find Your Major</a>
  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

      <?php 
      $today = date('Ymd');
      $homepageEvents = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
          array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
        )
      ));

      while($homepageEvents->have_posts()) {
        $homepageEvents->the_post();
        get_template_part('template-parts/content', 'event');
      }
      ?>
      
      <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event') ?>" class="btn btn--blue">View All Events</a></p>

    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
      <?php
      $homepagePosts = new WP_Query(array(
        'posts_per_page' => 2
      ));

      while ($homepagePosts->have_posts()) {
        $homepagePosts->the_post(); ?>
        <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
            <span class="event-summary__month"><?php the_time('M'); ?></span>
            <span class="event-summary__day"><?php the_time('d'); ?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php if (has_excerpt()) {
              echo get_the_excerpt();
            } else {
              echo wp_trim_words(get_the_content(), 18);
            } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
          </div>
        </div>
      <?php } wp_reset_postdata();
      ?> 

      
      
      
      <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>
</div>

<div class="hero-slider">
  <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
      <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg'); ?>);">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">Free Transportation</h2>
            <p class="t-center">All students have free unlimited bus fare.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg'); ?>);">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">An Apple a Day</h2>
            <p class="t-center">Our dentistry program recommends eating apples.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg'); ?>);">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">Free Food</h2>
            <p class="t-center">Fictional University offers lunch plans for those in need.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
    </div>
  </div>
</div> -->

<?php 
get_footer();
?>