<?php

/*
* Template Name: contacto
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



<section class="nosotros_nosotros">
    <div class="container">
    <h3 class="green">
                   Acercate a Nosotros
                </h3>
                <p>Nos encanta contestar todas tus dudas, contáctanos!!.</p>
        <div class="row">

            <div class="col-xs-12 col-md-6">
                
                <?php echo do_shortcode( '[ninja_form id=1]' ) ?>
            </div>
            <div class="col-xs-12 col-md-6">
            <?php for($i=1; $i<=5; $i++ ) { ?>
 			<div class="media">
				<div class="imagen-servicio pull-left">
				<?php if($wl_theme_options['contacto_'.$i.'_imagen'] !='') { ?>
                        <img  class="mr-3" src="<?php echo esc_url($wl_theme_options['contacto_'.$i.'_imagen']); ?>">
					<?php } ?> 
				</div>
						
                <div class="enigma_service_detail2 media-body">
                    <?php if($wl_theme_options['contacto_'.$i.'_titulo'] !='') { ?>
					    <h4 class="mt-0_<?php echo esc_attr($i) ?>">
							<a href="<?php echo esc_url($wl_theme_options['contacto_'.$i.'_link']); ?>">
								<?php echo esc_attr($wl_theme_options['contacto_'.$i.'_titulo']); ?>
							</a>
						</h4>
					<?php } ?>

                        <?php if($wl_theme_options['contacto_'.$i.'_texto'] !='') { ?>
                            <a style="color:black;" href="<?php echo esc_url($wl_theme_options['contacto_'.$i.'_link']); ?>">
                        <p><?php echo get_theme_mod('contacto_'.$i.'_texto' , $wl_theme_options['contacto_'.$i.'_texto']); ?>
                        </a>
                        <?php
							} ?></p>
                 </div>
			</div> 
	<?php } ?>
            </div>
        </div>
    </div>
  
</section>
<section class="mapa">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.10408344778!2d-100.35149188566245!3d25.66784421874507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662be00a71801b9%3A0x131306787ac3559!2sCentro+Profesional+Delta!5e0!3m2!1ses!2smx!4v1552151410836" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>




<?php get_footer(); ?>