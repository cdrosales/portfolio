<?php get_header(); ?> 
<div class="page-info-wrapper">
    <h2><?php wp_title(''); ?></h2>
    <p>Specializing predominantly in the fitness industry, I’ve helped 
        create quality content for several fitness influencers to market their brand.</p>
</div>


<div class="grid-img-wrapper photography-grid">
    <?php if( have_posts() ):
        while ( have_posts() ): 
            the_post();?> 

       <?php the_post_thumbnail('large'); ?>

        <?php endwhile; ?> 

        <?php the_posts_navigation(); ?> 
    <?php else : ?>
            <p>No posts found</p>
<?php endif; ?>
</div>

<?php get_footer(); ?>