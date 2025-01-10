<?php 

    session_start();

    include "service/database.php";
    include "process/add.php";
    include "process/dashboard.php";

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit;
    }

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>

<body class="bg-gray-900 text-white">

    <!-- Ini Header -->
    <header class="bg-gray-900 sticky top-0 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">Ini Dashboard</h1>
            <form action="dashboard.php" method="POST">
                <button type="submit" name="logout" 
                        class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-lg">
                    Logout
                </button>
            </form>
        </div>
    </header>

    <!-- Text diatas Tabel -->
    <section class="container mx-auto py-10">
        <div class="text-center">
            <h2 class="text-2xl font-bold">Selamat datang, <?= ($_SESSION['username']);?>!</h2>
            <p class="text-white-500"> Login username : <strong><?= ($_SESSION['username']);?></strong></p>
        </div>

        <!-- Tombol Edit Pekerja -->
        <div class="flex justify-between items-center mt-10">
            <h3 class="text-xl font-bold">Data Pekerja</h3>
            <a href="add.php" 
               class="text-sm bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-lg">
                Input Data Pekerja [+]
            </a>
        </div>

        <!-- Tabel Data PEKERJA -->
        <div class="overflow-x-auto mt-5">
            <table class="table-auto w-full text-left border border-gray-700">
                <thead class="bg-gray-800 text-gray-300">
                    <tr>
                        <th class="px-4 py-2 border-b border-gray-700">No</th>
                        <th class="px-4 py-2 border-b border-gray-700">Nama</th>
                        <th class="px-4 py-2 border-b border-gray-700">Alamat</th>
                        <th class="px-4 py-2 border-b border-gray-700">Pekerjaan</th>
                        <th class="px-4 py-2 border-b border-gray-700">No Telepon</th>
                        <th class="px-4 py-2 border-b border-gray-700">Opsi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-400">
                    <?php
                        $no = 1;
                        while ($worker = mysqli_fetch_assoc($cekworker)) {
                            echo "<tr class='hover:bg-gray-800'>
                                <td class='px-4 py-2 border-b border-gray-700 text-center'>".$no++."</td>
                                <td class='px-4 py-2 border-b border-gray-700'>".($worker['nama'])."</td>
                                <td class='px-4 py-2 border-b border-gray-700'>".($worker['alamat'])."</td>
                                <td class='px-4 py-2 border-b border-gray-700'>".($worker['pekerjaan'])."</td>
                                <td class='px-4 py-2 border-b border-gray-700'>".($worker['no_handphone'])."</td>
                                <td class='px-4 py-2 border-b border-gray-700 text-center'>
                                    <a href='edit.php?id=" . $worker['id'] . "' 
                                       class='bg-yellow-500 hover:bg-yellow-700 text-black py-1 px-3 rounded-lg text-sm'>Edit</a>
                                    <a href='delete.php?id=" . $worker['id'] . "' 
                                       class='bg-red-500 hover:bg-red-700 text-black py-1 px-3 rounded-lg text-sm'>Delete</a>
                                </td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Ini FOOTER -->
    <footer class="bg-gray-900 text-center py-5 mt-10">
        <p class="text-sm text-gray-500">&copy; 2024 Ini Copyright</p>
    </footer>

</body>

</html>
