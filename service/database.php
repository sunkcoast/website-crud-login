<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "data_pekerja";

// Connect Server Mysql //
$koneksi = mysqli_connect($hostname, $username, $password, $database_name);

    // Kalo Gagal Menutup //
    if(!$koneksi) {
        die("Koneksi Gagal:".mysqli_connect_error());
    }

?>