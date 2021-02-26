<?php 
/* Template Name: Home Template 
*/


get_header(); ?>

<main role="main">
    <article class="primary-grid home-grid">
        <?php the_content(); ?>

        <!-- adding the retro blog thingy. goddamn been writing code too long today -->
        <div class="home-grid__retro">
            <h2>Time Machine</h2>
            <div class="home-grid__retro--snippets">
            <?php $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'retro',
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
                            <h3><?php the_title(); ?></h3>
                        </header>
                        <div class="home-grid__retro--content">
                            <?php the_excerpt(); ?>
                            <p class="textlink__right-clear">
                                <a href="<?php the_permalink(); ?>">Read More</a>
                            </p>
                        </div>
                    </div>
                <?php endwhile;
                endif; ?>
            </div>
            <p class="textlink__fullwidth">
                <a href="/articles/retro/">Step into the Dolorian</a>
            </p>
        </div>
    </article>
</main>

<?php get_footer(); ?>