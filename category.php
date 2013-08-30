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
<?php 
  $catID =  $wp_query->get_queried_object_id();
  $dir = plugin_dir_path( __FILE__ ); 
  $category_image = $dir . "/images/category/" . $catID . ".jpg";
?>
<!-- container div starts in header -->
<!-- row div starts in header -->
    <div class="col-lg-5 col-sm-5 cover" > 
      <?php if ( !file_exists($category_image) ) : ?>
      <div class="cover-img" style="background-image:url('<?php bloginfo('template_directory');?>/images/surfagility.jpg')">
      <?php else: ?>
      <div class="cover-img" style="background-image:url('<?php bloginfo('template_directory');?>/images/category/<?php echo $catID; ?>.jpg')">
      <?php endif ?>
        <div class="cover-body">
          <div class="cover-body-inner">
            <h1 class="cover-title">
              <?php single_cat_title(); ?>

            </h1>
            <p class="cover-description">
              
            </p>
            <div class="cover-actions">
              <p class="check-it">
                Other Collections: 
              </p>
              <ul>
                <?php 
                  $title = '';
                  $args = array(
                    'title_li'  =>  $title,
                    'exclude'   =>  $catID
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
      <hr>
        <div class="row">
           <div class="nav-item pull-left">Latest from <?php single_cat_title(); ?>
            <a href="<?php echo get_category_link( $catID ); ?>/feed/"><i class="icon-rss"></i></a>
           </div>
           
           <div class="nav-item pull-right">
            <?php if ( next_posts_link() ) : ?>
              <a href="<?php next_posts_link('More&nbsp;<i class="glyphicon glyphicon-chevron-right"></i>') ?>">
              </a>
            <?php endif; ?>
            </div>
        </div>
      <hr>     <?php if ( have_posts() ) : ?> 
      <?php while ( have_posts() ) : the_post(); ?>
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
          <?php custom_excerpt(150, '...More') ?>
        </div>
        <span class="postmetadata">
          Posted in <?php the_category(', ') ?> 
          <strong>|</strong>
          <span class="comment-number">
            <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
          </span>
        </span>
        <?php endwhile; ?>
      <div class="navigation row">
        <div class="pull-left"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
        <div class="pull-right"><?php next_posts_link('Next Entries &raquo;','') ?></div>
      </div>
      <?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
<!-- row div ends in footer -->
<!-- container div ends in footer -->

<?php get_footer(); ?>