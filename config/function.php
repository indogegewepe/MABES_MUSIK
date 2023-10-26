<?php

require_once "init.php";

session_start();

function test_input($dataIn)
{
    $dataIn = trim($dataIn);
    $dataIn = stripslashes($dataIn);
    $dataIn = htmlspecialchars($dataIn);
    return $dataIn;
}

//Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // Hash the input password using SHA-256

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $value) {
            if ($row['username'] == $username && $row['password'] == $password) {
                $_SESSION['username'] = $username;
                return header("Location: pages/admin");
            }
        }
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // Hash the input password using SHA-256

    $sql = "SELECT * FROM anggota WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $value) {
            if ($row['username'] == $username && $row['password'] == $password) {
                $_SESSION['username'] = $username;
                return header("Location: pages/anggota");
            }
        }
    }
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-bottom: 0;border-radius: 0;position: absolute;z-index: 1;top: 0;width: -webkit-fill-available;">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>Username</strong> / <strong>Password</strong> tidak terdaftar!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
}

// Insert Alat
if (isset($_POST['insertAlat'])) {
    $namaAlat = test_input($_POST['nama_alat']);
    $merek = test_input($_POST['merek']);
    $seri = test_input($_POST['seri']);
    $keterangan = test_input($_POST['keterangan']);

    $conn->query("INSERT INTO `daftaralat` (`id_alat`, `nama_alat`, `merek`, `seri`, `keterangan`) VALUES ('', '$namaAlat', '$merek', '$seri', '$keterangan');");
    return header("location:../pages/admin/");

}

//edit alat
if (isset($_POST["edit"])) {
    $id = $_GET['id'];
    $namaAlat = test_input($_POST['nama_alat']);
    $merek = test_input($_POST['merek']);
    $seri = test_input($_POST['seri']);
    $keterangan = test_input($_POST['keterangan']);

    mysqli_query($conn, "UPDATE daftaralat SET `nama_alat` = '$namaAlat', `merek` = '$merek', `seri` = '$seri', `keterangan` = '$keterangan' WHERE id_alat = $id");
    header("Location: ./");

?>

    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    </script>

<?php }

?>