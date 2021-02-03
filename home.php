<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

	<br>
	<h3 class="a">Selamat Datang di Website BTS Resmi</h3>
	<h4 class="b">Semua tentang BTS ada disini</h4>
	<div class="container" width="100px" height="245px">
		<h5 >ABOUT BTS</h5>
		<p class="about">BTS, akronim dari Bangtan Sonyeondan atau "Beyond the Scene", adalah boyband Korea Selatan yang telah menangkap hati jutaan penggemar secara global sejak debut mereka pada Juni 2013. Anggota BTS adalah RM, Jin, SUGA, j- harapan, Jimin, V dan Jung Kook. Mendapatkan pengakuan dari musik mereka yang otentik, yang diproduksi sendiri dan penampilan terbaik dengan cara mereka berinteraksi dengan penggemar mereka, band ini telah memantapkan diri mereka sebagai superstar global yang memecahkan banyak rekor dunia. Sementara memberikan pengaruh positif melalui kegiatan seperti kampanye LOVE MYSELF dan pidato 'Speak Yourself' PBB, BTS telah memobilisasi jutaan penggemar di seluruh dunia (bernama ARMY), memuncaki tangga lagu musik terkemuka, menjual tur di seluruh dunia termasuk stadion dan telah terjual habis. dinamai sebagai salah satu TIME 100: The Most Influential People of 2019 Billboard Music Awards dan American Music Awards.</p>
	</div>
	<br>
	<br>
	<div id="poto" align="center">
		<div>
			<img src="assets/btsbillboard1.jpg" width="600" height="400">
			<hr>
			<div class="badge badge-primary text-wrap"><p class="explain">Foto diatas diambil saat BTS menjadi tamu di acara Billboard Music Awards 2019</p></div>
		</div>
		<hr>
		<div>
			<img src="assets/btstourls.jpg" width="600" height="400">
			<hr>
			<div class="badge badge-primary text-wrap" ><p class="explain">Foto diatas diambil melalui salah satu fans yang mengunjungi Tour Love Yourself 2019</p></div>
		</div>
	</div>	
	<br>
	<div class="container">
		<h5>Video di bawah merupakan sedikit cuplikan dari video BTS</h5>
	</div>
	<br>
	<div align="center">
		<div class="badge badge-primary text-wrap" ><p class="explain">BTS " FAKE LOVE " Official Teaser 2 </p></div>
		<br>
		<br>
  		<iframe width="560" height="315" src="https://www.youtube.com/embed/2tDKp41nrw8?start=7" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  		<br>
  		<br>
  		<div class="badge badge-primary text-wrap" ><p class="explain">BTS " FIRE " Official Teaser </p></div>
		<br>
		<br>
  		<iframe width="560" height="315" src="https://www.youtube.com/embed/QH7LfLSVoW0?start=7" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  	</div>
  	<br>
  	<div class="alert alert-secondary" role="alert" align="center">
  		<h4 class="alert-heading">Want More?!</h4>
 		 <p>Click on Profile to see More of BTS's profile, or clik on Discography to see BTS's Albums</p>
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