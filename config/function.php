<?php

require_once "init.php";

session_start();

if (isset($_POST['submit'])) {
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

if (isset($_POST['submit'])) {
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

?>