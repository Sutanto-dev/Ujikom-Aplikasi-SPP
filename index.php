<!-- 
	// session_start();
	// if (isset($_SESSION['admin'])) {
	// 	echo "<script>location = ('index.php');</script>";
	// 	exit;
	//   } elseif (isset($_SESSION['petugas'])) {
	// 	echo "<script>location = ('index.php');</script>";
	// 	exit;
	//   } elseif (isset($_SESSION['siswa'])) {
	// 	echo "<script>location = ('index.php');</script>";
	// 	exit;
	//   } -->


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	<link rel="icon" href="img/bw3.png">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Web SPP</title>
</head>
<body >	
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<img src="img/spplogo.png" width="200px" alt="">
				<h1 class="mt-2">Selamat Datang !</h1>
				<h3>Sistem Aplikasi Pembayaran SPP Online</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-3 mr-5">
				<div style="background-color: #ebf5fc;" class="card">
					<div class="box">
						<div class="content">
							<h2>01</h2>
							<!-- <img src="img/siswa.png" alt=""> -->
							<h3>Siswa</h3>
							<p>Jika Kamu Siswa</p>
							<a href="siswa/login_siswa.php">Login Disini</a>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-md-3 mr-5">
				<div style="background-color: #ebf5fc;" class="card">
					<div class="box">
						<div class="content">
							<h2>02</h2>
							<h3>Petugas</h3>
							<p>Jika Kamu Petugas</p>
							<a href="petugas/login_petugas.php">Login Disini</a>
						</div>
					</div>	
				</div>	
			</div>
			<div class="col-md-3 mr-5">
				<div style="background-color: #ebf5fc;" class="card">
					<div class="box">
						<div class="content">
							<h2>03</h2>
							<h3>Admin</h3>
							<p>Jika Kamu Admin</p>
							<a href="admin/login_admin.php">Login Disini</a>
						</div>
					</div>	
				</div>	
			</div>
		</div>
		
		
		
	</div>	
</body>
</html>