<?php

/**
 * Template Name: Resources
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
				<h2 class="text-white">Resources</h2>
				<h4 class="text-white hero__title">Find even more resources to bolster well-being in the legal profession during Well-Being Week in Law and year-round.</h4>
			</div>
		</div>
	</div>
</div>

<section class="py-2" style="background: #E6E6E6;">
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
 

<section class="bg-section py-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title mb-0">
					<strong>Building Workplace Well-Being</strong>
				</h2>
			</div>
		</div>
		<div class="row">
	
			<div class="col-12 col-md-6 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-3 col-md-5">
							<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Screen-Shot-2021-04-27-at-9.49.10-PM.png" class="img-fluid" />
						</div>
						<div class="col-9 col-md-7">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-2">Workplace Well-Being Handbook For Law Firms 2021</h4>

									<p class="card__content">Anne Brafford’s new Workplace Well-Being Handbook provides practical guidance for legal employers about launching and developing effective well-being initiatives.  The Appendix includes a planning worksheet, workplace practices review checklist, recommended readings and resources, and more. Review the <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Workplace-Well-Being-Handbook_TOC-_4-23-2021.pdf" target="_blank"><u>Table of Contents</u></a> to see all the helpful information that’s included.</p>



								</div>
							</div>
						</div>
						<div class="col-12 mt-auto text-center">

							<p><strong>All proceeds from the Handbook will be donated to IWIL for supporting Well-Being Week in Law.</strong></p>

							<?php echo do_shortcode('[purchase_link id="5656" text="Add To Cart" style="button" color="blue"]'); ?>
						</div>
					</div>
				</div>
			</div>


			<div class="col-12 col-md-6 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-3 col-md-5">
							<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Screen-Shot-2021-04-11-at-1.41.04-PM.png" class="img-fluid" />
						</div>
						<div class="col-9 col-md-7">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Law Firm Well-Being Program Benchmarking Report 2021</h4>
									<p class="card__content">(Excerpt from the Workplace Well-Being Handbook)<br/>
In this Report, Anne Brafford has collected information about current trends in law firm well-being programs including, for example, committee structure, programming trends, behavioral health services, and examples of events and offerings. The Report can help firms compare their own programs and get innovative ideas.</p>
								</div>
							</div>
						</div>
						<div class="col-12 mt-auto text-center">
							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/WellBeing-Benchmarking-Report_Rev-4-17-2021_clean-1.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
								Download Now
							</a>
						</div>
					</div>
				</div>
			</div>


		<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Alcohol Use Policy Template for Legal Employers</h4>
										<p class="card__content">(Excerpt from the Workplace Well-Being Handbook)<br/>
Workplace culture strongly influences drinking patterns. Get started shaping responsible drinking norms by tailoring the free Alcohol Use Policy Template to your organization.</p>
								</div>
								<div class="col-12 mt-auto text-center">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Alcohol-Use-Policy_wIntroduction.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Workplace Well-Being Infographic</h4>
										<p class="card__content">Download the infographic of key psychosocial workplace factors, which are elements within legal employers’ influence that can powerfully impact employees’ well-being and optimal functioning.</p>
								</div>
								<div class="col-12 mt-auto text-center">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Psychosocial-Factors-Infographic.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div class="row">
		<!-- 				<div class="col-3">
							<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/well-being-toolkit.png" class="img-fluid" />
						</div> -->
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Well-Being Toolkit For Lawyers and Legal Employers</h4>

									<p class="card__content">Anne Brafford created this freely-available Toolkit as part of an ABA initiative in 2018.  It provides guidance to legal employers on establishing and developing well-being programs and includes a series of well-being-boosting worksheets for individual lawyers.</p>

								</div>
								<div class="col-12 mt-auto text-center">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Toolkit-Full_Final_July-30-2018.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">ABA Employee Impairment Policy Template</h4>
								</div>
								<div class="col-12 mt-auto text-center">
									<a href="https://www.americanbar.org/content/dam/aba/administrative/lawyer_assistance/well-being-template-for-legal-employers-final-3-19.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div class="row">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Tristan Jepson Healthy Workplace Guidelines for the Legal Profession</h4>
								</div>
								<div class="col-12 mt-auto text-center">
									<a href="https://www.publicdefenders.nsw.gov.au/Documents/TJMFMentalHealthGuidelines_A4_140427.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
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

<section class="bg-teal-dark py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-5">
				<h4 class="card__title mb-3 text-white">Lawyer Well-Being YouTube Channel</h4>
				<p class="text-white">Check out the <a href="https://www.youtube.com/channel/UCnQ-umHedGWctqiLRk0-p1A/" class="text-white" target="_blank"><u>Lawyer Well-Being YouTube Channel</u></a> where we’ll be posting more great videos like this one:</p>
			</div>
			<div class="col-12 col-lg-7">
				<div class="embed-container">
					<iframe src="https://www.youtube.com/embed/wRmwM5-h8D8" title="YouTube video player" frameborder="0"  frameborder='0' allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="bg-orange pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Stay Strong</strong><br/>
					<span class="text-uppercase">PHYSICAL WELL-BEING</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Striving for regular activity, good diet and nutrition, enough sleep and recovery. Limit addictive substances and seek help for physical health when needed.</p>
			</div>
		</div>
		<div class="row">

			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">4-7-8 Breathing Exercise Activity Guide</h4>
					<p>The way you breathe (yep, breathe!) may be making you anxious. Learn stress-calming techniques in the 4-7-8 Breathing Exercise Activity Guide.</p>

													<div class="col-12 mt-auto text-center">

					<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Breathing-Exercise_Physical-1.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-orange">
						Download Now
					</a>
				</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">Desk Yoga Activity Guide</h4>
					<p>The exercises in this activity will enable physical and psychological recharging and can easily fit into your daily routine.</p>
					
					<div class="col-12 mt-auto text-center">

						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Desk-Yoga_Final-2021.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-orange">
							Download Now
						</a>
				</div>
				</div>
			</div>


			<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Tips to Optimize Your Brain</h4>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Brain.Tips_.optimized.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-orange">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Sleep Hygiene Checklist</h4>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Sleep-Hygiene_Jon-Krop-Checklist.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-orange">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Defeating Digital Distractions</h4>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Mindfulness-for-Lawyers-Defeating-Digital-Distractions-Attorney-Handbook.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-orange">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Self-Care Plan Worksheet</h4>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Self-Care-Plan_Final-2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-orange">
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


<section class="bg-blue pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Align</strong><br/>
					<span class="text-uppercase">SPIRITUAL WELL-BEING</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Fostering a sense of meaningfulness and purpose in work and life, and aligning your work and life with your values, goals, and interests.</p>
			</div>
		</div>
		<div class="row">

			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">Take an Awe Walk</h4>
					<p>Boost the meaningfulness of your everyday stroll by following the instructions in the Awe Walk Activity Guide.</p>
					<div class="mt-auto text-center">

						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Awe-Walk_Spiritual-1.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-blue">
							Download Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">Aligning With Your Values</h4>
					<p>Spiritual Well-Being involves cultivating a sense of meaning and purpose in work and life and aligning our work and lives with our values, goals, and interests. Chronic misalignment between our values and behaviors can contribute to disengagement, burnout, anxiety, and depression. Use this Activity Guide individually or in teams to identify your core values and ways to align those values with your work and personal life.</p>
					
					<div class="mt-auto text-center">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Values_Spiritual.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-blue">
							Download Now
						</a>
					</div>
				</div>
			</div>


			<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Use Your Strengths For Growth Worksheet</h4>
								</div>
								<div class="col-12 mt-auto text-center">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Self-Mastery-and-Peak-Performance-Through-Character-Strengths-_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-blue">
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


<section class="bg-magenta pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Engage &amp; Grow</strong><br/>
					<span class="text-uppercase">Career &amp; Intellectual Well-Being</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Seeking personal satisfaction, continuous learning and growth in our professional and personal lives, and financial stability. Engaging in creative or intellectually challenging activities that foster ongoing development and monitoring cognitive wellness.</p>
			</div>
		</div>
		<div class="row">

			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">Job Crafting Activity Guide</h4>
					<p>Job crafting is a continual activity in which we seek to create a better fit between our strengths, values, and preferences and our work. To try it out, follow the instructions in the Job Crafting Activity Guide.</p>
					<div class="mt-auto text-center">

						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Job-Crafting-1.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-magenta">
							Download Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">Get Into Flow With Creativity Activity Guide</h4>
					<p>Left-brained-logic-loving lawyers and other legal professionals may overlook the rejuvenating force of creativity. Much research shows that everyday creativity can boost health and happiness. The Activity Guide recommends choosing creative activities that align with who you are, are absorbing and challenging, and enables you to disconnect from stressful thoughts.</p>
					<div class="mt-auto text-center">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Creativity-Guide_2021.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-magenta">
							Download Now
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Use Your Strengths For Growth Worksheet</h4>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Self-Mastery-and-Peak-Performance-Through-Character-Strengths-_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-magenta">
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



<section class="bg-purple pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Connect</strong><br/>
					<span class="text-uppercase">Social Well-Being</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Building connection, belonging, and a reliable support network. Contributing to our groups and communities.</p>
			</div>
		</div>
		<div class="row">

			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">Loving-Kindness Meditation Activity Guide</h4>
					<p>Loving-kindness meditation is a practice in which we mentally send goodwill, kindness, and warmth towards others, which builds a foundation for pro-social behaviors.  It is also linked to many psychological benefits, including greater positive emotions and reduced depression, anxiety, stress, and loneliness.</p>

					<div class="col-12 mt-auto text-center">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/LKM_Thursday-1.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-purple">
							Download Now
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">Connecting Over Things In Common Activity Guide</h4>
					<p>We often share more in common with others than what meets the eye. Getting beyond the surface attributes and gaining a better understanding of the experiences, identities, and other aspects of our lives that we share with our colleagues can help us bridge differences and work together more effectively. Try it out by doing the exercise in this Activity Guide.</p> 

					<div class="col-12 mt-auto text-center">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Things-In-Common_Inclusion.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-purple">
							Download Now
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
							<h4 class="card__title">Meaningful Connections Through Movies Activity Guide</h4>
							<p>Movies have many layers that shape people’s experience in ways that can influence well-being—including fostering social connection. This Activity Guide provides ideas for creating a Movie Club that facilitates meaningful connections.</p>

							<div class="col-12 mt-auto text-center">
								<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Movies.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-purple">
									Download Now
								</a>
							</div>
						</div>
					</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
							<h4 class="card__title">Grow Your Gratitude Activity Guide</h4>
							<p>Gratitude is defined as a sense of thankfulness and joy in response to receiving a gift. Multiple studies have found the positive power of gratitude for fostering social connection, pro-social behaviors, and mental well-being. Try out different ways of practicing gratitude to bolster social connection and well-being.</p>
								<div class="col-12 mt-auto text-center">

								<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Gratitude.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-purple">
									Download Now
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
							<h4 class="card__title">Lessen Loneliness Activity Guide</h4>
							<p>Inside and outside the legal profession, loneliness is a growing threat to mental health. Many science-backed, practical strategies may prevent and alleviate symptoms of loneliness, and, in this Activity Guide, we offer a few for you to try.</p>

								<div class="col-12 mt-auto text-center">

							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Loneliness_2021.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-purple">
								Download Now
							</a>
						</div>
						</div>
					</div>


		</div>
	</div>
</section>


<section class="bg-green pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Feel Well</strong><br/>
					<span class="text-uppercase">Emotional Well-Being</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Valuing emotions, developing an ability to identify and manage emotions for health, to achieve goals, and to inform decisions. Seeking help for mental health when needed.</p>
			</div>
		</div>
		<div class="row">

			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">Retraining Unhelpful Thoughts Activity Guide</h4>
					<p>Learning to push back on automatic unhelpful thoughts that often flood our minds will help us feel better, enable us to intentionally choose that align with our goals and values, and protect our mental health. Try out two activities to help curb the negative effects of unhelpful thoughts in the Retraining Unhelpful Thoughts Activity Guide.</p>

								<div class="col-12 mt-auto text-center">

						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Unhelpful-Thoughts.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-green">
							Download Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title">Savoring Positive Experiences Activity Guide</h4>
					<p>Intentionally engaging in thoughts and behaviors that heighten our good feelings about positive events is strongly related to mental health. It includes anything that generates, intensifies, or prolongs our enjoyment. This Activity Guide will help you assess your own savoring habits and make a plan for more savoring.</p>
					
								<div class="col-12 mt-auto text-center">

						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Savoring.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-green">
							Download Now
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-3 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Resilient Thinking I: 6 Steps to Tame Negative Emotions (Worksheet)</h4>
								</div>
								<div class="col-12 mt-auto text-center">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2020/04/Resilient-Thinking-Worksheet_Flexibility_4-1-2020.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
										Download Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-3 mb-4">
				<div class="card h-100 p-4">
					<div class="row h-100">
						<div class="col-12">
							<div class="row h-100">
								<div class="col-12">
									<h4 class="card__title--small mb-3">Resilient Thinking II: Activities to Boost Positive Emotions (Worksheet)</h4>
								</div>
								<div class="col-12 mt-auto">
									<a href="https://lawyerwellbeing.net/wp-content/uploads/2020/04/Resilient-Thinking_Positive-Emotions-Worksheet_4-1-2020.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
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


<section class="bg-orange pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Recognition &amp; Rewards</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Perceived efforts/contributions are fairly balanced with perceived rewards provided by the employer (e.g., compensation, esteem and social rewards, job security, career opportunities).</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">

					<h4 class="card__title">Strengths-Based Feedback Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Feedforward_2021.pdf" target="_blank"><u>Strengths-Based Feedback Activity Guide:</u></a> Provides practical guidance for supervisors on delivering strengths-based feedback.</p>

					<div class="mt-auto text-center">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Feedforward_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-orange">
							Download Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-blue pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Balance</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Our culture supports members ability to maintain good health and functioning while feeling fully engaged in and satisfied with their contributions to their work and families and themselves without perceiving too much conflict among those roles.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">

					<h4 class="card__title">Aligning With Your Values Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Values_Spiritual.pdf" target="_blank"><u>Aligning With Your Values Activity Guide</u></a> explains individual and team activities to identify one’s core values and ways to align those values with one’s work and personal life.</p>

					<div class="mt-auto text-center">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Values_Spiritual.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-blue">
							Download Now
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">

					<h4 class="card__title">Getting Serious About Balance &amp; Self-Care For Solo Lawyers: Perspectives and Strategies From Professional Women of Color</h4>

					<p class="card__content">Professional coach Pamela DeNeuve interviews Melanie Fenwick Thompson and Phillis Williams about strategies for creating balance and valuing self-care as solo practitioners and unique challenges for people of color.</p>

					<div class="mt-auto text-center">
						<a href="https://www.youtube.com/watch?v=vsjq7R1_cig" target="_blank" class="btn btn--section btn-primary text-white bg-blue">
							Watch Now
						</a>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>

<section class="bg-magenta pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Effective Leadership</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Our leaders positively impact organizational members' well-being through their leadership style, creation of a psychologically healthy work culture, management of mental health matters in the workplace, and support for workplace well-being programs.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">

					<h4 class="card__title">Positive Leadership Development Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Leadership_2021.pdf" target="_blank"><u>Positive Leadership Development Activity Guide:</u></a> Effective leadership is a key contributor to workplace well-being. This Guide provides multiple activities for starting down the path of leader development.</p>

					<div class="mt-auto text-center">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Leadership_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-magenta">
							Download Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-purple pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Inclusion</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Our organizational members feel supported and valued for their unique, individual traits and talents; feel a sense of belonging; and have access to and feel fairly treated by the organization’s structures and processes.</p>
			</div>
		</div>
		<div class="row">

			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<h4 class="card__title mb-3">Enabling Lawyer Well-Being Through Diversity & Inclusion</h4>
					<p>The legal profession has placed a high priority on both DEI and workplace well-being--which are highly-interrelated. Whether work cultures support diverse legal professionals’ well-being and ability to be their best will significantly influence whether they stay, advance, and achieve their potential. This article by Anne Brafford (2020) discusses strategies that serve both goals.</p>
					<div class="mt-auto text-center">

						<a href="https://lawyerwellbeing.net/wp-content/uploads/2020/04/Braffprd_Diversity-and-Wellbeing.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-purple">
							Download Now
						</a>
					</div>
				</div>
			</div>


			<div class="col-12 col-md-6 col-xl-4 mb-4">
				<div class="card h-100 p-4">

					<h4 class="card__title">Things In Common Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Things-In-Common_Inclusion.pdf" target="_blank"><u>Connecting Over Things In Common Activity Guide.</u></a> We often share more in common with others than what meets the eye. Getting beyond the surface attributes and gaining a better understanding of the experiences, identities, and other aspects of our lives that we share with our colleagues can help us bridge differences and work together more effectively.</p>

					<div class="mt-auto text-center">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Things-In-Common_Inclusion.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-purple">
							Download Now
						</a>
					</div>
				</div>
			</div>

						<div class="col-12 col-md-6 col-xl-4 mb-4">
				<div class="card h-100 p-4">

					<h4 class="card__title">
						The Cost of Assimilation in the Legal Profession
					</h4>

					<p class="card__content"><a href="https://www.youtube.com/watch?v=90zyG5iKnbY" target="_blank"><u>The Cost of Assimilation in the Legal Profession:</u></a>  Voices Of Our Diverse Colleagues (2021). Well-Being Week Team, 28:28 mins.</p>

					<div class="mt-auto text-center">
						<a href="https://www.youtube.com/watch?v=90zyG5iKnbY" target="_blank" class="btn btn--section btn-primary text-white bg-purple">
							Watch Now
						</a>
					</div>
				</div>
			</div>


						<div class="col-12 col-md-6 col-xl-4 mb-4">
				<div class="card h-100 p-4">

					<h4 class="card__title">
						Overcoming Imposter Syndrome As a Black Woman In Law
					</h4>

					<p class="card__content"><a href="https://www.youtube.com/watch?v=M2SWcC6GVpo&t=148s" target="_blank"><u>Overcoming Imposter Syndrome As a Black Woman In Law (2021).</u></a>  Well-Being Week Team, 17:04 mins.</p>

					<div class="mt-auto text-center">
						<a href="https://www.youtube.com/watch?v=M2SWcC6GVpo&t=148s" target="_blank" class="btn btn--section btn-primary text-white bg-purple">
							Watch Now
						</a>
					</div>
				</div>
			</div>

		</div>




					

					
	</div>
</section>

<section class="bg-green pt-5 pb-4">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>Culture of Trust,<br/>
					Fairness &amp; Transparency</strong>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Our work environment is characterized by the shared values of trust, honesty, transparency, and fairness.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">

					<h4 class="card__title">Positive Leadership Panel Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Leadership-Panel_Friday.pdf" target="_blank"><u>Positive Leadership Panel Activity Guide:</u></a> Guidance for organizing a panel of top leaders addressing issues related to trust, fairness, and transparency.</p>

					<div class="mt-auto text-center">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Leadership-Panel_Friday.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Download Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	get_footer(); 
?>