<?php
/**
 * The main author file.
 *
 *
 */

get_header(); ?>
<?php
  $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
  $author_email = get_the_author_meta( 'user_email', $curauth->ID );
  $twitter_profile = get_the_author_meta( 'twitter_profile', $curauth->ID );
  $linkedin_profile = get_the_author_meta( 'linkedin_profile', $curauth->ID  );
  $google_profile = get_the_author_meta( 'google_profile', $curauth->ID  );
  $user_url = get_the_author_meta( 'user_url', $curauth->ID  );
  $facebook_profile = get_the_author_meta( 'facebook_profile' , $curauth->ID  );
  $github_profile = get_the_author_meta( 'github_profile', $curauth->ID  );
  $pinterest_profile = get_the_author_meta( 'pinterest_profile', $curauth->ID  );
  $tumbler_profile = get_the_author_meta( 'tumbler_profile', $curauth->ID  );
?>
<?php
  $template_location = get_bloginfo('template_directory');
  $avatar_address = $template_location . "/images/surfagility.jpg"; 
  $personal_avatar = false;
  if ( function_exists('has_wp_user_avatar')) {
    if ( has_wp_user_avatar($curauth->ID) ) {
      $avatar_address = get_wp_user_avatar_src($curauth->ID, 'large'); 
      $personal_avatar = true;
    }
  }
?>
<!-- container div starts in header -->
<!-- row div starts in header -->
  <div class="author-page">
    <div class="col-lg-5 col-sm-5 cover" > 
      <?php if ( $personal_avatar ) : ?>
      <div class="cover-img" style="background-image:url('<?php echo $avatar_address; ?>')">
      <?php else: ?>
      <div class="missing-cover-img">
      <?php endif; ?>
        <div class="cover-body <?php echo $personal_avatar ? '' : 'missing-avatar' ; ?>">
          <div class="author-photo" style="background-image: url('http://www.gravatar.com/avatar/<?php echo md5( $curauth->user_email ); ?>s=64')"></div>
          <div class="cover-body-inner">
            <h1 class="cover-title">
              <?php echo $curauth->display_name; ?>
            </h1>
            <div class="author-bio">
              <?php
                if ( $curauth->description ) :
                  echo $curauth->description;
                endif;
              ?>
            </div>
            <div class="author-social">
            <ul>
              <?php if ( $user_url && $user_url != '' ) : ?>
                <li class="author-url">
                    <a href="<?php echo $user_url; ?>"><i class="icon-home"></i></a>
                </li>
              <?php endif; ?>
              <li class="author-rss">
                  <a href="<?php echo get_author_feed_link( $curauth->ID ) ?>"><i class="icon-rss"></i></a>
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
    <div class="col-lg-7 col-sm-7 content">
    <div>
      <hr>
        <div class="row">
          <div class="nav-item pull-left">Latest By <?php echo $curauth->display_name; ?></div>
          <div class="nav-item pull-right">
            <?php if ( get_next_posts_link() ) : ?>
                <?php echo get_next_posts_link('More&nbsp;<i class="glyphicon glyphicon-chevron-right"></i>') ?>
            <?php endif; ?>
          </div>
        </div>
      <hr>
    </div>
     <?php if ( have_posts() ) : ?> 
      <?php while ( have_posts() ) : the_post(); ?>
        <h1 id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h1>
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
          <?php custom_excerpt(75, '...More') ?>
        </div>
        <div class="post-extras">
          <?php get_template_part('partials/post', 'metadata'); ?>
        </div>
        <?php endwhile; ?>

      <?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
        <?php get_template_part( 'partials/post', 'actions' ); ?>
    </div>


<!-- row div ends in footer -->
<!-- container div ends in footer -->

<?php get_footer(); ?>