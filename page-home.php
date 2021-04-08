<?php 
/* Template Name: Home Template 
*/


get_header(); ?>

<main class="global__home" id="content" role="main">
    <article class="primary-grid home-grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <!-- adding the retro blog thingy. goddamn been writing code too long today -->
        <div class="home-grid__retro">
            <h2>Recent Musing</h2>
            <div class="home-grid__retro--snippets">
            <?php $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
            );
            $arr_posts = new WP_Query( $args );
        
            if ( $arr_posts->have_posts() ) :
                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                       
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail();
                            endif;
                            ?>
                        <header class="home-grid__retro--subtitle">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        </header>
                        <div class="home-grid__retro--content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </article>
  
</main>

<?php get_footer(); ?>