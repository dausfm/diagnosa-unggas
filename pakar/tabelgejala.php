<?php 
session_start();

// if( !isset($_SESSION["login"]) ){
// 	header("Location:");
// 	exit;
// }

include '../functions.php';
$gejala = query("SELECT * FROM gejala");
// tombol cari di klik
if ( isset($_POST["cari"]) ){
	$gejala = carigejala($_POST["keyword"]);
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>gejala</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<style>
	body{
			background-image: url(../img/ayam.jpg);
			background-size: cover;
		}
		.table{
			width: 700px;
			margin: auto;
			background-color: #eee;
			padding: 20px;
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

	<div class="table">
		<button class="btn btn-primary"><a href="index.php">Kembali</a></button>
	<h2 class="alert alert-success">DAFTAR GEJALA</h2>
	<button class="btn btn-danger"><a href="logout.php">Logout</a></button>	
	<button class="btn btn-success"><a href="tambahgejala.php">Tambah</a></button>	
	<br><br>
<!-- <form action="" method="post">
		<table style="padding: 0px;">
			<tr>
				<td><input type="text" name="keyword" size="30" autofocus placeholder="masukkan nama pencarian" autocomplete="off">	</td>
				<td><button type="submit" name="cari">Cari!</button></td>
			</tr>
		</table>
</form>
 -->	
	<table border="1" cellspacing="0" cellpadding="10" class="table">	
		<tr>
			<th>No.</th>
			<th>Id</th>
			<th>Gejala</th>
			<th>Jawaban</th>			
			<th>Aksi</th>
		</tr>
<?php $i=1; ?>
<?php 

 ?>
	<?php foreach($gejala as $row) : ?>	
		<tr >
			<td><?= $i; ?>  </td>
			<td><?= $row["id"]; ?>  </td>
			<td><?= $row["pertanyaan"]; ?>  </td>
			<td><?= $row["jawaban"]; ?>  </td>			
			<td>
				<button class="btn btn-primary" style="margin: 0px 10px;"><a href="ubahgejala.php?no=<?= $row["no"]; ?>">ubah</a></button>
				<button class="btn btn-danger"><a href="hapusgejala.php?id=<?= $row["no"]; ?>">hapus</a></button>
			</td>
		</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>
</div>

</body>
</html>