<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="script.js"></script>
	<title>uas lab pw</title>
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
			<?php 
//	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<h4 class="b">Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

	<br/>
	<br/>

	
			<h3 class="a">DAFTAR USER WEBSITE</h5>
			<table class="table table-dark">
			  <thead align="center">
			    <tr>
			      <th scope="col">Username</th>
			      <th scope="col">Password</th>
			    </tr>
			  </thead>
		<?php
	
		include('koneksiadmin.php');
		
		
		$query = mysqli_query($connection, "SELECT * FROM akun ORDER BY id ASC") or die(mysqli_error($connection));
		
		
		if(mysqli_num_rows($query) == 0){
			
		
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	

			$no = 1;	
			while($data = mysqli_fetch_assoc($query)){	
				echo '<tr>';	
					echo '<td>'.$data['username'].'</td>';
					echo '<td>'.$data['password'].'</td>';	
					echo '<td><button class="btn btn-light"><a href="editadmin.php?id='.$data['id'].'">Edit</button></a> / <button class="btn btn-light"><a href="hapusadmin.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Delete</a></button></td>';
				echo '</tr>';
				
	
			}	
		}
		?>
			</table>
			<p>
				<button class="btn btn-light"><a href="tambahadmin.php">[+] Tambah Data</a></button>
			</p>
			<p>
				<button class="btn btn-light text-white"><a href="logoutadmin.php">LOGOUT</a></button>
			</p>
		</div>

        </body>
        </html>