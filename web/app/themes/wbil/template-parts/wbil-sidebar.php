<script>
  jQuery(document).ready(function() {
    jQuery('[data-sidebar-trigger]').click(function() {
      jQuery('[data-sidebar]').toggleClass('d-flex');
      jQuery('[data-sidebar]').toggleClass('d-none');
    });
  });
</script>

<button class="btn btn--menu mt-2 d-md-none" data-sidebar-trigger>Show WBIL Menu</button>
<div class="wbil-sidebar p-3 pt-5 flex-column d-none d-md-flex" data-sidebar>
  <div class="sidebar__nav">
    <ul class="mb-md-5 pb-md-5">
      <li>
        <a href="<?php echo get_permalink(8370); ?>" <?php echo is_page(8370) ? 'class="active"' : ''; ?>>
          Welcome!
        </a>
      </li>
      <li>
        <a href="<?php echo get_permalink(8371); ?>" <?php echo is_page(8371) ? 'class="active"' : ''; ?>>
          About Well-Being Week
        </a>
      </li>
      <li>
        <a href="<?php echo get_permalink(8372); ?>" <?php echo is_page(8372) ? 'class="active"' : ''; ?>>
          Daily Schedule
        </a>
      </li>
      <li>
        <a href="<?php echo get_permalink(8026); ?>" <?php echo is_page(8026) ? 'class="active"' : ''; ?>>
          Special Event: Free Webinar
        </a>
      </li>
      <li>
        <a href="<?php echo get_permalink(8373); ?>" <?php echo is_page(8373) ? 'class="active"' : ''; ?>>
          Participation Guides &amp; Resources
        </a>
      </li>
      <li>
        <a href="<?php echo get_permalink(8374); ?>" <?php echo is_page(8374) ? 'class="active"' : ''; ?>>
          Well-Being Guides &amp; Resources
        </a>
      </li>
      <li>
        <a href="<?php echo get_permalink(7940); ?>" <?php echo is_page(7940) ? 'class="active"' : ''; ?>>
          Community Photo Wall
        </a>
      </li> 
      <li>
        <a href="<?php echo get_permalink(8375); ?>" class="sidebar__btn mt-3">
          Register Now
        </a>
      </li>
    </ul>

    <div class="mt-md-5 pt-md-5">
      <a target="_blank" href="https://institute.lawyerwellbeing.net/store/ListProducts.aspx?catid=980984&ftr=" class="sidebar__btn sidebar__btn--purple mb-2">Sponsor Well-Being Week</a>
      <a target="_blank" href="https://institute.lawyerwellbeing.net/donations/donate.asp?id=21344" class="sidebar__btn sidebar__btn--purple">Donate to IWIL</a>
    </div>
  </div>
</div>