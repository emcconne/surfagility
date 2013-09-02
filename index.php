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
<!-- container div starts in header -->
<!-- row div starts in header -->
    <div class="col-lg-5 col-sm-5 cover" > 
      <div class="cover-img" style="background-image:url('<?php bloginfo('template_directory');?>/images/surfagility.jpg')">
        <div class="cover-body">
          <div class="cover-body-inner">
            <a href="<?php echo home_url(); ?>">
              <h1 class="cover-title">
                <?php bloginfo('name'); ?>
              </h1>
            </a>
            <p class="cover-description">
              <?php bloginfo('description'); ?> 
            <div class="cover-actions">
              <p class="check-it">
                Collections: 
              </p>
              <ul>
                <?php 
                  $title = '';
                  $args = array(
                    'title_li'  =>  $title,
                    'depth'     => 1
                  );
                  wp_list_categories( $args );
                ?> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-sm-7 content">

<!--Begin Featured Section -->
  <?php if ( is_front_page() ) : ?>
  <?php if ( ! get_previous_posts_link() ) : ?>
    <div class="featured-section page-section">
    <?php 
      // The Query
      $query = new WP_Query( 'category_name=featured' );
      // The Loop
      if ( $query->have_posts() ) {
          $query->the_post();
          $featured_id = get_the_id();
      ?>  
        <hr>
            <div class="row">
                <div class="nav-item pull-left">Featured</div>
                <div class="nav-item pull-right">
                  <a href="<?php echo get_category_link(get_category_by_slug( "featured" )->cat_ID) ?>">
                    More&nbsp;<i class="glyphicon glyphicon-chevron-right"></i>
                  </a>
                </div>
            </div>
        <hr>
        <div class="post-wrapper featured-excerpt first-row">
            <h1 id="post-<?php echo $featured_id; ?>">
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h1>
            <div class="display-small post-author small-bold">
              <span class="glyphicon glyphicon-copyright-mark"></span>
              <?php the_author_posts_link(); ?>
            </div>
            <div class="post-info">
              <span class="post-date small-light-text">
                <!--<span class="glyphicon glyphicon-calendar"></span>-->
                <?php the_time('F jS, Y') ?>
              </span>
              <span class="post-readtime small-light-text">
                <!--<span class="glyphicon glyphicon-time"></span>-->
                <?php echo round(wcount() / 250, 0, PHP_ROUND_HALF_UP); ?> minute read
              </span> 
            </div>

            <div class="post-entry">
                <?php custom_excerpt(125, '...more') ?>
            </div>
            <span class="postmetadata">
              Found in <?php the_category(', ') ?> 
              <strong>|</strong>
              <span class="comment-number">
                <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
              </span>
            </span>       
        </div>
      </div>
      <?php
      } else {
        // no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      ?>
<!--End Featured Section-->
    <?php endif; ?>
  <?php endif; ?>
    <div class="latest-section page-section">
      <div>
        <hr>
          <div class="row">
            <div class="nav-item pull-left">Latest</div>
             <div class="nav-item pull-right">
              <?php if ( get_next_posts_link() ) : ?>
                <?php echo get_next_posts_link('More&nbsp;<i class="glyphicon glyphicon-chevron-right"></i>') ?>
              <?php endif; ?>
              </div>
          </div>
        <hr>
      </div>
     <?php if ( have_posts() ) : ?> 
      <?php $first_record=true; ?>
      <?php while ( have_posts() ) : the_post(); 
        if( $post->ID == $featured_id ) continue; ?>
          <div class="post-wrapper <?php if ($first_record) echo "first-row"; $first_record=false; ?>">
            <h1 id="post-<?php the_ID(); ?>">
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h1>
            <div class="post-author">
              By <?php the_author_posts_link(); ?>
            </div>
            <div class="post-info">
              <span class="post-date small-light-text">
                <span class="glyphicon glyphicon-calendar"></span>
                <?php the_time('F jS, Y') ?>
              </span>
              <span class="post-readtime small-light-text">
                <span class="glyphicon glyphicon-time"></span>
                <?php echo round(wcount() / 250, 0, PHP_ROUND_HALF_UP); ?> minute read
              </span> 
            </div>
            <div class="post-entry">
              <?php if ( is_home() ): ?>
                <?php custom_excerpt(75, '...More') ?>
              <?php else : ?>
                <?php the_content(); ?>
              <?php endif; ?>
            </div>
            <div class="post-extras">
              <?php get_template_part('partials/post', 'metadata'); ?>
            </div>
          </div>
        <?php endwhile; ?>

      </div>

      <?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
  
    <?php get_template_part( 'partials/post', 'actions' ); ?>

<!-- row div ends in footer -->
<!-- container div ends in footer -->

<?php get_footer(); ?>