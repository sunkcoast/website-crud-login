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
</head>

<body>
    <h3>Selamat datang [ <?= ($_SESSION["username"]); ?> ], Anda berhasil Login </h3>
    <p><i>Username:</i> <?= ($_SESSION["username"]); ?></p>
    
    <!-- Pop up windows untuk Menambah Data -->
    <script>
    function openNewWindow(url) {
        window.open(url, '_blank', `width=800,height=600,left=50,top=70`);
    }
    </script>

    <h3>Data Pekerja</h3>
    <!-- // New Pop up Window untuk add // -->
    <a href="" onclick="openNewWindow('http://localhost/sunkcoast.com/add.php')"><strong>Input Data Pekerja[+]</strong></a>
    <br>

    <main>
        <!-- // TABEL UNTUK PEKERJA // -->
        <table border="1" cellpadding="15" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>No Telpon</th>
                <th>Opsi</th>
            </tr>
            <?php
            // Tabel dari Database yg ditampilkan //
            $no = 1;
            foreach ($workers as $worker) {
            echo "<tr>
                <td>" . $no++ . "</td>
                <td>" . $worker['nama'] . "</td>
                <td>" . $worker['alamat'] . "</td>
                <td>" . $worker['pekerjaan'] . "</td>
                <td>" . $worker['no_handphone'] . "</td>
                    <td>
                        <a class='edit' href='edit.php?id=" . $worker['id'] . "'>Edit</a> /
                        <a class='delete' href='delete.php?id=" . $worker['id'] . "'>Delete</a>
                     </td>
             </tr>";
            }
?>
        </table>
        <form action="dashboard.php" method="POST">
            <button type="submit" name="logout">Logout</button>
        </form>
    </main>
    <footer>
        <?php include "layout/footer.html"; ?>
    </footer>
</body>

</html>