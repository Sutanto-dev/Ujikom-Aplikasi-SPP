<?php
session_start();
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $user   = $_POST['nisn'];
    $pw     = $_POST['password'];

    $perintah   = "SELECT * FROM siswa WHERE nisn='$user' AND password='$pw'  ";
    $data       = mysqli_query($conn, $perintah);
    $nilai      = mysqli_fetch_assoc($data);

    $cek    = mysqli_num_rows($data);
    if ($cek == 1) {
        if ($nilai['nisn'] == "$user") {
            $_SESSION['siswa'] = $nilai['nisn'];
            $_SESSION['nama'] = $nilai['nama'];

            header("Location:beranda.php");
        } else {
            header("Location:login_siswa.php?pesan=login gagal");
        }
    } else {
        header("Location:login_siswa.php?pesan=login gagal");
    }
}

