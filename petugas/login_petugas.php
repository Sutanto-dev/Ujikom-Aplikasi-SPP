<?php 
  session_start();
  include "../koneksi.php";
  // if (isset($_SESSION['petugas'])) {
  //   echo "<script>location = ('beranda.php');</script>";
  //   exit;
  // }
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
  <title>Aplikasi SPP Online</title>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Neumorphism Login Form UI | CodingNepal</title> -->
    <link rel="icon" href="../img/bw3.png">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="content">
       <div class="logo"><img src="../img/bw2.png" width="85px"></div>
      <div class="text">
Login Petugas</div>
<form action="../admin/proses_login.php" method="POST">
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
