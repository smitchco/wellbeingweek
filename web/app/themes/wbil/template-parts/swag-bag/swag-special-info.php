<?php 
$cols = 3;
  if ( $args['i'] ) {
    $i = $args['i'];
  }
  if ( $args['cols'] ) {
    $cols = $args['cols'];
  }
?>
<div class="col-xl-<?php echo $cols; ?> col-lg-3 col-md-4 col-sm-6 mb-4">
  <div class="card color-gray p-3 p-lg-4">
    <div class="card--header mb-2">
      <div class="row">
        <div class="col-auto mr-auto my-auto">
          <h5 class="color-gray-xlt text-uppercase m-0 p-0">SPONSOR NAME</h5>
        </div>
        <div class="col-auto ml-auto my-auto">
          <img src="https://placehold.co/100X40?text=Sponsor+Logo"/>
        </div>
      </div>
    </div>

      <?php 
        switch ($i) {
          case 0:
            $title = 'Special Event!';
            $link ='Sign Up';
            break;
          case 1:
            $title = 'Information Article';
            $link ='Read Article';
            break;
          case 2:
            $title = 'Website';
            $link ='Visit Website';
            break;
          default:
            $title = 'Website';
            $link ='Visit Website';
          }
      ?>
    <div class="card--content">
      <h3><?php echo ucfirst($title); ?></h3>
      <img src="https://placehold.co/300x200?text=Image" class="img--full mb-2"/>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="card--footer">
      <div class="row">
        <div class="col-auto mr-auto my-auto">
          <a class="btn btn--secondary btn--sm" href=""><?php echo $link; ?></a>
        </div>
      </div>
    </div>
  </div>
</div>