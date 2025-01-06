<?php

include "service/database.php";

// Memastikan Login Sebelum masuk Dashboard //
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}

// Memilih File dari Databse //
$cekworker = "SELECT * FROM worker";
$result = mysqli_query($koneksi, $cekworker);

// Mengambil file dari database //
$workers = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $workers[] = $row;  
    }
}

?>