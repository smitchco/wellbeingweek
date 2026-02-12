<?php

/**
 * Template Name: WBIL Resources
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

							<hr/>
            </div>
          </div>
        </div>
        <div class="row">
					<div class="col">

  <?php
              if( have_rows('section') ) { 

while( have_rows('section') ) {
  
  the_row();

  $btn_color = get_sub_field('section_button_color');

?>

<section class="p-4">
  <div class="row mt-3 mb-4">

      <?php 
      if ( get_sub_field('section_type') == 'callout' ) { 
    ?>


        <div class="col-12 col-lg-6">
          <h2 class="section__title mb-3" style="color:<?php echo get_sub_field('section_text_color'); ?>!important;"><strong><?php echo get_sub_field('section_title'); ?></strong></h4>
          
          <?php if( get_sub_field('section_description') ) { ?>
              <div style="color:<?php echo get_sub_field('section_text_color'); ?>!important;">
                <?php echo get_sub_field('section_description'); ?>
              </div>
          <?php 

          }
          
          if( get_sub_field('section_button_link') ) { ?>

          <a href="<?php echo get_sub_field('section_button_link'); ?>" target="_blank" class="btn btn--section btn-primary text-white" style="background: <?php echo $btn_color; ?>">

                <?php echo get_sub_field('section_button_text'); ?>

              </a>

            <?php } ?>
        </div>
        

            <div class="col-12 col-lg-6 m-auto text-center">
              <div class="card p-4 mx-auto" style="width: 300px;">
                <img src="<?php echo get_sub_field('section_image'); ?>" class="img-fluid" style="max-width: 300px; height: auto; "/>
              </div>
            </div>


    <?php 

      }
      if ( get_sub_field('section_type') == 'video' ) { 
    ?>


        <div class="col-12 col-lg-5">
          <h2 class="section__title text-white mb-0">
            <?php echo get_sub_field('section_title'); ?>
          </h2>

          <?php if(get_sub_field('section_subtitle')) { ?>
            <p>
              <?php echo get_sub_field('section_subtitle'); ?>
            </p>
          <?php } ?>
          
          <?php if( get_sub_field('section_description') ) { ?>
              <div style="color:<?php echo get_sub_field('section_text_color'); ?>!important;">
                <?php echo get_sub_field('section_description'); ?>
              </div>
          <?php } ?>

        </div>
        <div class="col-12 col-lg-7">
          <div class="embed-container">
            <iframe src="<?php echo get_sub_field('youtube_link'); ?>" title="YouTube video player" frameborder="0"  frameborder='0' allowfullscreen></iframe>
          </div>
        </div>

    <?php 

      }
      if ( get_sub_field('section_type') == 'items' ) { 

    ?>
      <div class="col-12 col-lg">
        <h2 class="font-condensed text-uppercase" style="color:<?php echo get_sub_field('section_text_color'); ?>!important;">
            <?php echo get_sub_field('section_title'); ?>
         </h2>

         <?php if(get_sub_field('section_subtitle')) { ?>
            <p>
              <?php echo get_sub_field('section_subtitle'); ?>
            </p>
          <?php } ?>

      </div>
      <?php if( get_sub_field('section_description') ) { ?>
        <div class="col-12 col-lg mt-auto text-white">
          <p class="text-white mb-1 section__description"><?php echo get_sub_field('section_description'); ?></p>
        </div>
      <?php } ?>

    </div>
    <div class="row">
      <?php 

      if( have_rows('resource_items') ) { 

        while( have_rows('resource_items') ) {
          
          the_row();

          $size = get_sub_field('resource_size');


  if ($size == 'xs') { ?>

    <div class="col--20p px-1 mb-4">

   <?php } else if ($size == 'sm') { ?>

    <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">

  <?php } else if ($size == 'md') { ?>

    <div class="col-12 col-md-6 col-lg-4 mb-4">

  <?php } else { ?>

      <div class="col-12 col-md-6 mb-4">

  <?php } ?>
    

        <div class="card h-100 p-3">
          <div class="row h-100">
            <?php if( get_sub_field('resource_thumbnail') )  { ?>
              <div class="col-4">
              <img src="<?php echo get_sub_field('resource_thumbnail'); ?>" class="img-fluid" />

            </div>
            <div class="col-8">
            <?php } else { ?>
            <div class="col-12">
            <?php }?>
              <div class="row h-100">
                <div class="col-12">

                  <h4 class="card__title card__title--md mb-2">
                    <?php echo get_sub_field('resource_title'); ?>
                  </h4>

                  <div class="card__content">
                    <?php echo get_sub_field('resource_description'); ?>

                    <?php 

              if( get_sub_field('resource_button_type') == 'pay') { 
                
                echo do_shortcode(get_sub_field('payment_button_shortcode'));
              
              } else { 

              ?>
                
              <a href="<?php echo get_sub_field('resource_button_link'); ?>" target="_blank" class="btn btn--section btn-primary text-white" style="background: <?php echo $btn_color; ?>">

                <?php echo get_sub_field('resource_button_text'); ?>

              </a>
              <?php 

                } 

              ?>


                  </div>


                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>


      <?php
    
        } //endwhile
      } //endif
    }

      ?>

  </div>

</section>
<?php
  
} //endwhile
} //endif

?>
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