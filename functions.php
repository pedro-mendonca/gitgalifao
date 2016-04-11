<?php
/**
 * galifao functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package galifao
 */

if ( ! function_exists( 'galifao_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function galifao_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on galifao, use a find and replace
	 * to change 'galifao' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'galifao', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );


/*theme support menus*/
  add_theme_support( 'menus' );


	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );




	
	  //Theme Support
  add_theme_support( 'menus' );



	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		''
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'galifao_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'galifao_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function galifao_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'galifao_content_width', 640 );
}
add_action( 'after_setup_theme', 'galifao_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function galifao_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar1', 'galifao' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'procura', 'galifao' ),
		'id'            => 'procura',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'site-logo', 'galifao' ),
		'id'            => 'site-logo',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s logotipo">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );


		register_sidebar( array(
		'name'          => esc_html__( 'destaque', 'galifao' ),
		'id'            => 'destaque',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="imagem-destaque">',
		'after_title'   => '</div>',
	) );

}


add_action( 'widgets_init', 'galifao_widgets_init' );





/**
 * Enqueue scripts and styles.
 */
function galifao_scripts() {
	wp_enqueue_style( 'galifao-style', get_stylesheet_uri() );

/* Add Foundation CSS */
	wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/foundation-6/css/foundation.css' );


/*deregister WP jquery*/

	wp_deregister_script( 'jquery' );



/*jquery*/

	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );



/* Add Foundation JS */
	


 	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/foundation-6/js/foundation.js', array('jquery'), '2.3.0', true );




/* Add Custom CSS */

	wp_enqueue_style( 'galifao-custom-style', get_stylesheet_directory_uri() . '/custom/css/custom.css', array(), '1' );
/**/


	wp_enqueue_script( 'galifao-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'galifao_scripts' );









function wpb_add_google_fonts() {



	wp_register_style('wpb-googleFonts', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic');

	wp_register_style('wpb-googleFonts', 'https://www.google.com/fonts#UsePlace:use/Collection:Inconsolata:400,700' );
	wp_register_style('wpb-googleFonts', 'https://www.google.com/fonts#UsePlace:use/Collection:Chivo:400,400italic,900,900italic' );
		wp_register_style('wpb-googleFonts','https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic');


	wp_enqueue_style( 'wpb-googleFonts');
}
add_action('wp_print_styles', 'wpb_add_google_fonts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load walker file.
 */

require get_template_directory(). '/inc/walker.php';




