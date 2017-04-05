<?php get_header(); ?>


    <section id="content">
        <div class="main-content">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>

        </div>
    </section>

<?php get_footer();