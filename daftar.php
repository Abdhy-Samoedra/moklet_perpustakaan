<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form class="box" action="" method="post">
      <h1>Daftar</h1>
      <input type="text" name="nama" placeholder="Nama Anggota">
      <input type="text" name="kelas" placeholder="Kelas">
      <input type="text" name="telp" placeholder="Telp">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="int" name="level" placeholder="level">
      <input type="submit" name="simpan" value="Simpan">
    </form>
  </body>
</html>
<?php
include 'config.php';
if(@$_POST['simpan']){
  $nama = @$_POST['nama'];
  $kelas = @$_POST['kelas'];
  $telp = @$_POST['telp'];
  $username = @$_POST['username'];
  $password = md5('$password');
  $level = @$_POST['level'];




  $query = mysqli_query($koneksi, "INSERT INTO `t_anggota` (nama,kelas,telp,username,password,id_level)
  VALUES ('$nama','$kelas','$telp','$username','$password','$level')");


    if($query){
      echo "<div class='box'>
            <h5> Berhasil registrasi akun </h5>
            <br/> Klik untuk <a href='regist.php'>Login</a>
            </div>";
    }else{
      echo "data gagal di input";
    }
}
 ?>
