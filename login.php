<!-- otomatis ke laman login -->
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <style>
    /*css instyle */
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
<br>
  <div class="mx-auto" style="width: 1200px">
  <title>Form Login</title>
  <div align='center'>
  <br><br>
  <img src="assets/bts-logo.jpg" width="70" height="70" alt="">
  <br>
    <form class="form-signin" method="post" action="proseslogin.php">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <br>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
      <br>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" name="remember"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-secondary btn-block" type="submit" name="login">Sign in</button>
    <a href="daftar.php" class="btn btn-lg btn-secondary btn-block">Register</a>
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