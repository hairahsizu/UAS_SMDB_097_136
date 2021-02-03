<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<script src="script.js"></script>
	<title>profile</title>
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
  			<a href="profile.php" class="btn btn-secondary">Profile</a>
  			<a href="merch.php" class="btn btn-secondary">Discography</a>
			<a href="logout.php" class="btn btn-secondary">Logout</a>
		</div>
	</header>
	<br>
	<br>
	<div align="center">
		<img src="assets/btsbighit.jpg" width="1060" height="358">
		<br>
		<br>
		<img src="assets/btsbighit1.png" width=50% height=50%>
	</div>
	<br>
	<br>

	<div class="member" align="center">
	<div class="containera">
		<div class="about">BTS memiliki 7 anggota grup yang bernama Kim Nam Joon, Kim Seok Jin, Min Yoon Gi, Jung Ho Seok, Park Ji Min, Kim Tae Hyung dan Jeon Jung Kook.</div>
        <div class="row">
			<div class="col-sm-3">
				<div class="kotak">
					<div class="col-sm">
						<a class="gambarMember" >
							<img src="assets/bts1rm.jpg" alt="gambar">
						</a>
						<div class="namaMember">
							<a>Kim Nam-Joon</a>
						</div>
						<div >RM<br>12 September 1994<br>Leader, Rapper</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="kotak">
					<div class="col-sm">
						<a class="gambarMember" >
							<img src="assets/bts1jin.jpg" alt="gambar">
						</a>
						<div class="namaMember">
							<a>Kim Seok-Jin</a>
						</div>
						<div >Seok-Jin<br>4 Desember 1992<br>Vocalist</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="kotak">
					<div class="col-sm">
						<a class="gambarMember" >
							<img src="assets/bts1suga.jpg" alt="gambar">
						</a>
						<div class="namaMember">
							<a>Min Yoon-Gi</a>
						</div>
						<div>SUGA<br>9 Maret 1993<br>Rapper</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="kotak">
					<div class="col-sm">
						<a class="gambarMember" >
							<img src="assets/bts1jhope.jpg" alt="gambar">
						</a>
						<div class="namaMember">
							<a>Jung Ho-Seok</a>
						</div>
						<div>J-Hope<br>18 Februari 1994<br>Rapper</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="kotak">
					<div class="col-sm">
						<a class="gambarMember" >
							<img src="assets/bts1jimin.jpg" alt="gambar">
						</a>
						<div class="namaMember">
							<a>Park Ji-Min</a>
						</div>
						<div>Jimin<br>13 Oktober 1995<br>Vocalist</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="kotak">
					<div class="col-sm">
						<a class="gambarMember" >
							<img src="assets/bts1v.jpg" alt="gambar">
						</a>
						<div class="namaMember">
							<a>Kim Tae-Hyung</a>
						</div>
						<div>V<br>30 Desember 1995<br>Vocalist</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="kotak">
					<div class="col-sm">
						<a class="gambarMember" >
							<img src="assets/bts1jk.jpg" alt="gambar">
						</a>
						<div class="namaMember">
							<a>Jeon Jung-Kook</a>
						</div>
						<div>Jung-Kook<br>1 September 1997<br>Vocalist</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
    </div>
 	<br>
 	<footer class="footer">
		<div class="alert alert-dark" role="alert">
 		 Go To BTS Official <a href="https://ibighit.com/bts/eng/" class="alert-link">Website</a>
		</div>
		<div class="alert alert-dark" role="alert">
 		 Go To BTS Official <a href="https://www.instagram.com/bts.bighitofficial/?hl=id" class="alert-link">Instagram</a>
		</div>
		<div class="alert alert-dark" role="alert">
 		 Go To BTS Official <a href="https://twitter.com/BTS_twt" class="alert-link">Twitter</a>
		</div>
	</footer>
</body>
</html>