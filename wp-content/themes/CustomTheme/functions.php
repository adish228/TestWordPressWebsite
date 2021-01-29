<?php
    // Load css and js files

    function load_scripts() {
        wp_enqueue_style( 'main', get_stylesheet_uri() );
        wp_enqueue_style( 'mains', get_template_directory_uri() . '/css/main.css' );
        wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
        
        wp_enqueue_script( 'jquery-local', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'load_scripts' );
    add_theme_support('post-thumbnails');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//add menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) )
// add_image_size('blog-large', 800, 400, false);
// add_image_size('blog-small', 300, 200, true);

?>

