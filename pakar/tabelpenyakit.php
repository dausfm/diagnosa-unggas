<?php 
session_start();

 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>tabel penyakit dan solusi</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="../css/style.css"> -->
	<style>
	body{
			background-image: url(../img/ayam.jpg);
			background-size: cover;
		}
		.table{
			width: 800px;			
			margin: auto;					
			background-color: #eee;
			padding: 20px;
			box-sizing: border-box;

		}
		button{

		}		
		table{
			/*box-sizing: border-box;*/
			width: 790px;
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
	
	<div class="table" >
		<button class="btn btn-primary"><a href="index.php">Kembali</a></button>
	<h2 class="alert alert-success">DAFTAR PENYAKIT</h2>
	<button class="btn btn-danger"><a href="logout.php">Logout</a></button>
	<button class="btn btn-success"><a href="tambahpenyakit.php">Tambah</a></button>	
	<br>
	<br>
	<table border="1" cellspacing="0" cellpadding="10" class="table">	
		<tr>
			<th>No.</th>			
			<th>Kode</th>			
			<th>Penyakit</th>
			<th>Solusi</th>
			<th>Aksi</th>
		</tr>
<?php 
include '../functions.php';
$saran = query2("SELECT * FROM saran");
?>
<?php $i=1; ?>
	<?php foreach($saran as $row2) : ?>	
		<tr >
			<td><?= $i; ?>  </td>						
			<td><?= $row2["kode"]; ?>  </td>			
			<td><?= $row2["penyakit"]; ?></td>
			<td><?= $row2["solusi"]; ?>  </td>
			<td>				
				<input class="btn btn-primary" type="button" onclick="document.location.href='ubahpenyakit.php?id=<?= $row2["id"]; ?>'" value="ubah" style="margin: 5px 0px;">

				<button class="btn btn-danger"><a href="hapuspenyakit.php?id=<?= $row2["id"]; ?> " onclick="return confirm('apakah anda ingin menghapus data ini?');">hapus</a></button>
			</td>
		</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>
</div>
	


</body>
</html>