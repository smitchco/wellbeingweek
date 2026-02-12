<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
  * Template Name: Homepage Redesign

 * @since   1.0.0
 *
 * @package The7\Templates
 */

defined( 'ABSPATH' ) || exit;

$config = presscore_config();
$config->set( 'template', 'page' );

get_header();
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/home-new.css' ?>' type='text/css' media='all' />

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 

<script>

	  jQuery('body').on('click', '.btn-anchor', function(e){
    e.preventDefault(); 
    
    jQuery("html, body").animate({ scrollTop: jQuery(jQuery(this).attr("href")).offset().top - 120 }, 500);

  });

	  jQuery(document).ready(function() {

	  	var swiper_hero = new Swiper('.swiper-hero', {
			  // Optional parameters
			  loop: true,
			  autoplay: {
			  	duration: 4000
			  },

			  // If we need pagination
			  pagination: {
			    el: '.swiper-pagination',
			  },

			  // Navigation arrows
			  navigation: {
			    nextEl: '.swiper-button-next',
			    prevEl: '.swiper-button-prev',
			  },
			
			});

			var swiper_hero = new Swiper('.swiper-testimonial', {
			  // Optional parameters
			  loop: true,

			  // If we need pagination
			  pagination: {
			    el: '.swiper-pagination',
			  },

			  // Navigation arrows
			  navigation: {
			    nextEl: '.swiper-button-next',
			    prevEl: '.swiper-button-prev',
			  },
			
			});


	  });

</script>

<section class="hero--swiper section--border--before section--border--after" >

	<div class="swiper-container swiper-hero py-lg-5">
	  <div class="swiper-wrapper">
	    <div class="swiper-slide px-2 px-lg-5">

	    		<div class="container-fluid py-5">
	    			<div class="row justify-content-center">
	    				<div class="col-auto">
	    					<div class="swiper-image">
								<svg width="207" height="274" viewBox="0 0 207 274" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M181.125 34.9819H138C147.15 34.9819 155.925 38.5735 162.395 44.9665C168.865 51.3594 172.5 60.0302 172.5 69.0712H34.5C34.5 60.0302 38.1348 51.3594 44.6048 44.9665C51.0748 38.5735 59.85 34.9819 69 34.9819H25.875C19.0125 34.9819 12.4311 37.6756 7.57861 42.4703C2.72611 47.2651 0 53.7681 0 60.5489L0 248.04C0 254.821 2.72611 261.324 7.57861 266.119C12.4311 270.913 19.0125 273.607 25.875 273.607H181.125C187.987 273.607 194.569 270.913 199.421 266.119C204.274 261.324 207 254.821 207 248.04V60.5489C207 53.7681 204.274 47.2651 199.421 42.4703C194.569 37.6756 187.987 34.9819 181.125 34.9819ZM35.3625 129.473L42.2086 122.762C42.4775 122.496 42.7968 122.285 43.1483 122.141C43.4997 121.997 43.8765 121.923 44.257 121.923C44.6375 121.923 45.0143 121.997 45.3658 122.141C45.7173 122.285 46.0366 122.496 46.3055 122.762L57.4102 133.841L83.0695 108.7C83.3384 108.434 83.6577 108.223 84.0092 108.079C84.3607 107.935 84.7375 107.861 85.118 107.861C85.4985 107.861 85.8753 107.935 86.2267 108.079C86.5782 108.223 86.8975 108.434 87.1664 108.7L93.9586 115.465C94.2279 115.73 94.4415 116.046 94.5872 116.393C94.733 116.74 94.808 117.113 94.808 117.489C94.808 117.865 94.733 118.237 94.5872 118.584C94.4415 118.932 94.2279 119.247 93.9586 119.513L59.3508 153.389C59.0819 153.655 58.7626 153.866 58.4111 154.01C58.0596 154.154 57.6829 154.228 57.3023 154.228C56.9218 154.228 56.5451 154.154 56.1936 154.01C55.8421 153.866 55.5228 153.655 55.2539 153.389L35.3625 133.521C35.0932 133.256 34.8796 132.94 34.7339 132.593C34.5881 132.245 34.5131 131.873 34.5131 131.497C34.5131 131.121 34.5881 130.749 34.7339 130.402C34.8796 130.054 35.0932 129.739 35.3625 129.473ZM51.75 209.69C49.1912 209.69 46.6899 208.94 44.5623 207.535C42.4347 206.13 40.7765 204.134 39.7973 201.798C38.8181 199.462 38.5619 196.892 39.0611 194.412C39.5603 191.932 40.7925 189.655 42.6018 187.867C44.4111 186.079 46.7164 184.861 49.226 184.368C51.7356 183.875 54.3369 184.128 56.701 185.096C59.065 186.063 61.0855 187.702 62.5071 189.804C63.9287 191.906 64.6875 194.378 64.6875 196.906C64.6918 198.586 64.36 200.25 63.7114 201.803C63.0627 203.356 62.1099 204.767 60.9077 205.955C59.7055 207.143 58.2776 208.084 56.706 208.725C55.1344 209.366 53.4502 209.694 51.75 209.69ZM172.5 201.167C172.5 202.297 172.046 203.381 171.237 204.18C170.428 204.979 169.331 205.428 168.188 205.428H90.5625C89.4187 205.428 88.3218 204.979 87.5131 204.18C86.7043 203.381 86.25 202.297 86.25 201.167V192.645C86.25 191.515 86.7043 190.431 87.5131 189.632C88.3218 188.833 89.4187 188.384 90.5625 188.384H168.188C169.331 188.384 170.428 188.833 171.237 189.632C172.046 190.431 172.5 191.515 172.5 192.645V201.167ZM172.5 150.033C172.5 152.377 170.182 154.294 167.325 154.294H83.0695L100.481 137.25H167.325C170.182 137.25 172.5 139.167 172.5 141.511V150.033Z" fill="url(#paint0_linear)"/>
									<path d="M51.75 184.123C49.1912 184.123 46.6899 184.872 44.5623 186.277C42.4347 187.682 40.7765 189.678 39.7973 192.014C38.8181 194.35 38.5619 196.92 39.0611 199.4C39.5603 201.88 40.7925 204.158 42.6018 205.945C44.4111 207.733 46.7164 208.951 49.226 209.444C51.7356 209.937 54.3369 209.684 56.701 208.717C59.065 207.749 61.0855 206.111 62.5071 204.008C63.9287 201.906 64.6875 199.435 64.6875 196.906C64.6918 195.226 64.36 193.562 63.7114 192.009C63.0627 190.456 62.1099 189.045 60.9077 187.858C59.7055 186.67 58.2776 185.728 56.706 185.087C55.1344 184.446 53.4502 184.119 51.75 184.123ZM87.1664 108.7C86.8975 108.434 86.5782 108.223 86.2267 108.079C85.8753 107.935 85.4985 107.861 85.118 107.861C84.7375 107.861 84.3607 107.935 84.0092 108.079C83.6577 108.223 83.3384 108.434 83.0695 108.7L57.4102 133.841L46.3055 122.762C46.0366 122.496 45.7173 122.285 45.3658 122.141C45.0143 121.997 44.6375 121.923 44.257 121.923C43.8765 121.923 43.4997 121.997 43.1483 122.141C42.7968 122.285 42.4775 122.496 42.2086 122.762L35.3625 129.473C35.0932 129.739 34.8796 130.055 34.7339 130.402C34.5881 130.749 34.5131 131.121 34.5131 131.497C34.5131 131.873 34.5881 132.246 34.7339 132.593C34.8796 132.94 35.0932 133.256 35.3625 133.521L55.2539 153.389C55.5228 153.655 55.8421 153.866 56.1936 154.01C56.5451 154.154 56.9218 154.228 57.3023 154.228C57.6829 154.228 58.0596 154.154 58.4111 154.01C58.7626 153.866 59.0819 153.655 59.3508 153.389L93.9586 119.513C94.2279 119.247 94.4415 118.932 94.5872 118.584C94.733 118.237 94.808 117.865 94.808 117.489C94.808 117.113 94.733 116.741 94.5872 116.393C94.4415 116.046 94.2279 115.73 93.9586 115.465L87.1664 108.7ZM138 34.9821C138 25.9411 134.365 17.2703 127.895 10.8773C121.425 4.48436 112.65 0.892822 103.5 0.892822C94.35 0.892822 85.5748 4.48436 79.1048 10.8773C72.6348 17.2703 69 25.9411 69 34.9821C59.85 34.9821 51.0748 38.5736 44.6048 44.9666C38.1348 51.3596 34.5 60.0304 34.5 69.0714H172.5C172.5 60.0304 168.865 51.3596 162.395 44.9666C155.925 38.5736 147.15 34.9821 138 34.9821ZM103.5 47.7656C100.941 47.7656 98.4399 47.0159 96.3123 45.6112C94.1848 44.2065 92.5265 42.21 91.5473 39.8741C90.5681 37.5383 90.3119 34.9679 90.8111 32.4882C91.3103 30.0084 92.5425 27.7306 94.3518 25.9428C96.1611 24.155 98.4664 22.9375 100.976 22.4443C103.486 21.951 106.087 22.2042 108.451 23.1717C110.815 24.1393 112.836 25.7778 114.257 27.88C115.679 29.9822 116.438 32.4538 116.438 34.9821C116.442 36.662 116.11 38.3263 115.461 39.8791C114.813 41.432 113.86 42.8429 112.658 44.0308C111.455 45.2187 110.028 46.1602 108.456 46.8011C106.884 47.442 105.2 47.7698 103.5 47.7656Z" fill="#1D4358"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M41.261 48.8022H29.8743C21.59 48.8022 14.8743 55.518 14.8743 63.8023V245.094C14.8743 253.379 21.59 260.094 29.8743 260.094H178.365C186.65 260.094 193.365 253.379 193.365 245.094V63.8022C193.365 55.518 186.65 48.8022 178.365 48.8022H165.739C170.104 54.6339 172.5 61.7307 172.5 69.0717H34.5C34.5 61.7307 36.8964 54.6339 41.261 48.8022ZM42.2086 122.762L35.3625 129.474C35.0932 129.739 34.8796 130.055 34.7339 130.402C34.5881 130.749 34.5131 131.122 34.5131 131.498C34.5131 131.874 34.5881 132.246 34.7339 132.593C34.8796 132.941 35.0932 133.256 35.3625 133.522L55.2539 153.389C55.5228 153.655 55.8421 153.867 56.1936 154.011C56.5451 154.155 56.9218 154.229 57.3023 154.229C57.6829 154.229 58.0596 154.155 58.4111 154.011C58.7626 153.867 59.0819 153.655 59.3508 153.389L93.9586 119.513C94.2279 119.248 94.4415 118.932 94.5872 118.585C94.733 118.237 94.808 117.865 94.808 117.489C94.808 117.113 94.733 116.741 94.5872 116.394C94.4415 116.046 94.2279 115.731 93.9586 115.465L87.1664 108.701C86.8975 108.434 86.5782 108.223 86.2267 108.079C85.8753 107.935 85.4985 107.861 85.118 107.861C84.7375 107.861 84.3607 107.935 84.0092 108.079C83.6577 108.223 83.3384 108.434 83.0695 108.701L57.4102 133.841L46.3055 122.762C46.0366 122.496 45.7173 122.285 45.3658 122.141C45.0143 121.997 44.6375 121.923 44.257 121.923C43.8765 121.923 43.4997 121.997 43.1483 122.141C42.7968 122.285 42.4775 122.496 42.2086 122.762ZM44.5623 207.536C46.6899 208.94 49.1912 209.69 51.75 209.69C53.4502 209.694 55.1344 209.366 56.706 208.726C58.2776 208.085 59.7055 207.143 60.9077 205.955C62.1099 204.767 63.0627 203.356 63.7114 201.804C64.36 200.251 64.6918 198.586 64.6875 196.907C64.6875 194.378 63.9287 191.907 62.5071 189.804C61.0855 187.702 59.065 186.064 56.701 185.096C54.3369 184.129 51.7356 183.875 49.226 184.369C46.7164 184.862 44.4111 186.079 42.6018 187.867C40.7925 189.655 39.5603 191.933 39.0611 194.413C38.5619 196.892 38.8181 199.463 39.7973 201.799C40.7765 204.134 42.4347 206.131 44.5623 207.536ZM171.237 204.181C172.046 203.382 172.5 202.298 172.5 201.168V192.645C172.5 191.515 172.046 190.431 171.237 189.632C170.428 188.833 169.331 188.384 168.188 188.384H90.5625C89.4187 188.384 88.3218 188.833 87.5131 189.632C86.7043 190.431 86.25 191.515 86.25 192.645V201.168C86.25 202.298 86.7043 203.382 87.5131 204.181C88.3218 204.98 89.4187 205.429 90.5625 205.429H168.188C169.331 205.429 170.428 204.98 171.237 204.181ZM167.325 154.295C170.182 154.295 172.5 152.377 172.5 150.034V141.511C172.5 139.168 170.182 137.25 167.325 137.25H100.481L83.0695 154.295H167.325Z" fill="white" fill-opacity="0.85"/>
									<defs>
									<linearGradient id="paint0_linear" x1="103.5" y1="34.9819" x2="103.5" y2="273.607" gradientUnits="userSpaceOnUse">
									<stop stop-color="white"/>
									<stop offset="1" stop-color="#AFCAB9"/>
									</linearGradient>
									</defs>
								</svg>
							</div>
						</div>
							<div class="col-12 col-md-10 col-lg col-xl-7 text-center text-lg-left">

								<h1 class="text-white slide-title text-center text-lg-left">Advancing Policy</h1>

								<p class="text-white slide-content">Advancing policy to promote well-being in the legal profession through collaboration at the institutional, state, national, and world-wide levels.</p>

								<a href="#signup" class="btn btn-anchor btn btn-primary bg-teal mt-2 px-3 mt-2">Sign Up For Our Newsletter</a>

							</div>
						</div>
					</div>
	    </div>
	    <div class="swiper-slide px-2 px-lg-5">

	    		<div class="container-fluid py-5">
	    			<div class="row justify-content-center">
	    				<div class="col-auto">
	    					<div class="swiper-image">
									<svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										 x="0px" y="0px" viewBox="0 0 640 512" style="enable-background:new 0 0 640 512;" xml:space="preserve">
									<style type="text/css">
										.st0{fill:url(#SVGID_1_);enable-background:new    ;}
										.st1{fill:#1F4357;}
									</style>
									<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="320" y1="0" x2="320" y2="384">
										<stop  offset="0" style="stop-color:#FFFFFF"/>
										<stop  offset="1" style="stop-color:#B0CABA"/>
									</linearGradient>
									<path class="st0" d="M528,0H112C85.5,0.1,64.1,21.5,64,48v336h512V48C575.9,21.5,554.5,0.1,528,0z M512,320H128V64h384V320z"/>
									<path class="st1" d="M624,416H381.5c-0.7,19.8-14.7,32-32.7,32H288c-18.7,0-33-17.5-32.8-32H16c-8.8,0-16,7.2-16,16v16
										c0.1,35.3,28.7,63.9,64,64h512c35.3-0.1,63.9-28.7,64-64v-16C640,423.2,632.8,416,624,416z M512,64H128v256h384V64z M289,250.3
										l-11.3,11.3c-6.2,6.2-16.4,6.3-22.6,0c0,0,0,0,0,0l-58.4-58.3c-6.2-6.2-6.3-16.4,0-22.6c0,0,0,0,0,0l58.3-58.3
										c6.2-6.2,16.4-6.3,22.6,0c0,0,0,0,0,0l11.4,11.3c6.2,6.2,6.3,16.4,0,22.6c0,0,0,0,0,0L253.2,192l35.8,35.7
										C295.2,234,295.3,244.1,289,250.3C289,250.3,289,250.3,289,250.3L289,250.3z M443.4,203.3L385,261.7c-6.2,6.2-16.4,6.3-22.6,0
										c0,0,0,0,0,0L351,250.4c-6.2-6.2-6.3-16.4,0-22.6c0,0,0,0,0,0l35.8-35.7L351,156.3c-6.2-6.2-6.3-16.4,0-22.6c0,0,0,0,0,0l11.3-11.3
										c6.2-6.2,16.4-6.3,22.6,0c0,0,0,0,0,0l58.3,58.3C449.5,186.9,449.6,197.1,443.4,203.3C443.3,203.3,443.3,203.3,443.4,203.3
										L443.4,203.3z"/>
									</svg>

							</div>
							</div>
							<div class="col-12 col-md-10 col-lg col-xl-7 text-center text-lg-left">

								<h1 class="text-white slide-title text-center text-lg-left">Innovative Programming</h1>

								<p class="text-white slide-content">Continually innovating to provide evidence-based education, strategies, tools, and resources to protect and promote well-being in the legal profession.</p>

								<a href="#signup" class="btn btn-anchor btn btn-primary bg-teal px-3 mt-2">Sign Up For Our Newsletter</a>

							</div>
						</div>
					</div>

			</div>
	    <div class="swiper-slide px-2 px-lg-5">
    		<div class="container-fluid py-5">
    			<div class="row justify-content-center">
    				<div class="col-auto">
    					<div class="swiper-image">

													
													<svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								 x="0px" y="0px" viewBox="0 0 576 512" style="enable-background:new 0 0 576 512;" xml:space="preserve">
							<style type="text/css">
								.st0{fill:url(#SVGID_1_);enable-background:new    ;}
								.st1{fill:#1F4357;}
							</style>
							<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256.875" y1="512" x2="256.875" y2="-9.094947e-13">
								<stop  offset="0" style="stop-color:#B0CABA"/>
								<stop  offset="1" style="stop-color:#FFFFFF"/>
							</linearGradient>
							<path class="st0" d="M96,0H32C14.3,0,0,14.3,0,32v64h128V32C128,14.3,113.7,0,96,0z M0,384h128V128H0V384z M0,480
								c0,17.7,14.3,32,32,32h64c17.7,0,32-14.3,32-32v-64H0V480z M513.6,462.2L401.1,42.7l-60.3,16.1l112.4,418.8c0.1,0.4,0.2,0.8,0.3,1.2
								l60.3-16.1C513.7,462.5,513.7,462.4,513.6,462.2z M160,480c0,17.7,14.3,32,32,32h64c17.7,0,32-14.3,32-32v-64H160V480z M256,0h-64
								c-17.7,0-32,14.3-32,32v64h124.8l-8-29.7c-2.8-10.5,1.7-21.6,11.2-27V32C288,14.3,273.7,0,256,0z M160,384h128V128H160V384z"/>
							<rect y="384" class="st1" width="128" height="32"/>
							<rect y="96" class="st1" width="128" height="32"/>
							<path class="st1" d="M575.2,445.6L460.4,17.8C457,5,444-2.6,431.2,0.8h-0.1L415.7,5c-12.8,3.5-20.3,16.6-16.9,29.4l114.8,427.9
								c3.4,12.7,16.4,20.4,29.2,17h0.1l15.4-4.2C571,471.5,578.6,458.4,575.2,445.6L575.2,445.6z"/>
							<rect x="160" y="384" class="st1" width="128" height="32"/>
							<path class="st1" d="M338.4,49.8C335,37,322,29.4,309.2,32.8h-0.1L293.7,37c-12.8,3.5-20.3,16.6-16.9,29.4l8,29.7H160v32h128v-20
								l103.6,386.2c3.4,12.7,16.4,20.4,29.2,17h0.1l15.4-4.2c12.7-3.5,20.3-16.6,16.9-29.3L338.4,49.8z"/>
							</svg>

						</div>
					</div>
							<div class="col-12 col-md-10 col-lg col-xl-7 text-center text-lg-left">


							<h1 class="text-white slide-title text-center text-lg-left">Pioneering Research</h1>

							<p class="text-white slide-content">Targeting research to continually advance our understanding of well-being in the legal profession and how to improve it.</p>

							<a href="#signup" class="btn btn-anchor btn-primary bg-teal px-3 mt-2">Sign Up For Our Newsletter</a>

						</div>
					</div>
				</div>
			</div>


				    <div class="swiper-slide px-2 px-lg-5">
    		<div class="container-fluid py-5">
    			<div class="row justify-content-center">
    				<div class="col-auto">
    					<div class="swiper-image swiper-image--spotlight">

							<svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<style type="text/css">
	.st0{fill:url(#SVGID_1_);enable-background:new    ;}
	.st1{fill:#1F4357;}
</style>
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="31.6429" y1="194.8458" x2="471.9859" y2="194.8458" gradientTransform="matrix(0.8607 -0.5091 0.5091 0.8607 -32.5458 201.6953)">
	<stop  offset="0" style="stop-color:#FFFFFF"/>
	<stop  offset="1" style="stop-color:#B0CABA"/>
</linearGradient>
<path class="st0" d="M221.8,120.3L103,239c-6.2,6.2-8.5,15.2-6.1,23.6l53,185.4h49.9L147,263l108.7-108.8L221.8,120.3z M457.5,129.9
	l-27.6,107.7c30.3,5.5,59.3-14.5,64.9-44.8C499.7,165.5,483.8,138.7,457.5,129.9z"/>
<path class="st1" d="M320,448H64c-28.4,0-55,18.5-63.3,44.2C-2.5,502,5.9,512,16.3,512h351.5c10.4,0,18.8-10,15.6-19.8
	C375,466.5,348.4,448,320,448z"/>
<path class="st1" d="M425.6,5.1L298.3,80.4l-62-15.9c-34.4-8.3-68.9,12.9-77.2,47.2c-8.1,33.7,12,67.7,45.4,76.8l61.6,15.8l0.4,0.1
	l75.3,127.3c8,13.5,28.2,10.6,32.1-4.6l77.6-302.5C455.4,9.4,439-2.9,425.6,5.1z"/>
</svg>


						</div>
						</div>
							<div class="col-12 col-md-10 col-lg col-xl-7 text-center text-lg-left">

							<div class="position-relative" style="z-index: 3">
								<h1 class="text-white slide-title text-center text-lg-left">Spotlighting The Issues</h1>

								<p class="text-white slide-content">Keeping the topic of well-being front and center in the legal profession.</p>

								<a href="#signup" class="btn btn-anchor btn-primary bg-teal px-3 mt-2">Sign Up For Our Newsletter</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		  <div class="swiper-button-prev"></div>
		  <div class="swiper-button-next"></div>

	</div>
 
</section>


<section class="test-white text-center bg-gray p-4">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-9 text-white text-center">
					<h5>The Institute for Well-Being in Law is a 501(c)(3) non-profit charitable organization that<br/>evolved from the National Task Force on Lawyer Well-Being.</h5>
				</div>
			</div>
		</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row position-relative">


			<div class="col-12 col-md-6 py-2 pb-lg-5 mb-5">

				<div class="social">
					Follow us: 
					<a href="https://www.linkedin.com/company/institute-for-well-being-in-law/" target="_blank" class="text-teal mx-2">
						<i class="fa fa-linkedin"></i>
					</a> 
					<a href="https://twitter.com/wellbeinginlaw" target="_blank" class="text-teal">
						<i class="fa fa-twitter"></i>
					</a>
				</div>

	
				<h2 class="text-teal mb-4 mt-0 pt-lg-5 mt-5">Catalyzing Positive Change</h2>

				<p class="text-teal mb-4 mt-0"><strong>In August 2017, the Task Force published a comprehensive report titled The Path to Lawyer Well-Being: Practical Recommendations for Positive Change. </strong></p>

				<p class="mt-0">The release of the report resulted in a national movement among stakeholders in the legal profession to take action to improve well-being. In December 2020, the Institute for Well-Being in Law (IWIL) was formed to carry on the movement launched by the National Task Force.</p>

			</div>
			<div class="col-12 col-md-6" >
				<div class="row h-100  bg-report">
					<div class="col-auto m-auto p-5">
						<a class="btn btn-lg btn--white text-teal" href="/the-report/" >
							Read the Report
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>


<section class="section--border--after bg-teal text-center text-white py-5">

	<div class="container-fluid container--max">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-9">

					<p class="text-uppercase overline" style=" letter-spacing: .1rem; font-weight: 100;">Our Mission</p>

					<p class="font-20 lh-165">IWIL is dedicated to the betterment of the legal profession by focusing on a holistic approach to well-being. Through advocacy, research, education, technical and resource support, and stakeholders’ partnerships, it is driven to lead a culture shift in law to establish health and well-being as core centerpieces of professional success.</p>
			</div>
		</div>
	</div>

</section>


<section class="py-2 py-lg-5 my-2 my-lg-5">
	<div class="container-fluid container--max">
		<div class="row">
			<div class="col-12 col-md-4 mb-3">
				<div class="card h-100">
					<div class="card-logo card-logo--wbil px-4 py-3">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/11/LOGO-revise-horiz.png" class="img-fluid"/>
					</div>
					<div class="p-4">
						<h4 class="font-20 text-teal lh-125"><strong>Well-Being Week in Law</strong></h4>
						<p>A week dedicated to raising awareness and encouraging action and innovation across the legal profession to improve well-being.</p>
						<a href="/lawyer-well-being-week/" class="btn btn-primary text-white bg-teal">Learn More</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 mb-3">
				<div class="card h-100">
					<div class="card-logo card-logo--path px-4 py-3">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/path-logo.png" class="img-fluid"/>
					</div>
					<div class="p-4">
						<h4 class="font-20 text-teal lh-125"><strong>Path to Well-Being in Law Podcast</strong></h4>
						<p>Bree Buchanan and Chris Newbold talk with recognized well-being pioneers from across the legal profession.</p>
						<a href="/podcast/" class="btn btn-primary text-white bg-teal">Learn More</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 mb-3">
				<div class="card h-100">
					<div class="card-logo card-logo--news px-4 py-3">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/logo-bug.png" class="img-fluid my-2"/>
					</div>
					<div class="p-4">
						<h4 class="font-20 text-teal lh-125"><strong>IWIL Newsletter</strong></h4>
						<p>Providing news, research, resources, and strategies on topics related to the gamut of well-being issues in the legal profession.</p>
						
						<p>
							<a class="btn btn--section btn-primary text-white btn--disabled">
								Coming Soon
							</a>
						</p>

				</div>
			</div>

		</div>
	</div>
</section>

<section class="bg-signup py-5" id="signup">
	<div class="container-fluid container--max py-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-5">
				<h2 class="text-white">Join The Movement To Transform The Profession</h2>
				<p class="text-white">Fill out the form to receive notifications about news, events and opportunities to help create a healthier legal profession</p>
			</div>
			<div class="col-12 col-md-5">
				<div class="text-white">
				<?php echo do_shortcode('[hubspot type=form portal=19592879 id=1abf4daf-affd-49b3-a6b2-441b3cb9f7b4]'); ?>
			</div>
		</div>
	</div>

</section>

<section class="section--quote py-5 my-5">
	<div class="container-fluid container--max">
		<div class="row">
			<div class="col-12 text-center">
				<svg width="84" height="53" viewBox="0 0 84 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.813232 52.1999V24L10.8132 0.199951H31.4132L25.0132 23.2H37.4132V52.1999H0.813232ZM46.6132 52.1999V24L56.6132 0.199951H77.2132L70.8132 23.2H83.2132V52.1999H46.6132Z" fill="#D5EFFA"/>
				</svg>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-sm-9">
				<h2 class="text-teal text-center mt-4 mb-4">We’ve Come A Long Way</h2>
				<p class="lh-165 font-20">So much progress has been made since the Path to Lawyer Well-Being report was published in 2017. Still, there’s a long way to go. Cultural transformation will take sustained innovation and persistence. Every stakeholder in the profession has the power to take steps toward positive change and should embrace their responsibility for doing so. We all can make a difference.</p>
			</div>
		</div>
		<div class="row justify-content-center mt-2">
			<div class="col-auto">
				<div class="img-circle-wrap">
					<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Buchannan-Headshot-1-e1580607442859.png" class="img-fluid img-circle"/>
				</div>
			</div>
			<div class="col-auto my-auto">
				<p class="m-0 p-0">
					<strong>Bree Buchanan  President </strong></br>
					Institute for Well-Being in Law
				</p>
			</div>
		</div>
	</div>


</section>

<section style="background: #EFEFEF;" class="py-5">
	<div class="container-fluid container--max mt-5">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-4">
				
				<h2 class="text-teal">The Well-Being in Law Movement Is Sweeping The Nation</h2>

				<p>The National Task Force report triggered a wave of concern and action across the country. Hover over a state on the map to find out what State Task Forces and Commissions are doing to promote thriving in the legal profession.</p>
			</div>

			<div class="col-12 col-lg-6">
				<?php echo do_shortcode('[us_map]'); ?>
			</div>
		</div>
	</div>

</section>


<section class="bg-teal section--border--before position-relative pt-4" >

	<div class="testimonial--quote">
		<svg width="84" height="53" viewBox="0 0 84 53" fill="#6C8B9D" xmlns="http://www.w3.org/2000/svg">
			<path d="M0.813232 52.1999V24L10.8132 0.199951H31.4132L25.0132 23.2H37.4132V52.1999H0.813232ZM46.6132 52.1999V24L56.6132 0.199951H77.2132L70.8132 23.2H83.2132V52.1999H46.6132Z" />
		</svg>
	</div>
	
	<div class="swiper-container swiper-testimonial py-5">
		<div class="swiper-wrapper">
	  	

	  	<div class="swiper-slide px-2 px-lg-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<p class="text-white font-20 lh-165 fw-100">We launched our firm at the onset of a pandemic with two primary objectives: superior representation and wellness. Being well is critical to professional competency and thriving on a personal level. Our program, Work Well, encourages open firm-wide discussions and one-on-one conversations. It includes treating everyone with dignity and respect as well as an inclusive and diverse environment where all views are welcome.  Our success in a boutique firm setting implementing a formal program demonstrates that it is about acknowledgement of the issues — no large budget required!  No matter what size firm, all should be embracing, and providing guidance and assistance, for wellness.</p>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/Janine-Pollack-partner_Crop-80x80.png" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong>Janine L. Pollack</strong><br/>
										Chief Wellness Officer<br/>
										Calcaterra Pollack LLP
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>


	  	<div class="swiper-slide px-2 px-lg-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<p class="text-white font-20 lh-165 fw-100">Being a lawyer in any industry can be a very rewarding but stressful job. As the world evolves and technology allows us to be connected 24/7, it is important that we focus on recharging and taking care of ourselves.  For some, this can be exacerbated if you are a working parent, caring for the elderly and extended family. We need to ensure that we are providing a culture of inclusion where these differences are considered and accommodations are made to allow everyone to excel without the sacrifice of their well-being. We must take care of people first if we want our business to have an impact and growth.</p>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/05/Jean-Lee-Headshot-80x80.png" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong>Jean Lee</strong><br/>
										President &amp; CEO<br/>
										Minority Corporate Counsel Association
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>


	  	<div class="swiper-slide px-2 px-lg-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<p class="text-white font-20 lh-165 fw-100">At Ogletree Deakins, we truly believe that nurturing open communication about mental and physical health will allow our attorneys to be the best resource for our clients and also the best version of themselves. We encourage our team members to utilize our employee assistance program to seek confidential consultations that support mental, physical, social, and financial well-being. And, in recent years, we’ve implemented more wellness-focused programing at our annual meetings, including yoga, mindfulness, and a 5K. We work hard to lead by example and prioritize well-being for attorneys and staff.</p>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Matt-Keen-80x80.jpg" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong>Matt Keen</strong><br/>
										Chair<br/>
										Ogletree, Deakins, Nash, Smoak & Stewart, PLLC
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>



 			<div class="swiper-slide px-2 px-lg-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<p class="text-white font-20 lh-165 fw-100">Investing in our people is not only the right thing to do, it is an investment in the quality of our client service as well as a commitment to our culture of excellence.  The ABA’s Well-Being Pledge is a powerful example of the profession linking arms to confront universal challenges and to come out stronger for having done so. Promoting well-being, destigmatizing issues around mental health and substance use and fostering discourse around the common struggles we all face will not only make the profession stronger, it will make its members better lawyers and better people.</p>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Casey-Ryan-Headshot-e1581093943181-80x80.jpg" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong>Casey Ryan</strong><br/>
										Global Head of Legal Personnel<br/>
										Reed Smith LLP
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>




	  	<div class="swiper-slide px-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<p class="text-white font-20 lh-165 fw-100">As a long-time solo and small firm attorney, no one carves out time for me to look after my own well-being. To be my best, it is up to me to put my health and happiness first. Quality time with family, intense daily workouts and a nice vacation on the horizon keeps me rejuvenated. Everyone needs to figure out their own well-being recipe because, as the saying goes, we can’t pour from an empty cup.</p>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Matt-Potempa-80x80.jpeg" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong>Matt Potempa</strong><br/>
										Partner<br/>
										Martin Heller Potempa &amp; Sheppard PLL
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>


			<div class="swiper-slide px-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<p class="text-white font-20 lh-165 fw-100">The legal industry is extremely demanding, and the needs of our clients and the technologically-connected world we live in puts ever more pressure on professionals – lawyers and business folks. The industry needs to be laser-focused on giving all of the support we can to help our talent stay healthy and be well.  At Goodwin, we do so through our You@Goodwin program, because having well-adjusted professionals is good for our clients, our firm and our industry.</p>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Insolia-2-80x80.jpg" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong>Robert S. Insolia</strong><br/>
										Chairman<br/>
										Goodwin
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>


	  	<div class="swiper-slide px-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<p class="text-white font-20 lh-165 fw-100">Fostering an environment that supports the well-being of our attorneys and professional staff is a top priority at Crowell & Moring.  As a proud signatory of the ABA Well-Being Pledge, we are joining other firms in shedding light on the challenges attorneys and professional staff face and identifying resources and best practices that can make a real difference. Our profession must commit to a meaningful dialogue about mental health and how to support it.</p>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Inglima-80x80.jpg" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong>Phil Inglima</strong><br/>
										Chair<br/>
										Crowell & Moring
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>



			<div class="swiper-slide px-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<p class="text-white font-20 lh-165 fw-100">Along with client service, our top priority should be ensuring that our people are engaged, fulfilled and able to meet the incredible demands of our profession. Clients come to us with their biggest, most complex, sensitive problems. The stakes are big, the demands significant and, in many cases, the time short. We can’t make the job less demanding, but we can provide our colleagues tools to help them thrive in a challenging environment. We can enable them to be in the best position to have professional and personal lives that are integrated and fulfilling.</p>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/02/McKeon-Headshot-80x80.jpg" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong>Jami McKeon</strong><br/>
										Chair<br/>Morgan, Lewis & Bockius LLP 
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>



	  	<div class="swiper-slide px-5">
	  		<div class="container-fluid pt-5 pb-3">
	  			<div class="row justify-content-center">
	  				<div class="col-12 col-md-10">
							<p class="text-white font-20 lh-165 fw-100">As a firm leader, it is my job to be a role model and promote well-being as one of my firm’s core values. Working in a law firm in this era of intense competition and change poses well-being challenges for all of our people, not only lawyers. Core to my own well-being has been developing an understanding of how my career fits with the rest of my life—and also recognizing that my family, friends hobbies, and  exercise provide fulfillment and balance that I don’t get from my law job.</p>

							<div class="row pt-3">
								<div class="col-auto ml-auto">
									<div class="img-circle-wrap img-circle-wrap--testimonial">
										<img src="https://lawyerwellbeing.net/wp-content/uploads/2020/02/Heller-Headshot-80x80.png" class="img-fluid"/>
									</div>
								</div>
								<div class="col-auto">
									<p class="text-white">
										<strong>Noah Heller</strong><br/>
										Chief Executive Officer<br/>Katten 
									</p>
								</div>
							</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>


	  </div>

	  <div class="swiper-button-prev"></div>
	  <div class="swiper-button-next"></div>

	</div>

</section>


<section class="py-5">
	<div class="container container-fluid">
		<div class="row mt-5 mb-5">
			<div class="col-12 text-center">
				<h2 class="text-teal mb-fw-100">
					The Evidence is in on Lawyer Well-Being
				</h2>
					<span>We can no longer ignore our profession’s well-being problem.</span>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 col-lg p-3 p-lg-1">
				<div class="d-flex h-100 p-2 flex-column">
					
					<h4 class="card__title mb-0 pb-0">Alcohol</h4>
					<h3 class="text-blue-lt percentage pb-0 my-auto"><strong>36<span>%</span></strong></h3>

					<p>21-36% qualify as problem drinkers. Higher for men; under 30; private practice and solo practitioners.</p>
				</div>
			</div>


			<div class="col-12 col-sm-6 col-lg p-3 p-lg-1">
				<div class="d-flex h-100 p-2 flex-column">
					
					<h4 class="card__title mb-0 pb-0">Depression</h4>
					<h3 class="text-blue-lt percentage pb-0 my-auto"><strong>28<span>%</span></strong></h3>

					<p>28% report mild or higher depression symptoms. Highest for men and solo practitioners.</p>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg p-3 p-lg-1">
				<div class="d-flex h-100 p-2 flex-column">
					
					<h4 class="card__title mb-0 pb-0">Stress</h4>
					<h3 class="text-blue-lt percentage pb-0 my-auto"><strong>23<span>%</span></strong></h3>

					<p>23% report mild or higher stress symptoms. Highest for women and solo practitioners.</p>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg p-3 p-lg-1">
				<div class="d-flex h-100 p-2 flex-column">
					
					<h4 class="card__title mb-0 pb-0">Anxiety</h4>
					<h3 class="text-blue-lt percentage pb-0 my-auto"><strong>19<span>%</span></strong></h3>

					<p>19% report mild or higher anxiety symptoms. Highest for women and solo practitioners.</p>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg p-3 p-lg-1">
				<div class="d-flex h-100 p-2 flex-column">
					
					<h4 class="card__title mb-0 pb-0">Suicide</h4>
					<h3 class="text-blue-lt mb-0 pb-0 my-auto" style="font-size: 50px; "><strong>Top Ten</strong></h3>

					<p>Ranked #8 in a study of suicide by occupation. Rate is 1.33 times the national norm.</p>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="bg-teal py-5 text-center text-white section--border--after">

	<div class="container container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-9">
				<h3 class="overline" style="font-weight: bold!important; font-size: 24px!important;">This Affects All Of Us.</h3>
			
				<p>Too many lawyers are not thriving. A significant number struggle with mental health and alcohol use disorders. Many others, while not dealing with a diagnosable illness, still are not fully well. The result is that many lawyers are unable to be their best for their clients, colleagues, communities, and families.</p>
			</div>
		</div>
	</div>

</section>


 


<section class="py-5">

	
				<h2 class="text-teal text-center pb-5">
					Our Founding Champions
				</h2>

				<p class="text-uppercase mb-0 text-center mt-3">Institute For Well-Being In Law</p>
				<h4 class="card__title text-center mb-5">Inaugural Founding Champions:</h4>


	<div class="container container-fluid mb-4 pb-4" style="border-bottom: 2px solid #CCC;">
		
		<div class="row justify-content-center">

			<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
					<a href="https://www.crowell.com/" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/crowell-morning.png" class="img-fluid" alt="Crowell Moring"/>
					</a>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
					<a href="https://katten.com/" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/katten-logo.jpg" class="img-fluid" alt="Katten"/>
					</a>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
					<a href="https://www.lw.com/" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/LW-LLP-Red_Final.png" class="img-fluid" alt="Latham & Watkins"/>
					</a>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
					<a href="https://www.morganlewis.com/" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/morgan-lewis-logo.jpg" class="img-fluid" alt="Morgan Lewis"/>
					</a>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 p-4 my-auto text-center">
					<a href="https://www.reedsmith.com/en" target="_blank" class="d-block m-auto">
						<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/reed-smith.png" class="img-fluid" alt="Reed Smith"/>
					</a>
			</div>



		</div>
	</div>


				<p class="text-uppercase mb-0 text-center pt-5">Institute For Well-Being In Law</p>
				<h4 class="card__title text-center mb-2">Founding Champions:</h4>




	<div class="container container-fluid container--max pb-5 mb-2">
		<div class="row justify-content-center">
			
			<div class="col-12 col-sm-6 col-lg-4 p-4 m-auto text-center">
				<a href="https://www.orrick.com/" target="_blank" class="d-block m-auto">
					<img src="https://lawyerwellbeing.net/wp-content/uploads/2021/04/orrick.png" class="img-fluid" alt="Orrick"/>
				</a>
			</div>
		</div>
	</div>


</section>


<?php get_footer(); ?>
