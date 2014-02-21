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
  $tumblr_profile = get_the_author_meta( 'tumblr_profile' );
?>
<div class="display-small post-author small-bold">
  <?php the_author_posts_link(); ?>
</div>
<div class="section-seperator"></div>
<div class="author-bio">
<?php
  if ( get_the_author_meta('description') ) :
    echo get_the_author_meta('description');
  endif;
?>
</div>
<div class="section-seperator"></div>
 <div class="author-social">
  <ul>
    <?php if ( $user_url && $user_url != '' ) : ?>
      <li class="author-url">
          <a href="<?php echo $user_url; ?>"><i class="fa fa-home"></i></a>
      </li>
    <?php endif; ?>
    <li class="author-rss">
        <a href="<?php echo get_author_feed_link( get_the_author_meta('ID') ) ?>"><i class="fa fa-rss"></i></a>
    </li>
    <?php if ( $twitter_profile && $twitter_profile != '' ) : ?>
      <li class="author-twitter">
          <a href="<?php echo $twitter_profile; ?>"><i class="fa fa-twitter"></i></a>
      </li>
    <?php endif; ?>
    <?php if ( $linkedin_profile && $linkedin_profile != '' ) : ?>
      <li class="author-linkedin">
          <a href="<?php echo $linkedin_profile; ?>"><i class="fa fa-linkedin"></i></a>
      </li>
    <?php endif; ?>
    <?php if ( $google_profile && $google_profile != '' ) : ?>
      <li class="author_google">
          <a href="<?php echo $google_profile; ?>"><i class="fa fa-google-plus"></i></a>
      </li>
    <?php endif; ?>
    <?php if ( $facebook_profile && $facebook_profile != '' ) : ?>
      <li class="author-facebook">
          <a href="<?php echo $facebook_profile; ?>"><i class="fa fa-facebook"></i></a>
      </li>
    <?php endif; ?>
    <?php if ( $pinterest_profile && $pinterest_profile != '' ) : ?>
      <li class="author_pinterest">
          <a href="<?php echo $pinterest_profile; ?>"><i class="fa fa-pinterest"></i></a>
      </li>
    <?php endif; ?>
    <?php if ( $github_profile && $github_profile != '' ) : ?>
      <li class="author-github">
          <a href="<?php echo $github_profile; ?>"><i class="fa fa-github"></i></a>
      </li>
    <?php endif; ?>
    <?php if ( $tumblr_url && $tumblr_url != '' ) : ?>
      <li class="author-tumblr">
          <a href="<?php echo $tumblr_url; ?>"><i class="fa fa-tumblr"></i></a>
      </li>
    <?php endif; ?>
  </ul>
</div>