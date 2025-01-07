<?php

session_start();

include "service/database.php"; 

// Mengecek User ID dan Mengambil //
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Konfirmasi Box Yes atau No //
    echo '
    <script>
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            window.location.href = "delete_confirm.php?id=' . $id . '"; 
        } else {
            window.location.href = "dashboard.php";
        }
    </script>
    ';
}


?>
