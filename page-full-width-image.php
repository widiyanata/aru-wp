<?php

/**
 * Template Name: Full Width Image
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aruraharja
 */

get_header();
?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>

        <main id="main" class="site-main">

            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
            <header class="entry-header featured-full-width-img height-50 bg-dark text-light mb-3 d-flex align-items-end " style="background-image: url('<?php echo $thumb['0']; ?>')">
                <div class="container entry-header pb-3">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
            </header>

            <div class="container pb-5">

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">

                </footer>

                <?php comments_template(); ?>

            </div><!-- container -->

        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
