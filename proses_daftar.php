<?php 
include('functions.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$level = $_POST['level'];

$query = mysqli_query($konek, "INSERT INTO user (id,nama,password,level) VALUES ('$id','$nama','$password','$level')");
if ($query) {
		// header("refresh:0;url=index.php");
	echo "<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
				</script>";
} else {
		// header("refresh:0;url=daftar.php");
	echo "<script>
				alert('data gagal ditambahkan/ID sudah ada');
				document.location.href = 'daftar.php';
				</script>";
}
?>