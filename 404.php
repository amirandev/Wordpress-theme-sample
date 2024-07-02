<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <section id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'my-bootstrap-theme'); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'my-bootstrap-theme'); ?></p>

                        <?php get_search_form(); ?>

                        <div class="widget widget_categories">
                            <h2 class="widget-title"><?php _e('Most Used Categories', 'my-bootstrap-theme'); ?></h2>
                            <ul>
                                <?php
                                wp_list_categories(array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                ));
                                ?>
                            </ul>
                        </div><!-- .widget -->

                        <?php the_widget('WP_Widget_Recent_Posts'); ?>

                    </div><!-- .page-content -->
                </div><!-- .error-404 -->
            </main><!-- #main -->
        </section><!-- #primary -->
    </div>
</div>

<?php get_footer(); ?>
