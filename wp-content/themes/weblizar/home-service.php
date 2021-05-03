	<?php $wl_theme_options = weblizar_get_options(); ?>
<!-- service section -->
		<section class="servicios">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="center-title">
						<?php if($wl_theme_options['subtitulo-home-service']!='') { ?>
						<div class="heading-title">
							<h3 class="subtitulo-white"><?php echo esc_html($wl_theme_options['subtitulo-home-service']); ?></h3>
						
						
						</div>
						<?php } ?>
						<?php if($wl_theme_options['titulo-home-service']!='') { ?>
						<h1 class="titulo-white"> <?php echo html_entity_decode(get_theme_mod('titulo-home-service' , $wl_theme_options['titulo-home-service'])); ?></h1>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php if($wl_theme_options['service_home'] == 'on') { ?>
		<div class="space-sep60"></div>	
		<div class="container">
			<div class="row">
				<?php if($wl_theme_options['service_1_title'] || $wl_theme_options['service_1_icons']) { ?>
				<div class="col-xs-12  col-sm-6 col-md-3">
					<div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">	
						<?php if($wl_theme_options['service_1_title']) { ?>
							<img src="<?php echo esc_url($wl_theme_options['service_1_icons']); ?>" class="" alt="Sanilite Nutrición">
							<h4 class="servicio-subt-blanco">
						
						<?php echo esc_html($wl_theme_options['service_1_title']);   ?></h4>

						<hr class="hr-blanco-servicios">
						<?php } ?>
						<div class="content-box-text service_1_text">
							<?php if($wl_theme_options['service_1_text']) { echo html_entity_decode(get_theme_mod('service_1_text' , $wl_theme_options['service_1_text'])); } ?>
							<div>
								<a href="<?php if($wl_theme_options['service_1_link'])
								 { echo esc_url($wl_theme_options['service_1_link']); } ?>" 
								 class="read-more "> Ver más<span> </a></div>
						</div>
					</div>
				</div>
				<?php } if($wl_theme_options['service_2_title'] || $wl_theme_options['service_2_icons']) { ?>
				<div class=" col-xs-12  col-sm-6 col-md-3">
					<div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">	
						<?php if($wl_theme_options['service_2_title']) { ?>
							<img src="<?php echo esc_url($wl_theme_options['service_2_icons']); ?>" class="" alt="Sanilite Nutrición"> <br>
						<h4 class="servicio-subt-blanco">
						
						<?php echo esc_html($wl_theme_options['service_2_title']);   ?></h4><hr class="hr-blanco-servicios">
						<?php } ?>
						<div class="content-box-text service_1_text">
							<?php if($wl_theme_options['service_2_text']) { echo html_entity_decode(get_theme_mod('service_2_text' , $wl_theme_options['service_2_text'])); } ?>
							<div><a href="<?php if($wl_theme_options['service_2_link']) 
							{ echo esc_url($wl_theme_options['service_2_link']); } ?>" class="read-more "> Ver más<span> </a></div>
						</div>
					</div>
				</div>
				<?php } if($wl_theme_options['service_3_title'] || $wl_theme_options['service_3_icons']) { ?>
				<div class="col-xs-12  col-sm-6 col-md-3">
					<div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">	
						<?php if($wl_theme_options['service_3_title']) { ?>
							<img src="<?php echo esc_url($wl_theme_options['service_3_icons']); ?>" class="" alt="Sanilite Nutrición"> <br>
						<h4 class="servicio-subt-blanco">
						
						<?php echo esc_html($wl_theme_options['service_3_title']);   ?></h4><hr class="hr-blanco-servicios">
						<?php } ?>
						<div class="content-box-text service_1_text">
							<?php if($wl_theme_options['service_3_text']) { echo html_entity_decode(get_theme_mod('service_3_text' , $wl_theme_options['service_3_text'])); } ?>
							<div><a href="<?php if($wl_theme_options['service_3_link']) {
								 echo esc_url($wl_theme_options['service_3_link']); } ?>" class="read-more "> Ver más<span> </a></div>
						</div>
					</div>
				</div>
				<?php } if($wl_theme_options['service_4_title'] || $wl_theme_options['service_4_icons']) { ?>
				<div class="col-xs-12  col-sm-6 col-md-3">
					<div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">	
						<?php if($wl_theme_options['service_4_title']) { ?>
							<img src="<?php echo esc_url($wl_theme_options['service_4_icons']); ?>" class="" alt="Sanilite Nutrición"> <br>
						<h4 class=" servicio-subt-blanco">
						
						<?php echo esc_html($wl_theme_options['service_4_title']);   ?></h4><hr class="hr-blanco-servicios">
						
							<?php } ?>
						<div class="content-box-text service_1_text">
							<?php if($wl_theme_options['service_4_text']) { echo html_entity_decode(get_theme_mod('service_4_text' , $wl_theme_options['service_4_text'])); } ?>
							<div><a href="<?php if($wl_theme_options['service_4_link']) 
							{ echo esc_url($wl_theme_options['service_4_link']); } ?>" class="read-more "> Ver más <span> </a></div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
		

		</section>

		<section class="service-belleza-home">

		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="center-title">
						<?php if($wl_theme_options['subtitulo-home-service-belleza']!='') { ?>
						<div class="heading-title">
							<h3 class="subtitulo-blue"><?php echo esc_html($wl_theme_options['subtitulo-home-service-belleza']); ?></h3>
						</div>
						<?php } ?>
						<?php if($wl_theme_options['titulo-home-service-belleza']!='') { ?>
						<h1 class="titulo-black"> <?php echo html_entity_decode(get_theme_mod('titulo-home-service-belleza' , $wl_theme_options['titulo-home-service-belleza'])); ?></h1>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="tablas " style="  padding-top: 35px;">

			<div class="row justify-content-center">
			<ul class="tabs text-center">
     			<li><a href="#tab1">Belleza Faciál</a></li>
    			  <li><a href="#tab3">Belleza Corporal</a></li>
				 <li><a href="#tab2">Alopecia</a></li>
			</ul>
			</div>

				<div class="tab_container">
   				 	<div class="tab_content" id="tab1">
       				<div class="row">
						   <div class="col-xs-12 col-md-6 ">
						   <img class="img-responsive"src="<?php echo esc_url($wl_theme_options['img_1_tabs']); ?>" class="" alt="Sanilite Nutrición">
						   </div>
						   <div class="col-xs-12 col-md-6 margen-responsive-30" >
							   <p class="texto"></p>
							   <li class="blue">Terapía con micreoneddling.</li>
							   <li class="blue">Peeling faciál.</li>
							   <li class="blue">Mesoglow.</li>
							   <li class="blue">Double Chin.</li>
							   <li class="blue">Remodelado faciál.</li>
							   <li class="blue">Rejuvenecimiento con ácido hialuronico.</li>
							   <li class="blue">Fototerapia faciál.</li>
							   <li class="blue">Rejuvenecimiento con células mádre y factores de crecimiento.</li>
							   <li class="blue">Relleno con ácido hialunico.</li>
							   <li class="blue">Toxina botulibica</li>
							   <a href="#"> <button class="btn-slide-blue2">  Ver más</button></a>
							   
						   </div>
					   </div>
    				</div>
   			 	<div class="tab_content" id="tab3">
					<div class="row">
						   <div class="col-xs-12 col-md-6">
						   <img class="img-responsive"src="<?php echo esc_url($wl_theme_options['img_2_tabs']); ?>" class="" alt="Sanilite Nutrición">
						   </div>
						   <div class="col-xs-12 col-md-6 margen-responsive-30">
							   <p class="texto"></p>
							   <li class="blue">Mesoterapia</li>
							   <li class="blue">Radiofrecuencia</li>
							   <li class="blue">Ultrasonido</li>
							   
							   <a href="#"> <button class="btn-slide-blue2">  Ver más</button></a>
							   
						   </div><!--end-col-->
						   
					   </div><!--end-row-->
				</div><!--end-tabs-->
				<div class="tab_content" id="tab2">
					<div class="row">
						   <div class="col-xs-12 col-md-6">
						   <img class="img-responsive"src="<?php echo esc_url($wl_theme_options['img_3_tabs']); ?>" class="" alt="Sanilite Nutrición">
						   </div>
						   <div class="col-xs-12 col-md-6 margen-responsive-30">
							   <p class="texto"></p>
							   <li class="blue">Terapía con micreoneddling.</li>
							   <li class="blue">Peeling faciál.</li>
							   <li class="blue">Mesoglow.</li>
							   
							   <a href="#"> <button class="btn-slide-blue2">  Ver más</button></a>
							   
						   </div><!--end-col-->
						   
					   </div><!--end-row-->
				</div><!--end-tabs-->




				</div> <!-- end tab container-->


			</div>
			
		</div> <!-- end container-->
		
		</section>
		
		<section class="galeria">

		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="center-title">
						<?php if($wl_theme_options['subtitulo-home-galery']!='') { ?>
						<div class="heading-title">
							<h3 class="subtitulo-white"><?php echo esc_html($wl_theme_options['subtitulo-home-galery']); ?></h3>
						</div>
						<?php } ?>
						<?php if($wl_theme_options['titulo-home-service-belleza']!='') { ?>
						<h1 class="titulo-white"> <?php echo html_entity_decode(get_theme_mod('titulo-home-galery' , $wl_theme_options['titulo-home-galery'])); ?></h1>
						<?php } ?>
						<hr class="hr-blanco-galery">
					</div>
				</div>
			</div>
			<div class="space-sep60"></div>	

			<div class="row">
			<div class="col-xs-12 col-md-6 web-oculto">
					<div class="row justify-content-center">
					<div class="col-xs-6">
						<img src="<?php echo esc_url($wl_theme_options['img_1_galery']); ?>" class="img-responsive"  alt="antes">

						</div>
					
					<div class="col-xs-6">
						<img src="<?php echo esc_url($wl_theme_options['img_2_galery']); ?>"  class="img-responsive" alt="después"></div>
					</div><!--end row-->
				</div><!--end ccolr-->
				
				<div class="col-xs-12 col-md-6 ">
				<?php if($wl_theme_options['galery-home-text']!='') { ?>
						<div class="heading-title">
							<p class="white margen-responsive-30"><?php echo esc_html($wl_theme_options['galery-home-text']); ?></p>
						</div>
						<?php } ?>
						<a  style="color:white; margin-top:35px;" href="<?php if($wl_theme_options['galery-home-btn']) 
						{ echo esc_url($wl_theme_options['galery-home-btn']); } ?>" class="btn-tranparent-white ">
							<span> <?php echo esc_html($wl_theme_options['galery-home-btn']); ?></span></a></div>
						<div>
							

				</div>
				<div class="col-xs-12 col-md-6 movil-oculto">
					<div class="row justify-content-center">
					<div class="col-xs-6">
						<img src="<?php echo esc_url($wl_theme_options['img_1_galery']); ?>" class="img-responsive"  alt="antes">

						</div>
					
					<div class="col-xs-6">
						<img src="<?php echo esc_url($wl_theme_options['img_2_galery']); ?>"  class="img-responsive" alt="después"></div>
					</div><!--end row-->
				</div><!--end ccolr-->
			</div><!--end row-->

			<div class="space-sep60"></div>	

		</div> <!--end container-->

		
			
		</section>

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