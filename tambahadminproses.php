<?php

if(isset($_POST['tambah'])){
	
	
	include('koneksiadmin.php');
	
    $id             = $_POST['id'];
	$username		= $_POST['username'];
	$password		= $_POST['password'];		

	$input = mysqli_query($connection,"INSERT INTO akun VALUES('$id', '$username', '$password')") or die(mysql_error($connection));
	
	
	if($input){
		
	echo "<script> alert('Data Berhasil di Tambahkan!') </script>";
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambahadmin.php">Kembali</a>';	
		
	}

}else{	
	echo '<script>window.history.back()</script>';

}
?>
<meta http-equiv="refresh" content="2;url=tabel.php">