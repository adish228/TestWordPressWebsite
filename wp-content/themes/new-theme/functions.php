<?php
    // Load css and js files

    function load_scripts() {
        wp_enqueue_style( 'main', get_stylesheet_uri() );
        wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_script( 'jquery-local', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'load_scripts' );
?>