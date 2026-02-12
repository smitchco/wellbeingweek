<?php

/**
 * Template Name: After Party
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
				<h2 class="text-white">After Party</h2>
				<h4 class="text-white hero__title">Join Our “After Party” For Well-Being Coordinators</h4>
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
			<h5 class="main__title">This year, in collaboration with the Professional Development Consortium, we’re excited to introduce an “After Party” for all of the well-being coordinators who are working hard within organizations to boost well-being in the legal profession.</h5>

			<p>If you’re responsible for building a well-being program for a law firm or other type of legal employer, you won’t want to miss the After Party that’s tailored to you.</p>

			<p>Each day of the week of May 17, we’ll provide programming focused on organizational practices that science has shown have a substantial impact on workplace well-being. To avoid exacerbating everyone’s growing Zoom fatigue, we’ll offer a mix of ways to participate–e.g., readings, resources, pre-recorded videos, and a few live webinars.</p>

			<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/After-Party_Agenda_April-14.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Download Schedule
						</a>

			 

		</div>
		<div class="col-12 col-lg-5">
			<?php echo do_shortcode('[hubspot type=form portal=19592879 id=6b30101c-0738-4ca9-9f18-8d1f2cf53a7a]'); ?>
		</div>
	</div>


	<!-- <div class="row pt-4">
		<div class="col-12 text-center">
			<h5 class="header-schedule text-gray">"After Party" Daily Themes</h5>
		</div>
	</div>

	<div class="row m-0 p-0 text-center justify-content-center py-3">
		<div class="col--20p my-auto px-1">
			<a href="#mon" class="btn-anchor btn btn-primary btn--block btn--none text-wrap">
				<strong>Recognition &amp; Rewards</strong>
			</a>
		</div>
		<div class="col--20p my-auto px-1">
			<a href="#tues" class="btn-anchor btn btn-primary btn--block btn--none text-wrap">
				<strong>Balance</strong>
			</a>
		</div>
		<div class="col--20p my-auto px-1">
			<a href="#wed" class="btn-anchor btn btn-primary btn--block btn--none text-wrap">
				<strong>Effective Leadership</strong>
			</a>
		</div>
		<div class="col--20p my-auto px-1">
			<a href="#thurs" class="btn-anchor btn btn-primary btn--block btn--none text-wrap">
				<strong>Inclusion</strong>
			</a>
		</div>
		<div class="col--20p my-auto px-1">
			<a href="#fri" class="btn-anchor btn btn-primary btn--block btn--none text-wrap">
				<strong>Culture of Trust</strong>
			</a>
		</div>
	</div> -->
</div> 

<section class="bg-section py-4 mt-4" id="mon">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-teal py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>MONDAY: May 17, 2021</strong></p>
				</div>
			</div>
			<div class="col-auto ml-auto">
				<a class="text-gray-lt btn--secondary"  href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-teal section__title mb-0">
					<strong>Recognition &amp; Rewards</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-black mb-1 section__description">Perceived efforts/contributions are fairly balanced with employer-provided rewards (e.g., compensation, esteem and social rewards, job security, career opportunities).</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>

					<h4 class="card__title">I Know How I’m Doing and How To Get Even Better</h4>

					<p class="card__content">Anne Brafford (2017), <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Positive-Professionals-Chapter-5-1.pdf" target="_blank"><u>I Know How I’m Doing and How To Get Even Better</u></a>, Chapter 5 in Positive Professionals: Creating High-Performing, Profitable Firms Through The Science of Engagement (pp. 155-164). Science-backed guidance for delivering feedback and expressing gratitude to bolster well-being and avoid burnout.</p>
 

					<div class="mt-auto">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Positive-Professionals-Chapter-5-1.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>

					<h4 class="card__title">What makes us feel good about our work?</h4>

					<p class="card__content">Dan Ariely (2012). <a href="https://www.ted.com/talks/dan_ariely_what_makes_us_feel_good_about_our_work" target="_blank"><u>What makes us feel good about our work?</u></a> TED Talk, 20:13 mins. Entertaining talk that reflects the importance of intrinsic rewards, including fostering a sense of meaningfulness in work.</p>

					<div class="mt-auto">
						<a href="https://www.ted.com/talks/dan_ariely_what_makes_us_feel_good_about_our_work" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-fire-alt mr-1"></i>
							Do This
						</p>
					</div>

					<h4 class="card__title">Strengths-Based Feedback Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Feedforward_2021.pdf" target="_blank"><u>Strengths-Based Feedback Activity Guide:</u></a> Provides practical guidance for supervisors on delivering strengths-based feedback.</p>

					<div class="mt-auto">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Feedforward_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Read Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-teal py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Live Webinar
				</p>
				<p class="text-white">Monday, May 17, 2021 12:00 pm ET, 60 minutes</p>

				<h4 class="text-white card__title">You Can’t Pour From An Empty Cup: Daily Mindfulness Practices for Workplace Well-Being Professionals</h4>

				<p class="text-white card__content">We’re kicking off the After Party with a focus on you. When you spend most of your day focusing on others, taking care of yourself often takes a backseat. Today’s session is an opportunity to set aside the responsibility to care for others and focus on ourselves. This session will provide an opportunity to practice a variety of mindfulness tools designed to regulate emotions, refocus attention, and return to the present moment. Many of us do not have the time to unplug for 30 minutes in the middle of the day to “find our center.” These tools are intended to be short, simple practices that can be used throughout the day to refill our cups as we pour out to others.</p>

				<p class="text-white card__content"><strong>Speaker:</strong> Jordan Hamilton of <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Jordan-Hamilton-Bio.pdf" class="text-white" target="_blank"><u>Jordan Hamilton, M.A.</u></a>, is a former collegiate and professional basketball player, is an executive coach, leadership and team work consultant, and mindfulness trainer. Watch Jordan Hamilton’s short introduction to this session <a class="text-white" href="https://www.youtube.com/watch?v=XWdplmlXnog" target="_blank"><u>here</u></a>.</p>

				<div class="mt-auto">
					<a href="https://us02web.zoom.us/meeting/register/tZwoduChqT4pH92ROugqA531y_H9wcrRkwUs" target="_blank" class="btn btn--section btn-primary text-white bg-green">
						Register Now
					</a>
				</div>


			</div>
			<div class="col-12 col-lg-6 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Live Webinar
				</p>
				<p class="text-white">Monday, May 17, 2021 1:30 pm ET, 60 minutes</p>

				<h4 class="text-white card__title">Well-Being, Inclusion, and Belonging: Breaking Down Silos and Integrating DEI and Well-Being Initiatives</h4> 

				<p class="text-white card__content">The legal profession has placed a high priority on both DEI and workplace well-being--which are highly-interrelated. Whether work cultures support diverse legal professionals’ well-being and ability to be their best will significantly influence whether they stay, advance, and achieve their potential. But too often DEI and well-being efforts are siloed. This panel  will provide new ideas for bridging the gap between well-being and DEI programs to increase effectiveness of this important work.</p>

				<p class="text-white card__content"><strong>Moderator:</strong> This panel will be moderated by Denise Robinson, a former practicing lawyer and founder of a diversity consulting firm called <a href="https://www.thestillcenter.com/about" class="text-white" target="_blank"><u>The Still Center.</u></a></p>


				<p class="text-white card__content">
					<strong>Panelists:</strong><br/>
					<a href="https://www.mintz.com/our-people/laureen-m-cappello" target="_blank" class="text-white"><u><strong>Laurie Cappello</strong></u></a>, Director of Well-Being at Mintz<br/>
					<a href="https://www.mintz.com/our-people/narges-m-kakalia" target="_blank" class="text-white"><u><strong>Narges Kakalia</strong></u></a>, Director of Diversity, Equity and Inclusion at Mintz<br/>
					<a href="https://www.dwt.com/people/z/zakir-yusuf" target="_blank" class="text-white"><u><strong>Yusuf Z. Zakir</strong></u></a>, Chief Diversity, Equity, and Inclusion Officer, Davis Wright Tremaine LLP<br/>
					<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/05/Adamenko-Bio-AP.pdf" target="_blank" class="text-white"><u><strong>Katherine Adamenko</strong></u></a>, Manager of Well-Being, Ropes &amp; Gray<br/>
					<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/05/Kia-Scipio-Bio-AP.pdf" target="_blank" class="text-white"><u><strong>Kia Scipio</strong></u></a>, Director of Diversity, Equity and Inclusion, Ropes &amp; Gray
				</p>
				
				<div class="mt-auto">
					<a href="https://us02web.zoom.us/meeting/register/tZYsf-2srjssHd1SQXQqQdvjT-Yx3z0mMTeY" target="_blank" class="btn btn--section btn-primary text-white bg-green">
						Register Now
					</a>
				</div>

			</div>
		</div>
	</div>
</section>



<section class="bg-section-alt py-4" id="tues">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-green py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>TUESDAY: May 18, 2021</strong></p>
				</div>
			</div>
			<div class="col-auto ml-auto">
				<a class="text-gray-lt btn--secondary"  href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-teal section__title mb-0">
					<strong>Balance</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-black mb-1 section__description">Our culture supports members' ability to maintain good health and functioning while feeling fully engaged in and satisfied with their contributions to their work and families and themselves without perceiving too much conflict among those roles.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>

					<h4 class="card__title">Supervisor Work/Life Training Gets Results.</h4>

					<p class="card__content">Ellen Ernst Kossek & Leslie B. Hammer (2008). <a href="https://hbr.org/2008/11/supervisor-worklife-training-gets-results" target="_blank"><u>Supervisor Work/Life Training Gets Results.</u></a> Harvard Business Review. Teaching managers to be more supportive of their direct reports’ work/life issues can be a simple and effective route to improving employee health and satisfaction.</p>
 

					<div class="mt-auto">
						<a href="https://hbr.org/2008/11/supervisor-worklife-training-gets-results" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>

					<h4 class="card__title">How to Gain Control of Your Free Time.</h4>

					<p class="card__content">Laura Vanderkam (2016). <a href="https://www.ted.com/talks/laura_vanderkam_how_to_gain_control_of_your_free_time?language=en#t-35092" target="_blank"><u>How to Gain Control of Your Free Time.</u></a> TED Talk, 11:06 mins. Time management expert Laura Vanderkam offers practical strategies to help find more time for what matters to us, so we can “build the lives we want in the time we’ve got.”</p>

					<div class="mt-auto">
						<a href="https://www.ted.com/talks/laura_vanderkam_how_to_gain_control_of_your_free_time?language=en#t-35092" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
							Watch Now
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Do This
						</p>
					</div>

					<h4 class="card__title">Aligning With Your Values Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Values_Spiritual.pdf" target="_blankf"><u>Aligning With Your Values Activity Guide</u></a> explains individual and team activities to identify one’s core values and ways to align those values with one’s work and personal life.</p>

					<div class="mt-auto">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Values_Spiritual.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
							Read Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-green-dark-alt py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-9 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Live Webinar
				</p>
				<p class="text-white">Tuesday, May 18, 2021 1:00 pm ET, 60 minutes</p>

				<h4 class="text-white card__title">Practical Advice For Curbing The Work-Life Conflict Crisis In Your Firm</h4>

				<p class="text-white card__content"><strong>Description:</strong> Work-life juggling always is a challenge in the legal profession but problems have sky-rocketed during the COVID pandemic. Much research (including in the legal profession) has found that employees who experience conflict between their work and family/personal lives have increased risk of burnout; deteriorating physical and mental health; and declining job performance, attitudes, and commitment. Commentators are predicting wide-spread exits in the legal profession (especially among associates and working mothers) if action isn’t taken soon. In this session, Dr. Leslie Hammer will offer practical advice and resources for organizations to address these challenges. Dr. Hammer is a leading expert on the health consequences of work-family conflict and how organizations can curb those effects by offering supportive supervision. She will offer insights from her extensive experience training supervisors to improve team communication, enhance team effectiveness, and reduce stress and work-family conflict. </p>

				<p class="text-white card__content"><strong>Speaker:</strong> <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Hammer-Bio-AP.pdf" class="text-white" target="_blank"><u>Dr. Leslie Hammer</u></a> is a Professor in the Oregon Institute of Occupational Health Sciences at Oregon Health & Science University. She also is Co-Director of the Oregon Healthy Workforce Center, one of six Total Worker Health&reg; centers of excellence funded by the National Institute for Occupational Safety and Health (NIOSH). She is a leading expert on the health effects of supportive supervision at work, and on the health consequences of work-family conflict. She has extensive experience in designing, implementing, and evaluating supervisor training. Her research focuses on ways in which organizations can help reduce work and family stress and improve positive spillover into nonwork life by facilitating both formal and informal workplace supports.</p>

				<p class="text-white card__content">Watch Dr. Leslie Hammer’s short introduction to this session <a class="text-white" href="https://www.youtube.com/watch?v=UWobtDMUdVI" target="_blank"><u>here</u></a>.</p>


				<div class="mt-auto">
					<a href="https://us02web.zoom.us/meeting/register/tZEsfumqrD8iGNIuhGlTigRAcmI3Xvln9qJ3" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
						Register Now
					</a>
				</div>


			</div>
		</div>
	</div>
</section>



<section class="bg-section py-4" id="wed">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-teal py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>WEDNESDAY: May 19, 2021</strong></p>
				</div>
			</div>
			<div class="col-auto ml-auto">
				<a class="text-gray-lt btn--secondary"  href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-teal section__title mb-0">
					<strong>Effective Leadership</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-black mb-1 section__description">Our leaders positively impact organizational members’ well-being through their leadership style, creation of a psychologically healthy work culture, management of mental health matters in the workplace, and support for workplace well-being programs.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>

					<h4 class="card__title">3 Ways to Motivate Your Team Through an Extended Crisis</h4>

					<p class="card__content">Anne Brafford & Richard Ryan (2020), <a href="https://hbr.org/2020/09/3-ways-to-motivate-your-team-through-an-extended-crisis?registration=success" target="_blank"><u>3 Ways to Motivate Your Team Through an Extended Crisis</u></a>. Harvard Business Review. Brief article with tips based on motivational psychology for bolstering internal motivation by supporting the experience of connection, competence, and autonomy.</p>
 

					<div class="mt-auto">
						<a href="https://hbr.org/2020/09/3-ways-to-motivate-your-team-through-an-extended-crisis?registration=success" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>

					<h4 class="card__title">Servant Leadership: How to Lead With The Heart</h4>

					<p class="card__content">Liz Theophille (2020). <a href="https://www.youtube.com/watch?v=vZ0gave2WJc" target="_blank"><u>Servant Leadership: How to Lead With The Heart</u></a> TEDx, 14:00 mins. Theophille, a Senior IT leader with a multicultural international experience in large companies, talks about how she applies leading with the heart and servant leadership in her daily work with some concrete examples.</p>

					<div class="mt-auto">
						<a href="https://www.youtube.com/watch?v=vZ0gave2WJc" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-fire-alt mr-1"></i>
							Do This
						</p>
					</div>

					<h4 class="card__title">Positive Leadership Development Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Leadership_2021.pdf" target="_blank"><u>Positive Leadership Development Activity Guide</u></a>: Effective leadership is a key contributor to workplace well-being. This Guide provides multiple activities for starting down the path of leader development.</p>

					<div class="mt-auto">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Leadership_2021.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Read Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-teal py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Live Webinar
				</p>
				<p class="text-white">Wednesday, May 19, 2021 12:00 pm ET, 60 minutes</p>

				<h4 class="text-white card__title">The <a href="https://www.mindfulbusinesscharter.com/" class="text-white" target="_blank"><u>Mindful Business Charter</u></a>: Committing To Well-Being in the Attorney-Client Relationship</h4>

				<p class="text-white card__content">The attorney-client relationship can significantly impact well-being on both sides of the relationship. Making real progress on lawyer well-being will be difficult unless this relationship becomes a focal point. Join us for a panel discussion of how Signatories to the Mindful Business Charter carry out their commitment to support well-being in attorney-client relationships on a daily basis.</p>

				<p class="text-white card__content">
					<strong>Moderator:</strong><br/>
					<strong>Richard Martin</strong>, Director of Mental Health & Well-Being at Byrne Dean in London. Email: <a  class="text-white" href="mailto:richard.martin@byrnedean.com"><u>richard.martin@byrnedean.com</u></a><br/>
					<strong>Panelists:</strong><br/>
					<strong>Adam Farlow</strong>, Partner at Baker & McKenzie LLP<br/>
					<strong>Jonathan Hoey</strong>, Partner, Head of Banking & Financial Services Litigation at TLT LLP<br/>
					<strong>LaChanté Robertson</strong>, Vice President Documentation, Barclays Capital Inc.<br/>
					<strong>Juli Smith</strong>, General Counsel, Barclays Capital Inc.<br/>

				</p>

				<p class="text-white card__content">Watch a short introduction of the Mindful Business Charter <a href="https://www.youtube.com/watch?v=cvxtod2_xW4&t=22s" class="text-white" target="_blank"><u>here</u></a> and download introductory slides <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Mindful-Bus-Charter_Intro.pdf" class="text-white" target="_blank"><u>here</u></a>.</p>

				<div class="mt-auto">
					<a href="https://us02web.zoom.us/meeting/register/tZwpfu2vpj8qHtPCYBrLEZg4IcO9Ql3O7FHK" target="_blank" class="btn btn--section btn-primary text-white bg-green">
						Register Now
					</a>
				</div>


			</div>
			<div class="col-12 col-lg-6 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Live Webinar
				</p>
				<p class="text-white">Wednesday, May 19, 2021 3:00 pm ET, 90 minutes</p>

				<h4 class="text-white card__title">Building Workplace Well-Being Programs: Key Success Factors (Panel)</h4> 

				<p class="text-white card__content">Law firms recognized for their progress and innovation on their workplace well-being programs will provide insights about what they believe are key factors for success. Download the session materials here: 1) <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/05/Well-Being-Firm-Profiles_4-2021.pdf" target="_blank" class="text-white"><u>What’s Working Well in Law Firm Well-Being Programs?</u></a> and 2) <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/05/Aspire-Checklists-With-Infographic.pdf" target="_blank" class="text-white"><u>The Workplace Well-Being Practices Review Checklists.</u></a></p>

				<p class="text-white card__content">
					<strong>Moderator:</strong><br/>
					<strong>Gretchen Rose</strong>, Director Human Resources, Cozen O'Connor<br/>
					
					<strong>Panelists:</strong><br/>
					<strong>Mary Ellen Connerty</strong>, Director, Diversity & Engagement, O’Melveny & Myers (#1 on the
					<a href="https://www.vault.com/best-companies-to-work-for/law/best-law-firms-to-work-for/wellness" target="_blank" class="text-white"><u>Vault.com Best Law Firm for Wellness</u></a> rankings)<br/>
					
					<strong>Karen Barry</strong>, Wellness Ambassador, Orrick Herrington & Sutcliffe (#2 on the Vault.com Wellness rankings)<br/>

					<strong>Hannah Fabrikant</strong>, Director of Professional Development, McDermott Will & Emery (#3 on the Vault.com Wellness rankings)<br/>

					<strong>Nicole Lark</strong>, Senior Director, Compensation & Benefits, Covington & Burling (engaging in extensive analysis and development after recently signing the ABA Well-Being Pledge)
				</p>
				


								<div class="mt-auto">
					<a href="https://us02web.zoom.us/meeting/register/tZ0pc--sqj4iGdUmlBC_FCD3l3e2qyHsT5By" target="_blank" class="btn btn--section btn-primary text-white bg-green">
						Register Now
					</a>
				</div>


			</div>

		</div>
	</div>
</section>



<section class="bg-section-alt py-4" id="thurs">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-green py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>THURSDAY: May 20, 2021</strong></p>
				</div>
			</div>
			<div class="col-auto ml-auto">
				<a class="text-gray-lt btn--secondary"  href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-teal section__title mb-0">
					<strong>Inclusion</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-black mb-1 section__description">Our organizational members feel supported and valued for their unique, individual traits and talents; feel a sense of belonging; and have access to and feel fairly treated by the organization’s structures and processes.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>

					<h4 class="card__title">How the Human Brain Can Derail or Bolster DEI</h4>

					<p class="card__content">Due Quach (2021). <a href="https://www.mindfulleader.org/blog/51483-how-the-human-brain-can-derail-or?utm_medium=email&utm_campaign=965774-how-the-human-brain-can-derail-or&utm_source=lists%2F76291-Mindful-Leader-Weekly-Our-latest&simplero_object_id=su_jCmXPLfqspWqyAHofmKjhP62" target="_blank"><u>How the Human Brain Can Derail or Bolster DEI</u></a>. Mindful Leader. What if the Achilles heel of DEI is actually the human brain? The article explains how understanding the human brain can explain why DEI efforts often stumble and more importantly, how to make them more effective.</p>

					<div class="mt-auto">
						<a href="https://www.mindfulleader.org/blog/51483-how-the-human-brain-can-derail-or?utm_medium=email&utm_campaign=965774-how-the-human-brain-can-derail-or&utm_source=lists%2F76291-Mindful-Leader-Weekly-Our-latest&simplero_object_id=su_jCmXPLfqspWqyAHofmKjhP62" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>

					<h4 class="card__title">Creating the Conditions for Belonging</h4>

					<p class="card__content">john a. powell (2021). <a href="https://www.youtube.com/watch?v=IpxT-8Qodnw" target="_blank"><u>Creating the Conditions for Belonging and Breathing in a Toxic Environment.</u></a> Bioneers, 17:19. The director of the Othering and Belonging Institute at UC Berkeley illuminates how individuals and organizations can transform and heal our impulses to “other” by cultivating new ways of thinking and building structures conducive to belonging.</p>

					<div class="mt-auto">
						<a href="https://www.youtube.com/watch?v=IpxT-8Qodnw" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
							Watch Now
						</a>
					</div>

				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-fire-alt mr-1"></i>
							Do This
						</p>
					</div>

					<h4 class="card__title">Things In Common Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Things-In-Common_Inclusion.pdf"><u>Connecting Over Things In Common Activity Guide.</u></a> We often share more in common with others than what meets the eye. Getting beyond the surface attributes and gaining a better understanding of the experiences, identities, and other aspects of our lives that we share with our colleagues can help us bridge differences and work together more effectively.</p>

					<div class="mt-auto">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Things-In-Common_Inclusion.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
							Read Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-green-dark-alt py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-9 ">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Live Webinar
				</p>
				<p class="text-white">Thursday, May 20, 2021 1:00 pm ET, 90 minutes</p>

				<h4 class="text-white card__title">Using Design Thinking to Clarify Team Work Expectations And Support Work-Life Management</h4>


				<p class="text-white card__content"><strong>Description:</strong> Let’s face it: Teamwork can be hard. But it doesn’t have to be! In this session, David and Mary Sherwin will walk us through a series of hands-on, practical exercises that help teams get aligned on how they want to work together from the start of projects. They’ll cover how to set shared communication norms, get real about working hours, and unpack assumptions about how they can best support each other when things get tough. If you’ve ever asked yourself “How do we actually talk about how we want to work together?”, this is the session for you. It’ll help you enable your teams to set their own rules in a way that’s clear, direct, and useful.</p>

				<p class="text-white card__content"><strong>Speaker:</strong> <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Sherwins-Bio_Ap.pdf" target="_blank" class="text-white"><u>David and Mary Sherwin</u></a> are design educators and practitioners focusing on teamwork and process. Their most recent book is <a href="https://www.amazon.com/Turning-People-into-Teams-Routines/dp/1523095741/ref=sxts_sxwds-bia-wc-rsf-lq2a1_0?cv_ct_cx=Turning+people+into+teams&dchild=1&keywords=Turning+people+into+teams&pd_rd_i=1523095741&pd_rd_r=83ee17f4-e261-408f-a3a1-7d1c47b49ebc&pd_rd_w=giSXI&pd_rd_wg=QPLKR&pf_rd_p=52f9c563-bb87-44f4-9d9d-e1c03402d90f&pf_rd_r=4EGVC0466WDVP2XZZH5A&psc=1&qid=1611260383&sr=1-1-d3e58e83-6458-471c-a87e-175495b96a10" target="_blank" class="text-white"><u>Turning People Into Teams: Rituals & Routines That Redesign How We Work.</u></a> A 30% discount on this book and the related Teams Toolkit is <a href="https://www.bkconnection.com/specials/teams30" target="_blank" target="_blank" class="text-white"><u>available here</u></a> through July 31, 2021.</p>

				<div class="mt-auto">
					<a href="https://us02web.zoom.us/meeting/register/tZYtceiqqzwtGNajYLWakt0fxLr3ioGPFtrV" target="_blank" class="btn btn--section btn-primary text-white bg-teal">
						Register Now
					</a>
				</div>

			</div>
		</div>
	</div>
</section>




<section class="bg-section py-4" id="fri">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-teal py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>FRIDAY: May 21, 2021</strong></p>
				</div>
			</div>
			<div class="col-auto ml-auto">
				<a class="text-gray-lt btn--secondary"  href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-teal section__title mb-0">
					<strong>Culture of Trust,<br/>Fairness &amp; Transparency</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-black mb-1 section__description">Our work environment is characterized by the shared values of trust, honesty, transparency, and fairness.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Read This
						</p>
					</div>

					<h4 class="card__title">Psychological safety at work improves productivity–here are 4 ways to get it, according to a Harvard expert.</h4>

					<p class="card__content">Cory Stieg (2020). <a href="https://www.cnbc.com/2020/10/05/why-psychological-safety-is-important-at-work-and-how-to-create-it.html" target="_blank"><u>Psychological safety at work improves productivity–here are 4 ways to get it, according to a Harvard expert.</u></a> CNBC.com.</p>
 

					<div class="mt-auto">
						<a href="https://www.cnbc.com/2020/10/05/why-psychological-safety-is-important-at-work-and-how-to-create-it.html" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Read Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>

					<h4 class="card__title">Culture, Candor, &amp; More.</h4>

					<p class="card__content">Kim Scott, <a href="https://www.youtube.com/watch?v=yC4gXs_6wvs" target="_blank"><u>Culture, Candor, &amp; More.</u></a> TEDx, 31:25 mins. Without candid conversations and feedback, we can’t grow professionally or interpersonally, and we’ll be less effective as leaders and teammates. But there’s far too little direct honest, communication at work— often due to fear of hurting others’ feelings. Kim Scot discusses skills for showing that we care while also speaking directly.</p>

					<div class="mt-auto">
						<a href="https://www.youtube.com/watch?v=yC4gXs_6wvs" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-fire-alt mr-1"></i>
							Do This
						</p>
					</div>

					<h4 class="card__title">Positive Leadership Panel Activity Guide</h4>

					<p class="card__content"><a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Leadership-Panel_Friday.pdf" target="_blank"><u>Positive Leadership Panel Activity Guide</u></a>: Guidance for organizing a panel of top leaders addressing issues related to trust, fairness, and transparency.</p>

					<div class="mt-auto">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/03/Leadership-Panel_Friday.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Read Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-teal py-4">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-12 col-lg-9">
				<p class="card__overline pb-3 text-uppercase mb-3 text-white">
					<i class="fa fa-tv mr-1"></i>
					Live Webinar
				</p>
				<p class="text-white">Friday, May 21, 2021 1:00 pm ET, 60 minutes</p>

				<h4 class="text-white card__title">Reduce Risk and Boost Well-Being By Building Trust Within Your Firm</h4>

				<p class="text-white card__content"><strong>Speaker:</strong> <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Davis_Bio-for-Introductions-law-v5.pdf" target="_blank" class="text-white"><u>Paula Davis</u></a>, JD, Founder of the <a href="https://stressandresilience.com/" target="_blank" class="text-white"><u>Stress &amp; Resilience Institute</u></a>, author of new book <a href="https://www.amazon.com/Beating-Burnout-Work-Well-Being-Resilience-ebook/dp/B08QW1PVK4/" target="_blank" class="text-white"><u>Beating Burnout At Work</u></a> and <a href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Schank-Bio_AP.pdf" class="text-white" target="_blank"><u>Tim Schank</u></a>, JD, Senior Loss Prevention Counsel at ALAS.</p>

				<p class="text-white card__content"><strong>Description:</strong> Mistakes are a common cause of malpractice claims and often are a culmination of many factors. If lawyers and other team members are afraid to ask questions or disclose errors because of unreasonable expectations, small problems can snowball into very big ones. A key ingredient to improving team culture is “psychological safety,” which involves creating an environment where all personnel are comfortable speaking up, even under adverse circumstances. This is a well-studied concept that is linked not only to speaking up about mistakes or areas of weakness but also to well-being, engagement, and the experience of inclusion.</p>

				<p class="text-white card__content">Learn more about the importance of psychological safety in law firms in this <a class="text-white" href="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Positive-Professionals_Psychological-Safety.pdf" target="_blank"><u>excerpt</u></a> from Anne Brafford’s ABA-published book <a target="_blank" class="text-white" href="https://www.amazon.com/Positive-Professionals-High-Performing-Profitable-Engagement/dp/1641050403/ref=sr_1_1?dchild=1&keywords=Anne+Brafford+Positive+Professionals&qid=1619664822&sr=8-1"><u>Positive Professionals: Creating High-Performing Profitable Firms Through the Science of Engagement</u>.</a> To learn more about how psychological safety contributes to workplace inclusion, watch Katherine Manning’s video, The <a href="https://www.youtube.com/watch?v=Y5HjFyH8Oew&t=11s" target="_blank" class="text-white" ><u>Importance of Psychological Safety to Inclusion</u></a>. Katherine is a lawyer and author of the new book, The Empathetic Workplace.</p>


				<div class="mt-auto">
					<a href="https://us02web.zoom.us/meeting/register/tZMtdeGrrTwoGNELvkMCqSd4gG_o7oYlAjAA" target="_blank" class="btn btn--section btn-primary text-white bg-green">
						Register Now
					</a>
				</div>

			</div>
		</div>
	</div>
</section>



<section class="bg-section py-4" id="demand">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-auto">
				<div class="section__overline bg-teal py-1 pr-4 mb-3 position-relative">
					<p class="text-white m-0 p-0"><strong>ON DEMAND</strong></p>
				</div>
			</div>
			<div class="col-auto ml-auto">
				<a class="text-gray-lt btn--secondary"  href="https://lawyerwellbeing.net/well-being-week-resources/">More Resources &gt;</a>
			</div>
		</div>
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="text-teal section__title mb-0">
					<strong>Well-Being Lessons From<br/>The Medical Profession</strong><br/>
				</h2>
			</div>
			<div class="col-12 col-lg mt-auto">
				<p class="text-black mb-1 section__description">The medical profession's decades-long study of physician well-being and burnout can provide insights for the legal profession about building their wellbeing programs.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-book mr-1"></i>
							Watch This
						</p>
					</div>

					<h4 class="card__title">Part 1: Beyond Burnout: Engagement, Leadership, & Meaningful Work.</h4>

					<p class="card__content">Dr. Guldner is an emergency room physician and Program Director of Graduate Medical Education at Riverside Community Hospital, which is part of a network of hospitals owned by HCA Healthcare. He has created an award-winning program to support resident well-being at RCH. Over the last several years, he also has been involved in a research study with Anne Brafford at Claremont Graduate University focused on resident depression, burnout, and engagement. In this video, Dr. Guldner talks about the resident well-being program, study results, and future plans for resident-well-being program development.</p>
 

					<div class="mt-auto">
						<a href="https://www.youtube.com/watch?v=VgKWQyj_w7Y" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-eye mr-1"></i>
							Watch This
						</p>
					</div>

					<h4 class="card__title">Part 2: Beyond Burnout: Team Leadership Strategies to Support Flourishing </h4>

					<p class="card__content">Scott Rigby, PhD is a behavioral scientist specializing in self-determination theory. In this video, he talks about need-supportive leadership training based on self-determination theory that will be implemented as part of Riverside Community Hospital’s resident well-being program coordinated by Dr. Greg Guldner.</p>

					<div class="mt-auto">
						<a href="https://www.youtube.com/watch?v=2Vy1gNv6-48" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Watch Now
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card h-100 p-4">
					<div>
						<p class="card__overline pb-3 text-uppercase mb-3">
							<i class="fa fa-fire-alt mr-1"></i>
							Read This
						</p>
					</div>

					<h4 class="card__title">Effective Leaders: The Lynchpins of Workplace Well-Being.</h4>

					<p class="card__content">Anne Brafford provides tips for law firm partners and other supervisors for supporting team members’ well-being. The recommended strategies are based on self-determination theory—which will provide the foundation for leader training of supervising physicians as part of HCA's resident well-being program coordinated by Dr. Greg Guldner.</p>

					<div class="mt-auto">
						<a href="https://lawyerwellbeing.net/wp-content/uploads/2021/05/SDT-Leadership.pdf" target="_blank" class="btn btn--section btn-primary text-white bg-green">
							Read Now
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