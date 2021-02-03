<?php

if(isset($_POST['simpan'])){
	
	
	include('koneksiadmin.php');
	
	
	$id			= $_POST['id'];	
    $username	= $_POST['username'];	
	$password	= $_POST['password'];	

	$update = mysqli_query($connection, "UPDATE akun SET username='$username', password='$password' WHERE id='$id' ") or die(mysqli_error($connection));
	
	
	if($update){
		echo "<script> alert('Data Berhasil di Simpan !') </script>";
	
		
	}else{
		
		echo 'Gagal menyimpan data! ';			
		
	}

}else{	
	
	echo '<script>window.history.back()</script>';

}
?>
<meta http-equiv="refresh" content="2;url=tabel.php">