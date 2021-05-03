<?php

/*
* Template Name: galeria
*/

get_header( );?>

<div class="top-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 page-info">
                <h1 class="h1-page-title"><?php the_title(); ?></h1> <br><br><br>
                <a href="#" >
                 <i class="fas fa-home"></i> </a>
                 <span style="color: #E9EAEE; font-size: 15px;"> / <?php the_title(); ?></span>
            </div>
        </div>
    </div>
</div>
<div class="space-sep20"></div>


<?php $wl_theme_options = weblizar_get_options(); ?>


<section class="section-galery">

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="center-title">
                <?php if($wl_theme_options['subtitulo-section-galery']!='') { ?>
                <div class="heading-title">
                    <h3 class="subtitulo-green"><?php echo esc_html($wl_theme_options['subtitulo-section-galery']); ?></h3>
                </div>
                <?php } ?>
                <?php if($wl_theme_options['titulo-section-galery']!='') { ?>
                <h1 class="titulo-black"> <?php echo html_entity_decode(get_theme_mod('titulo-section-galery' , $wl_theme_options['titulo-section-galery'])); ?></h1>
                <?php } ?>
                <hr style="width:15%;  border:2px solid #B2CA04; text-align:left">
            </div>
        </div>
    </div>

            <div class="row section.gallery"> <br>
            <br>
            
                <?php echo do_shortcode('[gdgallery_gallery id_gallery=1 ]'); ?>
               </div> <br><br><br><br>
             </div><!--end-row-->

    </div>
    
</div> <!-- end container-->

</section>

<?php get_footer( );?>

<script>


	jQuery(document ).ready(function( $ ) {

		//When page loads...
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content

		//On Click Event
		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content

			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to
				
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});
});</script>