<?php get_header(); ?> 
<div class="page-info-wrapper">
    <h2><?php wp_title(''); ?></h2>
    <p>I develop custom WordPress themes including CMS data entry, maintenance and client training.</p>
</div>


    <div class="wide-grid-wrapper">
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