<?php
    require "konek.php";

    if(isset($_POST['register'])) {
        $username   = $_POST["username"];
        $nama       = $_POST["nama"];
        $password   = $_POST["pass"];

        $selectUsername = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
        if(mysqli_num_rows($selectUsername) > 0 ){
            echo "<script>alert('Username Sudah Ada');
            window.location.href='register.php';
            </script>";
            exit;
        }

        $query  = mysqli_query($conn, "INSERT INTO user(username, nama, password) VALUES('$username', '$nama', '$password')" );

        if($query) {
            echo "<script>alert('Berhasil Registrasi');
            window.location.href='index.php';
            </script>";
        }else{
            echo "gagal";
        }
    }
?>