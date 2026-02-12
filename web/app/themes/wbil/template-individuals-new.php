<?php

/**
 * Template Name: Individuals New
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

	get_header();

		
			function clean($string) {
			   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

			   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
			}

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/new.css' ?>' type='text/css' media='all' />


 	<style>

		.webinar a {
			color: #FFFFFF!important; 
			text-decoration: underline!important; 
		}
	
	</style>



<script>

	<?php 
		
		//$date = date("Y-m-d", strtotime("2022-05-04"));

		$date = date("Y-m-d");

		switch ( $date ) {
			case "2023-05-02":
				$active_anchor = 'tuesdaymay22023';
			break;
			case "2023-05-03":
				$active_anchor = 'wednesdaymay32023';
			break;
			case "2023-05-04":
				$active_anchor = 'thursdaymay42023';
			break;
			case "2023-05-05":
				$active_anchor = 'fridaymay52023';
			break;
			default: 
				$active_anchor = "mondaymay12023";
		}
	?>

	var anchor_date = "<?php echo $active_anchor; ?>";


	jQuery('body').on('click', '.btn-anchor', function(e){
		e.preventDefault(); 
		
		jQuery("html, body").animate({ scrollTop: jQuery(jQuery(this).attr("href")).offset().top - 120 }, 500);

	});
	
	jQuery(document).ready(function() {
		jQuery('[data-tab-content=' + anchor_date + ']').show(); 
		jQuery('[data-tab-trigger=' + anchor_date + ']').addClass('active'); 

		jQuery('[data-tab-trigger]').click(function() {

			jQuery('[data-tab-content]').hide(); 
			jQuery('[data-tab-content="' + jQuery(this).data('tab-trigger') + '"]').show(); 
			jQuery('[data-tab-trigger]').removeClass('active'); 
			jQuery(this).addClass('active');
		});
	});

</script>



<div class="hero">
	<div class="container container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<h2 class="text-white">For Individuals</h2>
				<h4 class="text-white hero__title">Welcome! This page provides do-able ways to participate individually or with colleagues, friends, and family.</h4>
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

				endwhile; ?>
					
		</div>
	</div>
</div>

<div class="row pt-4">
		<div class="col-12 text-center">
			<i class="fa fa-calendar text-gray mb-2" style="font-size: 24px;"></i>
		</div>
		<div class="col-12 text-center">
			<h5 class="header-schedule text-gray">Well-Being Week Schedule</h5>
		</div>
	</div>


	<?php 
		if( have_rows('section') ) { ?>

			<div class="row m-0 p-0 text-center justify-content-center pt-3">

				<?php 

				while( have_rows('section') ) {

				the_row();

				$bg_color = get_sub_field('section_color');

				if ( get_sub_field('section_type') != 'webinar' ) { 

					$section_title = get_sub_field('section_overline');;
					$section_title = preg_replace('/\s*/', '', $section_title);
					$section_title = strtolower($section_title);

					$section_title  = clean($section_title);

		?>

		<div class="col--20p px-1">
			<button data-tab-trigger="<?php echo $section_title; ?>" class="tab btn btn-primary btn--block text-white" style="background: <?php echo $bg_color; ?>">
				<span><?php echo get_sub_field('section_overline'); ?></span><br/>
				<strong><?php echo get_sub_field('section_title'); ?></strong>
			</button>
		</div>


<?php 
		}
	} 
?>

</div>

	<?php 
}

if( have_rows('section') ) { 
	
	$i = 0;

	while( have_rows('section') ) {
		
		the_row();

		$btn_color = get_sub_field('section_button_color');
		$bg_color = get_sub_field('section_color');

		$i++;
		if( $i % 2 != 0 ) {

			$section_content_title = get_sub_field('section_overline');
			$section_content_title = preg_replace('/\s*/', '', $section_content_title);
			$section_content_title = strtolower($section_content_title);
			$section_content_title  = clean($section_content_title);
			
		}

?>

 <section class="bg-section py-4" style="display: none; background: <?php echo $bg_color; ?>" data-tab-content="<?php echo $section_content_title; ?>">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">

			<?php 
				if ( get_sub_field('section_type') == 'webinar' ) { 

					if( have_rows('resource_items') ) { 

						while( have_rows('resource_items') ) {
							
							the_row();

						?>


							<div class="col-12 pt-5 webinar">
								<p class="card__overline pb-3 text-uppercase mb-3 text-white">
									<i class="fa fa-tv mr-1"></i>
									Live Webinar
									<b style="
										background-color: <?php echo $btn_color; ?>;
								    position: absolute;
								    bottom: 0;
								    height: 2px;
								    width: 100%;
								    z-index: 1; 
								    display: block;"
							    ></b>
								</p>

								<?php if ( get_sub_field('resource_time') ) { ?>
									<p class="text-white"><?php echo get_sub_field('resource_time'); ?></p>
								<?php } ?>

								<h4 class="text-white card__title">
									<?php echo get_sub_field('resource_title'); ?>
								</h4>

								<div class="text-white card__content">
										<?php echo get_sub_field('resource_description'); ?>
								</div>

								<div class="mt-auto">
									

								<?php if( get_sub_field('resource_button_type') == 'pay') { 
									
									echo do_shortcode(get_sub_field('payment_button_shortcode'));
								
								} else { 

									if (get_sub_field('resource_button_link') && get_sub_field('resource_button_text')) {

								?>
									
								<a href="<?php echo get_sub_field('resource_button_link'); ?>" target="_blank" class="btn btn--section btn-primary text-white" style="background: <?php echo $btn_color; ?>">

									<?php echo get_sub_field('resource_button_text'); ?>

								</a>
								<?php 
									}
									} 

								?>

								</div>
							</div>



				<?php } 
				}
			}
				if ( get_sub_field('section_type') == 'callout' ) { 
			?>


					<div class="col-12 col-lg-6">
						<h2 class="section__title mb-3" style="color:<?php echo get_sub_field('section_text_color'); ?>!important;"><strong><?php echo get_sub_field('section_title'); ?></strong></h2>
						
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

					$section_title = get_sub_field('section_overline');;
					$section_title = preg_replace('/\s*/', '', $section_title);
					$section_title = strtolower($section_title);

					$section_title  = clean($section_title);

				if( get_sub_field('section_overline') ) { ?>
					<div class="col-auto" id="<?php echo $section_title; ?>">
						<div class="section__overline bg-teal py-1 pr-4 mb-3 position-relative" style="background:<?php echo get_sub_field('section_button_color'); ?>!important;">
							<p class="text-white m-0 p-0"><strong><?php echo get_sub_field('section_overline'); ?></strong></p>
						</div>
					</div>
				<?php } ?>
		
			</div>
			<div class="row">

				<div class="col-12 col-lg-auto">
					<h2 class="section__title mb-3" style="color:<?php echo get_sub_field('section_text_color'); ?>!important;">
						<strong>
							<?php echo get_sub_field('section_title'); ?>
						</strong>
						<?php if( get_sub_field('section_subtitle') ) { ?>
							<br/><span class="text-uppercase" style="color:<?php echo get_sub_field('section_text_color'); ?>!important;"><?php echo get_sub_field('section_subtitle'); ?></span>
						<?php } ?>
	 				</h2>
				</div>
				<?php if( get_sub_field('section_description') ) { ?>
					<div class="col-12 col-lg mt-auto">
						<div class="mb-1 section__description" style="color:<?php echo get_sub_field('section_text_color'); ?>!important;"><?php echo get_sub_field('section_description'); ?></div>
					</div>
				<?php } ?>

			</div>
			<div class="row">
				<?php 

				if( have_rows('resource_items') ) { 

					while( have_rows('resource_items') ) {
						
						the_row();


						$size = get_sub_field('resource_size');

	
		if ($size == 'sm') { ?>

			<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">

	  <?php } else if ($size == 'md') { ?>

			<div class="col-12 col-md-6 col-lg-4 mb-4">

	  <?php } else { ?>

				<div class="col-12 col-md-6 mb-4">

	  <?php } ?>


					<div class="card h-100 p-4">

						<?php if( get_sub_field('resource_overline') )  { 

							$class = '';
							$word = '';

							if( get_sub_field('resource_overline') == 'read' ) {

								$class = "fa-book";
								$word = "Read This";

							}

							else if( get_sub_field('resource_overline') == 'watch' ) {

								$class = "fa-eye";
								$word = "Watch This";

							}

							else if( get_sub_field('resource_overline') == 'listen' ) {

								$class = "fa-volume-up";
								$word = "Listen To This";

							}

							else if( get_sub_field('resource_overline') == 'do') {

								$class = "fa-fire-alt";
								$word = "Do This";
							}

						?>
							<div>
								<div class="card__overline pb-3 text-uppercase mb-3">
									<i class="fa <?php echo $class; ?> mr-1"></i>
									<?php echo $word; ?>
									<b style="background: <?php echo $bg_color; ?>; z-index: 1;"></b>
								</div>
							</div>

						<?php }
 							?>
 
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
										<div class="card h-100">
											<h4 class="<?php echo $size == 'sm' ? 'card__title--small' : 'card__title'; ?> mb-2">
												<?php echo get_sub_field('resource_title'); ?>
											</h4>

											<div class="card__content">
												<?php echo get_sub_field('resource_description'); ?>
											</div>
											<div class="mt-auto">

												<?php 

										if( get_sub_field('resource_button_type') == 'pay') { 
											
											echo do_shortcode(get_sub_field('payment_button_shortcode'));
										
										} else { 

											if (get_sub_field('resource_button_link') && get_sub_field('resource_button_text')) {
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
				</div>


				<?php
						}
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