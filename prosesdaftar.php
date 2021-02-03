<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM akun WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
    echo "<script> alert('Akun sudah terdaftar!') </script>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO akun VALUES (NULL, '$username', '$pass')";
       $simpan = $db->query($data);
       if($simpan) {
        echo "<script> alert('Data Berhasil di Tambahkan!') </script>";
         header('location:home.php'); 
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>
<meta http-equiv="refresh" content="2;url=login.php">