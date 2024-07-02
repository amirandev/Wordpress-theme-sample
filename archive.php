<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <?php
        if (have_posts()) :
            the_archive_title('<h1 class="page-title">', '</h1>');
            while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-content -->
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
