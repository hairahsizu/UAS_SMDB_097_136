<?php

if(isset($_GET['id'])){
	
	
	include('koneksiadmin.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysqli_query($connection, "SELECT id FROM akun WHERE id='$id'") or die(mysql_error($connection));
	
	
	if(mysqli_num_rows($cek) == 0){
		
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysqli_query($connection,"DELETE FROM akun WHERE id='$id'");
		
		
		if($del){
			echo "<script> alert('Data Berhasil di Hapus!') </script>";
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="tabel.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	echo '<script>window.history.back()</script>';
	
}
?>
<meta http-equiv="refresh" content="2;url=tabel.php">