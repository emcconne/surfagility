<div class="postmetadata">
    Posted in <?php the_category(', ') ?> 
    <strong>|</strong>
    <span class="comment-number">
        <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
    </span>
</div>
<?php if ( get_the_tags() ):  ?>
<div class="postmetadata">
    Tagged in <?php the_tags('', ', '); ?> 
</div>
<?php endif; ?>