<?php

/**
 * Template Name: Conference Schedule
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

	get_header();

	get_template_part( 'template-parts/conference', 'head'); 
?>

<main class="main container-fluid container--max pt-5">

  <div class="pb-md-5">
    <div class="row pb-5">
      <div class="col-xl-8">
        <h1 class="title">Conference Schedule</h1>
      </div>
    </div>

		<?php
			if( have_rows('schedule_section') ):
				while( have_rows('schedule_section') ):
					the_row();

					$section_timestamp = strtotime(get_sub_field('section_date'));
		?>

		<section>
			<div class="row">
				<div class="col-12">
					<div class="bg-green p-4 text-white">
						<h2 class="table-title mb-0">
							<?php echo date('l, F j', $section_timestamp); ?>
						</h2>
						<p class="text-white mb-0 pb-0">
							<?php echo get_sub_field('section_title'); ?>
						</p>
					</div>
				</div>
			</div>

			<?php
			if( have_rows('section_items') ):
				while( have_rows('section_items') ):
					the_row();

					$start_timestamp = strtotime(get_sub_field('item_start_time')); 
					$end_timestamp = strtotime(get_sub_field('item_end_time'));
			?>

			<div class="row table-row">
				<div class="col-12 col-md-2 pt-4 pb-3">
					<p>
						<?php echo date('g:i A',$start_timestamp) . '-' . date('g:i A',$end_timestamp) . ' ET'; ?>
					</p>
				</div>
				<div class="col-12 col-lg-10 col-xl-8 pt-4 pb-3">
				<?php
					if(get_sub_field('item_title')): 
				?>

					<h3 class="table-title">
						<?php echo get_sub_field('item_title'); ?>
					</h3>

				<?php 
					endif;
					if(get_sub_field('item_start_time')): 
				?>

					<p class="date-time mb-0">
						<?php echo date('l, F j', $section_timestamp); ?> | 
						Start Time: <?php echo date('g:i A', $start_timestamp); ?> ET | 
						Duration: <?php echo round(abs($end_timestamp - $start_timestamp) / 60,2); ?> mins
					</p>

				<?php 
					endif; 
					if( have_rows('item_speakers') ): 
				?>

					<div class="table-background">
						<div class="row">
						<?php 	
							while( have_rows('item_speakers') ):
								the_row();

								if( get_sub_field('speaker_image') ): 
						?>

							<div class="col-12 col-md-6 col-lg-4 col-xl-3 py-4">
								<div class="profile">
										<img src="<?php echo wp_get_attachment_image_src( get_sub_field('speaker_image'), 'photo_small' )[0]; ?>" class="img-fluid img-profile mb-2"> 
									<?php 
										if( get_sub_field('speaker_name')):
									?>
									<h4 class="table-title">
										<?php echo get_sub_field('speaker_name'); ?>
									</h4>
									<?php 
										endif; 
										if( get_sub_field('speaker_title_info') ): 
									?>

										<p>
											<?php echo get_sub_field('speaker_title_info'); ?>
										</p>
									<?php endif; ?>
								</div>
							</div>

						<?php 
								else: 
									if( get_sub_field('speaker_name')):
						?>
							<div class="col-auto me-3">
								<p class="date-time">
									<strong><?php echo get_sub_field('speaker_name'); ?></strong>
									<?php 
										if( get_sub_field('speaker_title_info') ): 
									?>
										<br/>
										<?php echo get_sub_field('speaker_title_info'); ?>
									<?php 
										endif;
									?>
								</p>
							</div>

						<?php
									endif;
								endif; 
							endwhile; 
						?>
						</div> 
					</div> 

				<?php 
					endif; 
					if( get_sub_field('item_description')): 
				?>

					<div class="row">
						<div class="col-12 col-lg-11 col-xl-10">
							<?php echo get_sub_field('item_description'); ?>
						</div>
					</div>

				<?php 
					endif; 
				?>

				</div>
			</div>
	
		<?php
				endwhile;
			endif; 
		?>
		</section>
	<?php
			endwhile;
		endif; 
	?>
	</div>
</main> 

<?php 
	get_footer(); 
?>