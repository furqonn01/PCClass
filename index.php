<?php
require "konek.php";
if(isset($_POST['login'])) {
    $username   = $_POST["username"];
    $pass   = $_POST["pass"];
    $sql = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND password = '$pass'")or mysqli_errno($conn);
    $row = mysqli_num_rows($sql);
    $data = mysqli_fetch_array($sql);
    if($row>0){
        session_start();
        $_SESSION['nama']=$data[2];
        header("location:dashboard.php");
    }else{
        echo "gagal";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIGN IN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body class="body">
    <header class="headerlog">
        <div class="wrap">
        <nav class="menu">
            <ul>
                <li>
                    <a href="register.php">SIGN UP</a>
                </li>
            </ul>
        </nav></div>
    </header>
    <div class="test">
    </div>
    <div class="kotak_login">
        <p class="tulisan_login"><b>SIGN IN</b></p>
        
        <form class="label" method="post" action="">
            <label>Username:</label>
            <input type="text" name="username" class="form_login" placeholder="Masukkan username">
            <label>Password:</label>
            <input type="password" name="pass" class="form_login" placeholder="Masukkan password">
            <input type="submit" class="tbl_login" name="login" value="LOGIN">
        </form>
    </div>

  
</body>
</html>