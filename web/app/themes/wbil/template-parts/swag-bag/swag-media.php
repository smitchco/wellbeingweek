
<?php 
  $cols = 2; 
  if ( $args['i'] ) {
    $i = $args['i'];
  }
  if ( $args['cols'] ) {
    $cols = $args['cols'];
  }
?>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-<?php echo $cols; ?> mb-4">
  <img src="https://placehold.co/200x200?text=Media+Item" class="img--full"/>
</div>