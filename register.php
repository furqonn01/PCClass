<?php
  include "konek.php";
?>
<link rel="stylesheet" href="css/style.css">
<html>
    <head>
        <title>SIGN UP</title>
    </head>
    <body class="body">
      <header class="headerlog">
        <div class="header-left">
        </div>
        <div class="wrap">
          <nav class="menu">
            <ul>
              <li>
                <a href="index.php">SIGN IN</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>
      <div class="test"></div>
      <div class="kotak_register" style="margin-top: 80px;margin-bottom: 10px;margin-left: auto;margin-right: auto;">
        <p class="tulisan_register"><b>SIGN UP</b></p>
      </div>
        <form action="action_register.php" method="post">
            <div class="kotak_register" style="margin-top: 1 0px;margin-bottom: 80px;margin-left: auto;margin-right: auto;">

              <label for="nama"><b>Nama</b></label>
              <input type="text" placeholder="Enter Nama" name="nama" class="form_register" required>
          
              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" class="form_register" required>
          
              <label for="psw-repeat"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pass" class="form_register" required>
              <hr>
          
              <button type="submit" name="register" class="registerbtn">SIGN UP</button>
            </div>
        
          </form>
    </body>
</html>
    
