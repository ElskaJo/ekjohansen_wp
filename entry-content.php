<header>
    <h1><?php the_title(); ?></h1>
</header>

<div class="post__bg">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post__img">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <?php get_template_part( 'entry-meta' ); ?>

    <?php the_content(); ?>

    <div class="entry-links"><?php wp_link_pages(); ?></div>
</div>


