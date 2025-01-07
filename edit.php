<?php

include "service/database.php";
include "process/edit.php" ;

// Mencari ID di URL //
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM worker WHERE id = $id");
$resultData = mysqli_fetch_assoc($result);

// Menampilkan Preview di Kolom //
$nama = $resultData['nama'];
$pekerjaan = $resultData['pekerjaan'];
$alamat = $resultData ['alamat'];
$no_handphone = $resultData ['no_handphone'];

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
    <h3 class="text-center mb-4">Edit Data Pekerja</h3>
    <form action="edit.php" method="POST">
        <!-- Menyembunyikan ID di URL-->
        <input type="hidden" name="id" value="<?= $id; ?>">

        <!-- Tampilan Dalam Tabel Edit -->
        <div class="mb-3"> <p>Nama :</p>
            <input type="text" class="form-control" name="nama" value="<?= $nama; ?>" required>
        </div>
        <div class="mb-3"> <p>Pekerjaan :</p>
            <input type="text" class="form-control" name="pekerjaan" value="<?= $pekerjaan; ?>" required>
        </div>
        <div class="mb-3"> <p>Alamat :</p>
            <input type="text" class="form-control" name="alamat" value="<?= $alamat; ?>" required>
        </div>
        <div class="mb-3"> <p>No. Handphone :</p>
            <input type="text" class="form-control" name="no_handphone" value="<?= $no_handphone; ?>" required>
        </div>
        <div class="text-center mb-3">
            <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
            <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
        </div>

    </form>
</div>
</body>

</html>
