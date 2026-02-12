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
  
  <section class="p-5 pl-0 m-0" id="whats-a-virtual-swag-bag">
    <div class="row">
      <div class="col-auto my-auto">
        <h1 class="m-0 p-0">Example Company, LLC</h1> 
      </div>
      <div class="col-auto my-auto">
        <div class="chip chip--<?php echo strtolower($sponsor); ?>"><?php echo $sponsor; ?> Sponsor</div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <p class="font-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque  quis turpis a magna placerat.</p>
        <p class="font-md">Virtual meeting office hours: XX:XX-XX:XX on May XX, XXXX</p>
      </div>
    </div>
    <div class="row">
      <div class="col-auto">
        <a href="mailto:example@example.com" class="btn btn--lg btn--secondary">Schedule a Zoom Call</a>
      </div>
      <div class="col-auto">
        <a href="" class="btn btn--lg btn--lg">Contact Us</a>
      </div>
    </div>
  </section>

  <section class="p-5 m-0">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="community-tab" data-toggle="tab" data-target="#community" type="button" role="tab" aria-controls="community" aria-selected="true">Community Involvement</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="offers-tab" data-toggle="tab" data-target="#offers" type="button" role="tab" aria-controls="offers" aria-selected="false">Offers &amp; Discounts</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="learning-tab" data-toggle="tab" data-target="#learning" type="button" role="tab" aria-controls="learning" aria-selected="false">Learning &amp;   Information</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="media-tab" data-toggle="tab" data-target="#media" type="button" role="tab" aria-controls="media" aria-selected="false">Media</button>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="community" role="tabpanel" aria-labelledby="community-tab">
        <div class="row mt-5">
          <?php 
            for ($i = 0; $i < 6; $i++):
              get_template_part( 'template-parts/swag-bag/swag-offers-discounts', '', ['i' => $i, 'cols' => 3]); 
            endfor;
          ?>
        </div>
      </div>
      <div class="tab-pane fade" id="offers" role="tabpanel" aria-labelledby="offers-tab">
        <div class="row mt-5">
          <?php 
            for ($i = 0; $i < 6; $i++):
              get_template_part( 'template-parts/swag-bag/swag-offers-discounts', '', ['i' => $i, 'cols' => 3]); 
            endfor;
          ?>
        </div>
      </div>
      <div class="tab-pane fade" id="learning" role="tabpanel" aria-labelledby="learning-tab">
        <div class="row mt-5">
          <?php 
            for ($i = 0; $i < 3; $i++):
              get_template_part( 'template-parts/swag-bag/swag-special-info', '', ['i' => $i, 'cols' => 3]);
            endfor;
          ?>
        </div>
      </div>
      
      <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
        <div class="row mt-5">
          <?php 
            for ($i = 0; $i < 18; $i++):
              get_template_part( 'template-parts/swag-bag/swag-media', '', ['i' => $i, 'cols' => 2]);
            endfor;
          ?>
        </div>
      </div>
    </div>

  </section>

</main>

<footer class="footer--fixed p-4 color-white">
  <h4>You’re viewing an example sponsorship page.</h4>
  <p>Attendees will receive a swag bag that looks like this. To see what your sponsorship page looks like, click below.</p>

      <div class="row">
      <div class="col-auto">
        <a href="<?php echo get_permalink(8525); ?>" class="btn btn--lg">View Swag Bag Example</a>
      </div>
      <div class="col-auto">
        <a href="" class="btn btn--lg btn--secondary" onclick="window.history.go(-1); return false;">Go Back</a>
      </div>
    </div>
  
</footer>

<?php 
	get_footer(); 
?>