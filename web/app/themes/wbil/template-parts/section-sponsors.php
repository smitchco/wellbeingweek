<?php if(have_rows('sponsor_section')): 

$page_id = isset($args['page_id']) ? $args['page_id'] : ''; 

?>
    <h2 class="section-title text-center my-5">Thank You To Our Sponsors</h2>
<?php
         while( have_rows('sponsor_section') ):
          the_row();
    ?>
  <section class="section__sponsors py-5">
    <div class="container container-fluid container--max pb-5 mb-2">
      <?php if(get_sub_field('sponsor_section_title')) { ?>
        <?php if($page_id == 7162) { ?>
          <h4 class="font-condensed text-uppercase mb-5 text-purple">
        <?php 
        } else { ?>
          <h4 class="card__title text-center mb-2">
        <?php } ?>
        <strong><?php echo get_sub_field('sponsor_section_title'); ?></strong>
      </h4>
      <?php } ?>
      <div class="row justify-content-center">
        <?php	
          $list_format = get_sub_field('list_format');

          while( have_rows('sponsors') ):
            the_row();

            if(!$list_format):
        ?>

          <div class="col-12 col-sm-6 col-lg-4 p-2 text-center my-4 d-flex">
            <a href="<?php echo get_sub_field('sponsor_url'); ?>" target="_blank" class="d-block m-auto">
              <img src="<?php echo get_sub_field('sponsor_logo'); ?>" alt="<?php echo get_sub_field('sponsor_name'); ?>"class="img-fluid" />
            </a>
          </div>
          
          <?php else: ?>

            <div class="col-12 text-center">
              <p><?php echo get_sub_field('sponsor_name'); ?></p>
            </div>

          <?php 
            endif; 
          endwhile; 
          ?>
      </div>
    </div>
  </section>
<?php 
  endwhile; 
  endif; ?>