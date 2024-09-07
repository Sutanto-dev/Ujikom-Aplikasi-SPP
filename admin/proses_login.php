<?php 
    session_start ();
    include "../koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select *from petugas where username='$username' and password='$password' ";
	$data = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($data);

	if(isset($_POST['submit'])){
		$cek = mysqli_num_rows($data);
		if($cek>0){
            if($result['level'] == 'admin'){
            $_SESSION['nama_petugas'] 		= $result['nama_petugas'];
			$_SESSION['level']     = $result['level'];
			header("location:beranda.php");
            }elseif($result['level'] == 'petugas'){
            $_SESSION['nama_petugas'] 		= $result['nama_petugas'];
			$_SESSION['level'] 	 = $result['level'];
			header("location:../petugas/beranda.php");
            }else{
            $_SESSION['nama'] 		= $result['nama'];
			$_SESSION['level'] 	 = $result['level'];
			header("location:siswa/navbar.php");
            }
		}else{
			header("location:login_admin.php?pesan=gagal");
		}
	}
?>

