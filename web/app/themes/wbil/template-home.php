<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
  * Template Name: Homepage

 * @since   1.0.0
 *
 * @package The7\Templates
 */

defined( 'ABSPATH' ) || exit;

$config = presscore_config();
$config->set( 'template', 'page' );

get_header();
?>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/home.css' ?>' type='text/css' media='all' />

<script>

	  jQuery('body').on('click', '.btn-anchor', function(e){
    e.preventDefault(); 
    
    jQuery("html, body").animate({ scrollTop: jQuery(jQuery(this).attr("href")).offset().top - 120 }, 500);

  });

</script>


<?php if ( presscore_is_content_visible() ) : ?>

	<div id="content" class="content" role="main">

		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				do_action( 'presscore_before_loop' );
				the_content();
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'the7mk2' ),
						'after'  => '</div>',
					)
				);
				the7_display_post_share_buttons( 'page' );
				comments_template( '', true );
			}
		} else {
			get_template_part( 'no-results', 'page' );
		}
		?>

	</div><!-- #content -->

	<?php do_action( 'presscore_after_content' ); ?>

<?php endif; ?>




<section class="bg-teal py-5" id="mon">
	<div class="container container-fluid">
		<div class="row mt-3 mb-4">
			<div class="col-12 col-lg-auto">
				<h2 class="section__title text-white mb-0">
					<strong>The Evidence is in on Lawyer Well-Being</strong><br/>
					<span>We can no longer ignore our profession’s well-being problem.</span>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col--20p col-sm-6 p-3 p-lg-1">
				<div class="card text-center h-100 p-2 d-block">
					<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/01/Evidence-is-in_pie-charts-300x300.png" class="img-fluid"/>
					
					<h4 class="card__title">ALCOHOL</h4>

					<p>21-36% qualify as problem drinkers. Higher for men; under age 30; and private practice, especially solo practitioners.</p>
				</div>
			</div>


			<div class="col--20p col-sm-6 p-3 p-lg-1">
				<div class="card text-center h-100 p-2 d-block">
					<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/01/Evidence-is-in_pie-charts2-300x300.png" class="img-fluid"/>
					
					<h4 class="card__title">DEPRESSION</h4>

					<p>28% report mild or higher depression symptoms. Highest for men and solo practitioners.</p>
				</div>
			</div>

			<div class="col--20p col-sm-6 p-3 p-lg-1">
				<div class="card text-center h-100 p-2 d-block">
					<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/01/Evidence-is-in_pie-charts3-300x300.png" class="img-fluid"/>
					
					<h4 class="card__title">STRESS</h4>

					<p>23% report mild or higher stress symptoms. Highest for women and solo practitioners.</p>
				</div>
			</div>

			<div class="col--20p col-sm-6 p-3 p-lg-1">
				<div class="card text-center h-100 p-2 d-block">
					<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/01/Evidence-is-in_pie-charts4-300x300.png" class="img-fluid"/>
					
					<h4 class="card__title">ANXIETY</h4>

					<p>19% report mild or higher anxiety symptoms. Highest for women and solo practitioners.</p>
				</div>
			</div>

			<div class="col--20p col-sm-6 p-3 p-lg-1">
				<div class="card text-center h-100 p-2 d-block">
					<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/01/Evidence-is-in_pie-charts5-300x300.png" class="img-fluid"/>
					
					<h4 class="card__title">SUICIDE</h4>

					<p>Ranked #8 in a study of suicide by occupation. Rate is 1.33 times the national norm.</p>
				</div>
			</div>
		</div>

		<div class="row mt-3 mb-4">
			<div class="col-12">
				<h5 class="mb-2 mt-4 text-white"><strong>This Affects All Of Us</strong></h5>
				<p class="text-white">Too many lawyers are not thriving. A significant number struggle with mental health and alcohol use disorders. Many others, while not dealing with a diagnosable illness, still are not fully well. The result is that many lawyers are unable to be their best for their clients, colleagues, communities, and families.</p>
				
			</div>
		</div>
	</div>
</section>



<section class="py-5">



	<div class="container container-fluid container--max">

		<div class="row justify-content-center">

			<div class="col-12 col-md-6 col-lg-3 position-relative d-flex">
				<div class="my-auto">
					<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/well-being-week_LOGO-2021-Horizontal_EB.jpg" class="img-fluid"/>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-8 ml-lg-auto mt-4 my-md-auto">
				<h2 class="hero__title text-teal"><strong>2021 Well-Being Week In Law</strong></h2>

				<p>Well-being is an institution-wide responsibility. When our professional and organizational cultures support our well-being, we are better able to make good choices that allow us to thrive and be our best for our clients, colleagues, organizations, families, and communities.</p>
				<p class="mb-0">
						<a href="/lawyer-well-being-week/" class="btn btn--section btn-primary bg-teal mb-2">
							Well-Being Week In Law Information
						</a>

						<a href="/after-party" class="btn btn--section btn-primary bg-teal mb-2">
							After Party Information
						</a></p>
			</div>
		</div>
	</div>
</section>


<section>

	



				<p class="text-uppercase mb-0 text-center pt-5 mt-3">Institute For Well-Being In Law</p>
				<h4 class="card__title text-center mb-2">Inaugural Founding Champions:</h4>


	<div class="container container-fluid container--max mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
		<div class="row justify-content-center">


			<div class="col--20p px-3 mb-2">
				<div class="card px-4 py-1 h-100">
					<a href="https://www.crowell.com/" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/crowell-morning.png" class="img-fluid" alt="Crowell Moring"/>
					</a>
				</div>
			</div>


			<div class="col--20p px-3 mb-2">
				<div class="card px-4 py-1 h-100">
					<a href="https://katten.com/" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/katten-logo.jpg" class="img-fluid" alt="Katten"/>
					</a>
				</div>
			</div>


			<div class="col--20p px-3 mb-2">
				<div class="card px-4 py-1 h-100">
					<a href="https://www.lw.com/" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/LW-LLP-Red_Final.png" class="img-fluid" alt="Latham & Watkins"/>
					</a>
				</div>
			</div>

			<div class="col--20p px-3 mb-2">
				<div class="card px-4 py-1 h-100">
					<a href="https://www.morganlewis.com/" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/morgan-lewis-logo.jpg" class="img-fluid" alt="Morgan Lewis"/>
					</a>
				</div>
			</div>



			<div class="col--20p px-3 mb-2">
				<div class="card px-4 py-1 h-100">
					<a href="https://www.reedsmith.com/en" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/reed-smith.png" class="img-fluid" alt="Reed Smith"/>
					</a>
				</div>
			</div>



		</div>
	</div>


				<p class="text-uppercase mb-0 text-center pt-5">Institute For Well-Being In Law</p>
				<h4 class="card__title text-center mb-2">Founding Champions:</h4>




	<div class="container container-fluid container--max pb-5 mb-2">
		<div class="row justify-content-center">
			

			<div class="col--20p px-3">
				<div class="card p-4 h-100">
					<a href="https://www.orrick.com/" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/orrick.png" class="img-fluid" alt="Orrick"/>
					</a>
				</div>
			</div>


		</div>
	</div>


</section>






<?php get_footer(); ?>
