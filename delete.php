<?php

session_start();

include "service/database.php"; 

// Tombol Delete di Dashboard //
if(isset($_SESSION["delete"])) {
    header("location: dashboard.php");
}

// Menghapus Data dari Databse //
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM worker WHERE id = $id");
header("Location: dashboard.php");

?>