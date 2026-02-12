<?php

/**
 * Template Name: WBIL Webinar
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

	get_header();

	get_template_part( 'template-parts/wbil', 'head'); 
	get_template_part( 'template-parts/wbil', 'hero');

	function clean($string) {
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
 }

?>

 
<main class="main__wbil">
  <section>
    <div class="container-fluid ">
      <div class="row justify-content-center h-100">
        <div class="col-12 col-lg-auto">
          <?php get_template_part( 'template-parts/wbil', 'sidebar' );  ?>
        </div>
        <div class="col-12 col-lg pb-5 ">
          <div class="row">
            <div class="col">
              <div class="px-lg-5">
                
                <h1 class="h1 pt-5"><?php the_title(); ?></h1>

                <hr/>

              </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row mt-3 mb-4">
              <!-- <div class="col-12 webinar px-lg-5">
                <p class="card__overline pb-3 text-uppercase mb-3">
                  <i class="fa fa-tv mr-1"></i>
                  Live Webinar
                </p>
              </div> -->
              <div class="col-12 col-lg-9 webinar pl-lg-5">
                <?php the_content(); ?>
                <!-- <a target="_blank" href="https://institute.lawyerwellbeing.net/event/webinar-052824" class="btn btn--section btn-primary text-white my-5 bg-purple">Register Now</a> -->
              </div>
              <div class="col-12 col-lg-3">
                <?php the_post_thumbnail('photo_gallery'); ?>
              </div>
            </div>   
          </div>          
        </div>
      </div>
    </div>
  </section>
</main>

<?php 
	get_template_part( 'template-parts/wbil', 'footer'); 
	get_footer(); 
?>