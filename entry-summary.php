<?php if ( has_post_thumbnail() ) : ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
<?php endif; ?>


<header>
    <?php if ( is_singular() ) {
    echo '<h1 class="entry-title">';
    } else {
    echo '<h2 class="entry-title">';
    } ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
    <?php if ( is_singular() ) {
    echo '</h1>';
    } else {
    echo '</h2>';
    } ?> 
    
</header>

<?php the_excerpt(); ?>

<?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>

<?php if ( is_search() ) { ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php } ?>
