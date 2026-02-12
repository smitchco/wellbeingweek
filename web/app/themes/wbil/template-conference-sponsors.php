<?php

/**
 * Template Name: Conference Sponsors
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

	get_header();
	get_template_part( 'template-parts/conference', 'head'); 
?>

<main class="main container-fluid container--max pt-5">

  <section class="py-md-5 ">
    <div class="row">
	
      <div class="col-xl-8">
        <h1 class="title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    </div>
  </section>

<?php get_template_part( 'template-parts/section', 'sponsors'); ?>

</main>

<?php 
	get_footer(); 
?>