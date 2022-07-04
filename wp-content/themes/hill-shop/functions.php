<?php
/**
 * Hill Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hill_Sine
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function hill_shop_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'hill-shop' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'hill_shop_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'hill_shop_setup' );

function hill_shop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hill_shop_content_width', 640 );
}
add_action( 'after_setup_theme', 'hill_shop_content_width', 0 );

function hill_shop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hill-shop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hill-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer1', 'hill-shop' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'hill-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer2', 'hill-shop' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'hill-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer3', 'hill-shop' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'hill-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer4', 'hill-shop' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'hill-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hill_shop_widgets_init' );

function hill_shop_scripts() {
	wp_enqueue_style( 'hill-shop-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hill-shop-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hill-shop-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style( 'hill-shop-default-style', esc_url(get_template_directory_uri()).'/assets/css/default-style.css' , array(), _S_VERSION );
	wp_enqueue_style( 'hill-shop-theme-style', esc_url(get_template_directory_uri()).'/assets/css/theme-style.css' , array(), _S_VERSION );
	wp_enqueue_style( 'hill-shop-fontawesome-css', esc_url(get_template_directory_uri()).'/assets/fontawesome/css/font-awesome.css' , array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hill_shop_scripts' );

require get_template_directory() . '/inc/admin-comman.php';
require get_template_directory() . '/inc/comman.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
require get_template_directory() . '/inc/install/kirki/kirki.php';
require get_template_directory() . '/inc/install/hill-theme-option/hill-theme-option.php';
function hill_shop_kirki_configuration() {
    return array( 'url_path'     => get_stylesheet_directory_uri() . '/inc/install/kirki/' );
}
add_filter( 'kirki/config', 'hill_shop_kirki_configuration' );
require get_template_directory() . '/inc/install/about.php';
require get_template_directory() . '/inc/install/class-tgm-plugin-activation.php';


add_action( 'tgmpa_register', 'hill_shop_register_required_plugins' );
function hill_shop_register_required_plugins() {
	
	$plugins = array( 
        array(
            'name' => esc_html__('WooCommerce','hill-shop'),
            'slug' => 'woocommerce',
            'required' => false,
        ),
    );

	
	$config = array(
		'id'           => 'hill-shop',             // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
require get_template_directory() . '/inc/front-action.php';


