<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>

        <?php
        while ( have_posts() ) :
            the_post();
        ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                </header>

                <div class="entry-content">
                    <?php
                    the_content();
                    ?>
                </div>
            </article>

        <?php endwhile; ?>

        <div class="pagination">
            <?php
            the_posts_navigation();
            ?>
        </div>

    <?php else : ?>

        <section class="no-results not-found">
            <header class="page-header">
                <h2><?php esc_html_e( 'Nothing Found', 'databook' ); ?></h2>
            </header>

            <div class="page-content">
                <p><?php esc_html_e( 'Sorry, no results were found.', 'databook' ); ?></p>
            </div>
        </section>

    <?php endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
