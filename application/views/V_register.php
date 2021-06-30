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

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section style="height: 100%;" id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <div class="col-md-5">
    <div class="card text-center">
  <div class="card-header">
    Register
  </div>
  <div class="card-body">
    <?= $this->session->flashdata('msg') ?>
    <form action="<?= base_url('Register') ?>" method="post">
    <div class="form-group">
        <input placeholder="Nama" value="<?= set_value('nama') ?>" name="nama" type="text" class="form-control">
        <?= form_error('nama', '<small class="text-danger" pl-3>', '</small>' ); ?>
    </div>
    <div class="form-group">
        <input placeholder="Email" value="<?= set_value('email') ?>" name="email" type="text" class="form-control">
        <?= form_error('email', '<small class="text-danger" pl-3>', '</small>' ); ?>
    </div>
    <div class="form-group">
        <input placeholder="phone" value="<?= set_value('phone') ?>" name="phone" type="number" class="form-control">
        <?= form_error('phone', '<small class="text-danger" pl-3>', '</small>' ); ?>
    </div>
    <div class="form-group">
    <select class="form-control" name="profesi">
      <option value="">-Pilih Profesi-</option>
      <?php foreach($profesi as $p): ?>
      <option value="<?= $p['profesi_nama'] ?>" <?php echo set_select('profesi',$p['profesi_nama'], ( !empty($_POST['profesi']) && $_POST['profesi'] == $p['profesi_nama'] ? TRUE : FALSE )); ?>><?= $p['profesi_nama'] ?></option>
      <?php endforeach ?>
    </select>
    <?= form_error('profesi', '<small class="text-danger" pl-3>', '</small>' ); ?>
    </div>
    <div class="form-group">
        <input placeholder="Instansi" value="<?= set_value('instansi') ?>" name="instansi" type="text" class="form-control">
        <?= form_error('instansi', '<small class="text-danger" pl-3>', '</small>' ); ?>
    </div>
    <div class="form-group">
    <select class="form-control" name="provinsi">
        <option value="">-Pilih Provinsi-</option>
        <?php foreach($provinsi as $p): ?>
        <option value="<?= $p['provinsi_nama'] ?>" <?php echo set_select('provinsi',$p['provinsi_nama'], ( !empty($_POST['provinsi']) && $_POST['provinsi'] == $p['provinsi_nama'] ? TRUE : FALSE )); ?>><?= $p['provinsi_nama'] ?></option>
        <?php endforeach ?>
    </select>
    <?= form_error('provinsi', '<small class="text-danger" pl-3>', '</small>' ); ?>
    </div>
    <div class="form-group">
        <input placeholder="Password" name="password" type="password" class="form-control">
        <?= form_error('password', '<small class="text-danger" pl-3>', '</small>' ); ?>
    </div>
    <div class="form-group">
        <input placeholder="Ulangi Password" name="password_c" type="password" class="form-control">
    </div>
    <button type="submit" style="width: 100%;" class="btn btn-primary">Daftar</button>
    </form>
  </div>
  <div class="card-footer text-muted">
    Sudah punya akun? <a href="<?= base_url('Auth') ?>">Login</a>
  </div>
</div>
    </div>
    </div>
  </section><!-- End Hero -->

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
        Designed by <a href="appgarden.xyz"><span>APP GARDEN</span></a>
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