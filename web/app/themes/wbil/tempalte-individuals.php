<?php

/**
 * Template Name: Individuals
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
				<h2 class="text-white">For Individuals</h2>
				<h4 class="text-white hero__title">Welcome! This page provides do-able ways to participate individually or with colleagues, friends, and family.</h4>
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


<div class="main container container-fluid pt-5">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-8">
			<h5 class="main__title">The Well-Being Week team has been working hard to make it easy for you to get involved.</h5>

			<p>Each of the 5 days in Well-Being Week is focused on one dimension of overall well-being. Below, you’ll find tips and downloadable activity guides to practice different dimensions of well-being.</p>

			<p>If you decide to participate, we’d love to see you on social media. Please post about your experience, use the hashtag #WellBeingWeekInLaw, and follow along as the week unfolds!</p>

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

	<div class="row m-0 p-0 text-center justify-content-center py-3">
		<div class="col--20p px-1">
			<a href="#mon" class="btn-anchor btn btn-primary btn--block text-white bg-orange">
				<span>Monday May 3</span><br/>
				<strong>Stay Strong</strong>
			</a>
		</div>
		<div class="col--20p px-1">
			<a href="#tues" class="btn-anchor btn btn-primary btn--block text-white bg-blue">
				<span>Tuesday May 4</span><br/>
				<strong>Align</strong>
			</a>
		</div>
		<div class="col--20p px-1">
			<a href="#wed" class="btn-anchor btn btn-primary btn--block text-white bg-magenta">
				<span>Wednesday May 5</span><br/>
				<strong>Engage & Grow</strong>
			</a>
		</div>
		<div class="col--20p px-1">
			<a href="#thurs" class="btn-anchor btn btn-primary btn--block text-white bg-purple">
				<span>Thursday May 6</span><br/>
				<strong>Connect</strong>
			</a>
		</div>
		<div class="col--20p px-1">
			<a href="#fri" class="btn-anchor btn btn-primary btn--block text-white bg-green">
				<span>Friday May 7</span><br/>
				<strong>Feel Well</strong>
			</a>
		</div>
	</div>
</div>

<section class="bg-orange py-4" id="mon">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-orange-dark py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>MONDAY: May 3, 2021</strong></p>
				</div>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-white section__title mb-0">
					<strong>Stay Strong</strong><br/>
					<span>PHYSICAL WELL-BEING</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Striving for regular activity, good diet and nutrition, enough sleep and recovery. Limit addictive substances and seek help for physical health when needed.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>
					<h4 class="card__title">Don't Underestimate The Power of A Walk</h4>
					<p class="card__content">"Walking is one of the simplest and most strategic things you can do for your physical and mental health."</p>

					<p class="card__content">Deborah Grayson Riegel (2021).<br/>
					<a href="https://hbr.org/2021/02/dont-underestimate-the-power-of-a-walk" target="_blank"><u>Don't Underestimate the Power of a Walk.</u></a> Harvard Business Review.</p>

					<div class="mt-auto">
						<a href="https://hbr.org/2021/02/dont-underestimate-the-power-of-a-walk" target="_blank" class="btn btn--section btn-primary text-white bg-orange">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>
					<h4 class="card__title">How Exercise Can Change Your Life</h4>

					<p class="card__content">Bahar Gholipour (2016). Exercise Changed This Neuroscientist’s Life And Now She Wants To Change Yours—Profile of Dr. Wendy Suzuki. HuffPost.com. HuffPost Video Profile, 6:28. Dr. Suzuki talks about how exercise transformed her life and what’s she’s learned in her research about the interconnection between physical activity and peak brain functioning that can benefit us all.</p>

					<div class="mt-auto">
						<a href="https://www.huffpost.com/entry/exercise-brain-benefits_n_58176e4be4b0390e69d15b0d" target="_blank" class="btn btn--section btn-primary text-white bg-orange">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card p-4">
					<div class="row">
						<div class="col-auto">
							<div>
								<p class="card__overline pb-3 text-uppercase mb-3">
									<i class="fa fa-fire-alt mr-1"></i>
									Do This
								</p>
							</div>
						</div>
						<div class="col-auto ml-auto text-right">
							<a class="text-gray-lt btn--secondary" href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">

							<p>Download the Activity Guides below to discover more ways to bolster your well-being.</p>
						</div>

						<div class="col-12 col-lg-6">
							<h4 class="card__title">4-7-8 Breathing Exercise Activity Guide</h4>
							<p>The way you breathe (yep, breathe!) may be making you anxious. Learn stress-calming techniques in the 4-7-8 Breathing Exercise Activity Guide. Post on social media about your experience using the hashtag #WellbeingWeekInLaw.</p>
							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Breathing-Exercise_Physical-1.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-orange">
								Download Activity Guide
							</a>
						</div>
						<div class="col-12 col-lg-6">
							<h4 class="card__title">Desk Yoga</h4>
							<p>The exercises in this activity will enable physical and psychological recharging and can easily fit into your daily routine. Try out the activity and post on social media about your experience using the hashtag #WellbeingWeekInLaw.</p>
							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Desk-Yoga_Final-2021.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-orange">
								Download Activity Guide
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-orange-dark py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 ">
					<p class="card__overline pb-3 text-uppercase mb-3 text-white">
						<i class="fa fa-tv mr-1"></i>
						Webinar
					</p>

					<p class="text-white">Monday, May 3, 2021 1:00-2:30 pm ET</p>

					<h4 class="text-white card__title">Brain & Body Self Care for the Successful and Busy Attorney ABA-Sponsored Webinar: Free to ABA members</h4>

					<p class="text-white card__content"><strong>ABA-Sponsored Webinar: Free to ABA Members</strong></p>

					<p class="text-white card__content">How to keep your brain healthy and sharp while maintaining happiness and productivity. Sign up on the ABA website. Direct questions about ABA-sponsored webinars to Lindsey Kent, <a class="text-white" href="mailto:Lyndsey.Kent@americanbar.org"><u>Lyndsey.Kent@americanbar.org</u></a></p>

						<p><a href="https://www.americanbar.org/events-cle/mtg/web/411806236/" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-orange">
							Register now
					</a></p>
			</div>
		</div>

	</div>
</section>



<section class="bg-blue py-4" id="tues">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-blue-dark py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>TUESDAY: May 4, 2021</strong></p>
				</div>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-white section__title mb-0">
					<strong>Align</strong><br/>
					<span>SPIRITUAL WELL-BEING</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Cultivating a sense of meaning and purpose in work and life. Aligning our work and lives with our values, goals, and interests.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>
					<h4 class="card__title">Ways to Incorporate Your Spirituality at Work</h4>
					<p class="card__content">Learn eleven ways that you can remain professional while still staying true to your values and spirituality at work.</p>

					<p class="card__content">Jessie Cohen (2017).<br/>
					<a href="https://www.wework.com/ideas/worklife/ways-to-incorporate-your-spirituality-at-work" target="_blank"><u>Ways to Incorporate Your Spirituality at Work.</u></a> WeWork.com.

</p>

					<div class="mt-auto">
						<a href="https://www.wework.com/ideas/worklife/ways-to-incorporate-your-spirituality-at-work" target="_blank" class="btn btn--section btn-primary text-white bg-blue">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>
					<div class="mb-2">
						<div class="embed-container">
							<iframe src="https://www.youtube.com/embed/0AS9571zCqY" title="YouTube video player" frameborder="0"  frameborder='0' allowfullscreen></iframe>
						</div>

					</div>
					<h4 class="card__title">Practicing Spiritual Well-Being: Voices From the Legal Profession</h4>

					<p class="card__content">Fellow professionals in law share how they integrate their personal approach to spirituality into their work lives.</p>

					<div class="mt-auto">
						<a href="https://www.youtube.com/watch?v=0AS9571zCqY&t=41s" target="_blank" class="btn btn--section btn-primary text-white bg-blue">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card p-4">
					<div class="row">
						<div class="col-auto">
							<div>
								<p class="card__overline pb-3 text-uppercase mb-3">
									<i class="fa fa-fire-alt mr-1"></i>
									Do This
								</p>
							</div>
						</div>
						<div class="col-auto ml-auto text-right">
							<a class="text-gray-lt btn--secondary" href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
						</div>
					</div>
					<div class="row">

						<div class="col-12 col-lg-6">
							<h4 class="card__title">Take an Awe Walk</h4>
							<p>Boost the meaningfulness of your everyday stroll by following the instructions in the Awe Walk Activity Guide. Post on social media about your experience using the hashtag #WellbeingWeekInLaw.</p>

							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Awe-Walk_Spiritual-1.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-blue">
								Download Activity Guide
							</a>
						</div>
						<div class="col-12 col-lg-6">
							<h4 class="card__title">Aligning With Your Values</h4>
							<p>Spiritual Well-Being involves cultivating a sense of meaning and purpose in work and life and aligning our work and lives with our values, goals, and interests. Chronic misalignment between our values and behaviors can contribute to disengagement, burnout, anxiety, and depression. Use this Activity Guide individually or in teams to identify your core values and ways to align those values with your work and personal life. Post on social media about your experience using the hashtag #WellbeingWeekInLaw.</p>
							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Values_Spiritual.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-blue">
								Download Activity Guide
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-blue-dark py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 ">
					<p class="card__overline pb-3 text-uppercase mb-3 text-white">
						<i class="fa fa-tv mr-1"></i>
						Webinar
					</p>

					<p class="text-white">Tuesday, May 4, 2021 1:00-2:30 pm ET</p>

					<h4 class="text-white card__title">It Doesn’t Have to be a Grind: How to Create a Practice You Love.</h4>

					<p class="text-white card__content"><strong>ABA-Sponsored Webinar: Free to ABA Members</strong></p>

					<p class="text-white card__content">Learn how inner alignment can support your well-being and lift up your daily experience of practicing law.</p>
					
					<p class="text-white card__content">
					Direct questions about ABA-sponsored webinars to Lindsey Kent, <a class="text-white" href="mailto:Lyndsey.Kent@americanbar.org"><u>Lyndsey.Kent@americanbar.org</u></a></p>

					<a href="https://www.americanbar.org/events-cle/mtg/web/411742372/
					" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-blue">
							Register now
					</a>


			</div>
		</div>

	</div>
</section>



<section class="bg-magenta py-4" id="wed">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-magenta-dark py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>WEDNESDAY: May 5, 2021</strong></p>
				</div>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-white section__title mb-0">
					<strong>Engage &amp; Grow</strong><br/>
					<span>Career &amp; Intellectual Well-Being</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Seeking personal satisfaction, continuous learning and growth in our professional and personal lives, and financial stability. Engaging in creative or intellectually challenging activities that foster ongoing development and monitoring cognitive wellness.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>
					<h4 class="card__title">Nine Steps to Achieving Flow in Your Work</h4>
					<p class="card__content">“Flow” is a psychological state of complete absorption in engaging activities that are optimally challenging. It’s a mental state that psychologist Mihály Csíkszentmihályi says is key to our well-being and growth, and that <a href="https://www.huffpost.com/entry/flow-covid-19-pandemic-mental-health_l_5fb3e7b5c5b6aad41f7361a8?guccounter=1&guce_referrer=aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbS8&guce_referrer_sig=AQAAAEP_CchNHDyEZwzBa1m4LoyK8AgNBkn4I7JPxIjDKyBH4rKQA6y_hMAiZhB5mbCXz5gw9vuZ_UHshxcu8IUIwV2g5059FPhxIqyATxE_XaqBNSJlNJn4iWjA62wMowOkjO0oZRgrkST9fWctLGOG0yxEQxcH7e8mCy9OiIYKkhvD&fbclid=IwAR3KC1RWEDNO7WpJ4zit8cAyJMKNAmCfHI180qU5g5jmeBIPxTc68oIrhRE" target="_blank"><u>research shows</u></a> can buffer against negative psychological effects of the COVID-19 pandemic. Learn 9 ways to get more of it into your daily work life.</p>

					<p class="card__content">Leo Babauta (2012).<br/>
						<a href="https://greatergood.berkeley.edu/article/item/nine_steps_to_achieving_flow_in_your_work" target="_blank">Nine Steps to Achieving Flow in Your Work.</a> Greater Good Magazine.
					</p>

					<div class="mt-auto">
						<a href="https://greatergood.berkeley.edu/article/item/nine_steps_to_achieving_flow_in_your_work" target="_blank" class="btn btn--section btn-primary text-white bg-magenta">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>
					<div class="mb-2">
						<div class="embed-container">
							<iframe src="https://www.youtube.com/embed/8h6IMYRoCZw" title="YouTube video player" frameborder="0"  frameborder='0' allowfullscreen></iframe>
						</div>

					</div>
					<h4 class="card__title">Fostering Flow Is A Key To Growth & Happiness</h4>

					<p class="card__content">An entertaining video summary of psychologist Mihály Csíkszentmihályi’s best-selling book that proposes that fostering more “flow” in our daily lives is a key to growth and happiness.</p>

					<div class="mt-auto">
						<a href="https://www.youtube.com/watch?v=8h6IMYRoCZw&t=41s" target="_blank" class="btn btn--section btn-primary text-white bg-magenta">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card p-4">
					<div class="row">
						<div class="col-auto">
							<div>
								<p class="card__overline pb-3 text-uppercase mb-3">
									<i class="fa fa-fire-alt mr-1"></i>
									Do This
								</p>
							</div>
						</div>
						<div class="col-auto ml-auto text-right">
							<a class="text-gray-lt btn--secondary" href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
						</div>
					</div>
					<div class="row">

						<div class="col-12 col-lg-6">
							<h4 class="card__title">Job Crafting Activity Guide</h4>
							<p>Job crafting is a continual activity in which we seek to create a better fit between our strengths, values, and preferences and our work. To try it out, follow the instructions in the Job Crafting Activity Guide. Post about your experience on social media using the hashtag #WellbeingWeekInLaw.</p>

							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Job-Crafting-1.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-magenta">
								Download Activity Guide
							</a>
						</div>
						<div class="col-12 col-lg-6">
							<h4 class="card__title">Get Into Flow With Creativity</h4>
							<p>Left-brained-logic-loving lawyers and other legal professionals may overlook the rejuvenating force of creativity. Much research shows that everyday creativity can boost health and happiness. The Activity Guide recommends choosing creative activities that align with who you are, are absorbing and challenging, and enables you to disconnect from stressful thoughts. Try it out and post about your experience on social media using the hashtag #WellbeingWeekInLaw.</p>
							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Creativity-Guide_2021.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-magenta">
								Download Activity Guide
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-magenta-dark py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Webinar
				</p>

				<p class="text-white">Wednesday, May 5, 2021 3:00-4:00 pm ET</p>

				<h4 class="text-white card__title">Radical Candor: Kick Ass at Work While Embracing Your Humanity.</h4>

				<p class="text-white card__content"><strong>Well-Being Week-Sponsored Webinar: Free to Everyone</strong></p>

				<p class="text-white card__content">Without candid conversations and feedback, we can’t grow professionally or interpersonally, and we’ll be less effective as leaders and teammates. But there’s far too little direct honest, communication at work—often due to fear of hurting others’ feelings. Based on Kim Scott’s best-selling book, this session teaches skills for showing that we care while also speaking directly. These skills are beneficial for all job types (lawyers and staff) at all levels. Our speaker is <a class="text-white" href="https://theorg.com/org/radical-candor/team/melissa-andrada" target="_blank"><u>Melissa Andrada</u></a>, a creative DEI strategic advisor, leadership coach, motivational speaker, and workshop facilitator.</p>
				
				<p class="text-white card__content">Watch Melissa Andrada’s short introduction to this session <a class="text-white" href="https://www.youtube.com/watch?v=ajmEAbPXkCQ" target="_blank"><u>here</u></a>.</p>

				<p class="text-white card__content"><strong>Thank you to Cozen O’Connor for sponsoring and hosting this webinar!</strong></p>

				<p class="text-white card__content">
				Direct questions about Well-Being Week webinars to Anne Brafford, <a class="text-white" href="mailto:ambrafford@gmail.com"><u>ambrafford@gmail.com</u></a></p>

									<a href="https://globalmeet.webcasts.com/starthere.jsp?ei=1452206&tp_key=8d008a4285
					" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-magenta">
							Register now
					</a>

			</div>

			<div class="col-12 col-lg-6 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Webinar
				</p>

				<p class="text-white">Wednesday, May 5, 2021 1:00-2:00 pm ET</p>

				<h4 class="text-white card__title">Empower Yourself: Strategies for Practicing Law in Stressful Times.</h4>

				<p class="text-white card__content"><strong>ABA-Sponsored Webinar: Free to ABA Members</strong></p>

				<p class="text-white card__content">Learn coping mechanisms to support a flourishing career. Leave with tips to manage anxiety, embrace challenges, and learn from failure.</p>
				
				<p class="text-white card__content">
				Direct questions about ABA-sponsored webinars to Lindsey Kent, <a class="text-white" href="mailto:Lyndsey.Kent@americanbar.org"><u>Lyndsey.Kent@americanbar.org</u></a></p>

				<a href="https://www.americanbar.org/events-cle/mtg/web/411746650/
					" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-magenta">
							Register now
					</a>
			</div>
		</div>
	</div>
</section>




<section class="bg-purple py-4" id="thurs">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-purple-dark py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>THURSDAY: May 6, 2021</strong></p>
				</div>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-white section__title mb-0">
					<strong>Connect</strong><br/>
					<span>Social Well-Being</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Means building connection, belonging, and a reliable support network. It is contributing to our groups and communities. Below are some things you can do today to start building positive connections.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>
					<h4 class="card__title">Working From Home Poses Hurdles for Employees of Color.</h4>

					<p class="card__content">"Without the networks and encounters that offices provide, companies must foster the visibility of Black and Hispanic workers, diversity experts say."</p>

					<p class="card__content">Nelson D. Schwartz (2020).<br/>
						<a href="https://www-nytimes-com.cdn.ampproject.org/c/s/www.nytimes.com/2020/09/06/business/economy/working-from-home-diversity.amp.html" target="_blank"><u>Working From Home Poses Hurdles for Employees of Color.</u></a> New York Times.
					</p>

					<div class="mt-auto">
						<a href="https://www-nytimes-com.cdn.ampproject.org/c/s/www.nytimes.com/2020/09/06/business/economy/working-from-home-diversity.amp.html" target="_blank" class="btn btn--section btn-primary text-white bg-purple">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>
					
					<h4 class="card__title">The Science of Friendship</h4>

					<p class="card__content">Shawn Stevenson (2019). <a href="https://themodelhealthshow.com/dhru-purohit/" target="_blank"><u>The Model Health Show: The Science of Friendship & How your Community Impacts Your Health with Dhru Purohit.</u></a> In this podcast/YouTube video, Dhru Purohit shares how deep and meaningful friendships can help you thrive, how strong relationships can support your well-being, and how connecting with others can help you reach your goals. 1hr, 15 min.</p>

					<div class="mt-auto">
						<a href="https://themodelhealthshow.com/dhru-purohit/" target="_blank" class="btn btn--section btn-primary text-white bg-purple">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card p-4">
					<div class="row">
						<div class="col-auto">
							<div>
								<p class="card__overline pb-3 text-uppercase mb-3">
									<i class="fa fa-fire-alt mr-1"></i>
									Do This
								</p>
							</div>
						</div>
						<div class="col-auto ml-auto text-right">
							<a class="text-gray-lt btn--secondary" href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
						</div>
					</div>
					<div class="row">

						<div class="col-12 col-lg-6 mb-4">
							<h4 class="card__title">Loving-Kindness Meditation</h4>
							<p>Loving-kindness meditation is a practice in which we mentally send goodwill, kindness, and warmth towards others, which builds a foundation for pro-social behaviors.  It is also linked to many psychological benefits, including greater positive emotions and reduced depression, anxiety, stress, and loneliness.</p>


							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/LKM_Thursday-1.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-purple">
								Download Activity Guide
							</a>
						</div>

						<div class="col-12 col-lg-6 mb-4">
							<h4 class="card__title">Connecting Over Things In Common</h4>
							<p>We often share more in common with others than what meets the eye. Getting beyond the surface attributes and gaining a better understanding of the experiences, identities, and other aspects of our lives that we share with our colleagues can help us bridge differences and work together more effectively. Try it out by doing the exercise in this Activity Guide.</p>

							<p>Post about your experience on social media using the hashtag #WellbeingWeekInLaw.</p>
							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Things-In-Common_Inclusion.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-purple">
								Download Activity Guide
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-purple-dark py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Webinar
				</p>

				<p class="text-white">Thursday, May 6, 2021 1:00-2:30 pm ETT</p>

				<h4 class="text-white card__title">Next Level Diversity: Why “Belonging” is What Attorneys Really Want</h4>

				<p class="text-white card__content"><strong>ABA-Sponsored Webinar: Free to ABA Members</strong></p>

				<p class="text-white card__content">An important part of well-being is social well-being, and enjoying a true sense of belonging in the workplace helps us thrive socially as we connect with others. This program offers a newer way to approach diversity, equity, and inclusion initiatives that acknowledges that belonging and well-being are inextricably linked. The panel will offer tools to build a culture of greater belonging and well-being in legal organizations.</p>
				
				<p class="text-white card__content">
				Direct questions about ABA-sponsored webinars to Lindsey Kent, <a class="text-white" href="mailto:Lyndsey.Kent@americanbar.org"><u>Lyndsey.Kent@americanbar.org</u></a></p>

						<a href="https://www.americanbar.org/events-cle/mtg/web/411747671/" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-purple">
							Register now
					</a>


			</div>

		</div>
	</div>
</section>


<section class="bg-green py-4" id="fri">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-green-dark py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>FRIDAY: May 7, 2021</strong></p>
				</div>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-white section__title mb-0">
					<strong>Feel Well</strong><br/>
					<span>Emotional Well-Being</span>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-white mb-1 section__description">Valuing emotions. Developing an ability to identify and manage emotions for health, to achieve goals, and to inform decisions. Seeking help for mental health when needed.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>
					<h4 class="card__title">Feeling Overwhelmed? Here’s How To Get Through The Workday.</h4>

					<p class="card__content">"When people feel overwhelming, difficult emotions, their instinct can be to spend all day browsing the internet or to drown themselves in work as a distraction. But, there are alternatives between these extremes that can help you feel better, bounce back faster, and regain your confidence to handle whatever personal situations you’re facing."</p>

					<p class="card__content">Alice Boyes (November 2, 2020). <br/>
						<a href="https://hbr-org.cdn.ampproject.org/c/s/hbr.org/amp/2020/11/feeling-overwhelmed-heres-how-to-get-through-the-workday" target="_blank"><u>Feeling Overwhelmed? Here’s How To Get Through The Workday.</u></a> Harvard Business Review.
					</p>

					<div class="mt-auto">
						<a href="https://hbr-org.cdn.ampproject.org/c/s/hbr.org/amp/2020/11/feeling-overwhelmed-heres-how-to-get-through-the-workday" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>
					<div class="mb-2">
						<div class="embed-container">
							<iframe src="https://embed.ted.com/talks/guy_winch_why_we_all_need_to_practice_emotional_first_aid" width="854" height="480" frameborder="0" scrolling="no" allowfullscreen=""></iframe>
						</div>

					</div>
					<h4 class="card__title">Practicing Emotional First Aid</h4>

					<p class="card__content">Guy Winch (2014). Practicing Emotional First Aid, Guy Winch. TEDx, 17:15 mins. Because too many of us deal with common psychological-health issues on our own, Dr. Guy Winch advocates for better emotional hygiene — taking care of our emotions and minds with the same diligence as we take care of our bodies.</p>

					<div class="mt-auto">
						<a href="https://www.ted.com/talks/guy_winch_why_we_all_need_to_practice_emotional_first_aid?language=en" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card p-4">
					<div class="row">
						<div class="col-auto">
							<div>
								<p class="card__overline pb-3 text-uppercase mb-3">
									<i class="fa fa-fire-alt mr-1"></i>
									Do This
								</p>
							</div>
						</div>
						<div class="col-auto ml-auto text-right">
							<a class="text-gray-lt btn--secondary" href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
						</div>
					</div>
					<div class="row">

						<div class="col-12 col-lg-6">
							<h4 class="card__title">Retraining Unhelpful Thoughts Activity Guide</h4>
							<p>Learning to push back on automatic unhelpful thoughts that often flood our minds will help us feel better, enable us to intentionally choose that align with our goals and values, and protect our mental health. Try out two activities to help curb the negative effects of unhelpful thoughts in the Retraining Unhelpful Thoughts Activity Guide. Post about your experience on social media using the hashtag #WellbeingWeekInLaw.</p>

							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Unhelpful-Thoughts.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-green">
								Download Activity Guide
							</a>
						</div>
						<div class="col-12 col-lg-6">
							<h4 class="card__title">Savoring Positive Experiences</h4>
							<p>Intentionally engaging in thoughts and behaviors that heighten our good feelings about positive events is strongly related to mental health. It includes anything that generates, intensifies, or prolongs our enjoyment. This Activity Guide will help you assess your own savoring habits and make a plan for more savoring. Post about your experience on social media using the hashtag #WellBeingWeekInLaw.</p>
							<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Savoring.pdf" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-green">
								Download Activity Guide
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-green-dark py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Webinar
				</p>

				<p class="text-white">Friday, May 7, 2021 3:30-4:30 pm ET</p>

				<h4 class="text-white card__title">Performance Psychology in Law: How High-Achievers Can Productively Channel Their Energy Like Elite Athletes</h4>

				<p class="text-white card__content"><strong>Well-Being Week-Sponsored Webinar with Q&A: Free to Everyone
</strong></p>

				<p class="text-white card__content">Working in the legal profession has some things in common with elite athletics, and performance psychology practitioner <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Gloria-Park_Photo_BriefBio.pdf" target="_blank" class="text-white">Gloria Park</a>, PhD will teach us how to leverage stress and manage energy to help us perform at our best, as well as sustain optimal health and well-being. These skills are beneficial for all job types (lawyers and staff) and job levels.</p>
				
				<p class="text-white card__content"><strong>Thank you to Crowell & Moring for hosting this webinar!</strong></p>

				<p class="text-white card__content">
				Direct questions about Well-Being Week webinars to Anne Brafford, <a class="text-white" href="mailto:ambrafford@gmail.com"><u>ambrafford@gmail.com</u></a>.</p>

									<a href="https://event.on24.com/wcc/r/3114576/041778AE28FDBF9209376A5E5755FBE8
					" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-green">
							Register now
					</a>

			</div>

			<div class="col-12 col-lg-6 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Webinar
				</p>

				<p class="text-white">Friday, May 7, 2021 1:00-2:00 pm ET</p>

				<h4 class="text-white card__title">Changing the Headlines: Combating Lawyer Loneliness One Step at a Time.</h4>

				<p class="text-white card__content"><strong>ABA-Sponsored Webinar: Free to ABA Members</strong></p>

				<p class="text-white card__content">Lawyer loneliness, if not addressed, can lead to depression, anxiety, and substance abuse as a means to cope. Come away with tools enabling you to better build meaningful, high-quality relationships in your personal and professional lives.</p>

				<p class="text-white card__content">Take a look at the <a class="text-white" href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Loneliness_2021.pdf" target="_blank"><u>Lessening Loneliness Activity Guide</u></a> for a variety of practical strategies to prevent and alleviate symptoms of loneliness.</p>
				
				<p class="text-white card__content">
				Direct questions about ABA-sponsored webinars to Lindsey Kent, <a class="text-white" href="mailto:Lyndsey.Kent@americanbar.org"><u>Lyndsey.Kent@americanbar.org</u></a>.</p>

				<p><a href="https://www.americanbar.org/events-cle/mtg/web/411848289/" target="_blank" class="mt-auto btn btn--section btn-primary text-white bg-green">
							Register now
					</a></p>
			</div>

		</div>
	</div>
</section>




<?php 
	get_footer(); 
?>
