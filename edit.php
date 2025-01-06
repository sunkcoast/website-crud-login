<?php

include "service/database.php";
include "process/edit.php" ;

// Notif Kecil diatas Tombol//
$register_message = ""; 

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
    <title>Edit Data Pekerja</title>
</head>

<body>
    <h3>EDIT DATA PEKERJA</h3>
    <i><?= $register_message ?></i>

    <!-- Form Untuk Edit dengan Preview -->
    <form action="edit.php" method="POST">
        
    <!-- Menyembunyikan ID -->
     <input type="hidden" name="id" value="<?= $id; ?>">
        <p>Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"></p>
        <p>Pekerjaan: <input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>"></p>
        <p>Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>"></p>
        <p>No Handphone: <input type="text" name="no_handphone" value="<?php echo $no_handphone; ?>"></p>
        <button type="submit" name="edit">Ubah</button>
    </form>
</body>

</html>
