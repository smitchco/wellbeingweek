<?php

/**
 * Template Name: WBIL About
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
							<h1 class="h1 pt-5">What Is Well-Being Week In Law?</h1>

							<?php the_content(); ?>
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