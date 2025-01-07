<?php 

    session_start();

    
    include "service/database.php" ;
    include "process/add.php" ;
    include "process/dashboard.php" ;

    
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
    <title>WEBSITE LOGIN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- INI HEADER ATAS -->
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h3>Ini Dashboard</h3>
            <form action="dashboard.php" method="POST">
                <button type="submit" name="logout" class="btn btn-primary">Logout</button>
            </form>
        </div>
    </header>

    <!--  Welcoming Word -->
    <div class="container mt-4">
        <h3>Selamat datang [ <?= ($_SESSION["username"]); ?> ], Anda berhasil Login </h3>
        <p><i>Username :</i> <?= ($_SESSION["username"]); ?></p>

        <!--  Tulisan Diatas TAS TABEL -->
        <div class="d-flex justify-content-between align-items-center">
            <h3>Data Pekerja</h3>
            <a href="add.php"><strong>Input Data Pekerja[+]</strong></a>
        </div>

        <main>
            <!-- // TABEL UNTUK PEKERJA // -->
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>No Telpon</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- // Tabel dari Database yg ditampilkan // -->
                    <?php
                      $no = 1;
                        while ($worker = mysqli_fetch_assoc($cekworker)) {
                        echo "<tr style='text-align: center;'>
                            <td>" . $no++ . "</td>
                            <td>" . $worker['nama'] . "</td>
                            <td>" . $worker['alamat'] . "</td>
                            <td>" . $worker['pekerjaan'] . "</td>
                            <td>" . $worker['no_handphone'] . "</td>
                             <td>
                                <a href='edit.php?id=" . $worker['id'] . "' class='btn btn-warning'>Edit</a>
                                <a href='delete.php?id=" . $worker['id'] . "' class='btn btn-danger'>Delete</a>
                             </td>
                          </tr>";
                          }
                      ?>
                </tbody>
            </table>
        </main>
    </div>
    
    <!-- INI FOOTER  -->
    <footer class="bg-dark text-white text-center">
        <i>Ini Copyright 2024.</i>
    </footer>

</html>