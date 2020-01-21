<?php get_header(); ?>

<?php if( have_posts() ): 

    while ( have_posts() ): 
        the_post();?> 

    <div class="front-page-wrapper">
        <div class="front-page-content">
            <ul>
                <li>Developer.</li>
                <li>Designer.</li>
                <li>Photographer.</li>
                <li>Videographer.</li>
            <ul>
            <?php the_content(); ?>
        </div>

        <div class="front-page-img">
        <?php the_post_thumbnail(); ?>
        </div>
    </div>

    <?php endwhile; ?> 

    <?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>