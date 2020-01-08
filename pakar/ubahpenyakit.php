<?php 
session_start();

include '../functions.php';
// ambil data dari url menggunakan $_GET
$id = $_GET['id'];
// query data mahasiswa berdasarkan id
$sakit = query2("SELECT * FROM saran WHERE id = $id")[0];

if( isset($_POST["submit"]) ){
	// cek apakah data berhasil diubah atau tidak
	if (ubahpenyakit($_POST) > 0){
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'tabelpenyakit.php';
			</script>
			";
	}else{
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'tabelpenyakit.php';
			</script>
		";
	}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>input penyakit</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<style>
	body{
			background-image: url(../img/ayam.jpg);
			background-size: cover;
		}
	table tr td{
		margin-right: 20px;
	}
	label{
		margin-right: 20px;
	}
	a{
		text-decoration: none;
		color: white;
	}
	.tabel{
		width: 500px;
		margin:50px auto;	
		background-color: #eee;
		padding: 20px;
	}
	button{
		/*width: 100%;*/
	}
	</style>
</head>
<body>
	<div class="tabel">
	<h1 class="alert alert-success text-center">Ubah Data Penyakit </h1>
		<center>
	<form action="" method="post">
		<table>
			<input type="hidden" name="id" value=" <?= $sakit["id"]; ?> ">
			<tr>				
				<td><label for = "batas_bawah">Kode </label></td>								
				<td><input type="text" name="kode" id="batas_bawah" value="<?= $sakit["kode"]; ?>" ></td>
			</tr>			
			<tr>								
				<td><label for = "penyakit">Penyakit</label></td>	
				<td><input type="text" name="penyakit" id="penyakit" value="<?= $sakit["penyakit"]; ?>" ></td>
			</tr>
			<tr>								
				<td><label for = "solusi">Solusi</label></td>		
				<td>
					<textarea name="solusi" id="solusi" required><?= $sakit["solusi"]; ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><button type="submit" name="submit" class="btn btn-primary">Ubah Data!</button></center>
				</td>									
			</tr>
			<tr>
				<td colspan="2"><br></td>
			</tr>
			<tr>
				<td colspan="2">
					<center><button type="submit" class="btn btn-success"><a href="tabelpenyakit.php">Kembali</a></button></center>				
				</td>
			</tr>
		</table>
	</form>
	</center>
	</div>
</body>
</html>