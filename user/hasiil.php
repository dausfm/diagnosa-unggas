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
				<td>NILAI</td>
				<td><?= $data['hasil']; ?>  </td>
			</tr>
			<tr>
			<!-- <?php 
				$penyakit = mysqli_fetch_array(mysqli_query($konek, "SELECT * FROM saran WHERE kode = '$_SESSION[kd]' "));
				$nyakit = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM saran WHERE kode = '$_SESSION[kd]' "));
				if($penyakit>0){
					
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
					<td>Penyakit</td>
					<td>data tidak terdaftar</td>
					</tr>
					";
				}
			?> -->
			<?php 
				$yakit=mysqli_query($konek, "SELECT * FROM saran WHERE kode = '$data[hasil]' ");
				$penyakit = mysqli_fetch_array($yakit);
				// $nyakit = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM saran WHERE kode = '$_SESSION[hasil]' "));
				$_SESSION["penya"]=$penyakit['penyakit'];
				$_SESSION["soslu"]=$penyakit['solusi'];
				if($penyakit>0){
					
					echo "
					<td>Penyakit</td>
					<td>";
					echo $_SESSION["penya"];
					echo "
					<tr>
					</td>
					<td>solusi</td>
					<td>";
					echo $_SESSION['soslu'];
					echo "</td></tr>";								
				}else{
					echo "<td>Penyakit</td>
					<td>Data tidak terdaftar  </td>
					</tr>
					<td>Penyakit</td>
					<td>data tidak terdaftar</td>
					</tr>
					";
				}
			?>
			</tr>
		</table
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