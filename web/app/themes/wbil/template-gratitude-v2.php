<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
  * Template Name: Gratitude v2

 * @since   1.0.0
 *
 * @package The7\Templates
 */

defined( 'ABSPATH' ) || exit;

$config = presscore_config();
$config->set( 'template', 'page' );

get_header();

while (have_posts()): 
    the_post(); 
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/home.css' ?>' type='text/css' media='all' />


<style>
    [type=radio] { 
    position: absolute;
    opacity: 100%!imporatant;
    width: 15px;
    height: 15px;
    
    }

    [type=radio] + img {
    cursor: pointer;
    }

    [type=radio]:checked + img {
        outline: 5px solid #50BA7A!imporatant;
    width: 15px;;
    }

    span.wpcf7-form-control-wrap.radio-977 {
        display: block;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .step-indicators-wrap {
        display: flex;
        flex-wrap: wrap;
        border-top: 1px solid #bbbbbb;
        padding-top: 20px;
    }
    .step-indicators {
        display: flex;
        margin-left: auto;
        margin-right: auto; 
        margin-bottom: 30px;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .step-indicators span {
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 100%; 
        background: #eeeeee;
        margin-left: 5px;
        margin-right: 5px;
    }
    .step-indicators span.active {
        background: #50BA7A; 
    }
    .step-title {
        text-align: center; 
        flex: 0 0 100%; 
        max-width: 100%;
        font-weight: bold;
        font-style: italic;
        font-size: 14px;
        margin-bottom: 0;
        padding-bottom: 0; 
    }

    h4 {
        font-weight: bold; 
        font-size: 20px;
        color: #000000!important;
    }

    .btn {
        margin-top: 20px;
        margin-bottom: 40px; 
        background: #55B97C!important;;
        color: #FFFFFF!important;
    }

</style>

<script>
    
    let images = [
        <?php 

            if( have_rows('image_options') ):
                while ( have_rows('image_options') ) : the_row();
                    $image = get_sub_field('image');
                        echo "{";
                        echo "id: " . $image['ID'] . ",";
                        echo "url: '" . wp_get_attachment_image_src($image['ID'], 'email_banner_preview')[0] . "'";
                        echo "},";
                endwhile;
            endif;  
        ?>
    ];

    let images_html = '<div class="row">';

    for (let i = 0; i < images.length; i++ ) {

        images_html += '\
            <div class="col-12 col-lg-6 wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first last">\
                <label style="position-relative">\
                    <input type="radio" name="radio-977" value="' + images[i].id + '" checked="checked" >\
                    <img src="' + images[i].url + '" class="img-fluid"/>\
                </label>\
            </span></div>';
    }

    images_html += '</div>';


    jQuery(document).ready(function() {
        jQuery('.radio-977').html(images_html);

        jQuery('input[type=radio]').removeAttr('checked');

        jQuery('[data-step]').not('[data-step=1]').hide(); 

        jQuery('[data-next-step]').click(function(e) {

            e.preventDefault(); 
            var current_step = parseInt(jQuery(this).parents('[data-step]').data('step'));

            if( current_step < 4 ) {

                jQuery('[data-step='+ current_step +']').hide(); 
                jQuery('span[data-step-indicator='+ current_step +']').removeClass('active'); 

                jQuery('[data-step=' + (current_step + 1) + ']').show(); 
                jQuery('span[data-step-indicator=' + (current_step + 1) + ']').addClass('active'); 

                jQuery('[data-step-count]').html((current_step + 1));
                //jQuery(window).scrollTop(0);
            } 
        });

        jQuery('.wpcf7-submit').click(function() {
            setTimeout( function() {
                var current_step = parseInt(jQuery(this).parents('[data-step]').data('step'));

                jQuery('[data-step=4]').hide(); 
                jQuery('span[data-step-indicator=4]').removeClass('active'); 

                jQuery('[data-step=1]').show(); 
                jQuery('span[data-step-indicator=1]').addClass('active'); 
                jQuery(window).scrollTop(0);
            }, 2000);

        });
 

        //jQuery('form').on

    });
</script>

<section class="container-fluid py-3">
    <div class="row">
        .<div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-md-auto">
            <h1><?php the_title(); ?></h1>     
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-md-auto">
            <div class="mb-3">
                <?php the_content(); ?>
            </div>

            <div class="step-indicators-wrap">
                <p class="step-title">Step <span data-step-count>1</span> of 4</p>
                <div class="step-indicators">
                    <span data-step-indicator="1" class="active"></span>
                    <span data-step-indicator="2"></span>
                    <span data-step-indicator="3"></span>
                    <span data-step-indicator="4"></span>
                </div>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="7080" title="Gratitude Form 2"]'); ?>
        
        </div>
    </div>
   
</section>

<?php 
    endwhile; 
    get_footer(); 
?>
