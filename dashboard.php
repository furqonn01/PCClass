<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>

</head>
<body class="body">
    <div class="judul">
        <h1>Welcome to PCC Class</h1>
    </div>
    <div class="test">
        <h3>Halo <?php echo $_SESSION['nama']; ?> <a class="link" href="logout.php">Sign Out</a></h3>
    </div>
    <div>
        <table width = "495" align="center">
            <tr>
            <td align="center">
                    <br><img src="images/icon.jpg" width="60">
                </td>
                <th class="font" align = "center">
                    <br>Selamat bergabung dengan PCC Class "Web Desain Sederhana"
                </th>
                <td align="center">
                    <br><img src="images/icon.jpg" width="60">
                </td>
            </tr>
            
        </table>
    </div>
    <div>
        <h1 class="SubJdl">Makanan Tradisional Indonesia</h1>
    </div> 
    <div class="container" align="center">
            <img src="images/klepon.jpg" class="images">
			<p id="nama">Klepon</p>
			<p>Asal<br>
			"Pulau Jawa"<br>
            <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
    </div>
	<div class="container" align="center">
            <img src="images/dadargulung.jpg" class="images">
			<p id="nama">Dadar Gulung</p>
			<p>Asal<br>
			"Pulau Jawa"<br>
            <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
    </div>
    <div class="container" align="center">
            <img src="images/gethuk.jpg" class="images">
			<p id="nama">Gethuk Goreng</p>
			<p>Asal<br>
			"Pulau Jawa"<br>
            <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
    </div>
	<div class="container" align="center">
            <img src="images/wingkobabat.jpg" class="images">
			<p id="nama">Wingko Babat</p>
			<p>Asal<br>
			"Pulau Jawa"<br>
            <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
    </div> 
    <div class="container" align="center">
            <img src="images/putuayu.jpg" class="images">
			<p id="nama">Putu Ayu</p>
			<p>Asal<br>
			"Pulau Jawa"<br>
            <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
	</div>        
</body>
</html>