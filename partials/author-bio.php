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