<?php 

add_action( 'wp_ajax_photo_upload', 'photoUpload', 10); 
add_action( 'wp_ajax_nopriv_photo_upload', 'photoUpload', 10);

function photoUpload() {

  if ($_FILES) {
    foreach ($_FILES as $file => $array) {
      if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
          return "upload error : " . $_FILES[$file]['error'];
      }
      $attach_id = media_handle_upload( $file, 0 );
    }   
  }
  if ($attach_id > 0){
    $field_value = get_field('photo_wall_gallery',$_POST['post_id']);
    $field_value[] = $attach_id;
    update_field( 'photo_wall_gallery', $field_value, $_POST['post_id'] );
    $data = wp_get_attachment_metadata( $attach_id);

    if($_POST['company']) {
      $data['image_meta']['upload_company'] = $_POST['company'];
    }

    if($_POST['description'] && $_POST['name']) {
      $data['image_meta']['title'] = $_POST['description'];
      $data['image_meta']['upload_name'] = $_POST['name'];
      wp_update_attachment_metadata( $attach_id, $data );
    }
    
    echo get_template_part( 'template-parts/wbil', 'photo-card', ['image_id' => $attach_id]); 
  }
  die;
}
?>