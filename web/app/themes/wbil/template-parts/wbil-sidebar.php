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
      <?php 

      $post_parent_id = $post->ID;

      if ( is_page() && $post->post_parent ) { //subpage
        $post_parent_id = wp_get_post_parent_id(); 
      }

      $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $post_parent_id,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
      );
  
      $nav_query = new WP_Query( $args );
      
      $active_class = is_page($post_parent_id) ? 'class="active"' : '';
      echo '<li><a href="' . get_permalink($post_parent_id) . '" ' . $active_class . '>Welcome!</a></li>';

      while($nav_query->have_posts()): $nav_query->the_post(); 

        $active_class = is_page($post->ID) ? 'class="active"' : '';

        echo '<li><a href="' . get_permalink($post->ID) . '" ' . $active_class . '>' . get_the_title($post->ID). '</a></li>';
      endwhile; 
      wp_reset_postdata(); 
?>

    </ul>

    <div class="mt-md-5 pt-md-5">
      <a target="_blank" href="https://institute.lawyerwellbeing.net/store/ListProducts.aspx?catid=980984&ftr=" class="sidebar__btn sidebar__btn--purple mb-2">Sponsor Well-Being Week</a>
      <a target="_blank" href="https://institute.lawyerwellbeing.net/donations/donate.asp?id=21344" class="sidebar__btn sidebar__btn--purple">Donate to IWIL</a>
    </div>
  </div>
</div>