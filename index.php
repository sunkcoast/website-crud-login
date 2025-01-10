<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE LOGIN</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-900">

    <!-- INI HEADER -->
    <header class="bg-gray-900 sticky top-0">
        <nav class="text-white container mx-auto py-4 flex justify-between items-center">
            <p class="text-3xl font-bold">PHP CRUD Login</p>
            <!-- Tombol Login kanan atas -->
            <ul class="flex bg-gray-900">
                <li class="px-7 py-1 hover:text-gray-500"><a href="index.php">Home</a></li>
                <li class="px-7 py-1 hover:text-gray-500"><a href="login.php">Login</a></li>
                <li class="px-7 py-1 hover:text-gray-500"><a href="register.php"
                class="border-2 border-red-500 py-2 px-5 rounded-xl hover:bg-red-500 text-white">Register</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Dashboard Bagian Tengah -->
    <section class="bg-gray-900 sticky">
        <div class="container mx-auto text-center text-white h-screen flex items-center">
            <div class="mx-auto w-full sm:w-2/3 lg:w-1/2">
                <h3 class="text-3xl font-bold mb-5">Bring Your Data To The Next Level</h3>
                <p class="text-gray-500 mb-5">Tingkatkan efisiensi pengelolaan data dengan CRUD, memudahkan pembuatan, pembacaan, pembaruan, dan penghapusan data kapan saja.</p>
                <div class="flex justify-center items-center mt-8">
                    <img src="gambardata.jpg" class="rounded-full w-64 h-auto">
                </div>
                <div class="mt-8">
                    <!-- Tombol dibawah Gambar -->
                    <a href="register.php" class="bg-red-500 text-white py-2 px-5 rounded-xl hover:bg-red-700 transition-colors">Start Now!</a>
                </div>
            </div>
        </div>
    </section>



    <!-- INI FOOTER -->
    <footer class="bg-gray-900 text-white text-center py-4 mt-5">
        <i>© 2025 Ini Copyright</i>
    </footer>

</body>

</html>