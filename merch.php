<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="script.js"></script>
	<title>album</title>
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
	<br>
	<br>
	<div align="center">
		<img src="assets/btsbe.jpg" width="50%" max-height="450px"><br>
	</div>
	<br>
	<div class="container">
		<p>Boy grup Korea Selatan BTS telah merilis tujuh album studio (satu di antaranya diterbitkan kembali dengan judul yang berbeda), empat album kompilasi dan enam drama diperpanjang. Pada bulan Desember 2018, BTS melampaui 10 juta album terjual, menetapkan rekor untuk mencapai 10 juta tonggak dalam rentang waktu terpendek (5½ tahun) di antara semua artis Korea yang telah debut sejak tahun 2000, dengan 5 juta dari album tersebut dijual di Korea Selatan. Korea pada tahun 2018 saja. Pada April 2020, BTS telah menjual lebih dari 20 juta album fisik dalam waktu kurang dari 7 tahun, menjadikannya penjual album tertinggi Korea sepanjang masa.</p>
	</div>
	<br>
	<!--
	<div align="center">
	<div class="badge badge-primary text-wrap"><p class="explain">Silahkan klik album dibawah jika anda ingin untuk membelinya.</p></div>
	</div> 
	-->
	<br>
	<!--
	<div id="potobts" align="center">
		<a onclick="myFunction1()"><img src="assets/mots7.jpg" width="320px" height="319px" right="20px"></a>
		<a onclick="myFunction2()"><img src="assets/motsp.jpg" width="320px" height="319px">
		<a onclick="myFunction3()"><img src="assets/lya.jpg" width="320px" height="319px">
		<a onclick="myFunction4()"><img src="assets/lyt.jpg" width="320px" height="319px">
		<br>
		<br>
		<a onclick="myFunction5()"><img src="assets/lyh.jpg" width="320px" height="319px">
		<a onclick="myFunction6()"><img src="assets/ynwa.jpg" width="320px" height="319px">
		<a onclick="myFunction7()"><img src="assets/wings.jpg" width="320px" height="319px">
	</div>
	-->
	<div class="member" align="center">
		<div class="containera">
			<div class="row">
				<div class="col-sm-3">
					<div class="kotak">
						<div class="col-sm">
							<a class="gambarMember" >
								<img src="assets/be.jpg" alt="gambar">
							</a>
							<div class="namaMember">
								<a>BE</a>
							</div>
							<div >20 November 2020</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="kotak">
						<div class="col-sm">
							<a class="gambarMember" >
								<img src="assets/mots7.jpg" alt="gambar">
							</a>
							<div class="namaMember">
								<a>MAP OF THE SOUL - 7</a>
							</div>
							<div >7 February 2020.</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="kotak">
						<div class="col-sm">
							<a class="gambarMember" >
								<img src="assets/motsp.jpg" alt="gambar">
							</a>
							<div class="namaMember">
								<a>MAP OF THE SOUL - PERSONA</a>
							</div>
							<div>12 April 2019</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="kotak">
						<div class="col-sm">
							<a class="gambarMember" >
								<img src="assets/lya.jpg" alt="gambar">
							</a>
							<div class="namaMember">
								<a>LOVE YOURSERLF - ANSWER</a>
							</div>
							<div>24 August 2018</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<div class="kotak">
						<div class="col-sm">
							<a class="gambarMember" >
								<img src="assets/lyt.jpg" alt="gambar">
							</a>
							<div class="namaMember">
								<a>LOVE YOURSELF - TEAR</a>
							</div>
							<div >18 May 2018</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="kotak">
						<div class="col-sm">
							<a class="gambarMember" >
								<img src="assets/lyh.jpg" alt="gambar">
							</a>
							<div class="namaMember">
								<a>LOVE YOURSELF - HER</a>
							</div>
							<div >18 September 2017</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="kotak">
						<div class="col-sm">
							<a class="gambarMember" >
								<img src="assets/ynwa.jpg" alt="gambar">
							</a>
							<div class="namaMember">
								<a>YOU NEVER WALK ALONE</a>
							</div>
							<div>13 February 2017</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="kotak">
						<div class="col-sm">
							<a class="gambarMember" >
								<img src="assets/wings.jpg" alt="gambar">
							</a>
							<div class="namaMember">
								<a>WINGS</a>
							</div>
							<div>10 October 2016</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<footer>
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