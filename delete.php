<?php

session_start();

include "service/database.php";

// Mengecek User ID dan Mengambil
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pekerja</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body class="bg-gray-900 text-white">
    <!-- Modal Konfirmasi -->
    <div class="fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center">
        <div class="bg-gray-700 rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl font-bold text-center mb-4">Konfirmasi Penghapusan</h2>
            <p class="text-center text-gray-300 mb-6">Apakah Anda yakin ingin menghapus data ini?</p>
            <div class="flex justify-between">
                <a href="delete_confirm.php?id=<?= $id ?>" class="bg-red-500 hover:bg-red-700 text-white py-2 px-5 rounded-lg"> Hapus</a>
                <a href="dashboard.php" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-5 rounded-lg">Batal</a>
            </div>
        </div>
    </div>
</body>

</html>
