<?php 
	session_start();
	if( isset($_SESSION["login"]) ){
	header("Location: ../index.php");
	exit;
	}

	
	include '../functions.php';
	$id = $_SESSION['user'];
	$query = mysqli_query($konek, "SELECT * FROM user WHERE id = '$id' ");
	$data = mysqli_fetch_array($query);	

	// if( isset($_POST["simpan"]) ){
	// 	if (inputnilai($_POST) > 0){
	// 		echo "
	// 		<script>
	// 			alert('nilai berhasil diinput!');
	// 			document.location.href = 'hasil.php';
	// 		</script>
	// 		";
	// 	}else{
	// 		echo "
	// 		<script>
	// 			alert('nilai gagal di input!');
	// 			document.location.href = 'hasil.php';
	// 		</script>
	// 		";
	// 	}
	// }
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SISTEM PAKAR</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<style>
		body{
			background-image: url(../img/ayam.jpg);
			background-size: cover;
		}
		.table{
			width: 500px;
		}
		.tabell{
            width: 700px;
            margin: 100px auto;
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
	<div class="tabell">
	<form action="" method="POST">
	<center>
		<h1 class="alert alert-success">SELAMAT DATANG DI MENU HASIL</h1>
		<h4><u>INI ADALAH HASIL DARI DIAGNOSA</u></h4>

	<div class="tabel">
		<table class="table" >
			<tr>
				<td>ID</td>
				<td><?= $data['id']; ?>  </td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><?= $data['nama']; ?>  </td>
			</tr>
			<tr>
				<td>KODE</td>
				<td><?= $_SESSION['kd']; ?>  </td>
				<?php 
				mysqli_query($konek, "UPDATE user SET hasil = '$_SESSION[kd]' WHERE id= '$data[id]' ")

				 ?>
			</tr>
			<tr>
			<?php 
				$penyakit = mysqli_fetch_array(mysqli_query($konek, "SELECT * FROM saran WHERE kode = '$_SESSION[kd]' "));
				$nyakit = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM saran WHERE kode = '$_SESSION[kd]' "));
				if($nyakit>0){
					
					echo "
					<td>Penyakit</td>
					<td>";
					echo $penyakit['penyakit'];
					echo "
					<tr>
					</td>
					<td>solusi</td>
					<td>";
					echo $penyakit['solusi'];
					echo "</td></tr>";								
				}else{
					echo "<td>Penyakit</td>
					<td>Data tidak terdaftar  </td>
					</tr>
					<td>solusi</td>
					<td>data tidak terdaftar</td>
					</tr>
					";
				}
			?>
				<!-- <td>Penyakit</td>
				<td><?= $penyakit[penyakit]; ?>  </td>
			</tr>
			<tr>
				<td>Solusi</td>
				<td><?= $penyakit[solusi]; ?> </td>
			</tr> -->
		</tr>
		</table>
		</div>
				 
		 <br>		 
		 <br>		 
		 <br>
		<!-- <button type="submit" name="simpan">SIMPAN!</button> -->
		
		 <br><br>
		 <button class="btn btn-danger"><a href="logout.php">Logout</a></button>
		 <!-- <button class="btn btn-danger"><a href="cetak.php">Cetak</a></button> -->
	</center>
	</form>
</div>
</body>
</html>