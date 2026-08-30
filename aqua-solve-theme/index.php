<?php
/**
 * Main Index Fallback Template
 *
 * @package Aqua_Solve
 */

get_header();
?>

<section class="page-banner">
    <div class="container">
        <h1><?php single_post_title(); ?></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p><?php esc_html_e('No content found.', 'aqua-solve'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
