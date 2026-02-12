<?php

/**
 * Template Name: Well-Being In Law New
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

<?php if(date('Ymd', strtotime(get_field('countdown_timer'))) > date('Ymd')) { ?>

<script>

	 jQuery(document).ready(function() {

  	const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  		var birthday = "<?php echo get_field('countdown_timer'); ?>",
      countDown = new Date(birthday).getTime(),
      
      x = setInterval(function() {    

        var now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
      }, 0)
	 });

</script>

<div class="hero">
	<div class="container container-fluid">
			<div class="row">
			<div class="col-12 text-center">
					<p class="text-white"><strong>Countdown to Well-Being Week</strong></p>

				<div>
					<div id="countdown">
				   <span class="ult_countdown-amount text-white" id="days"></span>
				      	<span class="ult_countdown-period text-white" style="font-size: 13px; margin-right: 10px;">Days</span>
				      <span class="ult_countdown-amount text-white" id="hours"></span>
				      	<span class="ult_countdown-period text-white" style="font-size: 13px; margin-right: 10px;">Hours</span>
				     <span class="ult_countdown-amount text-white" id="minutes"></span>
				      	<span class="ult_countdown-period text-white" style="font-size: 13px; margin-right: 10px;">Minutes</span>
				      <span class="ult_countdown-amount text-white" id="seconds"></span>
				      	<span class="ult_countdown-period text-white" style="font-size: 13px;">Seconds</span>
				    </ul>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } //endif ?>


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


<section class="pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4 justify-content-center">
			<div class="col-12 col-lg-8">
				<?php 
					while (have_posts()):
						the_post();

						the_content(); 

					endwhile; ?>
			</div>
		</div>
	</div>
</section>


<section class="pt-5 pb-4 bg-green-dark">
	<div class="container container-fluid">
		<div class="row">
			<?php 
				while (have_rows('wbil_cards') ):
					the_row(); 
				 ?>
					<div class="col-12 col-md-6 col-lg-3 mb-4">
						<div class="card p-3 h-100">
							
							<h4 class="card__title"><?php echo get_sub_field('card_title'); ?></h4>

							<p class="card__content"><?php echo get_sub_field('card_description'); ?></p>
		 					
			 				<?php if(get_sub_field('card_link')): ?>
								<div class="mt-auto">
									<a href="<?php echo get_sub_field('card_link'); ?>" target="" class="btn btn--section btn-primary text-white bg-green">
										Read More
									</a>
								</div>
							<?php endif; ?>

						</div>
					</div>
						<?php 
							endwhile; 
						?>
			</div>
		</div>
	</div>
</section>

<section class="pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 mb-4 text-center">
				<img src="<?php echo get_field('wbil_graphic'); ?>" class="img-fluid"/>
			</div>
			<div class="row justify-content-center">
				<div class="col-8">
					<?php echo get_field('wbil_purpose_content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="py-5" style="border-top: 2px solid #CCC;"> 
	<?php if ( have_rows('supporting_sponsored_by_logos') ) { ?>

		<div class="container container-fluid mb-4 pb-4">

			<h2 class="text-teal text-center ">
				Supporting Sponsors
			</h2>
    
    	<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
			<div class="row justify-content-center">
				<?php	
      
      				$i = 0; 
      
					while( have_rows('supporting_sponsored_by_logos') ) {
							the_row();
                      
                      $i++;
				?>

					<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
						<a href="<?php echo get_sub_field('sponsored_by_link'); ?>" target="_blank" class="d-block m-auto">
							<img src="<?php echo get_sub_field('sponsored_by_logo'); ?>" class="img-fluid" />
						</a>
					</div>
                      
                      <?php if ($i % 2 == 0) { ?>
                        
                        <div class="col-12"></div>
                        
                      <?php } //endif; ?>

				<?php } //endwhile ?>
    
    
        </div>
        </div>
				</div>

    <?php } ?>

		<?php if ( have_rows('daily_sponsored_by_logos') ) { ?>


 <h2 class="text-teal text-center ">
			Daily Sponsors
		</h2>

	<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
	<div class="row justify-content-center">
		<?php	
			while( have_rows('daily_sponsored_by_logos') ) {
					the_row();
		?>

			<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
				<a href="<?php echo get_sub_field('sponsored_by_link'); ?>" target="_blank" class="d-block m-auto">
					<img src="<?php echo get_sub_field('sponsored_by_logo'); ?>" class="img-fluid" />
				</a>
			</div>

		<?php } //endwhile ?>


		</div>
		</div>
		</div>

<?php } ?>


    

    	<?php if ( have_rows('logos') ) { ?>

				<h2 class="text-teal text-center pb-5">
					Principal Donors
				</h2>

			<?php } ?>

<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
			<div class="row justify-content-center">
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
					<!-- <a href="<?php echo get_sub_field('logo_link', 5647); ?>" target="_blank" class="d-block m-auto"> -->
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

	<?php if( get_field('collaborators') ) { ?>

	<section class="py-5" style="border-top: 2px solid #CCC;">

	<h2 class="text-teal text-center mb-4">
			Collaborators
		</h2>

	<div class="container container-fluid mb-4 pb-4">
	<div class="row justify-content-center">
		<div class="col-12">
				<div class="collaborators">
					<?php echo get_field('collaborators'); ?>
				</div>
		</div>
		</div>
		</div>
		</div>


			</section>
			<?php } ?>



 <script type='text/javascript' src='https://lawyerwellbeing.net/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/countdown-dependent.min.js?ver=3.19.9' id='ult-countdown-dependent-js'></script>
<script type='text/javascript' src='https://lawyerwellbeing.net/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/countdown.min.js?ver=3.19.9' id='jquery.timecircle-js'></script>



<?php 
	get_footer(); 
?>