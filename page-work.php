<?php 

/* 
** Template Name: Work 
*/

get_header(); ?>

<main class="" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="primary-grid work-grid" id="post-<?php the_ID(); ?>">
         <?php the_content(); ?>     
    </article>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>