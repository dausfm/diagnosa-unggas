<?php
session_start();
include('../functions.php');
$no = $_SESSION['no'];
$jawaban = $_POST['jawaban'];

$query = mysqli_query($konek,"SELECT * FROM gejala where no = '$no' ");
$data = mysqli_fetch_array($query);
$row = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM gejala"));

$tambah = $data['id'];

if($jawaban == $data['jawaban']){
	$_SESSION['kd'] = $_SESSION['kd'].$tambah;
	$_SESSION['no']++;
}else{	
	$_SESSION['kd'] = $_SESSION['kd']."";
	$_SESSION['no']++;
}

if($no < $row){
	header("location:index.php");
}else{
	header("location:hasil.php");
}
?>

<?php  ?>
