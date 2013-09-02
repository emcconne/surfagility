      <?php if ( get_previous_posts_link() || get_next_posts_link() ): ?>
        <div class="navigation row">
          <hr>
          <div class="pull-left"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
          <div class="pull-right"><?php next_posts_link('Next Entries &raquo;','') ?></div>
        </div>
      <?php endif; ?>