<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lebih Lanjut</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="judul">
        <h1>Welcome to PCC Class</h1>
    </div>
    <div class="test">
        <h3>Halo <?php echo $_SESSION['nama'];?> <a class="link" href="logout.php">Sign Out</a></h3>
    </div>
    <div>
        <h1 class="SubJdl">Rincian</h1>
    </div>
    <div class="container1" align="left" style="margin: 20px auto">
        <img src="images/klepon.jpg" alt="">
        <p id="nama">Nama Makanan: Klepon</p>
        <p>Daerah Asal: Jawa </p>
        <p>Bahan: Kelapa, gula aren, pandan wangi, dan tepung beras ketan</p>
        <button id="back_btn" onclick="window.location.href='dashboard.php'">Kembali</button><br>
    </div>
   
    
</body>
</html>