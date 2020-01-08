<?php 
session_start();


include '../functions.php';
// apakah tombol submit sudah ditekan?
if( isset($_POST["submit"]) ){
	// cek apakah data berhasil dimasukkan atau tidak
	if (tambahpenyakit($_POST) > 0 ){
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'tabelpenyakit.php';
				</script>";
	}else{
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'tabelpenyakit.php';
				</script>";
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
	</style>
</head>
<body>
	<div class="tabel">
	<h1 class="alert alert-success">Tambah Data Penyakit </h1>
		<center>
	<form action="" method="post">
		<table>
			
			<tr>								
				<td><label for = "batas_atas">Kode</label></td>
				<td><input type="text" name="kode" id="batas_atas" required autocomplete="off"></td>
			</tr>
			<tr>								
				<td><label for = "penyakit">Penyakit</label></td>	
				<td><input type="text" name="penyakit" id="penyakit" required autocomplete="off"></td>
			</tr>
			<tr>								
				<td><label for = "solusi">Solusi</label></td>		
				<td>
					<textarea name="solusi" id="solusi" required></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><button type="submit" name="submit" class="btn btn-primary">Tambah Data!</button></center>
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