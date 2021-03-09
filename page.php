<?php get_header(); ?>

<main class="generic__alt-pg" id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="header">
            <h1 class="entry-title"><?php the_title(); ?></h1> 
        </header>
        <div class="alt__content-blocks">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
            
        </div>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
    </article>

    <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>