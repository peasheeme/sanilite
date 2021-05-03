<?php $wl_theme_options = weblizar_get_options(); 
 if($wl_theme_options['slider_image_speed']!='')
	{	
	echo '<script type="text/javascript">
		jQuery(document ).ready(function( $ ) {
		jQuery("#myCarousel" ).carousel({
			interval:'.esc_attr($wl_theme_options['slider_image_speed']).'
		    });
	   });
	</script>';
	} ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
     
      <div class="carousel-inner">
	  <?php $wl_theme_options = weblizar_get_options();
		$ImageUrl1 = WL_TEMPLATE_DIR_URI ."/images/slide-1.jpg";
		$ImageUrl2 = WL_TEMPLATE_DIR_URI ."/images/slide-2.jpg";
		$ImageUrl3 = WL_TEMPLATE_DIR_URI ."/images/slide-3.jpg";  ?>
        <div class="item active">
			<?php if($wl_theme_options['slide_image']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['slide_image']); ?>" class="img-responsive" alt="First slide">
          <?php } else { ?>
		  <img src="<?php echo esc_url($ImageUrl1); ?>" class="img-responsive" alt="First slide">
		  <?php } ?>		  
		  <div class="container">
            <div class="carousel-caption ">

					<!--	<div class="row mostrar-nav-movil">
								<div class="">
								<?php if($wl_theme_options['web_mail']!='') { ?>						
								<div class="col-xs-3  cabecera-contacto">
									<i class="fa fa-envelope"></i> 	
								</div>

								<?php } if($wl_theme_options['web_phone']!='') { ?>						
								<div class="col-xs-3  cabecera-contacto">
									<i class="fa fa-phone"></i> 
								</div>
								<?php } if($wl_theme_options['web_location']!=''){ ?>
								<div class="col-xs-3 cabecera-contacto">
								<i class="fas fa-map-marker-alt "></i> 
								</div>	
								<?php } ?>

							
								<div class=" col-xs-3 cabecera-contacto">
									<a href="<?php echo esc_url($wl_theme_options['social_media_facebook_link']); ?>" 
								title="facebook" target="_blank" >
								<i class="fab fa-facebook"></i></a>
												
								</div>	
							</div> end container 
					</div>  end row -->
										
			<?php
			
			if($wl_theme_options['slide_tips']!='') {  ?>
				<h3 class="weblizar_slide_tips"><?php echo esc_html($wl_theme_options['slide_tips']); ?>
			</h3>
			<?php }
			if($wl_theme_options['slide_title']!='') {  ?>
							<h1 class="weblizar_slide_title"><?php echo esc_html($wl_theme_options['slide_title']); ?>
						</h1>
			<?php } 	
			 if($wl_theme_options['slide_desc_3']!='') {  ?>
			 <p class="weblizar_slide_desc_3"><?php echo esc_html($wl_theme_options['slide_desc_3']); ?></p>
			 <?php }
				if($wl_theme_options['slide_btn_text']!='') { ?>
				<div class="row">
						<span>	<a class="btn-slide-green"
								 href="<?php if($wl_theme_options['slide_btn_link']!='') { echo esc_url($wl_theme_options['slide_btn_link']); } ?>" role="button">
									 <?php echo esc_html($wl_theme_options['slide_btn_text']); ?></a></span>
									 <span>
									 <a class="btn-slide-blue"
								 href="<?php if($wl_theme_options['slide_info_link']!='') { echo esc_url($wl_theme_options['slide_info_link']); } ?>" role="button">
									 <?php echo esc_html($wl_theme_options['slide_btn_info']); ?></a>
									 </span>
				</div>
              
			  <?php } ?>
            </div>
          </div>
        </div>		
        <div class="item">		
			<?php if($wl_theme_options['slide_image_1']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['slide_image_1']); ?>" class="img-responsive" alt="Second slide">
          <?php } else { ?>
		  <img src="<?php echo esc_url($ImageUrl2); ?>" class="img-responsive" alt="Second slide">
		  <?php } ?>
          <div class="container">
            <div class="carousel-caption">
			<?php
			
			
			if($wl_theme_options['slide_tips_1']!='') {  ?>
				<h2 class="weblizar_slide_tips"><?php echo esc_html($wl_theme_options['slide_tips_1']); ?>
			</h2>
			<?php }
			
			if($wl_theme_options['slide_title_1']!='') {  ?>
              <h1 class="weblizar_slide_title"><?php echo esc_html($wl_theme_options['slide_title_1']); ?></h1>
			<?php } 	
			 if($wl_theme_options['slide_desc_1']!='') {  ?>
			 <p class="weblizar_slide_desc_1"><?php echo esc_html($wl_theme_options['slide_desc_1']); ?></p>
			 <?php }
				if($wl_theme_options['slide_btn_text_1']!='') { ?>
             	<div class="row">
						<span>	<a class="btn-slide-green"
								 href="<?php if($wl_theme_options['slide_btn_link_1']!='') { echo esc_url($wl_theme_options['slide_btn_link_1']); } ?>" role="button">
									 <?php echo esc_html($wl_theme_options['slide_btn_text_1']); ?></a></span>
									 <span>
									 <a class="btn-slide-blue"
								 href="<?php if($wl_theme_options['slide_info_link_1']!='') { echo esc_url($wl_theme_options['slide_info_link_1']); } ?>" role="button">
									 <?php echo esc_html($wl_theme_options['slide_btn_info_1']); ?></a>
									 </span>
				</div>
			  <?php } ?>
            </div>
          </div>
        </div>
		<div class="item">		
			<?php if($wl_theme_options['slide_image_2']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['slide_image_2']); ?>" class="img-responsive" alt="Third slide">
          <?php } else { ?>
		  <img src="<?php echo esc_url($ImageUrl3); ?>" class="img-responsive" alt="Third slide">
		  <?php } ?>
          <div class="container">
            <div class="carousel-caption">

			<?php 
				if($wl_theme_options['slide_tips_2']!='') {  ?>
					<h3 class="weblizar_slide_tips"><?php echo esc_html($wl_theme_options['slide_tips_2']); ?>
				</h3>
				<?php }

			if($wl_theme_options['slide_title_2']!='') {  ?>
              <h1 class="weblizar_slide_title"><?php echo esc_html($wl_theme_options['slide_title_2']); ?></h1>
			<?php } 	
			 if($wl_theme_options['slide_desc_2']!='') {  ?>
			 <p class="weblizar_slide_desc_2"><?php echo esc_html($wl_theme_options['slide_desc_2']); ?></p>
			 <?php }
				if($wl_theme_options['slide_btn_text_2']!='') { ?>
              	<div class="row">
						<span>	<a class="btn-slide-green"
								 href="<?php if($wl_theme_options['slide_btn_link_2']!='') { echo esc_url($wl_theme_options['slide_btn_link_2']); } ?>" role="button">
									 <?php echo esc_html($wl_theme_options['slide_btn_text_2']); ?></a></span>
									 <span>
									 <a class="btn-slide-blue"
								 href="<?php if($wl_theme_options['slide_info_link_2']!='') { echo esc_url($wl_theme_options['slide_info_link_2']); } ?>" role="button">
									 <?php echo esc_html($wl_theme_options['slide_btn_info_2']); ?></a>
									 </span>
				</div>
			  <?php } ?>
            </div>
          </div>
        </div>
		
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div><!-- /.carousel -->
		
		<section>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xs-12 col-sm-4 card-servicios-left text-center">
					<img src="<?php echo esc_url($wl_theme_options['servicio_1']); ?>" class="" alt="SSanilite Nutrición">
						<h3 class="card-titulo">Sanilite Nutrición</h3><hr style="width:20%; border:2px solid #61A60E;"></div>
					<div class="col-xs-12 col-sm-4  card-servicios-center">
					<img src="<?php echo esc_url($wl_theme_options['servicio_2']); ?>" class="" 
					alt="SSanilite Nutrición"><h3 class="card-titulo">Sanilite Belleza Facial</h3> <hr style="width:20%; border:2px solid #61A60E;"></div>
					<div class="col-xs-12 col-sm-4  card-servicios-right">
					<img src="<?php echo esc_url($wl_theme_options['servicio_3']); ?>" class=""
					 alt="SSanilite Nutrición"><h3 class="card-titulo">Sanilite Belleza Corporal</h3><hr style="width:20%; border:2px solid #61A60E;"></div>
				</div>
			</div>
		</section>