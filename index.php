<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-sm-4 cover" > 
      <div class="cover-img" style="background-image:url('<?php bloginfo('template_directory');?>/images/cover_1.jpg')">
        <div class="cover-body">
          <div class="cover-body-inner">
            <h1 class="cover-title">
             Brent McConnell 
            </h1>
            <p class="cover-description">
              Where the rubber meets the road. 
            <div class="cover-actions">
              <a href="http://www.twitter.com/emcconne" class="btn btn-primary">
                <span class="icons icons-twitter"></span>
                Find me on Twitter
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="col-lg-8 col-sm-8 content">
      <div class="jumbotron">
        <h1>Brent McConnell</h1>
      </div>
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php 
          the_content();
        ?>
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

<!-- row div ends in footer -->
<?php 
/*
  $count = 0;
  $categories = get_categories();
  $seperator = ' ';
  $output = '';
  if($categories){
    foreach($categories as $category) {
      if ($count % 3 == 0 || $count == 0) { 
        $output .= '<div class="row">';
      }
      $output .= '<div class="col-lg-4">';
      $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>';
      $output .= '</div>';
      if (($count + 1) % 3 == 0) {  
        $output .= '</div>';
      }
      $count = $count + 1;
    }
    if ($count % 3 != 0) {  
      $output .= "</div>";
    }
  echo trim($output, $separator);
  }
*/
?>
<!--
  <div class="row">
    <div class="col-sm-12 col-sm-6 col-lg-4">
      <a class="collection-item" href="#" style="background-image:url('<?php bloginfo('template_directory');?>/images/category_4.jpeg')"/>
        <div class="collection-item-body">
          <h3 class="collection-item-title">
            Technology
          </h3>
        </div>
      </a>
    </div>
    <div class="col-sm-12 col-sm-6 col-lg-4">
      <a class="collection-item" href="#" style="background-image:url('<?php bloginfo('template_directory');?>/images/category_2.jpeg')"/>
        <div class="collection-item-body">
          <h3 class="collection-item-title">
            Sports
          </h3>
        </div>
      </a>
    </div>
    <div class="col-sm-12 col-sm-6 col-lg-4">
      <a class="collection-item" href="#" style="background-image:url('<?php bloginfo('template_directory');?>/images/category_3.jpeg')"/>
        <div class="collection-item-body">
          <h3 class="collection-item-title">
            Business
          </h3>
        </div>
      </a>
    </div>
  </div>
-->
<?php get_footer(); ?>