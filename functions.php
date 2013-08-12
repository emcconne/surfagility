<?php 

function surfagility_scripts_and_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'less', get_template_directory_uri() . '/js/less-1.4.1.min.js', array( 'bootstrap' ));
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ));
    wp_register_script( 'respond', get_template_directory_uri() . '/js/respond.js' );
    wp_register_script( 'surfagility', get_template_directory_uri() . '/js/surfagility.js', array( 'jquery' ));

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'respond' );
    wp_enqueue_script( 'less' );
    wp_enqueue_script( 'surfagility' );
}
add_action( 'wp_enqueue_scripts', 'surfagility_scripts_and_jquery' );
add_theme_support( 'post-thumbnails' );
?>