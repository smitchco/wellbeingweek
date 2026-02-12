
<?php 
  $image_id = isset($args['image_id']) ? $args['image_id'] : null;

  if($image_id) {
?>
  
  <div class="col-12 col-lg-4 p-2">
  <div class="img__wrap h-100 d-flex justify-content-center flex-column">
    <a class="img__link" href="<?php echo wp_get_attachment_url( $image_id, 'full' ); ?>"></a>
    <img class="img__full" src="<?php echo wp_get_attachment_image_url( $image_id, 'photo_gallery' ); ?>" />
                                      
    <?php if(wp_get_attachment_metadata($image_id)['image_meta']['title']) { ?>
        <div class="img__description p-3 mt-auto">
          <p class="p-0 m-0" style="font-size: 1rem;"><?php echo wp_get_attachment_metadata( $image_id)['image_meta']['title']; ?></p>
          <?php if(wp_get_attachment_metadata($image_id)['image_meta']['upload_name']) { ?>
            <p class="p-0 m-0 font-weight-bold" style="font-size: 0.75rem;">
              <?php 
              echo wp_get_attachment_metadata( $image_id)['image_meta']['upload_name']; 
              if(wp_get_attachment_metadata( $image_id)['image_meta']['upload_company']) {
                echo '<span style="font-weight: 300;" class="px-1">|</span>' . wp_get_attachment_metadata( $image_id)['image_meta']['upload_company'];
                } 
              ?></p>
          <?php } ?>
        </div>
    <?php } ?>

  </div>
</div>

<?php } ?>