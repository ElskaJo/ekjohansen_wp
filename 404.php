<?php get_header(); ?>

<main class="generic__missing-page" id="content" role="main">
    <article id="post-0" class="primary-grid small-grid">
        <header class="form__header">
            <h1 class="entry-title"><?php esc_html_e( 'Not Found', 'snowfall' ); ?></h1>
        </header>
        <div class="form__message">
            <p>I'm sorry, I haven't created that page.</p>
            <p>There are lots of other pages though, pages that need your attention and pictures of my cat that absolutely require you see them. </p>
            <p>Head over to 'Play', to see Petunia in all her glory, or use the search below.</p>
        </div>
        <div class="form__input">
            <?php get_search_form(); ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>