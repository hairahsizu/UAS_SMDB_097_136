<!-- otomatis ke laman login -->
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:login.php'); }
?>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <style>
  body {
    padding: 25px;
    background-color: white;
    color: black;
    font-size: 25px;
  }

  .dark-mode {
    background-color: black;
    color: white;
  }
  </style>
  <div class="mx-auto" style="width: 1200px">
  <br><br>
  <title>Form Register</title>
  <div align='center'>
    <form action="prosesdaftar.php" method="post">
      <table cellpadding="3" cellspacing="0" align="center" class="table table-dark">
        <tbody>
          <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
          <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
          <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
          <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
          <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
        </tbody>
      </table>
    </form>
    <button type="button" class="btn btn-dark " onclick="myFunction()">Toggle dark mode</button>

    <script>
      function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
      }
    </script>
  </div>
</body>