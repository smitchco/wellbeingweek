<?php

/**
 * Template Name: WBIL Register
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

	get_header();

	get_template_part( 'template-parts/wbil', 'head'); 
	get_template_part( 'template-parts/wbil', 'hero');
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
              
              <h1 class="h1 pt-5"><?php the_title(); ?></h1>

							<?php the_content(); ?>

               <div class="mt-5 mb-1 py-1 vc_row wpb_row vc_inner vc_row-fluid">
								<div class="wpb_column vc_column_container vc_col-sm-6">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element ">
												<div class="wpb_wrapper">
													<div class="callout--wrapper">
														<h4 style="text-align: center;">
															<span style="color: #51ba78;">
																<strong>WWIL 2025</strong>
															</span>
														</h4>
														<div class="text-center">
															<a class="btn btn--section btn-primary text-white bg-purple" href="https://events.zoom.us/ev/AhNb_n6lCj-ysfEm3wAwDKJdZcgEQbZRNJDdlgBMV8IsNfUk7u2A~Auqn1wrujOmWASoWEc3nhyTwZ5pHsbNRvVCBZPbaSmt_ghfdAb02gDLbkA " target="_blank" rel="noopener">Register Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
<!--
								<div class="wpb_column vc_column_container vc_col-sm-6">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element ">
												<div class="wpb_wrapper">
													<div class="callout--wrapper">
														<h4 style="text-align: center;">
															<span style="color: #51ba78;">
																<strong>For Individuals</strong>
															</span>
														</h4>
														<div class="text-center">
															<a class="btn btn--section btn-primary text-white bg-purple" href="https://institute.lawyerwellbeing.net/event/WWIL24INDV" target="_blank" rel="noopener">Register as Individual</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> 

							<div class="callout bg-purple text-white my-4 p-5">

								<h3 class="mb-0 text-white font-condensed text-uppercase">
									<i class="fas fa-gift mr-3"></i>
									List of prizes coming soon!
								</h3>
								

								<!-- <ul style="list-style: disc;" class="ml-3 mb-0 text-white">
									<li class="text-white">
										<strong>Canyon Ranch Experience:</strong> A two-night stay at a <a href="https://www.canyonranch.com/" target="_blank" class="text-white">Canyon Ranch Wellness Retreat</a> in Tucson, Arizona; Lenox, Massachusetts; or Woodside, California for two people on an inclusive Just Be Here experience.</li>
									<li class="text-white"><strong>Apple Watch:</strong> An Apple Watch to boost your motivation to get and stay healthy.</li>
									<li class="text-white"><strong>Apple Airpods Pro:</strong> The New AirPods Pro with active noise cancellation.</li>
									<li class="text-white"><strong>ClassPass Gift Card:</strong> A $100 <a href="https://classpass.com/gifts" target="_blank" class="text-white">ClassPass membership</a> to thousands of fitness classes, gyms, wellness and beauty venues.</li>
								</ul> -->
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