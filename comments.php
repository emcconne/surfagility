<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields =  array(
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></p>',
        'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></p>',

);

$comments_args = array(
        'fields' =>  $fields,
        'title_reply'=>'Leave A Reply',
        'label_submit' => 'Submit',
        'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
            '</label><textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
            '</textarea></p>',

         'comment_notes_before' => '<p class="comment-notes">' .
            __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
            '</p>',

          'comment_notes_after' => ''
);
$args = array(
    'walker'            => null,
    'max_depth'         => '',
    'style'             => 'ul',
    'callback'          => null,
    'end-callback'      => null,
    'type'              => 'all',
    'reply_text'        => 'Reply',
    'page'              => '',
    'per_page'          => '',
    'avatar_size'       => 32,
    'reverse_top_level' => null,
    'reverse_children'  => '',
    'format'            => 'xhtml', //or html5 @since 3.6
    'short_ping'        => false // @since 3.6
); 

$num_comments = get_comments_number();
?>
<?php if ( $post->comment_status == 'open' || $num_comments > 0 ) : ?>
 <div class="row full-width comments-wrapper">
  <div class="col-lg-12">
    <?php if ( $post->comment_status == 'open') : ?>
        <div class="comments-header">Comments</div>
    <?php else: ?>
        <div class="comments-header">Comments Closed</div>
    <?php endif; ?>
        <div class="post-comments">
        <ul>
            <?php wp_list_comments(); ?>
        </ul>
        <?php paginate_comments_links(); ?>
        <?php comment_form($comments_args); ?>
    </div>
  </div>
<?php endif; ?>
