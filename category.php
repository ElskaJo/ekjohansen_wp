<?php get_header(); ?>
<main class="category__landing">
    <header class="category__header">
    <h1 class="entry-title"><?php single_term_title(); ?></h1>
    </header>

    <div class="category__landing-desc">
        <?php if ( '' != the_archive_description() ) { echo ( the_archive_description() ); } ?></div>

    <div class="category__landing-blocks">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
    </div>
<?php get_template_part( 'nav', 'below' ); ?>
</main>

<?php get_footer(); ?>