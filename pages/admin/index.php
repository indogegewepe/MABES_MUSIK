<?php

require_once "../../config/function.php";

if (isset($_SESSION['username'])) {
    $sql = "SELECT username FROM admin";
    $result = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $value) {
            if ($row['username'] == $_SESSION['username']) break;
        }
        return (header("Location: ../anggota/"));
    }
} else return (header("Location: ../../index.php"));

$sql = "SELECT * FROM daftaralat";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Material Dashboard by Creative Tim
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

<body class="g-sidenav-show bg-gray-100">

    <div class="page-header flex-column min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1564186763535-ebb21ef5277f?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');" loading="lazy">
        <span class="mask bg-gradient-dark opacity-6"></span>

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
                                    <li class="nav-item mx-2">
                                        <a href="#" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons opacity-6 me-2 text-md">person</i>hi,
                                            <?= $_SESSION['username'] ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="logout.php" class="btn bg-gradient-primary mb-0"><i class="material-icons opacity-6 me-2 text-md">logout</i>Log Out</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>



        <div class="container mt-7 blur border-radius-xl shadow">
            <div class="table-responsive">
                <table class="table">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Alat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Merek
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Seri
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Keterangan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php while ($row = mysqli_fetch_assoc($result)) {
                                foreach ($row as $value) ?>
                                <tr>
                                    <td>
                                        <div class="my-auto">
                                            <h6 class="text-xs ms-3"><?= $row['nama_alat'] ?></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-normal mb-0"><?= $row['merek'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-normal mb-0"><?= $row['seri'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 text-xs"><?= $row['keterangan'] ?></span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button type="button" class="btn btn-success"> <i class="material-icons opacity-6 text-md">edit</i></button>
                                        <button type="button" class="btn btn-primary"> <i class="material-icons opacity-6 text-md">delete</i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="6" class="align-middle text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <button type="button" class="btn btn-primary w-100">
                                        <i class="material-icons opacity-6 me-2 text-md">add</i>tambah</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>

        <!-- Modal -->
        <div style="position: fixed; width: -webkit-fill-available; left: auto;" class="modal fade modal-dialog modal-dialog-centered modal-dialog-scrollable" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-5" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="" class="text-start">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nama Alat" aria-label="nama_alat" nama="nama_alat" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Merek" aria-label="merek" nama="merek" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Seri" aria-label="seri" nama="seri" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group">
                                <span class="input-group-text">Keterangan</span>
                                <textarea class="form-control" aria-label="With textarea" nama="keterangan"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="insertAlat" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

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