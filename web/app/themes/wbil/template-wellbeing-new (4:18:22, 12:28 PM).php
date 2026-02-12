<?php

/**
 * Template Name: Well-Being In Law New -- backup
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

        
        //seconds
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


<section class="py-5">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 text-center" >
				<h5>&nbsp;</h5>
<div><a href="https://institute.lawyerwellbeing.net/general/pick_username.asp" class="btn btn--section btn-primary text-white bg-green">Join The Movement</a></div>

			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 text-center">
				<img src="<?php echo get_field('wbil_form_logo'); ?>" class="img-fluid" />
			</div>
			<div class="col-12 col-lg-6">
				
				<div style="color: #000000!important">

				<?php echo do_shortcode(get_field('wbil_form_shortcode')); ?>
</div>
			</div>
		</div>
	</div>
	


</section>



<section>
<section class="py-5">

	
				<h2 class="text-teal text-center pb-5">
					Principal Donors
				</h2>


<?php
	if ( have_rows('logos', 5647) ) { ?>

		<h4 class="card__title text-center mb-5">Inaugural Founding Champions:</h4>


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

		<h4 class="card__title text-center mb-2">Founding Champions:</h4>

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

		<h4 class="card__title text-center mb-2">Master of Well-Being:</h4>

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

	<?php 
		} //endif 
		if ( have_rows('logos_well-being_stars', 5647) ) { 
	?> 
		
		<h4 class="card__title text-center mb-2">Well-Being Star:</h4>

	
		<div class="container container-fluid container--max pb-5 mb-2">
			<div class="row justify-content-center">
			
				<?php	

					while( have_rows('logos_well-being_stars', 5647) ) {
						the_row();

				?>

					<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
						<a href="<?php echo get_sub_field('logo_well-being-star_link', 5647); ?>" target="_blank" class="d-block m-auto">
							<img src="<?php echo get_sub_field('logo_well-being-star_image', 5647); ?>" class="img-fluid" />
						</a>
					</div>

				<?php } //endwhile ?>

			</div>
		</div>
	
	<?php 
		} //endif
	?>

</section>

 <script type='text/javascript' src='https://lawyerwellbeing.net/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/countdown-dependent.min.js?ver=3.19.9' id='ult-countdown-dependent-js'></script>
<script type='text/javascript' src='https://lawyerwellbeing.net/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/countdown.min.js?ver=3.19.9' id='jquery.timecircle-js'></script>

 

<?php 
	get_footer(); 
?>