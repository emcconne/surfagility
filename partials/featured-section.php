<hr>
    <div class="row">
        <div class="nav-item pull-left">Featured</div>
        <div class="nav-item pull-right">More&nbsp;<i class="glyphicon glyphicon-chevron-right"></i></div>
    </div>
<hr>
<div class="featured-post">
  <?php 
    // The Query
    $query = new WP_Query( 'category_name=featured' );
    // The Loop
    if ( $query->have_posts() ) {
        $query->the_post();
        $featured_id = get_the_id();
    ?>
        <h1 id="post-<?php echo $featured_id; ?>">
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h1>
        <div class="post-info">
          <span class="post-date small-light-text">
            <?php the_time('F jS, Y') ?>
          </span>
          <span class="post-readtime small-light-text">
            <?php echo round(wcount() / 250, 0); ?> minute read
          </span> 
        </div>
        <div class="post-entry">
            <?php the_excerpt(); ?>
        </div>
        <span class="postmetadata">
          Posted in <?php the_category(', ') ?> 
          <strong>|</strong>
          <span class="comment-number">
            <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
          </span>
        </span>       
    <?php
    } else {
      // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
</div>
