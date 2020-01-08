<?php 
session_start();

include '../functions.php';

$id = $_GET["id"];

if( hapusgejala($id)>1 ){
	echo "
		<script>
			alert('data berhasil gagal!');
			document.location.href = 'tabelgejala.php';
		</script>
	";
}else{
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href='tabelgejala.php';
		</script>
	";
}

?>