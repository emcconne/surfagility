<?php 

function surfagility_scripts_and_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'less', get_template_directory_uri() . '/js/less-1.4.1.min.js', array( 'bootstrap' ));
    //wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ));
    wp_register_script( 'bootstrap', "http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js", array( 'jquery' ));
    wp_register_script( 'respond', get_template_directory_uri() . '/js/respond.js' );
    wp_register_script( 'surfagility', get_template_directory_uri() . '/js/surfagility.js', array( 'jquery' ));

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script( 'respond' );
    wp_enqueue_script( 'less' );
    wp_enqueue_script( 'surfagility' );
}
add_action( 'wp_enqueue_scripts', 'surfagility_scripts_and_jquery' );

function new_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"> ...(Read More)</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function wcount(){
    ob_start();
    the_content();
    $content = ob_get_clean();
    return sizeof(explode(" ", $content));
}

/*===================================================================================
 * Add Author Links
 * =================================================================================*/
function add_to_author_profile( $contactmethods ) {
    $contactmethods['google_profile'] = 'Google Profile URL';
    $contactmethods['twitter_profile'] = 'Twitter Profile URL';
    $contactmethods['facebook_profile'] = 'Facebook Profile URL';
    $contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
    $contactmethods['github_profile'] = 'GitHub Profile URL';
    $contactmethods['pinterest_profile'] = 'Pinterest Profile URL';
    $contactmethods['tumblr_profile'] = 'Tumbler Profile URL';
    
    return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);


function custom_excerpt($new_length = 20, $new_more = '...') {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
  add_filter('excerpt_more', 'new_excerpt_more');
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}


function surfagility_setup()
{
  if ( ! isset( $content_width ) )
    $content_width = 600;

  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
}

function language_setup(){
  load_theme_textdomain('surfagility', get_template_directory() . '/languages');
}
  
add_action('after_setup_theme', 'language_setup');
add_action('after_setup_theme', 'surfagility_setup');

?>