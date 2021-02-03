<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="script.js"></script>
	<title>uts lab pw</title>
</head>
<body>
	<!-- otomatis ke laman login -->
	<?php
	session_start();
	if(!isset($_SESSION['username'])) {
	header('location:login.php'); 
	} else { 
	$username = $_SESSION['username']; 
	}
	?>
	<header class="navbar navbar-light bg-light navbar-nav-scroll">
	 	<a class="navbar-brand">
    	<img src="assets/bts-logo.jpg" width="50" height="50" alt="">
    	<img src="assets/bts-font.jpg" width="50" height="50" alt="">
  		</a>
  		<div>
			<a href="admin.php" class="btn btn-secondary">Admin</a>
  			<a href="home.php" class="btn btn-secondary">Home</a>
  			<a href="profile.php" class="btn btn-secondary">Profile </a>
  			<a href="merch.php" class="btn btn-secondary">Discography</a>
			<a href="logout.php" class="btn btn-secondary">Logout</a>
  		</div>
	</header>
	
		<div class="mx-auto" style="width: 1200px" >
			<h3 class="a">HANYA OPERATOR YANG DAPAT MENGAKSES LAMAN INI</h3>
			<h4 class="b">Masukkan Username dan Password Anda sebagai Operator</h5>
			<br>
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "Login gagal! username dan password salah!";
				}else if($_GET['pesan'] == "logout"){
					echo "Anda telah berhasil logout";
				}else if($_GET['pesan'] == "belum_login"){
					echo "Anda harus login untuk mengakses halaman admin";
				}
			}
			?>
	<br/>
	<br/>
			<form method="post" action="login_cek_login.php">
				<table class="table table-dark">
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" placeholder="Masukkan username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password" placeholder="Masukkan password"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" value="LOGIN" class="btn btn-light"></td>
					</tr>
				</table>			
			</form>
		</div>
</body>