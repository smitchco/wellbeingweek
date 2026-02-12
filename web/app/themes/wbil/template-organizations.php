<?php

/**
 * Template Name: Organizations
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
				<h2 class="text-white">For Organizations</h2>
				<h4 class="text-white hero__title">Plan Your Organization’s Well-Being Week Activities</h4>
			</div>
		</div>
	</div>
</div>

<section class="py-2">
	<div class="container container-fluid">
		<div class="row my-2">

			<div class="col order-2 order-md-1">
				<div class="bg-teal-dark p-3">
					<div class="row">
						<div class="col-12 col-md">
							<h4 class="card__title--small mb-2 text-white" style="font-size: 14px!important">Workplace Well-Being Handbook For Law Firms 2021</h4>

							<p class="card__content text-white mb-0" style="font-size: 12px!important">The New Workplace Well-Being Handbook provides practical guidance for legal employers about launching and developing effective well-being initiatives. <strong>All proceeds from the Handbook will be donated to IWIL for supporting Well-Being Week in Law.</strong></p>
						</div>

						<div class="col-12 col-md-auto my-auto">
								<?php echo do_shortcode('[purchase_link id="5656" text="Add To Cart" style="button" color="blue"]'); ?>

						</div>
					</div>
				</div>
			</div>

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
</section>
 
<section class="bg-section pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title mb-0">
					<strong>Participation Guides &amp; Activity Ideas</strong>
				</h2>
			</div>
		</div>
		<div class="row">
			
			<div class="col-12 col-md-6 mb-4">
				<div class="card h-100 p-4">
					<div class="row">
						<div class="col-4">
							<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Screen-Shot-2021-03-16-at-12.42.25-AM-768x999.png" class="img-fluid" />
						</div>
						<div class="col-8">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">“What Went Well?” Guide</h4>
									<p>Filled with examples of what law firms did last year for WWIL</p>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/What-Went-Well_Jan-2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-4">
				<div class="card h-100 p-4">
					<div class="row">
						<div class="col-4">
							<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Screen-Shot-2021-03-09-at-8.01.06-PM-768x997.png" class="img-fluid" />
						</div>
						<div class="col-8">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Legal Employer Participation Guide</h4>
									<p>Gives many options for readings, videos, and activities for WWIL</p>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Particpation-Guide_4-28-2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-4">
				<div class="card h-100 p-4">
					<div class="row">
						<div class="col-4">
							<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Activity-Ideas-front-page-232x300.jpg" class="img-fluid" />
						</div>
						<div class="col-8">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">46 Activity Ideas</h4>
									<p>More creative activity ideas for organizations to participate in WWIL.</p>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Activity-Ideas.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-4">
				<div class="card h-100 p-4">
					<div class="row">
						<div class="col-4">
							<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/04/Bar-Association-Guide_cover-image-233x300.jpg" class="img-fluid" />
						</div>
						<div class="col-8">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Legal Association Participation Guide</h4>
									<p>Daily activities for Legal Associations to share with their members.</p>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Bar-Association-Participation-2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-4">
				<div class="card h-100 p-4">
					<div class="row">
						<div class="col-4">
							<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/LAP-Activity-Guide-Cover-Image.png" class="img-fluid" />
						</div>
						<div class="col-8">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Activity Ideas for Lawyer Assistance Programs and Bar Associations</h4>
							
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/LAP-Well-Being-Week-Ideas_Final.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="bg-section pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title mb-0">
					<strong>Use These Daily Posts</strong>
				</h2>
			</div>
		</div>
		<div class="row">
			
			<div class="col col--20p mb-4 px-1">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-2">MONDAY DAILY POST</h4>
									<p>Stay Strong: Physical Well-Being</p>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/1-Monday-Post_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green px-4">
										Download
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col col--20p mb-4 px-1">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-2">TUESDAY DAILY POST</h4>
									<p>Align: Spiritual Well-Being</p>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/2-Tuesday-Post_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green px-4">
										Download
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col col--20p mb-4 px-1">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-2">WEDNESDAY DAILY POST</h4>
									<p>Engage &amp; Grow: Career &amp; Intellectual Well-Being</p>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/3-Wednesday-Post_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green px-4">
										Download
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col col--20p mb-4 px-1">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-2">THURSDAY DAILY POST</h4>
									<p>Connect: Social Well-Being</p>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/4-Thursday-Post_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green px-4">
										Download
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col col--20p mb-4 px-1">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-2">FRIDAY DAILY POST</h4>
									<p>Feel Well: Emotional Well-Being</p>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/5-Friday-Post-2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green px-4">
										Download
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="bg-teal-dark py-5">
	<div class="container container-fluid">
		<div class="row mt-3">
			<div class="col-12 col-lg-6">
				<h2 class="section__title text-white mb-0">
					<strong>Join Our “After Party” For Well-Being Coordinators</strong><br/>
					<span>May 17-21, 2021</span>
				</h2>
				<p class="text-white mt-3">If you’re responsible for building a well-being program for a law firm or other type of legal employer, you won’t want to miss the After Party that’s tailored to you.</p>
				<a href="https://lawyerwellbeing.net/after-party/" class="btn btn--section btn-primary text-white bg-green px-4">
					Learn More
				</a>
				
			</div>
			<div class="col-12 col-lg-6 m-auto text-center">
				<div class="card p-4 mx-auto" style="width: 300px;">
					<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/03/After-Party-Horiz-300x166.png" style="max-width: 300px; height: auto; "/>
				</div>
			</div>
		</div>
	</div>

</section>



<?php 
	get_footer(); 
?>