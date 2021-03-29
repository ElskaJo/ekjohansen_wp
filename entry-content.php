<header>
    <h1><?php the_title(); ?></h1>
</header>

<div class="post__bg">

<?php if ( in_category( 'play' ) ) : ?>
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div id="post" class="post__featured-img" style="background-image: url('<?php echo $thumb['0'];?>')">
        </div> 
    <?php endif; ?>

    <?php get_template_part( 'entry-meta' ); ?>

    <?php the_content(); ?>

    <div class="entry-links"><?php wp_link_pages(); ?></div>
</div>

