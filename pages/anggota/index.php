<?php

require_once "../../config/function.php";

if (!isset($_SESSION['username'])) return (header("Location: ../../index.php"));

$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);

?>

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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</head>


<body class="index-page bg-gray-200">
    <!-- Navbar -->
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
                                    <a href="#" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">person</i>hi, 
                                        <?= $_SESSION['username'] ?>
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

    <header class="header-2" id="about">
        <div class="page-header min-vh-75 relative" style="background-image: url('../../assets/img/bg10.jpg')">
            <span class="mask bg-gradient-primary opacity-4"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Kerumahtanggan</h1>
                        <p class="lead text-white mt-3">Kerumahtanggan merupakan salah satu divisi didalam Badan Pengurus Harian pada organisasi ukm seni musik Universitas Ahmad Dahlan.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- tupoksi tugas wewenang proker -->

    <!-- kontak -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6" id="kontak">
        <section>
            <div class="container py-0">
                <div class="row justify-content-center">
                    <div class="d-flex flex-column">
                        <h3 class="text-center">Contact us</h3>
                        <section class="py-sm-5 position-relative">
                            <div class="container justify-content-center">
                                <div class="row row-cols-lg-2 row-cols-1 justify-content-center">
                                    <?php while ($row = mysqli_fetch_assoc($result)) {
                                        foreach ($row as $value) ?>
                                        <div class="col mb-auto mt-10 px-5">
                                            <div class="mt-n8 mt-md-n9 text-center">
                                                <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="<?= $row['profile'] ?>" alt="bruce" loading="lazy">
                                            </div>
                                            <div class="row py-5">
                                                <div class="col-lg-12 col-md-6 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <h3 class="mb-0"><?= $row['nama'] ?></h3>
                                                        <div class="d-block mx-2">
                                                            <button type="button" class="btn btn-sm btn-success text-nowrap mb-0">Contact</button>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-auto">
                                                            <span>Prodi</span>
                                                            <span class="h6"> : <?= $row['prodi'] ?></span>
                                                        </div>
                                                    </div>
                                                    <p class="text-lg mb-0">
                                                        <?= $row['bio'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer pt-5 mt-5">
        <div class="container">
            <div class=" row">
                <div class="col-md-3 mb-4 ms-auto">
                    <div>
                        <a href="https://www.creative-tim.com/product/material-kit">
                            <img src="./assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
                        </a>
                        <h6 class="font-weight-bolder mb-4">Material Kit 2</h6>
                    </div>
                    <div>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                                    <i class="fab fa-facebook text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                    <i class="fab fa-twitter text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                    <i class="fab fa-dribbble text-lg opacity-8"></i>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                                    <i class="fab fa-github text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                                    <i class="fab fa-youtube text-lg opacity-8"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Company</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                                    Freebies
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                                    Premium Tools
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Resources</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                                    Illustrations
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                                    Bits & Snippets
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                                    Affiliate Program
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Help & Support</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                                    Contact Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                                    Knowledge Center
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                                    Custom Development
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                                    Sponsorships
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                    <div>
                        <h6 class="text-sm">Legal</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                                    Terms & Conditions
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                                    Privacy Policy
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                                    Licenses (EULA)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-center">
                        <p class="text-dark my-4 text-sm font-weight-normal">
                            All rights reserved. Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative
                                Tim</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Core -->
    <script src="../../assets/js/core/popper.min.js"></script>

    <!-- Theme JS -->
    <script src="../../assets/js/material-kit-pro.min.js" type="text/javascript"></script>

</body>

</html>