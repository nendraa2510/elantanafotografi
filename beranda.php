
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $judul; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="<?= site_url('assets/front') ?>/assets/img/logo (2).png" />
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Fonts -->
  <link href="<?= base_url('assets/front/'); ?>https://fonts.googleapis.com" rel="preconnect">
  <link href="<?= base_url('assets/front/'); ?>https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="<?= base_url('assets/front/'); ?>https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/front/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/front/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/front/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('assets/front/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/front/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/front/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url('assets/front/'); ?>assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    .img-container {
        width: 100%;
        height: 300px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .img-container img {
        width: 100%;
        height: auto;
        object-fit: contain;
    }
</style>
<body class="blog-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><?= $konfig->judul_website; ?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <?php foreach ($kategori as $kate) { ?>
                        <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="nav-item nav-link">
                            <?= $kate['nama_kategori'] ?>
                        </a>
                    <?php } ?>
          <!-- <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="blog.html" class="active">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="<?= base_url('auth') ?>" class="btn btn-danger px-4">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <!-- <h1>Blog</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p> -->
        <nav class="breadcrumbs">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $no = 1;
                    foreach ($caraousel as $aa) { ?>
                        <div class="carousel-item <?php if ($no == 1) {
                                                        echo 'active';
                                                    } ?>">
                            <img src=" <?= base_url('assets/upload/caraousel/' . $aa['foto']) ?> " class="d-block w-100">
                        </div>
                    <?php $no++;
                    } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
          <!-- <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Blog</li>
          </ol> -->
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="row pb-3 px-4 mt-4">
                <?php $no = 1;
                foreach ($konten as $uu) { ?>
                    <div class="col-lg-4 mb-4">

                        <div class="card border-0 shadow-sm mb-2">
                            <div class="img-container">
                                <img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>">
                            </div>
                            <div class="card-body bg-light text-center p-4">
                                <h4 class=""><?= $uu['judul'] ?></h4>
                                <div class="d-flex justify-content-center mb-3">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> <?= $uu['nama'] ?></small>
                                    <!-- <small class="mr-3"><i class="fa fa-folder text-primary"></i> <?= $uu['nama_kategori'] ?></small> -->
                                </div>
                                <a href="<?= base_url('home/artikel/' . $uu['slug']) ?>" class="btn btn-danger px-4 mx-auto my-2">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
                <!-- <div class="col-md-12 mb-4">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
    <!-- <section id="blog-posts" class="blog-posts section">
      <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4">
          <?php foreach ($konten as $aa) { ?>
                <article>
                  <div class="post-img">
                    <img src="<?= base_url('assets/upload/konten/'.$aa['foto'] )?>" alt="" class="img-fluid">
                  </div>

                  <p class="post-category">Entertainment</p>

                  <h2 class="title">
                    <a href="blog-details.html"></a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author">Mark Dower</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jun 22, 2022</time>
                      </p>
                    </div>
                  </div>
                </article>
              </div>End post list item
            </div>
            <?php } ?>
        </div>
      </div>

    </section> -->

    <!-- Blog Pagination Section -->
    <!-- <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section>  -->
    <!-- /Blog Pagination Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename"><?= $konfig->judul_website; ?></h3>
      <p><?= $konfig->profil_website;?></p>
      <div class="social-links d-flex justify-content-center">
        <p><?= $konfig->email; ?></p>
        |
        <p>+<?= $konfig->no_wa; ?></p>|
        <p><?= $konfig->alamat; ?></p>
        <!-- <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a> -->
      </div>
      <div class="container">
        <div class="copyright">
          <span>©</span> <strong class="px-1 sitename"><?= $konfig->judul_website; ?></strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a> -->
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/front/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= base_url('assets/front/'); ?>assets/js/main.js"></script>

</body>

</html>