<?php

include "service/database.php";
include "process/edit.php";

// Mencari ID di URL dengan Isset untuk Sweetalert
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} 

$result = mysqli_query($koneksi, "SELECT * FROM worker WHERE id = $id");
$resultData = mysqli_fetch_assoc($result);


// Menampilkan Data di Kolom
$nama = $resultData['nama'];
$pekerjaan = $resultData['pekerjaan'];
$alamat = $resultData['alamat'];
$no_handphone = $resultData['no_handphone'];


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
    <!-- Teks diatas Tabel-->
    <div class="container mx-auto py-10">
        <div class="max-w-md mx-auto bg-gray-800 p-6 rounded-lg shadow-lg">
            <h3 class="text-center text-2xl font-bold mb-6">Edit Data Pekerja</h3>

             <!-- Link Action diarahkan -->
            <form action="edit.php" method="POST">
                <!-- Menyembunyikan ID di URL -->
                <input type="hidden" name="id" value="<?= $id; ?>">

                <!-- Tabel untuk Edit Pekerja -->
                <div class="mb-4">
                    <label for="nama" class="block text-gray-400 mb-1">Nama:</label>
                    <input type="text" id="nama" name="nama" value="<?= $nama;?>" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none" required>
                </div>
                <div class="mb-4">
                    <label for="pekerjaan" class="block text-gray-400 mb-1">Pekerjaan:</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" value="<?= $pekerjaan;?>" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none" required>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-400 mb-1">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" value="<?= $alamat;?>" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none" required>
                </div>
                <div class="mb-4">
                    <label for="no_handphone" class="block text-gray-400 mb-1">No. Handphone:</label>
                    <input type="text" id="no_handphone" name="no_handphone" value="<?= $no_handphone;?>" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none "  required>
                </div>
                <div class="flex justify-between">
                    <button type="submit" name="edit" class="bg-yellow-500 hover:bg-yellow-700 text-black py-2 px-5 rounded-lg">Ubah</button>
                    <a href="dashboard.php" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-5 rounded-lg transition duration-300"> Kembali</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
