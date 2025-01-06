<?php

session_start();

include "service/database.php"; 

// Notif Kecil diatas Tombol//
$register_message = "";

// Tombol Edit di Dashboard //
if(isset($_SESSION["edit"])) {
    header("location: dashboard.php");
}

// MENGECEK DATA USER TABEL //
if (isset($_POST["edit"])) {

    // Mengambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $no_handphone = $_POST['no_handphone'];

    // Memasukkan Input Baru //
    $result = mysqli_query($koneksi, "UPDATE worker SET nama = '$nama', pekerjaan = '$pekerjaan', alamat = '$alamat', no_handphone = '$no_handphone' WHERE `id` = $id");
    $register_message = "Data pekerja berhasil diubah.";
    header("Location: dashboard.php");
    
    
}

?>