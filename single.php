<?php
/**
 * The single entry file.
 *
 */
get_header(); ?>
<!-- container div starts in header -->
<!-- row div starts in header -->
<div class="main-container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php $postid = get_the_ID();?>
  <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($postid), 'large');?>
  <?php if ($large_image_url) : ?>
    <?php $featured_image = true; ?>
    <div class="post-cover-img" style="background-image:url('<?php echo $large_image_url[0]?>')"> </div>
    <div class="post-wrapper top-large-pad">
  <?php else: ?>
    <div class="post-wrapper top-small-pad">
  <?php endif; ?>
      <div class="col-lg-8 col-sm-8 post-content">
        <h1 class="post-title" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h1>
        <div class="post-subtitle">
            <?php if (function_exists('the_subtitle')){ the_subtitle(); }?> 
        </div>
        <div class="only-display-small post-author small-bold">
          <span class="glyphicon glyphicon-copyright-mark"></span>
          <?php the_author_posts_link(); ?>
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
            <?php the_content(); ?>
        </div>
        <div class="post-extras">
          <?php get_template_part('partials/post', 'metadata'); ?>
        </div>
        <div class="wp-pagination">
          <?php wp_link_pages(); ?>
        </div>
        <?php endwhile; ?>
        <div class="navigation">
          <div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
          <div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
        </div>
        <div class="author-footer row only-display-small">
          <div class="row">
            <div class="col-xs-12">
              <hr>
              <div class="col-xs-3"><?php get_template_part( 'partials/author', 'img' ); ?></div>
              <div class="col-xs-7"><?php get_template_part( 'partials/author', 'bio'); ?></div>
            </div>
          </div>
        </div>
      
        <?php else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-lg-4 col-sm-4 post-sidebar">
        <div class="sidebar-body row <?php if ( ! $featured_image ) : echo "lower-post-sidebar";  endif; ?>">
          <div class="sidebar-inner">
            
            <?php 
              $author_email = get_the_author_meta('email');
              $twitter_profile = get_the_author_meta( 'twitter_profile' );
              $linkedin_profile = get_the_author_meta( 'linkedin_profile' );
              $rss_url = get_the_author_meta( 'rss_url' );
              $google_profile = get_the_author_meta( 'google_profile' );
              $user_url = get_the_author_meta( 'user_url' );
              $facebook_profile = get_the_author_meta( 'facebook_profile' );
              $github_profile = get_the_author_meta( 'github_profile' );
              $pinterest_profile = get_the_author_meta( 'pinterest_profile' );
              $tumbler_profile = get_the_author_meta( 'tumbler_profile' );
            ?>
            <div class="author-photo" style="background-image: url('http://www.gravatar.com/avatar/<?php echo md5($author_email)?>s=64')"></div>
            <div class="display-small post-author small-bold">
                By <?php the_author_posts_link(); ?>
            </div>
            <div class="author-bio">
              <?php if ( get_the_author_meta('description') ) : ?>
                  <div class="section-seperator"></div>
                  <?php echo get_the_author_meta('description'); ?>
                  <div class="section-seperator"></div>
              <?php endif; ?>
            </div>
            <div class="author-social">
              <ul>
                <?php if ( $user_url && $user_url != '' ) : ?>
                  <li class="author-url">
                      <a href="<?php echo $user_url; ?>"><i class="icon-home"></i></a>
                  </li>
                <?php endif; ?>
                <li class="author-rss">
                    <a href="<?php echo get_author_feed_link( get_the_author_meta('ID') ) ?>"><i class="icon-rss"></i></a>
                </li>
                <?php if ( $twitter_profile && $twitter_profile != '' ) : ?>
                  <li class="author-twitter">
                      <a href="<?php echo $twitter_profile; ?>"><i class="icon-twitter"></i></a>
                  </li>
                <?php endif; ?>
                <?php if ( $linkedin_profile && $linkedin_profile != '' ) : ?>
                  <li class="author-linkedin">
                      <a href="<?php echo $linkedin_profile; ?>"><i class="icon-linkedin"></i></a>
                  </li>
                <?php endif; ?>
                <?php if ( $google_profile && $google_profile != '' ) : ?>
                  <li class="author_google">
                      <a href="<?php echo $google_profile; ?>"><i class="icon-google-plus"></i></a>
                  </li>
                <?php endif; ?>
                <?php if ( $facebook_profile && $facebook_profile != '' ) : ?>
                  <li class="author-facebook">
                      <a href="<?php echo $facebook_profile; ?>"><i class="icon-facebook"></i></a>
                  </li>
                <?php endif; ?>
                <?php if ( $pinterest_profile && $pinterest_profile != '' ) : ?>
                  <li class="author_pinterest">
                      <a href="<?php echo $pinterest_profile; ?>"><i class="icon-pinterest"></i></a>
                  </li>
                <?php endif; ?>
                <?php if ( $github_profile && $github_profile != '' ) : ?>
                  <li class="author-github">
                      <a href="<?php echo $github_profile; ?>"><i class="icon-github"></i></a>
                  </li>
                <?php endif; ?>
                <?php if ( $tumbler_url && $tumbler_url != '' ) : ?>
                  <li class="author-tumbler">
                      <a href="<?php echo $tumbler_url; ?>"><i class="icon-tumbler"></i></a>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php comments_template(); ?>

<!-- row div ends in footer -->
<!-- container div ends in footer -->
<?php get_footer(); ?>