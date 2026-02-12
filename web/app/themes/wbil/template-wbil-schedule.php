<?php

/**
 * Template Name: WBIL Schedule
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

<script>

	<?php 
		
		$date = date("Y-m-d");

 		//echo 'var testdate = ' . $date; 

		switch ( $date ) {
			//2024
			case "2024-05-06":
				$active_anchor = 'mondaymay62024';
			break;
			case "2024-05-07":
				$active_anchor = 'tuesdaymay72024';
			break;
			case "2024-05-08":
				$active_anchor = 'wednesdaymay82024';
			break;
			case "2024-05-09":
				$active_anchor = 'thursdaymay92024';
			break;
			case "2024-05-10":
				$active_anchor = 'fridaymay102024';
			break;
			case "2024-05-06":
				$active_anchor = 'mondaymay62024';
			break;
			//2025
			case "2025-05-05":
				$active_anchor = 'mondaymay52025';
			break;
			case "2025-05-06":
				$active_anchor = 'tuesdaymay62025';
			break;
			case "2025-05-07":
				$active_anchor = 'wednesdaymay72025';
			break;
			case "2025-05-08":
				$active_anchor = 'thursdaymay82025';
			break;
			case "2025-05-09":
				$active_anchor = 'fridaymay92025';
			break;
			default: 
				$active_anchor = "start-here";
		}

		$query_string = $_REQUEST["day"]; 

		if($query_string) {
			$active_anchor = $query_string;
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


 
<main class="main__wbil">

<section>
	<div class="container-fluid">
		<div class="row justify-content-center h-100">
			<div class="col-12 col-lg-auto">
				<?php get_template_part( 'template-parts/wbil', 'sidebar' );  ?>
			</div>
			<div class="col-12 col-lg">
				<div class="row">
					<div class="col col-lg-11">
						<div class="px-lg-5">
							 
							<h1 class="h1 pt-5">Well-Being Week Daily Schedule</h1>

							<hr/>

						</div>
					</div>
				</div>

				
				<div class="row">
					<div class="col-12">

	<?php 
		if( have_rows('section') ) { ?>

			<div class="row row--schedule no-gutters m-0 p-0 text-center justify-content-center pt-3">

				<?php 

				$i = 0;

				while( have_rows('section') ) {

					$i++;

				the_row();

				$bg_color = get_sub_field('section_color');

				if ( get_sub_field('section_type') != 'webinar' ) { 

					$section_title = get_sub_field('section_overline');;
					$section_title = preg_replace('/\s*/', '', $section_title);
					$section_title = strtolower($section_title);

					$section_title  = clean($section_title);

				if($i == 1) { ?>
					<div class="col-12 col-lg pr-1" style="height: 80px;">
					<button data-tab-trigger="start-here" class="tab btn btn-primary btn--block bg-gray text-dark-gray" style="height: 80px;">
						Start Here
					</button>
				</div>
				<?php } ?>


		<div class="col-12 col-lg px-1" style="height: 80px;">
			<button data-tab-trigger="<?php echo $section_title; ?>" class="tab btn btn-primary btn--block text-white" style="background: <?php echo $bg_color; ?>">
				<span><?php echo get_sub_field('section_overline'); ?></span><br/>
				<?php echo get_sub_field('section_title'); ?>
			</button>
		</div>


<?php 
		}
	} 
?>

</div>

<section class="p-4 bg-gray text-dark-gray" style="display: none;" data-tab-content="start-here">

	<?php the_content(); ?>
</section>

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

 <section class="<?php echo get_sub_field('section_type') == 'webinar' ? 'bg-section-alt' : 'bg-section'; ?> py-4" style="display: none; background: <?php echo $bg_color; ?>" data-tab-content="<?php echo $section_content_title; ?>">
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
						<div class="mb-1 section__description text-white" style="color:<?php echo get_sub_field('section_text_color'); ?>!important;"><?php echo get_sub_field('section_description'); ?></div>
					</div>
				<?php } ?>

			</div>
			<div class="row">
				<?php 

				if( have_rows('resource_items') ) { 

					$resource_item_number = 0;

					while( have_rows('resource_items') ) {
						
						the_row();

						$resource_item_number++;
						$size = get_sub_field('resource_size');

	
		if ($size == 'sm') { ?>

			<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">

	  <?php } else if ($size == 'md') { ?>

			<div class="col-12 col-md-6 col-lg-4 mb-4">

		<?php } else if ($size == 'xl') { ?>

			<div class="col-12 mb-4">

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

							else if( get_sub_field('resource_overline') == 'try') {

								$class = "fa-file-prescription";
								$word = "Try This";
							}

							else if( get_sub_field('resource_overline') == 'prescription') {

								$class = "fa-file-prescription";
								$word = "Social Prescription " . $resource_item_number;
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
										<div class="card card--noborder h-100">
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

<?php } }?>

							
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