<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aruraharja
 */

?>
<footer id="footer" class="footer mt-auto bg-light text-secondary">
      <div class="newsletter py-5">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md-4 text-white">
              <h3>Berlangganan newsletter</h3>
              <p>
                Dapatkan informasi terbaru seperti berita, tips dan trik serta
                penawaran menarik dari Aru Raharja
              </p>
            </div>
            <div class="col-md-4">
              <form action="" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="name" id="name" placeholder="" aria-label="">
                  <span class="input-group-btn">
                    <button class="btn bg-white" type="button" aria-label="">
                      <i class="fas fa-arrow-right"></i>
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom pt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="footer-logo mb-3">
                <img src="assets/img/aru-logo.png" class="img-fluid" alt="">
                <b class="text-uppercase fs-5">ARU RAHARJA</b>
              </div>
              <p>Wisma Raharja Lt 7, Jl. TB Simatupang, Cilandak Timur, jakarta Selatan, DKI jakarta, 12560, Indonesia</p>
              
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h6>Quick Links</h6>
              <ul class="list-unstyled">
                <li>
                  <a href="#" class="text-dark">
                    Produk
                  </a>
                </li>
                <li>
                  <a href="#" class="text-dark">
                    Tetang kami
                  </a>
                </li>
                <li>
                  <a href="#" class="text-dark">
                    Berita
                  </a>
                </li>
                <li>
                  <a href="#" class="text-dark">
                    Karir
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <p class="footer-contact">
                <span>
                  <i class="fas fa-phone    "></i> Telp: (021) 781 824
                </span>
                <span>
                  <i class="fas fa-mail-bulk    "></i> Email: pusat@aruraharja.co.id
                </span>
              </p>
            </div>
            <div class="col-md-4">
              <p>
                Ikuti kami: 
                <a href="#" class="mx-2">
                  <img src="assets/img/fb.png" alt="">
                </a>
                <a href="#" class="mx-2">
                  <img src="assets/img/ig.png" alt="">
                </a>
                <a href="#" class="mx-2">
                  <img src="assets/img/in.png" alt="">
                </a>
              </p>
            </div>
          </div>

        </div>
        <div class="footer-copyright border-top py-4">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <span>PT ARU Raharja &copy;&nbsp;<?php echo Date('Y'); ?>. Hak Cipta Dilindungi Undang-Undang .</span>
              </div>
              <div class="col-md-6 text-end">
                <a href="#">Peta Situs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
<footer class="d-none">



    <div class="aruraharja-footer bg-light pt-5 pb-3">
        <div class="container">
            
            <!-- Top Footer Widget -->
            <?php if ( is_active_sidebar( 'top-footer' )) : ?>
                <div>
                    <?php dynamic_sidebar( 'top footer' ); ?>
                </div>
            <?php endif; ?>            
            
            <div class="row">

                <!-- Footer 1 Widget -->
                <div class="col-md-6 col-lg-3">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 2 Widget -->
                <div class="col-md-6 col-lg-3">
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 3 Widget -->
                <div class="col-md-6 col-lg-3">
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 4 Widget -->
                <div class="col-md-6 col-lg-3">
                    <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-4' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Footer Widgets End -->

            </div>
            
            <!-- Bootstrap 5 Nav Walker Footer Menu -->
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
                    'depth' => 1,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
            ?>
            <!-- Bootstrap 5 Nav Walker Footer Menu End -->
            
        </div>
    </div>
    
    <div class="aruraharja-info bg-light text-muted border-top py-2 text-center">
        <div class="container">
            <small>&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>    
        </div>
    </div>

</footer>

<div class="top-button">
    <a href="#to-top" class="btn btn-primary shadow"><i class="fas fa-chevron-up"></i></a>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
