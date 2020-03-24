<?php
session_start();

    if(!isset($_SESSION['username'])){
      header("Location: regist.php?access_denied");
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>User Page</title>

    <style>
    .welcome{
      color: #2345aa;
      font-size: 35pt;
      font-weight: 900;
    }
    .navbar-nav{
      font-style: italic;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
      <div class="navbar-nav">
      <a class="navbar-brand" href="#">Beranda</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
       aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <a href="buku/tampil_buku.php" class="nav-item nav-link">Book</a>
          <a href="#" class="nav-item nav-link">Profile</a>
       </div>
       <form class="form-inline ml-auto">
        <div class="navbar-nav">
          <a href="logout.php" class="nav-item nav-link active">Anggota</a>
        </div>
       </form>
    </div>
  </nav>

    <h1 class="welcome"> Selamat Datang Anggota<?php echo $_SESSION['username'];?></h1>
    <h2> <a href="logout.php">Klik untuk Logout</a> </h2>
  </body>
</html>
