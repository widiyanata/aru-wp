<?php

/**
 * Template Name: Frontpage New
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Widiyanata
 */

get_header();
?>
<div id="content" class="site-content container py-5 mt-4">
  <div id="primary" class="content-area">

    <main id="main" class="site-main">

      <!-- Header -->
      <div class="bootstore-header py-3 py-md-5">
        <h1 class="display-4 fw-bold"><?php bloginfo('name'); ?></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>
      </div>

      <!-- Sticky posts custom card -->
      <section id="sticky-posts" class="wrapper pb-4">
        <!-- Sticky Post -->
        <?php if (is_sticky() && is_home() && !is_paged() || is_front_page()) : ?>
          <div class="row flex-nowrap overflow-auto g-3 custom-scrollbar">

            <?php
            $args = array(
              'posts_per_page' => 4,
              'post__in'  => get_option('sticky_posts'),
              'ignore_sticky_posts' => 2
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
              $i = 0;
              while ($the_query->have_posts()) : $the_query->the_post();
                $i++; ?>
                <div class="col-sm-4 col-md-3 <?= $i == 1 ? "col-10 col-lg-9" : ""; ?>">
                  <div id="post-<?php the_ID(); ?>" <?php post_class("card text-white card-has-bg click-col mb-3"); ?> style="background-image:url('<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>');">
                    <!-- Featured Image-->
                    <?php if (has_post_thumbnail())
                      echo '<div class="card-img d-none">' . get_the_post_thumbnail(null, 'medium') . '</div>';
                    ?>

                    <div class="card-img-overlay d-flex flex-column">
                      <div class="card-body">

                        <h4 class="card-title mt-0 h5"><a class="text-white text-decoration-none" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                          </a></h4>
                        <!-- Meta -->
                        <?php if ('post' === get_post_type()) : ?>
                          <small class="mb-2">
                            <?php
                            widiyanata_author();
                            ?>
                          </small>
                        <?php endif; ?>
                      </div>
                      <div class="card-footer">
                        <div class="media">
                          <div class="media-body">
                            <small class="card-meta mb-2"><?php widiyanata_category_badge(); ?></small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
            endif;
            wp_reset_postdata();
            ?>

          </div>
          <!-- row -->
        <?php endif; ?>
      </section>



      <!-- Post List -->
      <?php
      $arg = array(
        'post_type'     =>  'post',
        'post_status'   =>  'publish',
        'orderby' => 'id',
        'order' => 'desc'
      );
      $loop = new WP_Query($arg);
      ?>

      <div class="row g-2">
        <div class="col">
          <div class="section-title pt-3">
            <div class="row">
              <div class="col">
                <h3 class="h5 widget-title text-uppercase card-title border-bottom"><span class="d-inline-block"><?php echo esc_html__('Latest News', 'widiyanata') ?></span></h3>
              </div>
            </div>
          </div>
          <div class="row g-3">
            <!-- Grid Layout -->
            <?php if ($loop->have_posts()) : ?>
              <?php $i=0; while ($loop->have_posts()) : $loop->the_post(); $i++; ?>
                <?php if (is_sticky()) continue; //ignore sticky posts
                ?>
                <div class="col-md-6">
                  <div class="card  h-100 horizontal p-2 shadow-sm border-0">
                    <div class="row g-0">
                      <!-- Featured Image-->
                      <?php if (has_post_thumbnail()) {
                        $class_card = ($i == 1 || $i == 2) ? "" : "col-lg-4";
                        echo '<div class="card-img-left-md  '. $class_card .'">' . get_the_post_thumbnail(null, 'medium', array("class" => "rounded border")) . '</div>';
                      }
                      ?>
                      <div class="col d-flex align-items-center">
                        <div class="card-body">
                          <div class="mb-2">
                            <?php widiyanata_category_badge("badge-outline"); ?>
                          </div>
                          <!-- Title -->
                          <h2 class="blog-post-title h6">
                            <a href="<?php the_permalink(); ?>">
                              <?php the_title(); ?>
                            </a>
                          </h2>
                          <!-- Meta -->
                          <?php if ('post' === get_post_type()) : ?>
                            <small class="text-secondary mb-2">
                              <?php
                              widiyanata_date();
                              // widiyanata_author();
                              // widiyanata_comments();
                              // widiyanata_edit();
                              ?>
                            </small>
                          <?php endif; ?>
                          <!-- Excerpt & Read more -->
                          <div class="card-text mt-auto d-none">
                            <?php the_excerpt(); ?> <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'widiyanata'); ?></a>
                          </div>
                          <!-- Tags -->
                          <?php widiyanata_tags(); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <!-- Pagination -->
          <div>
            <?php widiyanata_pagination(); ?>
          </div>

        </div>
        <!-- col -->
        <?php get_sidebar(); ?>
      </div>
      <!-- row -->

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
