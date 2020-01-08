<?php 
session_start();

include '../functions.php';

$id = $_GET["id"];

if( hapuspenyakit($id)>1 ){
	echo "
		<script>
			alert('data berhasil gagal!');
			document.location.href = 'tabelpenyakit.php';
		</script>
	";
}else{
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href='tabelpenyakit.php';
		</script>
	";
}

?>