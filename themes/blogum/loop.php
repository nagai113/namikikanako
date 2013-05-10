<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div <?php post_class('clear'); ?> id="post_<?php the_ID(); ?>">
            <div class="post_meta">
                <h2><a href="<?php the_permalink() ?>" title="<?php printf( esc_attr__('Permalink to %s'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <div class="post_data">
                    <div class="post_date"><?php the_time(__('Y-m-d')) ?></div>
                    <div class="post_categories"><?php the_category(', '); ?></div>
                </div>
            </div>
            <div class="post_content">
                <?php the_content(false); ?>
                <a href="<?php the_permalink() ?>#more" class="more">続きを読む...</a>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>