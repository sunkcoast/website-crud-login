<?php

    include "service/database.php";
    include "process/add.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pekerja</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gray-900 text-white">

    <!-- Teks diatas Tabel-->
    <div class="container mx-auto py-10">
        <div class="max-w-md mx-auto bg-gray-800 p-6 rounded-lg shadow-lg">
            <h3 class="text-center text-2xl font-bold mb-6">Tambah Data Pekerja</h3>

            <!-- Tabel Data tambah Pekerja -->
            <form action="add.php" method="POST">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-400 mb-1">Nama:</label>
                    <input type="text" id="nama" name="nama" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none" required>
                </div>
                <div class="mb-4">
                    <label for="pekerjaan" class="block text-gray-400 mb-1">Pekerjaan:</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none" required>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-400 mb-1">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none " required>
                </div>
                <div class="mb-4">
                    <label for="no_handphone" class="block text-gray-400 mb-1">No. Handphone:</label>
                    <input type="text" id="no_handphone" name="no_handphone" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none" required>
                </div>

                <!-- Tombol Tambahkan -->
                <div class="flex justify-between">
                    <button type="submit" name="add" class="text-sm bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-lg">Tambahkan</button>

                    <!-- Menu Kembali -->
                    <a href="dashboard.php" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-5 rounded-lg">Kembali</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
