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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Nama Diatas Tabel -->
    <div class="w-50 mx-auto mt-5">
    <h3 class="text-center mb-4">Tambah Data Pekerja</h3>
    <form action="add.php" method="POST">

        <!-- Tampilan Tambah Data Pekerja -->
        <div class="mb-3"> <p>Nama :</p>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="mb-3"> <p>Pekerjaan :</p>
            <input type="text" class="form-control" name="pekerjaan" required>
        </div>
        <div class="mb-3"> <p>Alamat :</p>
            <input type="text" class="form-control" name="alamat" required>
        </div>
        <div class="mb-3"> <p>No. Handphone :</p>
            <input type="text" class="form-control" name="no_handphone" required>
        </div>
        <div class="text-center mb-3">
            <button type="submit" name="add" class="btn btn-primary">Tambahkan</button>
            <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
        </div>
    </form>

</body>

</html>