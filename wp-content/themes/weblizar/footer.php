<?php 
 /* The template for displaying the footer
 *
 *
 *
 * @package WordPress
 * @subpackage weblizar
 */
?>
<footer>
    <div class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <div class="row">
				<?php 
				if(is_active_sidebar( 'footer-widget-area' ))
				{ 
					dynamic_sidebar( 'footer-widget-area' ); 
				} else 
				{ ?>
				<!-- Footer Col. -->
						<div class="col-md-12 col-sm-12 col-md-5 footer-col">
							<div class="footer-content">
								<div class="footer-content-logo">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt=""/>
								</div>
								<div class="footer-content-text">
									<p style="font-size:15px;">Porque tu salud es una razón de peso, en Sanilite Health Center queremos ayudarte a verte y sentirte bien, ¡Tu bienestar es nuestra mayor satisfacción!</p>
									
								</div>
							</div>
						</div>
						<!-- //Footer Col.// -->

						<!-- Footer Col. -->
						<div class="col-md-3 col-sm-3 footer-col">
							<div class="footer-title">
								Nuestros Links
							</div>
							<div class="footer-content">
								<ul class="contact-info">
									<li><a href="index.php">INICIO</a></li>
									<li><a href="">NOSOTROS</a></li>
									<li><a href="">SERVICIOS</a></li>
									<li><a href="">BLOG</a></li>
									<li><a href="">GALERIA</a></li>
									<li><a href="">CONTACTO</a></li>
								</ul>
							</div>
						</div>
						<!-- //Footer Col.// -->
						<!-- Footer Col. -->
						<div class="col-md-3 col-sm-3 footer-col">
							<div class="footer-title">
								CONTACTO
							</div>
							<div class="footer-content">
								<ul class="contact-info">
									<li>
										<div class="contact-title">
											<i class="fa fa-map-marker"></i>Dirección
										</div>
										<div class="contact-details">
									<a href="https://goo.gl/maps/srLRFoHKJV5WXu3GA">Av. dela Clínica #2025. Col Sertoma 6438 Mty. NL</a>	</div>
									</li>
									<li>
										<div class="contact-title">
											<i class="fa fa-phone"></i>Teléfono
										</div>
										<div class="contact-details"><a href="tel:8110770782">81 1077 0782</a></div>
									</li>
									<li>
										<div class="contact-title">
											<i class="fa fa-envelope"></i>E-mail
										</div>
										<div class="contact-details"><a href="mailto:sanilite@gmail.com">sanilite@gmail.com</a></div>
									</li>
									<li>
										<div class="contact-title">
											<i class="fa fa-globe"></i>Facebook
										</div>
										<div class="contact-details"><a href="https://www.facebook.com/SaniliteHealthCenter/" target="_blank">SaniliteHealthCenter</a></div>
									</li>
									
								</ul>
							</div>
						</div>	<!-- Footer Col. -->
								
				<?php } ?>
                </div>			
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
				<?php $wl_theme_options = weblizar_get_options(); ?>
                    <div class="col-md-6 col-sm-6">
                        <div class="copyright-text weblizar_footer_customizations"><?php 
							if($wl_theme_options['footer_customizations']) { echo esc_html($wl_theme_options['footer_customizations']); }
							?>
						</div>
                    </div>
                    <div class="weblizar_social_media_enbled">
					<?php if($wl_theme_options['footer_section_social_media_enbled'] == 'on') { ?>
                    <div class="col-md-6 col-sm-6"> 
				<div class="copyright-text weblizar_footer_customizations">
				<a  rel="nofollow" href="<?php if($wl_theme_options['politica_privacidad']) { echo esc_url($wl_theme_options['politica_privacidad']); } ?>" target="_blank">
							<?php if($wl_theme_options['developed_by_weblizar_text']) { echo esc_html($wl_theme_options['politica_privacidad']); } ?>
							</a>
					<?php if($wl_theme_options['developed_by_text']) { echo "|" .esc_html($wl_theme_options['developed_by_text']); } ?>
					
							<a  rel="nofollow" href="<?php if($wl_theme_options['developed_by_link']) { echo esc_url($wl_theme_options['developed_by_link']); } ?>" target="_blank">
							<?php if($wl_theme_options['developed_by_weblizar_text']) { echo esc_html($wl_theme_options['developed_by_weblizar_text']); } ?>
							</a>
				</div>
                    </div>
					<?php } ?>
				</div>
                </div>
            </div>
        </div>	
		<?php if($wl_theme_options['custom_css']) ?>
		<style type="text/css">
			<?php { echo esc_html($wl_theme_options['custom_css']); } ?>
		</style>		
   <span id="blog_count" style="display:none;"><?php global $published_posts; echo esc_attr($wl_theme_options['blog_count']).' ,'.esc_attr($published_posts); ?></span> </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

