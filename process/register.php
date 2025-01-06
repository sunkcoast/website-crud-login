<?php 

    session_start();

    // Notif Kecil diatas Tombol//
    $register_message = "";

    // Mencegah Register ketika sudah login //
    if(isset($_SESSION["login"])) {
        header("location: dashboard.php");
    }

    // MENGECEK DATA USER REGISTER //
    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];


        // Mencegah Username yang sudah terdaftar //
        try {
        // Enkripsi password Dengan Hash
         $epassword = password_hash($password, PASSWORD_DEFAULT);

         // Memasukkan ke database//
         $insert = mysqli_query($koneksi,"INSERT INTO users (username, password) VALUES
         ('$username', '$epassword')");
 
        //  NOTIF KETIKA TOMBOL DAFTAR DIKLIK //
        if($insert) { 
            // Notif Jika Berhasil
            $register_message = "Ini daftar berhasil, silahkan login";
        }else {
            // Muncul Jika Gagal Login
            echo '
            <script>
                alert("Username tidak ditemukan");
                window.location.href="login.php";
            </script>
            ';
         }
         } catch (mysqli_sql_exception) {
            $register_message = "Username sudah terdaftar";
         }
         $koneksi->close();

}
?> 

<?php