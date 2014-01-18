<?php
/**
 * The tag file
 *
 */

get_header(); ?>
<?php 
  $ID =  $wp_query->get_queried_object_id();
  $dir = plugin_dir_path( __FILE__ ); 
  $tag_image = $dir . "/images/tag/" . $ID . ".jpg";
?>
<!-- container div starts in header -->
<!-- row div starts in header -->
    <div class="col-lg-5 col-sm-5 cover" > 
      <?php if ( !file_exists($category_image) ) : ?>
      <div class="cover-img" style="background-image:url('<?php bloginfo('template_directory');?>/images/surfagility.jpg')">
      <?php else: ?>
      <div class="cover-img" style="background-image:url('<?php bloginfo('template_directory');?>/images/tag/<?php echo $ID; ?>.jpg')">
      <?php endif ?>
        <div class="cover-body">
          <div class="cover-body-inner">
            <h1 class="cover-title">
              <?php single_tag_title(); ?>

            </h1>
            <p class="cover-description">
              
            </p>
            <div class="cover-actions">
              <p class="check-it">
                Other Tags: 
              </p>
              <ul>
                <?php 
                  $args = array(
                    'number'  =>  75,
                    'exclude' => $ID
                  );
                  $tags = get_tags( $args );
                  foreach ( $tags as $tag ) {
                    $tag_link = get_tag_link( $tag->term_id ); 
                    $html = 
                      $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                      $html .= "{$tag->name}</a></li>";
                  }
                  echo $html;
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
           <div class="nav-item pull-left">Latest from <?php single_tag_title(); ?>
            <a href="<?php echo get_tag_link( $ID ); ?>/feed/"><i class="icon-rss"></i></a>
           </div>
           <div class="nav-item pull-right">
            <?php if ( get_next_posts_link() ) : ?>
                <?php echo get_next_posts_link('More&nbsp;<i class="glyphicon glyphicon-chevron-right"></i>') ?>
            <?php endif; ?>
            </div>
        </div>
      <hr>     

      <?php if ( have_posts() ) : ?> 
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
            <?php echo round(wcount() / 250, 0); ?> minute read
          </span> 
        </div>
        <div class="post-entry">
          <?php custom_excerpt(150, '...More') ?>
        </div>
        <div class="post-extras">
          <?php get_template_part('partials/post', 'metadata'); ?>
        </div>
        <?php endwhile; ?>

      <?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

    <?php get_template_part( 'partials/post', 'actions' ); ?>

<!-- row div ends in footer -->
<!-- container div ends in footer -->

<?php get_footer(); ?>
