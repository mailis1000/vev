<?php
/**
 * The default template for displaying content
 **/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="main-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</article><!-- #post-## -->
