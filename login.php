<?php 

    include "service/database.php" ;
    include "process/login.php" ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE LOGIN</title>
    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- INI HEADER  -->
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h3 class="mt-2">Belajar PHP Login</h3>
            <nav>
                <a href="index.php" class="text-white text-decoration-none me-3">Home</a>
                <a href="login.php" class="text-white text-decoration-none me-3">Login</a>
                <a href="register.php" class="text-white text-decoration-none">Register</a>
            </nav>
        </div>
    </header>

    <!-- MAIN MENU -->
    <main class="container text-center">
    <h1 class="mt-3"> Ini Login</h1>

    <!-- Hide PASSWORD DAN USERNAME di URL -->
    <form action="login.php" method="POST" class="w-50 mx-auto mt-3">
      
    <!-- Kolom Untuk Login -->
        <div class="mb-3">
            <input type="text" class="form-control" id="username" placeholder="kolom-username" name="username" required>
        </div>
         <div class="mb-3">
             <input type="password" class="form-control" id="password" placeholder="kolom-password" name="password" required>
        </div>
        <div class="mb-5 text-center">
             <button type="submit" class="btn btn-dark w-100" name="login">Login</button>
        </div>
    </form>


    <!-- INI FOOTER  -->
    <footer class="bg-dark text-white text-center">
        <i>© 2025 Ini Copyright</i>
    </footer>

</body>

</html>