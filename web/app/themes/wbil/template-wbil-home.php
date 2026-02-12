<?php 
 /* Template Name: WBIL Homepage */
	get_header(); 
	get_template_part( 'template-parts/wbil', 'hero');

	while (have_posts()) { the_post();
		$page_id = $post->ID; 
	}
?>
 
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
							
							<div class="wbil-banner mt-5 p-3 p-lg-4 text-center">

								<img src="<?php echo $conf_id == 7162 ? 'https://lawyerwellbeing.net/wp-content/uploads/2025/03/iwil-2025-logo-combo-e1741036140587.png' : 'https://lawyerwellbeing.net/wp-content/uploads/2024/04/wbil-logos-combo.png'; ?>" alt="Well-Being Week In Law" class="img-fluid" style="width 100%; max-width: 800px;" />
							</div>
							<h1 class="h1 pt-5">Welcome!</h1>

							<p class="text__callout">Welcome to the Well-Being Week in Law (WWIL) team! We’re happy you’re here and want to support your involvement in the cultural transformation needed to establish well-being as a defining feature of professional success.</p>

							<hr/>
							
							<div class="mb-5 mt-2">
								<h5 class="p-0 m-0">Jump to:</h5>
								<p class="m-0 p-0">
									<a href="<?php echo $conf_id == 7162 ? get_permalink(7856) : get_permalink(8371); ?>" class="mr-2">About WWIL</a> | 
									<a href="<?php echo $conf_id == 7162 ?  get_permalink(7254) : get_permalink(8372); ?>" class="mx-2">Daily Schedule</a> | 
									<a href="<?php echo $conf_id == 7162 ? get_permalink(7250) : get_permalink(8373); ?>" class="ml-2">Participation Guides & Resources</a></p>
							</div>

							<?php the_content(); ?>

							<div class="callout my-4 p-3 p-lg-5">
								<div class="row">
									<div class="col-12 col-md order-2 order-md-1">
										<?php echo get_field('wbil_theme'); ?>
									</div>
									<div class="col-12 col-md-auto my-auto order-1 order-md-2 pb-4 pb-md-0">
										<img src="<?php  echo $conf_id == 7162 ? 'https://lawyerwellbeing.net/wp-content/uploads/2025/02/iwil-theme-logo-2025.png' : 'https://lawyerwellbeing.net/wp-content/uploads/2024/04/well-being-reboot-logo.png'; ?>" class="img-fluid" style="max-width: 260px;" alt="Well Being Week In Law Logo"/>
									</div>
								</div>
							</div>

							<h4 class="mb-0 mt-5">WWIL Daily Schedule</h4>
						
							<p>The hub of WWIL is the Daily Schedule, which recommends activities and webinars for each day of the week.</p>

							<p>Each day focuses on a distinct dimension of holistic well-being for legal professionals:</p>

							<div class="row no-gutters">
								<div class="col pr-1">
									<div class="card__wbil card--sm card--orange my-3">
										<p class="card__overline text-uppercase mb-0 text-black">Monday</p>
										<p class="card__title card__title--sm text-orange mb-0">Stay Strong</p>	
										<?php if ($conf_id == 7162) { ?>
											<a href="<?php echo get_permalink(7254); ?>?day=mondaymay52025" 
											 class="card__link card__link--sm card__link--orange"></a>
										<?php } else if ($conf_id == 8370) { ?>
											<a href="<?php echo get_permalink(8372); ?>?day=mondaymay62024" 
											class="card__link card__link--sm card__link--orange"></a>
										<?php } ?>
									</div>
								</div>
								<div class="col px-1">
									<div class="card__wbil card--sm card--blue my-3">
										<p class="card__overline text-uppercase mb-0 text-black">Tuesday</p>
										<p class="card__title card__title--sm text-blue mb-0">Align</p>
										<?php if ($conf_id == 7162) { ?>
											<a href="<?php echo get_permalink(7254); ?>?day=tuesdaymay62025" class="card__link card__link--sm card__link--blue"></a>
										<?php } else if ($conf_id == 8370) { ?>
											<a href="<?php echo get_permalink(8372); ?>?day=tuesdaymay72024" class="card__link card__link--sm card__link--blue"></a>
										<?php } ?>
									</div>
								</div>
								<div class="col px-1">
									<div class="card__wbil card--sm card--magenta my-3">
										<p class="card__overline text-uppercase mb-0 text-black">Wednesday</p>
										<p class="card__title card__title--sm text-magenta mb-0">Engage & Grow</p>
										<?php if ($conf_id == 7162) { ?>
										<a href="<?php echo get_permalink(7254); ?>?day=wednesdaymay72025" class="card__link card__link--sm card__link--magenta"></a>
										<?php } else if ($conf_id == 8370) { ?>
											<a href="<?php echo get_permalink(8372); ?>?day=wednesdaymay82024" class="card__link card__link--sm card__link--magenta"></a>
										<?php } ?>
									</div>
								</div>
								<div class="col px-1">
									<div class="card__wbil card--sm card--purple my-3">
										<p class="card__overline text-uppercase mb-0 text-black">Thursday</p>
										<p class="card__title card__title--sm text-purple mb-0">Connect</p>	
										<?php if ($conf_id == 7162) { ?>
										<a href="<?php echo get_permalink(7254); ?>?day=thursdaymay82025" class="card__link card__link--sm card__link--purple"></a>
										<?php } else if ($conf_id == 8370) { ?>
											<a href="<?php echo get_permalink(8372); ?>?day=thursdaymay92024" class="card__link card__link--sm card__link--purple"></a>
										<?php } ?>
									</div>
								</div>
								<div class="col pl-1">
									<div class="card__wbil card--sm card--green my-3">
										<p class="card__overline text-uppercase mb-0 text-black">Friday</p>
										<p class="card__title card__title--sm text-green mb-0">Feel Well</p>
										<?php if ($conf_id == 7162) { ?>
										<a href="<?php echo get_permalink(7254); ?>?day=fridaymay92025" class="card__link card__link--sm card__link--green"></a>
										<?php } else if ($conf_id == 8370) { ?>
											<a href="<?php echo get_permalink(8372); ?>?day=fridaymay102024" class="card__link card__link--sm card__link--green"></a>
										<?php } ?>
									</div>
								</div>
							</div>

							<p>For the full definition of each well-being dimension, <a href="<?php echo get_permalink(7856); ?>">jump to About WWIL</a>.</p>

							<!-- <h4 class="mb-0 mt-5">Register, Participate, & Win Prizes</h4>
							<p>Everyone loves free prizes, and it's easy to enter to win during WWIL. All you need to do is register—whether you're an individual or a representative of an organization.</p>

							<p>Registration is not required but it gives us a sense of who is participating so that we can support them better. Everyone who registers will be entered into a raffle for free well-being related prizes. You can find the list of prizes on the <a href="<?php echo get_permalink(7939); ?>">Register for WWIL page</a>.</p> -->

							<h4 class="mb-0 mt-5">Questions?</h4>
							<p>Do you have questions about WWIL? You can contact IWIL's Executive Director, <a href="mailto:denise@lawyerwellbeing.net">Denise Gaskin</a>, or this year's WWIL Co-Chairs, <a href="mailto:abrafford@aspire.legal">Anne Brafford</a> and <a href="mailto:tara@cultivate.center">Tara Antonipillai</a>.</p>

							<nav class="mt-5 mb-4">
								<ul class="nav nav-tabs" id="nav-tab" role="tablist">
									<li class="nav-item">
										<button class="nav-link active" id="sponsors-tab" data-toggle="tab" data-target="#sponsors" type="button" role="tab" aria-controls="sponsors" aria-selected="true">Sponsors</button>
									</li>
									<?php if ( have_rows('logos', 5647) ) { ?>

										<li class="nav-item">
											<button class="nav-link" id="donor-tab" data-toggle="tab" data-target="#donor" type="button" role="tab" aria-controls="donor" aria-selected="false">Donors</button>
										</li>

									<?php } 
									
									if(get_field('collaborators')) {  ?>
										
										<!-- <li class="nav-item">
											<button class="nav-link" id="collab-tab" data-toggle="tab" data-target="#collab" type="button" role="tab" aria-controls="collab" aria-selected="false">Collaborators</button>
										</li> -->

									<?php } ?>
								</ul>
							</nav>

							<div class="tab-content mb-5" id="nav-tabContent">



		<div class="tab-pane fade active show" id="sponsors" role="tabpanel" aria-labelledby="sponsors-tab">
			<section class="pb-5"> 
				<div class="container container-fluid mb-4 pb-4">
					<?php get_template_part( 'template-parts/section', 'sponsors', ['page_id' => $page_id]); ?>
				</div>
			</section>
		</div>
	<?php 
	
	if(get_field('collaborators')) { ?>					
	<div class="tab-pane fade" id="collab" role="tabpanel" aria-labelledby="collab-tab">
		<section class="py-5" style="border-top: 2px solid #CCC;">
			<div class="container container-fluid mb-4 pb-4">
				<div class="row">
					<div class="col-12">
						<h2 class="font-condensed text-uppercase">
							Collaborators
						</h2>

						<p>We are grateful to our many collaborators, which are organizations that support WWIL by sharing information with their memberships and encouraging participation.</p>
					</div>
					<div class="col-12">
						<div class="collaborators">
							<?php echo get_field('collaborators'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php 
	} 
	 
	if ( have_rows('logos', 5647) ) { ?>
	<div class="tab-pane fade" id="donor" role="tabpanel" aria-labelledby="donor-tab">

		<h2 class="font-condensed text-uppercase"></h2>

		<p>We are grateful to the principal donors of the Institute for Well-Being in Law who support all of our programming, including Well-Being Week in Law.</p>

		<h4 class="font-condensed text-uppercase mb-5 text-purple">Inaugural Founding Champions</h4>

		<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
		
			<div class="row justify-content-center">


				<?php	

				while( have_rows('logos', 5647) ) {
								the_row();

				?>

					<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
						<a href="<?php echo get_sub_field('logo_link', 5647); ?>" target="_blank" class="d-block m-auto">
							<img src="<?php echo get_sub_field('logo_image', 5647); ?>" class="img-fluid" />
						</a>
					</div>

				<?php 
						} //endwhile
				?>

			</div>
		</div>

	<?php 
		} //endif 

		if ( have_rows('logos_founding', 5647) ) { 
	?>
<h4 class="font-condensed text-uppercase mb-5 text-purple">Founding Champions</h4>

    	<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
			<div class="row justify-content-center">
			
				<?php	

				while( have_rows('logos_founding', 5647) ) {
					the_row();
				?>

					<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
						<a href="<?php echo get_sub_field('logo_founding_link', 5647); ?>" target="_blank" class="d-block m-auto">
							<img src="<?php echo get_sub_field('logo_founding_image', 5647); ?>" class="img-fluid" />
						</a>
					</div>

				<?php } //endwhile ?>
			</div>
		</div>

	<?php 
		} //endif 
		if ( have_rows('logos_master_of_well_being', 5647) ) { 
	?>

<h4 class="font-condensed text-uppercase mb-5 text-purple">Master of Well-Being</h4>

		<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
			<div class="row justify-content-center">
				
				
				<?php	
					while( have_rows('logos_master_of_well_being', 5647) ) {
							the_row();
				?>

					<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
						<a href="<?php echo get_sub_field('logo_master_of_well_being_link', 5647); ?>" target="_blank" class="d-block m-auto">
							<img src="<?php echo get_sub_field('logo_master_of_well_being_image', 5647); ?>" class="img-fluid" />
						</a>
					</div>

				<?php } //endwhile ?>

			</div>
		</div>
	</div>
	<?php 
		} //endif ?>
							</div>
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