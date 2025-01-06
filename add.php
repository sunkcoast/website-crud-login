<?php

    include "service/database.php" ;
    include "process/add.php" ;

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
    <h3>DAFTAR DATA PEKERJA</h3>
    <i><?= $register_message  ?></i>

    <form action="add.php" method="POST">
            <p>Nama : <input type="text" name="nama" /></p>
            <p>Pekerjaan : <input type="text" name="pekerjaan" /></p>
            <p>Alamat : <input type="text" name="alamat" /></p>
            <p>No Handphone : <input type="text" name="no_handphone" /></p>
            <button type="submit" name="add">Tambahkan</button>
    </form>

</body>

</html>