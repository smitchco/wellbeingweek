<?php 
	$countdown_timer = get_field('countdown_timer', 7162) ? get_field('countdown_timer', 7162) : null; 

	if($countdown_timer && date('Ymd', strtotime($countdown_timer)) > date('Ymd')) { 
?>
<script type='text/javascript' src='https://lawyerwellbeing.net/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/countdown-dependent.min.js?ver=3.19.9' id='ult-countdown-dependent-js'></script>
<script type='text/javascript' src='https://lawyerwellbeing.net/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/countdown.min.js?ver=3.19.9' id='jquery.timecircle-js'></script>
<?php } ?>

  <?php wp_footer(); ?>
