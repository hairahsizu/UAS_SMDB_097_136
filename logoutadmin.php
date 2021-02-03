<?php 


session_destroy();


header("location:admin.php?pesan=logout");
?>
<meta http-equiv="refresh" content="2;url=admin.php">