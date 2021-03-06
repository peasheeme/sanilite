<?php
/*It is underscores functions.php file and its modification*/
if ( ! function_exists( 'event_star_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function event_star_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Event Star, use a find and replace
         * to change 'event-star' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'event-star', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for custom logo.
         *
          */
        add_theme_support( 'custom-logo', array(
            'height'      => 70,
            'width'       => 290,
            'flex-height' => true,
            'flex-width' => true
        ) );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
	    add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 340, 240, true );

        // Adding excerpt for page
        add_post_type_support( 'page', 'excerpt' );

        // This theme uses wp_nav_menu() in four location.
        register_nav_menus( array(
	        'top-menu'      => esc_html__( 'Top Menu ( Support First Level Only )', 'event-star' ),
	        'primary'       => esc_html__( 'Primary Menu', 'event-star' ),
            'one-page'      => esc_html__( 'One Page Menu for Front Page', 'event-star' ),
	        'footer-menu'   => esc_html__( 'Footer Menu ( Support First Level Only )', 'event-star' )
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'gallery',
            'caption',
        ) );
        
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'event_star_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

	    // This theme styles the visual editor with editor-style.css to match the theme style.
	    add_editor_style();

        /*woocommerce support*/
        add_theme_support( 'woocommerce' );
    }
endif;
add_action( 'after_setup_theme', 'event_star_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function event_star_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'event_star_content_width', 640 );
}
add_action( 'after_setup_theme', 'event_star_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function event_star_scripts() {
    global $event_star_customizer_all_values;

    /*animation*/
    $event_star_enable_animation = $event_star_customizer_all_values['event-star-enable-animation'];
    $event_star_event_expire_text = $event_star_customizer_all_values['event-star-event-expire-text'];
    /*google font  */
    wp_enqueue_style( 'event-star-googleapis', '//fonts.googleapis.com/css?family=Open+Sans:400,700|Lato:400,700', array(), null );

    /*Bootstrap*/
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/library/bootstrap/css/bootstrap.min.css', array(), '3.3.6' );

    /*Font-Awesome-master*/
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/library/Font-Awesome/css/font-awesome.min.css', array(), '4.5.0' );

    /*slick slider*/
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/library/slick/slick.css', array(), '1.3.3' );
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/library/slick/slick.min.js', array('jquery'), '1.1.2', 1);

	/*magnific-popup*/
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/library/magnific-popup/magnific-popup.css', array(), '1.1.0' );

    wp_enqueue_style( 'event-star-style', get_stylesheet_uri() );

    wp_enqueue_script( 'event-star-skip-link-focus-fix', get_template_directory_uri() . '/acmethemes/core/js/skip-link-focus-fix.js', array(), '20130115', true );

    /*html5*/
    wp_enqueue_script('html5', get_template_directory_uri() . '/assets/library/html5shiv/html5shiv.min.js', array('jquery'), '3.7.3', false);
    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

    /*respond*/
    wp_enqueue_script('respond', get_template_directory_uri() . '/assets/library/respond/respond.min.js', array('jquery'), '1.1.2', false);
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

    /*Bootstrap*/
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/library/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.6', 1);
    
    /*wow animation*/
    if( 1 != $event_star_enable_animation ){
        wp_enqueue_script('wow', get_template_directory_uri() . '/assets/library/wow/js/wow.min.js', array('jquery'), '1.1.2', 1);
    }
    /*magnific-popup*/
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/library/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', 1);

	wp_enqueue_script( 'masonry' );

	/*theme custom js*/
    wp_enqueue_script('event-star-custom', get_template_directory_uri() . '/assets/js/event-star-custom.js', array('jquery'), '1.0.5', 1);

	wp_localize_script( 'event-star-custom', 'event_star_ajax', array(
		'ajaxurl'           => admin_url( 'admin-ajax.php' ),
		'event_expire_text' => esc_js( $event_star_event_expire_text )
	));

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'event_star_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function event_star_is_edit_page() {
	//make sure we are on the backend
	if ( !is_admin() ){
		return false;
	}
	global $pagenow;
	return in_array( $pagenow, array( 'post.php', 'post-new.php' ) );
}

function event_star_admin_scripts( $hook ) {

    if ( 'widgets.php' == $hook || event_star_is_edit_page() ) {
	    event_star_date_time_picker();
	    wp_enqueue_media();
        wp_enqueue_script( 'event-star-widgets-script', get_template_directory_uri() . '/assets/js/acme-admin.js', array( 'jquery' ), '1.0.0' );
	    wp_enqueue_style( 'event-star-widgets-style', get_template_directory_uri() . '/assets/css/acme-admin.css', array(), '1.0.0' );
	    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/library/Font-Awesome/css/font-awesome.min.css', array(), '4.5.0' );
    }
}
add_action( 'admin_enqueue_scripts', 'event_star_admin_scripts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function event_star_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'event_star_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require event_star_file_directory('acmethemes/core/custom-header.php');

/**
 * Custom template tags for this theme.
 */
require event_star_file_directory('acmethemes/core/template-tags.php');

/**
 * Custom functions that act independently of the theme templates.
 */
require event_star_file_directory('acmethemes/core/extras.php');

/**
 * Load Jetpack compatibility file.
 */
require event_star_file_directory('acmethemes/core/jetpack.php');