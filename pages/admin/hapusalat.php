<?php

require_once "../../config/function.php";

if (isset($_GET['id'])) {
    $delete = mysqli_query($conn, "DELETE FROM daftaralat WHERE id_alat = " . $_GET['id']);
    return (header("Location: ./"));
}

?>