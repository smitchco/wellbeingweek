<?php

/**
 * Template Name: WBIL Photo Wall
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

	get_header();

	get_template_part( 'template-parts/wbil', 'head'); 
	get_template_part( 'template-parts/wbil', 'hero');

    //print_r(get_field('photo_wall_gallery')); die; 
?>
 
<script>

jQuery('document').ready(function() {

    function progressHandling(e) {
        var percent = 0;
        var position = e.loaded || e.position;
        console.log(position)
        var total = e.total;
        var progress_bar_id = "#progress-wrp";
        if (e.lengthComputable) {
            percent = Math.ceil(position / total * 100);
        }
        // update progressbars classes so it fits your code
        jQuery(progress_bar_id + " .progress-bar").css("width", +percent + "%");
        jQuery(progress_bar_id + " .status").text(percent + "%");
    }

    jQuery("#upload_form").on('submit', function(e) {
        e.preventDefault(); 

        var file_data = jQuery('#file_upload').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('file', file_data);
        form_data.append('name', jQuery('#name').val());
        form_data.append('company', jQuery('#company').val());
        form_data.append('post_id', <?php echo $post->ID; ?>);
        form_data.append('action','photo_upload');
        
        if(jQuery('#file_description').val() != '') {
            form_data.append('description', jQuery('#file_description').val());
        }
                                
        jQuery.ajax({
        url: ajax.url,
        dataType: 'text',
        // xhr: function () {
        //     var myXhr = jQuery.ajaxSettings.xhr();
        //     myXhr.open('POST', ajax.url, true);

        //     jQuery('#progress-wrp').removeClass('d-none');
        //     jQuery('.form__wrap').addClass('d-none');

        //     if (myXhr.upload) {
        //         myXhr.upload.addEventListener('progress', progressHandling, false);
        //     }
        //     return myXhr;
        // }, 
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        beforeSend : function(){
            jQuery('#progress-wrp').removeClass('d-none').addClass('d-flex');
            jQuery('.form__wrap').addClass('d-none');
            jQuery('.modal-footer').addClass('d-none');
        },
        success: function(response){
            jQuery('[data-response]').prepend(response);
            setTimeout(function() {
                jQuery('[data-modal-close-button]').click();
                jQuery('#progress-wrp').addClass('d-none').removeClass('d-flex');
                jQuery('.form__wrap').removeClass('d-none');
                jQuery('.modal-footer').removeClass('d-none');
            }, 1000)
        }
        });
    });
});
</script>


<main class="main__wbil">

    <section>
        <div class="container-fluid">
            <div class="row justify-content-center h-100">
                <div class="col-12 col-lg-auto">
                    <?php get_template_part( 'template-parts/wbil', 'sidebar' );  ?>
                </div>
                <div class="col-12 col-lg">
                    <div class="row">
                        <div class="col">
                            <div class="px-lg-5">
                                <h1 class="h1 pt-5">Community Photo Wall</h1>
                                <p class="text__callout">You're invited to upload photos here showing your participation in Mini Well-Being Experiments during WWIL, other WWIL activities, and depicting your own well-being strategies.</p>
                                <hr/>
                                <button type="button" class="btn__wbil" data-toggle="modal" data-target="#upload-modal">Add Your Photo!</button>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">

                                <div class="row my-5 pb-5 no-gutters" data-response>

                                <?php 
                                    foreach( array_reverse(get_field('photo_wall_gallery')) as $image_id ): 
                                        get_template_part( 'template-parts/wbil', 'photo-card', ['image_id' => $image_id]); 
                                    endforeach; 
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="modal" tabindex="-1" role="dialog" id="upload-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-4">
            <form enctype="multipart/form-data" id="upload_form">
                <div class="modal-header p-0 flex-column">
                    <h4 class="text-uppercase font-condensed text-purple">Add Your Photo!</h4>
                    <p>Use the form below to add your image and description to the wall.</p>
                </div>
                <div class="modal-body">
                    <div class="form__wrap">

                        <div class="my-2">
                            <label><strong>Your Name</strong></label><br/>
                            <input class="form-control" required id="name" type="text" name="name" placeholder="Your Name"/>
                        </div>

                        <div class="my-2">
                            <label><strong>Your Company</strong> <small>(optional)</small></label><br/>
                            <input class="form-control" id="company" type="text" name="company" placeholder="Your Company"/>
                        </div>

                        <div class="my-2">
                            <label><strong>Photo</strong></label><br/>
                            <div class="upload__wrap p-4">
                                <input required id="file_upload" type="file" name="file_upload" accept=".png,.jpg,.jpeg"/>
                            </div>
                        </div>
                       
                        <div class="my-2">
                            <label><strong>Description</strong> <small>(optional)</small></label>
                            <textarea id="file_description" class="form-control" name="file_description" rows="4" cols="50"></textarea>
                        </div>
                    </div>

                    <div id="progress-wrp" class="text-center justify-content-center d-none">
                        <!-- <div class="progress-bar"></div>
                        <div class="status">0%</div> -->
                        <div  style="width: 100px;">
                            <?php echo file_get_contents( get_stylesheet_directory() . "/inc/loading.svg" ); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn__wbil">
                        Upload
                    </button>
                    <button data-modal-close-button type="button" class="btn__wbil--secondary" data-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>          



<?php 
	get_template_part( 'template-parts/wbil', 'footer'); 
	get_footer(); 
?>