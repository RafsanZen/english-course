<?php
    session_start();
    include 'admin/connection.php';

    if(!isset($_SESSION['customer'])) {
        echo "<script>alert('Anda harus login !');</script>";
        echo "<script>location='login.php';</script>";
        header('location:login.php');
        exit();
    }

    $sql = $conn->query("SELECT * FROM customers WHERE id='$_SESSION[customer]'");
    $row = $sql->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>English Course</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" /> 
    <link href="assets/css/pricing.css" rel="stylesheet" /> 

    <!-- Icon Fontawesome 4.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </head>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.php"><img class="d-inline-block me-3" src="assets/img/logo.png" alt="" />English Course</a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item me-3"><a class="nav-link fw-bold" aria-current="page" href="customer.php">Beranda</a></li>
              <li class="nav-item">
                <div class="dropdown" style="margin-top: 7px;">
                  <button class="btn dropdown-toggle p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $row['username'] ?>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profil</a>
                    <a class="dropdown-item" href="customer.php?halaman=logout">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <?php 
        if(isset($_GET['halaman'])) {
          if($_GET['halaman'] == 'logout') {
            include 'logout.php';
          } else if($_GET['halaman'] == 'belum_aktif') {
            include 'belum_aktif.php';
          } else if($_GET['halaman'] == 'sudah_aktif') {
            include 'sudah_aktif.php';
          } else if($_GET['halaman'] == 'sd') {
            include 'sd.php';
          } else if($_GET['halaman'] == 'smp') {
            include 'smp.php';
          } else if($_GET['halaman'] == 'sma') {
            include 'sma.php';
          }
        } else {
          if($row['status'] == 'Belum Aktif') {
            include 'belum_aktif.php';
          } else {
            include 'sudah_aktif.php';
          }
        }
      ?>

      <!-- Footer -->
      <section class="py-3 pt-7 bg-primary-gradient">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot.png);background-position:left bottom;background-size:auto;filter:contrast(1.5);">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot-2.png);background-position:right top;background-size:auto;margin-top:-75px;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8 order-0 order-sm-0 pe-6"><a class="text-decoration-none" href="#"><img class="img-fluid me-2" src="assets/img/logo.png" alt="" style="width: 30px;"><span class="fw-bold fs-1 text-light">English Course</span></a>
              <p class="mt-3 text-white col-md-8">English Course telah berdiri menapaki dunia pendidikan pada tahun 2021 dengan melalui sistem video. Sistem pembelajaran melalui video adalah landasan kami dikarenakan kemajuan teknologi internet pada saat ini berkembang dengan sangat cepat.</p>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <div class="text-center">
              <p class="mb-0 text-white fw-bold">Copyright &copy; English Course 2021</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Footer -->
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&amp;display=swap" rel="stylesheet">
  </body>
</html>