<?php get_header(); ?>

<?php if( have_posts() ): 

    while ( have_posts() ): 
        the_post();?> 

    <?php the_content(); ?>
    <?php the_post_thumbnail(); ?>

    <?php endwhile; ?> 

    <?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>