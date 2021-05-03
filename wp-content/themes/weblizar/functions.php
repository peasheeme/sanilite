<?php
/*	*Theme Name	: Weblizar
	*Theme Core Functions and Codes
*/	
	/**Includes reqired resources here**/
	define('WL_TEMPLATE_DIR_URI', get_template_directory_uri());
	define('WL_TEMPLATE_DIR', get_template_directory());
	define('WL_TEMPLATE_DIR_CORE' , WL_TEMPLATE_DIR . '/core');
	require( WL_TEMPLATE_DIR_CORE . '/menu/wp_bootstrap_navwalker.php' ); // for Default Menus
	require( WL_TEMPLATE_DIR_CORE . '/menu/default_menu_walker.php' ); // for Default Menus
	require( WL_TEMPLATE_DIR_CORE . '/comment-box/comment-function.php' ); //for comments
	require(get_template_directory().'/customizer.php');
	require get_template_directory() . '/core/custom-header.php';	
	/*
	if (is_admin()) {
	require_once('core/admin/admin.php');
   }*/
	//Sane Defaults
	function weblizar_default_settings()
	{
		$ImageUrl1 = WL_TEMPLATE_DIR_URI ."/images/slide-1.jpg";
		$ImageUrl2 = WL_TEMPLATE_DIR_URI ."/images/slide-2.jpg";
		$ImageUrl3 = WL_TEMPLATE_DIR_URI ."/images/slide-3.jpg";

		$ImageUrl4 = WL_TEMPLATE_DIR_URI ."/images/nutricion.png";
		$ImageUrl5 = WL_TEMPLATE_DIR_URI ."/images/facial.png";
		$ImageUrl6 = WL_TEMPLATE_DIR_URI ."/images/corp.png";

		$ImageUrl7 = WL_TEMPLATE_DIR_URI ."/images/s.png";
		$ImageUrl8 = WL_TEMPLATE_DIR_URI ."/images/s2.png";
		$ImageUrl9 = WL_TEMPLATE_DIR_URI ."/images/s3.png";
		$ImageUrl10 = WL_TEMPLATE_DIR_URI ."/images/s4.png";
		$ImageUrl11 = WL_TEMPLATE_DIR_URI ."/images/s5.png";
		$ImageUrl12= WL_TEMPLATE_DIR_URI ."/images/c1.png";
		$ImageUrl13= WL_TEMPLATE_DIR_URI ."/images/nosotros1.jpg";
		$ImageUrl14= WL_TEMPLATE_DIR_URI ."/images/bg-green.png";
		$ImageUrl15= WL_TEMPLATE_DIR_URI ."/images/bg-blue.png";
		$ImageUrl16= WL_TEMPLATE_DIR_URI ."/images/after.png";
		$ImageUrl17= WL_TEMPLATE_DIR_URI ."/images/before.png";
		$ImageUrl18= WL_TEMPLATE_DIR_URI ."/images/tabs_1.png";
		$ImageUrl19= WL_TEMPLATE_DIR_URI ."/images/tabs_2.png";
		$ImageUrl20= WL_TEMPLATE_DIR_URI ."/images/tabs_3.png";

		
		$ImageUrl21= WL_TEMPLATE_DIR_URI ."/images/c2.png";
		$ImageUrl22= WL_TEMPLATE_DIR_URI ."/images/c3.png";
		$ImageUrl23= WL_TEMPLATE_DIR_URI ."/images/c4.png";
		$ImageUrl24= WL_TEMPLATE_DIR_URI ."/images/c5.png";


		$wl_theme_options=array(
				//Logo and Fevicon header	
				'upload__header_image'=>'',				
				'upload_image_logo'=>'',
				'height'=>55,
				'_frontpage' => 'on',
				'width'=>150,
				'blog_count'=>3,
				'web_location'=> __('Av de la Clínica #2025. Col. Serotoma 6438 Monterrey' , 'weblizar'),
				'web_mail'=>'sanilite@gmail.com',
				'web_phone'=>'81 8315 3297',
				'upload_image_favicon'=>'',			
				'custom_css'=>'',
				'snoweffect'=>0,
				'sticky_header'=>0,
				'excerpt_blog'=>'55',
				'slider_image_speed'=>'2000',
				'weblizar_slider'=>'1',
				'slide_image' => $ImageUrl1,
				'slide_tips' => __('Cambia tu estilo de vida','weblizar'),
				'slide_title' => __('NUTRICIÓN CLÍNICA ','weblizar'),
				'slide_desc' => __('es simplemente el texto de relleno de las imprentas y archivos de texto.','weblizar' ),
				'slide_btn_info' => __('Contáctanos','weblizar' ),
				'slide_info_link' => '#',
				'slide_btn_text' => __('Read More','weblizar' ),
				'slide_btn_link' => '#',
				'slide_image_1' => $ImageUrl2,
				'slide_tips_1' => __('Cambia tu estilo de vida','weblizar'),
				'slide_title_1' => __('Vonsectetur, adipisci velit...','weblizar' ),
				'slide_desc_1' => __('satu fakta bahawa pembaca akan terganggus','weblizar' ),
				'slide_btn_info_1' => __('Read More','weblizar' ),
				'slide_info_link_1' => '#',
				'slide_btn_text_1' => __('Read More','weblizar' ),
				'slide_btn_link_1' => '#',
				'slide_image_2' => $ImageUrl3,
				'slide_tips_2' => __('Cambia tu estilo de vida','weblizar'),
				'slide_title_2' => __('echo establecido hace demasia.','weblizar' ),
				'slide_desc_2' => __('es simplemente el texto de relleno de las imprentas y archivos de texto.','weblizar' ),
				'slide_btn_info_2' => __('Read More','weblizar' ),
				'slide_info_link_2' => '#',
				'slide_btn_text_2' => __('Read More','weblizar' ),
				'slide_btn_link_2' => '#',
				'site_intro_title'=>__('We are weblizar','weblizar' ),
				'site_intro_text'=>__("Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.",'weblizar' ),
				'blog_title'=>__('Latest Blog','weblizar' ),
				'blog_text'=>__("Lorem Ipsum is simply dummy text of the printing and typesetting industry..",'weblizar' ),
				'blog_home' => 'on',
				'slide_desc_3' => __('es simplemente el texto de relleno de las imprentas y archivos de texto.','weblizar' ),
				//Product-title
				'product_title'=>'',


				//Header services

				'servicio_1' => $ImageUrl4,
				'servicio_2' => $ImageUrl5,
				'servicio_3' => $ImageUrl6,
				'service_home' => 'on',
				'titulo-home-service' => __('Brindamos los mejores planes personalizados','weblizar'),
				'subtitulo-home-service' => __('Sanilite Nutrición','weblizar'),

				'service_1_title'=>__("Nutrición Clínica",'weblizar' ),
				'service_1_icons'=> $ImageUrl7, 
				'service_1_text'=>__("Prevención, diagnóstico y tratamiento de los cambios nutricionales y metabólicos relacionados con enfermedades agudas o crónicas y con condiciones causadas por un...",'weblizar' ),
				'service_1_link'=>"#",
				
				'service_2_title'=>__("Enfermedades Crónicas",'weblizar' ),
				'service_2_icons'=> $ImageUrl8,
				'service_2_text'=>__("El tratamiento se lleva a cabo por medio de planes de alimentación personalizados, si el paciente lo requiere se maneja soporte nutricional enteral (por estomago) y parenteral (por vena).",'weblizar' ),
				'service_2_link'=>"#",
				
				'service_3_title'=>__("Perdida de Peso",'weblizar' ),
				'service_3_icons'=> $ImageUrl9,
				'service_3_text'=>__("Planes personalizados de alimentación además de un adecuado plan para pérdida de peso recibirías couching nutricional impartido por médicos expertos para asegurar que jamás...",'weblizar' ),
				'service_3_link'=>"#",
				
				'service_4_title'=>__("Suplementación Deportiva",'weblizar' ),
				'service_4_icons'=> $ImageUrl10,
				'service_4_text'=>__("Acércate a nosotros para recibir asesoría así que realices actividad en un parque, un gimnasio o seas deportista de alto rendimiento, seas joven o adulto mayor. Permítenos asesorarte para...",'weblizar' ) ,
				'service_4_link'=>"#",

				// ssanilite belleza home
				'titulo-home-service-belleza' => __('Brindamos las mejores técnicas de belleza','weblizar'),
				'subtitulo-home-service-belleza' => __('Sanilite Belleza','weblizar'),


				// Nosotros sección

				'nosotros_home' => 'on',
				'nosotros_img' => $ImageUrl13,
				// contacto				ImageUrl  12-21 24
				'contacto_1_imagen' => $ImageUrl12,
				'contacto_1_titulo' =>__('Telefono','weblizar'),
				'contacto_1_texto' =>__('(81) 8315 3297','weblizar'),
				'contacto_1_link' =>__('tel:8183153297','weblizar'),
				'contacto_2_imagen' => $ImageUrl21,
				'contacto_2_titulo' =>__('Whats App','weblizar'),
				'contacto_2_texto' =>__('81 1077 0782','weblizar'),
				'contacto_2_link' =>__('','weblizar'),
				'contacto_3_imagen' => $ImageUrl22,
				'contacto_3_titulo' =>__('E-mail','weblizar'),
				'contacto_3_texto' =>__('sanilite@gmail.com','weblizar'),
				'contacto_3_link' =>__('mailto:sanilite@gmail.com','weblizar'),
				'contacto_4_imagen' => $ImageUrl23,
				'contacto_4_titulo' =>__('Ubicación','weblizar'),
				'contacto_4_texto' =>__('Av. de la Clínica 2025 Col. Sertoma 6438 Monterrey Edificio Delta Piso 3, Consultorio #xxx','weblizar'),
				'contacto_4_link' =>__('','weblizar'),
				'contacto_5_imagen' => $ImageUrl24,
				'contacto_5_titulo' =>__('Síguenos','weblizar'),
				'contacto_5_texto' =>__('SaniliteHealthCenter','weblizar'),
				'contacto_5_link' =>__('https://www.facebook.com/SaniliteHealthCenter/','weblizar'),
				

				'img_1_galery'=> $ImageUrl16,
				'img_2_galery'=> $ImageUrl17,
				// Tabs home
				'img_1_tabs'=> $ImageUrl18,
				'img_2_tabs'=> $ImageUrl19,
				'img_3_tabs'=> $ImageUrl20,
				'link_go_home'=>"localhost/inicio",

				// galery -home
				'subtitulo-home-galery'=>__("Sanilite Galería",'weblizar' ),
				'titulo-home-galery'=>__("Antes y Después",'weblizar' ),
				'galery-home-text'=>__('Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','weblizar'),	
				'galery-home-btn'=>__("Ver Galería",'weblizar' ),
				'galery-home-link'=>"#",		
				'img_1_galery'=> $ImageUrl16,
				'img_2_galery'=> $ImageUrl17,
				//section -Gallery
				'subtitulo-section-galery'=>__("Sanilite Galería",'weblizar' ),
				'titulo-section-galery'=>__("Antes y Después",'weblizar' ),
				'galery-section-text'=>__('Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ','weblizar'),	
				'galery-section-btn'=>__("Ver Galería",'weblizar' ),
				'galery-section-link'=>"#",	

				'galery-corporal-titulo-1'=> __('Mesoterapia','weblizar'),
				'galery-corporal-titulo-2'=> __('Radiofrecuencia','weblizar'),
				'galery-corporal-titulo-3'=> __('','weblizar'),
				'galery-corporal-titulo-4'=> __('','weblizar'),
				'galery-corporal-titulo-5'=> __('','weblizar'),
				'galery-corporal-titulo-6'=> __('','weblizar'),


				// blog -home
				'subtitulo-home-blog'=>__("Sanilite Blog",'weblizar' ),
				'titulo-home-blog'=>__("Últimas noticias",'weblizar' ),
				'politica_privacidad'=>__("Política de privacidad",'weblizar' ),
				
				//Social media links
				'social_media_in_contact_page_enabled'=>'on',
				'footer_section_social_media_enbled'=>'on',
				'social_media_twitter_link' =>"#",
				'social_media_facebook_link' =>"#",
				'social_media_linkedin_link' =>"#",
				'social_media_google_plus' =>"#",
				

				'footer_customizations' => __(' @ 2018 Weblizar Theme','weblizar' ),
				'developed_by_text' => __('Theme Developed By','weblizar' ),
				'developed_by_weblizar_text' => __('weblizar','weblizar' ),
				'developed_by_link' => 'http://weblizar.com/',
							
			);
			return apply_filters( 'weblizar_options', $wl_theme_options );
	}

	//Function To get the Options-DATA
	function weblizar_get_options() {
    // Options API
    return wp_parse_args( 
        get_option( 'weblizar_options', array() ), 
        weblizar_default_settings() 
    );
	}
		
	add_action( 'after_setup_theme', 'wl_setup' ); 	
	function wl_setup()
	{	
		global $content_width;
		//content width
		if ( ! isset( $content_width ) ) $content_width = 720; //px
	
		// Load text domain for translation-ready
		load_theme_textdomain( 'weblizar', WL_TEMPLATE_DIR_CORE . '/lang' );	
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' ); //supports featured image
		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'weblizar' ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		// theme support 	
		$args = array('default-color' => '000000',);
		add_theme_support( 'custom-background', $args); 
		add_theme_support( 'automatic-feed-links');
	}
	
	// Logo
		add_theme_support( 'custom-logo', array(
			'width'       => 250,
			'height'      => 250,
			'flex-width'  => true,
			'flex-height'  => true,
		));
		
		$args = array(
	'flex-width'    => true,
	'width'         => 2000,
	'flex-height'    => true,
	'height'        => 100,
	);
	add_theme_support( 'custom-header', $args );
	
	function weblizar_scripts()	{	
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		//** font-awesome-4.7.0 **//
		wp_enqueue_style('font-awesome-latest', WL_TEMPLATE_DIR_URI. '/css/font-awesome-latest/css/fontawesome-all.css');
		wp_enqueue_style('font-awesome-min-css', WL_TEMPLATE_DIR_URI. '/css/font-awesome-4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('bootstrap-min', WL_TEMPLATE_DIR_URI . '/css/bootstrap.min.css');
		wp_enqueue_style('responsive', WL_TEMPLATE_DIR_URI . '/css/responsive.css');
		wp_enqueue_style('flat-blue', WL_TEMPLATE_DIR_URI . '/css/skins/flat-blue.css');	
		wp_enqueue_style('theme-menu', WL_TEMPLATE_DIR_URI . '/css/theme-menu.css');
		wp_enqueue_style('carousel', WL_TEMPLATE_DIR_URI . '/css/carousel.css');
		wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper.min.css');
		
		// Js
		wp_enqueue_script('menu', WL_TEMPLATE_DIR_URI .'/js/menu/menu.js', array('jquery'));
		wp_enqueue_script('bootstrap-js', WL_TEMPLATE_DIR_URI .'/js/bootstrap.js');	
		wp_enqueue_script('swiper-js', get_template_directory_uri() .'/js/swiper.min.js');				
		$count_posts = wp_count_posts();
		$published_posts = $count_posts->publish;
		$wl_theme_options = weblizar_get_options();
		$blog_count = $wl_theme_options['blog_count'];
		wp_enqueue_script('more-posts', WL_TEMPLATE_DIR_URI .'/js/more-posts.js');
		wp_localize_script('more-posts', 'load_more_posts_var', array(
				'counts' => $published_posts,
				'blog_count' => $blog_count
			)
		);
		}
	add_action('wp_enqueue_scripts', 'weblizar_scripts'); 
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 

	// Read more tag to formatting in blog page 
	function weblizar_content_more($more)
	{  global $post;							
	   return '<div class="blog-post-details-item blog-read-more"><a href="'.get_permalink().'">Read More...</a></div>';
	}   
	add_filter( 'the_content_more_link', 'weblizar_content_more' );
	
	/*
	* Weblizar widget area
	*/
	add_action( 'widgets_init', 'weblizar_widgets_init');
	function weblizar_widgets_init() {
	/*sidebar*/
	register_sidebar( array(
			'name' => __( 'Sidebar', 'weblizar' ),
			'id' => 'sidebar-primary',
			'description' => __( 'The primary widget area', 'weblizar' ),
			'before_widget' => '<div class="sidebar-block">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="h3-sidebar-title sidebar-title">',
			'after_title' => '</h3>'
		) );

	register_sidebar( array(
			'name' => __( 'Footer Widget Area', 'weblizar' ),
			'id' => 'footer-widget-area',
			'description' => __( 'footer widget area', 'weblizar' ),
			'before_widget' => '<div class="col-md-3 col-sm-3 footer-col">',
			'after_widget' => '</div>',
			'before_title' => '<div class="footer-title">',
			'after_title' => '</div>',
		) );             
	}
	
	/*
	* Image resize and crop
	*/
	 if ( ( 'add_image_size' ) ) 
	 { 
		add_image_size('wl_media_sidebar_img',54,54,true);
		add_image_size('wl_media_blog_img',800,400,true);
		add_image_size('wl_blog_img',350,150,true);
	}

$theme_options = weblizar_get_options();
if($theme_options['snoweffect']!=''){
	function snow_script() {
	wp_enqueue_script('snow', get_template_directory_uri() .'/js/snowstorm.js');
	}
	add_action( 'wp_enqueue_scripts', 'snow_script' );
}

if (is_admin()) {
	require_once('core/admin/admin-themes.php');
}

if ( is_admin() && isset($_GET['activated'])  && $pagenow == "themes.php" ) {
	add_action( 'admin_notices', 'weblizar_activation_notice' );
}
add_action( 'admin_notices', 'weblizar_activation_notice' );
function weblizar_activation_notice(){
	//wp_register_style( 'custom_admin_css', get_template_directory_uri() . '/core/admin/admin-banner.css');
    wp_enqueue_style( 'custom_admin_css' );
	wp_enqueue_style('font-awesome-min-css', WL_TEMPLATE_DIR_URI. '/css/font-awesome-4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('admin', get_template_directory_uri() .'/core/admin/admin-themes.css');
    ?>
    <div class="notice notice-success is-dismissible"> 
		<p class="notice-text"><?php 
		$theme_info = wp_get_theme();
			printf( esc_html__('Thank you for installing %1$s - Version %2$s, ', 'weblizar'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) );		
		  echo esc_html__( 'For More info  about Premium Products & offers, Do visit our welcome page.', 'weblizar' ); ?></p>
		<p class="notic-gif"><a class="pro" target="_self" href="<?php echo admin_url('/themes.php?page=weblizar') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/theme-gif02.gif"></a></p>
	</div>
    <?php
}

function weblizar_add_editor_styles() {
    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
    add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'weblizar_add_editor_styles' );
/*
function show_gif_image_function() {

   // Register the script
   wp_register_script( 'gif_img_js', get_template_directory_uri(). '/js/gif_img.js', array( 'jquery','customize-preview' ), rand(), true );

   $url = get_template_directory_uri().'/images/theme-gif.gif';
   // Localize the script with new data
   $image_url = array(
       'image_url' => $url,
   );
   wp_localize_script( 'gif_img_js', 'gif_image', $image_url );

   // Enqueued script with localized data.
   wp_enqueue_script( 'gif_img_js' );
}
add_action( 'customize_controls_enqueue_scripts', 'show_gif_image_function' ); */

?>

