<?php

include "service/database.php"; 

if (session_status() === PHP_SESSION_NONE) {
    session_start();}

// Mengecek User ID dan Mengambil //
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menghapus Tabel Crud di Databse
    $result = mysqli_query($koneksi, "DELETE FROM worker WHERE id = $id");

    if ($result) {
        // Notifikasi Sweet Alert
        echo '<script type="text/javascript">
         setTimeout(function () {
            Swal.fire({
                title: "Data Berhasil Dihapus",
                icon: "success",
                confirmButtonText: "OK"
            }).then(() => {
                window.location.href = "dashboard.php";
            });
         }, 300); // 1 detik delay
    </script>';
    }

}
?>
