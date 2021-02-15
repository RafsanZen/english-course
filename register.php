<?php
    include 'admin/connection.php'; 
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

    <!-- Icon Fontawesome 4.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.php"><img class="d-inline-block me-3" src="assets/img/logo.png" alt="" />English Course</a>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          </div>
        </div>
      </nav>
      <section class="py-6">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot.png);background-position:left;background-size:auto;margin-top:-105px;">
        </div>
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center my-0 mb-6">
            <div class="col-md-5 col-lg-6 pt-8"><img class="img-fluid p-4" src="assets/img/illustrations/4380.png" alt="" /></div>
            <div class="col-md-7 col-lg-6 text-center text-md-start pt-5 pt-md-9">
              <div class="card">
                <div class="card-title">
                    <h2 class="text-center">Daftar Akun</h2>
                </div>
                <div class="card-body">
                    <form method="POST" class="needs-validation" novalidate>
                        <div class="form-group row">
                            <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="username" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3 align-items-center">
                            <a href="login.php" class="me-3">Sudah punya akun ?</a>
                            <button class="btn btn-lg btn-primary rounded-pill hover-top bg-primary-gradient" name="register" role="button">Daftar</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
</script>

<?php 
    if(isset($_POST['register'])) {
        $nama_lengkap = $_POST['nama_lengkap'];
        $status = "Belum Aktif";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = $conn->query("SELECT * FROM customers WHERE username='$username'");
        $match = $sql->num_rows;
        if($match == 1) {
          echo "<script>alert('Username sudah terpakai');</script>";
        } else {
          $conn->query("INSERT INTO customers (nama_lengkap, status, username, password) VALUES ('$nama_lengkap', '$status', '$username', '$password')");
          echo "<script>alert('Berhasil diregistrasi !')</script>";
          echo "<script>location='login.php'</script>";
        }
    }
?>