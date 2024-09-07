<?php 
  session_start();
  include "../koneksi.php";
  if (isset($_SESSION['admin'])) {
    echo "<script>location = ('beranda.php');</script>";
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title>Aplikasi SPP Online</title>
    <meta charset="utf-8">
    <link rel="icon" href="../img/bw3.png">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="content">
       <div class="logo"><img src="../img/bw2.png" width="85px"></div>
      <div class="text">
Login Admin</div>
<span><?php
			if(isset($_GET['pesan'])){
				$pesan = $_GET['pesan'];
				if($pesan == 'gagal'){
					echo "<h7 style='color:red;'>Username Atau Password Salah !</h7>";
				}
			}	
		?></span>
<form action="proses_login.php" method="POST">
        <div class="field">
          <input type="text" name="username" required>
          <span class="fas fa-user"></span>
          <label>Masukan Username</label>
        </div>
<div class="field">
          <input type="password" name="password" required>
          <span class="fas fa-lock"></span>
          <label>Masukan Password</label>
        </div>
              <br>  
            <button name="submit">Masuk</button>
        <div class="sign-up">
          <a href="../index.php">Kembali Ke Halaman Awal</a>
        </div>
</form>
</div>
</body>
</html>
