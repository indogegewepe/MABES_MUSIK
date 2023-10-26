<?php
require_once "../../config/function.php";

$id = $_GET['id'];

$alatBefore = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM daftaralat WHERE id_alat = '$id'"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Edit Alat
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/material-kit.min.css" rel="stylesheet" />
    <link href="../../config/cees.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

</head>

<body class="">
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('https://images.unsplash.com/photo-1495954380655-01609180eda3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80'); background-size: cover;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Edit Alat</h4>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="post" action="">
                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Nama</label>
                                            <input name="nama_alat" type="text" class="form-control" value="<?= $alatBefore['nama_alat'] ?>">
                                        </div>
                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Merek</label>
                                            <input name="merek" type="text" class="form-control" value="<?= $alatBefore['merek'] ?>">
                                        </div>
                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Seri</label>
                                            <input name="seri" type="text" class="form-control" value="<?= $alatBefore['seri'] ?>">
                                        </div>
                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Keterangan</label>
                                            <textarea name="keterangan" type="text" class="form-control" value="<?= $alatBefore['keterangan'] ?>"></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button name="edit" type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>

    <!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
    <script src="../../assets/js/plugins/chartjs.min.js"></script>
    <script src="../../assets/js/plugins/Chart.extension.js"></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.min.js"></script>
</body>

</html>