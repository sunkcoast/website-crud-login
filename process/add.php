<?php

// Notif Kecil diatas Tombol//
$register_message = "";

// Tombol Add di Dashboard //
if(isset($_SESSION["add"])) {
    header("location: dashboard.php");
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
        $register_message = "Data Pekerja Berhasil Ditambahkan";
    } 
}
