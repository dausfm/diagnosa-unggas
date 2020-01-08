<?php 
session_start();


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link href="../css2/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="../css/style.css"> -->
	<style>
		div{
			/*padding:  10px;*/
		}
		body{
			background-image: url(../img/ayam.jpg);
			background-size: cover;
		}
		.container{
			background-color: grey;
			width: 900px;
		}
		img{
			width: 150px;	
			border-radius: 50%;
			/*margin-left: 20px;*/
			margin-bottom: 20px;			
		}
		button{			
			width: 150px;		
		}
		.tabel{
			width: 500px;
			margin:50px auto;	
			background-color: #eee;
			padding: 20px;		
		}		
		.tombol button{
			padding: auto;
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
	<div class="tabel">
	<h1 class="alert alert-success">selamat di form pakar</h1>
	<center>
		<img src="../img/burung2.jpg" class="img-circle">
		<p>Sistem Pakar | Informatika D</p>
		<br>
	<button class="btn btn-default btn-primary"><a href="tabelpenyakit.php">table penyakit</a></button>	
		<button class="btn btn-default btn-primary"><a href="tabelgejala.php">table gejala</a></button>	
	</center>				
	</div>

</body>
</html>