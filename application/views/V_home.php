<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Webinar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/home/img/favicon.png" rel="icon">
  <link href="assets/home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url().'assets/home/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
  <link href="<?= base_url().'assets/home/vendor/icofont/icofont.min.css' ?>" rel="stylesheet">
  <link href="<?= base_url().'assets/home/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">
  <link href="<?= base_url().'assets/home/vendor/owl.carousel/assets/home/owl.carousel.min.css' ?>" rel="stylesheet">
  <link href="<?= base_url().'assets/home/vendor/venobox/venobox.css' ?>" rel="stylesheet">
  <link href="<?= base_url().'assets/home/vendor/aos/aos.css' ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url().'assets/home/css/style.css' ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.0.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?= base_url('Home') ?>">WEBINAR<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/home/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#team">Pembicara</a></li>
          <li><a href="#about">Webinar</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1><span>Webinar</span> Management Sistem
      </h1>
      <h2>Selamat datang, ini adalah aplikasi pendaftaran webinar.
Untuk calon peserta yang belum punya akun klik tombol Daftar pada list webinar di bawah,
jika sudah memiliki akun bisa langsung klik Masuk
Satu akun bisa digunakan untuk mendaftar beberapa webinar yang ada</h2>
      <div class="d-flex">
        <a href="<?= base_url('Auth') ?>" class="btn-get-started">Masuk</a>
        &nbsp;
        <a href="<?= base_url('Register') ?>" style="background-color: dodgerblue;" class="btn-get-started">Daftar</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

        <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Pembicara Di <span>Webinar</span> Yang Akan Datang</h3>
        </div>

        <div class="row">

          <?php foreach($pembicara as $p): ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url('pembicara/'.$p['pembicara_foto']) ?>" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?= $p['pembicara_nama'] ?></h4>
                <span><?= $p['pembicara_dari'] ?></span>
                <p>Code : <?= $p['pembicara_webinar_id'] ?></p>
              </div>
            </div>
          </div>
          <?php endforeach ?>

        </div>

      </div>
    </section><!-- End Team Section -->

    <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
    <div class="section-title">
          <h3>Webinar Yang Akan <span>Datang</span></h3>
        </div>
    </div>
    </section>

    <?php $n=1; foreach($webinar as $w): ?>
      <?php if(($n % 2)==0): ?>
        <!-- ======= Webinar Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3><?= $w['webinar_nama'] ?></h3>
            <p class="font-italic">
              <?= $w['webinar_deskripsi'] ?>
            </p>
            <ul>
              <li>
                <i class="bx bx-key"></i>
                <div>
                  <h5>Kode Webinar</h5>
                  <p><?= $w['webinar_id'] ?></p>
                </div>
              </li>
            </ul>
            <a href="<?= base_url('Auth') ?>" class="btn btn-primary">Daftar</a>
          </div>
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?= base_url('pamflet/'.$w['webinar_pamflet']) ?>" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End Webinar Section -->
      <?php else: ?>
        <!-- ======= Webinar Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?= base_url('pamflet/'.$w['webinar_pamflet']) ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3><?= $w['webinar_nama'] ?></h3>
            <p class="font-italic">
            <?= $w['webinar_deskripsi'] ?>
            </p>
            <ul>
              <li>
                <i class="bx bx-key"></i>
                <div>
                  <h5>Kode Webinar</h5>
                  <p><?= $w['webinar_id'] ?></p>
                </div>
              </li>
            </ul>
            <a href="<?= base_url('Auth') ?>" class="btn btn-primary">Daftar</a>
          </div>
        </div>

      </div>
    </section><!-- End Webinar Section -->
      <?php endif ?>
    <?php $n++; endforeach ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>WEBINAR<span>.</span></h3>
            <p>
              <strong>Email:</strong> dbs@edu.unisbank.ac.id<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>WEBINAR.</span></strong> All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/"><span>APP GARDEN</span></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url().'assets/home/vendor/jquery/jquery.min.js' ?>"></script>
  <script src="<?= base_url().'assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?= base_url().'assets/home/vendor/jquery.easing/jquery.easing.min.js' ?>"></script>
  <script src="<?= base_url().'assets/home/vendor/php-email-form/validate.js' ?>"></script>
  <script src="<?= base_url().'assets/home/vendor/waypoints/jquery.waypoints.min.js' ?>"></script>
  <script src="<?= base_url().'assets/home/vendor/counterup/counterup.min.js' ?>"></script>
  <script src="<?= base_url().'assets/home/vendor/owl.carousel/owl.carousel.min.js' ?>"></script>
  <script src="<?= base_url().'assets/home/vendor/isotope-layout/isotope.pkgd.min.js' ?>"></script>
  <script src="<?= base_url().'assets/home/vendor/venobox/venobox.min.js' ?>"></script>
  <script src="<?= base_url().'assets/home/vendor/aos/aos.js' ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url().'assets/home/js/main.js' ?>"></script>

</body>

</html>