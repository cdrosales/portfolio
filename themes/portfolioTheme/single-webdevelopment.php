<?php get_header(); ?>


    
<?php if( have_posts() ):
    while ( have_posts() ): 
        the_post();?> 

    <div class="page-info-wrapper">
        <h2><?php the_title(); ?></h2> 
       <p><?php the_excerpt(); ?></p>
    </div>

    <div class="content-wrapper">
        <?php the_content(); ?>
    </div>


    <?php endwhile; ?> 

    <?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>