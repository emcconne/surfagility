<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'athemes' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'athemes' ); ?></p>

                    <?php get_search_form(); ?>

                    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

                    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

                </div><!-- .page-content -->
            </section><!-- .error-404 -->

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>