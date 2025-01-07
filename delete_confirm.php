<?php

session_start();

include "service/database.php"; 

// Mengecek User ID dan Mengambil //
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menghapus Tabel Crud di Databse
    $result = mysqli_query($koneksi, "DELETE FROM worker WHERE id = $id");

    // Notif untuk Menghapus Data
    if ($result) {
        echo '
        <script>
            alert("Data Berhasil Dihapus");
            window.location.href="login.php";
        </script>
        ';
    } 

}
?>
