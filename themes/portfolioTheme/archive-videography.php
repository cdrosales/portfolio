<?php get_header(); ?> 
<div class="page-info-wrapper">
    <h2><?php wp_title(''); ?></h2>
    <p>Below are videos I’ve shot and edited for the client’s personal brand 
        to aid in reaching various audiences via social media.</p>
</div>


    <div class="wide-grid-wrapper">
            <?php if( have_posts() ):
                while ( have_posts() ): 
                    the_post();?> 
                
                <?php the_content(); ?>
 


                <?php endwhile; ?> 

                <?php the_posts_navigation(); ?> 
            <?php else : ?>
                    <p>No posts found</p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>