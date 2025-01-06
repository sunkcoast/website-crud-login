<?php

    include "service/database.php" ;
    include "process/register.php" ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE LOGIN</title>
</head>

<body>
    <!-- INI HEADER  -->
    <?php include "layout/header.html" ?>

    <h3> DAFTAR AKUN </h3>

    <!-- Notif pesan -->
    <i><?= $register_message  ?></i>

    <!-- HIDE PASSWORD DAN USERNAME DI URL -->
    <form action="register.php" method="POST">
        <form>
            <input type="text" placeholder="username" name="username" />
            <input type="password" placeholder="password" name="password" />
            <button type="submit" name="register">daftar sekarang</button>
        </form>


        <!-- INI FOOTER  -->
        <?php include "layout/footer.html" ?>
</body>

</html>