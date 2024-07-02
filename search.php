<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <?php if (have_posts()) : ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php printf(__('Search Results for: %s', 'my-bootstrap-theme'), '<span>' . get_search_query() . '</span>'); ?>
                </h1>
            </header>

            <?php
            while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-4'); ?>>
                    <header class="entry-header">
                        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                            </a>
                        <?php endif; ?>
                    </div><!-- .entry-thumbnail -->

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                        <div class="entry-meta">
                            <span class="posted-on"><?php echo get_the_date(); ?></span>
                        </div><!-- .entry-meta -->
                    </footer><!-- .entry-footer -->
                </article><!-- #post-<?php the_ID(); ?> -->
            <?php endwhile;

            // Pagination
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('« Previous', 'my-bootstrap-theme'),
                'next_text' => __('Next »', 'my-bootstrap-theme'),
            ));
        else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.', 'my-bootstrap-theme'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
