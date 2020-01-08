<?php 
session_start();
	if( isset($_SESSION["login"]) ){
	header("Location : index.php");
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
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
			<h2>SELAMAT DATANG DI FORM LOGIN</h2>
			<p>Sistem Pakar | Informatika D</p>
		</center>
	</div>
	<!-- akhir jumbo tron -->
	<!-- form login -->
	<center>
	<div class="login ">
		<form action="proses_login.php" method="POST">
		<div class="form-group">
                <label for="exampleInputName2">ID</label>
                <input type="text" class="form-control" id="exampleInputName2" name="user" placeholder="masukkan ID" autofocus autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail2" placeholder="password">
            </div>
            <br>
            <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
            <br>
            <br>
            <p>atau</p>
            <a href="daftar.php" class="btn btn-primary" value="">DAFTAR</a>
            
        </form>
	</div>
	</center>
	<!-- akhir form login -->
</div>
</body>
</html>