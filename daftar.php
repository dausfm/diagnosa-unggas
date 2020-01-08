<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrasi</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<style>
		body{
			background-image: url(img/ayam.jpg);
			background-size: cover;
		}
		a{
			text-decoration: none;
			color: white;
		}
		a:hover{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	
<div class="container">
	<!-- jombo tron -->
	<div class="kepala" >
		<center>
			<img src="img/burung2.jpg" class="img-circle">
			<h2>SELAMAT DATANG DI FORM REGISTRASi</h2>
			<p>Sistem Pakar | Informatika D</p>
		</center>
	</div>
	<!-- akhir jumbo tron -->

	<!-- form daftar -->
	<center>
	<div class="daftar">
	<form action="proses_daftar.php" method="POST">	
		<table >
        <tr>
          <td>ID</td>
          <td><input type="text" name="id" id="id" class="form-control" required autofocus></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" class="form-control" required></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" class="form-control" required></td>
        </tr>
        <tr>
          <td>Level</td>
          <td>
            <input type="radio" name="level" value="user" require>User
            <input type="radio" name="level" value="pakar"  style=" margin-left: 30px" require>pakar
          </td>
        </tr>
      </table>
      <input type="submit" name="daftar" value="Daftar" class="btn btn-primary">      
      <button class="btn btn-danger"><a href="index.php" >Kembali</a></button>
	</form>	
	</div>
	</center>
	
	<!-- akhir form daftar -->

	<!-- catatan kaki -->
	
	<!--  -->
</div>

</body>
</html>