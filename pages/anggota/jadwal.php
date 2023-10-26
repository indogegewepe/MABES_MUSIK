<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <title>
    Kerumahtanggaan
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="about-us bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="index.php" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
              Kerumahtanggan
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item">
                  <a href="index.php" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">house</i>
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a href="jadwal.php" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">calendar_today</i>
                    Jadwal
                  </a>
                </li>
                <li class="nav-item">
                  <a href="daftar-alat.php" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">description</i>
                    Daftar Alat
                  </a>
                </li>
                <li class="nav-item">
                  <a href="peminjaman.php" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">groups</i>
                    Peminjaman
                  </a>
                </li>
                <li class="nav-item">
                  <a href="logout.php" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">logout</i>
                    Log Out
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark ">
    <div class="page-header min-vh-100 p-5" style="background-image: url('../../assets/img/bg9.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="d-flex flex-column ms-auto me-auto ms-lg-auto">
          <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                <h3 class="text-white text-primary mb-0">Jadwal Peminjaman</h3>
              </div>
            </div>
            <div class="card-body">
              <div class="card">
                <div class="table-responsive">
                  <table class="table table-bordered m-4">
                    <thead>
                      <?php
                      date_default_timezone_set("Asia/Jakarta");
                      
                      ?>
                      <tr>
                        <th scope="col">Hari<br>/Tanggal</th>
                        <th scope="col">Senin<br><?= (int)date("l"); ?></th>
                        <th scope="col">Selasa<br><?= (int)date("l") + 1; ?></th>
                        <th scope="col">Rabu<br><?= (int)date("l") + 2; ?></th>
                        <th scope="col">Kamis<br><?= (int)date("l") + 3; ?></th>
                        <th scope="col">Jumat<br><?= (int)date("l") + 4; ?></th>
                        <th scope="col">Sabtu<br><?= (int)date("l") + 5; ?></th>
                        <th scope="col">Minggu<br><?= (int)date("l") + 6; ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">07.00 - 09.00</th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <tr>
                        <th scope="row">09.00 - 11.00</th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <tr>
                        <th scope="row">11.00 - 13.00</th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <tr>
                        <th scope="row">13.00 - 15.00</th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <tr>
                        <th scope="row">15.00 - 17.00</th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <tr>
                        <th scope="row">17.00 - 19.00</th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <tr>
                        <th scope="row">19.00 - 21.00</th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="button">Tambah</button>
            </div>
            </footer>
            <!-- Core -->
            <script src="../../assets/js/core/popper.min.js"></script>

            <!-- Theme JS -->
            <script src="../../assets/js/material-kit-pro.min.js" type="text/javascript"></script>
</body>

</html>