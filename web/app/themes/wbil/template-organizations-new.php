<?php

/**
 * Template Name: Organizations New
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


	   jQuery(document).ready(function() {

	  		jQuery('.edd_go_to_checkout').text('Checkout & Download').addClass('bg-green').removeClass('bg-teal');


	  });

</script>


<div class="hero">
	<div class="container container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<h2 class="text-white">For Organizations</h2>
				<h4 class="text-white hero__title">Plan Your Organization’s Well-Being Week Activities</h4>
			</div>
		</div>
	</div>
</div>

	<div class="container container-fluid">
		<div class="row my-2">
			<div class="col-12 col-md-auto ml-md-auto text-right order-1 order-md-2 mb-2 mb-md-0">

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

<?php 

if( have_rows('section') ) { 

	while( have_rows('section') ) {
		
		the_row();

		$btn_color = get_sub_field('section_button_color');

?>

 <section class="bg-section py-4" style="background: <?php echo get_sub_field('section_color'); ?>">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">

				<?php 
				if ( get_sub_field('section_type') == 'callout' ) { 
			?>


					<div class="col-12 col-lg-6">
						<h2 class="section__title mb-3" style="color:<?php echo get_sub_field('section_text_color'); ?>!important;"><strong><?php echo get_sub_field('section_title'); ?></strong></h4>
						
						<?php if( get_sub_field('section_description') ) { ?>
								<div style="color:<?php echo get_sub_field('section_text_color'); ?>!important;">
									<?php echo get_sub_field('section_description'); ?>
								</div>
						<?php 

						}
						
						if( get_sub_field('section_button_link') ) { ?>

						<a href="<?php echo get_sub_field('section_button_link'); ?>" target="_blank" class="btn btn--section btn-primary text-white" style="background: <?php echo $btn_color; ?>">

									<?php echo get_sub_field('section_button_text'); ?>

								</a>

							<?php } ?>
					</div>
					

							<div class="col-12 col-lg-6 m-auto text-center">
								<div class="card p-4 mx-auto" style="width: 300px;">
									<img src="<?php echo get_sub_field('section_image'); ?>" class="img-fluid" style="max-width: 300px; height: auto; "/>
								</div>
							</div>


			<?php 

				}
				if ( get_sub_field('section_type') == 'video' ) { 
			?>


					<div class="col-12 col-lg-5">
						<h2 class="section__title text-white mb-0"><?php echo get_sub_field('section_title'); ?><br/>
							<span><?php echo get_sub_field('section_subtitle'); ?></span>
						</h2>
						
						<?php if( get_sub_field('section_description') ) { ?>
								<div style="color:<?php echo get_sub_field('section_text_color'); ?>!important;">
									<?php echo get_sub_field('section_description'); ?>
								</div>
						<?php } ?>

					</div>
					<div class="col-12 col-lg-7">
						<div class="embed-container">
							<iframe src="<?php echo get_sub_field('youtube_link'); ?>" title="YouTube video player" frameborder="0"  frameborder='0' allowfullscreen></iframe>
						</div>
					</div>

			<?php 

				}
				if ( get_sub_field('section_type') == 'items' ) { 

			?>
				<div class="col-12 col-lg-auto">
					<h2 class="section__title mb-0" style="color:<?php echo get_sub_field('section_text_color'); ?>!important;">
						<strong>
							<?php echo get_sub_field('section_title'); ?>
						</strong>
						<?php if( get_sub_field('section_subtitle') ) { ?>
							<br/><span class="text-uppercase"><?php echo get_sub_field('section_subtitle'); ?></span>
						<?php } ?>
	 				</h2>
				</div>
				<?php if( get_sub_field('section_description') ) { ?>
					<div class="col-12 col-lg mt-auto text-white">
						<p class="text-white mb-1 section__description"><?php echo get_sub_field('section_description'); ?></p>
					</div>
				<?php } ?>

			</div>
			<div class="row">
				<?php 

				if( have_rows('resource_items') ) { 

					while( have_rows('resource_items') ) {
						
						the_row();

						$size = get_sub_field('resource_size');


		if ($size == 'xs') { ?>

			<div class="col--20p px-1 mb-4">

	 	<?php } else if ($size == 'sm') { ?>

			<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">

	  <?php } else if ($size == 'md') { ?>

			<div class="col-12 col-md-6 col-lg-4 mb-4">

	  <?php } else { ?>

				<div class="col-12 col-md-6 mb-4">

	  <?php } ?>
			

					<div class="card h-100 p-3">
						<div class="row h-100">
							<?php if( get_sub_field('resource_thumbnail') )  { ?>
								<div class="col-4">
								<img src="<?php echo get_sub_field('resource_thumbnail'); ?>" class="img-fluid" />

							</div>
							<div class="col-8">
							<?php } else { ?>
							<div class="col-12">
							<?php }?>
								<div class="row h-100">
									<div class="col-12">

										<h4 class="<?php echo $size == 'sm' ? 'card__title--small' : 'card__title'; ?> mb-2">
											<?php echo get_sub_field('resource_title'); ?>
										</h4>

										<div class="card__content">
											<?php echo get_sub_field('resource_description'); ?>

											<?php 

								if( get_sub_field('resource_button_type') == 'pay') { 
									
									echo do_shortcode(get_sub_field('payment_button_shortcode'));
								
								} else { 

								?>
									
								<a href="<?php echo get_sub_field('resource_button_link'); ?>" target="_blank" class="btn btn--section btn-primary text-white" style="background: <?php echo $btn_color; ?>">

									<?php echo get_sub_field('resource_button_text'); ?>

								</a>
								<?php 

									} 

								?>


										</div>


									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>


				<?php
	    
				  } //endwhile
				} //endif
			}

				?>

		</div>
	</div>
</section>
<?php
    
  } //endwhile
} //endif
 
	get_footer(); 
?>