<?php
/**
 * common functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package common
 */

if ( ! function_exists( 'common_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function common_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on common, use a find and replace
		 * to change 'common' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'common', get_template_directory() . '/languages' );

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
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'common' ),
		) );

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
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'common_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'common_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function common_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'common_content_width', 640 );
}
add_action( 'after_setup_theme', 'common_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function common_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'common' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'common' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'common_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function common_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'common_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/vendor/wp/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/vendor/wp/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/vendor/wp/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/vendor/wp/customizer.php';




/**
 * CUSTOM FUNCTIONS
 */

// File caching
function disableCache() {
  $is_cacheDisabled = true;

  if($is_cacheDisabled) {
    return microtime();
  }
  else {
    return "1.0";
  }
}


//------------
// ENQUEUE CUSTOM SCRIPTS AND STYLES
//------------
function custom_scripts() {
  // remove old, default jquery
  wp_deregister_script('jquery');
  // add latest jquery
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1');

	wp_enqueue_style('_theme-stylesheet', get_template_directory_uri() . '/dist/css/main.css', null, disableCache());
	wp_enqueue_script( '_theme-script', get_template_directory_uri() . '/dist/js/main.js', array('jquery'), disableCache());
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

