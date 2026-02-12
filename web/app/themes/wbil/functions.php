<?php
require_once( 'inc/ajax.php' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_action('admin_head', 'acf_css_override');

function acf_css_override() {
  echo '<style> .acf-hidden {display: block !important;} </style>';
}

add_image_size( 'email_banner', 680, '', false );
add_image_size( 'email_logo', 300, '', false );
add_image_size( 'email_banner_preview', 280, 280, true );
add_image_size( 'photo_gallery', 600, 600, true );
add_image_size( 'photo_small', 300, 300, true );

//add_action('wp_footer', 'add_modal_to_footer');

function add_modal_to_footer() {
	global $post;

	$exclude_posts_arr = [7162,7856,7254,7250,7255,7940,7939,7954,8026,8369];

	if(!in_array($post->ID,$exclude_posts_arr) ) {
 		echo file_get_contents(get_stylesheet_directory() . "/modal-wellbeing-week.php");
	}
}

add_action( 'wpcf7_before_send_mail', 'wpcf7_create_html_email' );


function wpcf7_create_html_email($contact_form){
  
	$submission = WPCF7_Submission::get_instance();
  
	if ($submission && $contact_form->id() == 6650) { //gratitude form
  
		$post_id = 6644; //gratitude page
		$sender_name = $_POST['your-name'];
		$sender_email = $_POST['your-email'];
		$to_email = $_POST['to-email'];
		$message = stripcslashes($_POST['your-message']);
		$image_id = $_POST['radio-649'];

		$banner_src = []; 

		$logo = wp_get_attachment_image_src(5389, 'email_logo')[0]; 
		$page_link = get_permalink($post_id); 

		if( have_rows('image_options', $post_id) ) {
			while ( have_rows('image_options', $post_id) ) : the_row();
				$image = get_sub_field('image');

				if ($image['ID'] == $image_id) {
					$banner_src = wp_get_attachment_image_src($image['ID'], 'email_banner')[0];
					$color_primary = get_sub_field('color_primary');
					$color_secondary = get_sub_field('color_secondary');
				}

			endwhile;
		}

		ob_start();
		include('email-gratitude.php');
		$content = ob_get_contents();
		ob_end_clean();

		$mail = $contact_form->prop( 'mail' );
		$mail['body'] = $content;
		$mail['additional_headers'] = 'Reply-To: ' . $sender_email; 

		$contact_form->set_properties( 
			['mail' => $mail]
		);
	}
}

register_nav_menu( 'new_menu',  __( 'New Menu', 'dt-the7' ) );

remove_action( 'wpcf7_swv_create_schema', 'wpcf7_swv_add_select_enum_rules', 20, 2 );

// $localize_args = array(
// 	'nonce' => wp_create_nonce('ajax_nonce'),
// 	'url' => admin_url('admin-ajax.php'),
// );
// wp_localize_script('main-js', 'ajax', $localize_args);

add_action('wp_head', 'add_ajax_variables');

function add_ajax_variables() {
	echo '<script>';
	echo 'var ajax = {};';
	echo 'ajax.nonce = "' . wp_create_nonce('ajax_nonce') . '";';
	echo 'ajax.url = "' . admin_url('admin-ajax.php') . '";';
	echo '</script>';
}

function add_bloomerang_tracking_script() {

	wp_enqueue_script( 'bloomerang-subscribe', 'https://s3-us-west-2.amazonaws.com/bloomerang-public-cdn/instituteforwellbeinginlaw/.widget-js/119478272.js', '', null);

	wp_enqueue_script( 'bloomerang', 'https://api.bloomerang.co/v1/WebsiteVisit?ApiKey=pub_38584da4-4870-11f0-af49-0243ef7778a1', '', null);

}

add_action( 'wp_enqueue_scripts', 'add_bloomerang_tracking_script'); 

?>