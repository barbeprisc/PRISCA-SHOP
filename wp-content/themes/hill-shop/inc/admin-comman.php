<?php
function hill_admin_script_style(){
    $current_page = get_current_screen()->base;
    wp_enqueue_style( 'hill-shop-admin-style-css', esc_url(get_template_directory_uri()).'/assets/css/admin-style.css' , array(), _S_VERSION );
    wp_enqueue_script('hill-shop-admin-script',  get_template_directory_uri() . '/js/admin.js', array( ), '1.0.0', true );
    
}
add_action('admin_enqueue_scripts', 'hill_admin_script_style');



