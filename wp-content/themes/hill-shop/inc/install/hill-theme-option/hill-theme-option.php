<?php
define( 'HILL_THEMEOPTION_DIR_PATH' , get_template_directory().'/inc/install/hill-theme-option/' );
define( 'HILL_THEMEOPTION_DIR_URL' , get_template_directory_uri().'/inc/install/hill-theme-option/' );
require get_template_directory() . '/inc/install/hill-theme-option/inc/global.php';
require get_template_directory() . '/inc/install/hill-theme-option/inc/custom-function.php';
require get_template_directory() . '/inc/install/hill-theme-option/themes/comman/comman.php';

add_action( 'wp_enqueue_scripts', 'hill_extenstion_scripts' );
function hill_extenstion_scripts() {
	wp_enqueue_style( 'hill-style', esc_url(get_template_directory_uri()).'/inc/install/hill-theme-option/assets/css/style.css' , array());
	wp_enqueue_style( 'hill-comman', esc_url(get_template_directory_uri()).'/inc/install/hill-theme-option/assets/css/comman.css' , array());
	wp_enqueue_style( 'hill-owl', esc_url(get_template_directory_uri()).'/inc/install/hill-theme-option/assets/libary/owl/assets/owl.carousel.min.css' , array());
	wp_enqueue_style( 'hill-owl-theme', esc_url(get_template_directory_uri()).'/inc/install/hill-theme-option/assets/libary/owl/assets/owl.theme.default.min.css' , array());
	wp_enqueue_script( 'hill-owl', esc_url(get_template_directory_uri()). '/inc/install/hill-theme-option/assets/libary/owl/owl.carousel.js', array('jquery'),true,true);
	wp_enqueue_style( 'hill-aos', esc_url(get_template_directory_uri()).'/inc/install/hill-theme-option/assets/libary/aos/aos.css' , array());
	wp_enqueue_script( 'hill-aos', esc_url(get_template_directory_uri()). '/inc/install/hill-theme-option/assets/libary/aos/aos.js', array('jquery'),true,true);
	wp_enqueue_script( 'hill-script', esc_url(get_template_directory_uri()). '/inc/install/hill-theme-option/assets/js/script.js', array('jquery'),true,true);
}
function hill_customizer_css() {
    wp_enqueue_style('hill-customize-controls-style',esc_url(get_template_directory_uri()).'/inc/install/hill-theme-option/assets/css/customizer-admin.css');
}
add_action( 'customize_controls_enqueue_scripts', 'hill_customizer_css',0 );