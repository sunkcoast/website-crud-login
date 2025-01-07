<?php

include "service/database.php";

// Menghapus Notif Session Already Active //
if (session_status() === PHP_SESSION_NONE) {
    session_start();}

// Memastikan Login Sebelum masuk Dashboard //
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}

// Memilih File dari Databse //
$cekworker = mysqli_query($koneksi, "SELECT * FROM worker");

?>