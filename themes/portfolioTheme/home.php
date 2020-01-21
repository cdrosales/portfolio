<?php get_header(); ?> 

<div class="page-info-wrapper">
    <h2><?php wp_title(''); ?></h2>
    <p>I create responsive designs and native apps to showcase a product(s) 
        in a user friendly and accessible format.</p>
</div>

<div class="grid-img-wrapper">
<?php if( have_posts() ): 
    while ( have_posts() ): 
        the_post();?> 

   
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>


    <?php endwhile; ?> 

    <?php the_posts_navigation(); ?>

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>
</div>


<?php get_footer(); ?>