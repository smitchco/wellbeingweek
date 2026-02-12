<?php

/**
 * Template Name: Conference Keynote
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

	get_header();
	get_template_part( 'template-parts/conference', 'head'); 
?>
<main class="main container-fluid container--max pt-5">

  <section class="py-md-5">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="title"><?php the_title(); ?></h1>

        <?php the_content(); ?>

      </div>
      <div class="col-12 col-lg-4 order-1 order-lg-2">
        <?php 
          $img_src = get_the_post_thumbnail_url($post->ID, 'full'); 
        ?>
        <img src="<?php echo $img_src; ?>" alt="Laurie Santos" class="img-fluid">
    </div>

  </section>
</main>



<?php 
	get_footer(); 
?>
