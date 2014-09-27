<?php
/**
 * super simple news page functions and definitions
 *
 * @package super simple news page
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'super_simple_news_page_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function super_simple_news_page_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on super simple news page, use a find and replace
	 * to change 'super-simple-news-page' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'super-simple-news-page', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'super-simple-news-page' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'super_simple_news_page_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	add_theme_support( 'post-thumbnails' ); 
	//set_post_thumbnail_size( 0, 0, true ); // default Post Thumbnail dimensions (cropped)
}
endif; // super_simple_news_page_setup
add_action( 'after_setup_theme', 'super_simple_news_page_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function super_simple_news_page_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'super-simple-news-page' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'super_simple_news_page_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function super_simple_news_page_scripts() {
	//wp_enqueue_script('jquery');
	wp_enqueue_style('Roboto Condensed','http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&subset=latin,greek');
	wp_enqueue_style('Roboto','http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900&subset=latin,greek');
	wp_enqueue_style( 'super_simple_news_page-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'super_simple_news_page_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
