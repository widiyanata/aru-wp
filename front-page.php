<?php

/**
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aruraharja
 */

get_header();
?>
<div id="content" class="site-content py-5 mt-4">
  <div id="primary" class="content-area">

    <main id="main" class="site-main">

      <!-- Carousel -->
      <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <!-- <ol class="carousel-indicators">
    <li
      data-bs-target="#carouselId"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="First slide"
    ></li>
    <li
      data-bs-target="#carouselId"
      data-bs-slide-to="1"
      aria-label="Second slide"
    ></li>
    <li
      data-bs-target="#carouselId"
      data-bs-slide-to="2"
      aria-label="Third slide"
    ></li>
  </ol> -->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="wp-content/uploads/sites/9/2022/10/homebanner.png" class="w-100 d-block" alt="First slide" />
            <div class="carousel-caption d-none d-md-block">
              <h3>
                Layanan Aru Raharja hadir sebagai solusi untuk berbagai industri anda
              </h3>
              <p>
                ARU merupakan perusahaan pelayanan terbaik yang bertransformasi ke
                arah digital, berfokus pada penyedia barang dan jasa yang dapat
                menjadi solusi kebutuhan para mitra.
              </p>
              <a href="#" class="btn btn-default bg-white rounded-0 mt-3 text-primary d-none">Lihat detail</a>
            </div>
          </div>
          <!--   <div class="carousel-item">
      <img
        src="https://picsum.photos/1400/600"
        class="w-100 d-block"
        alt="First slide"
      />
      <div class="carousel-caption d-none d-md-block">
        <h3>
          Layanan Aru Raharja hadir sebagai solusi untuk berbagai industri anda
        </h3>
        <p>
          ARU merupakan perusahaan pelayanan terbaik yang bertransformasi ke arah digital, 
		  berfokus pada penyedia barang dan jasa yang dapat menjadi solusi kebutuhan para mitra. 
        </p>
        <a href="#" class="btn btn-default bg-white rounded-0 mt-3 text-primary d-none"
          >Lihat detail</a
        >
      </div>
    </div>
    <div class="carousel-item">
      <img
        src="https://picsum.photos/1400/600"
        class="w-100 d-block"
        alt="First slide"
      />
      <div class="carousel-caption d-none d-md-block">
        <h3>
          Layanan Aru Raharja hadir sebagai solusi untuk berbagai industri anda
        </h3>
        <p>
          ARU merupakan perusahaan pelayanan terbaik yang bertransformasi ke arah digital, 
		  berfokus pada penyedia barang dan jasa yang dapat menjadi solusi kebutuhan para mitra. 
        </p>
        <a href="#" class="btn btn-default bg-white rounded-0 mt-3 text-primary d-none"
          >Lihat detail</a
        >
      </div>
    </div> -->
        </div>
        <!-- <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#carouselId"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#carouselId"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
      </div>

      <!-- Servis -->
      <div class="servis py-lg-5 p-3 bg-light">
        <div class="container">
          <!-- header servis -->
          <div class="servis-header text-center py-5">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <h2 class="text-primary">Solusi bisnis untuk perusahaan anda</h2>
                <p>
                  Layanan Aru Raharja hadir sebagai solusi untu meningkatkan dan
                  memenuhi kebutuhan perusahaan anda.
                </p>
              </div>
            </div>
          </div>
          <!-- Konten Servis -->
          <div class="servis-konten pb-5">
            <div class="row">
              <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                  <img class="card-img-top" src="wp-content/uploads/sites/9/2022/10/Rectangle-Copy-271.png" alt="Title" />
                  <div class="card-body">
                    <div class="card-category pb-3 d-flex align-items-center">
                      <img src="wp-content/uploads/sites/9/2022/10/aru-contractor.png" class="img-fluid me-3" width="30" alt="" />
                      <span class="fs-4"> <b>ARU</b><i>contactor</i> </span>
                    </div>
                    <p class="card-text">
                      Layanan jasa konstruksi yang profesional dan qualified dengan
                      komitmen menjadi solusi terbaik bagi seluruh kebutuhan bisnis
                      Anda.
                    </p>

                    <a href="pages/aru-contractor.html" class="btn px-0 bg-transparent text-primary nav-ajax">Lihat detail <i class="ms-2 fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                  <img class="card-img-top" src="wp-content/uploads/sites/9/2022/10/Rectangle-Copy-27.png" alt="Title" />
                  <div class="card-body">
                    <div class="card-category pb-3 d-flex align-items-center">
                      <img src="wp-content/uploads/sites/9/2022/10/aru-trans.png" class="img-fluid me-3" width="30" alt="" />
                      <span class="fs-4"> <b>ARU</b><i>trans</i> </span>
                    </div>
                    <p class="card-text">
                      Layanan sewa kendaraan yang menjadi solusi terbaik bagi seluruh
                      kebutuhan bisnis Anda.
                    </p>

                    <a href="pages/aru-trans.html" class="btn px-0 bg-transparent text-primary nav-ajax">Lihat detail <i class="ms-2 fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                  <img class="card-img-top" src="wp-content/uploads/sites/9/2022/10/Rectangle-Copy-27-1.png" alt="Title" />
                  <div class="card-body">
                    <div class="card-category pb-3 d-flex align-items-center">
                      <img src="wp-content/uploads/sites/9/2022/10/aru-log.png" class="img-fluid me-3" width="30" alt="" />
                      <span class="fs-4"> <b>ARU</b><i>log</i> </span>
                    </div>
                    <p class="card-text">
                      Layanan logistik yang menjadi solusi terbaik bagi seluruh
                      kebutuhan bisnis Anda.
                    </p>

                    <a href="pages/aru-log.html" class="btn px-0 bg-transparent text-primary nav-ajax">Lihat detail <i class="ms-2 fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                  <img class="card-img-top" src="wp-content/uploads/sites/9/2022/10/Rectangle-Copy-27-2.png" alt="Title" />
                  <div class="card-body">
                    <div class="card-category pb-3 d-flex align-items-center">
                      <img src="wp-content/uploads/sites/9/2022/10/aru-park.png" class="img-fluid me-3" width="30" alt="" />
                      <span class="fs-4"> <b>ARU</b><i>park</i> </span>
                    </div>
                    <p class="card-text">
                      Layanan parkir yang menjadi solusi terbaik bagi seluruh
                      kebutuhan bisnis.
                    </p>

                    <a href="pages/aru-park.html" class="btn px-0 bg-transparent text-primary nav-ajax">Lihat detail <i class="ms-2 fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="servis-konten pb-5">
            <div class="row">
              <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                  <img class="card-img-top" src="wp-content/uploads/sites/9/2022/10/Rectangle-Copy-27-6.png" alt="Title" />
                  <div class="card-body">
                    <div class="card-category pb-3 d-flex align-items-center">
                      <img src="wp-content/uploads/sites/9/2022/10/aru-ads.png" class="img-fluid me-3" width="30" alt="" />
                      <span class="fs-4"> <b>ARU</b><i>ads</i> </span>
                    </div>
                    <p class="card-text">
                      Layanan multimedia yang menjadi solusi terbaik bagi seluruh
                      kebutuhan bisnis Anda.
                    </p>

                    <a href="pages/aru-ads.html" class="btn px-0 bg-transparent text-primary nav-ajax">Lihat detail <i class="ms-2 fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                  <img class="card-img-top" src="wp-content/uploads/sites/9/2022/10/Rectangle-Copy-27-5.png" alt="Title" />
                  <div class="card-body">
                    <div class="card-category pb-3 d-flex align-items-center">
                      <img src="wp-content/uploads/sites/9/2022/10/aru-digital.png" class="img-fluid me-3" width="30" alt="" />
                      <span class="fs-4"> <b>ARU</b><i>digital</i> </span>
                    </div>
                    <p class="card-text">
                      Layanan sistem informasi berbasis cloud yang menjadi solusi
                      terbaik bagi seluruh kebutuhan bisnis Anda.
                    </p>

                    <a href="pages/aru-digital.html" class="btn px-0 bg-transparent text-primary nav-ajax">Lihat detail <i class="ms-2 fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                  <img class="card-img-top" src="wp-content/uploads/sites/9/2022/10/Rectangle-Copy-27-4.png" alt="Title" />
                  <div class="card-body">
                    <div class="card-category pb-3 d-flex align-items-center">
                      <img src="wp-content/uploads/sites/9/2022/10/aru-sourcing.png" class="img-fluid me-3" width="30" alt="" />
                      <span class="fs-4"> <b>ARU</b><i>source</i> </span>
                    </div>
                    <p class="card-text">
                      Layanan tenaga kerja yang profesional dan qualified dengan
                      komitmen menjadi solusi terbaik bagi seluruh kebutuhan bisnis
                      Anda.
                    </p>

                    <a href="pages/aru-source.html" class="btn px-0 bg-transparent text-primary nav-ajax">Lihat detail <i class="ms-2 fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                  <img class="card-img-top" src="wp-content/uploads/sites/9/2022/10/Rectangle-Copy-27-3.png" alt="Title" />
                  <div class="card-body">
                    <div class="card-category pb-3 d-flex align-items-center">
                      <img src="wp-content/uploads/sites/9/2022/10/aru-space.png" class="img-fluid me-3" width="30" alt="" />
                      <span class="fs-4"> <b>ARU</b><i>space</i> </span>
                    </div>
                    <p class="card-text">
                      Menyediakan working space, virtual office. dan event space
                      dengan lokasi strategis untuk menjadi solusi terbaik bagi
                      seluruh kebutuhan bisnis Anda.
                    </p>

                    <a href="pages/aru-space.html" class="btn px-0 bg-transparent text-primary nav-ajax">Lihat detail <i class="ms-2 fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Kenapa pilih aru -->
      <div id="why-us" class="py-5 text-white">
        <div class="why-wrapper py-5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="why-header">
                  <h3>Kenapa pilih ARU</h3>
                  <p>
                    Memiliki jaringan luas yang dikelola secara professional, didukung
                    dengan tenaga kerja yang kompeten untuk memberikan solusi bagi
                    segala kebutuhan bisnis Anda.
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="why-content px-lg-5 text-center">
                      <div class="why-icon mb-4">
                        <img src="wp-content/uploads/sites/9/2022/10/why-us-pengalaman.png" class="img-fluid" alt="" />
                      </div>
                      <p>
                        <b>Pengalaman</b>
                      </p>
                      <p>
                        Lebih dari puluhan tahun melayani mitra perusahaan di seluruh
                        Indonesia
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="why-content px-lg-5 text-center">
                      <div class="why-icon mb-4">
                        <img src="wp-content/uploads/sites/9/2022/10/why-us-pro.png" class="img-fluid" alt="" />
                      </div>
                      <p>
                        <b>Profesional</b>
                      </p>
                      <p>
                        Merekrut serta melatih talenta-talenta terbaik dan
                        berpengalaman
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Klien -->
      <div id="klien" class="py-5">
        <div class="klien-wrapper pt-5">
          <div class="container">
            <div class="klien-header">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="text-center">
                    <h2 class="text-primary">Klien kami</h2>
                    <p class="text-secondary">
                      Layanan ARU Raharja telah dipercayai oleh berbagai perusahaan
                      kelas dunia dari berbagai industri untuk membantu mereka
                      berkembang
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="klien-lists py-4">
              <div class="row row-cols-6">
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-djarum.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-anram.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-indofood.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-pertamina.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-astra.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-mandiri.png" alt="" />
                </div>
              </div>
            </div>

            <!-- <p class="text-center">
        <a href="#" class="btn px-0 bg-transparent text-primary"
          >Lihat semua klien <i class="ms-2 fas fa-arrow-right"></i
        ></a>
      </p> -->
          </div>
        </div>
      </div>

      <!-- Mitra Kerja -->
      <div id="mitra-kerja" class="py-5">
        <div class="mitra-kerja-wrapper pt-5">
          <div class="container">
            <div class="mitra-kerja-header">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="text-center">
                    <h2 class="text-primary">Mitra Kerja Kami</h2>
                    <p class="text-secondary">
                      Layanan ARU Raharja telah dipercayai oleh berbagai perusahaan
                      kelas dunia dari berbagai industri untuk membantu mereka
                      berkembang
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="mitra-kerja-lists py-4">
              <div class="row row-cols-6">
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-djarum.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-anram.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-indofood.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-pertamina.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-astra.png" alt="" />
                </div>
                <div class="col mb-5">
                  <img src="wp-content/uploads/sites/9/2022/10/logo-mandiri.png" alt="" />
                </div>
              </div>
            </div>

            <!-- <p class="text-center">
        <a href="#" class="btn px-0 bg-transparent text-primary"
          >Lihat semua klien <i class="ms-2 fas fa-arrow-right"></i
        ></a>
      </p> -->
          </div>
        </div>
      </div>

      <!-- Artikel dan Berita -->
      <div id="artikel" class="py-5">
        <div class="artikel-wrapper">
          <div class="container">
            <div class="artikel-header mb-5">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <h2 class="text-primary">Artikel & berita</h2>
                  <p class="text-secondary">
                    Temukan informasi menarik, pengumuman, artikel dan berita tentang
                    ARU Raharja dan layanannya
                  </p>
                </div>
                <div class="col-md-6 text-end">
                  <!-- <a href="#" class="btn btn-primary text-white rounded-0"
              >Lihat semua berita</a
            > -->
                </div>
              </div>
            </div>
            <div class="artikel-contents">
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

                  <div class="row g-3">
                    <!-- Grid Layout -->
                    <?php if ($loop->have_posts()) : ?>
                      <?php $i = 0;
                      while ($loop->have_posts()) : $loop->the_post();
                        $i++; ?>
                        <?php if (is_sticky()) continue; //ignore sticky posts
                        ?>
                        <div class="col-md-4">
                          <div class="card  h-100 horizontal border-0">
                            <div class="row g-0">
                              <!-- Featured Image-->
                              <?php if (has_post_thumbnail()) {
                                $class_card = ($i == 1 || $i == 2) ? "" : "col-lg-4";
                                echo '<div class="card-img-left-md  ' . $class_card . '">' . get_the_post_thumbnail(null, 'medium', array("class" => "")) . '</div>';
                              }
                              ?>
                              <div class="col d-flex align-items-center">
                                <div class="card-body">
                                  <div class="mb-2">
                                    <?php aruraharja_category_badge("badge-outline"); ?>
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
                                      aruraharja_date();
                                      // aruraharja_author();
                                      // aruraharja_comments();
                                      // aruraharja_edit();
                                      ?>
                                    </small>
                                  <?php endif; ?>
                                  <!-- Excerpt & Read more -->
                                  <div class="card-text mt-auto d-none">
                                    <?php the_excerpt(); ?> <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'aruraharja'); ?></a>
                                  </div>
                                  <!-- Tags -->
                                  <?php aruraharja_tags(); ?>
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
                    <?php aruraharja_pagination(); ?>
                  </div>

                </div>
              </div>
              <!-- row -->
            </div>
          </div>
        </div>
      </div>

      <div class="aru-contact py-5 bg-light">
        <div class="aru-contact-wrapper py-lg-5">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="aru-contact-header text-center mb-5">
                  <div class="w-50 mx-auto">
                    <h3 class="text-primary">Hubungi Kami</h3>
                    <p>
                      Apabila anda memiliki pertanyaan mengenai penyewaan ruang kantor
                      dan apa saja fasilitas yang diberikan, silahkan hubungi kami
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card border-0 mb-5">
                  <div class="card-body p-lg-5">
                    <form action="">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="" class="form-label fw-bold">Nama Anda</label>
                            <input type="text" class="form-control form-control-lg py-3" name="" aria-describedby="" placeholder="Nama Anda" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="" class="form-label fw-bold">Alamat Email Anda</label>
                            <input type="text" class="form-control form-control-lg py-3" name="" aria-describedby="" placeholder="Alamat Email Anda" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-3">
                            <label for="" class="form-label fw-bold">Pesan Anda</label>
                            <textarea class="form-control form-control-lg py-3" name="" id="" rows="3" placeholder="Ketik pesan anda disini..."></textarea>
                          </div>

                          <div class="mb-3">
                            <input type="submit" class="btn btn-primary rounded-0 px-3" value="Kirim Pesan" />
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="aru-contact-box-wrapper pb-5">
              <div class="row">
                <div class="col-md-6">
                  <div class="aru-contact-box h-100 rounded text-center my-5 p-3 bg-white text-dark d-flex align-items-center justify-content-center">
                    <div>
                      <div class="icon mb-4">
                        <img src="wp-content/uploads/sites/9/2022/10/wa.png" alt="" />
                      </div>
                      <h4 class="fw-bold">(+62) 8193 2288 846</h4>
                      <p>Hubungi Kami</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="aru-contact-box h-100 rounded text-center my-5 p-3 bg-white text-dark d-flex align-items-center justify-content-center">
                    <div>
                      <div class="icon mb-4">
                        <img src="wp-content/uploads/sites/9/2022/10/loc.png" alt="" />
                      </div>
                      <h4 class="fw-bold">pusat@aruraharja.com</h4>
                      <p>Email Kami</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
