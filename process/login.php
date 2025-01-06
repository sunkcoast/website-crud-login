<?php

    session_start();

    // Mencegah Login Berulang //
    if(isset($_SESSION["login"])) {
        header("location: dashboard.php");
    }

    // MENGECEK DATA USER LOGIN 
    if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

         // Menyimpan ke dalam Database
        $cekdb = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
        $hitung = mysqli_num_rows($cekdb);
        $pwd = mysqli_fetch_assoc($cekdb);
        $passwordsekarang = $pwd["password"];

    if ($hitung > 0) {
        // Verifikasi password Hash
     if (password_verify($password, $passwordsekarang)) {

        // SESSION LOGIN ACTIVE 
         $_SESSION["username"] = $username; 
         $_SESSION["login"] = true;
        // Jika Benar pindah ke 
         header("Location: dashboard.php");

        } else {
            // Notif Password salah
            echo '
            <script>
                alert("Password salah");
                window.location.href="login.php";
            </script>
            ';
        }
    } else {
        // Notif username tidak ketemu
        echo '
        <script>
            alert("Username tidak ditemukan");
            window.location.href="login.php";
        </script>
        ';
    }
    $koneksi->close();
}
?>
