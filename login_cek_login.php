<?php 

session_start();

include 'login_koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$data = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");


$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:tabel.php");
}else{
	header("location:admin.php?pesan=gagal");
}
?>