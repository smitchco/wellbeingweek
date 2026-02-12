<?php
	get_header();
?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/swag-bag.css' ?>' type='text/css' media='all' />

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<main class="swagbag m-0 ">
  <header class="color-white bg-green-gradient position-relative pt-5" style="overflow: hidden;">
    <div class="bg-bag"></div>
    <div class="bg-fractal" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 0;"></div>
    <div style="z-index: 2; position: relative;" class="p-5">
      <h1 class="pt-5">The IWIL Virtual Swag Bag</h1>
      <p class="m-0 p-0 font-md">Curated collection of downloadable and interactive items for legal well-being.</p>
    </div>
  </header>

  <div class="row h-100 position-static">
    <div class="col-auto">
      <nav class="nav--side p-5 m-0 h-100">
        <div style="position: sticky; top: 100px;">
          <a href="#whats-a-virtual-swag-bag">
            What's a virtual swag bag?
          </a>
          <a href="#sponsor-showcase">
            <i class="fas fa-star mr-2"></i>
            Sponsor Showcase
          </a>
          <a href="#offers-discounts">
            <i class="fas fa-tag mr-2"></i>
            Offers &amp; Discounts
          </a>
          <a href="#special-information">
            <i class="fas fa-book mr-2"></i>
            Special Information
          </a>
          <a href="#media-gallery">
            <i class="fas fa-photo-video mr-2"></i>
            Media Gallery
          </a>
        </div>
      </nav>
    </div>

    <div class="col">
  <section class="p-5 pl-0 m-0" id="whats-a-virtual-swag-bag">
    <div class="row">
      <div class="col-12 col-lg-6">
        <h2>What's a Virtual Swag Bag?</h2>
        <p class="font-md">A digital swag bag is IWIL’s curated collection of downloadable and interactive items that attendees receive before, during, and/or after a virtual event. These items are educational, promotional, and sponsored by partners and vendors.</p>
      </div>
      <div class="col-12 col-lg-6">
        <img src="https://placehold.co/320x180?text=Intro+Video" class="img--full"/>
      </div>
    </div>
  </section>

  <section class="p-5 m-0 bg-teal color-white bg-fractal" id="sponsor-showcase">
    <h2><i class="fas fa-star mr-2"></i> Sponsor Showcase</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque  quis turpis a magna placerat eleifend. Fusce sit amet nulla malesuada</p>

    <div class="row">
      <?php 
        for ($i = 0; $i < 3; $i++):
      ?>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="card color-gray p-3 p-lg-4">
          <div class="card--image mb-2 position-relative">
            <img src="https://placehold.co/310x105?text=Sponsor+Logo" class="img--full"/>
            <?php 
              switch ($i) {
                case 0:
                  $sponsor = 'Platinum';
                  break;
                case 1:
                  $sponsor = 'Gold';
                  break;
                case 2:
                  $sponsor = 'Silver';
                  break;
                default:
                  $sponsor = '';
              }
            ?>
            <div style="top: 8px; right: 8px;" class="position-absolute chip chip--<?php echo strtolower($sponsor); ?>"><?php echo $sponsor; ?> Sponsor</div>
          </div>
          <div class="card--content">
            <h3>Example Company, LLC</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque  quis turpis a magna placerat eleifend.</p>
            <a class="btn btn--secondary btn--sm" href="">Sponsor Page</a>
          </div>
        </div>
      </div>

      <?php endfor; ?>
    </div>

        <div class="row">
      <?php 
        for ($i = 0; $i < 8; $i++):
      ?>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card color-gray p-3 p-lg-4">
          <div class="card--image mb-2">
            <img src="https://placehold.co/215x80?text=Sponsor+Logo"/>
          </div>
          <div class="card--content">
            <a class="btn btn--secondary btn--sm" href="">Sponsor Page</a>
          </div>
        </div>
      </div>

      <?php endfor; ?>
    </div>
  </section>

  <section class="bg-blue color-white bg-fractal py-4 px-3 p-lg-5 m-0" id="offers-discounts">
    <h2><i class="fas fa-tag mr-2"></i> Offers &amp; Discounts</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque  quis turpis a magna placerat eleifend. Fusce sit amet nulla malesuada,  </p>

    <div class="row">
      <?php 
        for ($i = 0; $i < 6; $i++):
        	get_template_part( 'template-parts/swag-bag/swag-offers-discounts'); 
        endfor;
      ?>
    </div>

    <div class="row">
      <div class="col-auto ml-auto">
        <a href="" class="btn btn--teal btn--lg">View All Offers</a>
      </div>
    </div>
  </section>

   
  <section class="bg-green color-white bg-fractal py-4 px-3 p-lg-5 m-0" id="special-information">
    <h2><i class="fas fa-book mr-2"></i> Special Information From Our Sponsors</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque  quis turpis a magna placerat eleifend. Fusce sit amet nulla malesuada.</p>

    <div class="row">
      <?php 
        for ($i = 0; $i < 3; $i++):
          get_template_part( 'template-parts/swag-bag/swag-special-info', '', ['i' => $i] );
        endfor;
        ?>
    </div>

  </section>

 <section class="bg-teal color-white bg-fractal py-4 px-3 p-lg-5 m-0" id="media-gallery">
    <h2><i class="fas fa-photo-video mr-2"></i> Media Gallery</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque  quis turpis a magna placerat eleifend. Fusce sit amet nulla malesuada.</p>

    <div class="row">
      <?php 
        for ($i = 0; $i < 12; $i++):
          get_template_part( 'template-parts/swag-bag/swag-media');
        endfor;
      ?>
    </div>

    <div class="row">
      <div class="col-auto ml-auto">
        <a href="" class="btn btn--blue btn--lg">View All Media Items</a>
      </div>
    </div>

  </section>

</main>

<footer class="footer--fixed p-4 color-white">
  <h4>You're viewing an example virtual swag bag.</h4>
  <p>Attendees will receive a swag bag that looks like this. To see what your sponsorship page looks like, click below.</p>

      <div class="row">
      <div class="col-auto">
        <a href="<?php echo get_permalink(8524); ?>" class="btn btn--lg btn--secondary">View Sponsor Page Example</a>
      </div>
      <div class="col-auto">
        <a href="" class="btn btn--lg">Sign Up</a>
      </div>
    </div>
  
</footer>

<?php 
	get_footer(); 
?>