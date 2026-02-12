<?php 


	$post_id = $post->ID;

	if ( is_page() && $post->post_parent ) { //subpage
		$post_id = wp_get_post_parent_id(); 
	}

	$countdown_timer = get_field('countdown_timer', $post_id) ? get_field('countdown_timer', $post_id) : null; 
	if($countdown_timer && date('Ymd', strtotime($countdown_timer)) > date('Ymd')) { 
?>
 
<script>

	 jQuery(document).ready(function() {

  	const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  		var birthday = "<?php echo $countdown_timer; ?>",
      countDown = new Date(birthday).getTime(),
      
      x = setInterval(function() {    

        var now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
      }, 0)
	 });

</script>

<?php } ?>

<div class="hero">
	<div class="container-fluid">
		<div class="row text-white">
			<div class="col-auto">
				<img src="https://lawyerwellbeing.net/wp-content/uploads/2024/04/bug.png" class="hero__bug"/>
			</div>
			<div class="col-auto">
				
				<a href="<?php echo get_permalink($post_id); ?>" class="hero__link">
					<h2 class="hero__head m-0 p-0">WELL-BEING WEEK IN LAW</h2>
					<h3 class="hero__subhead m-0 p-0">
						<?php 
							$start_datetime = strtotime($countdown_timer); 
							$start_day = date('j', $start_datetime); 
							$end_datetime = strtotime($countdown_timer . ' +4 days'); 
							$end_day = date('j', $end_datetime); 
							$start_month = date('F', $start_datetime);
							$start_year = date('Y', $start_datetime);

							echo $start_month . ' ' . $start_day . '-' . $end_day . ', ' . $start_year;
						?>
					</h3>
				</a>
			</div>
			<?php if($countdown_timer && date('Ymd', strtotime($countdown_timer)) > date('Ymd')) { ?>
				<div class="col-auto ml-auto my-auto">
					<div id="countdown" class="row no-gutters pt-3 pt-md-0">
						<div class="col-auto pr-1 pr-md-2 my-auto ult_countdown-amount countdown__amount text-white" id="days"></div>
						<div class="col-auto pr-3 my-auto ult_countdown-period countdown__period text-white">Days</div>
						<div class="col-auto pr-1 pr-md-2 pl-1 pl-md-3 my-auto ult_countdown-amount countdown__amount text-white" id="hours"></div>
						<div class="col-auto pr-3 my-auto ult_countdown-period countdown__period text-white">Hours</div>
						<div class="col-auto pr-1 pr-md-2 pl-1 pl-md-3 my-auto ult_countdown-amount countdown__amount text-white" id="minutes"></div>
						<div class="col-auto pr-3 my-auto ult_countdown-period countdown__period text-white">Mins</div>
						<div class="col-auto pr-1 pr-md-2 pl-1 pl-md-3 my-auto ult_countdown-amount countdown__amount text-white" id="seconds"></div>
						<div class="col-auto my-auto ult_countdown-period countdown__period text-white">Secs</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>