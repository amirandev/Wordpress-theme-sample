<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <?php
        while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header><!-- .entry-header -->

                <div class="entry-thumbnail mb-4">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                    <?php endif; ?>
                </div><!-- .entry-thumbnail -->

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <div class="entry-meta">
                        <span class="posted-on"><?php echo get_the_date(); ?></span>
                    </div><!-- .entry-meta -->
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>
