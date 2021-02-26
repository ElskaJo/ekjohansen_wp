<?php
/**
 * The main template file
 *
 * This is our generic template, what a page shows if no home.php exists. though, i don't think we're supposed to name it home.php anymore. Let's look into that. 
 * 
 * This, as are all pages on ekjohansen.com, are built off the snowfall boiler template. Because there is no better way to learn, than to do. And it's been a minute since I've built a WP theme from the ground up again.
 *
 */

 get_header(); ?>
 
<main class="primary-grid home-grid" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</main>

<?php get_footer(); ?>