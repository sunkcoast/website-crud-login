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
</head>

<body>
    <!-- INI HEADER  -->
    <?php include "layout/header.html" ?>

    <h3> LOGIN AKUN </h3>

    <!-- HIDE PASSWORD DAN USERNAME DI URL -->
    <form action="login.php" method="POST">
        <form>
            <input type="text" placeholder="ini username" name="username" />
            <input type="password" placeholder="ini password" name="password" />
            <button type="submit" name="login">masuk</button>
        </form>

        <!-- INI FOOTER  -->
        <?php include "layout/footer.html" ?>
</body>

</html>