<?php

/**
 * Template Name: Communications New
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

	get_header();


?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/new.css' ?>' type='text/css' media='all' />

<script>

	  jQuery('body').on('click', '.btn-anchor', function(e){
    e.preventDefault(); 
    
    jQuery("html, body").animate({ scrollTop: jQuery(jQuery(this).attr("href")).offset().top - 120 }, 500);

  });

</script>


<div class="hero">
	<div class="container container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<h2 class="text-white"><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>

<section class="py-2">
	<div class="container container-fluid">
		<div class="row my-2">
			<div class="col-12 text-right">
				<div class="social">
					Follow us: 
					<a href="https://www.linkedin.com/company/institute-for-well-being-in-law/" target="_blank" class="text-teal mx-2">
						<i class="fa fa-linkedin"></i>
					</a> 
					<a href="https://twitter.com/wellbeinginlaw" target="_blank" class="text-teal">
						<i class="fa fa-twitter"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="main container container-fluid pt-5">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-7">
			<?php 
				while (have_posts()):
					the_post();

					the_content(); 

				endwhile; 
			?>
		</div>
	</div>
</div> 

<?php 

	if( have_rows('section') ) { 

		while( have_rows('section') ) {

		the_row();

		$btn_color = get_sub_field('section_button_color');
		$bg_color = get_sub_field('section_color');

?>

 <section class="bg-section py-4" style="background: <?php echo $bg_color; ?>">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-teal section__title mb-0">
					<strong><?php echo get_sub_field('section_title'); ?></strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-teal mb-1 section__description"><?php echo get_sub_field('section_description'); ?></p>
			</div>
		</div>

		<div class="row">

			<?php 

				if( have_rows('resource_items') ) { 

					while( have_rows('resource_items') ) {
							
						the_row();

						if( get_sub_field('resource_size') == 'sm') {

							$cols = 'col--20p px-1';

						} else {

							$cols = 'col-12 col-md-6 col-lg-3';

						} 

				?>


			<div class="<?php echo $cols; ?> mb-4">
				<div class="card h-100 p-3 text-center">

					<h4 class="card__title"><?php echo get_sub_field('resource_title'); ?></h4>

	<div class="card__content">
												<?php echo get_sub_field('resource_description'); ?>
											</div>

					<div class="m-auto">
						<a href="<?php echo get_sub_field('resource_button_link'); ?>">
							<img src="<?php echo get_sub_field('resource_thumbnail'); ?>" class="img-fluid" style="max-height: 165px;" />
						</a>
					</div>

					<div class="mt-auto pt-1">
					
						<a href="<?php echo get_sub_field('resource_button_link'); ?>" target="_blank" class="btn btn--section btn-primary text-white" style="background: <?php echo $btn_color; ?>">

									<?php echo get_sub_field('resource_button_text'); ?>

						</a>

					</div>
				</div>
			</div>

			<?php 
				} //endwhile 
			} //endif
			?>

		 
		</div>
	</div>
</section>


<?php  
				} //endwhile 
			} //endif
	get_footer(); 
?>