<?php

// Menghapus Notif Session Already Active //
if (session_status() === PHP_SESSION_NONE) {
    session_start();}

// Memastikan Login Sebelum masuk Dashboard //
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}

// MENGECEK DATA USER LOGIN 
if (isset($_POST["add"])) {
    $nama = $_POST["nama"];
    $pekerjaan = $_POST["pekerjaan"];
    $alamat = $_POST["alamat"];
    $no_handphone = $_POST["no_handphone"];

    // Memasukkan Data ke Mysqli
    $insert = mysqli_query($koneksi, "INSERT INTO worker (nama, pekerjaan, alamat, no_handphone) VALUES 
    ('$nama', '$pekerjaan', '$alamat', '$no_handphone')");

    if ($insert) {
        // Notifikasi Sweet Alert
        echo '<script type="text/javascript">
         setTimeout(function () {
            Swal.fire({
                title: "Data Berhasil Ditambahkan",
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