<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
  * Template Name: Homepage Redesign New

 * @since   1.0.0
 *
 * @package The7\Templates
 */

defined( 'ABSPATH' ) || exit;

// $config = presscore_config();
// $config->set( 'template', 'page' );

get_header();
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/home-new.css' ?>' type='text/css' media='all' />

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 

<script>

	  jQuery('body').on('click', '.btn-anchor', function(e){
    e.preventDefault(); 
    
    jQuery("html, body").animate({ scrollTop: jQuery(jQuery(this).attr("href")).offset().top - 120 }, 500);

  });

	  jQuery(document).ready(function() {

	  	var swiper_hero = new Swiper('.swiper-hero', {
			  // Optional parameters
			  loop: true,
			  autoplay: {
			  	duration: 4000
			  },

			  // If we need pagination
			  pagination: {
			    el: '.swiper-pagination',
			  },

			  // Navigation arrows
			  navigation: {
			    nextEl: '.swiper-button-next',
			    prevEl: '.swiper-button-prev',
			  },
			
			});

			var swiper_hero = new Swiper('.swiper-testimonial', {
			  // Optional parameters
			  loop: true,

			  // If we need pagination
			  pagination: {
			    el: '.swiper-pagination',
			  },

			  // Navigation arrows
			  navigation: {
			    nextEl: '.swiper-button-next',
			    prevEl: '.swiper-button-prev',
			  },
			
			});


	  });

</script>

<section class="hero--swiper section--border--before section--border--after" >

	<div class="swiper-container swiper-hero py-lg-5">
	  <div class="swiper-wrapper">

	<?php if( have_rows('slide') ) { 

			while( have_rows('slide') ) {
						the_row();

		?>
						
	    <div class="swiper-slide px-2 px-lg-5">
    		<div class="container-fluid py-5">
    			<div class="row justify-content-center">
    				<div class="col-auto">
    					<div class="swiper-image <?php echo get_sub_field('slide_css'); ?>">
								<?php echo get_sub_field('slide_image'); ?>
							</div>
						</div>
						<div class="col-12 col-md-10 col-lg col-xl-7 text-center text-lg-left">

							<h1 class="text-white slide-title text-center text-lg-left"><?php echo get_sub_field('slide_title'); ?></h1>

							<p class="text-white slide-content"><?php echo get_sub_field('slide_description'); ?></p>

							<a href="<?php echo get_sub_field('slide_button_link'); ?>" class="btn btn-primary text-white bg-teal"><?php echo get_sub_field('slide_button_text'); ?></a>

						</div>
					</div>
				</div>
	    </div>

	  <?php 
			} 
		}
	?>

</div>
		  <div class="swiper-button-prev"></div>
		  <div class="swiper-button-next"></div>

	</div>
 
</section>


<section class="test-white text-center bg-gray p-4">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-9 text-white text-center">
					<h5>The Institute for Well-Being in Law is a 501(c)(3) non-profit charitable organization that<br/>evolved from the National Task Force on Lawyer Well-Being.</h5>
				</div>
			</div>
		</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row position-relative">


			<div class="col-12 col-md-6 py-2 pb-lg-5 mb-5">

				<!--<div class="social">
					Follow us: 
					<a href="https://www.linkedin.com/company/institute-for-well-being-in-law/" target="_blank" class="text-teal mx-2">
						<i class="fa fa-linkedin"></i>
					</a> 
					<a href="https://twitter.com/wellbeinginlaw" target="_blank" class="text-teal">
						<i class="fa fa-twitter"></i>
					</a>
				</div>-->

	
				<h2 class="text-teal mb-4 mt-0 pt-lg-5 mt-5"><?php echo get_field('report_title'); ?></h2>

				<div class="text-teal mb-4 mt-0">
					<?php echo get_field('report_description'); ?>
				</div>
			</div>
			<div class="col-12 col-md-6" >
				<div class="row h-100  bg-report" style="background-image: url(<?php echo get_field('report_image'); ?>)">
					<div class="col-auto m-auto p-5">
						<a class="btn btn-lg btn--white text-teal" href="<?php echo get_field('report_button_link'); ?>" >
							<?php echo get_field('report_button_text'); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>


<section class="section--border--after bg-teal text-center text-white py-5">

	<div class="container-fluid container--max">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-9">

					<p class="text-uppercase overline" style=" letter-spacing: .1rem; font-weight: 100;">Our Mission</p>

					<p class="font-20 lh-165"><?php echo get_field('homepage_mission'); ?></p>
			</div>
		</div>
	</div>

</section>


<section class="py-2 py-lg-5 my-2 my-lg-5">
	<div class="container-fluid container--max">
		<div class="row">
			<?php if( have_rows('cards') ) { 

					while( have_rows('cards') ) {
						the_row();
			?>
			<div class="col-12 col-md-4 mb-3">
				<div class="card h-100">
					<div class="card-logo <?php echo get_sub_field('card_css'); ?> px-4 py-3">
						<img src="<?php echo get_sub_field('card_logo'); ?>" class="img-fluid"/>
					</div>
					<div class="p-4">
						<h4 class="font-20 text-teal lh-125"><strong><?php echo get_sub_field('card_title'); ?></strong></h4>
						<p><?php echo get_sub_field('card_description'); ?></p>
						<?php if ( get_sub_field('card_link') ) { ?>
							<a href="<?php echo get_sub_field('card_link'); ?>" class="btn btn-primary text-white bg-teal">Learn More</a>
						<?php } else { ?>
							
							<!--<p>
								<a class="btn btn--section btn-primary text-white btn--disabled">
									Coming Soon
								</a>
							</p>-->

						<?php } ?>
					</div>
				</div>
			</div>
		<?php  
				}  //endwhile
			} //endif
			?>
		</div>
	</div>
</section>

<!--<section class="bg-signup py-5" id="signup">
	<div class="container-fluid container--max py-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-5">
				<h2 class="text-white">
                    <?php echo get_field('homepage_form_title'); ?>
                </h2>
				<p class="text-white">
                    <?php echo get_field('homepage_form_description'); ?>
                </p>
			</div>
			<div class="col-12 col-md-5">
				<div class="text-white">
				<?php echo do_shortcode(get_field('homepage_form_shortcode')); ?>
			</div>
		</div>
	</div>-->

</section>

<section class="section--quote py-5 my-5">
	<div class="container-fluid container--max">
		<div class="row">
			<div class="col-12 text-center">
				<svg width="84" height="53" viewBox="0 0 84 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.813232 52.1999V24L10.8132 0.199951H31.4132L25.0132 23.2H37.4132V52.1999H0.813232ZM46.6132 52.1999V24L56.6132 0.199951H77.2132L70.8132 23.2H83.2132V52.1999H46.6132Z" fill="#D5EFFA"/>
				</svg>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-sm-9">
				<h2 class="text-teal text-center mt-4 mb-4"><?php echo get_field('homepage_president_quote_title'); ?></h2>
				<p class="lh-165 font-20"><?php echo get_field('homepage_president_quote_description'); ?></p>
			</div>
		</div>
		<div class="row justify-content-center mt-2">
			<div class="col-auto">
				<div class="img-circle-wrap">
					<img src="<?php echo get_field('homepage_president_quote_image'); ?>" class="img-fluid img-circle"/>
				</div>
			</div>
			<div class="col-auto my-auto">
				<p class="m-0 p-0">
					<?php echo get_field('homepage_president_quote_name'); ?>
				</p>
			</div>
		</div>
	</div>


</section>

<section style="background: #EFEFEF;" class="py-5">
	<div class="container-fluid container--max mt-5">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-4">
				
				<h2 class="text-teal"><?php echo get_field('map_title'); ?></h2>

				<p><?php echo get_field('map_description'); ?></p>
			</div>

			<div class="col-12 col-lg-6">
				<?php echo do_shortcode('[usterritories_map]'); ?>
			</div>
		</div>
	</div>

</section>


<section class="bg-teal section--border--before position-relative pt-4" >

	<div class="testimonial--quote">
		<svg width="84" height="53" viewBox="0 0 84 53" fill="#6C8B9D" xmlns="http://www.w3.org/2000/svg">
			<path d="M0.813232 52.1999V24L10.8132 0.199951H31.4132L25.0132 23.2H37.4132V52.1999H0.813232ZM46.6132 52.1999V24L56.6132 0.199951H77.2132L70.8132 23.2H83.2132V52.1999H46.6132Z" />
		</svg>
	</div>
	
	<div class="swiper-container swiper-testimonial py-5">
		<div class="swiper-wrapper">

			<?php 

				$old_post = $post; 

				$q = new WP_Query([
					'post_type' => 'dt_testimonials',
					'tax_query' => [
	       		[
	            'taxonomy' => 'dt_testimonials_category',
	            'field'    => 'slug',
	            'terms'    => 'well-being-week',
	        	]
	    		]
				]);

				while ($q->have_posts()) {
					$q->the_post(); 
				?> 
			 
			 <div class="swiper-slide px-2 px-lg-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<div class="text-white font-20 lh-165 fw-100"><?php the_content(); ?></div>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="<?php echo get_the_post_thumbnail_url($post, 'thumbnail'); ?>" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong><?php echo the_title(); ?></strong><br/>
										<?php echo get_field('testimonial_title'); ?>
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  <?php } 

	  	wp_reset_postdata(); 

	  	$post = $old_post; 
	  ?>

	  	


	  </div>

	  <div class="swiper-button-prev"></div>
	  <div class="swiper-button-next"></div>

	</div>

</section>


<section class="py-5">
	<div class="container container-fluid">
		<div class="row mt-5 mb-5">
			<div class="col-12 text-center">
				<h2 class="text-teal mb-fw-100">
					<?php echo get_field('homepage_evidence_title'); ?>
				</h2>
					<span><?php echo get_field('homepage_evidence_description'); ?></span>
				</h2>
			</div>
		</div>
		<div class="row">
			<?php

			if( have_rows('homepage_evidence_sections') ) { 

					while( have_rows('homepage_evidence_sections') ) {
						the_row();
			?>


			<div class="col-12 col-sm-6 col-lg p-3 p-lg-1">
				<div class="d-flex h-100 p-2 flex-column">
					
					<h4 class="card__title mb-0 pb-0"><?php echo get_sub_field('homepage_evidence_section_title'); ?></h4>
					<h3 class="text-blue-lt percentage pb-0 my-auto"><?php echo get_sub_field('homepage_evidence_section_number'); ?></h3>

					<p><?php echo get_sub_field('homepage_evidence_section_description'); ?></p>
				</div>
			</div>

		<?php } 
	}
	 ?>
	</div>
</section>

<section class="bg-teal py-5 text-center text-white section--border--after">

	<div class="container container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-9">
				<h3 class="overline" style="font-weight: bold!important; font-size: 24px!important;"><?php echo get_field('homepage_affects_title'); ?></h3>
			
				<p><?php echo get_field('homepage_affects_description'); ?></p>
			</div>
		</div>
	</div>

</section>


 


<section class="py-5">

	
				<h2 class="text-teal text-center pb-5">
					Principal Donors
				</h2>


<?php
	if ( have_rows('logos') ) { ?>

		<h4 class="card__title text-center mb-5">Inaugural Founding Champions:</h4>


		<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
		
			<div class="row justify-content-center">


				<?php	

				while( have_rows('logos') ) {
								the_row();

				?>

					<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
						<a href="<?php echo get_sub_field('logo_link'); ?>" target="_blank" class="d-block m-auto">
							<img src="<?php echo get_sub_field('logo_image'); ?>" class="img-fluid" />
						</a>
					</div>

				<?php 
						} //endwhile
				?>

			</div>
		</div>

	<?php 
		} //endif 

		if ( have_rows('logos_founding') ) { 
	?>

		<h4 class="card__title text-center mb-2">Founding Champions:</h4>

    	<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
			<div class="row justify-content-center">
			
				<?php	

				while( have_rows('logos_founding') ) {
					the_row();
				?>

					<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
						<a href="<?php echo get_sub_field('logo_founding_link'); ?>" target="_blank" class="d-block m-auto">
							<img src="<?php echo get_sub_field('logo_founding_image'); ?>" class="img-fluid" />
						</a>
					</div>

				<?php } //endwhile ?>
			</div>
		</div>

	<?php 
		} //endif 
		if ( have_rows('logos_master_of_well_being') ) { 
	?>

		<h4 class="card__title text-center mb-2">Master of Well-Being:</h4>

		<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
			<div class="row justify-content-center">
				
				
				<?php	
					while( have_rows('logos_master_of_well_being') ) {
							the_row();
				?>

					<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
						<a href="<?php echo get_sub_field('logo_master_of_well_being_link'); ?>" target="_blank" class="d-block m-auto">
							<img src="<?php echo get_sub_field('logo_master_of_well_being_image'); ?>" class="img-fluid" />
						</a>
					</div>

				<?php } //endwhile ?>

			</div>
		</div>

	<?php 
		} //endif 
		if ( have_rows('logos_well-being_stars') ) { 
	?> 
		
		<h4 class="card__title text-center mb-2">Well-Being Star:</h4>

	
		<div class="container container-fluid container--max pb-5 mb-2">
			<div class="row justify-content-center">
			
				<?php	

					while( have_rows('logos_well-being_stars') ) {
						the_row();

				?>

					<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
						<a href="<?php echo get_sub_field('logo_well-being-star_link'); ?>" target="_blank" class="d-block m-auto">
							<img src="<?php echo get_sub_field('logo_well-being-star_image'); ?>" class="img-fluid" />
						</a>
					</div>

				<?php } //endwhile ?>

			</div>
		</div>
	
	<?php 
		} //endif
	?>

</section>


<?php get_footer(); ?>
