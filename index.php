<?php
/**
 * The main template file (fallback for posts/pages that aren't the front page).
 *
 * @package MillionDollarIdeasTheme
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: calc(var(--mdi-header-h) + 40px); padding-bottom: 90px;">
        <?php if ( have_posts() ) : ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <h1 class="section-title" style="margin-bottom: 48px;"><?php single_post_title(); ?></h1>
            <?php endif; ?>

            <div class="services-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'glass-card' ); ?> style="padding: 32px;">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" style="display:block; margin: -32px -32px 24px; border-radius: var(--mdi-radius) var(--mdi-radius) 0 0; overflow:hidden;">
                                <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%;height:auto;display:block;' ) ); ?>
                            </a>
                        <?php endif; ?>
                        <h3 style="font-size:24px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div style="color: var(--mdi-muted);"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="text-link">Read More <span class="material-symbols-rounded">arrow_forward</span></a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div style="margin-top: 48px;">
                <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
            </div>

        <?php else : ?>
            <h1 class="section-title">Nothing here yet</h1>
            <p style="color: var(--mdi-muted);">It looks like nothing was found. Try the navigation above.</p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
