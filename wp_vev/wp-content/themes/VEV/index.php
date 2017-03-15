<?php get_header(); ?>

        <div class="main-content">
            <div class="description">
                <h1 class="entry-title"><?php the_title(); ?></h1> <!-- Page Title -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>