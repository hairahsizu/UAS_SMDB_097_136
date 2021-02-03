<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="script.js"></script>
	<title>uts lab pw</title>
</head>
<body >
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
<div class="mx-auto" style="width: 1200px">
			<h3 class="a">Tambah Data User</h5>
	
	<form action="tambahadminproses.php" method="post">
		<table cellpadding="3" cellspacing="0" align="center" class="table table-dark">
            <tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="id" size="30" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" size="30" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password" size="30" required></select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah" class="btn btn-light"></td>
			</tr>
		</table>
	</form>
	</div>
    
    </body>
</html>