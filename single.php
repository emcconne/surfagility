<?php
/**
 * The Template for displaying all single posts.
 *
  */

get_header(); ?>

<div class="row">
  <div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <p><em><?php the_time('l, F jS, Y'); ?></em></p>
        <div class="post-content">
            <?php the_content(); 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }
            ?>
        </div>
        <hr>
        <?php 
          /*comments_template(); */
        ?>
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>