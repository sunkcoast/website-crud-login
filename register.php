<?php

    include "service/database.php";
    include "process/register.php";
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE REGISTRATION</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">

    <!-- INI HEADER -->
    <header class="bg-gray-900 sticky top-0">
        <nav class="text-white container mx-auto py-4 flex justify-between items-center">
            <p class="text-3xl font-bold">PHP CRUD Login</p>
            <ul class="flex bg-gray-900">
                <li class="px-7 py-1 hover:text-gray-500"><a href="index.php">Home</a></li>
                <li class="px-7 py-1 hover:text-gray-500"><a href="login.php">Login</a></li>
                <li class="px-7 py-1 hover:text-gray-500"><a href="register.php"
                    class="border-2 border-red-500 py-2 px-5 rounded-xl hover:bg-red-500 text-white">Register</a>
                </li>
            </ul>
        </nav>
    </header>

    <!--  Tulisan atas Register -->
    <section class="bg-gray-900 py-20">
        <div class="container mx-auto text-center text-white">
            <div class="mx-auto w-full sm:w-2/3 lg:w-1/3">
                <h3 class="text-3xl font-bold mb-5">Create Your Account</h3>
                <p class="text-gray-500 mb-5">Masukkan username dan password untuk membuat akun.</p>

                <!-- Notif pesan ketika berhasil -->
                <i><?= $register_message ?></i>

                 <!-- Form untuk Register -->
                <form action="register.php" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <input type="text" class="w-full p-3 bg-gray-700 text-white rounded-lg border-2 border-gray-600 focus:outline-none" 
                               placeholder="Username" name="username" required>
                    </div>
                    <div class="mb-6">
                        <input type="password" class="w-full p-3 bg-gray-700 text-white rounded-lg border-2 border-gray-600 focus:outline-none" 
                               placeholder="Password" name="password" required>
                    </div>
                    <div class="mb-5 text-center">
                        <button type="submit" class="w-full bg-red-500 text-white py-2 px-5 rounded-xl hover:bg-red-700 transition-colors" name="register">Daftar Sekarang!</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- INI FOOTER -->
    <footer class="bg-gray-900 text-white text-center py-4 mt-5">
        <i>© 2025 Ini Copyright</i>
    </footer>

</body>

</html>
